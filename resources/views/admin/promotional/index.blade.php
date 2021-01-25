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
<div class="container row">
    <div class="col-lg-9 col-md-9 col-12">
        <h3>Adding Promotional Material</h3>
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
        <form action ="{{url('/admin/add-promotional-material')}}" method="post" enctype="multipart/form-data" id="material-form">@csrf
            <div class="mb-3">
                <label for="collegename" class="form-label">Material Tittle</label>
                <input type="text" class="form-control" name="material_tittle" id="material_tittle" placeholder="Enter Material Tittle">
            </div>
            <div class="mb-3">
                <label for="collegename" class="form-label">College Name</label>
                <select class="form-control" id="college_name" name="college_name">
                    <option value="all">All</option>
                    <?php
                        echo $send_data;
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Material Type</label>
                <select class="form-control" id="material_type" name="material_type">
                    <option value="pdf">PDF</option>
                    <option value="image">Image</option>
                    <option  vlaue="video">Video</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="file" name="file">
            </div>
            <button type="submit" class="btn btn-primary">Add Material</button>
        </form>
    </div>
</div>
@include('admin.layouts.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
<script>
  $(document).ready(function(){
    var addmaterialForm = $('#material-form');
    addmaterialForm.validate({
      rules:{
        material_tittle:{
          required:true,
          minlength:5,
          maxlength:100
        },
        college_name:{
            required:true
        },
        material_type:{
            required:true
        },
        file:{
            required:true
        }
      },
      message:{
        material_tittle:{
          required:"This Field is Required",
          minlength:"Material Tittle Must have 5 Characters.",
          maxlength:"Material Tittle Must Not Consist More than 100 Characters."
        },
        college_name:{
            required:"This Field is Required."
        },
        material_type:{
            required:"This Field is Required."
        },
        file:{
            required:"This Field is Required."
        }
      }
      
    });
  });
</script>
@endsection