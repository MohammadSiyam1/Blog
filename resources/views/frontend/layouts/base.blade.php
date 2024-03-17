<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <nav class="navbar animation navbar-expand-lg bg-gray">
        <div class="container" style="margin: -8px auto;">
          <a class="navbar-brand " href="{{route('home')}}">Blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('frontend.blogs')}}">Blogs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('frontend.contactUs')}}">Contact</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      @yield('body')


      {{-- Footer part start --}}
    <div class="footer bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <p class="mb-0 text-center text-white fs-6 py-2">All right reserved by &copy;Blog</p>
                </div>
                <div class="text-center col-lg-6 col-md-6 col-12">
                    <a href="#"><span><i class="fa-brands fa-square-facebook"></i></span></a>
                    <a href="#"><span><i class="fa-brands fa-instagram"></i></span></a>
                    <a href="#"><span><i class="fa-brands fa-square-twitter"></i></span></a>
                    <a href="#"><span><i class="fa-brands fa-linkedin"></i></span></a>
                </div>
            </div>
        </div>
    </div>
    {{-- Footer part end --}}
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
