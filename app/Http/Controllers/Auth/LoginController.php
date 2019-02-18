<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    // Method rewritten to allow the user be redirect to the right page depending on where the login comes from
    public function redirectTo() {
        switch(app('router')->getRoutes()->match(app('request')->create(\URL::previous()))->getName()) {
            case 'checkout.index':
                session()->flash('previous_route_login_from_checkout', true);
                return route('checkout.index');
                break;
            default:
                return route('home.index');
        }
        //return route(app('router')->getRoutes()->match(app('request')->create(\URL::previous()))->getName());
    }
}
