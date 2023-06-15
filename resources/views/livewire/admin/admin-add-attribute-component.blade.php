<div class="add-category">
    <h4 class="result-title">Add Attribute</h4>

    @if(\Illuminate\Support\Facades\Session::has('message'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('message')}}
        </div>
    @endif

    <form action="" wire:submit.prevent="addAttributes">
        <div class="analytic-box">
            <label class="primary-title">Attribute Name</label>
            <input type="text" name="name" class="default-input-style" placeholder="Attribute Name" title="Attribute Name" wire:model="name"/>
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="analytic-box" style="text-align: right;">
            <button type="submit" class="primary-button">Submit</button>
        </div>
    </form>
</div>
