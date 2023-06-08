<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function createOrder()
    {
        $cartItems = \Cart::getContent();
        $order = new Order;
        $order->total_price = 0;
        $order->status = "new";
        $order->save();
        $totalPrice = 0;
        foreach ($cartItems as $item) {
            $order_item = new OrderItem;
            $order_item->order_id = $order->id;
            $order_item->product_id = $item->id;
            $order_item->quantity = $item->quantity;
            $order_item->unit_price = $item->price;
            $order_item->save();
            $totalPrice += $item->price;
        }
        $order->total_price = $totalPrice;
        $order->save();

        \Cart::clear();

        return view('pages.completeorder');
    }   
}
