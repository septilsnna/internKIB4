@extends('layout/main')

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
                <img src="{{ url('/storage/18915856.jpg') }}" style="max-width: 90%;" alt="">
            </div>
        </div>
    </div>
</div>

<div class="container my-5" style="font-size: 18px; font-family: 'Quicksand', sans-serif; color: #163254;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card bg-light shadow">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{ url('/storage/2399.jpg') }}" style="max-width: 100%;" alt="">
                        </div>
                        <div class="col-md-4">
                            <h2 style="font-size: 32px;font-weight: bold;">{{ $jml_kampus }}</h2>
                            <p>Jumlah Kampus<br>yang Terdata Saat Ini</p>
                        </div>
                        <div class="col-md-2">
                            <img src="{{ url('/storage/2399.jpg') }}" style="max-width: 100%;" alt="">
                        </div>
                        <div class="col-md-4">
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
                    <a href="/search/colleges" class="btn btn-block"
                        style="background-color: #dbdddf;color:#163254; border-radius:10px; font-weight:bold">CARI
                        KAMPUS LAINNYA</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow" style="height: 350px; color:#163254; border-radius: 10px">
                <div class="card-body">
                    <div class="card-title">
                        <h5 style="font-weight: bold;">Rekomendasi Kampus Terbaik</h5>
                    </div>
                    <div class="card-text">
                        <div class="row">
                            @foreach($kampus as $d)
                            <div class="col-md">
                                <div class="card" style="height: 270px; border-radius: 10px; border-color:#163254">
                                    <img src="{{ url('/storage/logos/'.$d->gambar) }}"
                                        class="card-img-top pt-2 align-self-center" style="max-width: 40%;" alt="">
                                    <div class="card-body">
                                        <p class="card-title" style="height: 40px; font-size: 18px;">
                                            {{$d->nama_univ}}
                                        </p>
                                        <p><small class="card-text" style="color: gray;">Akreditasi:</small>
                                            {{$d->akre_univ}}</p>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-block"
                                            style="background-color: #163254; color:#dbdddf" data-toggle="modal"
                                            data-target="#info{{ $d->id }}Modal">
                                            Lihat
                                            Detail
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="info{{ $d->id }}Modal" tabindex="-1" role="dialog"
                                            aria-labelledby="info{{ $d->id }}ModalTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="info{{ $d->id }}ModalTitle">
                                                            {{ $d->nama_univ}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="{{ url('/storage/logos/'.$d->gambar) }}"
                                                            class="ml-5 py-2" style="max-width: 40%;" alt="">
                                                        <div class="row my-3 mx-1">
                                                            <table class="table table-hover">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="font-size: 16px; color:gray">
                                                                            Akreditasi</td>
                                                                        <td>{{ $d->akre_univ }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="font-size: 16px; color:gray">
                                                                            Status Kampus</td>
                                                                        <td>{{ $d->jenis_univ }} {{ $d->status_univ }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="font-size: 16px; color:gray">
                                                                            Jumlah Fakultas</td>
                                                                        <td>{{ $d->jml_fak }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="font-size: 16px; color:gray">
                                                                            Jumlah Prodi</td>
                                                                        <td>{{ $d->jml_prodi }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="font-size: 16px; color:gray">
                                                                            Lokasi</td>
                                                                        <td>{{ $d->prov_univ }}</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <p><small class="card-text text-center"
                                                                    style="color: gray;">{{$d->deskripsi}}</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
</div>

<div class="container my-5 mt-3 pb-5"
    style="font-size: 20px; font-family: 'Quicksand', sans-serif; color: #163254; font-weight:bold">
    <h3 class="text-center my-3">Lokasi Kampus Terpopuler</h3>
    <div class="row">
        <div class="col-md-3 mt-3">
            <div class="container">
                <a href="" class="py-4 px-4"
                    style="font-size:24px; color: #163254; position: absolute; z-index: 2;">Jakarta</a>
                <div style="display: inline-block; position: relative; z-index: 1;">
                    <img style="width: 100%; border-radius: 5px;" src="{{ url('/storage/city/jakarta1.jpg') }}">
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="container">
                <a href="" class="py-4 px-4"
                    style="font-size:24px; color: #163254; position: absolute; z-index: 2;">Surabaya</a>
                <div style="display: inline-block; position: relative; z-index: 1;">
                    <img style="width: 100%; border-radius: 5px;" src="{{ url('/storage/city/surabaya.jpg') }}">
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="container">
                <a href="" class="py-4 px-4"
                    style="font-size:24px; color: #163254; position: absolute; z-index: 2;">Yogyakarta</a>
                <div style="display: inline-block; position: relative; z-index: 1;">
                    <img style="width: 100%; border-radius: 5px;" src="{{ url('/storage/city/yogyakarta.jpg') }}">
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="container">
                <a href="" class="py-4 px-4"
                    style="font-size:24px; color: #163254; position: absolute; z-index: 2;">Bandung</a>
                <div style="display: inline-block; position: relative; z-index: 1;">
                    <img style="width: 100%; border-radius: 5px;" src="{{ url('/storage/city/bandung1.jpg') }}">
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="container">
                <a href="" class="py-4 px-4"
                    style="font-size:24px; color: #163254; position: absolute; z-index: 2;">Medan</a>
                <div style="display: inline-block; position: relative; z-index: 1;">
                    <img style="width: 100%; border-radius: 5px;" src="{{ url('/storage/city/medan.jpg') }}">
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="container">
                <a href="" class="py-4 px-4"
                    style="font-size:24px; color: #163254; position: absolute; z-index: 2;">Semarang</a>
                <div style="display: inline-block; position: relative; z-index: 1;">
                    <img style="width: 100%; border-radius: 5px;" src="{{ url('/storage/city/semarang.jpg') }}">
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="container">
                <a href="" class="py-4 px-4"
                    style="font-size:24px; color: #163254; position: absolute; z-index: 2;">Malang</a>
                <div style="display: inline-block; position: relative; z-index: 1;">
                    <img style="width: 100%; border-radius: 5px;" src="{{ url('/storage/city/malang.jpg') }}">
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-3">
            <div class="container">
                <a href="" class="py-4 px-4"
                    style="font-size:24px; color: #163254; position: absolute; z-index: 2;">Bali</a>
                <div style="display: inline-block; position: relative; z-index: 1;">
                    <img style="width: 100%; border-radius: 5px;" src="{{ url('/storage/city/bali.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5 mt-3 pb-5"
    style="font-size: 20px; font-family: 'Quicksand', sans-serif; color: #163254; font-weight:bold">
    <h3 class="text-center my-3">Fitur yang Tersedia di Kampus Indonesia</h3>
    <div class="row">
        <div class="col-md-4 mt-3">
            <div class="card shadow" style="height: 300px; border-radius: 10px;">
                <div class="card-body">
                    <img class="img-card-top" style="width: 100%; border-radius: 5px;"
                        src="{{ url('/storage/services/colleges.jpg') }}">
                    <div class="card-body">
                        <a href="" style="color:#163254">Kampus</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card shadow" style="height: 300px; border-radius: 10px;">
                <div class="card-body">
                    <img class="img-card-top" style="width: 100%; border-radius: 5px;"
                        src="{{ url('/storage/services/scholarships.jpg') }}">
                    <div class="card-body">
                        <a href="" style="color:#163254">Beasiswa</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card shadow" style="height: 300px; border-radius: 10px;">
                <div class="card-body">
                    <img class="img-card-top" style="width: 100%; border-radius: 5px;"
                        src="{{ url('/storage/services/events.jpg') }}">
                    <div class="card-body">
                        <a href="" style="color:#163254">Seminar/Workshop</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card shadow" style="height: 300px; border-radius: 10px;">
                <div class="card-body">
                    <img class="img-card-top" style="width: 100%; border-radius: 5px;"
                        src="{{ url('/storage/services/competitions.jpg') }}">
                    <div class="card-body">
                        <a href="" style="color:#163254">Lomba</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card shadow" style="height: 300px; border-radius: 10px;">
                <div class="card-body">
                    <img class="img-card-top" style="width: 100%; border-radius: 5px;"
                        src="{{ url('/storage/services/vacancies.jpg') }}">
                    <div class="card-body">
                        <a href="" style="color:#163254">Lowongan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card shadow" style="height: 300px; border-radius: 10px;">
                <div class="card-body">
                    <img class="img-card-top" style="width: 100%; border-radius: 5px;"
                        src="{{ url('/storage/services/utbk.jpg') }}">
                    <div class="card-body">
                        <a href="" style="color:#163254">UTBK</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection