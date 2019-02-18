@extends('layouts.shop')

@section('breadcrumb')
    @php
        $breadcrumb = $breadcrumb ?? [
            'title' => __('menu.cart'),
        ]
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
                                    <h2>{{ __('menu.cart') }}</h2>
                                </div>
                                
                                <div class="api-component--cart">
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