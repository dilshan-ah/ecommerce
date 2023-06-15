<?php

namespace App\Http\Livewire\Admin;

use App\Models\Coupon;
use Livewire\Component;

class AdminEditCouponComponent extends Component
{
    public $name;
    public $description;
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $expiry_date;

    public function mount($coupon_id)
    {
        $coupon = Coupon::find($coupon_id);
        $this->name = $coupon->name;
        $this->description = $coupon->description;
        $this->code = $coupon->code;
        $this->type = $coupon->type;
        $this->value = $coupon->value;
        $this->cart_value = $coupon->cart_value;
        $this->coupon_id = $coupon->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'description' => 'max:50',
            'code' => 'required|unique:coupons',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date' => 'required'
        ]);
    }

    public function updateCoupon()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'max:50',
            'code' => 'required',
            'type' => 'required',
            'value' => 'required|numeric',
            'cart_value' => 'required|numeric',
            'expiry_date' => 'required'
        ]);

        $coupon = Coupon::find($this->coupon_id);
        $coupon->name = $this->name;
        $coupon->description = $this->description;
        $coupon->code = $this->code;
        $coupon->type = $this->type;
        $coupon->value = $this->value;
        $coupon->cart_value = $this->cart_value;
        $coupon->expiry_date = $this->expiry_date;
        $coupon->save();
        session()->flash('message','Coupon has been updated successfully');

        return $this->redirect(route('admin.coupons'));
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-coupon-component')->layout('layouts.admin');
    }
}
