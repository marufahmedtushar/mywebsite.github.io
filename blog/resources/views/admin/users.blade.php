@extends('admin.master')
@section('title','My Web | Admin | Users')





    @section('header','List of Users')



@section('content')

    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col"> Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">User Type</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->usertype}}</td>
                    </tr>

                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
