@extends('pioneers.layouts.master')
@section('content')
<title>Blog -Admission Margdarshak</title>
@include('pioneers.layouts.header')
<div class="container mt-5 pt-3">
    <h3>View Blog</h3>
        <table class="table table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Blog Tittle</th>
                    <th>Blog Sub-Tittle</th>
                    <th>Action</th>
                </tr>
             </thead>
             <?php
                $sno =1;
             ?>
            <tbody>
                @foreach($blog_data as $blog_data)
                <tr>
                    <td>{{$sno++}}</td>
                    <td>{{$blog_data->full_heading}}</td>
                    <td>Edinburgh</td>
                    <td><a class="btn btn-success btn-sm mr-2 mt-2" href="{{url('/edit-blog-details/'.$blog_data->blog_id.'')}}">Edit Blog Details</a><a class="btn btn-danger btn-sm mt-2" href="{{url('/delete-blog/'.$blog_data->blog_id.'')}}">Delete Blog</a></td>
                </tr> 
                @endforeach            
            </tbody>
        </table>
</div>
@include('pioneers.layouts.footer')
@endsection