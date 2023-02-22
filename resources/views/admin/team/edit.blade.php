@extends("admin.admin_master")

@section("admin")

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> Edit Team </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('update.team', $team->id) }}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="old_image" value="{{ $team->team_image }}">

                                <div class="form-group mb-3">
                                    <label for="title" class="form-label"> Team Position</label>
                                    <input name="title" value="{{$team->title}}" type="text" class="form-control" id="title" aria-describedby="">
                                    @error('title')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                        
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Team Name</label>
                                    <input name="name" type="text" value="{{$team->name}}" class="form-control" id="name" aria-describedby="">
                                    @error('name')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="facebook_url" class="form-label">Team Facebook </label>
                                    <input name="facebook_url" value="{{$team->facebook_url}}" type="text" class="form-control" id="facebook_url" aria-describedby="">
                                    @error('facebook_url')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="twitter_url" class="form-label">Team Twitter </label>
                                    <input name="twitter_url" value="{{$team->twitter_url}}" type="text" class="form-control" id="twitter_url" aria-describedby="">
                                    @error('twitter_url')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="instagram_url" class="form-label">Team Instagram </label>
                                    <input name="instagram_url" value="{{$team->instagram_url}}" type="text" class="form-control" id="instagram_url" aria-describedby="">
                                    @error('instagram_url')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <label for="linkind_url" class="form-label">Team Linkindin </label>
                                    <input name="linkind_url" value="{{$team->linkind_url}}" type="text" class="form-control" id="linkind_url" aria-describedby="">
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
                                
                                <div class="mb-3 form-group">
                                   <img width="200" src=" {{ !empty($team->team_image) ? asset($team->team_image) : ' https://via.placeholder.com/400x40.png' }} " width="400px" height="200px" alt="">
                                </div>

                                <button type="submit" class="btn btn-primary">Update Team</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

