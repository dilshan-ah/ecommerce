<div class="manage_product">
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
    </style>
    <div class="row">

        <div class="col-12">
            <div class="analytic-box table-head">
                <h3 class="primary-title">All Orders</h3>
            </div>
            @if(\Illuminate\Support\Facades\Session::has('order_message'))
                <div class="alert alert-success">
                    {{\Illuminate\Support\Facades\Session::get('order_message')}}
                </div>
            @elseif(\Illuminate\Support\Facades\Session::get('order_delete_message'))
                <div class="alert alert-danger">
                    {{\Illuminate\Support\Facades\Session::get('order_delete_message')}}
                </div>
            @endif

            <div class="analytic-box table-box">
                <h3 class="primary-title">Pending Orders</h3>
                <table>
                    <tr>
                        <th class="primary-title">Id</th>
                        <th class="primary-title">User Image</th>
                        <th class="primary-title">User Name</th>
                        <th class="primary-title">Order Status</th>
                        <th class="primary-title">Total Price</th>
                        <th class="primary-title">Time</th>
                        <th class="primary-title">Actions</th>
                    </tr>

                    @foreach($orders as $order)
                        @if($order->status == 'ordered')
                        <tr>
                            <td class="sub-title">{{$order->id}}</td>
                            <td class="sub-title">
{{--                                @if($order->user->profile->image)--}}
{{--                                    <div class="dashboard-list-image" style="background-image: url('{{asset('assets/images/profile')}}/{{$order->user->profile->image}}');">--}}
{{--                                    </div>--}}
{{--                                @else--}}
{{--                                    <div class="dashboard-list-image" style="background-image: url('{{asset('assets/images/profile/OIP.jpg')}}');">--}}
{{--                                    </div>--}}
{{--                                @endif--}}
                            </td>

                            <td class="sub-title">{{$order->firstname}} {{$order->lastname}}</td>

                            <td class="sub-title">
                                <a href="#" style="color: orange;" title="Edit Order Status" class="dropdown-btn">
                                    {{$order->status}}
                                    <i class="fi fi-rs-angle-small-down"></i>
                                </a>
                                <div class="sub-menu" style="position: absolute; padding: 0 15px;">
                                    <ul>
                                        <li>
                                            <a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'delivered')">Delivered</a>
                                        </li>

                                        <li>
                                            <a href="#" wire:click.prevent="updateOrderStatus({{$order->id}},'canceled')">Canceled</a>
                                        </li>
                                    </ul>
                                </div>
                            </td>

                            <td class="sub-title">{{$order->total}} ৳</td>

                            <td class="sub-title">{{$order->created_at}}</td>

                            <td class="sub-title">
                                <div class="action-box">
                                    <a href="{{route('admin.orderdetails',['order_id'=>$order->id])}}" style="color: teal;" title="View Order">
                                        <i class="fi fi-rr-eye"></i>
                                    </a>

                                    <a href="#" style="color: red;" title="Delete Order" wire:click.prevent="deleteOrder({{$order->id}})">
                                        <i class="fi fi-rr-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </table>

            </div>

            <div class="analytic-box table-box">
                <h3 class="primary-title">Completed Orders</h3>
                <table>
                    <tr>
                        <th class="primary-title">Id</th>
                        <th class="primary-title">User Image</th>
                        <th class="primary-title">User Name</th>
                        <th class="primary-title">Order Status</th>
                        <th class="primary-title">Total Price</th>
                        <th class="primary-title">Time</th>
                        <th class="primary-title">Actions</th>
                    </tr>

                    @foreach($orders as $order)
                        @if($order->status == 'delivered')
                            <tr>
                                <td class="sub-title">{{$order->id}}</td>
                                <td class="sub-title">
{{--                                    @if($order->user->profile->image)--}}
{{--                                        <div class="dashboard-list-image" style="background-image: url('{{asset('assets/images/profile')}}/{{$order->user->profile->image}}');">--}}
{{--                                        </div>--}}
{{--                                    @else--}}
{{--                                        <div class="dashboard-list-image" style="background-image: url('{{asset('assets/images/profile/OIP.jpg')}}');">--}}
{{--                                        </div>--}}
{{--                                    @endif--}}
                                </td>

                                <td class="sub-title">{{$order->firstname}} {{$order->lastname}}</td>

                                <td class="sub-title">
                                    {{$order->status}}
                                </td>

                                <td class="sub-title">{{$order->total}} ৳</td>

                                <td class="sub-title">{{$order->created_at}}</td>

                                <td class="sub-title">
                                    <div class="action-box">
                                        <a href="{{route('admin.orderdetails',['order_id'=>$order->id])}}" style="color: teal;" title="View Order">
                                            <i class="fi fi-rr-eye"></i>
                                        </a>

                                        <a href="#" style="color: red;" title="Delete Order" wire:click.prevent="deleteOrder({{$order->id}})">
                                            <i class="fi fi-rr-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </table>

            </div>

            <div class="analytic-box table-box">
                <h3 class="primary-title">Canceled Orders</h3>
                <table>
                    <tr>
                        <th class="primary-title">Id</th>
                        <th class="primary-title">User Image</th>
                        <th class="primary-title">User Name</th>
                        <th class="primary-title">Order Status</th>
                        <th class="primary-title">Total Price</th>
                        <th class="primary-title">Time</th>
                        <th class="primary-title">Actions</th>
                    </tr>

                    @foreach($orders as $order)
                        @if($order->status == 'canceled')
                            <tr>
                                <td class="sub-title">{{$order->id}}</td>
                                <td class="sub-title">
{{--                                    @if($order->user->profile->image)--}}
{{--                                        <div class="dashboard-list-image" style="background-image: url('{{asset('assets/images/profile')}}/{{$order->user->profile->image}}');">--}}
{{--                                        </div>--}}
{{--                                    @else--}}
{{--                                        <div class="dashboard-list-image" style="background-image: url('{{asset('assets/images/profile/OIP.jpg')}}');">--}}
{{--                                        </div>--}}
{{--                                    @endif--}}
                                </td>

                                <td class="sub-title">{{$order->firstname}} {{$order->lastname}}</td>

                                <td class="sub-title">
                                    {{$order->status}}
                                </td>

                                <td class="sub-title">{{$order->total}} ৳</td>

                                <td class="sub-title">{{$order->created_at}}</td>

                                <td class="sub-title">
                                    <div class="action-box">
                                        <a href="{{route('admin.orderdetails',['order_id'=>$order->id])}}" style="color: teal;" title="View Order">
                                            <i class="fi fi-rr-eye"></i>
                                        </a>

                                        <a href="#" style="color: red;" title="Delete Order" wire:click.prevent="deleteOrder({{$order->id}})">
                                            <i class="fi fi-rr-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </table>

            </div>
        </div>

    </div>
</div>
