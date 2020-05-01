<?php

namespace App\Http\Controllers;

use App\Subscription;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SubscriptionController extends Controller
{
    public function __construct(subscription $subscription, Request $request)
    {
        $this->middleware('auth');
        $this->subscription = $subscription;
        $this->request = $request;
    }

    public function subscribe(Request $request)
    {
//        $subscription = $request->input();
//        $subscription = new Subscription();
//        $subscription->product_id = $subscription['product_id'];
//        $subscription->email = $subscription['email'];
//        $subscription->created_at = date('Y-m-d H:i:s');
//        $subscription->updated_at = date('Y-m-d H:i:s');
//        $subscription->save();
//
//        return view('index');
        $product_id = $this->request->input('product_id');
        $email = $this->request->input('email');

        $data = [
            'product_id' => $product_id,
            'email' => $email,
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $data['created_at'] = date('Y-m-d H:i:s');
        \DB::table('subscriptions')->insert($data);

        return redirect('/')->with('success','Alert!! Message successfully added in our database.');
    }

}
