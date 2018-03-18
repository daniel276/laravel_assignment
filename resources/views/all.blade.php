<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Exercise</title>
  </head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="navbar-header">
      <a href="#" class="navbar-brand">Hello</a>
    </div>

    <div class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/helloWorld">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/all">List</a>
      </li>
    </div>
  </nav>

  <div class="container">
    <div class="jumbotron">
      <h1>Table of users!</h1>
    </div>
    <div class="container">
    <table class="table">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th colspan="2">Action</th>
      </tr>
      @foreach ($users as $user )
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td><a href="/detailForm/{{ $user->id }}"><button type="button" class="btn btn-success">Detail</button></a></td>
          <td><a href="/delete/{{ $user->id }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
        </tr>
       @endforeach
    </table>
    </div>
  </body>
</html>
