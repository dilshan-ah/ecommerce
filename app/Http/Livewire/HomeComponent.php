<?php

namespace App\Http\Livewire;

use App\Models\HomeSlider;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        if (Auth::check())
        {
            Cart::instance('cart')->store(Auth::user()->email);
        }

        $sliders = HomeSlider::where('status',1)->get();

        return view('livewire.home-component',['sliders'=>$sliders])->layout('layouts.base');
    }
}
