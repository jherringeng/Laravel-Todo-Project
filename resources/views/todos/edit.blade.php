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

      <p>Status =
        <input id = "status-input" name="completed" type="hidden" value="{{ $todo->completed }}">
        <label id = "status-display">Incomplete</label>
        <button type="button" id = "status-complete-btn" class="pri-btn btn btn-primary col-sm-3 float-right">Completed</button>
        <button type="button" id = "status-incomplete-btn" class="pri-btn btn btn-warning col-sm-3 float-right">Not Completed</button>
      </p>

    </div>

    <div class="form-group">

      <button type="submit" class="btn btn-success col-sm-1 float-right">Edit</button>
      <a href="/todos" class="btn btn-danger col-sm-1 float-right">Cancel</a>

    </div>

  </form>

  @include('components.priority-buttons-js')

  <script>

  // Function to set priority buttons and flags on document ready
  $(document).ready(function() {

      $('#priority-input').val("{{ $todo->priority }}");
      $("#priority-display").text("{{ $todo->priority }}");

        var priorityStatus = "{{ $todo->priority }}";

        if(priorityStatus == "Low"){

            $("#med-pri-btn").addClass("opacity-50");
            $("#high-pri-btn").addClass("opacity-50");

        } else if (priorityStatus == "Medium"){

            $("#low-pri-btn").addClass("opacity-50");
            $("#high-pri-btn").addClass("opacity-50");

        } else if (priorityStatus == "High"){

            $("#low-pri-btn").addClass("opacity-50");
            $("#med-pri-btn").addClass("opacity-50");

        }

        else {

            $("#low-pri-btn").addClass("opacity-50");
            $("#med-pri-btn").addClass("opacity-50");
            $("#high-pri-btn").addClass("opacity-50");

        }
      });

    // Function to set completed buttons and flags on document ready
    $(document).ready(function() {
          var completedStatus = "{{ $todo->completed }}";
          if(completedStatus == 0){
              $("#status-display").text("Incomplete");
              $("#status-complete-btn").addClass("opacity-50");
          } else {
              $("#status-display").text("Completed");
              $("#status-incomplete-btn").addClass("opacity-50");
          }
        });

    // Functions to set and interact with Completed buttons
    $("#status-complete-btn").click(function(){

        $(this).removeClass("opacity-50");
        $("#status-incomplete-btn").addClass("opacity-50");

        $('#status-input').val('1');
        $("#status-display").text("Completed");

    });

    $("#status-incomplete-btn").click(function(){

        $(this).removeClass("opacity-50");
        $("#status-complete-btn").addClass("opacity-50");

        $('#status-input').val('0');
        $("#status-display").text("Incomplete");

    });

  </script>

@endsection
