<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Jon's Todo App</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel='icon' href='favicon.ico' type='image/x-icon'/ >

  <style>

    body { position: relative; }

    .list-group-hidden{ display:none }

    .hidden { display: none }

    .white-margin {margin-top: 70px;}

    .modal-pic { width:100%; }

    .btn-prod { background-color: #9DC3E7; border-color: #9DC3E7; color: black; }

    :target {
      display: block;
      position: relative;
      top: -50px;
      visibility: hidden;
    }

  </style>

</head>
<body>

  <nav id="navbar-example" class="navbar fixed-top navbar-light bg-light">
      <a class="navbar-brand" href="index.php">Jon's Todo App</a>
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link" href='/todos'>View Todos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#courses">New Todo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='/about'>About</a>
        </li>
      </ul>
    </nav>

  <div class="container">
    <div class = "white-margin"></div>
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

  </div>

</body>
</html>
