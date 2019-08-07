@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<script>
function validateform()
{
  var name = document.forms['myForm']['name'].value;
  var desc = document.forms['myForm']['description'].value;
  if(name=="" || desc == "")
  {
    alert("Name and  Description must be filled out");
    return false;
  }
}
</script>

<div class="container">
<div class="card uper">
  <div class="card-header bg-secondary text-white">
  <div class = "row">
  <div class = "col align-self-start"></div>
      <div class = "col align-self-center">  <strong> Add New </strong> </div>
      <div class = "col align-self-end"></div>
  </div>
    
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form  name = "myForm" method="post" action="{{ route('projects.store') }}" onsubmit = "return validateform()" >
          <div class="form-group">
              @csrf
              <label for="name"> Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="price">Description :</label>
              <input type="text" class="form-control" name="description"/>
          </div>
        
          <button type="submit" class="btn btn-primary">Create</button>
      </form>
  </div>
</div>
</div>

@endsection