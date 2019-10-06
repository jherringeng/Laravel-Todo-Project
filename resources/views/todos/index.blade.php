@extends('layouts.app')

@section('title')

  View Todos

@endsection

@section('content')

    <h1 class = "text-center">View Todos</h1>

    <div class="col-sm-12">
      <a class="btn btn-primary" href="/new-todos">New Todo</a>
    </div>

    <div>
    <ul class="list-group">

      @foreach($todos as $todo)

        <li class="list-group-item">

          {{ $todo->name }}

          <a href="/delete-todos/{{  $todo->id  }}" class="btn btn-danger sm float-right">Delete</a>
          <a href="/edit-todos/{{  $todo->id  }}" class="btn btn-warning sm float-right">Edit</a>
          <a href="/todos/{{  $todo->id  }}" class="btn btn-success sm float-right">View</a>
          <button type="button" data-toggle="collapse" data-target="#see-todo-desc-{{ $todo->id }}" class="btn btn-primary sm float-right seeMore">Details</button>

          <ul class="list-group">
              <li class="list-group-item collapse" id = "see-todo-desc-{{ $todo->id }}">{{ $todo->description }}</li>
          </ul>

        </li>

      @endforeach

    </ul>
  </div>

@endsection
