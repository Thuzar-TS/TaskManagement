<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>



<div class="container-fluid mt-5">
<div class="card">
    <div class="card-header">
        <div class="card-title">
            {{__('Profile')}}
        <span class="float-right"><a href="{{ URL::to('profile/create') }}" class="btn btn-sm btn-info">{{__('Create')}}</a></span>
        </div>
    </div>
    <div class="card-body">
    @if(session()->has('delete'))
        <div class="alert alert-danger">
            {{ session()->get('delete') }}
        </div>
    @endif
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
        <div class="table-responsive">
        <table id="dataTable" class="display tblData" style="width:100%">
        <thead>
            <tr>
                <th>User id</th>
                <th>Photo</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Git</th>
                <th>Skype</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
                

            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>User id</th>
                <th>Photo</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Git</th>
                <th>Skype</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </tfoot>
    </table>
        </div>
    </div>
</div>

</div>









<script type="text/javascript">
    $(document).ready(function () {
        var table;
        $('.tblData').DataTable( {
            "stateSave": true,
            "responsive": true,
            "processing": true,
            "serverSide" : true,
            "order" : [0,'ASC'],
            "ajax" :  '{{url('getProfile')}}',
            columns: [
                
                {data: 'user_id' , name : 'user_id' },
                {data: 'image', name: 'image', orderable: false, searchable: false},
                {data: 'address' , name : 'address' },
                {data: 'phone' , name : 'phone' },
                {data: 'git' , name : 'git' },
                {data: 'skype' , name : 'skype' },
                {data: 'created_at' , name : 'created_at' },
                {data: 'updated_at' , name : 'updated_at' },
                {data: 'view', name: 'view', orderable: false, searchable: false},
                {data: 'edit', name: 'edit', orderable: false, searchable: false},
                {data: 'delete', name: 'delete', orderable: false, searchable: false},
            ]
        });
        $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        });
         
        $(".alert-danger").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert-danger").slideUp(500);
        });
        $(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert-success").slideUp(500);
        });
       
     

});
</script>










<script type="text/javascript">
$(document).ready(function() {
    $('#dataTable').DataTable();
} );
</script>


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>