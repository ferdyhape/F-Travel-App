@extends('landing_page.layouts.app')
@section('content')
    <section id="page-header" class="p-150px-t  p-80px-b sm-p-100px-t sm-p-40px-b">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="white-text">Bookingan Saya</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== Page Header End ========== -->
    <section id="blog-full" class="p-80px-tb gray-bg">
        <div class="container">
            <div class="row">
                @foreach ($bookings as $booking)
                    <!-- Start Single blog -->
                    <div class="col-lg-4">
                        <article class="page-content">
                            <div class="blog-post-img">
                                <img src="{{ asset('storage/' . $booking->travelTrip->image_trip) }}" alt="blog-img"
                                    style="width:350px; height: 200px; object-fit: cover;">
                                <div class="blog-tag">
                                    <a href="#">{{ $booking->travelTrip->travelCompany->name }}</a>
                                </div>
                            </div>

                            <!-- End feature image -->
                            <div class="p-4 card-trip">
                                <div class="d-flex justify-content-between mb-0" style="font-size: 19px; font-weight: 600">
                                    <p>{{ $booking->travelTrip->departure_city }}</p>
                                    <p>
                                        <i class="icofont-long-arrow-right"></i>
                                    </p>
                                    <p>{{ $booking->travelTrip->destination_city }}</p>
                                </div>
                                <div class="d-flex justify-content-between " style="font-size: 15px">
                                    <p>{{ date('H:i', strtotime($booking->travelTrip->departure_time)) }}</p>
                                    <p>{{ date('H:i', strtotime($booking->travelTrip->arrival_time)) }}</p>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between" style="font-size: 15px">
                                    <div class="">
                                        <p>
                                            Tanggal Berangkat
                                        </p>
                                        <p>
                                            Status

                                        </p>
                                        <p>
                                            Penumpang
                                        </p>
                                        <p>
                                            Harga
                                        </p>
                                    </div>
                                    <div style="text-align: right">
                                        <p>
                                            {{ date('d-m-Y', strtotime($booking->travelTrip->departure_date)) }}
                                        </p>
                                        <p>
                                            {{ $booking->status }}
                                        </p>
                                        <p>
                                            {{ $booking->total_passenger }}
                                        </p>
                                        <p>
                                            {{ 'Rp ' . number_format($booking->travelTrip->price, 0, ',', '.') }}
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                @if ($booking->status == 'Pending' && $booking->payment_proof == null)
                                    <div class="d-flex justify-content-between gap-2">
                                        <a href="{{ url('booking/' . $booking->id) }}"
                                            class="btn btn-primary text-white w-100 mr-3 mt-3">Bayar</a>
                                        <form action="{{ url('booking/' . $booking->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-danger text-white w-100 mt-3">Cancel</button>
                                        </form>
                                    </div>
                                @elseif($booking->status == 'Success' || $booking->payment_proof != null)
                                    <a href="booking/{{ $booking->id }}" class="btn btn-success text-white w-100 mt-3"
                                        {{ auth()->check() ? '' : 'disabled' }}>
                                        Cek
                                    </a>
                                @else
                                    <button href="pre-book/{{ $booking->travelTrip->id }}"
                                        class="btn btn-danger text-white w-100 mt-3" disabled> Dibatalkan </button>
                                @endif
                            </div>
                        </article>
                    </div>
                    <!-- End Single blog -->
                @endforeach
            </div>
        </div>
    </section>
@endsection
