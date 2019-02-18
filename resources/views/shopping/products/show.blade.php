@extends('layouts.shop')

@section('breadcrumb')
    @php
        $breadcrumb = $breadcrumb ?? [
            'title' => $product->name,
            'path' => [
                [
                    'name' => __('menu.products'),
                    'url' => route('products.index')
                ]
            ],
        ]
    @endphp
    @component('layouts.components.breadcrumb', $breadcrumb)@endcomponent
@endsection

@section('content')
<div class="main-product-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <main id="primary" class="site-main">
                    <div class="single-product-wrapper">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        
                                @include('shopping.products.components.images')
                                        
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="product-details">
                                    <h3 class="product-name">{{ $product->name }}</h3>
                                    <div class="product-ratings d-flex">
                                        <ul class="rating d-flex mr-4">
                                            <li><i class="ion ion-md-star"></i></li>
                                            <li><i class="ion ion-md-star"></i></li>
                                            <li><i class="ion ion-md-star-outline disabled"></i></li>
                                            <li><i class="ion ion-md-star-outline disabled"></i></li>
                                            <li><i class="ion ion-md-star-outline disabled"></i></li>
                                        </ul>
                                        <ul class="comments-advices list-inline d-flex">
                                            <li class="list-inline-item mr-3"><a href="#">2 Reviews</a></li>
                                            <li class="list-inline-item"><a href="#">Write a Review</a></li>
                                        </ul>
                                    </div>
                                    <div class="product-price">
                                        <p class="d-flex align-items-center">
                                            <p><strong>SKU:</strong> {{ $product->sku }}</p>
                                            <span class="price-old">@currency($product->old_price)</span>
                                            <span class="price-new">@currency($product->price)</span>
                                            <span class="price-discount">{{ __('tag.off', ['percent' => $product->off]) }}</span>
                                        </p>
                                    </div>
                                    <div class="product-description">
										<p>{{ $product->summary }}</p>
                                    </div>
                                    <div class="product-actions">
                                        <h3>Available Options</h3>
                                        <div class="product-size-color d-flex">
                                            <div class="product-size">
                                                <label>Size</label>
                                                <select class="nice-select">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                </select>
                                            </div>
                                            <div class="product-color">
                                                <label>color</label>
                                                <ul class="color-list">
                                                   <li>
                                                        <a class="white" href="#"></a>
                                                    </li>
                                                    <li>
                                                        <a class="orange active" href="#"></a>
                                                    </li>
                                                    <li>
                                                        <a class="paste" href="#"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-stock">
                                            <form action="#">
                                                <label>{{ __('field.quantity') }}</label>
                                                <ul class="d-flex flex-wrap align-items-center">
                                                    <li class="box-quantity">
                                                        <div class="cart-input">
                                                            <input id="cart_item_quantity" class="cart-input-box" type="text" value="1">
                                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <button onclick="Cart.add({{ $product->id }}, false); return false;" type="button" class="default-btn">{{ __('button.add_cart') }}</button>
                                                    </li>
                                                </ul>
                                            </form>
                                        </div>
                                        <div class="wishlist-compare">
                                            <button class="btn-wishlist" onclick="Wishlist.add({{ $product->id }}, false); return false;" type="button">{{ __('button.add_wishlist') }}</button>
                                        </div>
                                    </div>
                                    
                                    <!-- Start of Share Social Media -->
                                    @include('shopping.products.components.share_social_media')
                                    <!-- End of Share Social Media -->
                                </div>
                            </div>
                        </div>
                        
                        <!-- Start of Bottom -->
                        @include('shopping.products.components.bottom')
                        <!-- End of Bottom -->
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content2')
<div class="single_product_area">
    <div id="shopify-section-product-template" class="shopify-section">
        <div class="main-product-wrapper" id="section-product-template"> 
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <main id="primary" class="site-main">
                            <div class="single-product-wrapper">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-12">
                                        @include('shopping.products.components.images')
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                        <form method="post" action="/cart/add" id="AddToCartForm" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data">
                                            <input type="hidden" name="form_type" value="product" />
                                            <input type="hidden" name="utf8" value="✓" />                  
                                            <div class="product-details">
                                                <h3 class="product-name">{{ $product->name }}</h3>
                                                <div class="product-ratings d-flex">
                                                    <span class="shopify-product-reviews-badge" data-id="1617018912879"></span>
                                                </div>
                                                <div class="product-price">
                                                    <p class="d-flex align-items-center">
                                                        <span class="price-old">
                                                            <span class=money>@currency($product->old_price)</span>
                                                        </span>
                                                        <span class="price-new">
                                                            <span class=money>@currency($product->price)</span>
                                                        </span>
                                                        <span class="single-badge-area">
                                                            <span class="price-discount pd-sale">{{ __('tag.off', ['percent' => $product->off]) }}</span>
                                                        </span>
                                                    </p>
                                                </div>
                                                
                                                <div class="product-description">
                                                    <p>{{ $product->description }}</p>
                                                </div>
                                                
                                                <div class="product-actions"><h3>Available Options</h3><div class="product-variant-option"> 
                                                    <select name="id" id="productSelect" class="product-single__variants">
                                                        <option  selected="selected"  data-sku="" value="14650581319791">lg / orange / Wool - <span class=money>$500.00 USD</span></option>
                                                        <option  data-sku="" value="14650581352559">lg / orange / Fiber - <span class=money>$385.00 USD</span></option>
                                                        <option  data-sku="" value="14650581385327">lg / orange / Plastic - <span class=money>$375.00 USD</span></option>
                                                        <option  data-sku="" value="14650581418095">lg / purple / Wool - <span class=money>$365.00 USD</span></option>
                                                        <option  data-sku="" value="14650581450863">lg / purple / Fiber - <span class=money>$355.00 USD</span></option>
                                                        <option  data-sku="" value="14650581483631">lg / purple / Plastic - <span class=money>$345.00 USD</span></option>
                                                        <option  data-sku="" value="14650581516399">lg / pink / Wool - <span class=money>$335.00 USD</span></option>
                                                        <option  data-sku="" value="14650581549167">lg / pink / Fiber - <span class=money>$325.00 USD</span></option>
                                                        <option  data-sku="" value="14650581581935">lg / pink / Plastic - <span class=money>$315.00 USD</span></option>
                                                        <option  data-sku="" value="14650581614703">lg / violet / Wool - <span class=money>$305.00 USD</span></option>
                                                        <option  data-sku="" value="14650581647471">lg / violet / Fiber - <span class=money>$490.00 USD</span></option>
                                                        <option  data-sku="" value="14650581680239">lg / violet / Plastic - <span class=money>$480.00 USD</span></option>
                                                        <option  data-sku="" value="14650581713007">lg / red / Wool - <span class=money>$470.00 USD</span></option>
                                                        <option  data-sku="" value="14650581745775">lg / red / Fiber - <span class=money>$460.00 USD</span></option>
                                                        <option  data-sku="" value="14650581778543">lg / red / Plastic - <span class=money>$450.00 USD</span></option>
                                                        <option  data-sku="" value="14650581811311">sm / orange / Wool - <span class=money>$440.00 USD</span></option>
                                                        <option  data-sku="" value="14650581844079">sm / orange / Fiber - <span class=money>$430.00 USD</span></option>
                                                        <option  data-sku="" value="14650581876847">sm / orange / Plastic - <span class=money>$420.00 USD</span></option>
                                                        <option  data-sku="" value="14650581909615">sm / purple / Wool - <span class=money>$410.00 USD</span></option>
                                                        <option  data-sku="" value="14650581942383">sm / purple / Fiber - <span class=money>$400.00 USD</span></option>
                                                        <option  data-sku="" value="14650581975151">sm / purple / Plastic - <span class=money>$390.00 USD</span></option>
                                                        <option  data-sku="" value="14650582007919">sm / pink / Wool - <span class=money>$380.00 USD</span></option>
                                                        <option  data-sku="" value="14650582040687">sm / pink / Fiber - <span class=money>$370.00 USD</span></option>
                                                        <option  data-sku="" value="14650582073455">sm / pink / Plastic - <span class=money>$360.00 USD</span></option>
                                                        <option  data-sku="" value="14650582106223">sm / violet / Wool - <span class=money>$350.00 USD</span></option>
                                                        <option  data-sku="" value="14650582138991">sm / violet / Fiber - <span class=money>$340.00 USD</span></option>
                                                        <option  data-sku="" value="14650582171759">sm / violet / Plastic - <span class=money>$330.00 USD</span></option>
                                                        <option  data-sku="" value="14650582204527">sm / red / Wool - <span class=money>$320.00 USD</span></option>
                                                        <option  data-sku="" value="14650582237295">sm / red / Fiber - <span class=money>$310.00 USD</span></option>
                                                        <option  data-sku="" value="14650582270063">sm / red / Plastic - <span class=money>$300.00 USD</span></option>
                                                    </select>

                                                    <style>
                                                        label[for="product-select-option-0"] { display: none; }
                                                        #product-select-option-0 { display: none; }
                                                        #product-select-option-0 + .custom-style-select-box { display: none !important; }
                                                    </style>
                                                    <script>$(window).load(function() { $('.selector-wrapper:eq(0)').hide(); });</script>
    

<div class="swatch clearfix Size" data-option-index="0">
  <div class="header">Size : </div>
  
  
    
    
      
       
      
      <div data-value="lg" class="swatch-element lg available">
        <input id="swatch-0-lg" type="radio" name="option-0" value="lg" checked  />
        
        <label for="swatch-0-lg">
          lg
          
        </label>
        
      </div>
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .lg').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .lg').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .lg').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .lg').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .lg').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .lg').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .lg').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .lg').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .lg').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .lg').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .lg').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .lg').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .lg').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .lg').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .lg').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
      
       
      
      <div data-value="sm" class="swatch-element sm available">
        <input id="swatch-0-sm" type="radio" name="option-0" value="sm"  />
        
        <label for="swatch-0-sm">
          sm
          
        </label>
        
      </div>
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .sm').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .sm').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .sm').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .sm').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .sm').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .sm').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .sm').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .sm').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .sm').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .sm').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .sm').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .sm').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .sm').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .sm').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="0"] .sm').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
</div>

    <style>
      label[for="product-select-option-1"] { display: none; }
      #product-select-option-1 { display: none; }
      #product-select-option-1 + .custom-style-select-box { display: none !important; }
    </style>
    <script>$(window).load(function() { $('.selector-wrapper:eq(1)').hide(); });</script>
    
<div class="swatch clearfix Color" data-option-index="1">
  <div class="header">Color : </div>
  
  
    
    
      
       
      
      <div data-value="orange" class="swatch-element color orange available">
        <input id="swatch-1-orange" type="radio" name="option-1" value="orange" checked  />
        
        <label for="swatch-1-orange" style="background-color: orange;">
          
        </label>
        
      </div>
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .orange').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .orange').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .orange').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
      
       
      
      <div data-value="purple" class="swatch-element color purple available">
        <input id="swatch-1-purple" type="radio" name="option-1" value="purple"  />
        
        <label for="swatch-1-purple" style="background-color: purple;">
          
        </label>
        
      </div>
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .purple').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .purple').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .purple').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
      
       
      
      <div data-value="pink" class="swatch-element color pink available">
        <input id="swatch-1-pink" type="radio" name="option-1" value="pink"  />
        
        <label for="swatch-1-pink" style="background-color: pink;">
          
        </label>
        
      </div>
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .pink').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .pink').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .pink').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
      
       
      
      <div data-value="violet" class="swatch-element color violet available">
        <input id="swatch-1-violet" type="radio" name="option-1" value="violet"  />
        
        <label for="swatch-1-violet" style="background-color: violet;">
          
        </label>
        
      </div>
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .violet').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .violet').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .violet').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
      
       
      
      <div data-value="red" class="swatch-element color red available">
        <input id="swatch-1-red" type="radio" name="option-1" value="red"  />
        
        <label for="swatch-1-red" style="background-color: red;">
          
        </label>
        
      </div>
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .red').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .red').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .red').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .orange').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .orange').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .orange').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .purple').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .purple').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .purple').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .pink').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .pink').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .pink').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .violet').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .violet').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .violet').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .red').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .red').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="1"] .red').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
</div>


    <style>
      label[for="product-select-option-2"] { display: none; }
      #product-select-option-2 { display: none; }
      #product-select-option-2 + .custom-style-select-box { display: none !important; }
    </style>
    <script>$(window).load(function() { $('.selector-wrapper:eq(2)').hide(); });</script>
    
    
  



<div class="swatch clearfix Material" data-option-index="2">
  <div class="header">Material : </div>
  
  
    
    
      
       
      
      <div data-value="Wool" class="swatch-element wool available">
        <input id="swatch-2-wool" type="radio" name="option-2" value="Wool" checked  />
        
        <label for="swatch-2-wool">
          Wool
          
        </label>
        
      </div>
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .wool').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
      
       
      
      <div data-value="Fiber" class="swatch-element fiber available">
        <input id="swatch-2-fiber" type="radio" name="option-2" value="Fiber"  />
        
        <label for="swatch-2-fiber">
          Fiber
          
        </label>
        
      </div>
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .fiber').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
      
       
      
      <div data-value="Plastic" class="swatch-element plastic available">
        <input id="swatch-2-plastic" type="radio" name="option-2" value="Plastic"  />
        
        <label for="swatch-2-plastic">
          Plastic
          
        </label>
        
      </div>
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .plastic').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .wool').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .fiber').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .plastic').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .wool').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .fiber').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .plastic').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .wool').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .fiber').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .plastic').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .wool').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .fiber').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .plastic').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .wool').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .fiber').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .plastic').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .wool').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .fiber').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .plastic').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .wool').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .fiber').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .plastic').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .wool').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .fiber').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .plastic').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .wool').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .fiber').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
    
    
    
    <script>
      jQuery('.swatch[data-option-index="2"] .plastic').removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
    </script>
    
  
</div>
                                                    <script>
    jQuery(function() {
      jQuery('.swatch :radio').change(function() {
        var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
        var optionValue = jQuery(this).val();
        jQuery(this)
        .closest('form')
        .find('.single-option-selector')
        .eq(optionIndex)
        .val(optionValue)
        .trigger('change');
      });
    });
  </script>
                                                </div>
                                                <style>
  .product-variant-option .selector-wrapper{
  	display: none;
  }
</style>
                                                <div class="product-stock">
                                                    <label>{{ __('field.quantity') }}</label>
                                                    <ul class="d-flex flex-wrap align-items-center">
                                                        <li class="box-quantity">
                                                            <div class="cart-input quantity-selector">
                                                                <input class="cart-input-box" type="text" name="quantity" value="1">
                                                                <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                                <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <button type="submit" class="ajax-spin-cart default-btn" id="AddToCart">
                                                                <span>
                                                                    <span class="cart-title" id="AddToCartText">{{ __('button.add_cart') }}</span>
                                                                    <span class="cart-loading">{{ __('button.add_cart:loading') }}</span>
                                                                    <span class="cart-added">{{ __('button.add_cart:added') }}</span>
                                                                    <span class="cart-unavailable">{{ __('button.add_cart:unavailable') }}</span>
                                                                </span>
                                                            </button>
                                                        </li>
                                                        <script>
                                                        $('.ajax-spin-cart').on('click', function() {
                                                          $(this).addClass('loading add-item');
                                                          setTimeout(function () {
                                                            $('.ajax-spin-cart').removeClass('loading');
                                                          },800);
                                                          setTimeout(function () {
                                                            $('.ajax-spin-cart').removeClass("add-item");
                                                          },1500);
                                                    
                                                        });
  </script>
                                                        <script>
                                                        jQuery('#AddToCart').click(function(e) {
                                                          e.preventDefault();
                                                          Shopify.addItemFromFormStart('AddToCartForm', 1617018912879);
                                                                                       }); 
  </script>
                                                    </ul>
                                                </div>
                                                <div class="buy-it-now-area default-btn">
                                                    <div data-shopify="payment-button" class="shopify-payment-button">
                                                        <button class="shopify-payment-button__button shopify-payment-button__button--unbranded shopify-payment-button__button--hidden" disabled="disabled" aria-hidden="true"></button>
                                                        <button class="shopify-payment-button__more-options shopify-payment-button__button--hidden" disabled="disabled" aria-hidden="true"></button>
                                                    </div>
                                                </div>
                                                <div class="wishlist-compare">
                                                    <a class="wishlist" href="/account/login" title="Wishlist">
                                                        <i class="pe-7s-like"></i>{{ __('button.add_wishlist') }}
                                                    </a>
                                                    <a class="go-to-wishlist" href="/pages/wishlist">Go to wishlist</a>
                                                </div>
                                            </div>
                                            <div class="social-sharing d-flex align-items-center">
                                                <span>{{ __('tag.share') }}</span>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a class="bg-facebook" target="_blank" href="//www.facebook.com/sharer.php?u={{ route('products.show', $product->slug) }}" title="Share on Facebook" tabindex="0">
                                                                <i class="fa fa-facebook"></i><span>Facebook</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item"> 
                                                            <a class="bg-twitter" target="_blank" href="//twitter.com/share?text={{ $product->name }}&amp;url={{ route('products.show', $product->slug) }}" title="Share on Twitter" tabindex="0">
                                                                <i class="fa fa-twitter"></i><span>Twitter</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item"> 
                                                            <a class="bg-gplus" target="_blank" href="//plus.google.com/share?url={{ route('products.show', $product->slug) }}" title="Share on Google+" tabindex="0">
                                                                <i class="fa fa-google-plus"></i><span>Google+</span>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item"> 
                                                            <a class="bg-pinterest" target="_blank" href="//pinterest.com/pin/create/button/?url={{ route('products.show', $product->slug) }}&amp;media={{ asset($product->images[0]->url ?: 'assets/images/misc/product_placeholder.png') }}&amp;description={{ $product->name }}" title="Share on Pinterest" tabindex="0">
                                                                <i class="fa fa-pinterest"></i><span>Pinterest</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
        <script src="//cdn.shopify.com/s/files/1/0049/9043/5439/t/2/assets/jquery.elevateZoom-3.0.8.min.js?10779167845632766722"></script><link href="//cdn.shopify.com/s/files/1/0049/9043/5439/t/2/assets/jquery.fancybox.css?10779167845632766722" rel="stylesheet" type="text/css" media="all" />
        <script src="//cdn.shopify.com/s/files/1/0049/9043/5439/t/2/assets/jquery.fancybox.js?10779167845632766722"></script>

        <script>
          $(document).ready(function() {
            $('.fancybox').fancybox();
          });
        </script>
        <script>
        
          var selectCallback = function(variant, selector) {
            timber.productPage({
              money_format: "<span class=money>$@{{amount}}</span>",
              variant: variant,
              selector: selector
            });
        
            if (variant) {
        
              // Current variant select+
              var form = jQuery('#' + selector.domIdPrefix).closest('form');
              for (var i=0,length=variant.options.length; i<length; i++) {
                var val = variant.options[i].replace(/'/g,"&#039;");
                var radioButton = form.find(".swatch[data-option-index='" + i + "'] :radio[value='" + val +"']");
                if (radioButton.size()) {
                  radioButton.get(0).checked = true;
                }
              }
        
              // Current sku pass
              $('.variant-sku').text(variant.sku);
            }else {
              $('.variant-sku').empty();
            }// product image zoom with variant
            if (variant && variant.featured_image) { 
              jQuery('#ProductThumbs a[data-image-id="' + variant.featured_image.id + '"]').trigger('click'); 
            }};
        
        
          //timber
          jQuery(function($) {
            new Shopify.OptionSelectors('productSelect', {
              product: {"id":1617018912879,"title":"Lorem Ipsum","handle":"lorem-ipsum","description":"\u003cp\u003eLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a convallis nisl, at aliquam dolor. Morbi in iaculis nunc. Nulla eu mi at velit imperdiet sollicitudin sed vel risus. Quisque eleifend lorem ipsum, et tempus nulla convallis nec. Nos aseguraremos de que para publicar un comentario. Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aquí, contenido aquí\". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de \"Lorem Ipsum\" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo.\u003c\/p\u003e\n[short_description]\n\u003cp\u003eEn el valle, la vivienda en la vigilancia específica, el reemplazo o la consolidación de la cama, un hombre obsesionado con la reducción de opciones de apuestas ilegales. Wow, mercado muy atractivo, de mis visitantes. Tiempo de desarrollo reciente para odiar, un bar beef tiempo.\u003c\/p\u003e\n[\/short_description] [product_description]\n\u003cp\u003eLorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Mañana, a partir de los botones de opción, sino un poco de dolor. Escribir en el freno ahora. No hay comentarios eran, en el mejor, pero el financiamiento de la atención de la salud o la risa. Bienvenido a aprender más acerca de la cultura popular, y el tiempo, no, ni a crecer fuerte. Miramos a los miembros de televisión por cable de televisión.\u003cbr\u003e\u003cbr\u003ePor otra parte, denunciamos con indignación a los hombres que son engañados y desmoralizados por los encantos del placer del momento, tan cegados por el deseo, que no pueden prever el dolor y la molestia que se va a producir, y la misma culpa es de los que faltan a su deber por debilidad de la voluntad, que es lo mismo que decir que fallan por la fatiga y el dolor. Estos casos son muy simples y fácil de distinguir. En una hora libre, sin las trabas de nuestro poder de elección y cuando nada impida que seamos capaces de hacer lo que más nos gusta, todo placer es de agradecer y cada dolor se puede evitar. Pero en ciertas circunstancias y debido a las exigencias del deber o de las obligaciones de la empresa, estos placeres tienen que ser repudiados y sus molestias aceptadas .El hombre sabio, por lo tanto, siempre tiene en estos asuntos una elección: rechaza placeres para asegurar otros placeres mayores, o de lo contrario evita los dolores para evitar dolores peores.\u003c\/p\u003e\n[\/product_description]","published_at":"2018-09-26T08:54:50-04:00","created_at":"2018-09-26T08:54:50-04:00","vendor":"Glus","type":"","tags":["black","Cotton","Fiber","magenta","md","orange","Partex","pink","Plastic","purple","sm","yellow"],"price":30000,"price_min":30000,"price_max":50000,"available":true,"price_varies":true,"compare_at_price":55500,"compare_at_price_min":55500,"compare_at_price_max":55500,"compare_at_price_varies":false,"variants":[{"id":14650581319791,"title":"lg \/ orange \/ Wool","option1":"lg","option2":"orange","option3":"Wool","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - lg \/ orange \/ Wool","public_title":"lg \/ orange \/ Wool","options":["lg","orange","Wool"],"price":50000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581352559,"title":"lg \/ orange \/ Fiber","option1":"lg","option2":"orange","option3":"Fiber","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - lg \/ orange \/ Fiber","public_title":"lg \/ orange \/ Fiber","options":["lg","orange","Fiber"],"price":38500,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581385327,"title":"lg \/ orange \/ Plastic","option1":"lg","option2":"orange","option3":"Plastic","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - lg \/ orange \/ Plastic","public_title":"lg \/ orange \/ Plastic","options":["lg","orange","Plastic"],"price":37500,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581418095,"title":"lg \/ purple \/ Wool","option1":"lg","option2":"purple","option3":"Wool","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - lg \/ purple \/ Wool","public_title":"lg \/ purple \/ Wool","options":["lg","purple","Wool"],"price":36500,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581450863,"title":"lg \/ purple \/ Fiber","option1":"lg","option2":"purple","option3":"Fiber","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - lg \/ purple \/ Fiber","public_title":"lg \/ purple \/ Fiber","options":["lg","purple","Fiber"],"price":35500,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581483631,"title":"lg \/ purple \/ Plastic","option1":"lg","option2":"purple","option3":"Plastic","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - lg \/ purple \/ Plastic","public_title":"lg \/ purple \/ Plastic","options":["lg","purple","Plastic"],"price":34500,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581516399,"title":"lg \/ pink \/ Wool","option1":"lg","option2":"pink","option3":"Wool","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - lg \/ pink \/ Wool","public_title":"lg \/ pink \/ Wool","options":["lg","pink","Wool"],"price":33500,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581549167,"title":"lg \/ pink \/ Fiber","option1":"lg","option2":"pink","option3":"Fiber","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - lg \/ pink \/ Fiber","public_title":"lg \/ pink \/ Fiber","options":["lg","pink","Fiber"],"price":32500,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581581935,"title":"lg \/ pink \/ Plastic","option1":"lg","option2":"pink","option3":"Plastic","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - lg \/ pink \/ Plastic","public_title":"lg \/ pink \/ Plastic","options":["lg","pink","Plastic"],"price":31500,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581614703,"title":"lg \/ violet \/ Wool","option1":"lg","option2":"violet","option3":"Wool","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - lg \/ violet \/ Wool","public_title":"lg \/ violet \/ Wool","options":["lg","violet","Wool"],"price":30500,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581647471,"title":"lg \/ violet \/ Fiber","option1":"lg","option2":"violet","option3":"Fiber","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - lg \/ violet \/ Fiber","public_title":"lg \/ violet \/ Fiber","options":["lg","violet","Fiber"],"price":49000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581680239,"title":"lg \/ violet \/ Plastic","option1":"lg","option2":"violet","option3":"Plastic","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - lg \/ violet \/ Plastic","public_title":"lg \/ violet \/ Plastic","options":["lg","violet","Plastic"],"price":48000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581713007,"title":"lg \/ red \/ Wool","option1":"lg","option2":"red","option3":"Wool","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - lg \/ red \/ Wool","public_title":"lg \/ red \/ Wool","options":["lg","red","Wool"],"price":47000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581745775,"title":"lg \/ red \/ Fiber","option1":"lg","option2":"red","option3":"Fiber","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - lg \/ red \/ Fiber","public_title":"lg \/ red \/ Fiber","options":["lg","red","Fiber"],"price":46000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581778543,"title":"lg \/ red \/ Plastic","option1":"lg","option2":"red","option3":"Plastic","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - lg \/ red \/ Plastic","public_title":"lg \/ red \/ Plastic","options":["lg","red","Plastic"],"price":45000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581811311,"title":"sm \/ orange \/ Wool","option1":"sm","option2":"orange","option3":"Wool","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - sm \/ orange \/ Wool","public_title":"sm \/ orange \/ Wool","options":["sm","orange","Wool"],"price":44000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581844079,"title":"sm \/ orange \/ Fiber","option1":"sm","option2":"orange","option3":"Fiber","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - sm \/ orange \/ Fiber","public_title":"sm \/ orange \/ Fiber","options":["sm","orange","Fiber"],"price":43000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581876847,"title":"sm \/ orange \/ Plastic","option1":"sm","option2":"orange","option3":"Plastic","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - sm \/ orange \/ Plastic","public_title":"sm \/ orange \/ Plastic","options":["sm","orange","Plastic"],"price":42000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581909615,"title":"sm \/ purple \/ Wool","option1":"sm","option2":"purple","option3":"Wool","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - sm \/ purple \/ Wool","public_title":"sm \/ purple \/ Wool","options":["sm","purple","Wool"],"price":41000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581942383,"title":"sm \/ purple \/ Fiber","option1":"sm","option2":"purple","option3":"Fiber","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - sm \/ purple \/ Fiber","public_title":"sm \/ purple \/ Fiber","options":["sm","purple","Fiber"],"price":40000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650581975151,"title":"sm \/ purple \/ Plastic","option1":"sm","option2":"purple","option3":"Plastic","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - sm \/ purple \/ Plastic","public_title":"sm \/ purple \/ Plastic","options":["sm","purple","Plastic"],"price":39000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650582007919,"title":"sm \/ pink \/ Wool","option1":"sm","option2":"pink","option3":"Wool","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - sm \/ pink \/ Wool","public_title":"sm \/ pink \/ Wool","options":["sm","pink","Wool"],"price":38000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650582040687,"title":"sm \/ pink \/ Fiber","option1":"sm","option2":"pink","option3":"Fiber","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - sm \/ pink \/ Fiber","public_title":"sm \/ pink \/ Fiber","options":["sm","pink","Fiber"],"price":37000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650582073455,"title":"sm \/ pink \/ Plastic","option1":"sm","option2":"pink","option3":"Plastic","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - sm \/ pink \/ Plastic","public_title":"sm \/ pink \/ Plastic","options":["sm","pink","Plastic"],"price":36000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650582106223,"title":"sm \/ violet \/ Wool","option1":"sm","option2":"violet","option3":"Wool","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - sm \/ violet \/ Wool","public_title":"sm \/ violet \/ Wool","options":["sm","violet","Wool"],"price":35000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650582138991,"title":"sm \/ violet \/ Fiber","option1":"sm","option2":"violet","option3":"Fiber","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - sm \/ violet \/ Fiber","public_title":"sm \/ violet \/ Fiber","options":["sm","violet","Fiber"],"price":34000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650582171759,"title":"sm \/ violet \/ Plastic","option1":"sm","option2":"violet","option3":"Plastic","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - sm \/ violet \/ Plastic","public_title":"sm \/ violet \/ Plastic","options":["sm","violet","Plastic"],"price":33000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650582204527,"title":"sm \/ red \/ Wool","option1":"sm","option2":"red","option3":"Wool","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - sm \/ red \/ Wool","public_title":"sm \/ red \/ Wool","options":["sm","red","Wool"],"price":32000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650582237295,"title":"sm \/ red \/ Fiber","option1":"sm","option2":"red","option3":"Fiber","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - sm \/ red \/ Fiber","public_title":"sm \/ red \/ Fiber","options":["sm","red","Fiber"],"price":31000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""},{"id":14650582270063,"title":"sm \/ red \/ Plastic","option1":"sm","option2":"red","option3":"Plastic","sku":"","requires_shipping":true,"taxable":true,"featured_image":null,"available":true,"name":"Lorem Ipsum - sm \/ red \/ Plastic","public_title":"sm \/ red \/ Plastic","options":["sm","red","Plastic"],"price":30000,"weight":0,"compare_at_price":55500,"inventory_management":null,"barcode":""}],"images":["\/\/cdn.shopify.com\/s\/files\/1\/0049\/9043\/5439\/products\/product_5_f073bdbe-103c-4341-9348-cb7fbf62087c.jpg?v=1540271241","\/\/cdn.shopify.com\/s\/files\/1\/0049\/9043\/5439\/products\/product_6_69ceb2db-6d26-48f3-a8b7-4179679d0d67.jpg?v=1540271242","\/\/cdn.shopify.com\/s\/files\/1\/0049\/9043\/5439\/products\/product_7_68a1f3c6-cb6d-4676-b99e-1c0f0c44cff3.jpg?v=1540271244","\/\/cdn.shopify.com\/s\/files\/1\/0049\/9043\/5439\/products\/product_8_6fbafd55-fa47-4f01-9d6d-1795253cb17e.jpg?v=1540271245","\/\/cdn.shopify.com\/s\/files\/1\/0049\/9043\/5439\/products\/product_9_d9be57e3-b6a5-4dda-8994-6b878bae256b.jpg?v=1540271246","\/\/cdn.shopify.com\/s\/files\/1\/0049\/9043\/5439\/products\/product_10_57f8f809-1072-4c18-972d-e2df3449886e.jpg?v=1540271248"],"featured_image":"\/\/cdn.shopify.com\/s\/files\/1\/0049\/9043\/5439\/products\/product_5_f073bdbe-103c-4341-9348-cb7fbf62087c.jpg?v=1540271241","options":["Size","Color","Material"],"content":"\u003cp\u003eLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a convallis nisl, at aliquam dolor. Morbi in iaculis nunc. Nulla eu mi at velit imperdiet sollicitudin sed vel risus. Quisque eleifend lorem ipsum, et tempus nulla convallis nec. Nos aseguraremos de que para publicar un comentario. Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aquí, contenido aquí\". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de \"Lorem Ipsum\" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo.\u003c\/p\u003e\n[short_description]\n\u003cp\u003eEn el valle, la vivienda en la vigilancia específica, el reemplazo o la consolidación de la cama, un hombre obsesionado con la reducción de opciones de apuestas ilegales. Wow, mercado muy atractivo, de mis visitantes. Tiempo de desarrollo reciente para odiar, un bar beef tiempo.\u003c\/p\u003e\n[\/short_description] [product_description]\n\u003cp\u003eLorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Mañana, a partir de los botones de opción, sino un poco de dolor. Escribir en el freno ahora. No hay comentarios eran, en el mejor, pero el financiamiento de la atención de la salud o la risa. Bienvenido a aprender más acerca de la cultura popular, y el tiempo, no, ni a crecer fuerte. Miramos a los miembros de televisión por cable de televisión.\u003cbr\u003e\u003cbr\u003ePor otra parte, denunciamos con indignación a los hombres que son engañados y desmoralizados por los encantos del placer del momento, tan cegados por el deseo, que no pueden prever el dolor y la molestia que se va a producir, y la misma culpa es de los que faltan a su deber por debilidad de la voluntad, que es lo mismo que decir que fallan por la fatiga y el dolor. Estos casos son muy simples y fácil de distinguir. En una hora libre, sin las trabas de nuestro poder de elección y cuando nada impida que seamos capaces de hacer lo que más nos gusta, todo placer es de agradecer y cada dolor se puede evitar. Pero en ciertas circunstancias y debido a las exigencias del deber o de las obligaciones de la empresa, estos placeres tienen que ser repudiados y sus molestias aceptadas .El hombre sabio, por lo tanto, siempre tiene en estos asuntos una elección: rechaza placeres para asegurar otros placeres mayores, o de lo contrario evita los dolores para evitar dolores peores.\u003c\/p\u003e\n[\/product_description]"},
              onVariantSelected: selectCallback,
              enableHistoryState: true
            });
        
            // Add label if only one product option and it isn't 'Title'. Could be 'Size'.
            
        
                                                 // Hide selectors if we only have 1 variant and its title contains 'Default'.
                                                 
          });function productZoom(){
            $(".product-zoom").elevateZoom({
              gallery: 'ProductThumbs',
              galleryActiveClass: "active",
              zoomType: "inner",
              cursor: "crosshair"
            });
        
            $(".product-zoom").on("click", function(e) {
              var ez = $('.product-zoom').data('elevateZoom');
              $.fancybox(ez.getGalleryList());
              return false;
            });
          };
          function productZoomDisable(){
            if( $(window).width() < 767 ) {
              $('.zoomContainer').remove();
              $(".product-zoom").removeData('elevateZoom');
              $(".product-zoom").removeData('zoomImage');
            } else {
              productZoom();
            }
          };
        
          productZoomDisable();
        
          $(window).resize(function() {
            productZoomDisable();
          });</script>
    </div>
    
    <div id="shopify-section-single-product-tab" class="shopify-section">
        <div class="single-product-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div class="product-info mt-half">
                            <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#description" data-toggle="tab" role="tab" aria-selected="true">
                                        {{ __('tag.description') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#reviews" data-toggle="tab" role="tab" aria-selected="false">
                                        {{ __('tag.reviews') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#comments" data-toggle="tab" aria-selected="false">
                                        {{ __('tag.comments') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#custom-tab-1" data-toggle="tab" role="tab" aria-selected="false">
                                        Size chart
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#shipping" data-toggle="tab" role="tab" aria-selected="false">
                                        {{ __('tag.shipping_policy') }}
                                    </a>
                                </li>
                            </ul>
                            <div class="description-review-text tab-content">
                                <div class="tab-pane fade show active" id="description" role="tabpanel">
                                    <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Mañana, a partir de los botones de opción, sino un poco de dolor. Escribir en el freno ahora. No hay comentarios eran, en el mejor, pero el financiamiento de la atención de la salud o la risa. Bienvenido a aprender más acerca de la cultura popular, y el tiempo, no, ni a crecer fuerte. Miramos a los miembros de televisión por cable de televisión.<br><br>Por otra parte, denunciamos con indignación a los hombres que son engañados y desmoralizados por los encantos del placer del momento, tan cegados por el deseo, que no pueden prever el dolor y la molestia que se va a producir, y la misma culpa es de los que faltan a su deber por debilidad de la voluntad, que es lo mismo que decir que fallan por la fatiga y el dolor. Estos casos son muy simples y fácil de distinguir. En una hora libre, sin las trabas de nuestro poder de elección y cuando nada impida que seamos capaces de hacer lo que más nos gusta, todo placer es de agradecer y cada dolor se puede evitar. Pero en ciertas circunstancias y debido a las exigencias del deber o de las obligaciones de la empresa, estos placeres tienen que ser repudiados y sus molestias aceptadas .El hombre sabio, por lo tanto, siempre tiene en estos asuntos una elección: rechaza placeres para asegurar otros placeres mayores, o de lo contrario evita los dolores para evitar dolores peores.</p>
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel">
                                    <div id="shopify-product-reviews" data-id="1617018912879"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="comments">
                                    <div class="fb-comment-box">
                                        <div id="disqus_thread"></div>
                                        <script>
                                            /**
                                            *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                            *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                                            /*
                                            var disqus_config = function () {
                                            this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                                            this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                            };
                                            */
                                            (function() { // DON'T EDIT BELOW THIS LINE
                                            var d = document, s = d.createElement('script');
                                            s.src = 'https://demo-store.disqus.com/embed.js';
                                            s.setAttribute('data-timestamp', +new Date());
                                            (d.head || d.body).appendChild(s);
                                            })();
                                        </script>
                                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                    </div>
                                </div>
                                
                                <div class="tab-pane" id="custom-tab-1" role="tabpanel">
                                    <h4>Size Chart</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="cun-name"><span>UK</span></td>
                                                    <td>18</td>
                                                    <td>20</td>
                                                    <td>22</td>
                                                    <td>24</td>
                                                    <td>26</td>
                                                </tr>
                                                <tr>
                                                    <td class="cun-name"><span>European</span></td>
                                                    <td>46</td>
                                                    <td>48</td>
                                                    <td>50</td>
                                                    <td>52</td>
                                                    <td>54</td>
                                                </tr>
                                                <tr>
                                                <td class="cun-name"><span>usa</span></td>
                                                    <td>14</td>
                                                    <td>16</td>
                                                    <td>18</td>
                                                    <td>20</td>
                                                    <td>22</td>
                                                </tr>
                                                <tr>
                                                <td class="cun-name"><span>Australia</span></td>
                                                    <td>28</td>
                                                    <td>10</td>
                                                    <td>12</td>
                                                    <td>14</td>
                                                    <td>16</td>
                                                </tr>
                                                <tr>
                                                <td class="cun-name"><span>Canada</span></td>
                                                    <td>24</td>
                                                    <td>18</td>
                                                    <td>14</td>
                                                    <td>42</td>
                                                    <td>36</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="tab-pane" id="shipping" role="tabpanel">
                                    <h4>Shipping policy for our store</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate</p>
                                    <ul>
                                        <li>1-2 business days (Typically by end of day)</li>
                                        <li><a href="#">30 days money back guaranty</a></li>
                                        <li>24/7 live support</li>
                                        <li>odio dignissim qui blandit praesent</li>
                                        <li>luptatum zzril delenit augue duis dolore</li>
                                        <li>te feugait nulla facilisi.</li>
                                    </ul>
                                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum</p>
                                    <p>claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per</p>
                                    <p>seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- RELATED GOES HERE -->
    
</div>
@endsection
