@extends('admin.master')
@section('title','Admin | Edit Project')

@section('content')


    <div class="container my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Edit Project</h3>
                    </div>


                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="/projectedit/{{$project->id}}" method="POST" enctype="multipart/form-data">
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
                                        <textarea type="text" name="desc" class="form-control" value ="{{$project->desc}}" placeholder="Body of Post" id="exampleFormControlTextarea1" rows="4"></textarea>
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
