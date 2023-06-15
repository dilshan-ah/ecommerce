<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AdminOrderComponent extends Component
{
    public function updateOrderStatus($order_id,$status)
    {
        $order = Order::find($order_id);
        $order->status = $status;

        if ($status == "delivered")
        {
            $order->delivered_at = DB::raw('CURRENT_DATE');
        }
        elseif ($status == "canceled")
        {
            $order->canceled_at = DB::raw('CURRENT_DATE');
        }

        $order->save();

        session()->flash('order_message','Order Status Hase been updated successfully!');
    }

    public function deleteOrder($id)
    {
        $order = Order::find($id);
        $order->delete();
        session()->flash('order_delete_message','Order has been deleted successfully!');
    }
    public function render()
    {
        $orders = Order::orderBy('created_at','DESC')->paginate();
        return view('livewire.admin.admin-order-component',['orders'=>$orders])->layout('layouts.admin');
    }
}
