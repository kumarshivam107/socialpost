@extends('affiliate.layouts.master')
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
@include('affiliate.layouts.sidebar')
@include('affiliate.layouts.header')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Promotional List</h1>
    </div>
    <table class="promotional_table" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Tittle</th>
                <th>College Name</th>
                <th>Material Type</th>
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
                <td>xxxx</td>
                <td>{{$promotional->college_name}}</td>
                <td>{{$promotional->material_type}}</td>
                <td><a href="{{url('public/storage/uploads/promovideo/'.$promotional->name.'')}}" class="btn btn-primary btn-sm mr-2" target="_blank">click here</a><a class="btn btn-success btn-sm mr-3" href="{{url('affiliate/promovideo/download/'.$promotional->material_id.'')}}">Download</a></td>                                                          
            </tr>
         @endforeach
        </tbody>
    </table>
</div>
@include('affiliate.layouts.footer')
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
     if ($(window).width() < 768) {
        $('table').removeClass('college_table');
    }
    $(document).ready( function () {
        $('.promotional_table').DataTable();
    } );
   
</script>
@endsection     