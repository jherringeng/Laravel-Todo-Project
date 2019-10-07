@extends('layouts.app')

@section('title')

  View Todos

@endsection

@section('content')

    <h1 class = "text-center">View Todos</h1>

    <div class="col-sm-12">
      <a class="btn btn-primary" href="/new-todos">New Todo</a>

      <div class="btn-group">
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
          <script>

            var statusComplete = "{{ $todo->completed }}";
            var statusPriority = "{{ $todo->priority }}";

            if (statusComplete == 1) {

              $("#priority-status-{{ $todo->id }}").text("Complete");
              $("#priority-status-{{ $todo->id }}").addClass("btn-primary");

            } else if ((statusPriority == "Low")){

              $("#priority-status-{{ $todo->id }}").text("Low");
              $("#priority-status-{{ $todo->id }}").addClass("btn-success");

            } else if ((statusPriority == "Medium")){

              $("#priority-status-{{ $todo->id }}").text("Medium");
              $("#priority-status-{{ $todo->id }}").addClass("btn-warning");

            } else if ((statusPriority == "High")){

              $("#priority-status-{{ $todo->id }}").text("High");
              $("#priority-status-{{ $todo->id }}").addClass("btn-danger");

            }

          </script>

          <ul class="list-group">
              <li class="list-group-item collapse" id = "see-todo-desc-{{ $todo->id }}">{{ $todo->description }}</li>
          </ul>

        </li>

      @endforeach

    </ul>
  </div>

    <!-- Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Delete Todo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="deleteTodoText">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <a id = "deleteTodoLink" class="btn btn-primary" href = "https://www.jherring.tk/2019/07/20/project-control/">Delete</a>
        </div>
      </div>
    </div>
  </div>

  <script>

    $('#deleteModal').on('show.bs.modal', function (event) {

          var button = $(event.relatedTarget);
          var name = button.data('name');
          var link = button.data('link');
          var modal = $(this)
          modal.find('#deleteTodoText').html(name);
          $("#deleteTodoLink").attr("href", link);

        });

    </script>

@endsection
