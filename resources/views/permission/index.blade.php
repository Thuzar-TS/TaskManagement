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
  <table class="table table-striped">
    <thead style="color:#FF6347">
        <tr>
          <td>Access Name</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($permissions as $permission)
        <tr>
            <td>{{$permission->id}}</td>
            <td>{{$permission->access}}</td>
            <td><a href="{{ route('permissions.edit',$permission->id)}}" class="btn btn-primary">Edit</a></td>
            <td><a href="" data-target="#DeleteModal"
             data-toggle="modal" onclick="deleteData({{$permission->id}})" class="btn btn-primary">Delete</a>
                <!--<form action="{{ route('permissions.destroy', $permission->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>-->
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
    <!-- Modal -->

<div id="DeleteModal" class="modal fade" role="dialog">
   <div class="modal-dialog ">
     <form action="" id="deleteForm" method="post">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="modal-title text-center">Delete Confirmation</h4>
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
             </div>
             <div class="modal-body">
                  @csrf
                  @method('DELETE')
                 <p class="text-center">Are you sure you want to delete ?</p>
             </div>
             <div class="modal-footer">
                 <center>
                     <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                     <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
                 </center>
             </div>
         </div>
     </form>
   </div>
  </div>

   <script type="text/javascript">
     function deleteData(id)
     {
         var id = id;
         var url = '{{ route("permissions.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#deleteForm").attr('action', url);
     }

     function formSubmit()
     {
         $("#deleteForm").submit();
     }
  </script>
@endsection
