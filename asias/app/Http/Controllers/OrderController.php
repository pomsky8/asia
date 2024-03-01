<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order; // Import the Order model

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all(); // Retrieve all orders
        return view('orders.index', compact('orders')); // Pass orders to the view
    }
}

