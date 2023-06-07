<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Game;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Game::all();

        return view('products', compact('products'));
    }
}
