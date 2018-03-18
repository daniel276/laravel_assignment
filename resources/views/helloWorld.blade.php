<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello World</title>
  </head>
  <body>
    <div class="">
      <p>This is a hello world</p>
      <form class=""  method="post" action="/register">
        {{csrf_field()}}
        <input type="text" name="name" placeholder="enter name" required value="">
        <input type="text" name="email" value=""required placeholder="enter email">
        <input type="password" name="password" value="" required placeholder="password">
        <button type="submit" name="button">submit</button>
      </form>
    </div>
  </body>
</html>
