<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrowseProductController extends Controller
{
    protected $product = [];
    public function product(){
        $display = DB::table('products')
            ->join('image__products', 'image__products.product_id', '=', 'products.product_id')
            ->join('images','images.image_id','=','image__products.image_id')
//            ->join('sources', 'sources.source_id', '=', 'product__sources.source_id')
//            ->join('images','images.image_id','=','image__products.image_id')
//            ->join('image__products','image__products.image_id','=','images.image_id')
            ->select('*')
            ->get();
        return view('productdetail');
    }
}
