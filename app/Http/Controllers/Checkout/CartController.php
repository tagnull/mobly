<?php

namespace App\Http\Controllers\Checkout;

use Illuminate\Http\Request;
use App\Models\Items\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    
    var $html = [];
    var $result = [];
    
    public function __construct()
    {
        $this->result = [
            'quantity' => 0,
            'total' => 0,
        ];
        $this->html = [
            'html_cart_widget' => "<ul class='list-unstyled'><li class='single-cart-item media'><div class='shopping-cart-title media-body'><h3>".__('html.cart.empty.title')."</h3><p>".__('html.cart.empty.description')."</p></div></li></ul>",
            'html_cart' => "<div class='shopping-cart-title media-body'><h3>".__('html.cart.empty.title')."</h3><p>".__('html.cart.empty.description')."</p></div>",
            'html_checkout' => "<div class='product-container'><div class='shopping-cart-title media-body'><h3>".__('html.cart.empty.title')."</h3><p>".__('html.cart.empty.description')."</p></div></div>",
            'html_wishlist' => "<div class='shopping-cart-title media-body'><h3>".__('html.wishlist.empty.title')."</h3><p>".__('html.wishlist.empty.description')."</p></div>",
        ];
    }
    
    public function index(Request $request)
    {
        $content = [];
        if($request->hasCookie('cart')) {
            $content = unserialize(Cookie::get('cart'));
            if($content) {
                $this->generate_html($content, $this->retrieve_data($content));
            }
        }
        return $this->cart_json();
    }

    public function create(Request $request)
    {
        $product = (int) $request->get('product');
        $quantity = (int) $request->get('quantity');
        
        // Unserialize the cookie
        $items = [];
        if($request->hasCookie('cart')) {
            $items = unserialize(Cookie::get('cart'));
        }
        
        // If the id exists, update the quantity
        if($quantity <= 0) {
            $quantity = 1;
        }
        if(array_key_exists($product, $items)) {
            $items[$product] += $quantity;
        } else {
            $items[$product] = $quantity;
        }
        
        Cookie::queue(Cookie::forever('cart', serialize($items)));
        return ['status' => 'ok'];
    }

    public function show()
    {
        $products = [];
        $content = unserialize(Cookie::get('cart'));
        if($content) {
            $products = $this->retrieve_data($content);
        }
        
        $cart = [];
        $data = [];
        $total = 0;
        foreach($content as $item=>$quantity) {
            $single_item = $products->where('id', $item)->first();
            $total += ($single_item->price * $quantity);
            $data[] = [
                'quantity' => $quantity,
                'total' => ($single_item->price * $quantity),
                'product' => $single_item,
            ];
        }
        // return ['data' => $data, 'total' => $total];
        return view('shopping.checkout.cart', ['data' => $data, 'total' => $total]);
    }

    public function update(Request $request)
    {
        $product = (int) $request->get('product');
        $quantity = (int) $request->get('quantity');
        
        // Unserialize the cookie
        $items = [];
        if($request->hasCookie('cart')) {
            $items = unserialize(Cookie::get('cart'));
        }
        
        // If the id exists, update the quantity
        if(array_key_exists($product, $items)) {
            if($quantity <= 0) {
                $quantity = 1;
            }
            $items[$product] = $quantity;
        }
        
        Cookie::queue(Cookie::forever('cart', serialize($items)));
        return ['status' => 'ok'];
    }

    public function destroy(Request $request)
    {
        $content = [];
        if($request->hasCookie('cart')) {
            $content = unserialize(Cookie::get('cart'));
            
            $product = (int) $request->get('product');
            if (($key = array_key_exists($product, $content)) !== FALSE) {
                unset($content[$product]);
            }
            
        }
        
        Cookie::queue(Cookie::forever('cart', serialize($content)));
        return ['status' => 'ok'];
    }
    
    public function product(Request $request)
    {
        $product = (int) $request->get('product');
        $product = Product::with(['images', 'features'])->findOrFail($product);
        
        $html = [
            'swiper_slide' => null,
            'thumbnails' => null,
            'name' => null,
            'product_price' => null,
            'product_description' => null,
            'actions' => null,
        ];
        
        if($product->images->count()) {
            foreach($product->images as $image) {
                $html['swiper_slide'] .= '
                    <figure class="swiper-slide">
                        <a href="'.str_replace('341x341', '2000x2000', $image->url).'" data-size="2000x2000">
                            <img src="'.str_replace('341x341', '2000x2000', $image->url).'" alt="'.$image->description.'">
                            <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                        </a>
                        <figcaption class="visually-hidden">
                            <span>'.$image->description.'</span>
                        </figcaption>
                    </figure>
                ';
                $html['thumbnails'] .= '
                    <div class="swiper-slide">
                        <img src="'.$image->url.'" alt="'.$image->description.'">
                    </div>
                ';
            }
        }
        
        $html['name'] = $product->name;
        
        $html['product_price'] = '
            <p><strong>SKU:</strong> '.$product->sku.'</p>
            <span class="price-old">'.$this->currency_format($product->old_price).'</span>
            <span class="price-new">'.$this->currency_format($product->price).'</span>
            <span class="price-discount">'.__('tag.off', ['percent' => $product->off]).'</span>
        ';
        
        $html['product_description'] = '<p>'.$product->summary.'</p>';
        
        $html['actions'] = '
            <div class="product-stock">
                <form action="#">
                    <label>'.__('field.quantity').'</label>
                    <ul class="d-flex flex-wrap align-items-center">
                        <li class="box-quantity">
                            <div class="cart-input">
                                <input id="cart_item_quantity" class="cart-input-box" type="text" value="1">
                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                            </div>
                        </li>
                        <li>
                            <button onclick="Cart.add('.$product->id.', false); return false;" type="button" class="default-btn">'.__('button.add_cart').'</button>
                        </li>
                    </ul>
                </form>
            </div>
            <div class="wishlist-compare">
                <button class="btn-wishlist" onclick="Wishlist.add('.$product->id.', false); return false;" type="button">'.__('button.add_wishlist').'</button>
            </div>
        ';
        
        return $html;
    }
    
    public function cart_json()
    {
        return [
            'amount' => $this->result['quantity'],
            'total' => $this->result['total'],
            'html' => [
                'cart_widget' => $this->html['html_cart_widget'],
                'cart' => $this->html['html_cart'],
                'checkout' => $this->html['html_checkout'],
                'wishlist' => $this->html['html_wishlist']
            ]
        ];
    }
    
    public function retrieve_data($content)
    {
        return Product::whereIn('id', array_keys($content))->get();
    }
    
    public function generate_html($items, $data)
    {
        $total_general = 0;
        $this->result['quantity'] = 0;
        $this->result['total'] = 0;
        
        $html_cart_widget = '';
        $html_cart = '';
        $html_checkout = '';
        $html_wishlist = '';
        foreach($items as $item=>$quantity) {
            $single_item = $data->where('id', $item)->first();
            $total_items = $single_item->price * $quantity;
            $total_general += $total_items;
            $this->result['quantity'] += $quantity;
            
            $html_cart_widget .= $this->generate_html_cart_widget($single_item->id, $single_item->slug, $single_item->name, $single_item->images[0]->url, $quantity, $single_item->price, $total_items);
            $html_cart .= $this->generate_html_cart($single_item->id, $single_item->slug, $single_item->name, $single_item->images[0]->url, $quantity, $single_item->price, $total_items);
            $html_checkout .= $this->generate_html_checkout($single_item->id, $single_item->slug, $single_item->name, $single_item->images[0]->url, $quantity, $single_item->price, $total_items);
            $html_wishlist .= $this->generate_html_wishlist($single_item->id, $single_item->slug, $single_item->name, $single_item->images[0]->url, $quantity, $single_item->price, $single_item->created_at);
        }
        
        // Cart Widget
        if($html_cart_widget) {
            $this->html['html_cart_widget'] = str_replace(['%html_cart_widget%', '%html_total%'], [$html_cart_widget, $this->currency_format($total_general)],
                '<ul class="list-unstyled">%html_cart_widget%</ul>
                <div class="shopping-cart-total">
                    <h4>Total: <span>%html_total%</span></h4>
                </div>
                <div class="shopping-cart-btn">
                    <a class="default-btn" href="'.route('cart.index').'">'. __('menu.cart').'</a>
                    <a class="default-btn" href="'.route('checkout.index').'">'.__('menu.checkout').'</a>
                </div>');
        }
        
        // Cart
        if(strlen($html_cart)) {
            $this->html['html_cart'] = str_replace(['%html_table%', '%html_total%'], [$html_cart, $this->currency_format($total_general)],
                '<div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>'.__('field.image').'</td>
                                <td>'.__('field.name').'</td>
                                <td>'.__('field.quantity').'</td>
                                <td>'.__('field.unity_price').'</td>
                                <td>'.__('field.total').'</td>
                            </tr>
                        </thead>
                        <tbody>%html_table%</tbody>
                    </table>
                </div>
                <div class="cart-amount-wrapper">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4 offset-md-8">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td><strong>'.__('field.total').':</strong></td>
                                        <td><span class="color-primary">%html_total%</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="cart-button-wrapper d-flex justify-content-between mt-4">
                    <a href="'.route('products.index').'" class="btn btn-secondary dark">'.__('menu.continue_shopping').'</a>
                    <a href="'.route('checkout.index').'" class="btn btn-secondary dark align-self-end">'.__('menu.checkout').'</a>
                </div>');
        }
        
        // Checkout
        if(strlen($html_checkout)) {
            $this->html['html_checkout'] = str_replace(['%html_checkout%', '%html_total%'], [$html_checkout, $this->currency_format($total_general)],
                '<div class="product-container">%html_checkout%</div>
                <div class="order-review">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr class="order-total">
                                    <th>'.__('field.total').'</th>
                                    <td class="text-center"><strong><span class="color-primary">%html_total%</span></strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>');
        }
        
        // Wishlist
        if(strlen($html_wishlist)) {
            $this->html['html_wishlist'] = str_replace(['%html_wishlist%', '%html_total%'], [$html_wishlist, $this->currency_format($total_general)],
                '<div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td>'.__('field.image').'</td>
                                <td>'.__('field.name').'</td>
                                <td>'.__('field.total').'</td>
                                <td>'.__('field.date').'</td>
                                <td>'.__('field.actions').'</td>
                            </tr>
                        </thead>
                        <tbody>%html_wishlist%</tbody>
                    </table>
                </div>');
        }
        
        // Total
        $this->result['total'] = $this->currency_format($total_general);
    }
    
    public function generate_html_cart_widget($id, $slug, $name, $image, $quantity, $price, $total)
    {
        return "<li class='single-cart-item media'>
            <div class='shopping-cart-img mr-4'>
                <a href='".route('products.show', $slug)."'>
                    <img class='img-fluid' src='".asset($image)."'>
                    <span class='product-quantity'>{$quantity}x</span>
                </a>
            </div>
            <div class='shopping-cart-title media-body'>
                <h4><a href='".route('products.show', $slug)."' title='{$name}'>{$name}</a></h4>
                <div class='product-attr'>
                    <span><small>{$quantity} (un)</small> x ".$this->currency_format($price)."</span>
                </div>
                <p class='cart-price'><small>Total</small> ".$this->currency_format($total)."</p>
            </div>
            <div class='shopping-cart-delete'>
                <a href='javascript:;' onclick='Cart.remove({$id}); return false;'><i class='ion ion-md-close'></i></a>
            </div>
        </li>";
    }
    
    public function generate_html_total($total)
    {
        return "<div class='shopping-cart-total'>
            <h4>".__('field.total').": <span>".$this->currency_format($total)."</span></h4>
        </div>
        <div class='shopping-cart-btn'>
            <a class='default-btn' href='".route('cart.index')."'>".__('menu.cart')."</a>
            <a class='default-btn' href='".route('checkout.index')."'>".__('menu.checkout')."</a>
        </div>";
    }
    
    public function generate_html_cart($id, $slug, $name, $image, $quantity, $price, $total)
    {
        return "<tr>
            <td>
                <a href='".route('products.show', $slug)."'>
                    <img src='".asset($image)."' title='{$name}' class='img-thumbnail'>
                </a>
            </td>
            <td>
                <a href='".route('products.show', $slug)."'><span>{$name}</span></a>
            </td>
            <td>
                <div class='input-group btn-block'>
                    <div class='cart-input'>
                        <input data-id='cart-input-box' id='cart_item_quantity_{$id}' class='cart-input-box' type='number' min='0' value='{$quantity}'>
                        <!--<div class='dec qtybutton'><i class='fa fa-angle-down'></i></div>
                        <div class='inc qtybutton'><i class='fa fa-angle-up'></i></div>
                        <div class='dec qtybutton'><i class='fa fa-angle-down'></i></div>
                        <div class='inc qtybutton'><i class='fa fa-angle-up'></i></div>-->
                    </div>
                    <span class='input-group-btn'>
                        <button onclick='Cart.refresh({$id}, 1); return false;' type='button' class='btn btn-primary'><i class='fa fa-refresh'></i></button>
                        <button onclick='Cart.remove({$id}); return false;' type='button' class='btn btn-danger pull-right'><i class='fa fa-times-circle'></i></button>
                    </span>
                </div>
            </td>
            <td>".$this->currency_format($price)."</td>
            <td>".$this->currency_format($total)."</td>
        </tr>";
    }
    
    public function generate_html_wishlist($id, $slug, $name, $image, $quantity, $price, $created_at)
    {
        return "<tr>
            <td>
                <a href='".route('products.show', $slug)."'>
                    <img src='".asset($image)."' title='{$name}' class='img-thumbnail'>
                </a>
            </td>
            <td>
                <a href='".route('products.show', $slug)."'><span>{$name}</span></a>
            </td>
            <td>".$this->currency_format($price)."</td>
            <td>".$created_at->format('d/m/Y')."</td>
            <td>
                <div class='input-group btn-block'>
                    <div class='cart-input'>
                        <button onclick='Cart.add({$id}, false); return false;' type='button' class='btn btn-primary'><i class='fa fa-check'></i></button>
                        <button onclick='Wishlist.remove({$id}); return false;' type='button' class='btn btn-danger pull-right'><i class='fa fa-times-circle'></i></button>
                    </span>
                </div>
            </td>
        </tr>";
    }
    
    public function generate_html_checkout($id, $slug, $name, $image, $quantity, $price, $total)
    {
        return "<div class='product-list'>
            <div class='product-inner media align-items-center'>
                <div class='product-image mr-4 mr-sm-5 mr-md-4 mr-lg-5'>
                    <a href='#'>
                        <img src='".asset($image)."'>
                    </a>
                </div>
                <div class='media-body'>
                    <h5>{$name}</h5>
                    <p class='product-quantity'>".__('field.quantity').": {$quantity}</p>
                    <p class='product-final-price'>".$this->currency_format($total)."</p>
                </div>
            </div>
        </div>";
    }
    
    public function currency_format($amount)
    {
        return 'R$ '.number_format($amount, 2, ',', '.');
    }
}
