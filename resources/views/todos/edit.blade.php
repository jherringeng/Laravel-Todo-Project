@extends('layouts.app')

@section('title')

  Edit Todo

@endsection

@section('content')

  <h1 class = "text-center">Edit Todo</h1>

  @if($errors->any())

    <div class="alert alert-danger">

      <ul class="list-group">

      @foreach($errors->all() as $error)

        <li>

          {{ $error }}

        </li>

      @endforeach

    </ul>

    </div>

  @endif

  <form action="/store-edited-todos/{{ $todo->id }}">

    @csrf

    <div class="form-group">

      <p>Name
        <input type="text" class="form-control" value="{{ $todo->name }}" name="name"></input>
      </p>

      <p>Description
        <textarea class="form-control" rows="3" name="description">{{ $todo->description }}</textarea>
      </p>

      @include('components.priority-buttons')

    </div>

    <div class="form-group">

      <button type="submit" class="btn btn-success col-sm-1 float-right">Edit</button>
      <a href="/todos" class="btn btn-danger col-sm-1 float-right">Cancel</a>

    </div>

  </form>

  @include('components.priority-buttons-js')

@endsection
