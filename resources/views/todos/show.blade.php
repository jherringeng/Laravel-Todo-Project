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

          <div class = "col-sm-2 float-left" > Priority: {{ $todo->priority }} </div>
          <div id = "priority-status" class = "col-sm-4 float-left btn btn-primary" >{{ $todo->priority }}</div>
          <div class = "col-sm-2 float-left" > Status:
            <label id = "status-display">Incomplete</label>
          </div>
          <div id = "complete-status" class = "col-sm-4 float-left btn" ></div>

        </li>

        <li class="list-group-item">

          <div class = "col-sm-2 float-left">Created:</div>
          <div class = "col-sm-4 float-left">{{ $todo->created_at }}</div>
          <div class = "col-sm-2 float-left">Updated:</div>
          <div class = "col-sm-4 float-left">{{ $todo->updated_at }} </div>

        </li>

    </ul>

    <button type="button" class="btn btn-danger col-sm-1 float-right" data-toggle="modal" data-target="#deleteModal" data-name="{{ $todo->name }}" data-link="/delete-todos/{{  $todo->id  }}">
      Delete
    </button>
    <a href="/edit-todos/{{  $todo->id  }}" class="btn btn-warning col-sm-1 float-right">Edit</a>
    <a href="/todos" class="btn btn-success col-sm-1 float-right">Back</a>


    <script>

    $(document).ready(function() {
          var priorityStatus = "{{ $todo->priority }}";
          if (priorityStatus == "Low") {
              $("#priority-status").addClass("btn-primary");
          } else if (priorityStatus == "Medium") {
              $("#priority-status").addClass("btn-warning");
          } else if (priorityStatus == "High") {
              $("#priority-status").addClass("btn-danger");
          }
        });

      $(document).ready(function() {
            var completedStatus = "{{ $todo->completed }}";
            if(completedStatus == 0){
                $("#status-display").text("Incomplete");
                $("#complete-status").addClass("btn-warning");
                $("#complete-status").text("Incomplete")
            } else {
                $("#status-display").text("Completed");
                $("#complete-status").addClass("btn-primary");
                $("#complete-status").text("Completed")
            }
          });

    </script>

    @include('components.delete-modal')

@endsection
