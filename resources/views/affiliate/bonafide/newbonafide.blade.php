@extends('affiliate.layouts.master')
@section('content')
<style>
    .error{
        font-size:16px;
        color:red;
        font-style: italic;
        text-transform:capitalize;
        width:100%;
        margin-bottom:0px;
    }
    form input{
        width:100%!important;
    }
</style>
@include('affiliate.layouts.sidebar')
@include('affiliate.layouts.header')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">New Bonafide Request</h1>
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
    <!-- Main Content Section -->
        <form class="row" method="post" action="{{url('affiliate/new-bonafide-request')}}" enctype="multipart/form-data" id="new-bonafide">@csrf
            <div class="mb-3 col-lg-6 col-md-6 col-12">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name"> 
            </div>
                <div class="mb-3 col-lg-6 col-md-6 col-12">
                    <label for="fathername" class="form-label">Father Name</label>
                    <input type="text" class="form-control" id="father_name" name="father_name">
                </div>
            
            <div class="mb-3 col-lg-6 col-md-6 col-12">
                <label for="state" class="form-label">State</label>
                <select class="form-control" id="state" name="state" class="text-capitalize">
                    <?php
                        echo $unique_state_data;
                    ?>
                </select>
            </div>
            <div class="mb-3 col-lg-6 col-md-6 col-12">
                <label for="course" class="form-label">Course</label>
                <input type="text" class="form-control" id="course" name="course">
            </div>
            <div class="mb-3 col-lg-6 col-md-6 col-12">
                <label for="college" class="form-label">College</label>
                <select class="form-control" name="college" id="college">
                </select>
            </div>
            <div class="mb-3 col-lg-6 col-md-6 col-12">
                <label for="branch" class="form-label">Branch</label>
                <input type="text" class="form-control" id="branch" name="branch" value="Not Applicable">
            </div>
            <div class="mb-3 col-lg-6 col-md-6 col-12">
                <label for="formFile" class="form-label">10th MArksheet</label>
                <input class="form-control" type="file" id="formFile" name="tenth_marksheet">
            </div>
            <div class="mb-3 col-lg-6 col-md-6 col-12">
                <label for="formFile" class="form-label">12th Marksheet (Optional)</label>
                <input class="form-control" type="file" id="twelve_marksheet" name="twelve_marksheet">
            </div>
            <div class="mb-3 col-lg-6 col-md-6 col-12">
                <label for="formFile" class="form-label">Graduation Marksheet (Optional)</label>
                <input class="form-control" type="file" id="gradution_marksheet" name="gradution_marksheet">
            </div>
            <div class="mb-3 col-lg-6 col-md-6 col-12">
                <label for="formFile" class="form-label">Aadhar Card (Optional)</label>
                <input class="form-control" type="file" id="aadharcard" name="aadhar_card">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@include('affiliate.layouts.footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        var state = $('#state').val();
            $.ajax({
                url:`{{url('/affiliate/get-college-data/${state}')}}`,
                type:"get",
                success:function(data){
                    $('#college').html(data);
                }
            });
        $('#state').change(function(){
            var state = $('#state').val();
            $.ajax({
                url:`{{url('/affiliate/get-college-data/${state}')}}`,
                type:"get",
                success:function(data){
                    $('#college').html(data);
                }
            });
        });
        //Validiate Form:-
        var newbonafideForm = $('#new-bonafide');
        newbonafideForm.validate({
            rules:{
                name:{
                    required:true,
                    minlength:5,
                    maxlength:50
                },
                father_name:{
                    required:true,
                    minlength:5,
                    maxlength:100
                },
                state:{
                    required:true
                },
                course:{
                    required:true,
                    minlength:2,
                    maxlength:100
                },
                branch:{
                    required:true,
                    minlength:5,
                    maxlength:50
                },
                tenth_marksheet:{
                    required:true
                }
            
            },
            message:{
                name:{
                    required:"This Field is Required",
                    minlength:"Name Should have atleast 5 Characters.",
                    maxlength:"Name Should Not Consist more than 50 characters."
                },
                father_name:{
                    required:"This Field is Required",
                    minlength:"Name Should have atleast 5 Characters.",
                    maxlength:"Name Should Not Consist more than 50 characters."
                },
                state:{
                    required:"This Field Is Required.",
                    minlength:"State Must be Selected."
                },
                course:{
                    required:"This Field is Required.",
                    minlength:"Course Should Have atleast 2 Characters.",
                    maxlength:"Course Should not Consist More than 100 Characters."
                },
                branch:{
                    required:"This Field is Required.",
                    minlength:"Branch Have atleast 5 Characters.",
                    maxlength:"Branch Should not Consist more than 100 Characcters."
                },
                tenth_marksheet:{
                    required:"This Fiels is Required."
                }
            }
        });
    });

</script>
@endsection  