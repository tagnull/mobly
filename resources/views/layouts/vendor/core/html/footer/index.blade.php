<footer id="colophon" class="bgc-secondary pt-full">

    <!-- Start of Footer Widgets Area -->
    <div class="footer-widgets-area">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                        <aside class="widget-container">
                            <div class="widget-content">
                            	<div class="footer-logo mb-half">
                            		<img src="{{ asset('assets/images/logos/vstocker_white.png') }}" alt="{{ config('app.name') }}">
                            	</div>
                                <div class="footer-contact">
                                    <p><span>{{ __('field.address') }}:</span><br><a href="javascript:;">Av. Emílio Chechinato, 2257 - Chácara Paraíso<br>13295-000, Itupeva - SP</a></p>
                                    <p><span>{{ __('field.phone') }}:</span><a href="javascript:;">(11) 2394-2248</a></p>
                                    <p><span>{{ __('field.email') }}:</span><a href="javascript:;">contato@vstocker.com</a></p>
                                </div>
                            </div>
                        </aside>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 order-md-3 col-lg-2 order-lg-2">
                        <aside class="widget-container">
                            <h4 class="widgettitle">{{ __('html.footer.offer.title') }}</h4>
                            <div class="widget-content">
                                <div class="widgetized-menu">
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('products.show', 'liquidificador-mondial-power-nl-26-branco-cinza-350w-1935') }}">Liquidificador Mondial Power NL-26 Branco/Cinza - 350W</a></li>
                                        <li><a href="{{ route('products.show', 'comoda-havana-cafe-2922') }}">Cômoda Havana Café</a></li>
                                        <li><a href="{{ route('products.show', 'mesa-de-centro-toquio-amarela-e-mel-3187') }}">Mesa De Centro Tóquio Amarela e Mel</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 order-md-4 col-lg-2 order-lg-3">
                        <aside class="widget-container">
                            <h4 class="widgettitle">{{ __('html.footer.links.title') }}</h4>
                            <div class="widget-content">
                                <div class="widgetized-menu">
                                    <ul class="list-unstyled">
                                        <li><a href="{{ route('home.index') }}"><span>{{ __('menu.home') }}</span></a></li>
                                        <li><a href="{{ route('products.index') }}"><span>{{ __('menu.products') }}</span></a></li>
                                        <li><a href="{{ route('categories.index') }}"><span>{{ __('menu.categories') }}</span></a></li>
                                        <li><a href="{{ route('page.about') }}"><span>{{ __('menu.about') }}</span></a></li>
                                        <li><a href="{{ route('page.contact') }}"><span>{{ __('menu.contact') }}</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 order-md-2 col-lg-4 order-lg-4">
                        <aside class="widget-container">
                            <h4 class="widgettitle">{{ __('html.footer.newsletter.title') }}</h4>
                            <div class="widget-content">
                                <div class="newsletter-widget">
                                    <p>{{ __('html.footer.newsletter.description') }}</p>
                                    <form class="mc-subscribe-form">
                                        <div class="input-group">
                                            <input type="email" autocomplete="off" placeholder="{{ __('field.email:placeholder') }}" required>
                                            <button class="default-btn" type="submit">{{ __('button.send') }}</button>
                                        </div>
                                    </form>

                                    <div class="mailchimp-alerts">
                                        <div class="mailchimp-submitting"></div>
                                        <div class="mailchimp-success"></div>
                                        <div class="mailchimp-error"></div>
                                    </div>
                                </div>
                            </div>
                        </aside>

                        <aside class="widget-container">
                            <div class="widget-content">
                                <div class="social-widget mt-half">
                                    <div class="socials d-flex align-items-center justify-content-center justify-content-md-start">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><a href="#" class="bg-facebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                            <li class="list-inline-item"><a href="#" class="bg-twitter" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                            <li class="list-inline-item"><a href="#" class="bg-gplus" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="list-inline-item"><a href="#" class="bg-pinterest" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="list-inline-item"><a href="#" class="bg-instagram" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                            <li class="list-inline-item"><a href="#" class="bg-linkedin" title="Linked In" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Footer Widgets Area -->

    <!-- Footer Copyright -->
    @include('layouts.vendor.core.html.footer.copyright')
    <!-- end of footer-copyright -->
</footer>