@extends("admin.admin_master")

@section("admin")
                    
    <div class="row">
       
        <div class="col-lg-12">
            <div class="card card-default">
                <h2 class="card-header  card-header-border-bottom"> Add About </h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('store.contact') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="email" class="form-label"> Contact Email</label>
                            <input name="email" type="text" class="form-control" id="email" aria-describedby="">
                            @error('email')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="phone" class="form-label"> Contact Phone</label>
                            <input name="phone" type="text" class="form-control" id="phone" aria-describedby="">
                            @error('phone')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>


                        <div class="form-group mb-3">
                            <label for="address" class="form-label"> Contact Address</label>
                            <textarea class="form-control" name="address" id="address" rows="3">

                            </textarea>
                            @error('address')
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