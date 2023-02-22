@extends("admin.admin_master")

@section("admin")
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"> Edit Slider </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('update.logo') }}" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ $logo->id}}">
                                <div class="mb-3">
                                    <label for="title" class="form-label"> Company Name</label>
                                    <input 
                                        name="title" 
                                        type="text" 
                                        class="form-control" 
                                        id="title" 
                                        aria-describedby=""
                                        value='{{ $logo->title }}'
                                        >
                                    @error('title')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="video_url" class="form-label"> Video Url</label>
                                    <input 
                                        name="video_url" 
                                        type="text" 
                                        class="form-control" 
                                        id="video_url" 
                                        aria-describedby=""
                                        value='{{ $logo->video_url }}'
                                        >
                                    @error('video_url')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="logo_image" class="form-label"> Company Logo</label>
                                    <input 
                                        name="logo_image" 
                                        type="file" 
                                        class="form-control" 
                                        id="logo_image" 
                                        aria-describedby=""
                                        value='{{ $logo->logo_image }}'
                                        >
                                    @error('logo_image')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                
                                <div class="mb-3 form-group">
                                   <img id="show_logo" src=" {{ !empty($logo->logo_image) ? asset($logo->logo_image) : ' https://via.placeholder.com/163x53.png' }} " width="163px" height="53px" alt="">
                                </div>

                            
                                <button type="submit" class="btn btn-primary">Update Logo</button>

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

            $('#logo_image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    // where to show image 
                    $("#show_logo").attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0'])
            })
        })
    </script>
@endsection

