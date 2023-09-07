@extends('frontend.patient.layouts.index')


@section('title','Contact_Us')


@section('content_page')

<div class="container">

    <x-name-content message=' التواصل معانا'/>

    <div class="d-flex flex-column gap-3 account-form mx-auto mt-5">
        <form class="form" method="POST" action="{{ route('contact.store') }}" >
            @csrf
            <div class="form-items">
                <div class="mb-3">
                    <label class="form-label required-label" for="name">Name</label>
                    <input type="text" class="form-control" value="@if (isset(Auth::user()->name)){{Auth::user()->name}}@endif" name="name" id="name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="phone">Phone</label>
                    <input type="tel" class="form-control" value="@if (isset(Auth::user()->phone)){{Auth::user()->phone}}@endif" name="phone" id="phone" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="email">Email</label>
                    <input type="email" class="form-control" value="@if (isset(Auth::user()->email)){{Auth::user()->email}}@endif" name="email" id="email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="subject">subject</label>
                    <input type="text" class="form-control" name="title" id="title" required>
                </div>
                <div class="mb-3">
                    <label class="form-label required-label" for="message">message</label>
                    <textarea class="form-control" name="subject" id="subject" required></textarea>
                </div>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-danger">تاكيد ارسالة الرساله</button>
            </div>
        </form>
    </div>

</div>
@endsection
