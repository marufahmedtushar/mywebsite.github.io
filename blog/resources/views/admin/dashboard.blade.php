@extends('admin.master')
@section('title','My Web | Admin | Dashboard')


@section('content')



    <div class="row justify-content-center">
        <div class="col-md-4 ">
            <div class="card-body jumbotron" >
                <h3 class="card-title text-center">Total Projects </h3>
                <h3 class="card-title text-center">{{$totalproject}}</h3>
            </div>
        </div>

        <div class="col-md-4 ">
            <div class="card-body jumbotron" >
                <h3 class="card-title text-center">My Skills </h3>
                <h3 class="card-title text-center">{{$totalskill}}</h3>
            </div>
        </div>

        <div class="col-md-4 ">
            <div class="card-body jumbotron" >
                <h3 class="card-title text-center">People's </h3>
                <h3 class="card-title text-center">{{$totalcontact}}</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 ">
            <div class="card-body jumbotron" >
                <h3 class="card-title text-center">Total Users </h3>
                <h3 class="card-title text-center">{{$totaluser}}</h3>
            </div>
        </div>
    </div>







@endsection
