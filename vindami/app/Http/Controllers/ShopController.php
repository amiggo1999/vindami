<?php

namespace App\Http\Controllers;
use App\Product;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->take(12)->get();

        return view('shop')->with('products', $products);
    }

    /**
     * Display the specified resource.
     * 
     * @param string $slug
     * @return \Illuminate\Http\Response
     */
    

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $wineryOffers = Product::where('slug', '!=', $slug)->inRandomOrder()->take(2)->get();

        return view('product')->with([
            'product' => $product,
            'wineryOffers' => $wineryOffers,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
