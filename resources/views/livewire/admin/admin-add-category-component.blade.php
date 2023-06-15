<div class="add-category">
    <h4 class="result-title">Add category</h4>

    @if(\Illuminate\Support\Facades\Session::has('message'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('message')}}
        </div>
    @endif

    <form action="" wire:submit.prevent="storeCategory">
        <div class="analytic-box">
            <label class="primary-title">Category Name</label>
            <input type="text" name="name" class="default-input-style" placeholder="Category Name" title="Category Name" wire:model="name" wire:keyup="generateslug" />
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <label class="primary-title">Add Slug</label>
            <input type="text" name="slug" class="default-input-style" placeholder="Add Slug" title="Add Slug" wire:model="slug" />
            @error('slug')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <label class="primary-title">Choose Parent Category</label>
            <select name="parent-category" class="default-input-style" title="Select Parent Category" wire:model="category_id">
                <option value="">None</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select><br>
        </div>

        <div class="analytic-box" style="text-align: right;">
            <button type="submit" class="primary-button">Submit</button>
        </div>
    </form>
</div>
