@extends("admin.admin_master")

@section("admin")

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> Edit About </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('update.about', $about->id) }}" >
                                @csrf


                                <div class="mb-3">
                                    <label for="title" class="form-label"> About Title</label>
                                    <input 
                                        name="title" 
                                        type="text" 
                                        class="form-control" 
                                        id="title" 
                                        aria-describedby=""
                                        value='{{ $about->title }}'
                                        >
                                    @error('title')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="short_description" class="form-label"> About Short Description</label>
                                    <input 
                                        name="short_description" 
                                        type="text" 
                                        class="form-control" 
                                        id="short_description" 
                                        aria-describedby=""
                                        value='{{ $about->short_description }}'
                                        >
                                    @error('short_description')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="long_description" class="form-label"> About Long Description</label>
                                    <input 
                                        name="long_description" 
                                        type="text" 
                                        class="form-control" 
                                        id="long_description" 
                                        aria-describedby=""
                                        value='{{ $about->long_description }}'
                                        >
                                    @error('long_description')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Update About</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

