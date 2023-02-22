@extends("admin.admin_master")

@section("admin")
                    
    <div class="row">
       
        <div class="col-lg-12">
            <div class="card card-default">
                <h2 class="card-header  card-header-border-bottom"> Add Slider </h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('store.slider') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="slider_title" class="form-label"> Slider Title</label>
                            <input name="slider_title" type="text" class="form-control" id="slider_title" aria-describedby="">
                            @error('slider_title')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="slider_description" class="form-label"> Slider Description</label>
                            <textarea class="form-control" name="slider_description" id="slider_description" rows="3">

                            </textarea>
                            @error('slider_description')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="slider_image" class="form-label"> Slider Image</label>
                            <input name="slider_image" type="file" class="form-control-file" id="slider_image" aria-describedby="">
                            @error('slider_image')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection