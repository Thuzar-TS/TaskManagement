@extends('layouts.app')

@section('content')


<div class="container">
  		<div class="row">
  			<div class="col-md-4">
  				
  			</div>
  			<div class="col-md-4">
              <form method="POST" action="{{ route('tasklist.store') }}">
{{ csrf_field() }}
<label for="name" class="">{{ __('Name') }}</label>
<input name="name" class="form-control" autofocus>

<label for="project_id" class="">{{ __('project_id') }}</label>
<input name="project_id" class="form-control" autofocus>

<label for="task_id" class="">{{ __('task_id') }}</label>
<input name="task_id" class="form-control" autofocus><br><br>

<button type="submit" class="btn btn-primary">
                                    {{ __('INSERT') }}
</button>
<a href="{{route('tasklist.index')}}" class="btn btn-success">Home</a>
</form>
  			</div>
  			<div class="col-md-4">
  				
  			</div>
  		</div>
  </div>

</form>
@endsection