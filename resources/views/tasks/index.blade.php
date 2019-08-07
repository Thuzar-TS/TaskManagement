@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="float-none" style="margin-bottom:20px;">Tasks <span class="badge badge-pill badge-primary" style="font-size:0.5em;">5</span> <button class="btn btn-primary float-right">Create</button></h3>
            
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
