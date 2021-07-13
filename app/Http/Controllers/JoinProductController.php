<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class JoinProductController extends Controller
{
    function show(){
         $data = Product::join('tags', 'tags.product_id', '=', 'product.product_id')
         ->get(['product.name','tag.tag_id']);


    }
   
}
