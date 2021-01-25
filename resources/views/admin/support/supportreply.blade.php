@extends('admin.layouts.master')
@section('content')
@include('admin.layouts.sidebar')
@include('admin.layouts.header')
<div class="container-fluid">
    <h3>View Support Summary</h3>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tbody>
            <tr>
                <th>Support ID</th>
                <td>{{$message_data->support_id}}</td>
            </tr>
            <tr>
                <th>User Email</th>
                <td>{{$message_data->user_email}}</td>
            </tr>                
            <tr>
                <th>Subject</th>
                <td>{{$message_data->subject}}</td>
            </tr>                
            <tr>
                <th>Reason</th>
                <td>{{$message_data->reason}}</td>
            </tr>                
            <tr>
                <th>Message</th>
                <td>{{$message_data->message}}</td>
            </tr>                
            <tr>
                <th>Status</th>
                @if($message_data->status == 0)
                <th>Unsolved</th>
                @else
                <th>Solved</th>
                @endif
            </tr>  
            <tr>
                <th>Reply</th>
                <td>
                <form action="{{url('/admin/add-reply')}}" method="post">@csrf
                    <input type="hidden" name="support_id" id="support_id" value="{{$message_data->support_id}}">
                    <div class="mb-3">
                        <textarea class="form-control" id="reply" name="reply" rows="3" placeholder="Enter Your Reply"></textarea>
                    </div>
                    <button class="btn btn-success" type="submit">Submit</button>
                </form>
                </td>
            </tr>                              
        </tbody>
    </table>
</div>
@include('admin.layouts.footer')
@endsection