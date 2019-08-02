@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div style="margin-left:20px">
<a href="{{ route('tasklist.create')}}"><button class="btn btn-warning">Insert Project</button></a>
    <div>

    <div class="container">
  		<div class="row">
  			<div class="col-md-4">
  				
  			</div>
  			<div class="col-md-4">
              
              <table class="table table-bordered table-dark">
  	<tr>
        <th>No</th>
		<th>Name</th>
		<th>project_id</th>
        <th>task_id</th>
  	</tr>
  </table>
  			</div>
  			<div class="col-md-4">
  				
  			</div>
  		</div>
  </div>
</body>
</html>

   
@endsection