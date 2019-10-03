@extends('layouts.app')

@section('title')

  New Todo

@endsection

@section('content')

  <form action="">

    <div class="form-group">

      <input type="text" class="form-control" placeholder="Name" name="name">

      <textarea name="description" placeholder="Description" class="form-control"></textarea>

    </div>

  </form>

@endsection
