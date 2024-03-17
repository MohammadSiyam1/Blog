@extends('frontend.layouts.base')
@section('title', 'Home')
@section('body')
    <div class="heading">
        <h1 class="animation my-5">All Blogs</h1>
    </div>
    <div class="container">
        <div class="blogs">
            @foreach ($blogs as $blog)
                <div style="height: 182px" class="card  my-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset($blog->Thumbnail) }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <a class="text-decoration-none text-dark" href="{{route('frontend.viewFullBlog',$blog->Slug)}}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $blog->Title }}</h5>
                                    <p class="card-text">{{$blog->Author}}</p>
                                    <p class="card-text"><small class="text-muted">{{ date('d-m-Y', strtotime($blog->created_at)) }}</small></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
