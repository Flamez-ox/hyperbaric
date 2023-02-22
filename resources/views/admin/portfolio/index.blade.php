@extends("admin.admin_master")

@section("admin")
 
    <div class="row">
       
        <div class="col-lg-12">
            <div class="card card-default">
                
                <h2 class="card-header  card-header-border-bottom">
                    All Portfolio &nbsp; <span style="color: red;">|</span> &nbsp; <a class="float-right" href="{{ route('create.portfolio') }}">Add item</a>
                </h2>
               
                <div>
                    @if(session("success"))

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session("success") }}!</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    @endif
                   
                </div>

                <div class="card-body">
                    <div class="table-responsive-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Client</th>
                                    <th scope="col">Project Url</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Created_at</th>
                                    <th scope="col">Updated_at</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($portfolios as $key => $item)
                                <tr>
                                    <th scope="row">{{ $portfolios->firstItem() + $loop->index }}</th>
                                   
                                    <td>
                                        @foreach ($item->images as $img)
                                            <img 
                                                src="{{ asset($img->url) }}" 
                                                width="70px"
                                                height="40px"
                                                alt="brand"
                                            >
                                        @endforeach
                                    </td>
                                    
                                    <td>{{  $item->title }}</td>
                                    <td>{{  $item->client }}</td>
                                    <td>{{  $item->project_url }}</td>
                                    <td>{!! Str::limit($item->description, 30) !!}</td>
                                    
                                    
                                    <td> 
                                        @if($item->created_at == NULL) 
                                            <span>No Date Set</span>
                                        @else
                                            {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                        @endif
                                    </td>

                                    <td> 
                                        @if($item->updated_at == NULL) 
                                            <span>No Date Set</span>
                                        @else
                                            {{ Carbon\Carbon::parse($item->updated_at)->diffForHumans() }}
                                        @endif
                                    </td>
                                    <td>

                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order2">
                                            <li class="dropdown-item">
                                                <a href="{{ route('edit.portfolio', $item->id) }}">Edit</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="{{ route('destroy.portfolio', $item->id) }}">Delete</a>
                                            </li>
                                            </ul>
                                        </div>

                                    </td>
                                </tr>
                                @endforeach
                                    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection