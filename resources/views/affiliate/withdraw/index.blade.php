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
<h3>New Withdraw  Request</h3>
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
    <div class="row">
        <div class="col-lg-6 col-md-9 col-12">
            <form action="{{url('/affiliate/withdraw-index')}}" method="post" id="withdraw-form">@csrf
                <div class="mb-3">
                    <label for="ammount" class="form-label">Requested Ammount</label>
                    <input type="text" class="form-control" id="money" name="money" placeholder="Enter Requested Ammount">
                </div>
                <div class="mb-3">
                    <label for="account" class="form-label">Account Holder Name</label>
                    <input type="text" class="form-control" id="holder_name" name="holder_name" placeholder="Enter Account Holder Name">
                </div>
                <div class="mb-3">
                    <label for="account" class="form-label">Account Number</label>
                    <input type="text" class="form-control" id="account_no" name="account_no" placeholder="Enter Your Account Number">
                </div>
                <div class="mb-3">
                    <label for="account" class="form-label">IFSC CODE</label>
                    <input type="text" class="form-control" id="ifsc_code" name="ifsc_code" placeholder="Enter Your Ifsc Code">
                </div>
                <button type="submit" class="btn btn-primary">Withdraw Request</button>
            </form>
        </div>
    </div>
</div>
@include('affiliate.layouts.footer')
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
        var withdrawForm = $('#withdraw-form');
        withdrawForm.validate({
            rules:{
                money:{
                    required:true,
                    digit:true,
                    minlength:3,
                    maxlength:15
                },
                holder_name:{
                    required:true,
                    minlength:3,
                    maxlength:50
                },
                account_no:{
                    required:true,
                    minlength:7,
                    maxlength:50
                },
                ifsc_code:{
                    required:true,
                    minlength:10,
                    maxlength:11
                }
            },
            message:{
                money:{
                    required:"This Field is Required",
                    digit:"Request Ammount Must be In Digit.",
                    minlength:"Money Should have atleast 3 Characters.",
                    maxlength:"Money Should Not Consist more than 50 characters."
                },
                holder_name:{
                    required:"This Field is Required",
                    minlength:"Accoun Holder Name Should have atleast 3 Characters.",
                    maxlength:"Account Holder Name Should Not Consist more than 50 characters."
                },
                account_no:{
                    required:"This Field is Required",
                    minlength:"Accoun Number Should have atleast 7 Characters.",
                    maxlength:"Account Number Should Not Consist more than 50 characters."
                },
                ifsc_code:{
                    required:"This Field is Required",
                    minlength:"Ifsc Code Should have atleast 3 Characters.",
                    maxlength:"Ifsc Code Should Not Consist more than 50 characters."
                }
            }
        });
    });

</script>
@endsection