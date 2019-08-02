@extends('layouts.app')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div><br />
  @endif
<<table class="table table-striped">
    <thead>
        <tr>
        <td>ID</td>
          <td>Access Name</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($permissions as $permission)
        <tr>
            <td>{{$permission->id}}</td>
            <td>{{$permission->access}}</td>
            <td><a href="{{ route('permissions.edit',$permission->id)}}" class="btn btn-primary"></a>Edit</td>
            <td>
                <form action="{{ route('permissions.destroy',$permission->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  @endsection
