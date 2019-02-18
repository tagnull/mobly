<!--
<li class="dropdown dropdown-user nav-item">
    <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
        <span class="avatar">
            <img src="{{ asset('assets/images/flags/'.App::getLocale().'.png') }}" alt="Language">
        </span>
        <span class="mr-1">
            @isset(Config::get('core.languages')[App::getLocale()]['prefix'])
            <span class="user-name text-bold-700">{{ Config::get('core.languages')[App::getLocale()]['prefix'] }}</span>
            @endisset
            {{ Config::get('core.languages')[App::getLocale()]['name'] }}
            @isset(Config::get('core.languages')[App::getLocale()]['suffix'])
            <span class="user-name text-bold-700">{{ Config::get('core.languages')[App::getLocale()]['suffix'] }}</span>
            @endisset
            <span class="user-name text-bold-700">&nbsp;</span>
        </span>
    </a>
    
    <div class="dropdown-menu" aria-labelledby="dropdown-flag">
        @foreach (Config::get('core.languages') as $lang => $language)
            @if ($lang != App::getLocale())
                <a href="{{ route('language.switch', $lang) }}" class="dropdown-item">
                    <img src="{{ asset('assets/images/flags/'.$lang.'.png') }}" width="32">
                    @isset($language['prefix'])
                    <span class="font-weight-bold">
                        {{ $language['prefix'] }}
                    </span>
                    @endisset
                    {{ $language['name'] }}
                    @isset($language['suffix'])
                    <span class="font-weight-bold">
                        {{ $language['suffix'] }}
                    </span>
                    @endisset
                </a>
            @endif
        @endforeach
    </div>
</li>
-->

<ul class="list-inline">
    <li class="top-links list-inline-item">
        <div class="btn-group">
            <button class="btn-link dropdown-toggle">
                <img src="{{ asset('assets/images/flags/'.App::getLocale().'.png') }}" width="20" height="20">
                @isset(Config::get('core.languages')[App::getLocale()]['prefix'])
                <span class="user-name text-bold-700">{{ Config::get('core.languages')[App::getLocale()]['prefix'] }}</span>
                @endisset
                {{ Config::get('core.languages')[App::getLocale()]['name'] }}
                @isset(Config::get('core.languages')[App::getLocale()]['suffix'])
                <span class="user-name text-bold-700">{{ Config::get('core.languages')[App::getLocale()]['suffix'] }}</span>
                @endisset
            </button>
            <div class="dropdown-menu">
                <ul>
                    @foreach (Config::get('core.languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                        <li>
                            <a href="{{ route('language.switch', $lang) }}" class="dropdown-item">
                                <img src="{{ asset('assets/images/flags/'.$lang.'.png') }}" width="20">
                                @isset($language['prefix'])
                                <span class="font-weight-bold">
                                    {{ $language['prefix'] }}
                                </span>
                                @endisset
                                {{ $language['name'] }}
                                @isset($language['suffix'])
                                <span class="font-weight-bold">
                                    {{ $language['suffix'] }}
                                </span>
                                @endisset
                            </a>
                        </li>
                    @endif
                @endforeach
                </ul>
            </div>
        </div>
    </li>
</ul>