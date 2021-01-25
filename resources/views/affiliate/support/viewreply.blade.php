@extends('affiliate.layouts.master')
@section('content')
@include('affiliate.layouts.sidebar')
@include('affiliate.layouts.header')
<div class="container-fluid">
    <h3>View Support Reply</h3>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tbody>
            <tr>
                <td>Support Id</td>
                <td>{{$contact_data->support_id}}</td>
            </tr>
            <tr>
                <td>Subject</td>
                <td>{{$contact_data->subject}}</td>
            </tr>
            <tr>
                <td>Reason</td>
                <td>{{$contact_data->reason}}</td>
            </tr>

            <tr>
                <td>Message</td>
                <td>{{$contact_data->message}}</td>
            </tr>
            @if($contact_data->status==0)
            <tr>
                <td>Status</td>
                <td>Unsolved</td>
            </tr>
            @else
            <tr>
                <td>Status</td>
                <td>Solved</td>
            </tr>
            <tr>
                <td>Reply</td>
                <td>{{$contact_data->reply}}</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@include('affiliate.layouts.footer')
@endsection