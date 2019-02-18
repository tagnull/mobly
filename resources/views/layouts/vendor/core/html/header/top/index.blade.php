<div class="header-area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-6 order-2 col-sm-6 order-sm-2 col-md-4 order-md-1 col-lg-3">
                <div class="header-search-area">
                	{{ Form::open(['route' => ['products.index'], 'method' => 'get']) }}
                		<div class="input-group">
                            <input name="search" type="text" class="form-control" placeholder="{{ __('field.search_header') }}" value="{{ request()->get('search') }}">
                            <div class="input-group-append">
                            	<button class="header-search-btn" type="submit"><i class="pe-7s-search"></i></button>
                            </div>
                		</div>
                    {!! Form::close() !!}
                </div>
			</div>
			<div class="col-12 order-1 col-sm-12 order-sm-1 col-md-4 order-md-2 col-lg-6">
                <div class="logo">
                    <a href="{{ route('home.index') }}">
                        <img src="{{ asset('assets/images/logos/vstocker_black.png') }}" alt="{{ config('app.name') }}" class="img-fluid">
                    </a>
                </div>
			</div>
			<div class="col-6 order-3 col-sm-6 col-md-4 col-lg-3">
                <div class="header-cart-area">
                    
                    <!-- Start of Cart -->
                    @include('layouts.vendor.core.html.header.cart')
                    <!-- End of Cart -->

                    <ul class="list-inline">
                        <li class="top-links list-inline-item">
                            <div class="btn-group">
                                <button class="btn-link dropdown-toggle">
                                    @guest
                                    <i class="pe-7s-config"></i>
                                    @else
                                    {{ auth()->user()->name }}
                                    <i class="pe-7s-angle-down"></i>
                                    @endguest
                                </button>
                                <div class="dropdown-menu">
                                    <ul>
                                        @guest
                                        <li><a href="{{ route('login') }}">{{ __('menu.login') }}</a></li>
                                        <li><a href="{{ route('register') }}">{{ __('menu.register') }}</a></li>
                                        @else
                                        <li><a href="{{ route('account.index') }}">{{ __('menu.my_account') }}</a></li>
                                        <li><a href="{{ route('account.wishlist') }}">{{ __('menu.wishlist') }}</a></li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                {{ __('menu.logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                        @endguest
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
			</div>
		</div>
	</div>
</div>