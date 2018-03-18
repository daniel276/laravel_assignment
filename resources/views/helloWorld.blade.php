<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello World</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
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
        <h1>Input data below please</h1>
    </div>
      <div class="container">

        <form class=""  method="post" action="/register">
          {{csrf_field()}}
          <div class="form-group">
          <input type="text" class="form-control" name="name" placeholder="enter name" required value="">
          </div>
          <div class="form-group">
          <input type="text" class="form-control" name="email" value=""required placeholder="enter email">
          </div>
          <div class="form-group">
          <input type="password" class="form-control" name="password" value="" required placeholder="password">
          </div>
          <div class="form-group">
          <button type="submit" class="btn btn-primary" name="button">submit</button>
          </div>
        </form>
      </div>
    </div>

  </body>
</html>
