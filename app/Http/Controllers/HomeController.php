<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trending = Product::with('categories')->where('off', '>=', 1)
            ->get()
            ->random(18);
        return view('shopping.home.index', ['trending' => $trending]);
    }
}
