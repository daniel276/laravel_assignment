<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel Exercise</title>

  </head>
  <body>
    <table>
      <th>
        <td>Name</td>
        <td>Email</td>
        <td>Action</td>
      </th>
      @foreach ($users as $user )
        <tr>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td><a href="/update/{{ $user->id }}">Detail</a></td>
          <td><a href="/delete/{{$user->id}}">Delete</a></td>
        </tr>
       @endforeach
    </table>
  </body>
</html>
