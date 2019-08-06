@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top:40px;
  }
</style>
<div class="uper">
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
      <form method="post" action="{{ route('permissions.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">Access Name:</label>
              <input type="text" class="form-control" name="access" autofocus/>
          </div>
          <button type="submit" class="btn btn-success">Create Access Name</button>
      </form>
  </div>
</div>
@endsection
