@extends('admin.layouts.master')
@section('content')
<style>
    .error{
        font-size:16px;
        color:red;
        font-style: italic;
        text-transform:capitalize;
        width:100%;
    }
    form input{
        width:100%!important;
    }
</style>
@include('admin.layouts.sidebar')
@include('admin.layouts.header')
<div class="container-fluid">
     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add College</h1>
    </div>
    @if(Session::has('flash_message_error'))
        <div class="alert alert-sm alert-danger alert-block" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>{!! session('flash_message_error') !!}</strong>
        </div>
      @endif
        
        @if(Session::has('flash_message_success'))
        <div class="alert alert-sm alert-success alert-block" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>{!! session('flash_message_success') !!}</strong>
        </div>
        @endif
        <!-- Showing the Server Side Validiation Error -->
        @if($errors->any())
            <h4 style="color:red; font-size:16px; text-transform:uppercase;">{{$errors->first()}}</h4>
        @endif
    <div class="col-lg-6 col-md-8 col-12">
        <form method="post" action="{{url('/admin/add-college')}}" id="add-college">@csrf
            <div class="mb-3">
                <label for="collegename" class="form-label">College Name</label>
                <input type="text" class="form-control" id="college_name" name="college_name" placeholder="Enter College Name">
            </div>
            <div class="mb-3">
                <label for="collegename" class="form-label">College city</label>
                <input type="text" class="form-control" id="college_city" name="college_city" placeholder="Enter The College City">
            </div>
            <div class="mb-3">
                <label for="collegename" class="form-label">College State</label>
                <input type="text" class="form-control" id="college_state" name="college_state" placeholder="Enter College State">
            </div>
            <div class="mb-3">
                <label for="collegename" class="form-label">Course</label>
                <textarea type="text" class="form-control" id="course" name="course" placeholder="Enter All Courses"></textarea>
            </div>
            <button class="btn btn-success" type="submit">Add College</button>
        </form>
    </div> 
</div>
@include('admin.layouts.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    var addcollegeForm = $('#add-college');
    addcollegeForm.validate({
      rules:{
        college_name:{
          required:true,
          minlength:5,
          maxlength:100
        },
        college_city:{
            required:true,
            minlength:5,
            maxlength:100
        },
        college_state:{
            required:true,
            minlength:5,
            maxlength:50
        },
        course:{
            required:true,
            minlength:5,
            maxlength:150
        }
      },
      message:{
        college_name:{
          required:"This Field is Required",
          minlength:"College Name Must have 5 Characters.",
          maxlength:"College Name Must Not Consist More than 100 Characters."
        },
        college_city:{
          required:"This Field is Required",
          minlength:"College City Must have 5 Characters.",
          maxlength:"College City Must Not Consist More than 100 Characters."
        },
        college_state:{
            required:"This Field is Required",
          minlength:"College State Must have 5 Characters.",
          maxlength:"College State Must Not Consist More than 50 Characters."
        },
        course:{
            required:"This Field is Required",
          minlength:"Course Must have 5 Characters.",
          maxlength:"Course Must Not Consist More than 150 Characters."

        }
      }
      
    });
  });
</script>
@endsection