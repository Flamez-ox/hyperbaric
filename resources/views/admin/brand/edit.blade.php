@extends("admin.admin_master")

@section("admin")

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> Edit Brand </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('update.brand', $brand->id) }}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="old_image" value="{{ $brand->brand_image }}">

                                <div class="mb-3">
                                    <label for="brand_name" class="form-label"> Brand Name</label>
                                    <input 
                                        name="brand_name" 
                                        type="text" 
                                        class="form-control" 
                                        id="brand_name" 
                                        aria-describedby=""
                                        value='{{ $brand->brand_name }}'
                                        >
                                    @error('brand_name')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="brand_image" class="form-label"> Brand Name</label>
                                    <input 
                                        name="brand_image" 
                                        type="file" 
                                        class="form-control" 
                                        id="brand_image" 
                                        aria-describedby=""
                                        value='{{ $brand->brand_image }}'
                                        >
                                    @error('brand_image')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="mb-3 form-group">
                                   <img src=" {{ !empty($brand->brand_image) ? asset($brand->brand_image) : ' https://via.placeholder.com/400x40.png' }} " width="400px" height="200px" alt="">
                                </div>

                            
                                <button type="submit" class="btn btn-primary">Update Brand</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

