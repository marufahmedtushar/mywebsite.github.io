@extends('layouts.master2')
@section('title','Admin | Upload Skill')

@section('content')


    <div class="container my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Create New Skill</h3>
                    </div>


                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="/skillupload" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}


                                    <div class="form-group">
                                        <label>Name of Project :</label>
                                        <input type="text" name="name"class="form-control" value=""  placeholder="Title of skill">
                                    </div>







                                    <div class="form-group">
                                        <label>Upload an image : </label>
                                        <input type="file" name="image" style="border:3px solid #CDCCE7;border-radius:10px;padding:5px;">

                                    </div>





                                    <button class="btn btn-success">Submit</button>

                                </form>


                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
