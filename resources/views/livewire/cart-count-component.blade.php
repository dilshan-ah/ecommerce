<div class="wrap-icon-section minicart">
    <a href="{{route('product.cart')}}" class="link-direction">
        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
        <div class="left-info">
            @if(\Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->count() > 0)
                <span class="index">{{\Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->count()}} items</span>
            @else
                <span class="index" style="background-color: #888888">0 items</span>
            @endif
            <span class="title">CART</span>
        </div>
    </a>
</div>
