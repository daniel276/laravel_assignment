<!DOCTYPE html>
<html>
<head>
        <title>Update Form</title>
</head>

    <body>
    <div>
        <h1>Update form </h1>
        <form class="" action="/goupdate/{{ $users->id }}" method="post">
            {{csrf_field()}}
            <input type="text" name="name" placeholder="enter name" required value="{{ $users->name }}">
            <input type="text" name="email" required placeholder="enter email"value="{{ $users->email }}">
            <input type="password" name="password"  required placeholder="password" value="{{ $users->password }}">
            <button type="submit" name="button">Update</button>
        </form>
    </div>

    </body>


</html>