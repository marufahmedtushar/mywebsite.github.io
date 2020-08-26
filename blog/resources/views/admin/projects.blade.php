@extends('admin.master')
@section('title','My Web | Admin | Projects')




@section('header','My Projects')
@section('content')

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


    <div class="row">
        <div class="col-md-2">
            <a href="/uploadproject" class=" btn btn-primary mb-3">Upload  A New Project</a>
        </div>

    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($projects as $project)
                        <tr>
                            <th scope="row">{{$project->id}}</th>
                            <td>{{$project->name}}</td>
                            <td><a href="/project/{{$project->id}}/edit" class=" btn btn-secondary">Edit</a></td>
                            <td>
                                <form action="/projectdelete/{{$project->id}}" method="POST">
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
                                 {{$projects->links()}}

                </div>

            </div>


        </div>



    </div>

    </div>







@endsection
