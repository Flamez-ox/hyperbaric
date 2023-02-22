@extends("admin.admin_master")

@section("admin")

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> Edit Slider </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('update.slider', $slider->id) }}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="old_image" value="{{ $slider->slider_image }}">

                                <div class="mb-3">
                                    <label for="slider_title" class="form-label"> Slider Title</label>
                                    <input 
                                        name="slider_title" 
                                        type="text" 
                                        class="form-control" 
                                        id="slider_title" 
                                        aria-describedby=""
                                        value='{{ $slider->slider_title }}'
                                        >
                                    @error('slider_title')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="slider_description" class="form-label"> Slider Content</label>
                                    <input 
                                        name="slider_description" 
                                        type="text" 
                                        class="form-control" 
                                        id="slider_description" 
                                        aria-describedby=""
                                        value='{{ $slider->slider_description }}'
                                        >
                                    @error('slider_description')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="slider_image" class="form-label"> Slider Image</label>
                                    <input 
                                        name="slider_image" 
                                        type="file" 
                                        class="form-control" 
                                        id="slider_image" 
                                        aria-describedby=""
                                        value='{{ $slider->slider_image }}'
                                        >
                                    @error('slider_image')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="mb-3 form-group">
                                   <img src=" {{ !empty($slider->slider_image) ? asset($slider->slider_image) : ' https://via.placeholder.com/400x40.png' }} " width="400px" height="200px" alt="">
                                </div>

                            
                                <button type="submit" class="btn btn-primary">Update Slider</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

