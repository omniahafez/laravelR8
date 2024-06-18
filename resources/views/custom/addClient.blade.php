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

<h2>HTML Forms</h2>


    <label for="lname">clientName:</label><br>
  <p style="color: red">
@error('clientName')
{{$message}}
@enderror
</p>
  <input type="text" id="lname" name="clientName" class="form-control" value="{{old ('clientName')}}"><br><br>
  
  <label for="lname">phone:</label><br>
  <p style="color: red">
@error('phone')
{{$message}}
@enderror
</p>
  <input type="text" id="lname" name="phone" class="form-control" value="{{old ('phone')}}"><br><br>
  <label for="lname">email:</label><br>
  <p style="color: red">
@error('email')
{{$message}}
@enderror
</p>
  <input type="text" id="lname" name="email" class="form-control" value="{{old ('email')}}"><br><br>
  <label for="lname">website:</label><br>
  <p style="color: red">
@error('website')
{{$message}}
@enderror
</p>
  <input type="text" id="lname" name="website" class="form-control" value="{{old ('website')}}"><br><br>
  <label for="city">City:</label><br>
  <p style="color: red">
@error('city')
{{$message}}
@enderror
</p>
    <select name="city" id="city" class="form-control">
      <option value="">Please Select City</option>
      <option value="Cairo" {{ old('city') == 'Cairo' ? 'selected' : '' }}>Cairo</option>
      <option value="Giza"{{ old('city') == 'Giza' ? 'selected' : '' }}>Giza</option>
      <option value="Alex"{{ old('city') == 'Alex' ? 'selected' : '' }}>Alex</option>
    </select>
    <br><br>
    <label for="active">Active:</label><br>
    <input type="checkbox" id="active" name="active" class="form-control" {{ old('active') ? 'checked' : '' }}><br><br>
    <label for="image">Image:</label><br>
    <input type="file" id="image" name="image" class="form-control"><br><br>

    

    <label for="fname">address:</label><br>
  <p style="color: red">
@error('address')
{{$message}}
@enderror
</p>
  <input type="text" id="fname" name="address"class="form-control" value="{{old ('address')}}" ><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

