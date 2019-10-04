@extends('layouts.app')

@section('title')

  View Todos

@endsection

@section('content')

    <h1 class = "text-center">View Todos</h1>

    <ul class="list-group">

      @foreach($todos as $todo)

        <li class="list-group-item">

          {{ $todo->name }}

          <button type="button" data-toggle="collapse" data-target="#see-todo-desc-{{ $todo->id }}" class="btn btn-primary sm float-right seeMore">Details</button>
          <a href="/todos/{{  $todo->id  }}" class="btn btn-primary sm float-right">View</a>
          <a href="/edit-todos/{{  $todo->id  }}" class="btn btn-primary sm float-right">Edit</a>

          <ul class="list-group">
              <li class="list-group-item collapse" id = "see-todo-desc-{{ $todo->id }}">{{ $todo->description }}</li>
          </ul>

        </li>

      @endforeach

    </ul>

@endsection
