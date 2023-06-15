<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Subcategory;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {
        $totalproducts = Product::all()->sum('quantity');
        $totalproducttypes = Product::all()->count();
        $totalcategories = Category::all()->count();
        $totalsubcategories = Subcategory::all()->count();
        $totalusers = User::where('utype','USR')->count();
        $totalorders = Order::where('status','delivered')->count();
        $totalsoldvalue = Order::where('status','delivered')->sum('total');
        $productsold = OrderItem::all()->sum('quantity');

        return view('livewire.admin.admin-dashboard-component',[
            'totalproducts' => $totalproducts,
            'totalcategories' => $totalcategories,
            'totalsubcategories' => $totalsubcategories,
            'totalusers' => $totalusers,
            'totalorders' => $totalorders,
            'totalsoldvalue' => $totalsoldvalue,
            'totalproducttypes'=> $totalproducttypes,
            'productsold' => $productsold
        ])->layout('layouts.admin');
    }
}
