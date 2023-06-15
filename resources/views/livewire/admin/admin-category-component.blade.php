<div class="manage_category">
    <div class="row">

        <div class="col-12">
            <div class="analytic-box table-head">
                <h3 class="primary-title">All Categories</h3>
                <a href="{{route('admin.addcategory')}}" class="primary-button">Add Category</a>
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
                        <th class="primary-title">Category Image</th>
                        <th class="primary-title">Category Name</th>
                        <th class="primary-title">Slug</th>
                        <th class="primary-title">Sub Category</th>
                        <th class="primary-title">Actions</th>
                    </tr>

                    @foreach($categories as $category)
                    <tr>
                        <td class="sub-title">{{$category->id}}</td>
                        <td class="sub-title">
                            <div class="dashboard-list-image" style="background-image: url('{{asset('assets/admin-images/product1.jpg')}}');">
                            </div>
                        </td>

                        <td class="sub-title">{{$category->name}}</td>
                        <td class="sub-title">{{$category->slug}}</td>
                        <td class="sub-title">
                            <ul style="line-height: 10px;">
                                @foreach($category->subCategories as $scategory)
                                    <li style="display: flex;">
                                        <a href="{{route('admin.editcategory',['category_slug'=>$category->slug,'scategory_slug'=>$scategory->slug])}}" style="display: flex;" class="sub-title">
                                            <i class="fi fi-rr-arrow-small-right" style="display: flex; align-self: center;"></i>
                                            {{$scategory->name}}
                                        </a>
                                        <a href="#" onclick="confirm('Are you sure, you want to delete this SubCategory') || event.stopImmediatePropagation()" wire:click.prevent="deleteSubcategory({{$scategory->id}})"  style="color: red;">
                                            <i class="fi fi-rr-trash"></i>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </td>
                        <td class="sub-title">
                            <div class="action-box">
                                <a href="{{route('admin.editcategory',['category_slug'=>$category->slug])}}" style="color: orange;" title="Edit Category">
                                    <i class="fi fi-sr-pencil"></i>
                                </a>

                                <a href="#" onclick="confirm('Are you sure, you want to delete this Category') || event.stopImmediatePropagation()" wire:click.prevent="deleteCategory({{$category->id}})" style="color: red;" title="Delete Category">
                                    <i class="fi fi-rr-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
{{--                {{$categories->links()}}--}}
            </div>
        </div>

    </div>
</div>
