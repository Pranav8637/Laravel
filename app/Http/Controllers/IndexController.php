<?php

namespace App\Http\Controllers;

use App\Image;
use App\Product;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class IndexController extends Controller
{
    public $display = [];
    public $product = [];
    public $image = [];

//    protected $source=[];
    public function index()
    {
        $display = DB::table('products')
            ->join('image__products', 'image__products.product_id', '=', 'products.product_id')
            ->join('images','images.image_id','=','image__products.image_id')
            ->select('*')
            ->get();



        $product = Product::orderBy('product_id')->get();
        $image = Image::orderBy('image_id')->get();

        $date_today= date('Y-m-d');
        $date_daybeforeyesterday=date('Y-m-d', strtotime($date_today. ' - 2 day'));

        $tables= DB::table('product__sources')
            ->where('created_at', '=', $date_daybeforeyesterday);
        $tables-> delete();
//        print_r("Successfully Deleted!!");



//        $data = $request->all();
//        $data = $request->except('scrape_id','source_id', 'product_id','current_price', 'image');


//        create new variable
//        loop products
//        check if product exists
//         if false
//           add new product
//
//        add scraped price to the product

        return view('index', $this->display,compact('display', 'product','image'));
//        return $display;
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $display = DB::table('products')->where('name','like','%'.$search.'%')
        ->join('image__products', 'image__products.product_id', '=', 'products.product_id')
        ->join('images','images.image_id','=','image__products.image_id')
        ->select('*')
        ->get();


        if (count($display) > 0){
            return view('index', $this->display,compact('display'));
        }else {
            return view('index')->with('message','No product found for this search!');
        }
    }

    public function showCates($category_id){
        $category_products  = Product::where('category_id', $category_id)
        ->join('image__products', 'image__products.product_id', '=', 'products.product_id')
        ->join('images','images.image_id','=','image__products.image_id')->get();
//        return ($category_products);
        return view('category_list_pro', ['category_products'=>$category_products]);
//        return view('category_list_pro',compact('category_products',$id_));
    }




}
