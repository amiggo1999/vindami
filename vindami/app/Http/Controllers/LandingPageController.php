<?php

namespace App\Http\Controllers;
use App\Product;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::inRandomOrder()->take(6)->get();

        return view('landingpage')->with('products', $products);
    }
}