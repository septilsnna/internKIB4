@extends('layout/main')

@section('title', 'Manage Events | Kampus Indonesia')

@section('container')
<div class="container my-3" style="font-family: 'Quicksand', sans-serif; color: #163254;">
    <div class="row">
        <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#collegesAddModal">
                Tambah Data Acara
            </button>

            <!-- Modal -->
            <div class="modal fade" id="collegesAddModal" tabindex="-1" role="dialog"
                aria-labelledby="collegesAddModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="collegesAddModalTitle">Tambah Data Acara</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/admin/add_events">
                                @csrf
                                <div class="form-group row align-items-center">
                                    <label for="judul_ev" class="col-sm-2 col-form-label">Judul Acara</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="judul_ev" name="judul_ev">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="jenis_ev" class="col-sm-2 col-form-label">Jenis Acara</label>
                                    <div class="col-sm-10">
                                        <select id="jenis_ev" name="jenis_ev" class="form-control">
                                            <option selected>Seminar</option>
                                            <option>Workshop</option>
                                            <option>Festival</option>
                                            <option>Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="tanggal_ev" class="col-sm-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="tanggal_ev" name="tanggal_ev">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="waktu_ev" class="col-sm-2 col-form-label">Waktu</label>
                                    <div class="col-sm-10">
                                        <input type="time" class="form-control" id="waktu_ev" name="waktu_ev">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="lokasi_ev" class="col-sm-2 col-form-label">Lokasi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="lokasi_ev" name="lokasi_ev">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="biaya_ev" class="col-sm-2 col-form-label">Biaya</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="biaya_ev" name="biaya_ev">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="pamflet" class="col-sm-2 col-form-label">Pamflet</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="pamflet" name="pamflet">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button submit" class="btn btn-success">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul Acara</th>
                        <th scope="col">Jenis Acara</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Biaya</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $d)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $d->judul_ev}}</td>
                        <td>{{ $d->jenis_ev}}</td>
                        <td>{{ $d->tanggal_ev}}</td>
                        <td>{{ $d->waktu_ev}}</td>
                        <td>{{ $d->lokasi_ev}}</td>
                        <td>{{ $d->biaya_ev}}</td>
                        <td>{{ $d->deskripsi}}</td>
                        <td>
                            <div class="row">
                                <div class="col-md">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#collegesEditModal{{ $d->id }}">
                                        Ubah
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="collegesEditModal{{ $d->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="collegesEditModal{{ $d->id }}Title"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="collegesEditModal{{ $d->id }}Title">Ubah
                                                        Data
                                                        {{ $d->judul_ev }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/admin/update_events/{{ $d->id }}">
                                                        @csrf
                                                        <div class="form-group row align-items-center">
                                                            <label for="judul_ev" class="col-sm-2 col-form-label">Judul
                                                                Acara</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="judul_ev"
                                                                    name="judul_ev" value="{{ $d->judul_ev}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row align-items-center">
                                                            <label for="jenis_ev" class="col-sm-2 col-form-label">Jenis
                                                                Acara</label>
                                                            <div class="col-sm-10">
                                                                <select id="jenis_ev" name="jenis_ev"
                                                                    class="form-control">
                                                                    <option selected>Seminar</option>
                                                                    <option>Workshop</option>
                                                                    <option>Festival</option>
                                                                    <option>Lainnya</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row align-items-center">
                                                            <label for="tanggal_ev"
                                                                class="col-sm-2 col-form-label">Tanggal</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" class="form-control" id="tanggal_ev"
                                                                    name="tanggal_ev" value="{{ $d->tanggal_ev}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row align-items-center">
                                                            <label for="waktu_ev"
                                                                class="col-sm-2 col-form-label">Waktu</label>
                                                            <div class="col-sm-10">
                                                                <input type="time" class="form-control" id="waktu_ev"
                                                                    name="waktu_ev" value="{{ $d->waktu_ev}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row align-items-center">
                                                            <label for="lokasi_ev"
                                                                class="col-sm-2 col-form-label">Lokasi</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="lokasi_ev"
                                                                    name="lokasi_ev" value="{{ $d->lokasi_ev}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row align-items-center">
                                                            <label for="biaya_ev"
                                                                class="col-sm-2 col-form-label">Biaya</label>
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" id="biaya_ev"
                                                                    name="biaya_ev" value="{{ $d->biaya_ev}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row align-items-center">
                                                            <label for="deskripsi"
                                                                class="col-sm-2 col-form-label">Deskripsi</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="deskripsi"
                                                                    name="deskripsi" value="{{ $d->deskripsi}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row align-items-center">
                                                            <label for="pamflet"
                                                                class="col-sm-2 col-form-label">Pamflet</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="pamflet"
                                                                    name="pamflet" value="{{ $d->pamflet}}">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="button submit"
                                                                class="btn btn-primary">Update</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#collegesDeleteModal{{ $d->id }}">
                                        Hapus
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="collegesDeleteModal{{ $d->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="collegesDeleteModal{{ $d->id }}Title"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="collegesDeleteModal{{ $d->id }}Title">
                                                        Hapus Data
                                                        {{ $d->judul_ev }}?</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/admin/delete_events/{{ $d->id }}">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="button submit"
                                                                class="btn btn-danger">Delete</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection