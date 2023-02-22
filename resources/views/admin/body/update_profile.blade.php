@extends("admin.admin_master")

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
@section("admin")

    <div class="bg-white border rounded">
        <div class="row no-gutters">
            <div class="col-lg-4 col-xl-3">
                <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                    <div class="card text-center widget-profile px-0 border-0">
                        <div class="card-img mx-auto rounded-circle">
                            <img width="100" height="100" src="{{ Auth::user()->profile_photo_url }} " alt="user image">
                        </div>
                        <div class="card-body">
                            <h4 class="py-2 text-dark">{{Auth::user()->name}}</h4>
                            <!-- <p>Albrecht.straub@gmail.com</p>
                            <a class="btn btn-primary btn-pill btn-lg my-4" href="#">Follow</a> -->
                        </div>
                    </div> 
                    <!-- <div class="d-flex justify-content-between ">
                        <div class="text-center pb-4">
                            <h6 class="text-dark pb-2">1503</h6>
                            <p>Friends</p>
                        </div>
                        <div class="text-center pb-4">
                            <h6 class="text-dark pb-2">2905</h6>
                            <p>Followers</p>
                        </div>
                        <div class="text-center pb-4">
                            <h6 class="text-dark pb-2">1200</h6>
                            <p>Following</p>
                        </div>
                    </div> -->
                    <hr class="w-100">
                    <div class="contact-info pt-4">
                        <h5 class="text-dark mb-1">Contact Information</h5>
                        <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
                        <p>{{Auth::user()->email}}</p>
                        <!-- <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                        <p>+99 9539 2641 31</p>
                        <p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
                        <p>Nov 15, 1990</p> -->
                        <!-- <p class="text-dark font-weight-medium pt-4 mb-2">Social Profile</p> -->
                        <!-- <p class="pb-3 social-button">
                            <a href="#" class="mb-1 btn btn-outline btn-twitter rounded-circle">
                                <i class="mdi mdi-twitter"></i>
                            </a>
                            <a href="#" class="mb-1 btn btn-outline btn-linkedin rounded-circle">
                                <i class="mdi mdi-linkedin"></i>
                            </a>
                            <a href="#" class="mb-1 btn btn-outline btn-facebook rounded-circle">
                                <i class="mdi mdi-facebook"></i>
                            </a>
                            <a href="#" class="mb-1 btn btn-outline btn-skype rounded-circle">
                                <i class="mdi mdi-skype"></i>
                            </a>
                        </p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-9">
                <div class="profile-content-right py-5">
                    <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="timeline-tab" data-toggle="tab" href="#timeline" role="tab" aria-controls="timeline" aria-selected="true">User Profile Update</a>
                        </li>
                    </ul>
                    <br>
                    <div>
                        @if(session("success"))
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <strong>{{ session("success") }}!</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </div>


                    <div class="tab-content px-3 px-xl-5" id="myTabContent">
                        <div class="card-body">
                            <form action="{{ route('user.update.profile') }}" method="POST" enctype="multipart/form-data" class="">
                                @csrf

                                
                                <input type="hidden" name="old_image" value="{{ $user->profile_photo_url }}">
                                <div class="form-group">
                                    <label for="name">User Name</label>
                                    <input 
                                        id="name"
                                        name="name"
                                        value="{{ $user->name}}"
                                        type="text" 
                                        class="form-control" 
                                        >

                                    @error("name")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">User Email</label>
                                    <input 
                                        id="email"
                                        name="email"
                                        value="{{ $user->email}}"
                                        type="email" 
                                        class="form-control" 
                                        >

                                    @error("email")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- <div class="form-group">
                                    <label for="profile_photo_url">User Image</label>
                                    <input 
                                        id="profile_photo_url"
                                        name="profile_photo_url"
                                        type="file" 
                                        class="form-control" 
                                        >

                                    @error("name")
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="">
                                    <img
                                        id="showImage" 
                                        src="{{ $user->profile_photo_path }} " 
                                        width="200" height="100" alt="user image">
                                </div> -->
                               
                            
                                <div class="form-footer pt-5 border-top">
                                    <button type="submit" class="btn btn-primary btn-default">Update Profile</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            //get where the image is commin from 

            $('#profile_photo_url').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    // where to show image 
                    $("#showImage").attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0'])
            })
        })
    </script>

@endsection