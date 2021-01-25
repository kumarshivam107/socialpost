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
        <h1 class="h3 mb-0 text-gray-800">New Support Request</h1>
        <a href="{{url('/affiliate/support-history')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">Support History</a>
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
    <div class="col-lg-8 col-md-8 col-12">
        <form method="post" action="{{url('/affiliate/new-support-ticket')}}" id="support-form">@csrf
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject">
            </div>
            <div class="mb-3">
                <label for="reason" class="form-label">Select Reason</label>
                <select class="form-control" name="reason" id="reason">
                    <option value="Account related">Account Related</option>
                    <option value="Bonafide Related">Bonafide Related</option>
                    <option value="Bonafide Related">Others</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Your Message</label>
                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Support Request</button>
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
        var supportForm = $('#support-form');
        supportForm.validate({
            rules:{
                subject:{
                    required:true,
                    minlength:5,
                    maxlength:50
                },
                reason:{
                  required:true
                },
                message:{
                  required:true,
                    minlength:5,
                    maxlength:200
                }
            
            },
            message:{
                subject:{
                    required:"This Field is Required",
                    minlength:"Subject Should have atleast 5 Characters.",
                    maxlength:"Subject Should Not Consist more than 50 characters."
                },
                reason:{
                  required:"This Field is Required."
                },
                message:{
                  required:"This Field is Required",
                  minlength:"Message Should have atleast 5 Characters.",
                  maxlength:"Message Should Not Consist more than 50 characters."
                }
            }
        });
    });

</script>
@endsection     