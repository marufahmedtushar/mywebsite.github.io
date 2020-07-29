@extends('layouts.master2')
@section('title','My Web | Admin | Upload Project')

@section('content')


    <div class="container my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Create New Project</h3>
                    </div>


                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="/projectupload" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}


                                    <div class="form-group">
                                        <label>Name of Project :</label>
                                        <input type="text" name="name"class="form-control" value=""  placeholder="Title of Project">
                                    </div>

                                    <div class="form-group">
                                        <label>Project Language :</label>
                                        <input type="text" name="language"class="form-control" value=""  placeholder="Language of Project">
                                    </div>




                                    <div class="form-group">
                                        <label>Desc of Project :</label>
                                        <textarea type="text" name="desc" class="form-control" placeholder="Body of Post" id="exampleFormControlTextarea1" rows="4"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Upload an image : </label>
                                        <input type="file" name="image" style="border:3px solid #CDCCE7;border-radius:10px;padding:5px;">

                                    </div>





                                    <button class="btn btn-success">Submit</button>
                                    <a href="/projects" class="btn btn-secondary">Back</a>

                                </form>


                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
