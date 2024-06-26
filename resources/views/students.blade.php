<!DOCTYPE html>
<html lang="en">
<head>
  <title>students</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('includes.studentNav')

<div class="container">
  <h2>students Data</h2>
  @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif

  @if (session('error'))
      <div class="alert alert-danger">
          {{ session('error') }}
      </div>
  @endif
  <table class="table table-hover">
    <thead>
      <tr>
        <th>student Name</th>
        <th>age</th>
        <th>edit</th>
        <th>show</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
@foreach($students as $student)
      <tr>
        <td>{{$student->studentName}}</td>
        <td>{{$student->age}}</td>
        <td><a href="{{ route('editStudent', $student->id)}}">edit</a></td>
        <td><a href="{{ route('showStudent', $student->id)}}">show </a></td>
        <td>
        <form action="{{ route ('delStudent')}}"  method="post">
        @csrf
    @method('delete')
            <input type="hidden" value="{{$student->id}}" name="id">
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
