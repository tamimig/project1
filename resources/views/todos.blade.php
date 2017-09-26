@extends('layout')


@section('content')


    <div class="row" id="row">

        <div class="col-lg-6 col-lg-offset-3">

        <form action="/create/todo" method="post">

                {{csrf_field()}}

            <input type="text" name="todo" class="form-control" placeholder="Create a new todo">

            </form>

        </div>
    </div>

    <br><br>
      @foreach ($todos as $todo)

                    {{$todo->todo}} 
                    <a href="{{route('todo.delete', ['id' =>$todo->id])}}" class="btn btn-danger btn-xs">x</a>

                    <a href="{{route('todo.update', ['id' =>$todo->id])}}" class="btn btn-info btn-xs">update</a>

                    @if(!$todo->completed)

                    <a href="{{route('todos.completed', ['id' =>$todo->id])}}" class="btn btn-xs btn-success"> Marke as Completed</a>

                    @else 
                    <span class="text-success">Completed</span>

                    @endif

                    <br><br>

                @endforeach



@endsection


