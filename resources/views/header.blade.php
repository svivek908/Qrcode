<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    @if(!empty(Session::get('email')))
<p>Hi  {{Session::get('email')}}</p>
<ul class="nav ">
  <li class="active"><a href="{{ route("home") }}">Home</a></li>
  
  <li><a href="{{ route("user_list") }}">User List</a></li>
  <li><a href="{{ route("logout") }}">Logout</a></li>
</ul>
@endif
@if(empty(Session::get('email')))

<ul class="nav ">
  <li class="active"><a href="{{ route("home") }}">Register</a></li>
  
  <li><a href="{{ route("login") }}">Login</a></li>
 
</ul>
@endif
</nav>