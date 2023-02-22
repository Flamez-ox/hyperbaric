@extends("admin.admin_master")

@section("admin")

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> Edit Slider </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('update.slider', $portfolio->id) }}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="old_image" value="{{ $portfolio->slider_image }}">

                                <div class="mb-3">
                                    <label for="slider_title" class="form-label"> Slider Title</label>
                                    <input 
                                        name="slider_title" 
                                        type="text" 
                                        class="form-control" 
                                        id="slider_title" 
                                        aria-describedby=""
                                        value='{{ $portfolio->slider_title }}'
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
                                        value='{{ $portfolio->slider_description }}'
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
                                        value='{{ $portfolio->slider_image }}'
                                        >
                                    @error('slider_image')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="mb-3 form-group">
                                   <img src=" {{ !empty($portfolio->slider_image) ? asset($portfolio->slider_image) : ' https://via.placeholder.com/400x40.png' }} " width="400px" height="200px" alt="">
                                </div>

                            
                                <button type="submit" class="btn btn-primary">Update Portfolio</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

