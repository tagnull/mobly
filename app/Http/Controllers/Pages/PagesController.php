<?php

namespace App\Http\Controllers\Pages;

use App\Models\Items\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        return view('shopping.pages.about');
    }
    
    public function contact()
    {
        return view('shopping.pages.contact');
    }
}
