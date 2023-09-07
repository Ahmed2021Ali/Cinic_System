@extends('frontend.patient.layouts.index')

@section('cs')
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.rtl.min.css"
                    integrity="sha512-wO8UDakauoJxzvyadv1Fm/9x/9nsaNyoTmtsv7vt3/xGsug25X7fCUWEyBh1kop5fLjlcrK3GMVg8V+unYmrVA=="
                    crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
@endsection

@section('title', 'doctor page')


@section('content_page')

    <div class="container">

        <x-name-content message=' الدكاترة'/>

        <div class="filteration d-flex gap-3 mb-3 flex-wrap justify-content-center justify-content-lg-start justify-content-md-start">
            <div class="dropdown">
                <button class="btn bg-blue btn-primary align-items-center d-flex gap-2 dropdown-toggle" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    محافظات
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Cairo') }}">Cairo</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Alexandria') }}">Alexandria</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Giza') }}">Giza</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Shubra El-Kheima') }}">Shubra El-Kheima</a>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Port Said') }}">Port Said</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Suez') }}">Suez</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Luxor') }}">Luxor</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Asyut') }}">Asyut</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Ismailia') }}">Ismailia</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Fayoum') }}">Fayoum</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Zagazig') }}">Zagazig</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Aswan') }}">Aswan</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Damietta') }}">Damietta</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Damanhur') }}">Damanhur</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Minya') }}">Minya</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Beni Suef') }}">Beni Suef</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Qena') }}">Qena</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Sohag') }}">Sohag</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Hurghada') }}">Hurghada</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', '6th of October') }}">6th of October</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Shibin El Kom') }}">Shibin El Kom</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Banha') }}">Banha</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Kafr el-Sheikh') }}">Kafr el-Sheikh</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Arish') }}">Arish</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Mallawi') }}">Mallawi</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', '10th of Ramadan') }}">10th of Ramadan</a>
                    </li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Bilbais') }}">Bilbais</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Marsa Matruh') }}">Marsa Matruh</a></li>
                    <li><a class="dropdown-item" href="{{ route('DoctorPage', 'Idfu') }}">Idfu</a></li>

                    </li>
                </ul>
            </div>
        </div>

        <div class="doctors-grid">
            @foreach ($doctor as $doctor)
                <div class="card p-2" style="width: 18rem;">
                    @if (isset($doctor->image))
                        <img src="{{ url('/images/doctors/' . $doctor->image) }}"
                            class="card-img-top rounded-circle card-image-circle" alt="major">
                    @else
                        <img src="{{ asset('images/doctors/major.jpg') }}"
                            class="card-img-top rounded-circle card-image-circle" alt="major">
                    @endif

                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">{{ $doctor->name }}</h4>
                        <h6 class="card-title fw-bold text-center">{{ $doctor->major->title }}</h6>
                        <a href="{{ route('booking.create', $doctor->id) }}"
                            class="btn btn-outline-primary card-button">حجز موعيد</a>
                    </div>
                </div>
            @endforeach
        </div>

    <x-navbar/>
    </div>


@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
        integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection
