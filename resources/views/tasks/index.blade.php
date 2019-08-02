@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
                <!-- <div class="card-header">All Tasks</div> -->
                        @foreach($tasks as $task)                            
                            <div class="card" style="margin-bottom:20px;">
                                <div class="card-header">
                                <h4>{{ $task->title }}</h4>
                                </div>
                                
                                <div class="card-body">
                                    {{ $task->description }}
                                </div>
                            </div>
                        @endforeach
                    
                    {{ $tasks->links() }}
        </div>
    </div>
</div>
@endsection
