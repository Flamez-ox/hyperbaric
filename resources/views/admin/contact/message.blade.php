@extends("admin.admin_master")

@section("admin")
 
    <div class="row">
       
        <div class="col-lg-12">
            <div class="card card-default">
                
                <h2 class="card-header  card-header-border-bottom">
                    All Messages 
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
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Messgae</th>
                                    <th scope="col">Created_at</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $key => $item)
                                <tr>
                                    <th scope="row">{{ $messages->firstItem() + $loop->index }}</th>
                                   
                                    <td>{{  $item->name }}</td>
                                    <td>{{  $item->email }}</td>
                                    <td>{{  $item->subject }}</td>
                                    <td>{{  $item->message }}</td>
                                   
                                    <td> 
                                        @if($item->created_at == NULL) 
                                            <span>No Date Set</span>
                                        @else
                                            {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                        @endif
                                    </td>

                                    <td>

                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-recent-order2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order2">
                                            <li class="dropdown-item">
                                                <a href="{{ route('delete.message', $item->id) }}">Delete</a>
                                            </li>
                                            </ul>
                                        </div>

                                    </td>
                                </tr>
                                @endforeach
                                    
                            </tbody>
                        </table>

                        {{ $messages->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection