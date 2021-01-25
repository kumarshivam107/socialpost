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
    <h3>Send Notification</h3>
    <div class="col-lg-8 col-md-10 col-12">
        <form action="{{url('/admin/send-notification')}}" method="post" id="notification-form">@csrf
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Notification Subject</label>
                <input type="password" class="form-control" id="subject" name="subject">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Notification Text</label>
                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Notification</button>
        </form>
    </div>
</div>
@include('admin.layouts.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    var notificationForm = $('#notification-form');
    notificationForm.validate({
      rules:{
        subject:{
          required:true,
          minlength:25,
          maxlength:125
        },
        message:{
            required:true,
            minlength:50,
            maxlength:250
        }
      },
      message:{
        subject:{
          required:"This Field is Required",
          minlength:"Subject Must have 25 Characters.",
          maxlength:"Subject Must Not Consist More than 125 Characters."
        },
        message:{
          required:"This Field is Required",
          minlength:"Message Must have 50 Characters.",
          maxlength:"Message Must Not Consist More than 250 Characters."
        }

      }
      
    });
  });
</script>
@endsection