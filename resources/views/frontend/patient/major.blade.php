@extends('frontend.patient.layouts.index')

@section('title', 'major')

@section('content_page')

    <div class="container">
        <x-name-content message=' التخصصات المتاحة'/>

    <div class="majors-grid">
        @foreach ($major as $majors)
            <div class="card p-2" style="width: 18rem;">
                <img src="{{ asset('images/doctors/major.jpg') }}" class="card-img-top rounded-circle card-image-circle"
                    alt="major">
                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                    <h4 class="card-title fw-bold text-center">{{ $majors->title }}</h4>
                    <a href="{{ route('major_doctors.index', $majors->id) }}"
                        class="btn btn-outline-primary card-button">الدكاترة المتاحة في هذاالتخصص</a>
                </div>
            </div>
        @endforeach
    </div>
{{ $major->links() }}
{{--      <x-navbar/>
  --}}</div>

@endsection
