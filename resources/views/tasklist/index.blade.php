@extends('layouts.app')

@section('content')




    <div class="container">
  		<div class="row">
  			<div class="col-md-2">
			  <a href="{{ route('tasklist.create')}}"> <button class="btn" style="border:1px solid black;">Insert Project</button></a>
  			</div>
  			<div class="col-md-8">
              
              <table class="table table-bordered table-hover" style="text-align:center;">
  	<tr>
        <th>No</th>
		<th>Name</th>
		<th>project_id</th>
        <th>task_id</th>
		<th colspan="3"><p style="text-align: center;">action</p></th>
  	</tr>
      @foreach($tasklist as $key => $task)
	<tr>
		<td>{{++$key}}</td>
		<td>{{$task->name}}</td>
		<td>{{$task->project_id}}</td>
		<td>{{$task->task_id}}</td>
		<td style="border:none;">
		<form action="{{route('tasklist.destroy',$task->id)}}" method="POST">
		@method('DELETE')
		@csrf
		<button type="submit" class="btn btn-danger" >DELETE</button>
	
		
		
	</form>
    </td>

	<td style="border:none;"><a href="{{route('tasklist.show',$task->id)}}" class="btn btn-success">SHOW</a></td>
	<td style="border:none;"><a href="{{route('tasklist.edit',$task->id)}}" class="btn btn-info">EDIT</a></td>
	</tr>
@endforeach
  </table>
  			</div>
  			<div class="col-md-2">
  				
  			</div>
  		</div>
  </div>


   
@endsection

<div class="container">
	<div class="row">
		<div class="col-md-2">
			
		</div>
		<div class="col-md-10">
			
		</div>
	</div>
</div>