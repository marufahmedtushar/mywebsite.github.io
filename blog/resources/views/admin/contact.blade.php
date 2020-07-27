@extends('admin.master')
@section('title','Myweb | Contacts')




@section('header','Contacts')
@section('content')



    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">View</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($contacts as $contact)
                            <tr>
                                <th scope="row">{{$contact->id}}</th>
                                <td>{{$contact->name}}</td>
                                <td><a href="/contact/{{$contact->id}}" class=" btn btn-secondary">View</a></td>
                                <td>
                                    <form action="" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button class="btn btn-danger">Delete </button>
                                    </form>

                                </td>

                            </tr>

                        @endforeach


                        </tbody>



                    </table>

                </div>


            </div>



        </div>

    </div>







@endsection

