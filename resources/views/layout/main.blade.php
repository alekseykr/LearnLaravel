<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{route('index')}}" class="nav-link px-2 text-{{request()->routeIs('index')?'secondary':"white"}}">{{__('header.news')}}</a></li>
                <li><a href="{{route('category')}}" class="nav-link px-2 text-{{request()->routeIs('category')?'secondary':"white"}}">{{__('header.categories')}}</a></li>
                <li><a href="{{route('pricing')}}" class="nav-link px-2 text-{{request()->routeIs('pricing')?'secondary':"white"}}">{{__('header.prices')}}</a></li>
                <li><a href="{{route('faqs')}}" class="nav-link px-2 text-{{request()->routeIs('faqs')?'secondary':"white"}}">FAQ</a></li>
                <li><a href="{{route('about')}}" class="nav-link px-2 text-{{request()->routeIs('about')?'secondary':"white"}}">{{__('header.about')}}</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search...">
            </form>

            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">Login</button>
                <button type="button" class="btn btn-warning">Sign-up</button>
            </div>
        </div>
    </div>
</header>

<section class="mt-5 mb-5" ><div class="container"> @yield("content")</div></section>

</body>
</html>
