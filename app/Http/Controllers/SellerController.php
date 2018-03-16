<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SellerController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('sellers.index', compact('products'));
    }
}
