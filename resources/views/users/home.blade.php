@extends('layout/user_mode')

@section('title', 'Kampus Indonesia')

@section('container')
<div class="container my-4 py-5" style="font-size: 20px; font-family: 'Quicksand', sans-serif; color: #163254;">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h2 style="font-size: 42px;">Bingung Cari Informasi</h2>
                <h2 style="font-size: 36px;">Seputar Kuliah ?</h2>
                <h2 style="font-size: 28px;">Cari Disini Aja !</h2>
                <h5>
                    <small class="text-secondary">
                        Dapatkan informasi seputar dunia perkuliahan secara<br>terupdate dari kami melalui aplikasi
                        Kampus Indonesia
                    </small>
                </h5>
            </div>
            <div class="col-md-5 mt-3">
                <img src="" style="max-width: 90%;" alt="">
            </div>
        </div>
    </div>
</div>

<div class="container my-5" style="font-size: 18px; font-family: 'Quicksand', sans-serif; color: #163254;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light shadow">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <img src="" style="max-width: 90%;" alt="">
                            <h2 style="font-size: 32px;font-weight: bold;">{{ $jml_kampus }}</h2>
                            <p>Jumlah Kampus<br>yang Terdata Saat Ini</p>
                        </div>
                        <div class="col-md">
                            <img src="" style="max-width: 90%;" alt="">
                            <h2 style="font-size: 32px;font-weight: bold;">{{ $jml_kampus }}</h2>
                            <p>Jumlah Kampus<br>yang Terdaftar di Pintara</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5 py-5"
    style="font-size: 20px; font-family: 'Quicksand', sans-serif; color: #163254; font-weight:bold">
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow"
                style="height: 350px; background-color:#327ce0; color:#dbdddf; border-radius: 10px">
                <div class="card-body align-self-center">
                    <div class="card-title">
                        <h3>Website untuk<br>Mencari Informasi<br>Seputar Kuliah</h3>
                    </div>
                    <div class="card-text">
                        <p>Dapatkan informasi seputar<br>dunia perkuliahan secara<br>terupdate dari kami melalui<br>
                            aplikasi Kampus Indonesia</p>
                    </div>
                    <a href="#" class="btn px-3"
                        style="background-color: #dbdddf;color:#163254; border-radius:10px; font-weight:bold">CARI
                        KAMPUS LAINNYA</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow" style="height: 350px; color:#163254; border-radius: 10px">
                <div class="card-body">
                    <div class="card-title">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-md">
                                <h5 style="font-weight: bold;">Rekomendasi Kampus Terbaik</h5>
                            </div>
                            <div class="col-md">
                                <p style="text-align: end;"><small>Lihat Kampus Lain</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-text">
                        @foreach($kampus as $d)
                        <div class="card" style="width: 300px;">
                            <div class="card-body">
                                <div class="card-title">
                                    {{$d->nama_univ}}
                                </div>
                                <div class="card-text" style="font-size: 18px;">
                                    <p>Akreditasi {{$d->akre_univ}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection