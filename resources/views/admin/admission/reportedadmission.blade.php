@extends('admin.layouts.master')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
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
        font-weight: bold!important; 
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
            padding-right: 10px!important; 
            white-space: nowrap!important;
        }
        
        /*
        Label the data
        */
        td:nth-of-type(1):before { content: "Affiliate Name"; }
        td:nth-of-type(2):before { content: "Name"; }
        td:nth-of-type(3):before { content: "Father Name"; }
        td:nth-of-type(4):before { content: "College"; }
        td:nth-of-type(5):before { content: "Course"; }
        td:nth-of-type(6):before { content: "Branch"; }
        td:nth-of-type(7):before { content: "Action"; }
	
    }
</style>
@include('admin.layouts.sidebar')
@include('admin.layouts.header')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Reported Admission</h1>
    </div>
    <div class="row">
        <div class="col-lg-2 col-md-2"></div>
        <div class="col-lg-4 col-md-4 col-12">
            <select name="agent_name" id="agent_name" class="form-control mb-1">
                <option value="">All</option>
                @foreach($agent_name as $agent_name)
                <option value="{{$agent_name->id}}">{{$agent_name->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <select name="college_name" id="college_name" class="form-control mb-1">
                <option value="">All</option>
                @foreach($college_name as $college_name)
                <option value="{{$college_name->college_name}}">{{$college_name->college_name}}</option>
                @endforeach
            </select>
        </div>
        <p class="text-center">
            <button class="btn btn-success btn-sm" id="filter_data">Filter Data</button>
            <button class="btn btn-secondary btn-sm" id="reset_data">Reset Data</button></p>
        
    </div>
    <table class="table table-bordered" id="admission-table" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Affiliate Name</th>
                <th>Name</th>
                <th>Father Name</th>
                <th>College</th>
                <th>Course</th>
                <th>Branch</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>
</div>
@include('admin.layouts.footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script>
      $(document).ready(function(){
        fill_datatable();
        function fill_datatable(agent_name='',college_name=''){
            var dataTable = $('#admission-table').DataTable({
                processing:true,
                serverSide:true,
                ajax:{
                    url:"{{url('/admin/reported-admission')}}",
                    data:{agent_name:agent_name,college_name:college_name}
                },
                columns:[
                    {
                        data:'user_name',
                        name:'Affiliate Name'
                    },
                    {
                        data:'name',
                        name:'name'
                    },
                    {
                        data:'father_name',
                        name:'Father Name'
                    },
                    {
                        data:'college',
                        name:'college'
                    },
                    {
                        data:'course',
                        name:'course'
                    },
                    {
                        data:'branch',
                        name:'branch'
                    },
                    {
                        data:'action',
                        name:'action',
                        orderable:false
                    }
                    
                ],
                dom: 'lBfrtip',
                buttons: ['csv', 'excel', 'pdf'],
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
                 });
        }

        //Custom Search Data:-
        $('#filter_data').click(function(){
            var agent_name = $('#agent_name').val();
            var college_name = $('#college_name').val();
            $('#admission-table').DataTable().destroy();
            fill_datatable(agent_name,college_name);
           
        });

        //Reset Data:-
        $('#reset_data').click(function(){
            $('#admission-table').DataTable().destroy();
            fill_datatable();
        });
    });
</script>
@endsection     