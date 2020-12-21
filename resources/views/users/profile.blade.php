@extends('layout/user_mode')

@section('title', 'Kampus Indonesia')

@section('container')
<div class="container my-4 py-5" style="font-size: 20px; font-family: 'Quicksand', sans-serif; color: #163254;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h3 style="font-weight: bold; font-size: 28px;">
                Akun Saya</h3>
            <h4>{{ $users->name }}</h4>
            <h6>Bergabung Sejak: {{ $users->created_at }}</h6>
            <h5 style="color: grey; font-size: 16px">Email</h5>
            <h6>{{ $users->email }}</h6>
        </div>
        <div class="col-md-3">
            <a href="" class="btn px-4" style="background-color: #163254; color: #eef5f6; border-radius: 20px">UBAH
                DETAIL
                PROFIL</a>
            <a href="/logout" class="btn px-4 my-4"
                style="background-color: #163254; color: #eef5f6; border-radius: 20px">Logout</a>
        </div>
    </div>
</div>
@endsection