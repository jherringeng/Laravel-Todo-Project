@extends('layouts.app')

@section('title')

  View Todos

@endsection

@section('content')

    <h1 class = "text-center">View Todos</h1>

    <div class="col-sm-12">
      <a class="btn btn-primary mb-2" href="/new-todos">New Todo</a>

      <div class="btn-group mb-2">
        <button type="button" class="btn btn-danger">View</button>
        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="/todos">All</a>
          <a class="dropdown-item" href="/todos/incomplete">Incomplete</a>
          <a class="dropdown-item" href="/todos/complete">Complete</a>
        </div>
      </div>

    </div>

    <div>
    <ul class="list-group">

      @if ($todos->isEmpty())

        <p>You do not have any Todos. Create your first here: <a class="btn btn-primary mb-2" href="/new-todos">New Todo</a></p>

      @else

          @foreach($todos as $todo)

            <li class="list-group-item">

              {{ $todo->name }}

              <button type="button" class="btn btn-danger sm ml-1 float-right" data-toggle="modal" data-target="#deleteModal" data-name="{{ $todo->name }}" data-link="/delete-todos/{{  $todo->id  }}">
                Delete
              </button>

              <a href="/edit-todos/{{  $todo->id  }}" class="btn btn-warning sm ml-1 float-right">Edit</a>
              <a href="/todos/{{  $todo->id  }}" class="btn btn-success sm ml-1 float-right">View</a>
              <button type="button" data-toggle="collapse" data-target="#see-todo-desc-{{ $todo->id }}" class="btn btn-primary sm ml-1 float-right seeMore">Details</button>
              <div id="priority-status-{{ $todo->id }}" class="btn col-sm-1 ml-1 mr-4 float-right">Unknown</div>
              <div class="btn col-sm-1 ml-1 float-right">Status:</div>

              @include('components.index-code-js')

              <ul class="list-group">
                  <li class="list-group-item collapse" id = "see-todo-desc-{{ $todo->id }}">{{ $todo->description }}</li>
              </ul>

            </li>

          @endforeach

      @endif

    </ul>
  </div>

  @include('components.delete-modal')

@endsection
