<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html">
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('css/style.css')}}" type="text/css">
    <title>Laravel Practice</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Laravel Practice</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/create') }}">Create</a>
      </li>
    </ul>
  </div>
</nav>