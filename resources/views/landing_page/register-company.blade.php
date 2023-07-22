@extends('landing_page.layouts.app')
@section('content')
    <section id="page-header" class="p-150px-t  p-80px-b sm-p-100px-t sm-p-40px-b">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="white-text">Daftarkan Perusahaanmu!</h2>
                </div>
            </div>
        </div>
        <div class="container my-5 d-flex justify-content-center">
            <div class="card col-5">
                <div class="card-body">
                    <form action="{{ url('register-company') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="exampleInputName">Nama</label>
                            <input type="text" class="form-control" id="exampleInputName" name="name"
                                placeholder="Masukkan nama">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPhoneNumber">Nomor Telepon</label>
                            <input type="number" class="form-control" id="exampleInputPhoneNumber" name="phone_number"
                                placeholder="Masukkan nomor telepon">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail">Alamat Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail" name="email"
                                aria-describedby="emailHelp" placeholder="Masukkan alamat email">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputAddress">Alamat</label>
                            <input type="text" class="form-control" id="exampleInputAddress" name="address"
                                placeholder="Masukkan alamat">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputDescription">Deskripsi</label>
                            <textarea class="form-control" id="exampleInputDescription" name="description" placeholder="Masukkan deskripsi"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputLogo">Logo</label>
                            <input type="file" class="form-control" id="exampleInputLogo" name="logo">
                        </div>

                        <input type="submit" class="btn btn-primary w-100" value="Daftar">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
