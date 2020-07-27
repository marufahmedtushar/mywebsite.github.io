@extends('admin.master')
@section('title','Admin | Skills')


@section('header','My Skills')
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
        <div class="col-md-2">
            <a href="/uploadskill" class=" btn btn-primary mb-3">Upload  A New Skill</a>
        </div>

        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Skill Name</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($skills as $skill)
                            <tr>
                                <input type="hidden" class="delete" value="{{$skill->id}}">
                                <th scope="row">{{$skill->id}}</th>
                                <td>{{$skill->name}}</td>
                                <td><a href="" class=" btn btn-secondary">Edit</a></td>
                                <td>

                                                    <form action="/skilldelete/{{$skill->id}}" method="POST">
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

{{--@section('scripts')--}}

{{--    <script>--}}
{{--        $(document).ready(function () {--}}

{{--            function showModal(delete_id){--}}
{{--                $('#deletebtn .delete_id').html(delete_id);--}}
{{--                $('#deletebtn').modal('show')--}}
{{--            }--}}

{{--            $( '.deletebtn' ).click(function() {--}}




{{--                var delete_id = $(this).closest('tr').find('.delete').val();--}}

{{--                showModal(delete_id);--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}





{{--@endsection--}}
