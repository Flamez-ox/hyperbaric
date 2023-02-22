
@extends("admin.admin_master")

@section("admin")
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-group">
                        <div class="col-md-12 mt-3 mb-3">
                            <div class="card">
                                <img 
                                    src="{{ asset($multiImage->img_name) }}" 
                                    alt="multi image"
                                >
                            </div>
                        </div>
                </div>
            </div>
            <br><br>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header"> Edit Multi Image </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update.image', $multiImage->id) }}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" value="{{ $multiImage->img_name }}" name="old_img">
                        <div class="mb-3">
                            <label for="img_name" class="form-label"> Multi Image</label>
                            <input 
                                name="img_name" 
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
                    
                        <button type="submit" class="btn btn-primary">Edit Image</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

