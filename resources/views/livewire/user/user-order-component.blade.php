<main id="main" class="main-site left-sidebar">
    <div class="container">
        <h4>All Orders</h4>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Subtotal</th>
                    <th>Discount</th>
                    <th>Tax</th>
                    <th>Total</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Order Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->subtotal}} ৳</td>
                        <td>{{$order->discount}} ৳</td>
                        <td>{{$order->tax}} ৳</td>
                        <td>{{$order->total}} ৳</td>
                        <td>{{$order->firstname}}</td>
                        <td>{{$order->lastname}}</td>
                        <td>{{$order->mobile}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->status}}</td>
                        <td>{{$order->created_at}}</td>
                        <td><a href="{{route('user.orderdetails',['order_id'=>$order->id])}}">Order Details</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{$orders->links()}}
    </div>
</main>
