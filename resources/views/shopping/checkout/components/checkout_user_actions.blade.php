<div class="user-actions-area">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            @guest
            <div class="user-actions user-login">
                <h3>{!! __('page.checkout.box_login.title') !!}</h3>
                <div id="checkout_login" class="display-content">
                    <div class="login-info">
                        <p class="login-text">{{ __('page.checkout.box_login.message') }}</p>
                        @include('auth.partials.login')
                    </div>
                </div>
            </div>
            @endguest
            <div class="user-actions user-coupon">
                <h3>{!! __('page.checkout.box_coupon.title') !!}</span></h3>
                <div id="checkout_coupon" class="display-content">
                    <div class="coupon-info">
                        <form action="#">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6">
                                    <div class="input-group">
                                        <input type="text" name="coupon" value="" placeholder="Coupon Code" id="input-coupon" class="form-control mr-3" required>
                                        <input type="submit" value="Apply Coupon" id="button-coupon" class="btn btn-secondary">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>