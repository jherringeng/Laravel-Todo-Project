@extends('layouts.app')

@section('title')

  New Todo

@endsection

@section('content')

  <h1 class = "text-center">New Todo</h1>

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

  <form action="/store-todos" method="POST">

    @csrf

    <div class="form-group">

      <p>Name
        <input type="text" class="form-control" value="{{ $todo->name }}" name="name"></input>
      </p>

      <p>Description
        <textarea class="form-control" rows="3" name="description">{{ $todo->description }}</textarea>
      </p>

      <p>Priority
        <input type="text" class="form-control" value="{{ $todo->priority }}" name="priority"></input>
      </p>

    </div>

    <div class="form-group">

      <button type="submit" class="btn btn-success float-right">Edit</button>
      <a href="/todos" class="btn btn-danger float-right">Cancel</a>

    </div>

  </form>

@endsection
