@php
    
    $id = $id ?? null;
    
    $url = '#';
    
    $off ?? null;
    
    $categories ?? null;
    $title ?? null;
    
    $old_price ?? null;
    $price ?? null;
    
    $timer = $timer ?? null;
    
    $sold_out = $sold_out ?? null;
    
    $image = $image ?? assets('assets/images/misc/placeholder.png');
    $slug = $slug ?? null;
    
    $stars = $stars ?? 0;
    $stars_html = '';
    
    for($i=0; $i<5; $i++) {
        
        if( ($i+1) > $stars ) {
            $stars_html .= '<li><i class="ion ion-md-star-outline disabled"></i></li>';
        } else {
            $stars_html .= '<li><i class="ion ion-md-star"></i></li>';
        }
    
        //$stars_html .= '<li><i class="ion ion-md-star-outline '.($star ? ($star == ($stars-5) ? 'disabled' : '') : '').'"></i></li>';
    }
    
    //print_r($categories);die;
    
@endphp
<article class="product-layout product-list">
    <div class="product-thumb">
        <div class="product-inner media align-items-center">
            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
            	@if($off)
                <div class="label-product label-sale">
                    <span>{{ __('tag.off', ['percent' => $off]) }}</span>
                </div>
                <!--<div class="label-product label-new">New</div>-->
                @endif
                <a href="{{ route('products.show', $slug) }}">
                    <img src="{{ $image }}" alt="{{ $title }}" width="300" height="300">
                </a>
                <div class="action-links">
                    <a class="action-btn btn-cart" href="javascript:;" onclick="Cart.add({{ $id }}, 1, '{{ $image }}'); return false;" title="Add to Cart"><i class="pe-7s-shopbag"></i></a>
                    <a class="action-btn btn-wishlist" href="javascript:;" onclick="Wishlist.add({{ $id }}, '{{ $image }}'); return false;" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                    <a class="action-btn btn-quickview" href="javascript:;" onclick="Quickview.show({{ $id }})"><i class="pe-7s-search"></i></a>
                </div>
            </div>

            <div class="product-caption media-body">
            	<div class="product-meta d-flex justify-content-between align-items-center">
                	<div class="product-manufacturer">
                		@foreach($categories as $category)
                        <a href="{{ route('categories.show', $category->slug) }}"><small>{{ $category->name }}</small></a>
                        @endforeach
                	</div>
                    <div class="product-ratings">
                        <div class="rating-box">
                            <small>
                                <ul class="rating d-flex">
                                    {!! $stars_html !!}
                                </ul>
                            </small>
                        </div>
                    </div>
                </div>
                <h4 class="product-name">
                    <a href="{{ route('products.index', ['category' => $category->slug]) }}" title="{{ $title }}">{{ $title }}</a>
                </h4>
                
                <p class="product-price">
                    @if($off)
                    <span class="price-old">@currency($old_price)</span>
                    @endif
                    <span class="price-new">@currency($price)</span>
                </p>
                
                <div class="product-des">
                    <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
                </div>
            </div>
        </div>
    </div>
</article>




