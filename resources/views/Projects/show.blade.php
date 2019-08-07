@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
  
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif


</div>
<div class="container">

  <div class="card">
  <div class="card-header bg-secondary text-white" >
    <div class = "row">
         <div class="col align-self-start"></div>
         <div class="col align-self-center"> <strong>Record Details </strong></div>
         <div class="col align-self-end"></div>
    </div>
  </div>
   
    <div class="card-body">
        <div class="table-reponsive">
        <table class="table table-striped table-bordered">
         <tbody>
         <tr>
            <td>Id : </td>
            <td> {{$recorddetails -> id}}</td>
        </tr>
         <tr>
            <td>Name : </td>
            <td> {{$recorddetails -> name}}</td>
        </tr>
        <tr>
            <td> Description : </td>
            <td> {{$recorddetails -> description }}</td>
        </tr>

        <tr>
            <td>  </td>
            <td> <a href="{{ URL::to('projects')}}" class='btn btn-info'>Back to List</a> </td>
        </tr>
         </tbody>
       
        </table>
        </div>
    </div>
  </div>
</div>

<div>
@endsection




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


