@extends('backend.layouts.parent')

@section('title', 'Update Doctor')

@section('content')

<a href="{{ route('doctor.index') }}" class="btn btn-info">Show All Doctors</a>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <form method="POST" action="{{ route('doctor.update', $doctor->id) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="row mb-3">
                                <label for="type" class="col-md-4 col-form-label text-md-end">{{ __('Major') }}</label>

                                <div class="col-md-6">
                                    <select name="major_id" id="major" class="form-control">
                                        @foreach ($major as $major)
                                            <option {{ $major->id == $doctor->major_id ? 'selected' : '' }}
                                                value="{{ $major->id }}">{{ $major->title }}</option>
                                        @endforeach
                                    </select>
                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ $doctor->name }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="number"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        value="{{ $doctor->phone }}" required autocomplete="name" autofocus>

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="city" class="col-md-4 col-form-label text-md-end">{{ __('City') }}</label>

                                <div class="col-md-6">
                                    <select name="city" id="city" class="form-control">
                                            <option value="Cairo">Cairo</option>
                                            <option value="Alexandria">Alexandria</option>
                                            <option value="Giza">Giza</option>
                                            <option value="Shubra El-Kheima">Shubra El-Kheima</option>
                                            <option value="Port Said">Port Said</option>
                                            <option value="Suez">Suez</option>
                                            <option value="Luxor">Luxor</option>
                                            <option value="Asyut">Asyut</option>
                                            <option value="Ismailia">Ismailia</option>
                                            <option value="Fayoum">Fayoum</option>
                                            <option value="Zagazig">Zagazig</option>
                                            <option value="Aswan">Aswan</option>
                                            <option value="Damietta">Damietta</option>
                                            <option value="Minya">Minya</option>
                                            <option value="Beni Suef">Beni Suef</option>
                                            <option value="Hurghada">Hurghada</option>
                                            <option value="Sohag">Sohag</option>
                                            <option value="Banha">Banha</option>
                                            <option value="Kafr el-Sheikh">Kafr el-Sheikh</option>
                                            <option value="Arish">Arish</option>
                                            <option value="10th of Ramadan">10th of Ramadan</option>
                                            <option value="Bilbais">Bilbais</option>
                                            <option value="Marsa Matruh">Marsa Matruh</option>
                                            <option value="Idfu">Idfu</option>
                                    </select>
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $doctor->email }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="image"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Image') }}</label>

                                <div class="col-md-6">
                                    <input type="file" name="image" id="image" class="form-control" value="{{$doctor->image}}">
                                    @if(isset($doctor->image))
                                    <div class="card p-1" style="width: 15rem;">
                                        <img src="{{url('/images/doctors/'.$doctor->image)}}" lass="w-25">
                                    </div>
                                    @endif

                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
                    </div>
                </div>

                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
