@extends('layout')


@section('content')


	
    <div class="row">

        <div class="col-lg-8">

        <form action="{{route('todos.save' , ['id' => $todo->id])}}" method="post">

                {{csrf_field()}}

            <input type="text" name="todo" value="{{$todo->todo}}" class="form-control" placeholder="Update todo">

            </form>

        </div>
    </div>

    
     
@endsection


