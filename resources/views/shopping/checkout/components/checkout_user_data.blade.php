{!! Form::open(['route' => 'checkout.store']) !!}
<div class="checkout-area">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 col-lg-7">
            
            <div class="checkout-form">
                <div class="section-title left-aligned">
                    <h2>{{ __('page.checkout.billing_details') }}</h2>
                </div>
                
                @include('layouts.components.error')

                <div class="form-row mb-3">
                    <div class="form-group col-12 col-sm-12 col-md-12">
                        <label for="name">{{ __('field.name') }} <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="{{ __('field.name:placeholder') }}" value="{{ old('name') }}" @auth value="{{ auth()->user()->name }}" @endauth required>
                    </div>
                </div>
                <div class="form-row mb-3">
                    <div class="form-group col-12 col-sm-12 col-md-6">
                        <label for="document">CPF / CNPJ <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="document" value="{{ old('document') }}" required>
                    </div>
                    <div class="form-group col-12 col-sm-12 col-md-6">
                        <label for="email">{{ __('field.email') }} <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="{{ __('field.email:placeholder') }}" value="{{ old('email') }}" @auth value="{{ auth()->user()->email }}" @endauth required>
                    </div>
                </div>
                <div class="form-row mb-3">
                <div class="form-group col-12 col-sm-12 col-md-10">
                        <label for="shipping_address_street">{{ __('field.address_street') }} <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="shipping_address_street" name="shipping_address_street" placeholder="{{ __('field.address_street:placeholder') }}" value="{{ old('shipping_address_street') }}" required>
                    </div>
                    <div class="form-group col-12 col-sm-12 col-md-2">
                        <label for="shipping_address_number">{{ __('field.address_number') }}</label>
                        <input type="text" class="form-control" id="shipping_address_number" name="shipping_address_number" placeholder="{{ __('field.address_number:placeholder') }}" value="{{ old('shipping_address_number') }}">
                    </div>
                </div>
                <div class="form-row mb-3">
                    <div class="form-group col-12 col-sm-12 col-md-4">
                        <label for="shipping_address_complement">{{ __('field.address_complement') }}</label>
                        <input type="text" class="form-control" id="shipping_address_complement" name="shipping_address_complement" placeholder="{{ __('field.address_complement:placeholder') }}" value="{{ old('shipping_address_complement') }}">
                    </div>
                    <div class="form-group col-12 col-sm-12 col-md-8">
                        <label for="shipping_address_neighborhood">{{ __('field.address_neighborhood') }}</label>
                        <input type="text" class="form-control" id="shipping_address_neighborhood" name="shipping_address_neighborhood" placeholder="{{ __('field.address_neighborhood:placeholder') }}" value="{{ old('shipping_address_neighborhood') }}">
                    </div>
                </div>
                <div class="form-row mb-3">
                    <div class="form-group col-12 col-sm-12 col-md-4">
                        <label for="shipping_address_city">{{ __('field.address_city') }} <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="shipping_address_city" name="shipping_address_city" placeholder="{{ __('field.address_city:placeholder') }}" value="{{ old('shipping_address_city') }}" required>
                    </div>
                    <div class="form-group col-12 col-sm-12 col-md-4">
                        <label for="shipping_address_state" class="d-block">{{ __('field.address_state') }} <span class="text-danger">*</span></label>
                        <select name="shipping_address_state" id="shipping_address_state" class="form-control nice-select" required>
                            <option value="AC">Acre</option>
                        	<option value="AL">Alagoas</option>
                        	<option value="AP">Amapá</option>
                        	<option value="AM">Amazonas</option>
                        	<option value="BA">Bahia</option>
                        	<option value="CE">Ceará</option>
                        	<option value="DF">Distrito Federal</option>
                        	<option value="ES">Espírito Santo</option>
                        	<option value="GO">Goiás</option>
                        	<option value="MA">Maranhão</option>
                        	<option value="MT">Mato Grosso</option>
                        	<option value="MS">Mato Grosso do Sul</option>
                        	<option value="MG">Minas Gerais</option>
                        	<option value="PA">Pará</option>
                        	<option value="PB">Paraíba</option>
                        	<option value="PR">Paraná</option>
                        	<option value="PE">Pernambuco</option>
                        	<option value="PI">Piauí</option>
                        	<option value="RJ">Rio de Janeiro</option>
                        	<option value="RN">Rio Grande do Norte</option>
                        	<option value="RS">Rio Grande do Sul</option>
                        	<option value="RO">Rondônia</option>
                        	<option value="RR">Roraima</option>
                        	<option value="SC">Santa Catarina</option>
                        	<option value="SP" selected>São Paulo</option>
                        	<option value="SE">Sergipe</option>
                        	<option value="TO">Tocantins</option>
                        </select>
                    </div>
                    <div class="form-group col-12 col-sm-12 col-md-4">
                        <label for="shipping_address_zipcode">{{ __('field.address_zipcode') }} <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="shipping_address_zipcode" name="shipping_address_zipcode" placeholder="{{ __('field.address_zipcode:placeholder') }}" value="{{ old('shipping_address_zipcode') }}" required>
                    </div>
                </div>
                <div class="form-row mb-3">
                    <div class="form-group col-12 col-sm-12 col-md-6">
                        <label for="mobile">{{ __('field.mobile') }}</label>
                        <input type="tel" class="form-control" id="mobile" value="{{ old('mobile') }}">
                    </div>
                    <div class="form-group col-12 col-sm-12 col-md-6">
                        <label for="phone">{{ __('field.phone') }}</label>
                        <input type="text" class="form-control" id="phone" value="{{ old('phone') }}">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-12 col-sm-12 col-md-12">
                        <label for="info">{{ __('field.info') }}</label>
                        <textarea class="form-control" id="info" name="info" placeholder="{{ __('field.info:placeholder') }}">{{ old('info') }}</textarea>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-12 col-sm-12 col-md-6 col-lg-5">
            <div class="order-summary">
                <div class="section-title left-aligned">
                    <h2>{{ __('page.checkout.your_order') }}</h2>
                </div>
                
                <div class="api-component--checkout">
                    @include('layouts.vendor.core.html.loading')
                </div>
                
                @include('shopping.checkout.components.checkout_payment')
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}