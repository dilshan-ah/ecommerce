<div class="add-category">
    <h4 class="result-title">Add coupon</h4>

    @if(\Illuminate\Support\Facades\Session::has('message'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('message')}}
        </div>
    @endif

    <form action="" wire:submit.prevent="storeCoupon">
        <div class="analytic-box">
            <label class="primary-title">Coupon Name</label>
            <input type="text" name="name" class="default-input-style" placeholder="Coupon Name" title="Coupon Name" wire:model="name"/>
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <label class="primary-title">Coupon Description</label>
            <textarea type="text" name="slug" class="default-input-style" placeholder="Coupon Description" title="Coupon Description" rows="5" wire:model="description"></textarea>
            @error('description')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <label class="primary-title">Coupon Code</label>
            <input type="text" name="code" class="default-input-style" placeholder="Coupon Code" title="Coupon Code" wire:model="code" />
            @error('code')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <label class="primary-title">Choose Parent Category</label>
            <select name="coupon-type" class="default-input-style" title="Coupon Type" wire:model="type">
                <option value="">None</option>
                <option value="fixed">Fixed</option>
                <option value="percent">Percent</option>
            </select><br>
            @error('type')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <label class="primary-title">Coupon Value</label>
            <input type="text" name="coupon-value" class="default-input-style" placeholder="Coupon Value" title="Coupon Value" wire:model="value" />
            @error('value')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <label class="primary-title">Cart Value</label>
            <input type="text" name="code" class="default-input-style" placeholder="Cart Value" title="Cart Value" wire:model="cart_value" />
            @error('cart_value')
            <p class="text-danger">{{$message}}</p>
            @enderror
            <label class="primary-title">Expiry Date</label>
            <input type="date" id="expiry_date" name="code" class="default-input-style" placeholder="Expiry Date" title="Expiry Date" wire:model="expiry_date" />
            @error('expiry_date')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>

        <div class="analytic-box" style="text-align: right;">
            <button type="submit" class="primary-button">Submit</button>
        </div>
    </form>
</div>

{{--@push('scripts')--}}
{{--    <script>--}}
{{--        $(function (){--}}
{{--            $('#expiry_date').datetimepicker({--}}
{{--                format: 'Y-MM-DD'--}}
{{--            })--}}
{{--            .on('dp-change',function (ev) {--}}
{{--                var data = $('#expiry_date').val();--}}
{{--                @this.set('expiry_date',data);--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endpush--}}
