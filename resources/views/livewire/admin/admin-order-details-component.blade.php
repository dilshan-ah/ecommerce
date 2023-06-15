<div class="order-details">
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
        .flex-1{
            display: none;
        }
        th,td{
            padding-right: 20px;
        }
        tr img{
            width: 80px;
            height: auto;
        }
        .order-box{
            align-items: center;
            display: flex;
        }
    </style>
    <div class="row">

        <div class="col-12">
            <div class="analytic-box table-box">
                <table>
                    <h3 class="primary-title">Order Details</h3>
                    <tr class="sub-title">
                        <th class="primary-title">Order Id</th>
                        <th class="primary-title">Order Date</th>
                        <th class="primary-title">Status</th>
                        @if($order->status == "delivered")
                            <th class="primary-title">Delivery Date</th>
                        @elseif($order->status == "canceled")
                            <th class="primary-title">Cancellation Date</th>
                        @endif
                    </tr>


                    <tr>
                        <td class="sub-title">{{$order->id}}</td>
                        <td class="sub-title">{{$order->created_at}}</td>
                        <td class="sub-title">{{$order->status}}</td>
                        @if($order->status == "delivered")
                            <td class="sub-title">{{$order->delivered_at}}</td>
                        @elseif($order->status == "canceled")
                            <td class="sub-title">{{$order->canceled_at}}</td>
                        @endif
                    </tr>
                </table>
            </div>

            <div class="analytic-box table-box">
                <h3 class="primary-title">Ordered Items</h3>

                <table>
                    <h3 class="primary-title">Billing Details</h3>

                    <tr class="sub-title">
                        <th class="primary-title">Product Image</th>
                        <th class="primary-title">Product Name</th>
                        <th class="primary-title">Product Price</th>
                        <th class="primary-title">Quantity</th>
                        <th class="primary-title">Total</th>
                    </tr>

                    @foreach($order->orderItems as $item)
                        <tr>
                            <td class="sub-title"><img src="{{asset('assets/images/products')}}/{{$item->product->image}}" alt=""></td>
                            <td class="sub-title"><a class="sub-title" href="{{route('product.details',['slug'=>$item->product->slug])}}">{{$item->product->name}}</a></td>
                            <td class="sub-title">{{$item->price}}৳</td>
                            <td class="sub-title">{{$item->quantity}}x</td>
                            <td class="sub-title">{{$item->price * $item->quantity}}৳</td>
                        </tr>
                    @endforeach
                </table>
            </div>

            <div class="analytic-box">
                <h3 class="primary-title">Order Details</h3>
                <div class="row table-head">
                    <h3 class="primary-title">Sub Total</h3>
                    <h3 class="primary-title">{{$order->subtotal}}৳</h3>
                </div>
                <div class="row table-head">
                    <h3 class="primary-title">Tax</h3>
                    <h3 class="primary-title">{{$order->tax}}৳</h3>
                </div>
                <div class="row table-head">
                    <h3 class="primary-title">Shipping</h3>
                    <h3 class="primary-title">Free Shipping</h3>
                </div>
                <div class="row table-head">
                    <h3 class="primary-title">Total</h3>
                    <h3 class="primary-title">{{$order->total}}৳</h3>
                </div>
            </div>

            <div class="analytic-box  table-box">
                <table>
                    <h3 class="primary-title">Billing Details</h3>

                        <tr class="sub-title">
                            <th class="primary-title">First Name</th>
                            <td>{{$order->firstname}}</td>

                            <th class="primary-title">Last Name</th>
                            <td>{{$order->lastname}}</td>
                        </tr>

                        <tr class="sub-title">
                            <th class="primary-title">Phone Number</th>
                            <td>{{$order->mobile}}</td>

                            <th class="primary-title">Email</th>
                            <td style="text-transform: lowercase">{{$order->email}}</td>
                        </tr>

                        <tr class="sub-title">
                            <th class="primary-title">Address line 1</th>
                            <td>{{$order->line1}}</td>

                            <th class="primary-title">Address line 2</th>
                            <td>{{$order->line2}}</td>
                        </tr>

                        <tr class="sub-title">
                            <th class="primary-title">City</th>
                            <td>{{$order->city}}</td>

                            <th class="primary-title">Province</th>
                            <td>{{$order->province}}</td>
                        </tr>

                        <tr class="sub-title">
                            <th class="primary-title">Country</th>
                            <td>{{$order->country}}</td>

                            <th class="primary-title">Zipcode</th>
                            <td>{{$order->zipcode}}</td>
                        </tr>
                </table>
            </div>

            @if($order->is_shipping_different)
            <div class="analytic-box  table-box">
                <table>
                    <h3 class="primary-title">Shipping Details</h3>

                    <tr class="sub-title">
                        <th class="primary-title">First Name</th>
                        <td>{{$order->shipping->firstname}}</td>

                        <th class="primary-title">Last Name</th>
                        <td>{{$order->shipping->lastname}}</td>
                    </tr>

                    <tr class="sub-title">
                        <th class="primary-title">Phone Number</th>
                        <td>{{$order->shipping->mobile}}</td>

                        <th class="primary-title">Email</th>
                        <td style="text-transform: lowercase">{{$order->shipping->email}}</td>
                    </tr>

                    <tr class="sub-title">
                        <th class="primary-title">Address line 1</th>
                        <td>{{$order->shipping->line1}}</td>

                        <th class="primary-title">Address line 2</th>
                        <td>{{$order->shipping->line2}}</td>
                    </tr>

                    <tr class="sub-title">
                        <th class="primary-title">City</th>
                        <td>{{$order->shipping->city}}</td>

                        <th class="primary-title">Province</th>
                        <td>{{$order->shipping->province}}</td>
                    </tr>

                    <tr class="sub-title">
                        <th class="primary-title">Country</th>
                        <td>{{$order->shipping->country}}</td>

                        <th class="primary-title">Zipcode</th>
                        <td>{{$order->shipping->zipcode}}</td>
                    </tr>
                </table>
            </div>
            @endif

            <div class="analytic-box  table-box">
                <table>
                    <tr class="sub-title">
                        <th class="primary-title">Transaction Mode</th>
                        <td>
                            @if($order->transaction->mode === 'cod')
                                Cash On Delivery
                            @else
                                {{$order->transaction->mode}}
                            @endif
                        </td>
                    </tr>

                    <tr class="sub-title">
                        <th class="primary-title">Status</th>
                        <td>{{$order->transaction->status}}</td>
                    </tr>

                    <tr class="sub-title">
                        <th class="primary-title">Transaction Date</th>
                        <td>{{$order->transaction->created_at}}</td>
                    </tr>
                </table>
            </div>

        </div>

    </div>
</div>
