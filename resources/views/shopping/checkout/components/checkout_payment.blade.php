<div class="checkout-payment">
    <form action="#">
        <div class="form-row">
            <div class="custom-radio">
                <input class="form-check-input" type="radio" name="payment" id="boleto_payment" value="boleto" checked>
                <span class="checkmark"></span>
                <label class="form-check-label" for="boleto_payment">{{ __('payment.boleto') }}</label>

                <div class="payment-info" id="boleto_pay">
                    <p>{{ __('payment.boleto:description') }}</p>
                </div>
            </div>
            <div class="custom-radio">
                <input class="form-check-input" type="radio" name="payment" id="check_payment" value="check">
                <span class="checkmark"></span>
                <label class="form-check-label" for="check_payment">{{ __('payment.check') }}</label>

                <div class="payment-info" id="check_pay">
                    <p>{!! __('payment.check:description', ['store' => config('app.name'), 'address' => 'Av. Emílio Chechinato, 2257 - Chácara Paraíso - 13295-000, Itupeva - SP']) !!}</p>
                </div>
            </div>
            <div class="custom-radio">
                <input class="form-check-input" type="radio" name="payment" id="cash_delivery_payment" value="cash">
                <span class="checkmark"></span>
                <label class="form-check-label" for="cash_delivery_payment">{{ __('payment.cash') }}</label>

                <div class="payment-info" id="cash_pay">
                    <p>{{ __('payment.cash:description') }}</p>
                </div>
            </div>
            <div class="custom-radio">
                <input class="form-check-input" type="radio" name="payment" id="paypal_payment" value="paypal">
                <span class="checkmark"></span>
                <label class="form-check-label" for="paypal_payment">{{ __('payment.paypal') }}</label>

                <div class="payment-info" id="paypal_pay">
                    <p>{{ __('payment.paypal:description') }}</p>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-check">
                <div class="custom-checkbox">
                    <input class="form-check-input" type="checkbox" id="terms_acceptance" required>
                    <span class="checkmark"></span>
                    <label class="form-check-label" for="terms_acceptance">{!! __('page.checkout.terms_acceptance') !!}</label>
                </div>
            </div>
        </div>
        <div class="form-row justify-content-end">
            <input type="submit" class="btn btn-secondary dark" value="{{ __('menu.continue_payment') }}">
        </div>
    </form>
</div>