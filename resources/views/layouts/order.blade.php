<!DOCTYPE html>
<html lang="en" dir="ltr" class="no-js windows chrome desktop page--no-banner page--logo-main page--show page--show card-fields">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, minimum-scale=1.0, user-scalable=0">
        <meta name="referrer" content="origin">
        
        <title>{{ config('app.name') }}</title>
        
        <!--[if lt IE 9]>
            <link rel="stylesheet" media="all" href="//cdn.shopify.com/app/services/4990435439/assets/38268108911/checkout_stylesheet/v2-ltr-edge-cc039f7a614253564a533be8a46fd25a-10779167845632766722/oldie" />
        <![endif]-->
        
        <!--[if gte IE 9]><!-->
            <link rel="stylesheet" media="all" href="//cdn.shopify.com/app/services/4990435439/assets/38268108911/checkout_stylesheet/v2-ltr-edge-cc039f7a614253564a533be8a46fd25a-10779167845632766722" />
        <!--<![endif]-->

        <script src="//cdn.shopify.com/s/assets/checkout-dc0c64cf3c561f06afafc23a25e5f71fe7dfd1bf2909dc56e0203a1a59394a7f.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="content" data-content>
            <div class="wrap">
                <div class="main" role="main">
                    <div class="main__header">
                        <a class="logo logo--left">
                            <span class="logo__text heading-1">
                                <a href="{{ route('home.index') }}">
                                    <img src="{{ asset('assets/images/logos/vstocker_black.png') }}" alt="{{ config('app.name') }}" class="img-fluid">
                                </a>
                            </span>
                        </a>


                        <ul class="breadcrumb ">
                            <li class="breadcrumb__item breadcrumb__item--completed">
                                <a class="breadcrumb__link" data-trekkie-id="breadcrumb_cart_link" href="{{ route('home.index') }}">
                                    {{ __('menu.home') }}
                                </a>
                                <svg class="icon-svg icon-svg--color-adaptive-light icon-svg--size-10 breadcrumb__chevron-icon" aria-hidden="true" focusable="false"> <use xlink:href="#chevron-right" /> </svg>
                            </li>
                            
                            <li class="breadcrumb__item breadcrumb__item--current">
                                <span class="breadcrumb__text" aria-current="step">{{ $data->user ? $data->user->name : __('field.document_number') .' '. $data->document }}</span>
                                <svg class="icon-svg icon-svg--color-adaptive-light icon-svg--size-10 breadcrumb__chevron-icon" aria-hidden="true" focusable="false"> <use xlink:href="#chevron-right" /> </svg>
                            </li>
                            
                            <li class="breadcrumb__item breadcrumb__item--blank">
                                <span class="breadcrumb__text">{{ $data->created_at->format('d/m/Y H:i') }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="main__content">
                        <div class="step" data-step="contact_information">
                            <div class="step__sections">
                                <div class="section section--contact-information">
                                    <div class="section__header">
                                        <div class="layout-flex layout-flex--tight-vertical layout-flex--loose-horizontal layout-flex--wrap">
                                            <h2 class="section__title layout-flex__item layout-flex__item--stretch" id="main-header" tabindex="-1">
                                                {{ __('tag.buyer') }}
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="section__content" data-section="customer-information" data-shopify-pay-validate-on-load="false">
                                        <div class="fieldset">
                                            <div class="field">
                                                @if($data->user)
                                                    {{ $data->document }} &mdash; {{ $data->user->name }}
                                                @else
                                                    {{ $data->document }}
                                                @endif
                                            </div>
                                        </div>
                                    </div> 
                                </div> 
                                <div class="section section--shipping-address" data-shipping-address data-update-order-summary>
                                    <div class="section__header">
                                        <h2 class="section__title">
                                            {{ __('field.address') }}
                                        </h2>
                                    </div>
                                    <div class="section__content">
                                        <div class="fieldset" data-address-fields>
                                            <div class="field--half field">
                                                @php
                                                    $address = '';
                                                    $address = $data->address['street'];
                                                    
                                                    if($data->address['number']) {
                                                        $address .= ', ' . $data->address['number'];
                                                    }
                                                    
                                                    if($data->address['complement']) {
                                                        $address .= ' - (' . $data->address['complement'] . ')';
                                                    }
                                                    
                                                    if($data->address['neighborhood']) {
                                                        $address .= ' - ' . $data->address['neighborhood'];
                                                    }
                                                    
                                                    $address .= '<br>';
                                                    
                                                    $address .= $data->address['zipcode'] . ', ' . $data->address['city'] . ' - ' . $data->address['state'];
                                                    
                                                @endphp
                                                {!! $address !!}
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="section section--shipping-address" data-shipping-address data-update-order-summary>
                                    <div class="section__header">
                                        <h2 class="section__title">
                                            <hr>
                                        </h2>
                                    </div>
                                    <div class="section__content">
                                        <div class="fieldset" data-address-fields>
                                            <div class="field--half field">
                                                {{ $data->info }}
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main__footer">
                        <div role="contentinfo" aria-label="Footer">
                            <p class="copyright-text">
                                {!! __('html.footer.copyright', ['app_name' => __('app.name'), 'year' => date('Y')]) !!}
                            </p>
                        </div>
                      </div>
                    </div>
                    
                <div class="sidebar" role="complementary">
                    <div class="sidebar__content">
                        <div id="order-summary" class="order-summary order-summary--is-collapsed" data-order-summary>
                            <div class="order-summary__sections">
                                <div class="order-summary__section order-summary__section--product-list">
                                    <div class="order-summary__section__content">
                                        <table class="product-table">
                                            <tbody data-order-summary-section="line-items">
                                                @foreach($data->items as $item)
                                                <tr class="product">
                                                    <td class="product__image">
                                                        <div class="product-thumbnail">
                                                            <div class="product-thumbnail__wrapper">
                                                                <img aclass="product-thumbnail__image" src="{{ $item->url }}" />
                                                            </div>
                                                            <span class="product-thumbnail__quantity" aria-hidden="true">{{ $item->quantity }}</span>
                                                        </div>
                                                    </td>
                                                    <td class="product__description">
                                                        <span class="product__description__name order-summary__emphasis">{{ $item->name }}</span>
                                                        <span class="product__description__variant order-summary__small-text">@currency($item->single_price)</span>
                                                    </td>
                                                    <td class="product__quantity visually-hidden">{{ $item->quantity }}</td>
                                                    <td class="product__price">
                                                        <span class="order-summary__emphasis">@currency($item->total_price)</span>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="order-summary__scroll-indicator" aria-hidden="true" tabindex="-1">
                                            {{ __('tag.scroll_for_more') }}
                                            <svg aria-hidden="true" focusable="false" class="icon-svg icon-svg--size-12"> <use xlink:href="#down-arrow" /> </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-summary__section order-summary__section--total-lines" data-order-summary-section="payment-lines">
                                    <table class="total-line-table">
                                        <caption class="visually-hidden">Cost summary</caption>
                                        <thead>
                                            <tr>
                                                <th scope="col"><span class="visually-hidden">Description</span></th>
                                                <th scope="col"><span class="visually-hidden">Price</span></th>
                                            </tr>
                                        </thead>
                                        <tfoot class="total-line-table__footer">
                                            <tr class="total-line">
                                                <th class="total-line__name payment-due-label" scope="row">
                                                    <span class="payment-due-label__total">{{ __('field.total') }}</span>
                                                </th>
                                                <td class="total-line__price payment-due">
                                                    <span class="payment-due__currency">BRL</span>
                                                    <span class="payment-due__price">
                                                        @currency($data->total)
                                                    </span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>