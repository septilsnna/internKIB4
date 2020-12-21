@extends('layout/admin_mode')

@section('title', 'Kampus Indonesia')

@section('container')
<div class="row mx-2 mt-4" style="font-size: 18px; font-family: 'Quicksand', sans-serif; color: #163254;">
    <div class="col-md-2">
        <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-dashboard-list" data-toggle="list"
                href="#list-dashboard" role="tab" aria-controls="dashboard">Dashboard</a>
            <a class="list-group-item list-group-item-action" id="list-database-list" data-toggle="list"
                href="#list-database" role="tab" aria-controls="database">Databases</a>
            <a class="list-group-item list-group-item-action" id="list-users-list" data-toggle="list" href="#list-users"
                role="tab" aria-controls="users">Users</a>
            <a class="list-group-item list-group-item-action" id="list-admin-list" data-toggle="list" href="#list-admin"
                role="tab" aria-controls="admin">Admin</a>
        </div>
    </div>
    <div class="col-md-10">
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-dashboard" role="tabpanel"
                aria-labelledby="list-dashboard-list">
                <div class="row justify-content-between">
                    <div class="col-md-4">
                        <h2>Statistics</h2>
                    </div>
                </div>
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
            <div class="tab-pane fade" id="list-database" role="tabpanel" aria-labelledby="list-database-list">
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
                                        <a href="/admin/manage_blogs" class="btn px-4 py-2"
                                            style="background-color: #163254; color: #eef5f6">Manage</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="list-users" role="tabpanel" aria-labelledby="list-users-list">
                <h2>Daftar Pengguna</h2>
                <div class="row my-3 mx-1">
                    <table class="table table-hover">
                        <thead>
                            <tr style="font-size: 16px; color:gray">
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Bergabung</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><?= $d['name']; ?></td>
                                <td><?= $d['email']; ?></td>
                                <td><?= $d['created_at']; ?></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="list-admin" role="tabpanel" aria-labelledby="list-admin-list">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <h3 style="font-weight: bold; font-size: 28px;">
                            Admin Kampus Indonesia</h3>
                        <h4>Akang Iron Man</h4>
                        <h6>akangironman@marvel.com</h6>
                    </div>
                    <div class="col-md-3">
                        <a href="/logout" class="btn px-4 my-4"
                            style="background-color: #163254; color: #eef5f6; border-radius: 20px">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection