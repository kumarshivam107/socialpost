@extends('admin.layouts.master')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<style>
    table { 
        width: 100%; 
        border-collapse: collapse!important; 
    }
    /* Zebra striping */
    tr:nth-of-type(odd) { 
        background: #eee!important; 
    }
    th { 
        background: #333!important; 
        color: white!important; 
        font-weight: 700!important; 
    }
    td, th { 
        padding: 6px!important; 
        border: 1px solid #ccc!important; 
        text-align: left; 
    }
    @media only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px)  {
        .container-fluid{
            margin:0px!important;
            padding:0px!important;
        }
        .card-body{
            padding:0px!important;
        }
        table { 
            width: 100%; 
            border-collapse: collapse!important; 
        }
        /* Force table to not be like tables anymore */
        table, thead, tbody, th, td, tr { 
            display: block!important; 
        }
        
        /* Hide table headers (but not display: none;, for accessibility) */
        thead tr { 
            position: absolute!important;
            top: -9999px!important;
            left: -9999px!important;
        }
       
        tr { border: 1px solid #ccc!important; }
        
        td { 
            /* Behave  like a "row" */
            border: none!important;
            border-bottom: 1px solid #eee!important; 
            position: relative!important;
            padding-left: 50%!important; 
        }
        
        td:before { 
            /* Now like a table header */
            position: absolute!important;
            /* Top/left values mimic padding */
            top: 6px!important;
            left: 6px!important;
            width: 45%!important; 
            font-weight:800!important;
            white-space: nowrap!important;
        }
        
        /*
        Label the data
        */
        td:nth-of-type(1):before { content: "S.No."; }
        td:nth-of-type(2):before { content: "College"; }
        td:nth-of-type(3):before { content: "City"; }
        td:nth-of-type(4):before { content: "State"; }
        td:nth-of-type(5):before { content: "Action"; }
    }
</style>
@include('admin.layouts.sidebar')
@include('admin.layouts.header')
<div class="container-fluid">
    <h3>View Promotional Material</h3>
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
    <table class="promotable dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Tittle</th>
                <th>College Name</th>
                <th>Material Type</th>
                <th>View Material</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php
        $sno =1;
        ?>
        <tbody>
        @foreach($promotional as $promotional)
            <tr>
                <td>{{$sno++}}</td>
                <td>{{$promotional->material_tittle}}</td>
                <td>{{$promotional->college_name}}</td>
                <td>{{$promotional->material_type}}</td>
                <td><a href="{{url('public/storage/uploads/promovideo/'.$promotional->name.'')}}" target="_blank">click here</a></td>
                <td><a class="btn btn-success btn-sm mr-3" href="{{url('admin/promovideo/download/'.$promotional->material_id.'')}}">Download</a><a class="btn btn-danger btn-sm" href="{{url('admin/promovideo/delete/'.$promotional->material_id.'')}}">Delete</a></td>                                                          
            </tr>
        @endforeach               
        </tbody>
    </table>
</div>
@include('admin.layouts.footer')
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
     if ($(window).width() < 768) {
        $('table').removeClass('college_table');
    }
    $(document).ready( function () {
        $('.promotable').DataTable();
    } );
   
</script>
@endsection