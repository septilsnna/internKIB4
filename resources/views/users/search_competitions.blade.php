@extends('layout/user_mode')

@section('title', 'Kampus Indonesia')

@section('container')
<div class="container my-4" style="font-size: 20px; font-family: 'Quicksand', sans-serif; color: #163254;">
    <div class="pt-3" style="columns: 3; column-gap: 16px;">
        @foreach($lomba as $d)
        <div style="display: inline-block; position: relative; margin-bottom: 16px;">
            <div class="card" style="border-radius: 10px; border-color:#163254">
                <img src="{{ url('/storage/competitions/'.$d->pamflet) }}" class="card-img-top align-self-center"
                    alt="">
                <div class="card-body">
                    <p class="card-title" style="font-size: 18px;">
                        {{$d->judul_lom}}
                        <br><small class="card-text" style="color: gray;">Penyelenggara:
                            {{ $d->penyelenggara_lom }}</small>
                        <br><small class="card-text" style="color: gray;">Deadline: {{ $d->batas_submit }}</small>
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
                                        {{ $d->judul_lom}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ url('/storage/competitions/'.$d->pamflet) }}" class="ml-5 py-2"
                                        style="max-width: 40%;" alt="">
                                    <div class="row my-3 mx-1">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <td style="font-size: 16px; color:gray">
                                                        Penyelenggara</td>
                                                    <td>{{ $d->penyelenggara_lom}}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="font-size: 16px; color:gray">
                                                        Batas Submit</td>
                                                    <td>{{ $d->batas_submit}}</td>
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