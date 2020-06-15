<?php

namespace App\Http\Controllers;
use App\Product;
use App\Image;
use App\Product_Source;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrowseProductController extends Controller
{
    public $detail = [];
    public $price = [];
    public $sorted = [];


    public function product($product_id){
        $price = DB::table('product__sources')->select('product_price', 'product_id')->where('product_id','=',$product_id)->min('product_price');
        $detail = DB::table('product__sources')
            ->join('products','product__sources.product_id','=','products.product_id')
            ->join('sources','sources.source_id','=','product__sources.source_id')
            ->join('image__products', 'image__products.product_id', '=', 'products.product_id')
            ->join('images','images.image_id','=','image__products.image_id')
            ->select('*')
            ->orderBy('product_price','asc')
            ->where('products.product_id','=',$product_id)
            ->get();
        $date_today= date('Y-m-d');
        $date_yesterday=date('Y-m-d', strtotime($date_today. ' - 1 day'));
        $date_daybeforeyesterday=date('Y-m-d', strtotime($date_today. ' - 2 day'));



//        $product = Product::orderBy('product_id')->get();
//        $image = Image::orderBy('image_id')->get();
//        print_r($detail);
//        print_r($price);
//        print_r($hello);


        return view('productdetail', ['price'=>$price,'detail'=>$detail,'date_today'=>$date_today,'date_yesterday'=>$date_yesterday]);

    }


}
