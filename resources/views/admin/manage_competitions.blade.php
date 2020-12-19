@extends('layout/main')

@section('title', 'Manage Competitions | Kampus Indonesia')

@section('container')
<div class="container my-3" style="font-family: 'Quicksand', sans-serif; color: #163254;">
    <div class="row">
        <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#competitionsAddModal">
                Tambah Data Lomba
            </button>

            <!-- Modal -->
            <div class="modal fade" id="competitionsAddModal" tabindex="-1" role="dialog"
                aria-labelledby="competitionsAddModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="competitionsAddModalTitle">Tambah Data Lomba</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/admin/add_competitions">
                                @csrf
                                <div class="form-group row align-items-center">
                                    <label for="judul_lom" class="col-sm-2 col-form-label">Judul Lomba</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="judul_lom" name="judul_lom"></input>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="penyelenggara_lom" class="col-sm-2 col-form-label">Penyelenggara</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="penyelenggara_lom"
                                            name="penyelenggara_lom"></input>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="batas_submit" class="col-sm-2 col-form-label">Batas Pengumpulan</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="batas_submit"
                                            name="batas_submit"></input>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi"></input>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="pamflet" class="col-sm-2 col-form-label">Pamflet</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="pamflet" name="pamflet"></input>
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
                        <th scope="col">Judul Lomba</th>
                        <th scope="col">Penyelenggara</th>
                        <th scope="col">Batas Pengumpulan</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comps as $d)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $d->judul_lom}}</td>
                        <td>{{ $d->penyelenggara_lom}}</td>
                        <td>{{ $d->batas_submit}}</td>
                        <td>{{ $d->deskripsi}}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#competitionsEditModal{{ $d->id }}">
                                        Ubah
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="competitionsEditModal{{ $d->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="competitionsEditModal{{ $d->id }}Title"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="competitionsEditModal{{ $d->id }}Title">
                                                        Ubah
                                                        Data
                                                        {{ $d->judul_lom }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/admin/update_competitions/{{ $d->id}}">
                                                        @csrf
                                                        <div class="form-group row align-items-center">
                                                            <label for="judul_lom" class="col-sm-2 col-form-label">Nama
                                                                Beasiswa</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="judul_lom"
                                                                    name="judul_lom" value="{{ $d->judul_lom}}"></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row align-items-center">
                                                            <label for="penyelenggara_lom"
                                                                class="col-sm-2 col-form-label">Penyelenggara</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    id="penyelenggara_lom" name="penyelenggara_lom"
                                                                    value="{{ $d->penyelenggara_lom}}"></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row align-items-center">
                                                            <label for="batas_submit"
                                                                class="col-sm-2 col-form-label">Batas Submit</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" class="form-control"
                                                                    id="batas_submit" name="batas_submit"
                                                                    value="{{ $d->batas_submit}}"></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row align-items-center">
                                                            <label for="deskripsi"
                                                                class="col-sm-2 col-form-label">Deskripsi</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="deskripsi"
                                                                    name="deskripsi" value="{{ $d->deskripsi}}"></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row align-items-center">
                                                            <label for="pamflet"
                                                                class="col-sm-2 col-form-label">Pamflet</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="pamflet"
                                                                    name="pamflet" value="{{ $d->pamflet}}"></input>
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
                                <div class="col-md-6">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#competitionsDeleteModal{{ $d->id }}">
                                        Hapus
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="competitionsDeleteModal{{ $d->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="competitionsDeleteModal{{ $d->id }}Title"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="competitionsDeleteModal{{ $d->id }}Title">
                                                        Hapus
                                                        Data
                                                        {{ $d->judul_lom }}?</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/admin/delete_competitions/{{ $d->id}}">
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