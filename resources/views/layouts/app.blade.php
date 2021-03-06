<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>

    @yield('title')

  </title>

  <link rel="shortcut icon" href="{{ asset('public/favicon-16x16.png') }}">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11./jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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

    .opacity-50 {
      opacity: 0.5; }

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
          <a class="nav-link" href="/new-todos">New Todo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='/about'>About</a>
        </li>
      </ul>
    </nav>

  <div class="container">
    <div class = "white-margin"></div>

    @yield('content')

  </div>

</body>
</html>
