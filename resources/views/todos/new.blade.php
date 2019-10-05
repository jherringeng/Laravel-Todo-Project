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

      <p>Priority =
        <input id = "priority-input" name="priority" type="hidden" value="secret">
        <label id = "priority-display">Medium</label>
        <button type="button" id = "high-pri-btn" class="pri-btn btn btn-danger col-sm-3 float-right opacity-50">High</button>
        <button type="button" id = "med-pri-btn" class="pri-btn btn btn-warning col-sm-3 float-right">Medium</button>
        <button type="button" id = "low-pri-btn" class="pri-btn btn btn-primary col-sm-3 float-right opacity-50">Low</button>

      </p>

    </div>


    <div class="form-group">

      <button type="submit" class="btn btn-success col-sm-1 float-right">Create</button>
      <a href="/todos" class="btn btn-danger col-sm-1 float-right">Cancel</a>

    </div>

  </form>

  <script>

    $("#high-pri-btn").click(function(){

        $(this).removeClass("opacity-50");
        $("#med-pri-btn").addClass("opacity-50");
        $("#low-pri-btn").addClass("opacity-50");

        $('#priority-input').val('High');
        $("#priority-display").text("High");

    });

    $("#med-pri-btn").click(function(){

        $(this).removeClass("opacity-50");
        $("#high-pri-btn").addClass("opacity-50");
        $("#low-pri-btn").addClass("opacity-50");

        $('#priority-input').val('Medium');
        $("#priority-display").text("Medium");

    });

    $("#low-pri-btn").click(function(){

        $(this).removeClass("opacity-50");
        $("#high-pri-btn").addClass("opacity-50");
        $("#med-pri-btn").addClass("opacity-50");

        $('#priority-input').val('Low');
        $("#priority-display").text("Low");

    });

  </script>


@endsection
