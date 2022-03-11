<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function saveproduct()
    {
        $product = Product::all();
        return view('dashboard.stock', compact('product'));
    }
}
