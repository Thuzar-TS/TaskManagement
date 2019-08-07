<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>

<style>
.show{
    display:block;
}
.hide{
    display:none;
}
</style>

<div class="container mt-5">
<div class="card">
    <div class="card-header">
        <div class="card-title">
            {{__('Profile')}}
        <span class="float-right"><a href="{{ URL::to('profile') }}" class="btn btn-sm btn-info">{{__('Profile List')}}</a></span>
        </div>
    </div>
    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div >
                        <img src="{{ asset('/images/'.$data->photo_url) }}" class="img-thumbnail img-circle"/>
                    </div>
                </div>
                <div class="col-sm-8 col-md-8">
                    
                </div>
            </div>
        </div>
    </div>
</div>

</div>








<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>