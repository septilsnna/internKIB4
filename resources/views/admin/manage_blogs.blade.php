@extends('layout/main')

@section('title', 'Manage Blogs | Kampus Indonesia')

@section('container')
<div class="container my-3" style="font-family: 'Quicksand', sans-serif; color: #163254;">
    <div class="row">
        <div class="col">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#blogsAddModal">
                Tambah Data Blog
            </button>

            <!-- Modal -->
            <div class="modal fade" id="blogsAddModal" tabindex="-1" role="dialog" aria-labelledby="blogsAddModalTitle"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="blogsAddModalTitle">Tambah Data Blog</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/admin/add_blogs">
                                @csrf
                                <div class="form-group row align-items-center">
                                    <label for="judul_blog" class="col-sm-2 col-form-label">Judul Blog</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="judul_blog"
                                            name="judul_blog"></input>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="isi_blog" class="col-sm-2 col-form-label">Isi Blog</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="isi_blog" name="isi_blog"></input>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="gambar" name="gambar"></input>
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
                        <th scope="col">Judul Blog</th>
                        <th scope="col">Isi Blog</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $d)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $d->judul_blog}}</td>
                        <td>{{ $d->isi_blog}}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#blogsEditModal{{ $d->id }}">
                                        Ubah
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="blogsEditModal{{ $d->id }}" tabindex="-1" role="dialog"
                                        aria-labelledby="blogsEditModal{{ $d->id }}Title" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="blogsEditModal{{ $d->id }}Title">
                                                        Ubah
                                                        Data
                                                        {{ $d->judul_blog }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/admin/update_blogs/{{ $d->id}}">
                                                        @csrf
                                                        <div class="form-group row align-items-center">
                                                            <label for="judul_blog" class="col-sm-2 col-form-label">Nama
                                                                Beasiswa</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="judul_blog"
                                                                    name="judul_blog"
                                                                    value="{{ $d->judul_blog}}"></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row align-items-center">
                                                            <label for="isi_blog" class="col-sm-2 col-form-label">Isi
                                                                Blog</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="isi_blog"
                                                                    name="isi_blog" value="{{ $d->isi_blog}}"></input>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row align-items-center">
                                                            <label for="gambar"
                                                                class="col-sm-2 col-form-label">Gambar</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="gambar"
                                                                    name="gambar" value="{{ $d->gambar}}"></input>
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
                                        data-target="#blogsDeleteModal{{ $d->id }}">
                                        Hapus
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="blogsDeleteModal{{ $d->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="blogsDeleteModal{{ $d->id }}Title"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="blogsDeleteModal{{ $d->id }}Title">
                                                        Hapus
                                                        Data
                                                        {{ $d->judul_blog }}?</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/admin/delete_blogs/{{ $d->id}}">
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