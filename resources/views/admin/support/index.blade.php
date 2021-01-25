@extends('admin.layouts.master')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

@include('admin.layouts.sidebar')
@include('admin.layouts.header')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Support Request</h1>
    </div>
    <table class="table table-bordered support_table" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>S.No</th>
                <th>User Email</th>
                <th>Subject</th>
                <th>Reason</th>
                <th>Message</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php
            $sno =1;
        ?>
        <tbody>
               @foreach($support as $support)
               <tr>
                <th>{{$sno++}}</th>
                <th>{{$support->user_email}}</th>
                <th>{{$support->subject}}</th>
                <th>{{$support->reason}}</th>
                <th>{{$support->message}}</th>
                @if($support->status==0)
                <th>Unsolved</th>
                @elseif($support->status == 1)
                <th>Replied</th>
                @else
                <th>Not Applicable</th>
                @endif
                <th><a class="btn btn-success btn-sm" href="{{url('admin/add-support-reply/'.$support->support_id.'')}}">Add Reply</a></th>
                </tr>
               @endforeach                 
        </tbody>
    </table>
</div>
@include('admin.layouts.footer')
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('.support_table').DataTable();
    } );
   
</script>
@endsection