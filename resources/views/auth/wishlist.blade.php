@extends('layouts.shop')

@section('breadcrumb')
    @php
        $breadcrumb = $breadcrumb ?? [
            'title' => __('menu.wishlist'),
            'path' => [
                [
                    'name' => __('menu.my_account'),
                    'url' => route('account.index')
                ]
            ]
        ];
    @endphp
    @component('layouts.components.breadcrumb', $breadcrumb)@endcomponent
@endsection

@section('content')

<div class="shopping-cart-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <main id="primary" class="site-main">
                    <div class="shopping-cart">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="section-title">
                                    <h2>{{ __('menu.wishlist') }}</h2>
                                </div>
                                
                                <div class="api-component--wishlist">
                                    @include('layouts.vendor.core.html.loading')
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>

@endsection