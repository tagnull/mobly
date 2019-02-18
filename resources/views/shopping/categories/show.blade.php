@extends('layouts.shop')

@section('breadcrumb')
    @php
        $breadcrumb = $breadcrumb ?? [
            'title' => 'Shopping Cart',
            'path' => [
                [
                    'name' => __('menu.categories'),
                    'url' => route('categories.index')
                ]
            ],
        ]
    @endphp
    @component('layouts.components.breadcrumb', $breadcrumb)@endcomponent
@endsection

@section('content')
<div id="shopify-section-collection-template" class="shopify-section"><!-- Start of Products Wrapper -->
<div class="products-wrapper" id="section-collection-template">
  <div class="container">
    <div class="row ">  
        <div class="col-12 col-sm-12 col-md-12 col-lg-9 order-1 order-md-1 order-lg-2"><main id="primary" class="site-main">
            <div class="shop-wrapper"><div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                  
                  
                  
                  	<h1>Shop</h1><div class="shop-toolbar">
  <div class="toolbar-inner">
    
    
    <div class="product-view-mode">
      <ul role="tablist" class="nav shop-item-filter-list">
        <li role="presentation" class="active"><a href="#grid" aria-controls="grid" role="tab" data-toggle="tab" class="active show" aria-selected="true"><i class="ion-md-grid"></i></a></li>
        <li role="presentation"><a href="#list" aria-controls="list" role="tab" data-toggle="tab"><i class="ion-md-list"></i></a></li>
      </ul>
    </div>
    
    
    

    <div class="toolbar-amount">
      <span>
        Showing  
        1 - 12 
         of  
        33 
         result 
      </span>
    </div>
    
    
    
    
  </div>
  
  
  <div class="product-select-box">
    <div class="product-sort">
      <P for="SortBy">Sort by :</P>
      <select class="nice-select" name="SortBy" id="SortBy">
        <option value="manual">Featured</option>
        <option value="best-selling">Best Selling</option>
        <option value="title-ascending">Alphabetically, A-Z</option>
        <option value="title-descending">Alphabetically, Z-A</option>
        <option value="price-ascending">Price, low to high</option>
        <option value="price-descending">Price, high to low</option>
        <option value="created-descending">Date, new to old</option>
        <option value="created-ascending">Date, old to new</option>
      </select>
    </div>
  </div>
  
  
</div>


<script>
  Shopify.queryParams = {};
  if (location.search.length) {
    for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
      aKeyValue = aCouples[i].split('=');
      if (aKeyValue.length > 1) {
        Shopify.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
      }
    }
  }

  $(function() {
    $('#SortBy')
    .val('title-ascending')
         .bind('change', function() {
      Shopify.queryParams.sort_by = jQuery(this).val();
      location.search = jQuery.param(Shopify.queryParams);
    }
    );
  });
</script>
</div>
              </div> <!-- end of row --><div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                  <div class="shop-products-wrapper">
                    <div class="tab-content">
                      <div id="grid" class="tab-pane anime-tab active show" role="tabpanel">
                        <div class="row"><article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4"><div class="product-thumb ">
  <div class="product-inner">
    <div class="product-image">
  
  <div class="label-product label-sale">
    <span>17%</span>
  </div>
  

  

<a href="/products/adquiera-mas">
        <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_1_large.jpg?v=1540269311" alt="product_image">
      </a>

      <div class="action-links">

        

        
        <a href="javascript:void(0);" onclick="Shopify.addItem(14650572931183, 1); return false;" class="ajax-spin-cart">
          <span>
            <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
            <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
            <span class="cart-added"><i class="pe-7s-check"></i></span>
            <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
          </span>
        </a>

        


         

        
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



        <a class="action-btn btn-compare" href="/products/adquiera-mas" title="Add to Compare"><i class="pe-7s-link"></i></a>


        <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
           href="javascript:void(0);" onclick="quiqview('adquiera-mas')">
          <i class="pe-7s-search"></i>
        </a>
      </div><div class="timer timer-style">
        <div class="product-countdown" data-countdown="2020/06/10"></div>
      </div></div> <!-- end of product-image -->

    <div class="product-caption">
      <div class="product-meta d-flex justify-content-between align-items-center">
        <div class="product-manufacturer">

          <a href="/collections/vendors?q=Generic" title="Generic">Generic</a>

        </div><div class="product-ratings">
          <div class="rating-box">
            <span class="shopify-product-reviews-badge" data-id="1617018585199"></span>
          </div>
        </div></div>
      <h4 class="product-name"> <a href="/products/adquiera-mas">Adquiera Mas</a></h4>
      <p class="product-price">

        
        <span class="price-old"><span class=money>$180.00</span></span>
        <span class="price-new"><span class=money>$150.00</span></span>
        

      </p>
    </div><!-- end of product-caption -->
  </div><!-- end of product-inner -->
</div><!-- end of product-thumb -->
</article> <!-- end of product-layout --><article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4"><div class="product-thumb ">
  <div class="product-inner">
    <div class="product-image">
  
  <div class="label-product label-sale">
    <span>27%</span>
  </div>
  

  

<a href="/products/affiliate-product">
        <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_3_54c58d43-afd5-4a38-b121-d11016e82157_large.jpg?v=1540269365" alt="product_image">
      </a>

      <div class="action-links">

        

        
        


        <a class="action-btn btn-cart" href="https://affiliate-program.amazon.com/">
          <i class="pe-7s-shopbag"></i>
        </a>

         

        
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



        <a class="action-btn btn-compare" href="/products/affiliate-product" title="Add to Compare"><i class="pe-7s-link"></i></a>


        <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
           href="javascript:void(0);" onclick="quiqview('affiliate-product')">
          <i class="pe-7s-search"></i>
        </a>
      </div></div> <!-- end of product-image -->

    <div class="product-caption">
      <div class="product-meta d-flex justify-content-between align-items-center">
        <div class="product-manufacturer">

          <a href="/collections/vendors?q=Aurelia" title="Aurelia">Aurelia</a>

        </div><div class="product-ratings">
          <div class="rating-box">
            <span class="shopify-product-reviews-badge" data-id="1617020518511"></span>
          </div>
        </div></div>
      <h4 class="product-name"> <a href="/products/affiliate-product">Affiliate Product</a></h4>
      <p class="product-price">

        
        <span class="price-old"><span class=money>$600.00</span></span>
        <span class="price-new"><span class=money>$439.00</span></span>
        

      </p>
    </div><!-- end of product-caption -->
  </div><!-- end of product-inner -->
</div><!-- end of product-thumb -->
</article> <!-- end of product-layout --><article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4"><div class="product-thumb ">
  <div class="product-inner">
    <div class="product-image">
  
  <div class="label-product label-sale">
    <span>4%</span>
  </div>
  

  

<a href="/products/algunas-veces-por">
        <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_5_eee6df94-9da1-4059-83d8-701f1c211a00_large.jpg?v=1540269433" alt="product_image">
      </a>

      <div class="action-links">

        

        
        <a href="javascript:void(0);" onclick="Shopify.addItem(14650599997551, 1); return false;" class="ajax-spin-cart">
          <span>
            <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
            <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
            <span class="cart-added"><i class="pe-7s-check"></i></span>
            <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
          </span>
        </a>

        


         

        
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



        <a class="action-btn btn-compare" href="/products/algunas-veces-por" title="Add to Compare"><i class="pe-7s-link"></i></a>


        <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
           href="javascript:void(0);" onclick="quiqview('algunas-veces-por')">
          <i class="pe-7s-search"></i>
        </a>
      </div></div> <!-- end of product-image -->

    <div class="product-caption">
      <div class="product-meta d-flex justify-content-between align-items-center">
        <div class="product-manufacturer">

          <a href="/collections/vendors?q=Creature" title="Creature">Creature</a>

        </div><div class="product-ratings">
          <div class="rating-box">
            <span class="shopify-product-reviews-badge" data-id="1617020289135"></span>
          </div>
        </div></div>
      <h4 class="product-name"> <a href="/products/algunas-veces-por">Algunas Veces Por</a></h4>
      <p class="product-price">

        
        <span class="price-old"><span class=money>$539.00</span></span>
        <span class="price-new"><span class=money>$519.00</span></span>
        

      </p>
    </div><!-- end of product-caption -->
  </div><!-- end of product-inner -->
</div><!-- end of product-thumb -->
</article> <!-- end of product-layout --><article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4"><div class="product-thumb ">
  <div class="product-inner">
    <div class="product-image">
  
  <div class="label-product label-sale">
    <span>8%</span>
  </div>
  

  

<a href="/products/aquellos-interesados">
        <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_7_3e7da5df-3040-473b-8de0-7337ceb27ebc_large.jpg?v=1540269508" alt="product_image">
      </a>

      <div class="action-links">

        

        
        <a href="javascript:void(0);" onclick="Shopify.addItem(14650590101615, 1); return false;" class="ajax-spin-cart">
          <span>
            <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
            <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
            <span class="cart-added"><i class="pe-7s-check"></i></span>
            <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
          </span>
        </a>

        


         

        
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



        <a class="action-btn btn-compare" href="/products/aquellos-interesados" title="Add to Compare"><i class="pe-7s-link"></i></a>


        <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
           href="javascript:void(0);" onclick="quiqview('aquellos-interesados')">
          <i class="pe-7s-search"></i>
        </a>
      </div></div> <!-- end of product-image -->

    <div class="product-caption">
      <div class="product-meta d-flex justify-content-between align-items-center">
        <div class="product-manufacturer">

          <a href="/collections/vendors?q=Aurelia" title="Aurelia">Aurelia</a>

        </div><div class="product-ratings">
          <div class="rating-box">
            <span class="shopify-product-reviews-badge" data-id="1617019469935"></span>
          </div>
        </div></div>
      <h4 class="product-name"> <a href="/products/aquellos-interesados">Aquellos Interesados</a></h4>
      <p class="product-price">

        
        <span class="price-old"><span class=money>$275.00</span></span>
        <span class="price-new"><span class=money>$255.00</span></span>
        

      </p>
    </div><!-- end of product-caption -->
  </div><!-- end of product-inner -->
</div><!-- end of product-thumb -->
</article> <!-- end of product-layout --><article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4"><div class="product-thumb ">
  <div class="product-inner">
    <div class="product-image">

    
    <div class="label-product label-sale">
      <span>12%</span>
    </div>
    

    
     
    
    
    
    
    
    
    
    
     
    




<a href="/products/combinadas-con">
        <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_8_d2d7d86d-0e79-4270-ad3b-95eb62fdd832_large.jpg?v=1540269593" alt="product_image">
      </a>

      <div class="action-links">

        

        
        <a href="javascript:void(0);" onclick="Shopify.addItem(14650549108847, 1); return false;" class="ajax-spin-cart">
          <span>
            <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
            <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
            <span class="cart-added"><i class="pe-7s-check"></i></span>
            <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
          </span>
        </a>

        


         

        
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



        <a class="action-btn btn-compare" href="/products/combinadas-con" title="Add to Compare"><i class="pe-7s-link"></i></a>


        <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
           href="javascript:void(0);" onclick="quiqview('combinadas-con')">
          <i class="pe-7s-search"></i>
        </a>
      </div><div class="timer timer-style">
        <div class="product-countdown" data-countdown="2020/06/10"></div>
      </div></div> <!-- end of product-image -->

    <div class="product-caption">
      <div class="product-meta d-flex justify-content-between align-items-center">
        <div class="product-manufacturer">

          <a href="/collections/vendors?q=Test" title="Test">Test</a>

        </div><div class="product-ratings">
          <div class="rating-box">
            <span class="shopify-product-reviews-badge" data-id="1617016946799"></span>
          </div>
        </div></div>
      <h4 class="product-name"> <a href="/products/combinadas-con">Combinadas Con</a></h4>
      <p class="product-price">

        
        <span class="price-old"><span class=money>$340.00</span></span>
        <span class="price-new"><span class=money>$300.00</span></span>
        

      </p>
    </div><!-- end of product-caption -->
  </div><!-- end of product-inner -->
</div><!-- end of product-thumb -->
</article> <!-- end of product-layout --><article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4"><div class="product-thumb ">
  <div class="product-inner">
    <div class="product-image">

    
    <div class="label-product label-sale">
      <span>53%</span>
    </div>
    

    
     
    
    
    
    
    
    
    
    
     
    




<a href="/products/como-por-ejemplo">
        <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_10_567f9f12-7cac-48f3-83ba-3aa55b585b75_large.jpg?v=1540269660" alt="product_image">
      </a>

      <div class="action-links">

        

        
        <a href="javascript:void(0);" onclick="Shopify.addItem(14650556317807, 1); return false;" class="ajax-spin-cart">
          <span>
            <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
            <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
            <span class="cart-added"><i class="pe-7s-check"></i></span>
            <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
          </span>
        </a>

        


         

        
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



        <a class="action-btn btn-compare" href="/products/como-por-ejemplo" title="Add to Compare"><i class="pe-7s-link"></i></a>


        <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
           href="javascript:void(0);" onclick="quiqview('como-por-ejemplo')">
          <i class="pe-7s-search"></i>
        </a>
      </div></div> <!-- end of product-image -->

    <div class="product-caption">
      <div class="product-meta d-flex justify-content-between align-items-center">
        <div class="product-manufacturer">

          <a href="/collections/vendors?q=Glus" title="Glus">Glus</a>

        </div><div class="product-ratings">
          <div class="rating-box">
            <span class="shopify-product-reviews-badge" data-id="1617017667695"></span>
          </div>
        </div></div>
      <h4 class="product-name"> <a href="/products/como-por-ejemplo">Como Por Ejemplo</a></h4>
      <p class="product-price">

        
        <span class="price-old"><span class=money>$255.00</span></span>
        <span class="price-new"><span class=money>$120.00</span></span>
        

      </p>
    </div><!-- end of product-caption -->
  </div><!-- end of product-inner -->
</div><!-- end of product-thumb -->
</article> <!-- end of product-layout --><article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4"><div class="product-thumb ">
  <div class="product-inner">
    <div class="product-image">

    
    <div class="label-product label-sale">
      <span>10%</span>
    </div>
    

    
     
    
    
    
    
    
    
    
    
     
    




<a href="/products/cuando-new-impresor">
        <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_11_21cdca58-c25a-467d-964c-b7c700bf0bdd_large.jpg?v=1540269901" alt="product_image">
      </a>

      <div class="action-links">

        

        
        <a href="javascript:void(0);" onclick="Shopify.addItem(14650564575343, 1); return false;" class="ajax-spin-cart">
          <span>
            <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
            <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
            <span class="cart-added"><i class="pe-7s-check"></i></span>
            <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
          </span>
        </a>

        


         

        
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



        <a class="action-btn btn-compare" href="/products/cuando-new-impresor" title="Add to Compare"><i class="pe-7s-link"></i></a>


        <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
           href="javascript:void(0);" onclick="quiqview('cuando-new-impresor')">
          <i class="pe-7s-search"></i>
        </a>
      </div></div> <!-- end of product-image -->

    <div class="product-caption">
      <div class="product-meta d-flex justify-content-between align-items-center">
        <div class="product-manufacturer">

          <a href="/collections/vendors?q=Krystle" title="Krystle">Krystle</a>

        </div><div class="product-ratings">
          <div class="rating-box">
            <span class="shopify-product-reviews-badge" data-id="1617018126447"></span>
          </div>
        </div></div>
      <h4 class="product-name"> <a href="/products/cuando-new-impresor">Cuando New Impresor</a></h4>
      <p class="product-price">

        
        <span class="price-old"><span class=money>$500.00</span></span>
        <span class="price-new"><span class=money>$450.00</span></span>
        

      </p>
    </div><!-- end of product-caption -->
  </div><!-- end of product-inner -->
</div><!-- end of product-thumb -->
</article> <!-- end of product-layout --><article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4"><div class="product-thumb ">
  <div class="product-inner">
    <div class="product-image">
  
  <div class="label-product label-sale">
    <span>13%</span>
  </div>
  

  

<a href="/products/estado-de-desarrollo">
        <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_12_a78a9c69-914c-482e-a230-ef5a6492b544_large.jpg?v=1540270022" alt="product_image">
      </a>

      <div class="action-links">

        

        
        <a href="javascript:void(0);" onclick="Shopify.addItem(14650595672175, 1); return false;" class="ajax-spin-cart">
          <span>
            <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
            <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
            <span class="cart-added"><i class="pe-7s-check"></i></span>
            <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
          </span>
        </a>

        


         

        
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



        <a class="action-btn btn-compare" href="/products/estado-de-desarrollo" title="Add to Compare"><i class="pe-7s-link"></i></a>


        <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
           href="javascript:void(0);" onclick="quiqview('estado-de-desarrollo')">
          <i class="pe-7s-search"></i>
        </a>
      </div></div> <!-- end of product-image -->

    <div class="product-caption">
      <div class="product-meta d-flex justify-content-between align-items-center">
        <div class="product-manufacturer">

          <a href="/collections/vendors?q=Orion" title="Orion">Orion</a>

        </div><div class="product-ratings">
          <div class="rating-box">
            <span class="shopify-product-reviews-badge" data-id="1617019764847"></span>
          </div>
        </div></div>
      <h4 class="product-name"> <a href="/products/estado-de-desarrollo">Estado De Desarrollo</a></h4>
      <p class="product-price">

        
        <span class="price-old"><span class=money>$600.00</span></span>
        <span class="price-new"><span class=money>$526.00</span></span>
        

      </p>
    </div><!-- end of product-caption -->
  </div><!-- end of product-inner -->
</div><!-- end of product-thumb -->
</article> <!-- end of product-layout --><article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4"><div class="product-thumb ">
  <div class="product-inner">
    <div class="product-image">
  
  <div class="label-product label-sale">
    <span>17%</span>
  </div>
  

  

<a href="/products/finibus-bonorum">
        <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_13_5e0895c3-7d7e-4555-8513-a56b4d78a3a5_large.jpg?v=1540270240" alt="product_image">
      </a>

      <div class="action-links">

        

        
        <a href="javascript:void(0);" onclick="Shopify.addItem(14650587840623, 1); return false;" class="ajax-spin-cart">
          <span>
            <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
            <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
            <span class="cart-added"><i class="pe-7s-check"></i></span>
            <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
          </span>
        </a>

        


         

        
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



        <a class="action-btn btn-compare" href="/products/finibus-bonorum" title="Add to Compare"><i class="pe-7s-link"></i></a>


        <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
           href="javascript:void(0);" onclick="quiqview('finibus-bonorum')">
          <i class="pe-7s-search"></i>
        </a>
      </div><div class="timer timer-style">
        <div class="product-countdown" data-countdown="2020/07/10"></div>
      </div></div> <!-- end of product-image -->

    <div class="product-caption">
      <div class="product-meta d-flex justify-content-between align-items-center">
        <div class="product-manufacturer">

          <a href="/collections/vendors?q=Aurelia" title="Aurelia">Aurelia</a>

        </div><div class="product-ratings">
          <div class="rating-box">
            <span class="shopify-product-reviews-badge" data-id="1617019240559"></span>
          </div>
        </div></div>
      <h4 class="product-name"> <a href="/products/finibus-bonorum">Finibus Bonorum</a></h4>
      <p class="product-price">

        
        <span class="price-old"><span class=money>$560.00</span></span>
        <span class="price-new"><span class=money>$467.00</span></span>
        

      </p>
    </div><!-- end of product-caption -->
  </div><!-- end of product-inner -->
</div><!-- end of product-thumb -->
</article> <!-- end of product-layout --><article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4"><div class="product-thumb ">
  <div class="product-inner">
    <div class="product-image">

    
    <div class="label-product label-sale">
      <span>18%</span>
    </div>
    

    
     
    
    
    
    
    
    
    
    
     
    
    <div class="label-product label-new">
      <span>New</span>
    </div>
    




<a href="/products/hacen-new-parecerlo">
        <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_14_4a364132-2492-4084-a7b9-ef1a1f3b932f_large.jpg?v=1540270304" alt="product_image">
      </a>

      <div class="action-links">

        

        
        <a href="javascript:void(0);" onclick="Shopify.addItem(14650597441647, 1); return false;" class="ajax-spin-cart">
          <span>
            <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
            <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
            <span class="cart-added"><i class="pe-7s-check"></i></span>
            <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
          </span>
        </a>

        


         

        
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



        <a class="action-btn btn-compare" href="/products/hacen-new-parecerlo" title="Add to Compare"><i class="pe-7s-link"></i></a>


        <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
           href="javascript:void(0);" onclick="quiqview('hacen-new-parecerlo')">
          <i class="pe-7s-search"></i>
        </a>
      </div></div> <!-- end of product-image -->

    <div class="product-caption">
      <div class="product-meta d-flex justify-content-between align-items-center">
        <div class="product-manufacturer">

          <a href="/collections/vendors?q=Creature" title="Creature">Creature</a>

        </div><div class="product-ratings">
          <div class="rating-box">
            <span class="shopify-product-reviews-badge" data-id="1617020092527"></span>
          </div>
        </div></div>
      <h4 class="product-name"> <a href="/products/hacen-new-parecerlo">Hacen New Parecerlo</a></h4>
      <p class="product-price">

        
        <span class="price-old"><span class=money>$580.00</span></span>
        <span class="price-new"><span class=money>$480.00</span></span>
        

      </p>
    </div><!-- end of product-caption -->
  </div><!-- end of product-inner -->
</div><!-- end of product-thumb -->
</article> <!-- end of product-layout --><article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4"><div class="product-thumb ">
  <div class="product-inner">
    <div class="product-image">

    
    <div class="label-product label-sale">
      <span>35%</span>
    </div>
    

    
     
    
    
    
    
    
    
    
    
     
    




<a href="/products/hay-new-muchas">
        <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_17_61a75a05-d3e4-4ddf-bf10-645ca3d8e180_large.jpg?v=1540270357" alt="product_image">
      </a>

      <div class="action-links">

        

        
        <a href="javascript:void(0);" onclick="Shopify.addItem(14650550419567, 1); return false;" class="ajax-spin-cart">
          <span>
            <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
            <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
            <span class="cart-added"><i class="pe-7s-check"></i></span>
            <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
          </span>
        </a>

        


         

        
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



        <a class="action-btn btn-compare" href="/products/hay-new-muchas" title="Add to Compare"><i class="pe-7s-link"></i></a>


        <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
           href="javascript:void(0);" onclick="quiqview('hay-new-muchas')">
          <i class="pe-7s-search"></i>
        </a>
      </div></div> <!-- end of product-image -->

    <div class="product-caption">
      <div class="product-meta d-flex justify-content-between align-items-center">
        <div class="product-manufacturer">

          <a href="/collections/vendors?q=Krystle" title="Krystle">Krystle</a>

        </div><div class="product-ratings">
          <div class="rating-box">
            <span class="shopify-product-reviews-badge" data-id="1617017110639"></span>
          </div>
        </div></div>
      <h4 class="product-name"> <a href="/products/hay-new-muchas">Hay New Muchas</a></h4>
      <p class="product-price">

        
        <span class="price-old"><span class=money>$287.00</span></span>
        <span class="price-new"><span class=money>$187.00</span></span>
        

      </p>
    </div><!-- end of product-caption -->
  </div><!-- end of product-inner -->
</div><!-- end of product-thumb -->
</article> <!-- end of product-layout --><article class="product-layout col-6 col-sm-6 col-md-4 col-lg-4"><div class="product-thumb ">
  <div class="product-inner">
    <div class="product-image">

    
    <div class="label-product label-sale">
      <span>8%</span>
    </div>
    

    
     
    
    
    
    
    
    
    
    
     
    
    <div class="label-product label-new">
      <span>New</span>
    </div>
    




<a href="/products/humor-new-agregado">
        <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_15_44d859a1-d12d-494a-a065-be50d8366273_large.jpg?v=1538023932" alt="product_image">
      </a>

      <div class="action-links">

        

        
        <a href="javascript:void(0);" onclick="Shopify.addItem(14650580566127, 1); return false;" class="ajax-spin-cart">
          <span>
            <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
            <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
            <span class="cart-added"><i class="pe-7s-check"></i></span>
            <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
          </span>
        </a>

        


         

        
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



        <a class="action-btn btn-compare" href="/products/humor-new-agregado" title="Add to Compare"><i class="pe-7s-link"></i></a>


        <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
           href="javascript:void(0);" onclick="quiqview('humor-new-agregado')">
          <i class="pe-7s-search"></i>
        </a>
      </div></div> <!-- end of product-image -->

    <div class="product-caption">
      <div class="product-meta d-flex justify-content-between align-items-center">
        <div class="product-manufacturer">

          <a href="/collections/vendors?q=Generic" title="Generic">Generic</a>

        </div><div class="product-ratings">
          <div class="rating-box">
            <span class="shopify-product-reviews-badge" data-id="1617018814575"></span>
          </div>
        </div></div>
      <h4 class="product-name"> <a href="/products/humor-new-agregado">Humor New Agregado</a></h4>
      <p class="product-price">

        
        <span class="price-old"><span class=money>$700.00</span></span>
        <span class="price-new"><span class=money>$650.00</span></span>
        

      </p>
    </div><!-- end of product-caption -->
  </div><!-- end of product-inner -->
</div><!-- end of product-thumb -->
</article> <!-- end of product-layout --></div>
                      </div>
                      <div id="list" class="tab-pane anime-tab" role="tabpanel">
                        <div class="row"><div class="col-12 col-sm-12 col-md-12"><article class="product-layout product-list">
  <div class="product-thumb ">
    <div class="product-inner media align-items-center">
      <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
  
  <div class="label-product label-sale">
    <span>17%</span>
  </div>
  

  

<a href="/products/adquiera-mas">
          <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_1_large.jpg?v=1540269311" alt="product_image">
        </a>
        

        <div class="action-links">

          

          
          <a href="javascript:void(0);" onclick="Shopify.addItem(14650572931183, 1); return false;" class="ajax-spin-cart">
            <span>
              <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
              <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
              <span class="cart-added"><i class="pe-7s-check"></i></span>
              <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
            </span>
          </a>

          


           

          
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



          <a class="action-btn btn-compare" href="/products/adquiera-mas" title="Add to Compare"><i class="pe-7s-link"></i></a>


          <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
             href="javascript:void(0);" onclick="quiqview('adquiera-mas')">
            <i class="pe-7s-search"></i>
          </a>
        </div>
        
        
        
      </div> <!-- end of product-image -->

      <div class="product-caption media-body">
        <div class="product-manufacturer">
          <a href="/collections/vendors?q=Generic" title="Generic">Generic</a>
        </div>
        <h4 class="product-name">
          <a href="/products/adquiera-mas">Adquiera Mas</a>
        </h4><div class="product-ratings">
            <div class="rating-box">
              <span class="shopify-product-reviews-badge" data-id="1617018585199"></span>
            </div>
          </div><p class="product-price">

          
          <span class="price-old"><span class=money>$180.00</span></span>
          <span class="price-new"><span class=money>$150.00</span></span>
          

        </p>
        
        <div class="product-des">
<p>En el valle, la vivienda en la vigilancia específica, el reemplazo o la consolidación de la cama, un hombre obsesionado con la reducción de opciones de apuestas ilegales. Wow, mercado muy atractivo, de mis visitantes. Tiempo de desarrollo reciente para odiar, un bar beef tiempo.</p>

</div>
      </div><!-- end of product-caption -->
    </div><!-- end of product-inner -->
  </div><!-- end of product-thumb -->
</article> <!-- end of product-layout -->





</div><div class="col-12 col-sm-12 col-md-12"><article class="product-layout product-list">
  <div class="product-thumb ">
    <div class="product-inner media align-items-center">
      <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
  
  <div class="label-product label-sale">
    <span>27%</span>
  </div>
  

  

<a href="/products/affiliate-product">
          <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_3_54c58d43-afd5-4a38-b121-d11016e82157_large.jpg?v=1540269365" alt="product_image">
        </a>
        

        <div class="action-links">

          

          
          


          <a class="action-btn btn-cart" href="https://affiliate-program.amazon.com/">
            <i class="pe-7s-shopbag"></i>
          </a>

           

          
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



          <a class="action-btn btn-compare" href="/products/affiliate-product" title="Add to Compare"><i class="pe-7s-link"></i></a>


          <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
             href="javascript:void(0);" onclick="quiqview('affiliate-product')">
            <i class="pe-7s-search"></i>
          </a>
        </div>
        
        
        
      </div> <!-- end of product-image -->

      <div class="product-caption media-body">
        <div class="product-manufacturer">
          <a href="/collections/vendors?q=Aurelia" title="Aurelia">Aurelia</a>
        </div>
        <h4 class="product-name">
          <a href="/products/affiliate-product">Affiliate Product</a>
        </h4><div class="product-ratings">
            <div class="rating-box">
              <span class="shopify-product-reviews-badge" data-id="1617020518511"></span>
            </div>
          </div><p class="product-price">

          
          <span class="price-old"><span class=money>$600.00</span></span>
          <span class="price-new"><span class=money>$439.00</span></span>
          

        </p>
        
        <div class="product-des">
<p>En el valle, la vivienda en la vigilancia específica, el reemplazo o la consolidación de la cama, un hombre obsesionado con la reducción de opciones de apuestas ilegales. Wow, mercado muy atractivo, de mis visitantes. Tiempo de desarrollo reciente para odiar, un bar beef tiempo.</p>

</div>
      </div><!-- end of product-caption -->
    </div><!-- end of product-inner -->
  </div><!-- end of product-thumb -->
</article> <!-- end of product-layout -->





</div><div class="col-12 col-sm-12 col-md-12"><article class="product-layout product-list">
  <div class="product-thumb ">
    <div class="product-inner media align-items-center">
      <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
  
  <div class="label-product label-sale">
    <span>4%</span>
  </div>
  

  

<a href="/products/algunas-veces-por">
          <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_5_eee6df94-9da1-4059-83d8-701f1c211a00_large.jpg?v=1540269433" alt="product_image">
        </a>
        

        <div class="action-links">

          

          
          <a href="javascript:void(0);" onclick="Shopify.addItem(14650599997551, 1); return false;" class="ajax-spin-cart">
            <span>
              <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
              <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
              <span class="cart-added"><i class="pe-7s-check"></i></span>
              <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
            </span>
          </a>

          


           

          
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



          <a class="action-btn btn-compare" href="/products/algunas-veces-por" title="Add to Compare"><i class="pe-7s-link"></i></a>


          <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
             href="javascript:void(0);" onclick="quiqview('algunas-veces-por')">
            <i class="pe-7s-search"></i>
          </a>
        </div>
        
        
        
      </div> <!-- end of product-image -->

      <div class="product-caption media-body">
        <div class="product-manufacturer">
          <a href="/collections/vendors?q=Creature" title="Creature">Creature</a>
        </div>
        <h4 class="product-name">
          <a href="/products/algunas-veces-por">Algunas Veces Por</a>
        </h4><div class="product-ratings">
            <div class="rating-box">
              <span class="shopify-product-reviews-badge" data-id="1617020289135"></span>
            </div>
          </div><p class="product-price">

          
          <span class="price-old"><span class=money>$539.00</span></span>
          <span class="price-new"><span class=money>$519.00</span></span>
          

        </p>
        
        <div class="product-des">
<p>En el valle, la vivienda en la vigilancia específica, el reemplazo o la consolidación de la cama, un hombre obsesionado con la reducción de opciones de apuestas ilegales. Wow, mercado muy atractivo, de mis visitantes. Tiempo de desarrollo reciente para odiar, un bar beef tiempo.</p>

</div>
      </div><!-- end of product-caption -->
    </div><!-- end of product-inner -->
  </div><!-- end of product-thumb -->
</article> <!-- end of product-layout -->





</div><div class="col-12 col-sm-12 col-md-12"><article class="product-layout product-list">
  <div class="product-thumb ">
    <div class="product-inner media align-items-center">
      <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
  
  <div class="label-product label-sale">
    <span>8%</span>
  </div>
  

  

<a href="/products/aquellos-interesados">
          <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_7_3e7da5df-3040-473b-8de0-7337ceb27ebc_large.jpg?v=1540269508" alt="product_image">
        </a>
        

        <div class="action-links">

          

          
          <a href="javascript:void(0);" onclick="Shopify.addItem(14650590101615, 1); return false;" class="ajax-spin-cart">
            <span>
              <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
              <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
              <span class="cart-added"><i class="pe-7s-check"></i></span>
              <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
            </span>
          </a>

          


           

          
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



          <a class="action-btn btn-compare" href="/products/aquellos-interesados" title="Add to Compare"><i class="pe-7s-link"></i></a>


          <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
             href="javascript:void(0);" onclick="quiqview('aquellos-interesados')">
            <i class="pe-7s-search"></i>
          </a>
        </div>
        
        
        
      </div> <!-- end of product-image -->

      <div class="product-caption media-body">
        <div class="product-manufacturer">
          <a href="/collections/vendors?q=Aurelia" title="Aurelia">Aurelia</a>
        </div>
        <h4 class="product-name">
          <a href="/products/aquellos-interesados">Aquellos Interesados</a>
        </h4><div class="product-ratings">
            <div class="rating-box">
              <span class="shopify-product-reviews-badge" data-id="1617019469935"></span>
            </div>
          </div><p class="product-price">

          
          <span class="price-old"><span class=money>$275.00</span></span>
          <span class="price-new"><span class=money>$255.00</span></span>
          

        </p>
        
        <div class="product-des">
<p>En el valle, la vivienda en la vigilancia específica, el reemplazo o la consolidación de la cama, un hombre obsesionado con la reducción de opciones de apuestas ilegales. Wow, mercado muy atractivo, de mis visitantes. Tiempo de desarrollo reciente para odiar, un bar beef tiempo.</p>

</div>
      </div><!-- end of product-caption -->
    </div><!-- end of product-inner -->
  </div><!-- end of product-thumb -->
</article> <!-- end of product-layout -->





</div><div class="col-12 col-sm-12 col-md-12"><article class="product-layout product-list">
  <div class="product-thumb ">
    <div class="product-inner media align-items-center">
      <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">

    
    <div class="label-product label-sale">
      <span>12%</span>
    </div>
    

    
     
    
    
    
    
    
    
    
    
     
    




<a href="/products/combinadas-con">
          <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_8_d2d7d86d-0e79-4270-ad3b-95eb62fdd832_large.jpg?v=1540269593" alt="product_image">
        </a>
        

        <div class="action-links">

          

          
          <a href="javascript:void(0);" onclick="Shopify.addItem(14650549108847, 1); return false;" class="ajax-spin-cart">
            <span>
              <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
              <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
              <span class="cart-added"><i class="pe-7s-check"></i></span>
              <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
            </span>
          </a>

          


           

          
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



          <a class="action-btn btn-compare" href="/products/combinadas-con" title="Add to Compare"><i class="pe-7s-link"></i></a>


          <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
             href="javascript:void(0);" onclick="quiqview('combinadas-con')">
            <i class="pe-7s-search"></i>
          </a>
        </div>
        
        
        
      </div> <!-- end of product-image -->

      <div class="product-caption media-body">
        <div class="product-manufacturer">
          <a href="/collections/vendors?q=Test" title="Test">Test</a>
        </div>
        <h4 class="product-name">
          <a href="/products/combinadas-con">Combinadas Con</a>
        </h4><div class="product-ratings">
            <div class="rating-box">
              <span class="shopify-product-reviews-badge" data-id="1617016946799"></span>
            </div>
          </div><p class="product-price">

          
          <span class="price-old"><span class=money>$340.00</span></span>
          <span class="price-new"><span class=money>$300.00</span></span>
          

        </p>
        
        <div class="product-des">
<p>En el valle, la vivienda en la vigilancia específica, el reemplazo o la consolidación de la cama, un hombre obsesionado con la reducción de opciones de apuestas ilegales. Wow, mercado muy atractivo, de mis visitantes. Tiempo de desarrollo reciente para odiar, un bar beef tiempo.</p>

</div>
      </div><!-- end of product-caption -->
    </div><!-- end of product-inner -->
  </div><!-- end of product-thumb -->
</article> <!-- end of product-layout -->





</div><div class="col-12 col-sm-12 col-md-12"><article class="product-layout product-list">
  <div class="product-thumb ">
    <div class="product-inner media align-items-center">
      <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">

    
    <div class="label-product label-sale">
      <span>53%</span>
    </div>
    

    
     
    
    
    
    
    
    
    
    
     
    




<a href="/products/como-por-ejemplo">
          <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_10_567f9f12-7cac-48f3-83ba-3aa55b585b75_large.jpg?v=1540269660" alt="product_image">
        </a>
        

        <div class="action-links">

          

          
          <a href="javascript:void(0);" onclick="Shopify.addItem(14650556317807, 1); return false;" class="ajax-spin-cart">
            <span>
              <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
              <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
              <span class="cart-added"><i class="pe-7s-check"></i></span>
              <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
            </span>
          </a>

          


           

          
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



          <a class="action-btn btn-compare" href="/products/como-por-ejemplo" title="Add to Compare"><i class="pe-7s-link"></i></a>


          <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
             href="javascript:void(0);" onclick="quiqview('como-por-ejemplo')">
            <i class="pe-7s-search"></i>
          </a>
        </div>
        
        
        
      </div> <!-- end of product-image -->

      <div class="product-caption media-body">
        <div class="product-manufacturer">
          <a href="/collections/vendors?q=Glus" title="Glus">Glus</a>
        </div>
        <h4 class="product-name">
          <a href="/products/como-por-ejemplo">Como Por Ejemplo</a>
        </h4><div class="product-ratings">
            <div class="rating-box">
              <span class="shopify-product-reviews-badge" data-id="1617017667695"></span>
            </div>
          </div><p class="product-price">

          
          <span class="price-old"><span class=money>$255.00</span></span>
          <span class="price-new"><span class=money>$120.00</span></span>
          

        </p>
        
        <div class="product-des">
<p>En el valle, la vivienda en la vigilancia específica, el reemplazo o la consolidación de la cama, un hombre obsesionado con la reducción de opciones de apuestas ilegales. Wow, mercado muy atractivo, de mis visitantes. Tiempo de desarrollo reciente para odiar, un bar beef tiempo.</p>

</div>
      </div><!-- end of product-caption -->
    </div><!-- end of product-inner -->
  </div><!-- end of product-thumb -->
</article> <!-- end of product-layout -->





</div><div class="col-12 col-sm-12 col-md-12"><article class="product-layout product-list">
  <div class="product-thumb ">
    <div class="product-inner media align-items-center">
      <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">

    
    <div class="label-product label-sale">
      <span>10%</span>
    </div>
    

    
     
    
    
    
    
    
    
    
    
     
    




<a href="/products/cuando-new-impresor">
          <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_11_21cdca58-c25a-467d-964c-b7c700bf0bdd_large.jpg?v=1540269901" alt="product_image">
        </a>
        

        <div class="action-links">

          

          
          <a href="javascript:void(0);" onclick="Shopify.addItem(14650564575343, 1); return false;" class="ajax-spin-cart">
            <span>
              <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
              <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
              <span class="cart-added"><i class="pe-7s-check"></i></span>
              <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
            </span>
          </a>

          


           

          
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



          <a class="action-btn btn-compare" href="/products/cuando-new-impresor" title="Add to Compare"><i class="pe-7s-link"></i></a>


          <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
             href="javascript:void(0);" onclick="quiqview('cuando-new-impresor')">
            <i class="pe-7s-search"></i>
          </a>
        </div>
        
        
        
      </div> <!-- end of product-image -->

      <div class="product-caption media-body">
        <div class="product-manufacturer">
          <a href="/collections/vendors?q=Krystle" title="Krystle">Krystle</a>
        </div>
        <h4 class="product-name">
          <a href="/products/cuando-new-impresor">Cuando New Impresor</a>
        </h4><div class="product-ratings">
            <div class="rating-box">
              <span class="shopify-product-reviews-badge" data-id="1617018126447"></span>
            </div>
          </div><p class="product-price">

          
          <span class="price-old"><span class=money>$500.00</span></span>
          <span class="price-new"><span class=money>$450.00</span></span>
          

        </p>
        
        <div class="product-des">
<p>En el valle, la vivienda en la vigilancia específica, el reemplazo o la consolidación de la cama, un hombre obsesionado con la reducción de opciones de apuestas ilegales. Wow, mercado muy atractivo, de mis visitantes. Tiempo de desarrollo reciente para odiar, un bar beef tiempo.</p>

</div>
      </div><!-- end of product-caption -->
    </div><!-- end of product-inner -->
  </div><!-- end of product-thumb -->
</article> <!-- end of product-layout -->





</div><div class="col-12 col-sm-12 col-md-12"><article class="product-layout product-list">
  <div class="product-thumb ">
    <div class="product-inner media align-items-center">
      <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
  
  <div class="label-product label-sale">
    <span>13%</span>
  </div>
  

  

<a href="/products/estado-de-desarrollo">
          <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_12_a78a9c69-914c-482e-a230-ef5a6492b544_large.jpg?v=1540270022" alt="product_image">
        </a>
        

        <div class="action-links">

          

          
          <a href="javascript:void(0);" onclick="Shopify.addItem(14650595672175, 1); return false;" class="ajax-spin-cart">
            <span>
              <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
              <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
              <span class="cart-added"><i class="pe-7s-check"></i></span>
              <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
            </span>
          </a>

          


           

          
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



          <a class="action-btn btn-compare" href="/products/estado-de-desarrollo" title="Add to Compare"><i class="pe-7s-link"></i></a>


          <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
             href="javascript:void(0);" onclick="quiqview('estado-de-desarrollo')">
            <i class="pe-7s-search"></i>
          </a>
        </div>
        
        
        
      </div> <!-- end of product-image -->

      <div class="product-caption media-body">
        <div class="product-manufacturer">
          <a href="/collections/vendors?q=Orion" title="Orion">Orion</a>
        </div>
        <h4 class="product-name">
          <a href="/products/estado-de-desarrollo">Estado De Desarrollo</a>
        </h4><div class="product-ratings">
            <div class="rating-box">
              <span class="shopify-product-reviews-badge" data-id="1617019764847"></span>
            </div>
          </div><p class="product-price">

          
          <span class="price-old"><span class=money>$600.00</span></span>
          <span class="price-new"><span class=money>$526.00</span></span>
          

        </p>
        
        <div class="product-des">
<p>En el valle, la vivienda en la vigilancia específica, el reemplazo o la consolidación de la cama, un hombre obsesionado con la reducción de opciones de apuestas ilegales. Wow, mercado muy atractivo, de mis visitantes. Tiempo de desarrollo reciente para odiar, un bar beef tiempo.</p>

</div>
      </div><!-- end of product-caption -->
    </div><!-- end of product-inner -->
  </div><!-- end of product-thumb -->
</article> <!-- end of product-layout -->





</div><div class="col-12 col-sm-12 col-md-12"><article class="product-layout product-list">
  <div class="product-thumb ">
    <div class="product-inner media align-items-center">
      <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
  
  <div class="label-product label-sale">
    <span>17%</span>
  </div>
  

  

<a href="/products/finibus-bonorum">
          <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_13_5e0895c3-7d7e-4555-8513-a56b4d78a3a5_large.jpg?v=1540270240" alt="product_image">
        </a>
        

        <div class="action-links">

          

          
          <a href="javascript:void(0);" onclick="Shopify.addItem(14650587840623, 1); return false;" class="ajax-spin-cart">
            <span>
              <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
              <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
              <span class="cart-added"><i class="pe-7s-check"></i></span>
              <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
            </span>
          </a>

          


           

          
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



          <a class="action-btn btn-compare" href="/products/finibus-bonorum" title="Add to Compare"><i class="pe-7s-link"></i></a>


          <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
             href="javascript:void(0);" onclick="quiqview('finibus-bonorum')">
            <i class="pe-7s-search"></i>
          </a>
        </div>
        
        
        
      </div> <!-- end of product-image -->

      <div class="product-caption media-body">
        <div class="product-manufacturer">
          <a href="/collections/vendors?q=Aurelia" title="Aurelia">Aurelia</a>
        </div>
        <h4 class="product-name">
          <a href="/products/finibus-bonorum">Finibus Bonorum</a>
        </h4><div class="product-ratings">
            <div class="rating-box">
              <span class="shopify-product-reviews-badge" data-id="1617019240559"></span>
            </div>
          </div><p class="product-price">

          
          <span class="price-old"><span class=money>$560.00</span></span>
          <span class="price-new"><span class=money>$467.00</span></span>
          

        </p>
        
        <div class="product-des">
<p>En el valle, la vivienda en la vigilancia específica, el reemplazo o la consolidación de la cama, un hombre obsesionado con la reducción de opciones de apuestas ilegales. Wow, mercado muy atractivo, de mis visitantes. Tiempo de desarrollo reciente para odiar, un bar beef tiempo.</p>

</div>
      </div><!-- end of product-caption -->
    </div><!-- end of product-inner -->
  </div><!-- end of product-thumb -->
</article> <!-- end of product-layout -->





</div><div class="col-12 col-sm-12 col-md-12"><article class="product-layout product-list">
  <div class="product-thumb ">
    <div class="product-inner media align-items-center">
      <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">

    
    <div class="label-product label-sale">
      <span>18%</span>
    </div>
    

    
     
    
    
    
    
    
    
    
    
     
    
    <div class="label-product label-new">
      <span>New</span>
    </div>
    




<a href="/products/hacen-new-parecerlo">
          <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_14_4a364132-2492-4084-a7b9-ef1a1f3b932f_large.jpg?v=1540270304" alt="product_image">
        </a>
        

        <div class="action-links">

          

          
          <a href="javascript:void(0);" onclick="Shopify.addItem(14650597441647, 1); return false;" class="ajax-spin-cart">
            <span>
              <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
              <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
              <span class="cart-added"><i class="pe-7s-check"></i></span>
              <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
            </span>
          </a>

          


           

          
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



          <a class="action-btn btn-compare" href="/products/hacen-new-parecerlo" title="Add to Compare"><i class="pe-7s-link"></i></a>


          <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
             href="javascript:void(0);" onclick="quiqview('hacen-new-parecerlo')">
            <i class="pe-7s-search"></i>
          </a>
        </div>
        
        
        
      </div> <!-- end of product-image -->

      <div class="product-caption media-body">
        <div class="product-manufacturer">
          <a href="/collections/vendors?q=Creature" title="Creature">Creature</a>
        </div>
        <h4 class="product-name">
          <a href="/products/hacen-new-parecerlo">Hacen New Parecerlo</a>
        </h4><div class="product-ratings">
            <div class="rating-box">
              <span class="shopify-product-reviews-badge" data-id="1617020092527"></span>
            </div>
          </div><p class="product-price">

          
          <span class="price-old"><span class=money>$580.00</span></span>
          <span class="price-new"><span class=money>$480.00</span></span>
          

        </p>
        
        <div class="product-des">
<p>En el valle, la vivienda en la vigilancia específica, el reemplazo o la consolidación de la cama, un hombre obsesionado con la reducción de opciones de apuestas ilegales. Wow, mercado muy atractivo, de mis visitantes. Tiempo de desarrollo reciente para odiar, un bar beef tiempo.</p>

</div>
      </div><!-- end of product-caption -->
    </div><!-- end of product-inner -->
  </div><!-- end of product-thumb -->
</article> <!-- end of product-layout -->





</div><div class="col-12 col-sm-12 col-md-12"><article class="product-layout product-list">
  <div class="product-thumb ">
    <div class="product-inner media align-items-center">
      <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">

    
    <div class="label-product label-sale">
      <span>35%</span>
    </div>
    

    
     
    
    
    
    
    
    
    
    
     
    




<a href="/products/hay-new-muchas">
          <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_17_61a75a05-d3e4-4ddf-bf10-645ca3d8e180_large.jpg?v=1540270357" alt="product_image">
        </a>
        

        <div class="action-links">

          

          
          <a href="javascript:void(0);" onclick="Shopify.addItem(14650550419567, 1); return false;" class="ajax-spin-cart">
            <span>
              <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
              <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
              <span class="cart-added"><i class="pe-7s-check"></i></span>
              <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
            </span>
          </a>

          


           

          
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



          <a class="action-btn btn-compare" href="/products/hay-new-muchas" title="Add to Compare"><i class="pe-7s-link"></i></a>


          <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
             href="javascript:void(0);" onclick="quiqview('hay-new-muchas')">
            <i class="pe-7s-search"></i>
          </a>
        </div>
        
        
        
      </div> <!-- end of product-image -->

      <div class="product-caption media-body">
        <div class="product-manufacturer">
          <a href="/collections/vendors?q=Krystle" title="Krystle">Krystle</a>
        </div>
        <h4 class="product-name">
          <a href="/products/hay-new-muchas">Hay New Muchas</a>
        </h4><div class="product-ratings">
            <div class="rating-box">
              <span class="shopify-product-reviews-badge" data-id="1617017110639"></span>
            </div>
          </div><p class="product-price">

          
          <span class="price-old"><span class=money>$287.00</span></span>
          <span class="price-new"><span class=money>$187.00</span></span>
          

        </p>
        
        <div class="product-des">
<p>En el valle, la vivienda en la vigilancia específica, el reemplazo o la consolidación de la cama, un hombre obsesionado con la reducción de opciones de apuestas ilegales. Wow, mercado muy atractivo, de mis visitantes. Tiempo de desarrollo reciente para odiar, un bar beef tiempo.</p>

</div>
      </div><!-- end of product-caption -->
    </div><!-- end of product-inner -->
  </div><!-- end of product-thumb -->
</article> <!-- end of product-layout -->





</div><div class="col-12 col-sm-12 col-md-12"><article class="product-layout product-list">
  <div class="product-thumb ">
    <div class="product-inner media align-items-center">
      <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">

    
    <div class="label-product label-sale">
      <span>8%</span>
    </div>
    

    
     
    
    
    
    
    
    
    
    
     
    
    <div class="label-product label-new">
      <span>New</span>
    </div>
    




<a href="/products/humor-new-agregado">
          <img src="//cdn.shopify.com/s/files/1/0049/9043/5439/products/product_15_44d859a1-d12d-494a-a065-be50d8366273_large.jpg?v=1538023932" alt="product_image">
        </a>
        

        <div class="action-links">

          

          
          <a href="javascript:void(0);" onclick="Shopify.addItem(14650580566127, 1); return false;" class="ajax-spin-cart">
            <span>
              <span class="cart-title"><i class="pe-7s-shopbag"></i></span>
              <span class="cart-loading animated rotateIn infinite"><i class="pe-7s-settings"></i></span>
              <span class="cart-added"><i class="pe-7s-check"></i></span>
              <span class="cart-unavailable"><i class="pe-7s-close"></i></span>
            </span>
          </a>

          


           

          
<a class="wishlist action-btn btn-wishlist" href="/account/login" title="Wishlist">
  <i class="pe-7s-like"></i>
</a>



          <a class="action-btn btn-compare" href="/products/humor-new-agregado" title="Add to Compare"><i class="pe-7s-link"></i></a>


          <a class="action-btn btn-quickview" title="Quick View" data-toggle="modal" data-target="#exampleModal" 
             href="javascript:void(0);" onclick="quiqview('humor-new-agregado')">
            <i class="pe-7s-search"></i>
          </a>
        </div>
        
        
        
      </div> <!-- end of product-image -->

      <div class="product-caption media-body">
        <div class="product-manufacturer">
          <a href="/collections/vendors?q=Generic" title="Generic">Generic</a>
        </div>
        <h4 class="product-name">
          <a href="/products/humor-new-agregado">Humor New Agregado</a>
        </h4><div class="product-ratings">
            <div class="rating-box">
              <span class="shopify-product-reviews-badge" data-id="1617018814575"></span>
            </div>
          </div><p class="product-price">

          
          <span class="price-old"><span class=money>$700.00</span></span>
          <span class="price-new"><span class=money>$650.00</span></span>
          

        </p>
        
        <div class="product-des">
<p>En el valle, la vivienda en la vigilancia específica, el reemplazo o la consolidación de la cama, un hombre obsesionado con la reducción de opciones de apuestas ilegales. Wow, mercado muy atractivo, de mis visitantes. Tiempo de desarrollo reciente para odiar, un bar beef tiempo.</p>

</div>
      </div><!-- end of product-caption -->
    </div><!-- end of product-inner -->
  </div><!-- end of product-thumb -->
</article> <!-- end of product-layout -->





</div></div>
                      </div>
                    </div>
                  </div> <!-- end of shop-products-wrapper -->

                  <div class="pagination-area">
<div class="row align-items-center">
  <div class="col-12 order-2 col-sm-12 col-md-6 order-md-1 col-lg-6">
    <div class="page-amount d-flex justify-content-center justify-content-md-start">
      
      
    

    <div class="toolbar-amount">
      <p>
        Showing  
        1 - 12 
         of  
        33 
         result 
      </p>
    </div>
    
      
      
    </div>
  </div>
  <div class="col-12 order-1 col-sm-12 col-md-6 order-md-2 col-lg-6">

    <ul class="pagination">
      
      
      <li class="page-item disabled prev">
        <a class="page-link" href="#">
          <i class="fa fa-angle-left"></i>
          <span>Prev</span>
        </a>
      </li>
      
      
      
      
      
      <li class="page-item active"><a class="page-link" href=""><span>1</span></a></li>
      
      
      
      
      <li class="page-item">
        <a class="page-link" href="/collections/all?page=2" title=""><span>2</span></a>
      </li>
      
      
      
      <li class="page-item">
        <a class="page-link" href="/collections/all?page=3" title=""><span>3</span></a>
      </li>
      
      
      
      
      <li class="next"><a class="page-link" href="/collections/all?page=2" title="Next &raquo;"><span aria-hidden="true">Next</span></a></li>
      
      
    </ul>
    
    
  </div>
</div>


<script>
  $(".pagination .disabled a"). removeAttr("href");
  $(".pagination li.active a"). removeAttr("href");
</script></div> <!-- end of pagination-area -->

                </div>
              </div> <!-- end of row -->
            </div> <!-- end of shop-wrapper -->
          </main> <!-- end of #primary --></div><div class="col-12 col-sm-12 col-md-12 col-lg-3 order-2 order-md-2 order-lg-1">
        <aside id="secondary" class="widget-area"><div class="sidebar-widget list-categories-widget"><h2 class="widgettitle">Categories</h2><div class="cat-accordion" id="accordionExample">
    
    
    <div class="card">
      <div class="card-header" id="headingbackpacks">
        <h5 class="mb-0">
          <button class="" type="button"  data-toggle="collapse" data-target="#backpacks" aria-expanded="false" aria-controls="backpacks">Backpacks</button>
        </h5>
      </div>
      <div id="backpacks" class="collapse" aria-labelledby="headingbackpacks" data-parent="#accordionExample">
        <div class="card-body">
          <ul class="cat-sub-menu">
            
            
            <li><a href="/products/parezca-new-razonable">Parezca New Razonable </a></li>
            <li><a href="/products/lorem-ipsum">Lorem Ipsum </a></li>
            <li><a href="/products/pensamiento-popular">Pensamiento Popular </a></li>
            <li><a href="/products/las-hot-palabras">Las Hot Palabras </a></li>
            <li><a href="/products/oscuras-hot-lengua">Oscuras Hot Lengua </a></li></ul>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header" id="headingshop-new">
        <h5 class="mb-0">
          <button class="collapsed" type="button"  data-toggle="collapse" data-target="#shop-new" aria-expanded="false" aria-controls="shop-new">Shop New</button>
        </h5>
      </div>
      <div id="shop-new" class="collapse" aria-labelledby="headingshop-new" data-parent="#accordionExample">
        <div class="card-body">
          <ul class="cat-sub-menu">
            
            
            <li><a href="/products/parezca-new-razonable">Parezca New Razonable </a></li>
            <li><a href="/products/lorem-ipsum">Lorem Ipsum </a></li>
            <li><a href="/products/pensamiento-popular">Pensamiento Popular </a></li>
            <li><a href="/products/predefinidos-cuando">Predefinidos Cuando </a></li>
            <li><a href="/products/test-product">Test Product </a></li></ul>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header" id="headingsneakers">
        <h5 class="mb-0">
          <button class="collapsed" type="button"  data-toggle="collapse" data-target="#sneakers" aria-expanded="false" aria-controls="sneakers">Sneakers</button>
        </h5>
      </div>
      <div id="sneakers" class="collapse" aria-labelledby="headingsneakers" data-parent="#accordionExample">
        <div class="card-body">
          <ul class="cat-sub-menu">
            
            
            <li><a href="/products/lorem-ipsum">Lorem Ipsum </a></li>
            <li><a href="/products/las-hot-palabras">Las Hot Palabras </a></li>
            <li><a href="/products/predefinidos-cuando">Predefinidos Cuando </a></li>
            <li><a href="/products/pensamiento-popular">Pensamiento Popular </a></li>
            <li><a href="/products/humor-new-agregado">Humor New Agregado </a></li></ul>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header" id="headingsunglasses">
        <h5 class="mb-0">
          <button class="collapsed" type="button"  data-toggle="collapse" data-target="#sunglasses" aria-expanded="false" aria-controls="sunglasses">Sunglasses</button>
        </h5>
      </div>
      <div id="sunglasses" class="collapse" aria-labelledby="headingsunglasses" data-parent="#accordionExample">
        <div class="card-body">
          <ul class="cat-sub-menu">
            
            
            <li><a href="/products/lorem-ipsum">Lorem Ipsum </a></li>
            <li><a href="/products/hacen-new-parecerlo">Hacen New Parecerlo </a></li>
            <li><a href="/products/leyendo-distintos">Leyendo Distintos </a></li>
            <li><a href="/products/humor-new-agregado">Humor New Agregado </a></li>
            <li><a href="/products/texto-por-defecto">Texto Por Defecto </a></li></ul>
        </div>
      </div>
    </div>
    
  </div>
</div><div class="sidebar-widget list-widget"><h2 class="widgettitle">Products Types</h2><div class="list-widget-wrapper">
    <div class="list-group">
      
      

<a class="" href="/collections/types?q=Best">Best</a>
<a class="" href="/collections/types?q=Big">Big</a>
<a class="" href="/collections/types?q=Excellent">Excellent</a>
<a class="" href="/collections/types?q=Genuine">Genuine</a>
    </div>
  </div>
</div> <!-- end of sidebar-widget --><div class="sidebar-widget list-widget"><h2 class="widgettitle">Vendors</h2><div class="list-widget-wrapper">
    <div class="list-group">
    
    
      
      <a class="" href="/collections/vendors?q=Aurelia">Aurelia</a>
      
    
      
      <a class="" href="/collections/vendors?q=Creature">Creature</a>
      
    
      
      <a class="" href="/collections/vendors?q=Generic">Generic</a>
      
    
      
      <a class="" href="/collections/vendors?q=Glus">Glus</a>
      
    
      
      <a class="" href="/collections/vendors?q=Imara">Imara</a>
      
    
    </div>
  </div>
</div> <!-- end of sidebar-widget --><div class="sidebar-widget list-widget"><h2 class="widgettitle">Size</h2><div class="list-widget-wrapper">
    <div class="list-group">
      
      

      
      
<a href="/collections/all/xl">xl</a>
      
<a href="/collections/all/lg">lg</a>
      
<a href="/collections/all/md">md</a>
      
<a href="/collections/all/sm">sm</a>
      

    </div>
  </div>
</div>

<div class="sidebar-widget color-widget"><h2 class="widgettitle">Color</h2><div class="color-widget-wrapper">
    <ul class="color-options">
      
      

      
      
<li> 
        <span class="red" style="background: red no-repeat center; background-size: initial;"></span>
        <a href="/collections/all/red">red</a></li>
<li> 
        <span class="yellow" style="background: yellow no-repeat center; background-size: initial;"></span>
        <a href="/collections/all/yellow">yellow</a></li>
      
<li> 
        <span class="violet" style="background: violet no-repeat center; background-size: initial;"></span>
        <a href="/collections/all/violet">violet</a></li>
      
<li> 
        <span class="brown" style="background: brown no-repeat center; background-size: initial;"></span>
        <a href="/collections/all/brown">brown</a></li>
      
<li> 
        <span class="black" style="background: black no-repeat center; background-size: initial;"></span>
        <a href="/collections/all/black">black</a></li>
      
<li> 
        <span class="orange" style="background: orange no-repeat center; background-size: initial;"></span>
        <a href="/collections/all/orange">orange</a></li>
      

    </ul>
  </div>
</div> <!-- end of sidebar-widget --><div class="sidebar-widget tag-cloud"><h2 class="widgettitle">Tags</h2><div class="tags-widget">
    <ul>
      
      
<li><a href="/collections/all/cotton">Cotton</a></li>
<li><a href="/collections/all/fiber">Fiber</a></li>
<li><a href="/collections/all/partex">Partex</a></li>
<li><a href="/collections/all/plastic">Plastic</a></li>
<li><a href="/collections/all/wood">Wood</a></li>
<li><a href="/collections/all/wool">Wool</a></li>
<li><a href="/collections/all/black">black</a></li>
<li><a href="/collections/all/brown">brown</a></li>
<li><a href="/collections/all/gray">gray</a></li>
<li><a href="/collections/all/lg">lg</a></li>
    </ul>
  </div> 
</div> <!-- end of sidebar-widget --><script>
  $(".sidebar-wedget li.active a").removeAttr("href");
</script>

</aside> <!-- end of #secondary -->
      </div></div> <!-- end of row -->
  </div> <!-- end of container -->
</div>
<!-- End of Products Wrapper -->
<style>

  .products-wrapper#section-collection-template{
    padding-top:80px;
    padding-bottom:80px;
  } 
  @media (max-width: 767px) {
    .products-wrapper#section-collection-template{
      padding-top: 40px;
      padding-bottom: 40px;
    }
  }

</style>
</div>
@endsection