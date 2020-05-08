<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{

    /**
     * Show the products on the dashboard
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('products');
    }

    /**
     * Get all the products in the store
     *
     * @return \Illuminate\Http\Response
     */
    public function getProducts()
    {
        $products = Product::all();
        return $products;
    }
}
