<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>

<body style="background-color: #eef5f6;">
    <div class="container sticky-top" style="font-size: 18px; font-family: 'Quicksand', sans-serif;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand px-2" style="color: #163254;" href="/">Logo Kampus Indonesia</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item px-2">
                        <a class="nav-link" style="color: #163254;" href="/">Beranda</a>
                    </li>
                    <li class="nav-item px-2 dropdown">
                        <a class="nav-link dropdown-toggle" style="color: #163254;" href="#" id="navbarDropdownMenuLink"
                            data-toggle="dropdown">
                            Fitur
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" style="color: #163254;" href="/search/colleges">Cari
                                Kampus/Prodi</a>
                            <a class="dropdown-item" style="color: #163254;" href="/search/events">Cari
                                Seminar/Workshop</a>
                            <a class="dropdown-item" style="color: #163254;" href="/search/scholarships">Cari
                                Beasiswa</a>
                            <a class="dropdown-item" style="color: #163254;" href="/search/competitions">Cari Lomba</a>
                            <a class="dropdown-item" style="color: #163254;" href="/search/vacancies">Cari Lowongan</a>
                            <a class="dropdown-item" style="color: #163254;" href="#">UTBK</a>
                        </div>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" style="color: #163254;" href="/about">Hubungi Kami</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link" style="color: #163254;" href="/blog">Blog</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <div class="navbar-nav">
                    <a class="nav-link px-4 my-1" role="button" style="text-align: center; color:#163254;"
                        href="/profile">Halo, {{ $nama_user }}!</a>
                    <div class="divider" style="width:10px; height:auto; display:inline-block;"></div>
                </div>
            </div>
        </nav>
    </div>

    @yield('container')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

<footer>
    <div class="static-bottom" style="font-family: 'Quicksand', sans-serif; background-color: #163254; color: #eef5f6;">
        <div class="container">
            <div class="row py-4 align-items-center">
                <div class="col-md-5">
                    <h2 style="font-weight: bold; font-size: 40px">Kampus<br>Indonesia</h2>
                    <p class="pt-2">Kami merupakan perusahaan dibidang<br>informasi seputar dunia perkuliahan
                        yang<br>bisa memberikan
                        informasi terbaru<br>dan dapat dipercaya sepenuhnya.</p>
                    <p class="pt-2">PT. Inspirasi Mandiri Nusantara<br>Kec. Lowokwaru<br>Kota Malang, Jawa
                        Timur</p>
                    <a style="color: #eef5f6;" href="tel:+622134522885">Telepon: 021-3452-2885</a><br>
                    <a style="color: #eef5f6;" href="mailto:info@kampusindonesia.id">Email: info@kampusindonesia.id</a>
                </div>
                <div class="col-md-3 mt-3 align-self-start">
                    <h4 class="mt-5" style="font-weight: bold;">Perusahaan</h4>
                    <a style="color: #eef5f6;" href="/">Tentang Kami</a><br>
                    <a style="color: #eef5f6;" href="">Hubungi Kami</a><br>
                    <a style="color: #eef5f6;" href="">Karir</a><br>
                    <a style="color: #eef5f6;" href="">Feedback</a><br>
                    <a style="color: #eef5f6;" href="">Partner</a>
                </div>
                <div class="col-md-3 mt-3 align-self-start">
                    <h4 class="mt-5" style="font-weight: bold;">Fitur</h4>
                    <a style="color: #eef5f6;" href="">Cari Kampus/Prodi</a><br>
                    <a style="color: #eef5f6;" href="">Cari Seminar/Workshop</a><br>
                    <a style="color: #eef5f6;" href="">Cari Beasiswa</a><br>
                    <a style="color: #eef5f6;" href="">Cari Lomba</a><br>
                    <a style="color: #eef5f6;" href="">Cari Lowongan</a><br>
                    <a style="color: #eef5f6;" href="">UTBK</a>
                </div>
                <div class="col-md-1 mt-3 align-self-start">
                    <h4 class="mt-5" style="font-weight: bold;">Lainnya</h4>
                    <a style="color: #eef5f6;" href="">Bantuan</a><br>
                    <a style="color: #eef5f6;" href="">Blog</a>
                </div>
            </div>
            <h6 class="pb-4 my-1" style="text-align: center;">2020 - Kampus Indonesia</h6>
        </div>
    </div>
</footer>

</html>