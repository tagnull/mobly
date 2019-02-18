@extends('layouts.shop')

@section('breadcrumb')
    @php
        $breadcrumb = $breadcrumb ?? [
            'title' => __('menu.checkout'),
            'path' => [
                [
                    'name' => __('menu.cart'),
                    'url' => route('cart.index')
                ]
            ],
        ]
    @endphp
    @component('layouts.components.breadcrumb', $breadcrumb)@endcomponent
@endsection

@section('content')

<div class="login-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <main id="primary" class="site-main">
                    <div class="user-login">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12">
                                <div class="section-title">
                                    <h2>Sua compra foi efetuada com sucesso!</h2>
                                </div>
                            </div>
                        </div> <!-- end of row -->

                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-6 offset-lg-2 offset-xl-3">
                                <div class="login-box mt-5 text-center">
                                    @guest
                                    <button type="submit" onclick="javascript:location.href='{{ route('home.index') }}'" class="default-btn tiny-btn mt-4">Tela Inicial</button>
                                    @else
                                    <button type="submit" onclick="javascript:location.href='{{ route('account.index') }}'" class="default-btn tiny-btn mt-4">Minha Conta</button>
                                    @endguest
                                    
                                    <a href="{{ route('orders.show', $uuid) }}" class="default-btn tiny-btn mt-4" target="_blank">{{ __('button.view_order') }}</a>
                                    
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