@extends('layouts.shop')

@section('breadcrumb')
    @php
        if(request()->has('search')) {
            $breadcrumb = $breadcrumb ?? [
                'title' => __('field.search:breadcrumb', ['term' => request()->get('search')]),
                'path' => [
                    [
                        'name' => __('menu.products'),
                        'url' => route('products.index')
                    ]
                ],
            ];
        } else {
            $breadcrumb = $breadcrumb ?? [
                'title' => __('menu.products')
            ];
        }
    @endphp
    @component('layouts.components.breadcrumb', $breadcrumb)@endcomponent
@endsection

@section('content')
<!-- Start of Products Wrapper -->
<div class="products-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-9 order-1 order-md-1 order-lg-2">
                <main id="primary" class="site-main">
                    <div class="shop-wrapper">
                       <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="shop-toolbar">
                                    <div class="toolbar-inner">
                                        <div class="product-view-mode">
                                            <ul role="tablist" class="nav shop-item-filter-list">
                                                <li role="presentation" class="active"><a href="#grid" aria-controls="grid" role="tab" data-toggle="tab" class="active show" aria-selected="true"><i class="ion-md-grid"></i></a></li>
                                                <li role="presentation"><a href="#list" aria-controls="list" role="tab" data-toggle="tab"><i class="ion-md-list"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="toolbar-amount">
                                            <span>@include('shopping.products.components.pagination_label', ['data' => $products])</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="shop-products-wrapper">
                                    <div class="tab-content">
                                        <div id="grid" class="tab-pane anime-tab active show" role="tabpanel">
                                            <div class="row">
                                                @foreach($products as $item)
                                                    @include('shopping.products.components.single_product-grid', [
                                                        'id' => $item->id,
                                                    
                                                        'off' => $item->off,
                                                        'slug' => $item->slug,
                                                        
                                                        'categories' => $item->categories,
                                                        'title' => $item->name,
                                                        
                                                        'old_price' => $item->old_price,
                                                        'price' => $item->price,
                                                        
                                                        'image' => $item->images[0]->url,
                                                        
                                                        'stars' => rand(0, 5)
                                                    ])
                                                @endforeach
                                            </div>
                                        </div>
                                        <div id="list" class="tab-pane anime-tab" role="tabpanel">
                                            <div class="row">
                                                <div class="col-12 col-sm-12 col-md-12">
                                                    @foreach($products as $item)
                                                        @include('shopping.products.components.single_product-list', [
                                                            'id' => $item->id,
                                                        
                                                            'off' => $item->off,
                                                            'slug' => $item->slug,
                                                            
                                                            'categories' => $item->categories,
                                                            'title' => $item->name,
                                                            
                                                            'old_price' => $item->old_price,
                                                            'price' => $item->price,
                                                            
                                                            'image' => $item->images[0]->url,
                                                            
                                                            'stars' => rand(0, 5)
                                                        ])
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="pagination-area">
                                    <div class="row align-items-center">
                                        <div class="col-12 order-2 col-sm-12 col-md-6 order-md-1 col-lg-6">
                                            <div class="page-amount d-flex justify-content-center justify-content-md-start">
                                                <p>@include('shopping.products.components.pagination_label', ['data' => $products])</p>
                                            </div>
                                        </div>
                                        <div class="col-12 order-1 col-sm-12 col-md-6 order-md-2 col-lg-6">
                                            {{ $products->appends(request()->input())->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 order-2 order-md-2 order-lg-1">
                <aside id="secondary" class="widget-area">
                    <div class="sidebar-widget list-categories-widget">
                        <h2 class="widgettitle">{{ __('menu.categories') }}</h2>
                        <div class="cat-accordion">
                            
                            
                            @foreach($categories as $category)
                            <div class="card">
                                <div class="card-header" id="heading_id_{{ $category->id }}">
                                    <h5 class="mb-0">
                                        <button type="button" data-toggle="collapse" data-target="#collapse_id_{{ $category->id }}" aria-expanded="false" aria-controls="collapse_id_{{ $category->id }}">
                                            {{ $category->name }}
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse_id_{{ $category->id }}" class="collapse" aria-labelledby="heading_id_{{ $category->id }}">
                                    <div class="card-body">
                                        <ul class="cat-sub-menu">
                                            @foreach($category->children as $child)
                                            <li>
                                                <a href="{{ route('products.index', array_merge(request()->query(), ['category' => $child->slug])) }}">
                                                    {{ $child->name }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                            
                            
                        </div>
                    </div>

                    <div class="sidebar-widget list-widget">
                        <h2 class="widgettitle">Categories</h2>
                        <div class="list-widget-wrapper">
                            <div class="list-group">
                                <a href="#">Shoes (198)</a>
                                <a href="#">backpacks (70)</a>
                                <a href="#">Accessories (14)</a>
                                <a href="#">Dresses (10)</a>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget list-widget">
                        <h2 class="widgettitle">Brands</h2>
                        <div class="list-widget-wrapper">
                            <div class="list-group">
                                <a href="#">Graphic Corner (14)</a>
                                <a href="#">Studio Design (14)</a>
                                <a href="#">Tommy Hilfiger (14)</a>
                                <a href="#">Versace (14)</a>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget list-widget">
                        <h2 class="widgettitle">Price</h2>
                        <div class="list-widget-wrapper">
                            <div class="list-group">
                                <a href="#">$43.00 - $45.00 (10)</a>
                                <a href="#">$54.00 - $58.00 (4)</a>
                                <a href="#">$62.00 - $70.00 (5)</a>
                                <a href="#">$78.00 - $83.00 (10)</a>
                                <a href="#">$85.00 - $89.00 (13)</a>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget color-widget">
                        <h2 class="widgettitle">Color</h2>
                        <div class="color-widget-wrapper">
                            <ul class="color-options">
                                <li>
                                    <span class="white"></span>
                                    <a href="#">white (4)</a>
                                </li>
                                <li>
                                    <span class="orange"></span>
                                    <a href="#">Orange (2)</a>
                                </li>
                                <li>
                                    <span class="blue"></span>
                                    <a href="#">Blue (6)</a>
                                </li>
                                <li>
                                    <span class="yellow"></span>
                                    <a href="#">Yellow (8)</a>
                                </li>
                                <li>
                                    <span class="black"></span>
                                    <a href="#">black (6)</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-widget tag-cloud">
                        <h2 class="widgettitle">Popular Tags</h2>
                        <div class="tags-widget">
                            <ul>
                                <li><a href="#">Ecommerce</a></li>
                                <li><a href="#">Shoes</a></li>
                                <li><a href="#">bags</a></li>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Sunglasses</a></li>
                                <li><a href="#">Trending</a></li>
                                <li><a href="#">Clothing</a></li>
                                <li><a href="#">Smart</a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>
<!-- End of Products Wrapper -->
@endsection
