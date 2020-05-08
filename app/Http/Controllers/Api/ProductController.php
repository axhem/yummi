<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{

    /**
     * Get available products in the menu
     *
     */
    public function index()
    {
        $products = Product::all();
        return $products;
    }

    /**
     * Get product by Id
     *
     * @param id integer
     * @return \Illuminate\Http\Response
     */
    public function getProductById($id)
    {
        $product =  Product::find($id);
        if(!$product)
            return response()->json(['message' => 'No products were found']);
        return $product;
    }

}
