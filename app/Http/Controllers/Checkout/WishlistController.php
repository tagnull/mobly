<?php

namespace App\Http\Controllers\Checkout;

use Illuminate\Http\Request;
use App\Models\Items\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class WishlistController extends Controller
{
    
    /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth', ['except' => ['ping']]);
	}
    
    public function ping()
    {
        return ['logged' => !auth()->guest()];
    }
    
    public function index(Request $request)
    {
        $products = Product::with('images')->whereIn('id', auth()->user()->wishlist->pluck('product_id'))->get();
        
        $html_wishlist_item = '';
        foreach($products as $product) {
            $html_wishlist_item .= $this->generate_html_wishlist($product->id, $product->slug, $product->name, $product->images[0]->url, $product->price, $product->created_at);
        }
        
        // Wishlist
        $html_wishlist = "<div class='shopping-cart-title media-body'><h3>".__('html.wishlist.empty.title')."</h3><p>".__('html.wishlist.empty.description')."</p></div>";
        if(strlen($html_wishlist_item)) {
            $html_wishlist = str_replace('%html_wishlist%', $html_wishlist_item,
                '<div class="text-right">
                    <span>
                        <small><i class="fa fa-check"></i> Adicionar ao carrinho</small>
                    </span>
                    &bull;
                    <span>
                        <small><i class="fa fa-times-circle"></i> Apagar da lista</small>
                    </span>
                </div>
                <div class="table-responsive">
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
        
        return [
            'quantity' => $products->count(),
            'html' => [
                'wishlist' => $html_wishlist
            ]];
    }

    public function create(Request $request)
    {
        $product = (int) $request->get('product');
        if($product) {
            auth()->user()->wishlist()->create(['product_id' => $product]);
        }
        return ['successfully' => true];
    }

    public function show()
    {
        //
    }

    public function update(Request $request)
    {
        //
    }

    public function destroy(Request $request)
    {
        $product = (int) $request->get('product');
        auth()->user()->wishlist()->where(['product_id' => $product])->delete();
        return ['status' => 'ok'];
    }
    
    public function generate_html_wishlist($id, $slug, $name, $image, $price, $created_at)
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
                    <span class='input-group-btn'>
                        <button onclick='Wishlist.add_cart({$id}, false); return false;' type='button' class='btn btn-primary'><i class='fa fa-check'></i></button>
                        <button onclick='Wishlist.remove({$id}); return false;' type='button' class='btn btn-danger pull-right'><i class='fa fa-times-circle'></i></button>
                    </span>
                </div>
            </td>
        </tr>";
    }
    
    public function currency_format($amount)
    {
        return 'R$ '.number_format($amount, 2, ',', '.');
    }
}
