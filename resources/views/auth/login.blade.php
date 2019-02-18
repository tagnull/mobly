@extends('layouts.shop')

@section('breadcrumb')
    @php
        $breadcrumb = $breadcrumb ?? [
            'title' => __('menu.login'),
        ]
    @endphp
    @component('layouts.components.breadcrumb', $breadcrumb)@endcomponent
@endsection

@section('content')
<div class="my-account-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <main id="primary" class="site-main">
                    <div class="shopping-cart">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                
                                <h3>{{ __('page.login.title') }}</h3>
                                <h6>{{ __('page.login.description') }}</h6>
                                
                                @include('auth.partials.login')
                                
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection