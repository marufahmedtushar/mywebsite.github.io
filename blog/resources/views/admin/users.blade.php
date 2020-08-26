@extends('admin.master')
@section('title','My Web | Admin | Users')





    @section('header','List of Users')



@section('content')

    <div class="col-12">
        <div class="card">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th> Name</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td><a class="btn btn-success" href="/userroleview/{{$user->id}}">View Details</a></td>
                        <td><a class="btn btn-secondary" href="/userroleedit/{{$user->id}}">Edit</a></td>
                        <td><form action="/userdelete/{{$user->id}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="btn btn-danger">Delete </button>
                            </form>
                        </td>
                    </tr>

                    @endforeach


                    </tbody>
                </table>
                <div class="container">
                                 {{$users->links()}}

                </div>
            </div>
        </div>
    </div>

@endsection
