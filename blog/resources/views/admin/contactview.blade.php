@extends('layouts.master2')
@section('title','Admin | Contact View')

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
                            <th scope="col">Email</th>
                            <th scope="col">Massage</th>
                        </tr>
                        </thead>
                        <tbody>


                            <tr>
                                <td>{{$contact->id}}</td>
                                <td>{{$contact->name}}</td>
                                <td> {{$contact->email}}</td>
                                <td> {{$contact->msg}}</td>



                            </tr>

                        </tbody>



                    </table>

                </div>


            </div>



        </div>

    </div>

    <div class="row">


        <div class="col-12">

            <a href="/contact" class="btn btn-secondary">Back</a>

        </div>
    </div>


@endsection

