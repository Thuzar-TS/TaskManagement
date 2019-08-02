@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('tasklist.store') }}">
                        @csrf
    <label for="name" class="">{{ __('Name') }}</label>
    <strong>{{$tasklist->name}}</strong>
    
    <label for="project_id" class="">{{ __('project_id') }}</label>
    <strong>{{$tasklist->project_id}}</strong>

    <label for="task_id" class="">{{ __('task_id') }}</label>
    <strong>{{$tasklist->task_id}}</strong>
                </form>

                <a href="{{route('tasklist.index')}}" class="btn btn-success">Home</a>
@endsection