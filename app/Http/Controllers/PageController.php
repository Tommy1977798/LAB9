<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function home()
    {
        $products = Product::all(); // Fetch products from DB
        return view('home', compact('products'));
    }

    public function about()
    {
        return view('about');
    }
}
