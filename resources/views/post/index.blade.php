<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pass data to view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body> 

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">User name</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($second as $first)

    <tr>
      <th scope="row">{{$first->id}}</th>
      <td>{{ $first->name }}</td>
      <td> {{ $first->password }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>