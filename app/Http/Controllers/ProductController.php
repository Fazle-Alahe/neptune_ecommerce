<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product_details(){
        return view('frontend.product.product_details');
    }
}
