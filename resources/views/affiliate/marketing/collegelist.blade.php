@extends('affiliate.layouts.master')
@section('content')
@include('affiliate.layouts.sidebar')
@include('affiliate.layouts.header')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">College List</h1>
    </div>
    <table class="table table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>College Name</th>
                <th>College City</th>
                <th>State</th>
                <th>Accrediation</th>
            </tr>
        </thead>
        <?php
            $sno =1;
        ?>
        <tbody>
         @foreach($collegelist as $collegelist)
            <tr>
                <td>{{$sno++}}</td>
                <td>{{$collegelist->college_name}}</td>
                <td>{{$collegelist->college_city}}</td>
                <td>{{$collegelist->college_state}}</td>
                <td>{{$collegelist->course}}</td>
            </tr>
         @endforeach
        </tbody>
    </table>
</div>

@include('affiliate.layouts.footer')
@endsection 