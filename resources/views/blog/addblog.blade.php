@extends('pioneers.layouts.master')
@section('content')
<title>Blog -Admission Margdarshak</title>
<link href="{{asset('public/assets/css/editor.css')}}" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@include('pioneers.layouts.header')
<div class="container mt-5 pt-5">
    <form action="{{url('/add-blog')}}" method="post" enctype="multipart/form-data">@csrf
        <div class="form-group">
            <label for="blog_heading">Blog Full Heading</label>
            <input type="text" class="form-control" id="blog_tittle" name="blog_tittle">
        </div>
        <div class="form-group">
            <label for="cardheading">Card Heading</label>
            <input type="text" class="form-control" id="card_heading" name="card_heading">
        </div>
        <div class="form-group">
            <label for="cardheading">Sub Heading</label>
            <input type="text" class="form-control" id="sub_heading" name="sub_heading">
        </div>
        <div class="form-group">
            <label for="BlogImage">File</label>
            <input type="file" class="form-control-file" id="blog_image" name="blog_image">
        </div>    
        <div class="form-group">
            <label for="cardheading">Card Text</label>
            <input type="text" class="form-control" id="card_text" name="card_text">
        </div>
        <div class="col-lg-12 p-2">
            <label for="cardheading">Full Blog Content</label>
            <textarea id="txtEditor" id="blog-content" name="blog-content"></textarea> 
        </div>
        <button type="submit" class="btn btn-primary" onclick=" $('#txtEditor').val($('.Editor-editor').text());">Create Blog</button>
    </form>
</div>
@include('pioneers.layouts.footer')
<script src="{{asset('public/assets/js/editor.js')}}"></script>
<script>
	$(document).ready(function() {
	    $("#txtEditor").Editor();
    });
</script>
@endsection