@extends("admin.admin_master")

@section("admin")
                    
    <div class="row">
       
        <div class="col-lg-12">
            <div class="card card-default">
                <h2 class="card-header  card-header-border-bottom"> Add Portfolio </h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('store.portfolio') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="title" class="form-label"> Portfolio Title</label>
                            <input name="title" type="text" class="form-control" id="title" aria-describedby="">
                            @error('title')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="client" class="form-label"> Portfolio Client</label>
                            <input name="client" type="text" class="form-control" id="client" aria-describedby="">
                            @error('client')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="project_url" class="form-label"> Portfolio Url</label>
                            <input name="project_url" type="text" class="form-control" id="project_url" aria-describedby="">
                            @error('project_url')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="description" class="form-label"> Portfolio Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3">

                            </textarea>
                            @error('description')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="images" class="form-label"> Portfolio Image</label>
                            <input 
                                name="images[]" 
                                type="file" 
                                class="form-control-file" 
                                id="images" 
                                aria-describedby=""
                                multiple
                            >
                            @error('images')
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