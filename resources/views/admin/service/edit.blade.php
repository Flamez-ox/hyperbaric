@extends("admin.admin_master")

@section("admin")

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> Edit Service </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('update.service', $service->id) }}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="old_image" value="{{ $service->service_image }}">

                                <div class="mb-3">
                                    <label for="title" class="form-label"> Service Title</label>
                                    <input 
                                        name="title" 
                                        type="text" 
                                        class="form-control" 
                                        id="title" 
                                        aria-describedby=""
                                        value='{{ $service->title }}'
                                        >
                                    @error('title')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="long_description" class="form-label"> Service Long Description</label>
                                    <input 
                                        name="long_description" 
                                        type="text" 
                                        class="form-control" 
                                        id="long_description" 
                                        aria-describedby=""
                                        value='{{ $service->long_description }}'
                                        >
                                    @error('long_description')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>


                                <div class="mb-3">
                                    <label for="service_image" class="form-label"> Slider Image</label>
                                    <input 
                                        name="service_image" 
                                        type="file" 
                                        class="form-control" 
                                        id="service_image" 
                                        aria-describedby=""
                                        value='{{ $service->service_image }}'
                                        >
                                    @error('service_image')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="mb-3 form-group">
                                   <img src=" {{ !empty($service->service_image) ? asset($service->service_image) : ' https://via.placeholder.com/400x40.png' }} " width="400px" height="200px" alt="">
                                </div>

                                <button type="submit" class="btn btn-primary">Update Service</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

