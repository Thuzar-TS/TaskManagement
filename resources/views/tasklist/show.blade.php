@extends('layouts.app')

@section('content')
<!-- <form method="POST" action="{{ route('tasklist.store') }}">
                        @csrf
    <label for="name" class="">{{ __('Name') }}</label>
    <strong>{{$tasklist->name}}</strong>
    
    <label for="project_id" class="">{{ __('project_id') }}</label>
    <strong>{{$tasklist->project_id}}</strong>

    <label for="task_id" class="">{{ __('task_id') }}</label>
    <strong>{{$tasklist->task_id}}</strong>
                </form>

                <a href="{{route('tasklist.index')}}" class="btn btn-success">Home</a> -->

@if($errors->any())
<div class="alert alert-danger">
    <strong>Sorry Check back your input!</strong>your process failed please try again<br><br>

    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
</div>
@endif  

    <div class="container">
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8">
            
            <div class="card">
	<div class="card-header">{{ __('Project') }}</div>
		<div class="card-body">
        <form method="POST" action="{{ route('tasklist.store') }}">
        @csrf
        <div>
        <label for="name" class="">{{ __('name') }}</label>
        <input disabled name="name" value="{{$tasklist->name}}" style="border-bottom: 1px solid black;border-left: none;border-top: none;border-right: none;text-align: center;margin-left: 46px;color:red;font-weight:bold;letter-spacing:0px;text-transform: uppercase;;width:50%;">
        </div><br>

        <div>
        <label for="name" class="">{{ __('project_id') }}</label>
        <input disabled name="project_id" value="{{$tasklist->project_id}}" style="border-bottom: 1px solid black;border-left: none;border-top: none;border-right: none;text-align: center;margin-left: 20px;;width:50%;">
        </div><br>

        <div>
        <label for="name" class="">{{ __('task_id') }}</label>
        <input disabled name="task_id" value="{{$tasklist->task_id}}" style="border-bottom: 1px solid black;border-left: none;border-top: none;border-right: none;text-align: center;margin-left: 40px;;width:50%;">
        </div><br>

        <a href="{{route('tasklist.index')}}" class="btn btn-success">Home</a>
        
        
        </form>
		</div>
	
</div>
			</div>
			
            <div class="col-md-2">
				
			</div>
		</div>
	</div>
@endsection