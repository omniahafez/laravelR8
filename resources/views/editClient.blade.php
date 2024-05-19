<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.nav')
<h2>edit client</h2>

<form action="{{ route('updateClients', ['id' => $client->id])}}" method="post">
    @csrf
    @method('put')
  <label for="fname">client name:</label><br>
  <p style="color: red">
@error('clientName')
{{$message}}
@enderror
</p>
  <input type="text" id="fname" name="clientName"class="form-control" value="{{ $client->clientName }}"><br>
  <label for="lname">phone:</label><br>
  <p style="color: red">
@error('phone')
{{$message}}
@enderror
</p>
  <input type="text" id="lname" name="phone" class="form-control" value="{{ $client->phone }}" ><br><br>
  <label for="lname">email:</label><br>
  <p style="color: red">
@error('email')
{{$message}}
@enderror
</p>
  <input type="text" id="lname" name="email" class="form-control" value="{{ $client->email }} "><br><br>
  <label for="lname">website:</label><br>
  <p style="color: red">
@error('website')
{{$message}}
@enderror
</p>
  <input type="text" id="lname" name="website" class="form-control" value="{{ $client->website }} "><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
