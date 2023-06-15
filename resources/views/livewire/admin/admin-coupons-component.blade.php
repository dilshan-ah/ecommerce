<div class="manage_category">
    <div class="row">

        <div class="col-12">
            <div class="analytic-box table-head">
                <h3 class="primary-title">All Offers</h3>
                <a href="{{route('admin.addcoupon')}}" class="primary-button">Add Coupons</a>
            </div>
            @if(\Illuminate\Support\Facades\Session::has('message'))
                <div class="alert alert-success">
                    {{\Illuminate\Support\Facades\Session::get('message')}}
                </div>
            @endif

            <div class="analytic-box table-box">
                <table>
                    <tr>
                        <th class="primary-title">Id</th>
                        <th class="primary-title">Offer Name</th>
                        <th class="primary-title">Code</th>
                        <th class="primary-title">Coupon value</th>
                        <th class="primary-title">Cart value</th>
                        <th class="primary-title">Expiry Date</th>
                        <th class="primary-title">Actions</th>
                    </tr>

                    @foreach($coupons as $coupon)
                        <tr>
                            <td class="sub-title">{{$coupon->id}}</td>
                            <td class="sub-title">{{$coupon->name}}</td>
                            <td class="sub-title">{{$coupon->code}}</td>
                            @if($coupon->type == 'fixed')
                                <td class="sub-title">{{$coupon->value}} ৳</td>
                            @else
                                <td class="sub-title">{{$coupon->value}} %</td>
                            @endif
                            <td class="sub-title">{{$coupon->cart_value}} ৳</td>
                            <td class="sub-title">{{$coupon->expiry_date}}</td>
                            <td class="sub-title">
                                <div class="action-box">
                                    <a href="{{route('admin.editcoupon',['coupon_id'=>$coupon->id])}}" style="color: orange;" title="Edit Category">
                                        <i class="fi fi-sr-pencil"></i>
                                    </a>

                                    <a href="#" onclick="confirm('Are you sure, you want to delete this coupon') || event.stopImmediatePropagation()" wire:click.prevent="deleteCoupon({{$coupon->id}})" style="color: red;" title="Delete Coupon">
                                        <i class="fi fi-rr-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
</div>

