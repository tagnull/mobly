<?php

namespace App\Http\Controllers\Items;

use Illuminate\Http\Request;
use App\Models\Items\Product;
use App\Models\Items\Category;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::with('children')->whereNull('parent_id')->orderBy('name', 'asc')->get();
        
        $category = $request->get('category');
        $search = $request->get('search');
        
        $products = Product::with('categories', 'images', 'features')
            ->when($search, function($query) use($search) {
                return $query->where('name', 'like', "%{$search}%");
            })
            ->when($category, function($query) use($category) {
                return $query->whereHas('categories', function($query) use($category) {
                    $id = Category::select('id')->where('slug', $category)->pluck('id');
                    return $query->where('categories.id', $id);
                });
            })
            ->paginate(24);
        
        return view('shopping.products.index', ['categories' => $categories, 'products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('categories', 'images')->where('slug', $id)->firstOrFail();
        return view('shopping.products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
