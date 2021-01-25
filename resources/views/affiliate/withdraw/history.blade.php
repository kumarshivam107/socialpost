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
        td:nth-of-type(2):before { content: "Ammount"; }
        td:nth-of-type(3):before { content: "Holder Name"; }
        td:nth-of-type(4):before { content: "Account No."; }
        td:nth-of-type(5):before { content: "Ifsc Code"; }
        td:nth-of-type(6):before { content: "Status"; }
        td:nth-of-type(7):before { content: "Date"; }
        td:nth-of-type(8):before { content: "12th Doc"; }
        td:nth-of-type(9):before { content: "Graduation Doc"; }
        td:nth-of-type(10):before { content: "Addhar Card"; }
    }
</style>
@include('affiliate.layouts.sidebar')
@include('affiliate.layouts.header')
<div class="container-fluid">
    <h3>All Withdraw Request</h3>
    <table class="withdraw_table" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Requested Ammount</th>
                <th>Holder Name</th>
                <th>Account Number</th>
                <th>Ifsc Code</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <?php
                $sno =1;
        ?>
        <tbody>
            @foreach($withdraw_data as $withdraw_data)
            <tr>
                <td>{{$sno++}}</td>
                <td>{{$withdraw_data->requested_ammount}}</td>
                <td>{{$withdraw_data->holder_name}}</td>
                <td>{{$withdraw_data->account_no}}</td>
                <td>{{$withdraw_data->ifsc_code}}</td>
                @if($withdraw_data->status == 0)
                <td>Pending</td>
                @elseif($withdraw_data->status == 1)
                <td>Processing</td>
                @else   
                <td>Approved</td>
                @endif
                <td>{{$withdraw_data->created_at}}</td>
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
        $('.withdraw_table').DataTable();
    } );
   
</script>
@endsection

