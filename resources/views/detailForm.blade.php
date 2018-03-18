<!DOCTYPE html>
<html>
<head>
        <title>Update Form</title>
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
            <h1>User Detail</h1>
        </div>

    <div>
        <h1>Update form </h1>
        <form class="" action="/goupdate/{{ $users->id }}" method="post">
            {{csrf_field()}}
            <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="enter name" required value="{{ $users->name }}">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="email" required placeholder="enter email"value="{{ $users->email }}">
            </div>
            <div class="form-group">
            <input type="password" class="form-control" name="password"  required placeholder="password" value="{{ $users->password }}">
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary" name="button">Update</button>
            </div>
        </form>
    </div>

    </body>


</html>