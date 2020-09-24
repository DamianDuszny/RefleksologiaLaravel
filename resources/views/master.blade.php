<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Laravel Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/blog-post.css')}}" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand logo" href="/">Refleksologia</a>
        <a class="navbar-brand" href="/post/slug">Czym jest refleksologia?</a>
        <a class="navbar-brand" href="/kontakt">Kontakt</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @if(!auth()->user())
                    <li class="nav-item active">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                @endif

                    @can("isAdmin")
                        <li class="nav-item active">
                            <a class="nav-link" href="/admin">Admin</a>
                        </li>
                    @endcan
                    @auth
                <li class="nav-item active">
                    <a class="nav-link" href="/user/{{auth()->user()->id}}">Konto</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/logout">Wyloguj</a>
                </li>
                    @endauth

            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    @yield('content')

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright © TechJBlog Laravel Blog 2019</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('js/jquery/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
