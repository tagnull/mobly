@php

    $default_image = 'assets/images/misc/product_placeholder.png';
    if(count($product->images)) {
        $default_image = $product->images[0]->url;
    }

@endphp

<div class="product-gallery">
    <div class="gallery-with-thumbs">
        <div class="product-image-container">
            <div class="product-full-image main-slider image-popup">

                <!-- Slides -->
                <div class="swiper-wrapper">
                    @foreach($product->images as $image)
                    <figure class="swiper-slide">
                        <a href="{{ str_replace('341x341', '2000x2000', $image->url) }}" data-size="2000x2000">
                            <img src="{{ str_replace('341x341', '2000x2000', $image->url) }}" alt="{{ $image->description }}">
                            <div class="image-overlay"><i class="fa fa-search-plus"></i></div>
                        </a>
                        <figcaption class="visually-hidden">
                            <span>{{ $image->description }}</span>
                        </figcaption>
                    </figure>
                    @endforeach
                </div>
            </div>
        </div>
        
        <div class="product-thumb-container">
            <div class="product-thumb-image pos-r">
                <div class="nav-slider">
                    <!-- Slides -->
                    <div class="swiper-wrapper">
                        @foreach($product->images as $image)
                        <div class="swiper-slide">
                            <img src="{{ $image->url }}" alt="{{ $image->description }}">
                        </div>
                        @endforeach
                    </div>

                    <!-- Navigation -->
                    <div class="swiper-arrow next"><i class="fa fa-angle-down"></i></div>
                    <div class="swiper-arrow prev"><i class="fa fa-angle-up"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>