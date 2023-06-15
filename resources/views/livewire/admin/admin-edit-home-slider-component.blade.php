<div class="add-category">
    <h4 class="result-title">Edit Slider</h4>

    @if(\Illuminate\Support\Facades\Session::has('message'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('message')}}
        </div>
    @endif

    <form action="" wire:submit.prevent="updateSlide">
        <div class="analytic-box">

            <label class="primary-title">Slider Image</label>
            <input type="file" name="image" class="default-input-style input-file" title="Product Image" wire:model="newimage"/>
            @if($newimage)
                <img src="{{$newimage->temporaryUrl()}}" class="img-fluid">
            @else
                <img src="{{asset('assets/images/sliders')}}/{{$image}}" alt="" class="img-fluid">
            @endif
            @error('image')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <br>


            <label class="primary-title">Title</label>
            <input type="title" name="name" class="default-input-style" placeholder="Title" title="Title" wire:model="title"/>
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <label class="primary-title">Subtitle</label>
            <input type="text" name="subtitle" class="default-input-style" placeholder="Subtitle" title="Subtitle" wire:model="subtitle"/>
            @error('subtitle')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <label class="primary-title">Price</label>
            <input name="price" class="default-input-style" placeholder="Price" wire:model="price">
            @error('price')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <label class="primary-title">Link</label>
            <input name="link" class="default-input-style" placeholder="Link" wire:model="link">
            @error('link')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <label class="primary-title">Slider Status</label>
            <select name="status" class="default-input-style" title="Slider Status" wire:model="status">
                <option value="1">Active</option>
                <option value="0">InActive</option>
            </select><br>
            @error('status')
            <p class="text-danger">{{$message}}</p>
            @enderror

        </div>

        <div class="analytic-box" style="text-align: right;">
            <button type="submit" class="primary-button">Update</button>
        </div>
    </form>
</div>


