@extends("admin.admin_master")

@section("admin")

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> Edit About </div>

                        <div class="card-body">
                        <form method="POST" action="{{ route('update.contact', $contact->id) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-3">
                                <label for="email" class="form-label"> Contact Email</label>
                                <input name="email" value="{{ $contact->email }}" type="text" class="form-control" id="email" aria-describedby="">
                                @error('email')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="phone" class="form-label"> Contact Phone</label>
                                <input name="phone" value="{{ $contact->phone }}" type="text" class="form-control" id="phone" aria-describedby="">
                                @error('phone')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group mb-3">
                                <label for="address" class="form-label"> Contact Address</label>
                                <textarea class="form-control" name="address" id="address" rows="3">
                                    {{ $contact->address }}
                                </textarea>
                                @error('address')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        
                            <button type="submit" class="btn btn-primary">Update Contact</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

