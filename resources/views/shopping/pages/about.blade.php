@extends('layouts.shop')

@section('breadcrumb')
    @php
        $breadcrumb = $breadcrumb ?? [
            'title' => __('menu.about')
        ]
    @endphp
    @component('layouts.components.breadcrumb', $breadcrumb)@endcomponent
@endsection

@section('content')
<!-- Start of About US Section -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-7 col-lg-6">
                <div class="content-wrapper">
                    <div class="section-title left-aligned">
                        <h2>Bem-vindo à {{ config('app.name') }}!</h2>
                    </div>
                    <p class="lead">O cuidado em identificar pontos críticos na competitividade nas transações comerciais pode nos levar a considerar a reestruturação do investimento em reciclagem técnica.</p>
                    <p>Podemos já vislumbrar o modo pelo qual a expansão dos mercados mundiais auxilia a preparação e a composição de alternativas às soluções ortodoxas.</p>
                    <p>Desta maneira, a estrutura atual da organização agrega valor ao estabelecimento de todos os recursos funcionais envolvidos.</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-5 col-lg-6">
                <div class="overview-img text-center">
                    <a href="#">
                        <img src="{{ asset('https://abrilexame.files.wordpress.com/2016/09/size_960_16_9_mobly1.jpg') }}" alt="About Us">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of About US Section -->
@endsection