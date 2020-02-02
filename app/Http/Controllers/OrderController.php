<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        return view('neworder');
    }
    
    public function store(Request $request)
    {
        $request = $request->validate([
            'name' => ['required','max:80'],
            'email' => ['required','email','max:120'],
            'mobile' => ['required','regex:/^[0-9\-\(\)\/\+\s]*$/','max:40'],
        ]);

        //dd($request);

        $order = new Order([
            'customer_name' => $request['name'],
            'customer_email' => $request['email'],
            'customer_mobile' => $request['mobile'],
            'status' => 'CREATED'
        ]);

        $order->save();

        dd($order);
    }
}
