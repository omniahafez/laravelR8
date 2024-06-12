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

<label for="fname">student name:</label><br>
  <input type="text" id="fname" name="studentName"class="form-control" value="{{ $student->studentName }}"><br>
  <label for="lname">age:</label><br>
  <input type="text" id="lname" name="age" class="form-control" value="{{ $student->age }}" ><br><br>
  <label for="lname">class:</label><br>
  <input type="text" id="lname" name="age" class="form-control" value="{{ $student->class->className }}"><br><br>
  
</body>
</html>