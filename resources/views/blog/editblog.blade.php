@extends('pioneers.layouts.master')
@section('content')
<title>Blog -Admission Margdarshak</title>
<link href="{{asset('public/assets/css/editor.css')}}" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
@include('pioneers.layouts.header')
<div class="container mt-5 pt-3">
    <h3>Edit Blog</h3>
    <form action="{{url('/update-blog')}}" method="post" enctype="multipart/form-data">@csrf
        <div class="form-group">
        <input type="hidden" class="form-control" id="blog_id" name="blog_id" value="{{ request()->id }}">
            <label for="blog_heading">Blog Full Heading</label>
            <input type="text" class="form-control" id="blog_tittle" name="blog_tittle" value="{{$blog_data->full_heading}}">
        </div>
        <div class="form-group">
            <label for="cardheading">Card Heading</label>
            <input type="text" class="form-control" id="card_heading" name="card_heading" value="{{$blog_data->card_heading}}">
        </div>
        <div class="form-group">
            <label for="cardheading">Sub Heading</label>
            <input type="text" class="form-control" id="sub_heading" name="sub_heading" value="{{$blog_data->subheading}}">
        </div>
        <div class="form-group">
            <label for="BlogImage">Blog Image</label><br>
            <a href="{{url('public/storage/uploads/blog/'.$blog_data->blog_image.'')}}" target="_blank"><img src="{{asset('public/storage/uploads/blog/'.$blog_data->blog_image.'')}}" class="img-fluid" style="height:150px;" alt="Blog Image"><a>
            <input type="file" class="form-control-file" id="blog_image" name="blog_image">
            <input type="hidden" id="exist-image" name="exist-image" value="{{$blog_data->blog_image}}">
        </div>    
        <div class="form-group">
            <label for="cardheading">Card Text</label>
            <input type="text" class="form-control" id="card_text" name="card_text" value="{{$blog_data->card_text}}">
        </div>
        <div class="col-lg-12 p-2">
            <label for="cardheading">Blog Text</label>
            <textarea id="txtEditor" id="blog-content" name="blog-content"></textarea> 
        </div>
        <button type="submit" class="btn btn-primary" onclick=" $('#txtEditor').val($('.Editor-editor').text());">Update Blog</button>
    </form>
</div>
<?php
$blogedittext = $blog_data->paraone_text;
?>
@include('pioneers.layouts.footer')
<script src="{{asset('public/assets/js/editor.js')}}"></script>
<script>
	$(document).ready(function() {
        $("#txtEditor").Editor();
        $("#txtEditor").Editor("setText", "<?php echo $blogedittext ?>");
    });
</script>
@endsection