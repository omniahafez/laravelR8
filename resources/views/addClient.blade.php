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
<h2>HTML Forms</h2>

<form action="{{ route('insertclient')}}" method="post">
    @csrf
  <label for="fname">client name:</label><br>
  <input type="text" id="fname" name="clientName"class="form-control" ><br>
  <label for="lname">phone:</label><br>
  <input type="text" id="lname" name="phone" class="form-control"><br><br>
  <label for="lname">email:</label><br>
  <input type="text" id="lname" name="email" class="form-control"><br><br>
  <label for="lname">website:</label><br>
  <input type="text" id="lname" name="website" class="form-control"><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
