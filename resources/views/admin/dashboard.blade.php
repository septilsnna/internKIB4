@extends('layout/main')

@section('title', 'Kampus Indonesia')

@section('container')
<div class="container my-3 mb-5" style="font-size: 18px; font-family: 'Quicksand', sans-serif; color: #163254;">
    <h2>Statistics</h2>
    <div class="row justify-content-center">
        <div class="col-md-6 my-3">
            <div class="card bg-light shadow">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <img src="" style="max-width: 90%;" alt="">
                            <h2 style="font-size: 32px;font-weight: bold;">1024</h2>
                            <p>Jumlah Kampus<br>yang Terdata Saat Ini</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-3">
            <div class="card bg-light shadow">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <img src="" style="max-width: 90%;" alt="">
                            <h2 style="font-size: 32px;font-weight: bold;">1024</h2>
                            <p>Jumlah Kampus<br>yang Terdata Saat Ini</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-3 mb-5" style="font-size: 18px; font-family: 'Quicksand', sans-serif; color: #163254;">
    <h2>Databases</h2>
    <div class="row justify-content-center">
        <div class="col-md-6 my-3">
            <div class="card bg-light shadow">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md">
                            <img src="" style="max-width: 90%;" alt="">
                            <h2 style="font-size: 32px;font-weight: bold;">{{ $jml_kampus }}</h2>
                            <h4>Kampus</h4>
                        </div>
                        <div class="col-md-3">
                            <a href="/admin/manage_colleges" class="btn px-4 py-2"
                                style="background-color: #163254; color: #eef5f6">Manage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-3">
            <div class="card bg-light shadow">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md">
                            <img src="" style="max-width: 90%;" alt="">
                            <h2 style="font-size: 32px;font-weight: bold;">{{ $jml_event }}</h2>
                            <h4>Seminar/Workshop</h4>
                        </div>
                        <div class="col-md-3">
                            <a href="/admin/manage_events" class="btn px-4 py-2"
                                style="background-color: #163254; color: #eef5f6">Manage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-3">
            <div class="card bg-light shadow">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md">
                            <img src="" style="max-width: 90%;" alt="">
                            <h2 style="font-size: 32px;font-weight: bold;">{{ $jml_beasiswa }}</h2>
                            <h4>Beasiswa</h4>
                        </div>
                        <div class="col-md-3">
                            <a href="/admin/manage_scholarships" class="btn px-4 py-2"
                                style="background-color: #163254; color: #eef5f6">Manage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-3">
            <div class="card bg-light shadow">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md">
                            <img src="" style="max-width: 90%;" alt="">
                            <h2 style="font-size: 32px;font-weight: bold;">{{ $jml_lomba }}</h2>
                            <h4>Lomba</h4>
                        </div>
                        <div class="col-md-3">
                            <a href="/admin/manage_competitions" class="btn px-4 py-2"
                                style="background-color: #163254; color: #eef5f6">Manage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-3">
            <div class="card bg-light shadow">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md">
                            <img src="" style="max-width: 90%;" alt="">
                            <h2 style="font-size: 32px;font-weight: bold;">{{ $jml_loker }}</h2>
                            <h4>Lowongan Kerja</h4>
                        </div>
                        <div class="col-md-3">
                            <a href="/admin/manage_vacancies" class="btn px-4 py-2"
                                style="background-color: #163254; color: #eef5f6">Manage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 my-3">
            <div class="card bg-light shadow">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-md">
                            <img src="" style="max-width: 90%;" alt="">
                            <h2 style="font-size: 32px;font-weight: bold;">{{ $jml_blog }}</h2>
                            <h4>Blog Artikel</h4>
                        </div>
                        <div class="col-md-3">
                            <a href="" class="btn px-4 py-2"
                                style="background-color: #163254; color: #eef5f6">Manage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection