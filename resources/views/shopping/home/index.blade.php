@extends('layouts.shop')

@section('content')
    <!-- Start of Primary Slider Section -->
    <section class="primary-slider-section mb0 pos-r">
        @include('shopping.home.components.slider')
    </section>
    <!-- End of Primary Slider Section -->
    
    <!-- Start of Support Section -->
    <section class="support-section mb0">
        @include('shopping.home.components.info')
    </section>
    <!-- End of Support Section -->
    
    <!-- Start of Banner Section -->
    <div class="banner-section mb-half">
        @include('shopping.home.components.highlights')
    </div>
    <!-- End of Banner Section -->
    
    <!-- Start of New Arrivals Section -->
    <section class="new-arrivals-section">
        @include('shopping.home.components.trending')
    </section>
    <!-- End of New Arrivals Section -->
    
    <!-- Start of Promo Banner Section -->
    <section class="promo-banner-section bg-img-wrapper">
    	@include('shopping.home.components.promo_banner')
    </section>
    <!-- End of Promo Banner Section -->
	
	<!-- Start of Instagram Section -->
    <section class="instagram-section">
        @include('shopping.home.components.instagram')
	</section>
	<!-- End of Instagram Section -->
@endsection