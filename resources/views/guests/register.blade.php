@extends('layout/main')

@section('title', 'Daftar | Kampus Indonesia')

@section('container')
<div class="container my-5" style="font-size: 18px; font-family: 'Quicksand', sans-serif; color: #163254;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light shadow">
                <div class="card-body">
                    <h4 class="pb-2">Daftarkan Akunmu untuk Masuk ke Kampus Indonesia!</h4>
                    <form action="/user/create">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" placeholder="Masukkan nama kamu" value="{{ old('name') }}">
                            @error('name')
                            <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                name="email" placeholder="Masukkan email kamu" value="{{ old('email') }}">
                            @error('email')
                            <small style=" color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Masukkan password">
                            @error('password')
                            <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password_confirm">Confirmasi Password</label>
                            <input type="password" class="form-control @error('password_confirm') is-invalid @enderror"
                                id="password_confirm" name="password_confirm"
                                placeholder="Masukkan password konfirmasi">
                            @error('password_confirm')
                            <small style="color: red;">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group row justify-content-center">
                            <button type="submit" class="btn px-5"
                                style="background-color:#163254; color:#eef5f6; border-radius:20px">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection