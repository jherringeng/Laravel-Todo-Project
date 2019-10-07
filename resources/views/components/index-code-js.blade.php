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
