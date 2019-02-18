<!-- jQuery JS -->
{{ Html::script('assets/js/jquery.1.12.4.min.js') }}
<!-- Popper JS -->
{{ Html::script('assets/js/popper.min.js') }}
<!-- Bootstrap Notify JS -->
{{ Html::script('assets/js/bootstrap-notify.min.js') }}
<!-- Bootstrap JS -->
{{ Html::script('assets/js/bootstrap.min.js') }}
<!-- Plugins JS -->
{{ Html::script('assets/js/plugins.js') }}
<!-- Main JS -->
{{ Html::script('assets/js/main.js?v=1002') }}

@yield('javascript')

<script>

    @if(session()->has('previous_route_login_from_checkout'))
        $.notify({
        	message: "{{ __('page.checkout.box_login.welcome', ['name' => auth()->user()->name]) }}",
        }, {
        	offset: 50,
            type: 'success',
            showProgressbar: true,
            z_index: 9999,
        });
    @elseif(session()->has('previous_route_register_from_checkout'))
        $.notify({
        	message: "{{ __('page.checkout.box_login.register', ['name' => auth()->user()->name]) }}",
        }, {
        	offset: 50,
            type: 'success',
            showProgressbar: true,
            z_index: 9999,
        });
    @endif
    
    // $(window).bind('hashchange', function() {
    //     if(window.location.hash == '#login') {
    //         alert('IS_LOGIN');
    //     }
    // });
    
    var Quickview = {
        show(product) {
            $.ajax({
                type: "GET",
                url: "{{ route('product.list') }}",
                data: {
                    product
                },
                success: function(data){
                    Quickview.display(data);
                }
            });
        },
        
        display(response) {
            $('.api-component--quickview-swiper_slide').html(response.swiper_slide);
            $('.api-component--quickview-thumbnails').html(response.thumbnails);
            $('.api-component--quickview-name').html(response.name);
            $('.api-component--quickview-product_price').html(response.product_price);
            $('.api-component--quickview-product_description').html(response.product_description);
            $('.api-component--quickview-actions').html(response.actions);
            $('#product_quick_view').modal('show');
        }
    };
    
    var Wishlist = {
        add(product, image) {
            $.ajax({
                type: "GET",
                url: "{{ route('wishlist.add') }}",
                data: {
                    product
                },
                success: function(data, textStats, jqXHR) {
                    $.notify({
                    	message: "{{ __('html.wishlist.item.added') }}",
                    }, {
                    	offset: 50,
                        type: 'success',
                        showProgressbar: true,
                        z_index: 9999,
                    });
                },
                error: function() {
                    $.notify({
                    	message: "{{ __('html.wishlist.item.login') }}",
                    }, {
                    	offset: 50,
                        type: 'danger',
                        showProgressbar: true,
                        z_index: 9999,
                    });
                }
            });
        },
        
        list() {
            $.ajax({
                type: "GET",
                url: "{{ route('wishlist.list') }}",
                success: function(data){
                    Wishlist.update(data);
                }
            });
        },
        
        update(response) {
            // Wishlist
            $('.api-component--wishlist').html(response.html.wishlist);
        },
        
        add_cart(id, quantity) {
            Cart.add(id, quantity);
            Wishlist.remove(id);
        },
        
        remove(product) {
            $.ajax({
                type: "GET",
                url: "{{ route('wishlist.delete') }}",
                data: {
                    product
                },
                success: function(){
                    Wishlist.list();
                    $.notify({
                    	message: "{{ __('html.wishlist.item.removed') }}",
                    }, {
                    	offset: 50,
                        type: 'danger',
                        showProgressbar: true,
                        z_index: 9999,
                    }); 
                }
            });
        }
    }
    Wishlist.list();
    
    var Cart = {
        add(product, quantity, image) {
            if(quantity === false) {
                var quantity = $('#cart_item_quantity').val();
            }
            $.ajax({
                type: "GET",
                url: "{{ route('cart.add') }}",
                data: {
                    product,
                    quantity
                },
                success: function(data){
                    if(image) {
                        $.notify({
                            icon: image.replace("341x341", "50x50"),
                        	message: "{{ __('html.cart.item.added') }}",
                        }, {
                        	offset: 50,
                            icon_type: 'image',
                            type: 'success',
                            showProgressbar: true,
                            z_index: 9999,
                        });
                    } else {
                       $.notify({
                        	message: "{{ __('html.cart.item.added') }}",
                        }, {
                        	offset: 50,
                            type: 'success',
                            showProgressbar: true,
                            z_index: 9999,
                        }); 
                    }
                    Cart.list();
                }
            });
        },
        
        update(response) {
            // Cart Widget Amount
            $('.api-component--cart_widget_amount').html(response.amount ? '<span class="count-style">'+response.amount+'</span>' : '');
            
            // Cart Widget
            $('.api-component--cart_widget').html(response.html.cart_widget);
            
            // Cart
            $('.api-component--cart').html(response.html.cart);
            
            // Checkout
            $('.api-component--checkout').html(response.html.checkout);
            if(response.amount) {
                $('.api-component--checkout_loading').hide();
                $('.api-component--checkout_all').show();
            }
            
            // Wishlist
            // $('.api-component--wishlist').html(response.html.wishlist);
        },
        
        list() {
            $.ajax({
                type: "GET",
                url: "{{ route('cart.list') }}",
                success: function(data){
                    Cart.update(data);
                }
            });
        },
        
        refresh(product, quantity) {
            if(quantity === false) {
                var quantity = $('#cart_item_quantity_'+product).val();
            }
            $.ajax({
                type: "GET",
                url: "{{ route('cart.update') }}",
                data: {
                    product,
                    quantity
                },
                success: function(data){
                    $.notify({
                    	message: "{{ __('html.cart.item.updated') }}",
                    }, {
                    	offset: 50,
                        type: 'success',
                        showProgressbar: true,
                        z_index: 9999,
                    }); 
                    Cart.list();
                }
            });
        },
        
        remove(product) {
            $.ajax({
                type: "GET",
                url: "{{ route('cart.delete') }}",
                data: {
                    product
                },
                success: function(data){
                    $.notify({
                    	message: "{{ __('html.cart.item.removed') }}",
                    }, {
                    	offset: 50,
                        type: 'danger',
                        showProgressbar: true,
                        z_index: 9999,
                    }); 
                    Cart.list();
                }
            });
        }
    };
    Cart.list();
    
    @yield('javascript_inline')
</script>