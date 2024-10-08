<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Beauteamor</title>

    <style>
        /* Menambahkan warna hitam untuk header */
        h1,
        h3 {
            color: black;
        }

        /* Gaya untuk jumbotron */
        .jumbotron {
            background-image: url({{ asset('images/background/bg14.jpg') }});
            background-size: cover;
            height: 350px;
            width: 100%;
            color: white;
        }
    </style>

</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="d-flex align-items-center">
                <img src="{{ asset('images/background/logo2.png') }}" alt="Logo" width="60" height="60"
                    class="d-inline-block align-text-top">
                <a class="navbar-brand text-white ml-2" href="admin.php"><strong>Beauteamor</strong></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link mr-4 text-white" href="/admin/home">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-4 text-white" href="{{ route('produk.list') }}">PRODUK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-4 text-white" href="{{ route('pemesanan.index') }}">PESANAN</a>
                    </li>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-4"><span class="font-weight-bold text-white">BEAUTEAMOR</span></h1>
            <hr>
            <p class="lead font-weight-bold">Selamat Bekerja<br>
                Enjoy Everyday</p>
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Menu -->
    <div class="container">
        <div class="judul text-center mt-5">
            <h3 class="font-weight-bold">BEAUTEAMOR</h3>
            <h5>Jl.Antara, Ujung
                <br>Buka Jam <strong>08:00 - 23:00</strong>
            </h5>
        </div>

        <div class="row mb-5 mt-5 ">
            <div class="col-md-6 d-flex justify-content-end">
                <div class="card bg-dark text-white border-light">
                    <img src="{{ asset('images/background/tes.jpg') }}" class="card-img" alt="Lihat Daftar Menu">
                    <div class="card-img-overlay mt-5 text-center">
                        <a href="{{ route('produk.list') }}" class="btn btn-primary">LIHAT PRODUK</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 d-flex justify-content-start">
                <div class="card bg-dark text-white border-light">
                    <img src="{{ asset('images/background/menu7.jpg') }}" class="card-img" alt="Lihat Pesanan">
                    <div class="card-img-overlay mt-5 text-center">
                        <a href="{{ route('pemesanan.index') }}" class="btn btn-primary">LIHAT PESANAN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Menu -->

    <!-- Awal Footer -->
    <hr class="footer">
    <div class="container pt-5 pb-5">
        <div class="row footer-body">
            <div class="col-md-6">
                <div class="copyright">
                    <strong>Copyright</strong> <i class="far fa-copyright"></i> 2024 -Designed by Muthia, Mitha, Jeni
                </div>
            </div>

            <!-- Akhir Footer -->
            <div class="col-md-6 d-flex justify-content-end">
                <div class="icon-contact">
                    <label class="font-weight-bold">Follow Us </label>
                    <a href="#"><img src="{{ asset('images/icon/fb.png') }}" class="mr-3 ml-4"
                            data-toggle="tooltip" title="Facebook"></a>
                    <a href="#"><img src="{{ asset('images/icon/ig.png') }}" class="mr-3" data-toggle="tooltip"
                            title="Instagram"></a>
                    <a href="#"><img src="{{ asset('images/icon/twitter.png') }}" class=""
                            data-toggle="tooltip" title="Twitter"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
</body>

</html>
