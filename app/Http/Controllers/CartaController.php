<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartaController extends Controller
{
    //
    public function carta(){
        $products = Product::all();
        // dd($productos);
        return view('User.carta', compact('products'));
    }
}
