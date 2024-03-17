<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('css')
    <style>
        .logo{}
        .dropdown-item{
            color: white;
        }
        .dropdown-item:hover{
            background: none;
            margin-left: 4px;
            color: white;
            transition: 0.3s
        }
    </style>
    @FilemanagerScript()
</head>
<body>
    <nav class="navbar animation navbar-expand-lg bg-gray">
        <div class="container w-50" style="margin: -8px auto;">
            <a class="navbar-brand" href="#"><b>Blog</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Blog
                </a>
                <ul class="dropdown-menu bg-gray" >
                  <li><a class="dropdown-item" href="{{route('blog.index')}}">All blogs</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="{{route('blog.create')}}">Create blog</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('about.view')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('contactmessages')}}">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    @yield('body')



    {{-- <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @stack('js')
</body>

</html>
