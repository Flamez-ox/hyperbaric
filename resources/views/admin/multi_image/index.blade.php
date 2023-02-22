
@extends("admin.admin_master")

@section("admin")
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-group">
                    @foreach($multiImages as $key => $multiImage)
                        <div class="col-md-4 mt-5">
                            <div class="card">
                                <a href="{{ route('edit.image', $multiImage->id) }}">
                                    <img 
                                        src="{{ asset($multiImage->img_name) }}" 
                                        alt="multi image"
                                        class="img-fluid"
                                    >
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <br><br>
            {{ $multiImages->links() }}
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header"> Add Multi Image </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('store.image') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="img_name" class="form-label"> Multi Image</label>
                            <input 
                                name="img_name[]" 
                                type="file" 
                                class="form-control" 
                                id="img_name" 
                                aria-describedby=""
                                multiple=""
                                >
                            @error('img_name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Add Image</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

