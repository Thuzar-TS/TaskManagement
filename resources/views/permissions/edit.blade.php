@extends('layout.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Access
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
      <form method="post" action="{{ route('permissions.update', $permission->id) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="name">AccessName:</label>
              <input type="text" class="form-control" name="access" value="{{$permission->access}}"/>
          </div>
          <button type="submit" class="btn btn-primary">Update Access</button>
      </form>
  </div>
</div>
@endsection
