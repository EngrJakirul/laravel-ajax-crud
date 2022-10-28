<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;
    public function index()
    {
        return view('product.index');
    }

    public function addProduct(Request $request)
    {
        $request->validate(
            [
                'name'    => 'required|unique:products',
                'price'   => 'required',
            ],
            [
                'name.required'  => 'Name is Required',
                'name.unique'    => 'Product already exists',
                'price.required' => 'Price is required',
            ]
        );

        $product                 = new Product();
        $product->product_name   = $request->product_name;
        $product->product_price  = $request->product_price;
        $product->save();

    }
}
