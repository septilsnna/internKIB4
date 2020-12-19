@extends('layout/main')

@section('title', 'Daftar Kampus | Kampus Indonesia')

@section('container')
<div class="container my-3" style="font-family: 'Quicksand', sans-serif; color: #163254;">
    <div class="row">
        <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#collegesAddModal">
                Tambah Data Kampus
            </button>

            <!-- Modal -->
            <div class="modal fade" id="collegesAddModal" tabindex="-1" role="dialog"
                aria-labelledby="collegesAddModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="collegesAddModalTitle">Tambah Data Kampus</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/colleges/add">
                                @csrf
                                <div class="form-group row align-items-center">
                                    <label for="nama_univ" class="col-sm-2 col-form-label">Nama Kampus</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama_univ" name="nama_univ">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="jenis_univ" class="col-sm-2 col-form-label">Jenis Kampus</label>
                                    <div class="col-sm-10">
                                        <select id="jenis_univ" name="jenis_univ" class="form-control">
                                            <option selected>Universitas</option>
                                            <option>Politeknik</option>
                                            <option>Institut</option>
                                            <option>Sekolah Tinggi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="status_univ" class="col-sm-2 col-form-label">Status Kampus</label>
                                    <div class="col-sm-10">
                                        <select id="status_univ" name="status_univ" class="form-control">
                                            <option selected>Negeri</option>
                                            <option>Swasta</option>
                                            <option>Kedinasan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="akre_univ" class="col-sm-2 col-form-label">Akreditasi Kampus</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="akre_univ" name="akre_univ">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="prov_univ" class="col-sm-2 col-form-label">Provinsi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="prov_univ" name="prov_univ">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="jml_fak" class="col-sm-2 col-form-label">Jumlah Fakultas</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="jml_fak" name="jml_fak">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="jml_prodi" class="col-sm-2 col-form-label">Jumlah Prodi</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="jml_prodi" name="jml_prodi">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="deskripsi" name="deskripsi">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button submit" class="btn btn-primary">Save changes</button>
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
                        <th scope="col">Nama Kampus</th>
                        <th scope="col">Jenis Kampus</th>
                        <th scope="col">Status Kampus</th>
                        <th scope="col">Akreditasi</th>
                        <th scope="col">Lokasi Kampus</th>
                        <th scope="col">Jumlah Fakultas</th>
                        <th scope="col">Jumlah Program Studi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kampus as $d)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $d->nama_univ}}</td>
                        <td>{{ $d->jenis_univ}}</td>
                        <td>{{ $d->status_univ}}</td>
                        <td>{{ $d->akre_univ}}</td>
                        <td>{{ $d->prov_univ}}</td>
                        <td>{{ $d->jml_fak}}</td>
                        <td>{{ $d->jml_prodi}}</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#collegesEditModal{{ $d->id }}">
                                Ubah
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="collegesEditModal{{ $d->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="collegesEditModal{{ $d->id }}Title" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="collegesEditModal{{ $d->id }}Title">Ubah Data
                                                {{ $d->nama_univ }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/colleges/edit">
                                                @csrf
                                                <div class="form-group row align-items-center">
                                                    <label for="nama_univ" class="col-sm-2 col-form-label">Nama
                                                        Kampus</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="nama_univ"
                                                            name="nama_univ" value="{{ $d->nama_univ }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label for="jenis_univ" class="col-sm-2 col-form-label">Jenis
                                                        Kampus</label>
                                                    <div class="col-sm-10">
                                                        <select id="jenis_univ" name="jenis_univ" class="form-control">
                                                            <option>Universitas</option>
                                                            <option>Politeknik</option>
                                                            <option>Institut</option>
                                                            <option>Sekolah Tinggi</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label for="status_univ" class="col-sm-2 col-form-label">Status
                                                        Kampus</label>
                                                    <div class="col-sm-10">
                                                        <select id="status_univ" name="status_univ" class="form-control"
                                                            aria-selected="{{ $d->status_univ }}">
                                                            <option>Negeri</option>
                                                            <option>Swasta</option>
                                                            <option>Kedinasan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label for="akre_univ" class="col-sm-2 col-form-label">Akreditasi
                                                        Kampus</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="akre_univ"
                                                            name="akre_univ" value="{{ $d->akre_univ }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label for="prov_univ"
                                                        class="col-sm-2 col-form-label">Provinsi</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="prov_univ"
                                                            name="prov_univ" value="{{ $d->prov_univ }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label for="jml_fak" class="col-sm-2 col-form-label">Jumlah
                                                        Fakultas</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" id="jml_fak"
                                                            name="jml_fak" value="{{ $d->jml_fak }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label for="jml_prodi" class="col-sm-2 col-form-label">Jumlah
                                                        Prodi</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" id="jml_prodi"
                                                            name="jml_prodi" value="{{ $d->jml_prodi }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row align-items-center">
                                                    <label for="deskripsi"
                                                        class="col-sm-2 col-form-label">Deskripsi</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="deskripsi"
                                                            name="deskripsi" value="{{ $d->deskripsi }}">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button submit" class="btn btn-primary">Save
                                                        changes</button>
                                                </div>
                                            </form>
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