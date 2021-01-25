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
        td:nth-of-type(2):before { content: "Name"; }
        td:nth-of-type(3):before { content: "Father Name"; }
        td:nth-of-type(4):before { content: "College"; }
        td:nth-of-type(5):before { content: "Course"; }
        td:nth-of-type(6):before { content: "Recepit"; }
        td:nth-of-type(7):before { content: "UTR NO"; }
        td:nth-of-type(8):before { content: "Action"; }
    }
</style>
@include('affiliate.layouts.sidebar')
@include('affiliate.layouts.header')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Approved Commission</h1>
    </div>
    <table class="commission_table" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>College</th>
                <th>Course & Beanch</th>
                <th>Status</th>
                <th>Commission</th>
            </tr>
        </thead>
        <?php
            $sno =1;
        ?>
        <tbody>
           @foreach($utr_approved as $utr_approved) 
            <tr>
                <td>{{$sno++}}</td>
                <td>{{$utr_approved->name}}</td>
                <td>{{$utr_approved->father_name}}</td>
                <td>{{$utr_approved->college}}</td>
                <td>{{$utr_approved->course}}{{$utr_approved->branch}}</td>
                @if($utr_approved->utr_approved==0)
                <td>Not Verified</td>
                @else
                <td>Verified</td>
                @endif
                @if($utr_approved->commission ==null)
                <td>Not Assigned</td>
                @else
                <td>{{$utr_approved->commission}}</td>
                @endif
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
        $('.commission_table').DataTable();
    } );
   
</script>
@endsection 