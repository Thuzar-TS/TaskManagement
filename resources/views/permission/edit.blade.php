@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }

</style>
<div class="card uper">
  <div class="card-header">
    Edit Access Name
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
      <form method="post" action="{{ route('permissions.update', $permissions->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">Access Name:</label>
              <input type="text" class="form-control" name="access" value="{{$permissions->access}}"/>
          </div>
          <button type="submit" class="btn btn-success">Update Access Name</button>
      </form>
  </div>
</div>
@endsection
