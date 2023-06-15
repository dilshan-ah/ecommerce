<div class="manage_attributes">
    <div class="row">

        <div class="col-12">
            <div class="analytic-box table-head">
                <h3 class="primary-title">All Attributes</h3>
                <a href="{{route('admin.add_attributes')}}" class="primary-button">Add Attribute</a>
            </div>
            @if(\Illuminate\Support\Facades\Session::has('message'))
                <div class="alert alert-success">
                    {{\Illuminate\Support\Facades\Session::get('message')}}
                </div>
            @endif

            @if(\Illuminate\Support\Facades\Session::has('delete_message'))
                <div class="alert alert-danger">
                    {{\Illuminate\Support\Facades\Session::get('delete_message')}}
                </div>
            @endif

            <div class="analytic-box table-box">
                <table>
                    <tr>
                        <th class="primary-title">Id</th>
                        <th class="primary-title">Name</th>
                        <th class="primary-title">Created at</th>
                        <th class="primary-title">Actions</th>
                    </tr>

                    @foreach($pattributes as $pattribute)
                        <tr>
                            <td class="sub-title">{{$pattribute->id}}</td>
                            <td class="sub-title">{{$pattribute->name}}</td>
                            <td class="sub-title">{{$pattribute->created_at}}</td>
                            <td class="sub-title">
                                <div class="action-box">
                                    <a href="{{route('admin.edit_attributes',['attribute_id'=>$pattribute->id])}}" style="color: orange;" title="Edit Category">
                                        <i class="fi fi-sr-pencil"></i>
                                    </a>

                                    <a href="#" onclick="confirm('Are you sure, you want to delete this Category') || event.stopImmediatePropagation()" wire:click.prevent="deleteAttribute({{$pattribute->id}})" style="color: red;" title="Delete Category">
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
