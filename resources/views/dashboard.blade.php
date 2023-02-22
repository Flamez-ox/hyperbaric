<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->

            Hi... <b>{{Auth::user()->name}}</b>

            <button style="float: right;" type="button" class="btn btn-primary position-relative">
                Total users
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{ count($users) }}
                    <!-- <span class="visually-hidden">unread messages</span> -->
                </span>
            </button>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">S/N</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created_at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key => $user)
                        <tr>
                            <th scope="row">{{$key + 1}}</th>
                            <td>{{  $user->name }}</td>
                            <td>{{  $user->email }}</td>
                            <!-- <td>{{  $user->created_at }}</td> -->
                            <td>{{  Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
