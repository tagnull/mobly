@extends('layouts.shop')

@section('breadcrumb')
    @php
        $breadcrumb = $breadcrumb ?? [
            'title' => __('menu.categories'),
        ]
    @endphp
    @component('layouts.components.breadcrumb', $breadcrumb)@endcomponent
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <main id="primary" class="site-main">
                <div class="shop-wrapper">
                   <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <h1>{{ __('menu.categories') }}</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="shop-products-wrapper">
                                <div class="tab-content">
                                    <div id="grid" class="tab-pane anime-tab active show" role="tabpanel">
                                        <div class="row">
                                            @foreach($categories as $category)
                                                <div class="col-12">
                                                    <div class="product-caption">
                                                        <h4 class="product-name">
                                                            <a href="{{ route('categories.show', $category->slug) }}">
                                                                {{ $category->name }}
                                                            </a>
                                                        </h4>
                                                        <div class="product-manufacturer">
                                                            @foreach($category->children as $child)
                                                            <a href="{{ route('products.index', ['category' => $child->slug]) }}">
                                                                {{ $child->name }}
                                                            </a>
                                                            @if(!$loop->last)
                                                             &bull;
                                                            @endif
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                                @if(!$loop->last)
                                                    <div class="social-sharing d-flex align-items-center">
                                                        &mdash;
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </main>
        </div>
    </div>
</div>
@endsection