<div class="home-sliders">
    <div class="row">

        <div class="col-12">
            <div class="analytic-box table-head">
                <h3 class="primary-title">All Sliders</h3>
                <a href="{{route('admin.addslider')}}" class="primary-button">Add Slider</a>
            </div>
            @if(\Illuminate\Support\Facades\Session::has('message'))
                <div class="alert alert-success">
                    {{\Illuminate\Support\Facades\Session::get('message')}}
                </div>
            @endif

            <div class="analytic-box table-box">
                <div class="row">
                    @foreach($sliders as $slider)
                        <div class="col-md-4 col-sm-6 col-12">
                            <img src="{{asset('assets/images/sliders')}}/{{$slider->image}}" alt="" class="img-fluid">
                            <ul>
                                <li>Title : <span>{{$slider->title}}</span></li>
                                <li>Sub Title : <span>{{$slider->subtitle}}</span></li>
                                <li>Price : <span>{{$slider->price}} ৳</span></li>
                                <li>Link : <span>{{$slider->link}}</span></li>
{{--                                <li>Title : <span>{{$slider->image}}</span></li>--}}
                                <li>Status : <span>{{$slider->status == 1? 'Active':'Inactive'}}</span></li>
                                <li>Crearted At : <span>{{$slider->created_at}}</span></li>
                                <li>

                                    <a href="{{route('admin.editslider',['slider_id'=>$slider->id])}}" style="color: orange;" title="Edit Slider">
                                        <i class="fi fi-sr-pencil"></i>
                                    </a>

                                    <a href="#" wire:click.prevent="deleteSlider({{$slider->id}})" style="color: red;" title="Delete Category">
                                        <i class="fi fi-rr-trash"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
