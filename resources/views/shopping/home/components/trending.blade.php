<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <div class="section-title">
                <h2>{{ __('page.home.widget.trending.title') }}</h2>
                <p class="subtitle">{{ __('page.home.widget.trending.description') }}</p>
            </div>
        </div>
    </div>

    <div class="row product-row">
    	<div class="col-12 col-sm-12 col-md-12">
        	<div class="new-products pos-r">
                <div class="element-carousel anime-element" data-visible-slide="4" data-loop="false" data-space-between="0" data-speed="1000">

                    <div class="swiper-wrapper">
                        @foreach($trending as $item)
                            @include('shopping.home.components.single_product', [
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
                    
                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>