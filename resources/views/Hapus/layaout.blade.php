<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome/css/all.min.css') }}">
    <title>Beauteamor</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="d-flex align-items-center">
                <img src="{{ asset('images/background/logo2.png') }}" alt="Logo" width="60" height="60"
                    class="d-inline-block align-text-top">
                <a class="navbar-brand text-white ml-2" href="{{ route('admin') }}"><strong>Beauteamor</strong></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link mr-4" href="{{ route('admin') }}">HOME</a></li>
                    <li class="nav-item"><a class="nav-link mr-4" href="{{ route('produk.list') }}">PRODUK</a></li>
                    <li class="nav-item"><a class="nav-link mr-4" href="{{ route('logout') }}">LOGOUT</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer>
        <hr class="footer">
        <div class="container">
            <div class="row footer-body">
                <div class="col-md-6">
                    <div class="copyright">
                        <strong>Copyright</strong> <i class="far fa-copyright"></i> 2020 - Designed by Muthia, Mitha,
                        Jeni
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <div class="icon-contact">
                        <label class="font-weight-bold">Follow Us</label>
                        <a href="#"><img src="{{ asset('images/icon/fb.png') }}" class="mr-
