@extends('admin.master')
@section('title','My Web | Admin | Contacts')




@section('header','Contacts')
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
                                    <form action="/contactdelete/{{$contact->id}}" method="POST">
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
                                 {{$contacts->links()}}

                </div>

                </div>


            </div>



        </div>

    </div>







@endsection

