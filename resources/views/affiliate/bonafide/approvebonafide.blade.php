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
<!-- Begin Page Content -->
<div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Approve Bonafide</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="approve_bonafied" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Father</th>
                        <th>College</th>
                        <th>Course</th>
                        <th>Branch</th>
                        <th>Download Docs</th>
                    </tr>
                </thead>
                <?php
                 $sno =1;
                ?>
                <tbody>
                    @foreach($approve_bonafide as $approve_bonafide)
                    <tr>
                        <td>{{$sno++}}</td>
                        <td>{{$approve_bonafide->name}}</td>
                        <td>{{$approve_bonafide->father_name}}</td>
                        <td>{{$approve_bonafide->college}}</td>
                        <td>{{$approve_bonafide->course}}</td>
                        <td>{{$approve_bonafide->branch}}</td>
                        <td><a href="{{url('/affiliate/download-docs/'.$approve_bonafide->bonafide_id.'')}}" class="btn btn-success btn-sm">Download Docs</a></td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
</div>
@include('affiliate.layouts.footer')
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
     if ($(window).width() < 768) {
        $('table').removeClass('college_table');
    }
    $(document).ready( function () {
        $('.approve_bonafied').DataTable();
    } );
   
</script>
@endsection