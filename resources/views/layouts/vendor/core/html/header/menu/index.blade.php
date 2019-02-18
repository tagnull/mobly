<div class="main-nav-area bgc-white">
    <div class="container">
        <nav id="main_nav" class="stellarnav">
            <ul>
                <li><a href="{{ route('home.index') }}"><span>{{ __('menu.home') }}</span></a></li>
                <li><a href="{{ route('products.index') }}"><span>{{ __('menu.products') }}</span></a></li>
                <li><a href="{{ route('categories.index') }}"><span>{{ __('menu.categories') }}</span></a></li>
                <li><a href="{{ route('page.about') }}"><span>{{ __('menu.about') }}</span></a></li>
                <li><a href="javascript:;"><span>{{ __('menu.contact') }}</span></a></li>
                <li>
                    <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <div class="avatar">
                                <img src="{{ asset('assets/images/flags/'.App::getLocale().'.png') }}"  width="24">
                            </div>
                    </a>
                    
                    <ul>
                        @foreach (Config::get('core.languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                            <li>
                                <a href="{{ route('language.switch', $lang) }}" class="dropdown-item">
                                    <img src="{{ asset('assets/images/flags/'.$lang.'.png') }}" width="32">
                                    @isset($language['prefix'])
                                        {{ $language['prefix'] }}
                                    @endisset
                                    {{ $language['name'] }}
                                    @isset($language['suffix'])
                                        {{ $language['suffix'] }}
                                    @endisset
                                </a>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>