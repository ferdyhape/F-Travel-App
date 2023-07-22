@extends('landing_page.layouts.app')
@section('content')
    <section id="page-header" class="p-150px-t  p-80px-b sm-p-100px-t sm-p-40px-b">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="white-text">Login</h2>
                </div>
            </div>
        </div>
        <div class="container my-5 d-flex justify-content-center">
            <div class="card col-5">
                <img class="card-img-top" src="{{ asset('landing_page/img/login.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <form action="{{ url('login') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="exampleInputEmail">Alamat Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail" name="email"
                                aria-describedby="emailHelp" placeholder="Masukkan alamat email">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword">Kata Sandi</label>
                            <input type="password" class="form-control" id="exampleInputPassword" name="password"
                                placeholder="Masukkan kata sandi">
                        </div>

                        <input type="submit" class="btn btn-primary w-100" value="Login">
                        <p class="mt-2">
                            Belum punya akun? <a href="{{ url('register') }}" style="font-weight: 600">Daftar</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
