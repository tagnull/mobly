@extends('layouts.shop')

@section('breadcrumb')
    @php
        $breadcrumb = $breadcrumb ?? [
            'title' => __('menu.my_account'),
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
                    <div class="user-dashboard">
                        <div class="user-info">
                            <div class="row align-items-center no-gutters">
                               <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                                   <div class="single-info">
                                       <p class="user-name">{!! __('page.my_account.user_name', ['name' => auth()->user()->name, 'link' => '<a href="'.route('logout').'" onclick="event.preventDefault();document.getElementById(\'logout-form\').submit();">'.__('menu.logout').'</a>']) !!}</p>
                                   </div>
                               </div>
                               <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                   <div class="single-info">
                                       <p>{!! __('page.my_account.assistance', ['mail' => 'contato@vstocker.com']) !!}</p>
                                   </div>
                               </div>
                               <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                                   <div class="single-info justify-content-lg-center">
                                       <a class="btn btn-secondary" href="{{ route('cart.index') }}">{{ __('menu.cart') }}</a>
                                   </div>
                               </div>
                               <div class="col-12 col-sm-12 col-md-6 col-lg-2 col-xl-3">
                                   <div class="single-info justify-content-lg-center">
                                       <a class="btn btn-secondary" href="{{ route('account.wishlist') }}">{{ __('menu.wishlist') }}</a>
                                   </div>
                               </div>
                           </div>
                        </div>

                        <div class="main-dashboard">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-2">
                                    <ul class="nav flex-column dashboard-list" role="tablist">
                                        <li><a class="nav-link active" data-toggle="tab" href="#dashboard">{{ __('page.my_account.menu.dashboard') }}</a></li>
                                        <li> <a class="nav-link" data-toggle="tab" href="#orders">{{ __('page.my_account.menu.orders') }}</a></li>
                                    </ul>
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                                    <!-- Tab panes -->
                                    <div class="tab-content dashboard-content">
                                        <div id="dashboard" class="tab-pane fade show active">
                                            @include('auth.components.account.tab_dashboard')
                                        </div>

                                        <div id="orders" class="tab-pane fade">
                                            @include('auth.components.account.tab_orders')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>

@endsection