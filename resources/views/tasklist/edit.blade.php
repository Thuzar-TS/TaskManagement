@extends('layouts.app')

@section('content')
<div class="container" style="padding:50px;">
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-8">
				<div class="card">
                    <div class="card-header">{{ __('RENAME PROJECT') }}</div>
                    <form method="POST" action="{{ route('tasklist.update',$tasklist->id) }}">
                        @method('PUT')
                        @csrf
                        
                        <div class="col-md-5" style="margin-top:10px;">
                        <label class="">{{ __('Name') }}</label>
                        <input name="name" class="form-control" autofocus value="{{$tasklist->name}}" type="text">
                        
                        </div><br>
                        
                        <div class="col-md-5">
                        <label class="">{{ __('project_id') }}</label>
                        <input name="project_id" class="form-control" autofocus value="{{$tasklist->project_id}}" type="number">                  
                        </div><br>
                        
                        <div class="col-md-5">
                        <label class="">{{ __('task_id') }}</label>
                        <input name="task_id" class="form-control" autofocus value="{{$tasklist->task_id}}" type="number">
                       
                        </div><br>
                        
                        <button type="submit" class="btn btn-primary" style="margin-left:15px;margin-bottom:17px;">
                                    {{ __('Update') }}
                                </button>

                                <a href="{{route('tasklist.index')}}" class="btn btn-success" style="margin-bottom:17px;">Home</a>
                    </form>
                </div>
			</div>
			<div class="col-md-2">
				
			</div>
		</div>
	</div>
@endsection