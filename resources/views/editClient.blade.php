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

<form action="{{ route('custom.updateClients', ['id' => $client->id])}}" method="post" enctype="multipart/form-data">
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

  <label for="city">City:</label><br>
  <p style="color: red">
@error('city')
{{$message}}
@enderror
</p>
    <select name="city" id="city" class="form-control">
      <option value="">Please Select City</option>
      <option value="Cairo" {{ $client->city == 'Cairo' ? 'selected' : '' }}>Cairo</option>
      <option value="Giza"{{ $client->city == 'Giza' ? 'selected' : '' }}>Giza</option>
      <option value="Alex"{{ $client->city == 'Alex' ? 'selected' : '' }}>Alex</option>
    </select>
    <br><br>
    <label for="active">Active:</label><br>
    <input type="checkbox" id="active" name="active" class="form-control" {{ $client->active ? 'checked' : '' }}><br><br>

 <!-- Display existing image if it exists -->
 @if($client->image)
        <label for="current_image">Current Image:</label><br>
        <img src="{{ asset('assets/images/' . $client->image) }}" alt="Client Image" style="max-width: 200px; max-height: 200px;"><br><br>
    @endif

    <label for="image">Upload New Image:</label><br>
    <input type="file" id="image" name="image" class="form-control"><br><br>



    <label for="fname">address:</address>:</label><br>
  <p style="color: red">
@error('address')
{{$message}}
@enderror
</p>
  <input type="text" id="fname" name="address"class="form-control" value="{{ $client->address }}"><br>


  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
