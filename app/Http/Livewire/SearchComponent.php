<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class SearchComponent extends Component
{
    public $shorting;
    public $pagesize;

    public $search;
    public $product_cat;
    public $product_cat_id;

    public $min_price;
    public $max_price;

    public function mount(){
        $this->shorting = "default";
        $this->pagesize = 12;
        $this->fill(request()->only('search','product_cat','product_cat_id'));

        $this->min_price = 1;
        $this->max_price = 1000;
    }

    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_message','Item added in the cart');
        return redirect()->route('product.cart');
    }
    use WithPagination;
    public function render()
    {

        if ($this->shorting == "date"){
            $products = Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->where('name','like','%'.$this->search .'%')->where('category_id','like','%'.$this->product_cat_id.'%')->orderBy('created_at','DESC')->paginate($this->pagesize);
        }elseif ($this->shorting == "price"){
            $products = Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->where('name','like','%'.$this->search .'%')->where('category_id','like','%'.$this->product_cat_id.'%')->orderBy('regular_price','ASC')->paginate($this->pagesize);
        }elseif ($this->shorting == "price-desc"){
            $products = Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->where('name','like','%'.$this->search .'%')->where('category_id','like','%'.$this->product_cat_id.'%')->orderBy('regular_price','DESC')->paginate($this->pagesize);
        }else{
            $products = Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->where('name','like','%'.$this->search .'%')->where('category_id','like','%'.$this->product_cat_id.'%')->paginate($this->pagesize);
        }

        if(Auth::check())
        {
            Cart::instance('cart')->store(Auth::user()->email);
        }

        $categories = Category::all();

        return view('livewire.search-component',['products'=>$products, 'categories'=>$categories])->layout('layouts.base');
    }
}
