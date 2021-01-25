@extends('admin.layouts.master')
@section('content')
@include('admin.layouts.sidebar')
@include('admin.layouts.header')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Admission Details</h1>
    </div>
    <table class="table table-bordered" id="bona_data" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>{{$student_data->name}}</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Father Name</th>
                <th>{{$student_data->father_name}}</th>
            </tr>
            <tr>
                <th>College</th>
                <th>{{$student_data->college}}</th>
            </tr>
            <tr>
                <th>Course</th>
                <th>{{$student_data->course}}</th>
            </tr>
            <tr>
                <th>Branch</th>
                <th>{{$student_data->branch}}</th>
            </tr>
            
            <tr>
                <th>10th Marksheet</th>
                <th><a class="btn btn-success btn-sm" href="{{url('public/storage/uploads/tenthmarksheet/'.$student_data->tenthmarksheet.'')}}">Click Here</a></th>
            </tr>
            <tr>
                <th>12th Marksheet</th>
                @if($student_data->twelvemarksheet != 'na')
                <th><a class="btn btn-success btn-sm" href="{{url('public/storage/uploads/twelvemarksheet/'.$student_data->twelvemarksheet.'')}}">Click Here</a></th>
                @else
                <th>Not Applicable</th>
                @endif
            </tr>
            <tr>
                <th>Graduation Marksheet</th>
                @if($student_data->grad_marksheet != 'na')
                <th><a class="btn btn-success btn-sm" href="{{url('public/storage/uploads/grad_marksheet/'.$student_data->grad_marksheet.'')}}">Click Here</a></th>
                @else
                <th>Not Applicable</th>
                @endif
            </tr>
            <tr>
                <th>Aadhar Card</th>
                @if($student_data->addhar_card != 'na')
                <th><a class="btn btn-success btn-sm" href="{{url('public/storage/uploads/aadhar_card/'.$student_data->addhar_card.'')}}">Click Here</a></th>
                @else
                <th>Not Applicable</th>
                @endif
            </tr>
        </tbody>
    </table>
    <div>
        <button class="btn btn-success btn-block">Approve Admission</th>
    </div>
</div>
@include('admin.layouts.footer')
@endsection     