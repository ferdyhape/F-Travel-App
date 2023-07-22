@extends('landing_page.layouts.app')
<section id="page-header" class="p-150px-t  p-80px-b sm-p-100px-t sm-p-40px-b">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="white-text">Booking Detail</h2>
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
                    <div class="d-flex justify-content-between " style="font-size: 15px">
                        <p>
                            Tanggal Berangkat
                        </p>
                        <p>
                            {{ date('d-m-Y', strtotime($booking->travelTrip->departure_date)) }}
                        </p>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <p>
                            <i class="icofont-dollar mr-2"></i>
                            {{ 'Rp ' . number_format($booking->travelTrip->price, 0, ',', '.') }}
                        </p>

                        <p>
                            <i class="icofont-ui-user-group mr-2"></i>
                            {{ $booking->travelTrip->seat }}
                        </p>
                    </div>
                </div>
            </article>
        </div>
        <!-- End Single blog -->
        <div class="col-lg-7">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Informasi Booking</h4>
                    <hr>
                    <div class="card-text px-3 py-2" id="info-passenger">

                        <div class="d-flex justify-content-between">
                            <div class="">
                                <p>Status:</p>
                                <p>Harga:</p>
                                <p>Total Penumpang:</p>
                                <p>Total Harga:</p>
                            </div>
                            <div class="">
                                <p><b>{{ $booking->status }}</b></p>
                                <p><b>{{ 'Rp ' . number_format($booking->travelTrip->price, 0, ',', '.') }}</b></p>
                                <p><b>{{ $booking->total_passenger }}</b></p>
                                <p><b>{{ 'Rp ' . number_format($booking->total_price, 0, ',', '.') }}</b></p>
                            </div>
                        </div>

                        <?php $i = 1; ?>
                        <div class="mt-4">
                            @foreach ($booking->passenger as $passenger)
                                <div class="mb-3 d-flex align-items-start ">
                                    <div class="mt-1">
                                        <i class="icofont-user mr-2"></i>
                                    </div>
                                    <div class="">
                                        <p class="passenger-number">Penumpang
                                            {{ $i }}
                                        </p>
                                        <table>
                                            <tr>
                                                <td>Nama</td>
                                                <td>: {{ $passenger->name }}</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 150px;">No. Telepon</td>
                                                <td>: {{ $passenger->phone_number }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <?php $i++; ?>
                            @endforeach
                        </div>
                    </div>
                    @if ($booking->status == 'Pending' && $booking->payment_proof == null)
                        <hr>
                        <form action="{{ url('payment/' . $booking->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="mb-1">
                                <div class="form-group">
                                    <label for="payment_proof">Bukti Pembayaran</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="payment_proof"
                                            name="payment_proof">
                                        <label class="custom-file-label" for="payment_proof">Choose file</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success text-white w-100">Upload Bukti
                                    Pembayaran</button>
                            </div>
                        </form>
                    @else
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@section('content')
@endsection
