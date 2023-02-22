@extends("admin.admin_master")

@section("admin")


<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Change Password</h2>
    </div>

    <div>
        @if(session("error"))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session("error") }}!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    <div class="card-body">

        <form method="POST" action="{{ route('password.update') }}" class="form-pill">
            @csrf
            <div class="form-group">
                <label for="current_password">Current Password</label>
                <input 
                    id="current_password"
                    name="oldpassword"
                    type="password" 
                    class="form-control" 
                    placeholder="Enter Current Password">

                @error("current_password")
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">New Password</label>
                <input 
                    type="password" 
                    class="form-control" 
                    id="password" 
                    name="password"
                    placeholder="Enter New Password">
                @error("password")
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Passwor</label>
                <input 
                    type="password" 
                    class="form-control" 
                    id="password_confirmation" 
                    name="password_confirmation"
                    placeholder="Enter Confirm Password">

                @error("password")
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
           
            <div class="form-footer pt-5 border-top">
                <button type="submit" class="btn btn-primary btn-default">Save</button>
            </div>
        </form>
    </div>
</div>

@endsection