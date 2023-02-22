@extends("admin.admin_master")

@section("admin")

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        @if(session("success"))

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session("success") }}!</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                        @endif
                        <div class="card-header"> All Brand </div>
                            <div class="table-responsive-sm">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">S/N</th>
                                        <th scope="col">Brand Name</th>
                                        <th scope="col">Brand Image</th>
                                        <th scope="col">Created_at</th>
                                        <th scope="col">Updated_at</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($brands as $key => $brand)
                                        <tr>
                                            <!-- <th scope="row">{{$key + 1}}</th> -->
                                            <th scope="row">{{ $brands->firstItem() + $loop->index }}</th>
                                            <td>{{  $brand->brand_name }}</td>
                                            <td>
                                                <img 
                                                    src="{{ !empty($brand->brand_image) ? asset($brand->brand_image) : ' https://via.placeholder.com/70x40.png' }}" 
                                                    width="70px"
                                                    height="40px"
                                                    alt="brand"
                                                >
                                            </td><!-- // usind eloquent orm for onetoone relationship -->

                                            
                                            <td> 
                                                @if($brand->created_at == NULL) 
                                                    <span>No Date Set</span>
                                                @else
                                                    {{ Carbon\Carbon::parse($brand->created_at)->diffForHumans() }}
                                                @endif
                                            </td>

                                            <td> 
                                                @if($brand->updated_at == NULL) 
                                                    <span>No Date Set</span>
                                                @else
                                                    {{ Carbon\Carbon::parse($brand->updated_at)->diffForHumans() }}
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="{{ route('edit.brand', $brand->id) }}">Edit</a></li>
                                                        <li>
                                                            <a 
                                                                class="dropdown-item" 
                                                                href="{{ route('destroy.brand', $brand->id) }}"
                                                                onclick="return confirm('Are you sure you want to delete this brand permanently')"
                                                            >
                                                                Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        {{ $brands->links() }}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header"> Add Brand </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('store.brand') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="brand_name" class="form-label"> Brand Name</label>
                                    <input name="brand_name" type="text" class="form-control" id="brand_name" aria-describedby="">
                                    @error('brand_name')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="brand_image" class="form-label"> Brand Image</label>
                                    <input name="brand_image" type="file" class="form-control" id="brand_image" aria-describedby="">
                                    @error('brand_image')
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
        </div>

    </div>

@endsection