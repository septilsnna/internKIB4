@extends('layout/main')

@section('title', 'Kampus Indonesia')

@section('container')
<div class="container my-4" style="font-size: 20px; font-family: 'Quicksand', sans-serif; color: #163254;">
    <div class="pt-3" style="columns: 2; column-gap: 16px;">
        @foreach($events as $d)
        <div style="display: inline-block; position: relative; margin-bottom: 16px;">
            <div class="card" style="border-radius: 10px; border-color:#163254">
                <img src="{{ url('/storage/events/'.$d->pamflet) }}" class="card-img-top pt-2 align-self-center" alt="">
                <div class="card-body">
                    <p class="card-title" style="font-size: 18px;">
                        {{$d->judul_ev}}
                        <br><small class="card-text" style="color: gray;">{{ $d->tanggal_ev }}</small>
                        <br><small class="card-text" style="color: gray;">{{ $d->lokasi_ev }}</small>
                    </p>
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
                                        {{ $d->judul_ev}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ url('/storage/events/'.$d->pamflet) }}" class="ml-5 py-2"
                                        style="max-width: 40%;" alt="">
                                    <div class="row my-3 mx-1">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <td style="font-size: 16px; color:gray">
                                                        Jenis Acara</td>
                                                    <td>{{ $d->jenis_ev}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 16px; color:gray">
                                                        Tanggal Acara</td>
                                                    <td>{{ $d->tanggal_ev}}, {{ $d->waktu_ev}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 16px; color:gray">
                                                        Lokasi Acara</td>
                                                    <td>{{ $d->lokasi_ev}}</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 16px; color:gray">
                                                        Biaya</td>
                                                    <td>{{ $d->biaya_ev}}</td>
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