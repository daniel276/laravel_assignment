<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Exercise</title>

  </head>
  <style>
    table, th, td{
      border: 1px solid black;
    }
  </style>
  <body>
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th colspan="2">Action</th>
      </tr>
      @foreach ($users as $user )
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td><a href="/detailForm/{{ $user->id }}">Detail</a></td>
          <td><a href="/delete/{{ $user->id }}">Delete</a></td>
        </tr>
       @endforeach
    </table>
  </body>
</html>
