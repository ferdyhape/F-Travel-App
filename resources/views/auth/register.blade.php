@extends('landing_page.layouts.app')
@section('content')
    <section id="page-header" class="p-150px-t  p-80px-b sm-p-100px-t sm-p-40px-b">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="white-text">Register</h2>
                </div>
            </div>
        </div>
        <div class="container my-5 d-flex justify-content-center">
            <div class="card col-10 col-sm-8 col-md-6 col-xl-4">
                <div class="card-body">
                    <form action="{{ url('register') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="exampleInputName">Nama</label>
                            <input type="text" class="form-control" id="exampleInputName" name="name"
                                placeholder="Masukkan nama">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail">Alamat Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail" name="email"
                                aria-describedby="emailHelp" placeholder="Masukkan alamat email">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPhoneNumber">Nomor Telepon</label>
                            <input type="text" class="form-control" id="exampleInputPhoneNumber" name="phone_number"
                                placeholder="Masukkan nomor telepon">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputAvatar">Avatar</label>
                            <input type="file" class="form-control-file" id="exampleInputAvatar" name="avatar">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword">Kata Sandi</label>
                            <input type="password" class="form-control" id="exampleInputPassword" name="password"
                                placeholder="Masukkan kata sandi">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputConfirmPassword">Konfirmasi Kata Sandi</label>
                            <input type="password" class="form-control" id="exampleInputConfirmPassword"
                                name="password_confirmation" placeholder="Masukkan kembali kata sandi">
                        </div>

                        <input type="submit" class="btn btn-primary w-100" value="Daftar">
                        <p class="mt-3">
                            Sudah punya akun? <a href="{{ url('login') }}" style="font-weight: 600">Login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
