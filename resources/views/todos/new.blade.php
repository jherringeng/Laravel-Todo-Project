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
      <input type="text" class="form-control" placeholder="Name" name="name">
      </p>

      <p>Description
      <textarea name="description" placeholder="Description" rows="3" class="form-control"></textarea>
      </p>

      <p>Priority
      <input type="text" class="form-control" placeholder="Priority" name="priority">
      </p>

    </div>

    <div class="form-group">

      <button type="submit" class="btn btn-success float-right">Create</button>
      <a href="/todos" class="btn btn-danger float-right">Cancel</a>

    </div>

  </form>

@endsection
