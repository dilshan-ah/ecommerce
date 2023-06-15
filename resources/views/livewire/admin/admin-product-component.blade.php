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
                <h3 class="primary-title">All Products</h3>
                <a href="{{route('admin.addproduct')}}" class="primary-button">Add Product</a>
            </div>
            @if(\Illuminate\Support\Facades\Session::has('message'))
                <div class="alert alert-danger">
                    {{\Illuminate\Support\Facades\Session::get('message')}}
                </div>
            @endif

            <div class="analytic-box table-box">
                <table>
                    <tr>
                        <th class="primary-title">Id</th>
                        <th class="primary-title">Product Image</th>
                        <th class="primary-title">Product Name</th>
                        <th class="primary-title">Price</th>
                        <th class="primary-title">Stock</th>
                        <th class="primary-title">Category</th>
                        <th class="primary-title">Actions</th>
                    </tr>

                    @foreach($products as $product)
                        <tr>
                            <td class="sub-title">{{$product->id}}</td>
                            <td class="sub-title">
                                <div class="dashboard-list-image" style="background-image: url('{{asset('assets/images/products')}}/{{$product->image}}');">
                                </div>
                            </td>

                            <td class="sub-title">{{$product->name}}</td>

                            <td class="sub-title">{{$product->regular_price}}৳</td>

                            <td class="sub-title">{{$product->stock_status}}</td>

                            <td class="sub-title">{{$product->category->name}}</td>

                            <td class="sub-title">
                                <div class="action-box">
                                    <a href="{{route('admin.editproduct',['product_slug'=>$product->slug])}}" style="color: orange;" title="Edit Category">
                                        <i class="fi fi-sr-pencil"></i>
                                    </a>

                                    <a href="#" style="color: red;" title="Delete Category" wire:click.prevent="deleteProduct({{$product->id}})">
                                        <i class="fi fi-rr-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
                {{$products->links()}}
            </div>
        </div>

    </div>
</div>
