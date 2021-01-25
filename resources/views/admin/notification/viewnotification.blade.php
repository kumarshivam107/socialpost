@extends('admin.layouts.master')
@section('content')
@include('admin.layouts.sidebar')
@include('admin.layouts.header')
<div class="container-fluid">
    <h3>View Notification</h3>
    <div class="col-lg-8 col-md-10 col-12">
        @foreach(Auth::user()->notifications as $notification)
            <a class="dropdown-item d-flex align-items-center" href="#">
                <img class="rounded-circle mr-4" src="{{asset('public/adminside/img/undraw_profile_1.svg')}}" alt="" style="height:70px;">
                <div class="status-indicator bg-success"></div>
                <div class="font-weight-bold">
                    <div class="text-truncate">{{$notification->data['letter']['title']}}</div>
                    <div class="small text-gray-500">{{$notification->data['letter']['title']}}</div>
                </div>
            </a>
        @endforeach 
    </div>
</div>
@include('admin.layouts.footer')
@endsection