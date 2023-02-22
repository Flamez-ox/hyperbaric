@extends("admin.admin_master")

@section("admin")
                    
    <div class="row">
       
        <div class="col-lg-12">
            <div class="card card-default">
                <h2 class="card-header  card-header-border-bottom"> Add Service </h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('store.service') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="title" class="form-label"> Service Title</label>
                            <input name="title" type="text" class="form-control" id="title" aria-describedby="">
                            @error('title')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="long_description" class="form-label">Service Long Description</label>
                            <textarea class="form-control" name="long_description" id="long_description" rows="3">

                            </textarea>
                            @error('long_description')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>


                        <div class="form-group mb-3">
                            <label for="service_image" class="form-label"> Service Image</label>
                            <input name="service_image" type="file" class="form-control-file" id="service_image" aria-describedby="">
                            @error('service_image')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Add Service</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection