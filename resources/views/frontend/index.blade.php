@extends('frontend.layouts.base')
@section('title', 'Home')
@section('body')
    {{-- Banner part start --}}
    <div class="banner-section img-fluid">
        <div class="banner animation">
            <p class="animation">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nulla recusandae explicabo illo saepe
                aliquid fuga accusamus quia est voluptate.</p>
        </div>
    </div>
    {{-- Banner part end --}}

    {{-- Latest blog part start --}}
    <div class="latest-post container div-section">
        <div class="heading">
            <h1 class="animation">Latest Blogs</h1>
        </div>
        <div class="posts animation">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($blogs as $blog)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset($blog->Thumbnail) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$blog->Title}}</h5>
                            <p class="card-text">{{$blog->Author}}</p>
                            <p class="card-text"><small class="text-muted">{{ date('d-m-Y', strtotime($blog->created_at)) }}</small></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    {{-- Latest blog part end --}}

    {{-- About Us part start --}}
    <div class="div-section about-us bg-light-gray animation">
        <div class="container">
            <div class="heading">
                <h1 class="animation">About Us</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="{{asset('image/about-us.png')}}" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit et commodi suscipit quo excepturi hic qui minus unde temporibus assumenda possimus debitis distinctio inventore, beatae ducimus iste accusantium nulla, at ratione aliquid eius nesciunt! Accusamus debitis doloremque nesciunt dicta facere et, perferendis accusantium voluptates delectus soluta fuga eius deserunt quod suscipit voluptate vel distinctio. Molestiae tempora, adipisci doloremque hic nam iure eveniet magnam necessitatibus? Tenetur aperiam necessitatibus labore quos repudiandae, recusandae incidunt excepturi perferendis rem! Molestias, repudiandae distinctio excepturi a molestiae incidunt dicta adipisci. Ipsum, qui? Aperiam error magni ullam laudantium? Ab quaerat consequatur sequi, velit saepe laborum omnis impedit accusamus? Expedita libero magni quasi officia doloremque! Quam non iure ex deleniti placeat impedit optio fugit accusantium veritatis, doloribus distinctio vero dolorem nulla tempore dignissimos neque minus perspiciatis ipsam qui facere corporis consequuntur a? Expedita quos cum.</p>
                    <a class="btn btn-outline-secondary" href="">Read More  <span><i class="fa-solid fa-arrow-right fa-beat"></i></span></a>
                </div>
            </div>
        </div>
    </div>
    {{-- About Us part end --}}
@endsection
