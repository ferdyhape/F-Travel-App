@extends('dashboard_company.layouts.app')
@section('title', 'Trip')
@section('content')
    <h1 class="text-center fw-bold">Manajemen Perjalanan</h1>
    <hr class="hr" />
    <button class="btn btn-success my-2" data-bs-toggle="modal" data-bs-target="#createModal">Tambah Trip</button>

    <div class="justify-content-center">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Waktu Berangkat</th>
                        <th scope="col">Waktu Tiba</th>
                        <th scope="col">Kota Berangkat</th>
                        <th scope="col">Kota Tujuan</th>
                        <th scope="col">Tanggal Berangkat</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Kursi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody id="trip-table">
                    @foreach ($trips as $trip)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ date('H:i', strtotime($trip->departure_time)) }}</td>
                            <td>{{ date('H:i', strtotime($trip->arrival_time)) }}</td>
                            <td>{{ $trip->departure_city }}</td>
                            <td>{{ $trip->destination_city }}</td>
                            <td>{{ date('d-m-Y', strtotime($trip->departure_date)) }}</td>
                            <td>{{ 'Rp ' . number_format($trip->price, 0, ',', '.') }}</td>
                            <td>{{ $trip->seat }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $trip->image_trip) }}" alt="image_trip" class="img-fluid"
                                    width="100px">
                            </td>
                            <td>
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editModalTrip"
                                    onclick="editModalTrip({{ json_encode($trip) }})">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm"
                                    onclick="deleteConfirmation('{{ $trip->id }}');">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- form delete --}}
    <form action="" method="POST" id="formDelete" class="d-none">
        @method('DELETE')
        @csrf
    </form>

    {{--  Modal Edit  --}}
    <div class="modal fade" id="editModalTrip" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content border-0 shadow">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="exampleModalLabel">
                        EDIT PERJALANAN
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form_edit_modal" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <!-- Departure Time -->
                        <div class="form-group mb-2">
                            <input type="time"
                                class="form-control form-control-product @error('departure_time') is-invalid @enderror"
                                name="departure_time" id="input_departure_time" required autofocus>
                            @error('departure_time')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Arrival Time -->
                        <div class="form-group mb-2">
                            <input type="time"
                                class="form-control form-control-product @error('arrival_time') is-invalid @enderror"
                                name="arrival_time" id="input_arrival_time" required>
                            @error('arrival_time')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Departure City -->
                        <div class="form-group mb-2">
                            <input type="text"
                                class="form-control form-control-product @error('departure_city') is-invalid @enderror"
                                name="departure_city" id="input_departure_city" placeholder="Departure City" required>
                            @error('departure_city')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Destination City -->
                        <div class="form-group mb-2">
                            <input type="text"
                                class="form-control form-control-product @error('destination_city') is-invalid @enderror"
                                name="destination_city" id="input_destination_city" placeholder="Destination City" required>
                            @error('destination_city')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Departure Date -->
                        <div class="form-group mb-2">
                            <input type="date"
                                class="form-control form-control-product @error('departure_date') is-invalid @enderror"
                                name="departure_date" id="input_departure_date" required>
                            @error('departure_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Price -->
                        <div class="form-group mb-2">
                            <input type="number"
                                class="form-control form-control-product @error('price') is-invalid @enderror"
                                name="price" id="input_price" placeholder="Price" required>
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Seat -->
                        <div class="form-group mb-2">
                            <input type="number"
                                class="form-control form-control-product @error('seat') is-invalid @enderror" name="seat"
                                id="input_seat" placeholder="Seat" required>
                            @error('seat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Gambar -->
                        <div class="form-group mb-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Gambar</span>
                                </div>
                                <input type="file"
                                    class="form-control form-control-product @error('image_trip') is-invalid @enderror"
                                    name="image_trip">
                            </div>
                            @error('image_trip')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-warning mt-2">Edit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    {{--  Model Create  --}}
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content border-0 shadow">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Trip</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('my-company/trip') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- Waktu Berangkat -->
                        <div class="form-group mb-2">
                            <div class="input-group">
                                <div class="input-group-prepend me-2" style="width: 32%">
                                    <span class="input-group-text">Waktu Berangkat</span>
                                </div>
                                <input type="time"
                                    class="form-control form-control-product @error('departure_time') is-invalid @enderror"
                                    name="departure_time" placeholder="HH:mm" required autofocus>
                            </div>
                            @error('departure_time')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Waktu Tiba -->
                        <div class="form-group mb-2">
                            <div class="input-group">
                                <div class="input-group-prepend me-2" style="width: 32%">
                                    <span class="input-group-text">Waktu Tiba</span>
                                </div>
                                <input type="time"
                                    class="form-control form-control-product @error('arrival_time') is-invalid @enderror"
                                    name="arrival_time" placeholder="HH:mm" required>
                            </div>
                            @error('arrival_time')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Kota Berangkat -->
                        <div class="form-group mb-2">
                            <input type="text"
                                class="form-control form-control-product @error('departure_city') is-invalid @enderror"
                                name="departure_city" placeholder="Kota Berangkat" required>
                            @error('departure_city')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Kota Tujuan -->
                        <div class="form-group mb-2">
                            <input type="text"
                                class="form-control form-control-product @error('destination_city') is-invalid @enderror"
                                name="destination_city" placeholder="Kota Tujuan" required>
                            @error('destination_city')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Tanggal Berangkat -->
                        <div class="form-group mb-2">
                            <input type="date"
                                class="form-control form-control-product @error('departure_date') is-invalid @enderror"
                                name="departure_date" placeholder="Tanggal Berangkat" required>
                            @error('departure_date')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Harga -->
                        <div class="form-group mb-2">
                            <input type="number"
                                class="form-control form-control-product @error('price') is-invalid @enderror"
                                name="price" placeholder="Harga" required>
                            @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Kursi -->
                        <div class="form-group mb-2">
                            <input type="number"
                                class="form-control form-control-product @error('seat') is-invalid @enderror"
                                name="seat" placeholder="Kursi" required>
                            @error('seat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <!-- Gambar -->
                        <div class="form-group mb-2">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Gambar</span>
                                </div>
                                <input type="file"
                                    class="form-control form-control-product @error('image_trip') is-invalid @enderror"
                                    name="image_trip" required>
                            </div>
                            @error('image_trip')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success ">Add</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function deleteConfirmation(tripId) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Set the form action URL dynamically
                    document.getElementById('formDelete').action = '/my-company/trip/' + tripId;
                    // Proceed with form submission
                    document.getElementById('formDelete').submit();
                }
            });
        }

        function editModalTrip(trip) {
            $('#form_edit_modal').trigger('reset');
            document.getElementById('input_departure_time').value = trip.departure_time;
            document.getElementById('input_arrival_time').value = trip.arrival_time;
            document.getElementById('input_departure_city').value = trip.departure_city;
            document.getElementById('input_destination_city').value = trip.destination_city;
            document.getElementById('input_departure_date').value = trip.departure_date;
            document.getElementById('input_price').value = trip.price;
            document.getElementById('input_seat').value = trip.seat;
            document.getElementById('form_edit_modal').action = "{{ url('my-company/trip') }}/" + trip.id;
        }
    </script>
@endsection
