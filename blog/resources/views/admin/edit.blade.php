@extends('layouts.master2')
@section('title','My Web | Admin | Edit Project')


@section('header','Edit Project')
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
                                <center class="m-t-30"> <img src="/storage/cover_images/{{$project->image}}"  width="150" />
                                </center>
                            </div>
                            
                            
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form action="/update/{{$project->id}}" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}


                                    <div class="form-group">
                                        <label>Name of Project :</label>
                                        <input type="text" name="name"class="form-control" value="{{$project->name}}"  placeholder="Title of Project">
                                    </div>

                                    <div class="form-group">
                                        <label>Project Language :</label>
                                        <input type="text" name="language"class="form-control" value="{{$project->project_language}}"  placeholder="Language of Project">
                                    </div>




                                    <div class="form-group">
                                        <label>Desc of Project :</label>
                                        <input type="text" name="desc"class="form-control" value="{{$project->desc}}"  placeholder="Description of Project">
                                    </div>

                                    <div class="form-group">
                                        <label>Upload an image : </label>
                                        <input type="file" name="image" value="{{$project->image}}" style="border:3px solid #CDCCE7;border-radius:10px;padding:5px;">

                                    </div>





                                    <button class="btn btn-success">Submit</button>
                                    <a href="/projects" class="btn btn-secondary">Back</a>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>

@endsection
