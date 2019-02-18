<div id="primary_slider" class="swiper-container slider-type-1">

    <!-- Slides -->
    <div class="swiper-wrapper">
        <div class="swiper-slide bg-img-wrapper">
            <div class="slide-inner image-placeholder">
                <img src="{{ asset('assets/images/slider/featured/1935-banner.jpg?v=1000') }}" class="visually-hidden" alt="Slider Image">
                <div class="slide-progress"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slide-content white-scheme layer-animation-3">
                                <p class="promo-title"><span>Descontão</span> Só essa semana!</p>
                                <h1 class="main-title"><span>Aproveite o Verão</span></h1>
                                <p class="subtitle">Liquidificador Mondial Power NL-26 Branco/Cinza - 350W</p>
                                <div class="slide-button">
                                    <a class="default-btn secondary" href="{{ route('products.show', 'liquidificador-mondial-power-nl-26-branco-cinza-350w-1935') }}">{{ __('button.view') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="swiper-slide bg-img-wrapper">
            <div class="slide-inner image-placeholder">
                <img src="{{ asset('assets/images/slider/featured/2292-banner.jpg?v=1000') }}" class="visually-hidden" alt="Slider Image">                          
                <div class="slide-progress"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slide-content layer-animation-1">
                                <p class="promo-title"><span>Ofertão</span> Só essa semana!</p>
                                <h1 class="main-title"><span>Cômoda Havana Café</span></h1>
                                <p class="subtitle">Para um espaço sempre em ordem e muito encantador, conte com a Cômoda Havana. Ideal para trazer o toque de design que falta para o ambiente mais especial da casa!</p>
                                <div class="slide-button">
                                    <a class="default-btn secondary" href="{{ route('products.show', 'comoda-havana-cafe-2922') }}">{{ __('button.view') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-slide bg-img-wrapper">
            <div class="slide-inner image-placeholder">
                <img src="{{ asset('assets/images/slider/featured/3187-banner.jpg?v=1000') }}" class="visually-hidden" alt="Slider Image">
                <div class="slide-progress"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slide-content layer-animation-2">
                                <p class="promo-title"><span>Metade do Preço</span> Só essa semana!</p>
                                <h1 class="main-title"><span>Mesa De Centro Tóquio Amarela e Mel</span></h1>
                                <p class="subtitle">Esta mesa de centro tornará a sua sala de estar ainda mais especial. Muito bonita e de design moderno, a Mesa de Centro Tóquio é perfeita para conferir elegância e sofisticação ao seu lar.</p>
                                <div class="slide-button">
                                    <a class="default-btn secondary" href="{{ route('products.show', 'mesa-de-centro-toquio-amarela-e-mel-3187') }}">{{ __('button.view') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <!-- Slider Navigation -->
    <div class="swiper-arrow next slide"><i class="fa fa-angle-right"></i></div>
    <div class="swiper-arrow prev slide"><i class="fa fa-angle-left"></i></div>

    <!-- Slider Pagination -->
    <div class="swiper-pagination"></div>
</div>