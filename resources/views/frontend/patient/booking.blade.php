@extends('frontend.patient.layouts.index')

@section('booking')

@section('title', 'booking appointment')

@section('content_page')



    <div class="container">

        <nav style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb" class="fw-bold my-4 h4">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('HomePage') }}"></a></li>
                <li class="breadcrumb-item active" aria-current="page"> {{ $doctor->name }}</li>
                <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('HomePage') }}">حجز موعد جديد مع
                    </a>
                </li>

            </ol>
        </nav>

        <div class="d-flex flex-column gap-3 details-card doctor-details">
            <div class="details d-flex gap-2 align-items-center">
                @if (isset($doctor->image))
                    <img src="{{ url('/images/doctors/' . $doctor->image) }}"
                        class="card-img-top rounded-circle card-image-circle" alt="major">
                @else
                    <img src="{{ asset('images/doctors/major.jpg') }}" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                @endif
                <div class="details-info d-flex flex-column gap-3 ">
                    <h4 class="card-title fw-bold"> {{ $doctor->name }}</h4>

                    <div class="d-flex gap-3 align-bottom">
                        <ul class="rating">
                            <li class="star"></li>
                            <li class="star"></li>
                            <li class="star"></li>
                            <li class="star"></li>
                            <li class="star"></li>
                        </ul>
                        <a href="#" class="align-baseline">submit rating</a>
                    </div>

                    <h6 class="card-title fw-bold">{{ $doctor->major->title }}</h6>
                </div>
            </div>

            <form class="form" method="POST" action="{{ route('booking.store', $doctor->id) }}">
                @csrf

                <div class="form-items">
                    <div class="mb-3">
                        <label class="form-label required-label" for="name">Your Name</label>
                        <input type="text" class="form-control"
                            value="@if (isset(Auth::user()->name)) {{ Auth::user()->name }} @endif" name="name"
                            id="name" required>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label required-label" for="phone">Your Phone</label>
                        <input type="tel" class="form-control" name="phone"
                            value="@if (isset(Auth::user()->phone)) {{ Auth::user()->phone }} @endif" id="phone"
                            required>
                        @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label required-label" for="email"> Your Email</label>
                        <input type="email" class="form-control" name="email"
                            value="@if (isset(Auth::user()->email)) {{ Auth::user()->email }} @endif" id="email"
                            required>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-danger">تأكيد الحجز</button>
                </div>
            </form>
        </div>

    </div>

@endsection
