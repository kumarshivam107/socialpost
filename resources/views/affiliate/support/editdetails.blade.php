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
        <h1 class="h3 mb-0 text-gray-800">Submit Details</h1>
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
    <div class="row">
        <div class="col-lg-8 col-md-8 col-12">
            <form action="{{url('/affiliate/update-details')}}" method="POST" enctype="multipart/form-data" id="submit-form">@csrf
                <input type="hidden" id="id_detail" name="id_detail" value="{{request()->route('id')}}">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Recepit</label>
                    <input class="form-control" type="file" id="recepit" name="recepit">
                </div>
                <div class="mb-3">
                    <label for="utr" class="form-label">UTR Details</label>
                    <input type="text" class="form-control" id="utr" name="utr">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
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
        var submitForm = $('#submit-form');
        submitForm.validate({
            rules:{
                recepit:{
                    required:true
                },
                utr:{
                  required:true,
                  minlength:5,
                  maxlength:100
                }
            
            },
            message:{
                name:{
                    required:"This Field is Required"
                },
                utr:{
                  required:"This Field is Required",
                  minlength:"The Minimun Length of Utr is 5.",
                  maxlength:"The Maximum Length of Utr is 100."
                }
            }
        });
    });

</script>
@endsection     