<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class test extends Controller
{
    public function test()
    {
        $records = DB:: table("product__sources")
            ->get();


        $date_today= date('Y-m-d');
        $date_yesterday=date('Y-m-d', strtotime($date_today. ' - 1 day'));

        $compare = DB::table('product__sources')
            ->select('*')
            ->where('created_at', $date_today)
            ->get();

        $compare2 = DB::table('product__sources')
            ->select('*')
            ->where('created_at', $date_yesterday)
            ->get();

        foreach ($compare as $comp)
        {
            foreach ($compare2 as $comp2)
            {

                    if ($comp->product_price < $comp2->product_price)
                    {
                        $love = $comp->product_price;
                        print_r($love);
                    }
            }
        }
    }
}
