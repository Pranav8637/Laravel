<?php

namespace App\Http\Controllers;
use App\Product;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrowseProductController extends Controller
{
    public $detail = [];
    public $hello = [];
    public $image = [];



    public function product($product_id){
//        $hello    = Product::where('product_id', $product_id)->get();
        $detail = DB::table('product__sources')
            ->join('products','product__sources.product_id','=','products.product_id')
            ->join('sources','sources.source_id','=','product__sources.source_id')
            ->join('image__products', 'image__products.product_id', '=', 'products.product_id')
            ->join('images','images.image_id','=','image__products.image_id')
            ->select('*')
            ->where('products.product_id','=',$product_id)
            ->get();

//        $product = Product::orderBy('product_id')->get();
//        $image = Image::orderBy('image_id')->get();
        print_r($detail);
//        print_r($hello);


        return view('productdetail', $this->detail,compact('detail'));

    }


}
