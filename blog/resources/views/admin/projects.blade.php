@extends('admin.master')
@section('title','Myweb | Projects')




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
                        <th scope="col">Desc</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($projects as $project)
                        <tr>
                            <th scope="row">{{$project->id}}</th>
                            <td>{{$project->name}}</td>
                            <td>{{$project->desc}}</td>
                            <td><a href="" class=" btn btn-secondary">Edit</a></td>
                            <td><a href="" class=" btn btn-danger">Delete</a></td>

                        </tr>

                    @endforeach


                    </tbody>



                </table>

            </div>


        </div>



    </div>

    </div>







@endsection
