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

          Created: {{ $todo->created_at }}      Updated: {{ $todo->updated_at }}

        </li>

    </ul>

@endsection
