@extends('layouts.app')

@section('title')

  View Todo

@endsection

@section('content')

    <h1 class = "text-center">View Todo</h1>

    <ul class="list-group">

        <li class="list-group-item">

          Name: {{ $todo->name }}

        </li>

        <li class="list-group-item">

          {{ $todo->description }}

        </li>

        <li class="list-group-item">

          Priority: {{ $todo->priority }}

        </li>

        <li class="list-group-item">

          Completed: {{ $todo->completed }}

        </li>

        <li class="list-group-item">

          <div class = "col-sm-6 float-left">Created:   {{ $todo->created_at }} </div>
          <div class = "col-sm-6 float-left">Updated:   {{ $todo->updated_at }} </div>

        </li>

    </ul>

    <a href="/edit-todos/{{  $todo->id  }}" class="btn btn-primary col-sm-1 float-right">Edit</a>
    <a href="/todos" class="btn btn-danger col-sm-1 float-right">Back</a>

@endsection
