@extends("admin.admin_master")

@section("admin")

    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        @if(session("success"))

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ session("success") }}!</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                        @endif
                        <div class="card-header"> All Category </div>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Name</th>
                                <th scope="col">User</th>
                                <th scope="col">Created_at</th>
                                <th scope="col">Updated_at</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $key => $category)
                                <tr>
                                    <!-- <th scope="row">{{$key + 1}}</th> -->
                                    <th scope="row">{{ $categories->firstItem() + $loop->index }}</th>
                                    <td>{{  $category->category_name }}</td>
                                    <td>{{  $category->user_name }}</td><!-- // usind eloquent orm for onetoone relationship -->

                                    
                                    <!-- <td>{{  $category->name }}</td> // usind queiry builder for onetoone relationship -->
                                    <td> 
                                        @if($category->created_at == NULL) 
                                            <span>No Date Set</span>
                                        @else
                                            {{ Carbon\Carbon::parse($category->created_at)->diffForHumans() }}
                                        @endif
                                    </td>

                                    <td> 
                                        @if($category->updated_at == NULL) 
                                            <span>No Date Set</span>
                                        @else
                                            {{ Carbon\Carbon::parse($category->updated_at)->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('edit.category', $category->id) }}">Edit</a></li>
                                                <li><a class="dropdown-item" href="{{ route('softdelete.category', $category->id) }}">Trash</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>

                        {{ $categories->links() }}
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header"> Add Category </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('store.category') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="category_name" class="form-label"> Category Name</label>
                                    <input name="category_name" type="text" class="form-control" id="category_name" aria-describedby="">
                                    @error('category_name')
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
        </div>


        <!-- Trash part  -->

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                       
                        <div class="card-header"> Trash List </div>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Name</th>
                                <th scope="col">User</th>
                                <th scope="col">Created_at</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($thrashCats as $key => $category)
                                <tr>
                                    <!-- <th scope="row">{{$key + 1}}</th> -->
                                    <th scope="row">{{ $categories->firstItem() + $loop->index }}</th>
                                    <td>{{  $category->category_name }}</td>
                                    <td>{{  $category->user_name }}</td><!-- // usind eloquent orm for onetoone relationship -->

                                    
                                    <!-- <td>{{  $category->name }}</td> // usind queiry builder for onetoone relationship -->
                                    <td> 
                                        @if($category->created_at == NULL) 
                                            <span>No Date Set</span>
                                        @else
                                            {{ Carbon\Carbon::parse($category->created_at)->diffForHumans() }}
                                        @endif
                                    </td>
                                   
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                Action
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('restore.category', $category->id) }}">Restore</a></li>
                                                <li><a class="dropdown-item" href="{{ route('destroy.category', $category->id) }}">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>

                        {{ $thrashCats->links() }}
                    </div>
                </div>

                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </div>
    @endsection