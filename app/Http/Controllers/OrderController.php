<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResources;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders=Order::paginate(10);
        return OrderResources::collection($orders);
    }
}
