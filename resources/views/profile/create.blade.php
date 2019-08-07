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
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
    @endif
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
        <form method="post" action="{{ url('profile')}} " enctype="multipart/form-data" class="needs-validation" novalidate> 
            @csrf
            <div class="row">
                <div class="col-sm-2 col-md-2">
                <img id="blah" src="#" width="250" height="250" class="img-thumbnail hide" />
                </div>
                <div class="col-sm-8 col-md-8">
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">{{__('Photo')}}</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="imgInp" name="photo_url" accept="image/*" require>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{__('Address')}}</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address" require></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{__('Phone')}}</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" id="phone" name="phone" rows="3" require/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{__('Git')}}</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="git" name="git" rows="3" require/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">{{__('Skype')}}</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="skype" name="skype" rows="3" require/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" class="btn btn-sm btn-primary" value="Submit" id="submit">
                        </div>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2">
                
                </div>
            </div>

        </form>
    </div>
</div>

</div>

<script>

        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
            $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
        }

        $("#imgInp").change(function() {
            readURL(this);
            $('#blah').removeClass('hide');

        });
</script>






<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>