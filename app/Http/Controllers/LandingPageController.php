<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $products = Product::inRandomOrder()->take(8)->get();
        // dd($products);
        return view('landing-page', compact('products'));
    }
}
