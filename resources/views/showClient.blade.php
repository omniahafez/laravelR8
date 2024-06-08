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
<p><img src=" {{ asset('assets/images/'. $client->image) }}  " alt=""></p>
<label for="fname">client name:</label><br>
  <input type="text" id="fname" name="clientName"class="form-control" value="{{ $client->clientName }}"><br>
  <label for="lname">phone:</label><br>
  <input type="text" id="lname" name="phone" class="form-control" value="{{ $client->phone }}" ><br><br>
  <label for="lname">email:</label><br>
  <input type="text" id="lname" name="email" class="form-control" value="{{ $client->email }} "><br><br>
  <label for="lname">website:</label><br>
  <input type="text" id="lname" name="website" class="form-control" value="{{ $client->website }} "><br><br>
  <label for="lname">city</label><br>
  <input type="text" id="lname" name="website" class="form-control" value="{{ $client->city->city }} "><br><br>
</body>
</html>
