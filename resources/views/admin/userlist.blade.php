@extends('admin.layouts.master')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
<style>
table { 
  width: 100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
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
  border-collapse: collapse; 
}
	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}
	
	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
	}
	
	/*
	Label the data
	*/
	td:nth-of-type(1):before { content: "S.No."; }
	td:nth-of-type(2):before { content: "Name"; }
	td:nth-of-type(3):before { content: "Email"; }
	td:nth-of-type(4):before { content: "Mobile"; }
	td:nth-of-type(5):before { content: "User Type"; }
	td:nth-of-type(6):before { content: "Id Created"; }
	td:nth-of-type(7):before { content: "Action"; }
	
}
</style>
@section('content')
@include('admin.layouts.sidebar')
@include('admin.layouts.header')
  <!-- Begin Page Content -->
  <div class="container-fluid">
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Users List</h6>
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
    <div class="card-body">
        <div class="table-responsive">
            <table class="unapprove_table" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>User Type</th>
                        <th>Id Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sno =1;
                ?>
                @foreach($alluser as $alluser)
                    <tr>
                        <td>{{$sno++}}</td>
                        <td>{{$alluser->name}}</td>
                        <td>{{$alluser->email}}</td>
                        <td>61</td>
                        @if($alluser->id_type==0)
                        <td>Administrator</td>
                        @elseif($alluser->id_type==1)
                        <td>Affiliate</td>
                        @elseif($alluser->id_type==2)
                        <td>Employee</td>
                        @else
                        <td>NA</td>
                        @endif
                        <td>{{$alluser->created_at->format('d/m/y')}}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{url('admin/deleteuser/'.$alluser->id.'')}}">Delete</a>
                           <a class="btn btn-danger btn-sm" href="{{url('admin/blockuser/'.$alluser->id.'')}}">Block</a> 
                        </td>
                    </tr>
                @endforeach

                   
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

@include('admin.layouts.footer')
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script>
     if ($(window).width() < 768) {
        $('table').removeClass('unapprove_table');
    }
    $(document).ready( function () {
        $('.unapprove_table').DataTable();
    } );
   
</script>
@endsection     