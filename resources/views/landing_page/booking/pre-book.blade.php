@extends('landing_page.layouts.app')
<section id="page-header" class="p-150px-t  p-80px-b sm-p-100px-t sm-p-40px-b">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="white-text">Pre Booking</h2>
            </div>
        </div>
    </div>
</section>
<div class="container my-5">
    <div class="row justify-content-center">
        <!-- Start Single blog -->
        <div class="col-lg-4 ">
            <article class="page-content">
                <div class="blog-post-img">
                    <img src="{{ asset('storage/' . $trip->image_trip) }}" alt="blog-img"
                        style="width:350px; height: 200px; object-fit: cover;">
                    <div class="blog-tag">
                        <a href="#">{{ $trip->travelCompany->name }}</a>
                    </div>
                </div>

                <!-- End feature image -->
                <div class="p-4 card-trip">
                    <div class="d-flex justify-content-between mb-0" style="font-size: 19px; font-weight: 600">
                        <p>{{ $trip->departure_city }}</p>
                        <p>
                            <i class="icofont-long-arrow-right"></i>
                        </p>
                        <p>{{ $trip->destination_city }}</p>
                    </div>
                    <div class="d-flex justify-content-between " style="font-size: 15px">
                        <p>{{ date('H:i', strtotime($trip->departure_time)) }}</p>
                        <p>{{ date('H:i', strtotime($trip->arrival_time)) }}</p>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between " style="font-size: 15px">
                        <p>
                            Tanggal Berangkat
                        </p>
                        <p>
                            {{ date('d-m-Y', strtotime($trip->departure_date)) }}
                        </p>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <p>
                            <i class="icofont-dollar mr-2"></i>
                            {{ 'Rp ' . number_format($trip->price, 0, ',', '.') }}
                        </p>

                        <p>
                            <i class="icofont-ui-user-group mr-2"></i>
                            {{ $trip->seat }}
                        </p>
                    </div>
                </div>
            </article>
        </div>
        <!-- End Single blog -->
        <div class="col-lg-7">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Masukkan Informasi Penumpang</h4>
                    <hr>
                    <div class="card-text">
                        <form action="{{ url('booking') }}" class="mb-0" method="post">
                            @csrf
                            @method('POST')
                            <input type="hidden" name="travel_trip_id" value="{{ $trip->id }}">
                            <div id="passengerForm">
                                <div class="mb-3 row">
                                    <label for="inputName" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            name="passengers[name][]" placeholder="Enter Name" required autofocus>
                                        @error('passengers.name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="inputPhoneNumber" class="col-sm-3 col-form-label">No. Telepon</label>
                                    <div class="col-sm-9">
                                        <input type="text"
                                            class="form-control @error('phone_number') is-invalid @enderror"
                                            name="passengers[phone_number][]" placeholder="Enter Phone Number" required
                                            autofocus>
                                        @error('passengers.phone_number')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-0">
                                <button type="button" class="btn-primary border-0 rounded px-3 py-1 mr-2"
                                    onclick="addNewPassenger()">Tambah Penumpang</button>
                                <button type="submit" class="btn-success border-0 rounded px-3 py-1">Booking</button>
                            </div>
                        </form>

                        <script>
                            function addNewPassenger() {
                                const newPassengerHtml = `
                                    <hr>
                                    <div class="mb-3 row">
                                        <label for="inputName" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="passengers[name][]"
                                                placeholder="Enter Name" required autofocus>
                                            @error('passengers.name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3 row">
                                        <label for="inputPhoneNumber" class="col-sm-3 col-form-label">No. Telepon</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="passengers[phone_number][]"
                                                placeholder="Enter Phone Number" required autofocus>
                                            @error('passengers.phone_number')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                `;

                                $('#passengerForm').append(newPassengerHtml);
                            }
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('content')
@endsection
