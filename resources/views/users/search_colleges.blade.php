@extends('layout/user_mode')

@section('title', 'Kampus Indonesia')

@section('container')
<div class="container my-4" style="font-size: 20px; font-family: 'Quicksand', sans-serif; color: #163254;">
    <div class="row">
        @foreach($kampus as $d)
        <div class="col-md-4 mt-4">
            <div class="card shadow" style="height: 320px; border-radius: 10px; border-color:#163254">
                <img src="{{ url('/storage/logos/'.$d->gambar) }}" class="card-img-top pt-2 align-self-center"
                    style="max-width: 40%;" alt="">
                <div class="card-body">
                    <p class="card-title" style="font-size: 18px;">
                        {{$d->nama_univ}}
                    </p>
                    <p><small class="card-text" style="color: gray;">Akreditasi:</small>
                        {{$d->akre_univ}}</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-block" style="background-color: #163254; color:#dbdddf"
                        data-toggle="modal" data-target="#info{{ $d->id }}Modal">
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
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ url('/storage/logos/'.$d->gambar) }}" class="ml-5 py-2"
                                        style="max-width: 40%;" alt="">
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
@endsection