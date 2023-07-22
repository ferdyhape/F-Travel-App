@extends('dashboard_company.layouts.app')
@section('title', 'Profile')
@section('content')
    <div class="h-100 d-flex justify-content-center">
        <div class="card shadow my-3 text-start col-10 col-sm-8 col-md-6 col-xl-4">
            <img class="card-img-top" src="{{ asset('storage/' . $company->logo) }}" style="" alt="logo-company">
            <div class="card-body p-4">
                <h4 class="card-title fw-semibold">{{ $company->name }}</h4>
                <hr class="my-2">
                <div class="card-text">
                    <p>{{ $company->description }}</p>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex gap-2 mt-2 align-items-center">
                            <i class='bx bx-phone-call'></i>
                            {{ $company->phone_number }}
                        </div>
                        <div class="d-flex gap-2 mt-2 align-items-center">
                            <i class='bx bx-envelope'></i>
                            {{ $company->email }}
                        </div>
                    </div>
                    <div class="d-flex gap-2 mt-2 align-items-center">
                        <i class='bx bx-map-pin'></i>
                        <p class="m-0">{{ $company->address }}</p>
                    </div>
                </div>
                <button class="btn btn-primary w-100 mt-3 px-2" data-bs-toggle="modal"
                    data-bs-target="#updateModal">Edit</button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateModalLabel">Update Informasi Perusahaan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Update form goes here -->
                        <form action="{{ url('my-company/profile/' . $company->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="name" class="form-label">Company Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ $company->name }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Company Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                    rows="3">{{ $company->description }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                    id="phone_number" name="phone_number" value="{{ $company->phone_number }}">
                                @error('phone_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ $company->email }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- address input --}}
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="3">{{ $company->address }}</textarea>
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- logo input --}}
                            <div class="mb-3">
                                <label for="logo" class="form-label">Logo</label>
                                <input class="form-control @error('logo') is-invalid @enderror" type="file"
                                    id="logo" name="logo">
                                @error('logo')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
