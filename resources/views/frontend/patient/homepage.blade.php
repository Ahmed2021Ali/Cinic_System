@extends('frontend.patient.layouts.index')

@section('title', 'Page Home')



@section('content_page')

        {{--  under_navbar  --}}

    <div class="container-fluid bg-blue text-white pt-3">
        <div class="container pb-5">
            <div class="row gap-2">
                <div class="col-sm order-sm-2">
                    <img src="{{ url('assets/images/banner.jpg') }}" class="img-fluid banner-img banner-img" alt="banner-image"
                        height="200">
                </div>
                <div class="col-sm order-sm-1">
                    <h1 class="h6">حتى تستطيع أن تتمتع بنعمة الصحّة، عليك أن تكون حريصاً على صحتك، إليك بعض النصائح الآتية</h1>
                    <p>
                        <ul>
                            <li>اشرب كميات كبيرة من المياه يوميّاً، واهتم بتناول وجباتك الرئيسة الفطور، والغداء,العشاء</li>
                            <li>التزم بنظامٍ غذائيّ صحيّ، وابتعد عن المأكولات الدهنيّة، والمشروبات الغازيّة، واحرص على أن يكون نظامك الغذائيّ</li>
                            <li>احرص على أكل الخضار والفواكه، واغسلها جيّداً قبل الأكل حتى تتخلّص من السموم الكيميائيّة فيها</li>
                            <li>ابتعد عن المواد المعلّبة، والأطعمة المضافة إليها مواد حافظة أو منكهات صناعيّة</li>
                        </ul>
                    </p>
                </div>
            </div>
        </div>
    </div>
            {{--  Major  --}}
    <div class="container">
        <h2 class="h1 fw-bold text-center my-4">تخصصات الطبية </h2>
        <div class="d-flex flex-wrap gap-4 justify-content-center">
            @foreach ($major as $major)
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ asset('images/doctors/major.jpg') }}" class="card-img-top rounded-circle card-image-circle"
                        alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center">{{ $major->title }}</h4>
                        <a href="{{ route('major_doctors.index',$major->id) }}" class="btn btn-outline-primary card-button">دكاترة  المتاحة في هذا التخصص </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

         {{--  Doctor  --}}

    <h2 class="h1 fw-bold text-center my-4">الدكاترة</h2>
    <section class="splide home__slider__doctors mb-5">
        <div class="splide__track ">
            <ul class="splide__list">
                @foreach ($doctor as $doctor)
                    <li class="splide__slide">
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
                                <a href="{{ route('booking.create',$doctor->id) }}" class="btn btn-outline-primary card-button">حجز موعد</a>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</div>

        {{--  upfooter  --}}

    <div class="banner container d-block d-lg-grid d-md-block d-sm-block">
        <div class="info">
            <div class="info__details">
                <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                    alt="" width="50" height="50">
                <h4 class="title m-0">
                    everything you need is found at VCare.
                </h4>
                <p class="content">
                    search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                    you
                    can also order medicine or book a surgery.
                </p>
            </div>
        </div>
        <div class="info">
            <div class="info__details">
                <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                    alt="" width="50" height="50">
                <h4 class="title m-0">
                    everything you need is found at VCare.
                </h4>
                <p class="content">
                    search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                    you
                    can also order medicine or book a surgery.
                </p>
            </div>
        </div>
        <div class="info">
            <div class="info__details">
                <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                    alt="" width="50" height="50">
                <h4 class="title m-0">
                    everything you need is found at VCare.
                </h4>
                <p class="content">
                    search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                    you
                    can also order medicine or book a surgery.
                </p>
            </div>
        </div>
        <div class="info">
            <div class="info__details">
                <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                    alt="" width="50" height="50">
                <h4 class="title m-0">
                    everything you need is found at VCare.
                </h4>
                <p class="content">
                    search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                    you
                    can also order medicine or book a surgery.
                </p>
            </div>
        </div>
        <div class="bottom--left bottom--content bg-blue text-white">
            <h4 class="title">download the application now</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus facere eveniet in id, quod
                explicabo minus ut, sint possimus, fuga voluptas. Eius molestias eveniet labore ullam magnam sequi
                possimus quaerat!</p>
            <div class="app-group">
                <div class="app"><img
                        src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/google-play-logo.svg"
                        alt="">Google Play</div>
                <div class="app"><img
                        src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/apple-logo.svg"
                        alt="">App Store</div>
            </div>
        </div>
        <div class="bottom--right bg-blue text-white">
            <img src="{{ url('assets/images/banner.jpg') }}" class="img-fluid banner-img">
        </div>
    </div>
</div>

@endsection

