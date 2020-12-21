@extends('layout/main')

@section('title', 'Masuk | Kampus Indonesia')

@section('container')
<div class="container my-5" style="font-size: 18px; font-family: 'Quicksand', sans-serif; color: #163254;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light shadow">
                <div class="card-body">
                    <h4 class="pb-2">Masuk ke Kampus Indonesia!</h4>
                    <form action="/login/auth">
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
                            @if (session('invalid_login'))
                            <small style="color: red;">{{ session('invalid_login') }}</small>
                            @endif
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