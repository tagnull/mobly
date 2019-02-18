<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return redirect()->route('home.index');
// });

    // Auth::routes();
    $this->group([], function() {
    
        // Authentication Routes...
        $this->get('login.html', 'Auth\LoginController@showLoginForm')->name('login');
        $this->post('login.html', 'Auth\LoginController@login')->name('login.post');
        $this->post('logout.html', 'Auth\LoginController@logout')->name('logout');
        
        // Register Routes...
        $this->get('register.html', 'Auth\RegisterController@showRegistrationForm')->name('register');
        $this->post('register.html', 'Auth\RegisterController@register')->name('register.post');
        
        // Password Reset Routes...
        $this->get('password/reset.html', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
        $this->post('password/email.html', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
        $this->get('password/reset/{token}.html', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
        $this->post('password/reset.html', 'Auth\ResetPasswordController@reset')->name('password.reset.post');
    
    });

    $this->group([], function() {
        
        // Bypassing a Laravel problem
        Route::redirect('home', '/');
        
        // Language changing
    	$this->get('language/{lang}', 'Core\Languages\LanguageController@switchLang')->name('language.switch');
    
        // Home
        $this->get('/', 'HomeController@index')->name('home.index');
   
        // Categories
        $this->get('categorias.html', 'Items\CategoriesController@index')->name('categories.index');
        $this->get('categorias/{category}.html', 'Items\CategoriesController@show')->name('categories.show');
        
        // Products
        $this->get('produtos.html', 'Items\ProductsController@index')->name('products.index');
        $this->get('produtos/{product}.html', 'Items\ProductsController@show')->name('products.show');
        
        // Checkout related
        $this->get('carrinho.html', 'Checkout\CartController@show')->name('cart.index');
        // $this->get('carrinho.html', 'Checkout\CartController@show')->name('cart.index');
        $this->get('checkout.html', 'Checkout\CheckoutController@index')->name('checkout.index');
        $this->post('checkout.html', 'Checkout\CheckoutController@store')->name('checkout.store');
        
        // Pages
        $this->get('sobre.html', 'Pages\PagesController@about')->name('page.about');
        $this->get('contato.html', 'Pages\PagesController@contact')->name('page.contact');
        $this->get('pedidos/{uuid}.html', 'Checkout\OrdersController@show')->name('orders.show');
        
        // Cart API routes
        // It was placed purposely in WebRoutes instead of ApiRoutes
        $this->group(['prefix' => 'api', 'namespace' => 'Checkout'], function() {
            $this->get('cart/list', 'CartController@index')->name('cart.list');
            $this->get('cart/create', 'CartController@create')->name('cart.add');
            $this->get('cart/update', 'CartController@update')->name('cart.update');
            $this->get('cart/delete', 'CartController@destroy')->name('cart.delete');
            
            $this->get('product', 'CartController@product')->name('product.list');
            
            $this->get('wishlist/ping', 'WishlistController@ping')->name('wishlist.ping');
            $this->get('wishlist/add', 'WishlistController@create')->name('wishlist.add');
            $this->get('wishlist/list', 'WishlistController@index')->name('wishlist.list');
            $this->get('wishlist/delete', 'WishlistController@destroy')->name('wishlist.delete');
        });
        
        
        $this->group(['middleware' => 'auth'], function() {
            $this->get('minha-conta.html', 'Auth\AccountController@index')->name('account.index');
            $this->get('minha-conta/lista-de-desejos.html', 'Auth\WishlistController@index')->name('account.wishlist');
        });
    });