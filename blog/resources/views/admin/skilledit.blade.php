@extends('layouts.master2')
@section('title','My Web | Admin | Edit Skill')



@section('header','Edit Skill')
@section('content')


    


    <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            
                            <div class="card-body">
                                <center class="m-t-30"> <img src="/storage/cover_images/{{$skill->image}}"  width="150" />
                                </center>
                            </div>
                            
                            
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form action="/updateskill/{{$skill->id}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}


                                    <div class="form-group">
                                        <label>Name of Skill :</label>
                                        <input type="text" name="name"class="form-control" value="{{$skill->name}}"  placeholder="Title of Project">
                                    </div>

                                    <div class="form-group">
                                        <label>Upload an image : </label>
                                        <input type="file" name="image" value="{{$skill->image}}" style="border:3px solid #CDCCE7;border-radius:10px;padding:5px;">

                                    </div>





                                    <button class="btn btn-success">Submit</button>
                                    <a href="/skills" class="btn btn-secondary">Back</a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>

@endsection
