<!DOCTYPE html>
<html lang="en">
<head>
  <title>trash Clients</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')

<div class="container">
  <h2>trash clients</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Client Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Website</th>
        <th>trash</th>
        <th>show</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
@foreach($trashed as $client)
      <tr>
        <td>{{$client->clientName}}</td>
        <td>{{$client->phone}}</td>
        <td>{{$client->email}}</td>
        <td>{{$client->website}}</td>
        <td><a href="{{ route('custom.restoreClients', $client->id)}}">restore</a></td>
        <td><a href="{{ route('custom.showClients', $client->id)}}">show client</a></td>
        <td>
        <form action="{{ route ('custom.forceDeleteClients')}}"  method="post">
        @csrf
    @method('delete')
            <input type="hidden" value="{{$client->id}}" name="id">
            <input type="submit" onclick="return confirm('Are you sure you want to delete?')" value="Delete">
          </form>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
