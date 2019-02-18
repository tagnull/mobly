<?php

namespace App\Http\Controllers\Checkout;

use App\Models\Items\Order;
// use Illuminate\Http\Request;
use App\Models\Items\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use App\Http\Requests\OrdersValidation;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('shopping.checkout.checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrdersValidation $request)
    {
        // Unserialize the cookie
        $items = [];
        if($request->hasCookie('cart')) {
            // return $request->all();
            
            $items = unserialize(Cookie::get('cart'));
            
            // If there is any product in the cart, bring data from DB
            if($items) {
                $product_ids = array_keys($items);
                $products = Product::with('images')->whereIn('id', $product_ids)->get();
            }
            
            $total=0;
            $child_items = [];
            foreach($items as $item=>$quantity) {
                $single_item = $products->where('id', $item)->first();
                $total += ($single_item->price * $quantity);
                
                $child_items[] = [
                    'sku' => $single_item->sku,
                    'barcode' => $single_item->barcode,
                    'name' => $single_item->name,
                    'quantity' => $quantity,
                    'url' => $single_item->images[0]->url,
                    'single_price' => $single_item->price,
                    'total_price' => ($single_item->price * $quantity)
                ];
            }
            
            $order = Order::create([
                'user_id' => auth()->check() ? auth()->id() : null,
                'name' => $request->get('name'),
                'document' => $request->get('document'),
                'email' => $request->get('email'),
                'status' => 'processing',
                'payment_method' => $request->get('payment'),
                'total' => $total,
                'address' => [
                    'street' => $request->get('shipping_address_street'),
                    'number' => $request->get('shipping_address_number'),
                    'complement' => $request->get('shipping_address_complement'),
                    'neighborhood' => $request->get('shipping_address_neighborhood'),
                    'city' => $request->get('shipping_address_city'),
                    'state' => $request->get('shipping_address_state'),
                    'zipcode' => $request->get('shipping_address_zipcode'),
                ],
                'info' => $request->get('info'),
            ])->items()->createMany($child_items);
            
            $uuid = Order::select('uuid')->find($order[0]->order_id);
            
            Cookie::queue(Cookie::forget('cart'));
            return view('shopping.checkout.done', ['uuid' => $uuid->uuid]);
        }
        
        return view('shopping.checkout.checkout');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('shopping.checkout.checkout');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
