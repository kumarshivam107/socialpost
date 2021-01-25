@extends('affiliate.layouts.master')
@section('content')
@include('affiliate.layouts.sidebar')
@include('affiliate.layouts.header')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profile Update</h1>
    </div>
    <div class="mb-5">
        <a href="{{url('/affiliate/profile-pic-update')}}" class="btn btn-success">Profile Picture Update</a>
    </div>
</div>
@include('affiliate.layouts.footer')
@endsection 