@extends('frontend.layouts.base')
@section('title', 'Home')
@section('body')
<div class="container">
    <h3 class="my-5">{{$blog->Title}}</h3>
    <p class="fw-normal">{!! $blog->Body !!}</p>
    <hr>
    <h6 class="mt-5">Author: {{$blog->Author}}</h6>
    <p>Posted on: {{date('d-m-Y', strtotime($blog->created_at))}}</p>
</div>
@endsection
