<!DOCTYPE html>
<html>
<body>

<h2>Add student</h2>

<form action="{{'insertstudent'}}" method="post">
    @csrf
  <label for="fname">student name:</label><br>
  <input type="text" id="name" name="name" value=""><br>
  <label for="age">age:</label><br>
  <input type="text" id="age" name="age" value=""><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
