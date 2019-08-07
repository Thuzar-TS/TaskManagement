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
  <div class="card-header bg-secondary  text-white " >
    <div class = "row">
    <div class="col align-self-start">  </div>
      <div class="col align-self-center">
         <strong> {{__('Task Management')}}</strong>
      </div>
      <div class = "col align-self-end">
       <div class="float-right"><a href ="{{ URL::to('projects/create')}}" class="btn btn-md btn-info">Create</a></div>
       </div>
    </div>
  </div>
   
    <div class="card-body">
        <div class="table-reponsive">
        <table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Description</td>
          <td>Show</td>
          <td>Edit</td>
          <td>Delete</td>
         
        </tr>
    </thead>
    <tbody>
        @foreach($projects as $pro)
        <tr>
            <td>{{$pro->id}}</td>
            <td>{{$pro->name}}</td>
            <td>{{$pro->description}}</td>
            <td><a href="{{ route('projects.show',$pro->id)}}" class="btn btn-warning">Show</a></td>
            <td><a href="{{ route('projects.edit',$pro->id)}}" class="btn btn-success">Edit</a></td>
            <td>
                <form action="{{ route('projects.destroy', $pro->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')" type="submit">Delete</button>
                </form>
            </td>     
        </tr>
        @endforeach
    </tbody>
    </table>
   </div>
  </div>
  <div class = "card-footer">
  <div class = "row">
      <div class = "col align-self-start"></div>
      <div class = "col align-self-center">
            {{$projects->links()}}
      </div>
      <div class = "col align-self-end"></div></div>
  </div>
  </div>
  
</div>

<div>
@endsection

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
