@extends('layouts.shop')

@section('breadcrumb')
    @php
        $breadcrumb = $breadcrumb ?? [
            'title' => __('page.password.reset.title'),
            'path' => [
                [
                    'name' => __('menu.login'),
                    'url' => route('login')
                ]
            ]
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
                                
                                <h3>{{ __('page.password.reset.title') }}</h3>
                                <h6>{{ __('page.password.reset.description') }}</h6>
                                
                                <form method="POST" action="{{ route('password.request') }}">
                                    @csrf
            
                                    <input type="hidden" name="token" value="{{ $token }}">
            
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('field.email') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" placeholder="{{ __('field.email:placeholder') }}" required autofocus>
            
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('field.password') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('field.password:placeholder') }}" required>
            
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('field.password_confirm') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('field.password_confirm:placeholder') }}" required>
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="default-btn secondary">
                                                {{ __('button.reset_password') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</div>
@endsection