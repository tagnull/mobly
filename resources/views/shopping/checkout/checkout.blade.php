@extends('layouts.shop')

@section('breadcrumb')
    @php
        $breadcrumb = $breadcrumb ?? [
            'title' => __('menu.checkout'),
            'path' => [
                [
                    'name' => __('menu.cart'),
                    'url' => route('cart.index')
                ]
            ],
        ]
    @endphp
    @component('layouts.components.breadcrumb', $breadcrumb)@endcomponent
@endsection

@section('content')

<div class="checkout-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <main id="primary" class="site-main">
                    
                    <div class="api-component--checkout_loading">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="order-summary">
                                <div class="api-component--checkout">
                                    @include('layouts.vendor.core.html.loading')
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="api-component--checkout_all" style="display: none;">
                        
                    
                        <!-- Checkout User Actions -->
                        @include('shopping.checkout.components.checkout_user_actions')
                        
                        <!-- Checkout User Data -->
                        @include('shopping.checkout.components.checkout_user_data')
                        
                    </div>
                        
                </main>
            </div>
        </div>
    </div>
</div>

@endsection