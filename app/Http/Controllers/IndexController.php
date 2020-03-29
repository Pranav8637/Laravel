<?php

namespace App\Http\Controllers;

use App\productdisplay;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    public $display = [];
    protected $show = [];

//    protected $source=[];
    public function index()
    {
        $display = DB::table('products')
            ->join('image__products', 'image__products.product_id', '=', 'products.product_id')
            ->join('images','images.image_id','=','image__products.image_id')
//            ->join('sources', 'sources.source_id', '=', 'product__sources.source_id')
//            ->join('images','images.image_id','=','image__products.image_id')
//            ->join('image__products','image__products.image_id','=','images.image_id')
            ->select('*')
            ->get();

        print_r($display);


//        $data = $request->all();
//        $data = $request->except('scrape_id','source_id', 'product_id','current_price', 'image');




//        create new variable
//        loop products
//        check if product exists
//         if false
//           add new product
//
//        add scraped price to the product

        return view('index', $this->display,compact('display'));
    }
}
