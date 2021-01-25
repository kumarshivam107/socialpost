@extends('affiliate.layouts.master')
@section('content')
@include('affiliate.layouts.sidebar')
@include('affiliate.layouts.header')
<div class="container-fluid">
    <div class="mb-3">
        <form action="{{url('affiliate/profile-pic-update')}}" method="post" enctype="multipart/form-data">@csrf
            <label for="formFile" class="form-label">Upload Profile Picture</label>
            <input class="form-control mb-3" type="file" id="profile_pic" name="profile_pic">
            <button type="submit" class="btn btn-success">Upload Profile Pic</button>
        </form>
    </div>
</div>
@include('affiliate.layouts.footer')
@endsection 