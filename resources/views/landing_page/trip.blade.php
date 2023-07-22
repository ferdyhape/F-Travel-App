@extends('landing_page.layouts.app')
@section('content')
    <section id="page-header" class="p-150px-t  p-80px-b sm-p-100px-t sm-p-40px-b">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="white-text">Daftar Trip</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== Page Header End ========== -->
    <section id="blog-full" class="p-80px-tb gray-bg">
        <div class="container">
            <div class="row">
                @foreach ($trips as $trip)
                    <!-- Start Single blog -->
                    <div class="col-lg-4">
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
                                <a href="booking/pre-book/{{ $trip->id }}" class="btn btn-primary text-white w-100 mt-3"
                                    {{ auth()->check() ? '' : 'disabled' }}>
                                    Booking
                                </a>
                            </div>
                        </article>
                    </div>
                    <!-- End Single blog -->
                @endforeach
            </div>
        </div>
    </section>
@endsection
