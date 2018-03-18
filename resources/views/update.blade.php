<html>
<head>
        <title>Update Form</title>
</head>

    <body>
    <div class="container">
        <h1>Update form </h1>
        <form class=""  method="post" action="/onupdate/{{$users->$id}}">
            {{csrf_field()}}
            <input type="text" name="name" placeholder="enter name" required value="{{$users->name}}">
            <input type="text" name="email" value=""required placeholder="enter email"value="{{$users->email}}">
            <input type="password" name="password" value="" required placeholder="password" value="{{$users->password}}">
            <button type="submit" name="button">submit</button>
        </form>
    </div>

    </body>


</html>