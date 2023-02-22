@extends("admin.admin_master")

@section("admin")
                    
    <div class="row">
       
        <div class="col-lg-12">
            <div class="card card-default">
                <h2 class="card-header  card-header-border-bottom"> Add Team </h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('store.team') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="title" class="form-label"> Team Position</label>
                            <input name="title" type="text" class="form-control" id="title" aria-describedby="">
                            @error('title')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Team Name</label>
                            <input name="name" type="text" class="form-control" id="name" aria-describedby="">
                            @error('name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="facebook_url" class="form-label">Team Facebook </label>
                            <input name="facebook_url" type="text" class="form-control" id="facebook_url" aria-describedby="">
                            @error('facebook_url')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="twitter_url" class="form-label">Team Twitter </label>
                            <input name="twitter_url" type="text" class="form-control" id="twitter_url" aria-describedby="">
                            @error('twitter_url')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="instagram_url" class="form-label">Team Instagram </label>
                            <input name="instagram_url" type="text" class="form-control" id="instagram_url" aria-describedby="">
                            @error('instagram_url')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="linkind_url" class="form-label">Team Linkindin </label>
                            <input name="linkind_url" type="text" class="form-control" id="linkind_url" aria-describedby="">
                            @error('linkind_url')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="team_image" class="form-label"> Team Image</label>
                            <input name="team_image" type="file" class="form-control-file" id="team_image" aria-describedby="">
                            @error('team_image')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Add Team</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection