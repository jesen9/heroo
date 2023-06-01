<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function createOrder(Request $in)
    {
        $order = new Order();
        $order->name = $in->name;
        $order->email = $in->email;
        $order->phone = $in->phone;
        $order->service = $in->service;
        $order->duration = $in->duration;
        $order->price = $in->price;

        $order->save();

        return redirect()->back()->with('message','Pemesanan telah dibuat!');
    }
}
