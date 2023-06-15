<div class="add-category">
    <h4 class="result-title">Add Product</h4>

    @if(\Illuminate\Support\Facades\Session::has('message'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('message')}}
        </div>
    @endif

    <form action="" wire:submit.prevent="addProduct">
        <div class="analytic-box">
            <label class="primary-title">Product Name</label>
            <input type="text" name="name" class="default-input-style" placeholder="Product Name" title="Product Name" wire:model="name" wire:keyup="generateslug"/>
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <label class="primary-title">Product Slug</label>
            <input type="text" name="name" class="default-input-style" placeholder="Product Slug" title="Product Slug" wire:model="slug"/>
            @error('slug')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <label class="primary-title">Short Description</label>
            <textarea name="short-description" class="default-input-style" placeholder="Short Description" rows="5" wire:model="short_description"></textarea>
            @error('short_description')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <label class="primary-title">Description</label>
            <textarea name="description" class="default-input-style" placeholder="Description" rows="10" wire:model="description"></textarea>
            @error('description')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <label class="primary-title">Regular Price</label>
            <input type="text" name="regular-price" class="default-input-style" placeholder="Regular Price" title="Regular Price" wire:model="regular_price"/>
            @error('regular_price')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <label class="primary-title">Sale Price</label>
            <input type="text" name="sale-price" class="default-input-style" placeholder="Sale Price" title="Sale Price" wire:model="sale_price"/>
            @error('sale_price')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <label class="primary-title">SKU</label>
            <input type="text" name="SKU" class="default-input-style" placeholder="SKU" title="SKU" wire:model="SKU"/>
            @error('name')
            <p class="text-danger">{{$SKU}}</p>
            @enderror

            <label class="primary-title">Stock Status</label>
            <select name="stock" class="default-input-style" title="Stock Status" wire:model="stock_status">
                <option value="instock">In Stock</option>
                <option value="outofstock">Out Of Stock</option>
            </select><br>
            @error('stock_status')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <label class="primary-title">Featured</label>
            <select name="featured" class="default-input-style" title="Make the product featured" wire:model="featured">
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select><br>
            @error('featured')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <label class="primary-title">Quantity</label>
            <input type="text" name="quantity" class="default-input-style" placeholder="Quantity" title="Product Quantity" wire:model="quantity"/>
            @error('quantity')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <label class="primary-title">Product Image</label>
            <input type="file" name="image" class="default-input-style input-file" title="Product Image" wire:model="image"/>
            @if($image)
                <img src="{{$image->temporaryUrl()}}" width="120px">
            @else
                <img src="{{asset('assets/admin-images/no-image.png')}}" width="120px">
            @endif
            @error('image')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <br>

            <label class="primary-title">Product Gallery</label>
            <input type="file" name="images" class="default-input-style input-file" title="Product Images" multiple wire:model="images"/>
            @if($images)
                @foreach($images as $image)
                    <img src="{{$image->temporaryUrl()}}" width="120px">
                @endforeach
            @else
                <img src="{{asset('assets/admin-images/no-image.png')}}" width="120px">
            @endif
{{--            @error('images')--}}
{{--            <p class="text-danger">{{$message}}</p>--}}
{{--            @enderror--}}
            <br>

            <label class="primary-title">Category</label>
            <select name="category" class="default-input-style" title="Product Category" wire:model="category_id" wire:change="changeSubcategory">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select><br>
            @error('category_id')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <label class="primary-title">Sub Category</label>
            <select name="category" class="default-input-style" title="Product Category" wire:model="scategory_id">
                <option value="0">Select Sub Category</option>
                @foreach($scategories as $scategory)
                    <option value="{{$scategory->id}}">{{$scategory->name}}</option>
                @endforeach
            </select><br>

            <label class="primary-title">Product Attributes</label>
            <div class="row">
                <div class="col-10">
                    <select name="category" style="width: 100%" class="default-input-style" title="Product Category" wire:model="attr">
                        <option value="0">Select Attribute</option>
                        @foreach($pattributes as $pattribute)
                            <option value="{{$pattribute->id}}">{{$pattribute->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-2" style="text-align: end">
                    <a href="#" class="primary-button" type="button" wire:click.prevent="add">Add</a>
                </div>
            </div>

            @foreach($inputs as $key => $value)
                <div class="row">
                    <div class="col-10">
                        <label class="primary-title">{{$pattributes->where('id',$attribute_arr[$key])->first()->name}}</label>
                        <input type="text" name="{{$pattributes->where('id',$attribute_arr[$key])->first()->name}}" class="default-input-style" placeholder="{{$pattributes->where('id',$attribute_arr[$key])->first()->name}}" title="{{$pattributes->where('id',$attribute_arr[$key])->first()->name}}" wire:model="attribute_value.{{$value}}"/>
                    </div>
                    <div class="col-2" style="text-align: center; align-self: center">
                        <a href="#" class="primary-button" style="background-color: red;" title="Remove Attribute" wire:click.prevent="remove({{$key}})">
                            Remove
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="analytic-box" style="text-align: right;">
            <button type="submit" class="primary-button">Submit</button>
        </div>
    </form>
</div>

