@extends('layouts.master2')
@section('title','My Web | Admin | Edit User Roles')

@section('content')

    <div class="container my-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Edit User Roles</h3>
                    </div>


                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="/userroleupdate/{{$users->id}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}


                                    <div class="form-group">
                                        <label>Name :</label>
                                        <input type="text" name="name"class="form-control" value="{{$users->name}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Email :</label>
                                        <input type="text" name="email"class="form-control" value="{{$users->email}}">
                                    </div>




                                    <div class="form-group">
		                                <label>User Type: </label>
		                                <select class="form-control" name="usertype"  id="exampleFormControlSelect1">
		                                    <option>admin</option>
		                                    <option>user</option>
		                                    <option> </option>
		                                </select>
                                    </div>



                                    <button class="btn btn-success">Submit</button>
                                    <a href="/users" class="btn btn-secondary">Back</a>

                                </form>


                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection