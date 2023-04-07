@extends('layouts.auth.app')
{{-- This will show common layout --}}
@section('common_layout') @parent @endsection
{{-- This will hide forgot layout --}}
@section('forgot_layout') @endsection
@section('title','Forgot Password | KTWO')
@section('heading','Branding tools designed for your business')
@section('content')
<form class="form w-100" method="POST" action="{{ route('password.email') }}">
    {{ csrf_field() }}
    <!--begin::Heading-->
    <div class="text-center mb-10">
        <!--begin::Title-->
        <h1 class="text-dark fw-bolder mb-3">Forgot Password ?</h1>
        <!--end::Title-->
        <!--begin::Link-->
        <div class="text-gray-500 fw-semibold fs-6">Enter your email to reset your password.</div>
        <!--end::Link-->
    </div>
    <!--begin::Heading-->
    <!--begin::Input group=-->
    <div class="fv-row mb-8">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <!--begin::Email-->
        <input type="text" placeholder="Email" name="email" autocomplete="email" autofocus value="{{ old('email') }}" class="form-control bg-transparent @error('email') is-invalid @enderror" />
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <!--end::Email-->
    </div>
    <!--begin::Actions-->
    <div class="d-flex flex-wrap justify-content-center pb-lg-0">
        <button type="submit" name="btn_forgot_password" class="btn btn-primary me-4">
            <!--begin::Indicator label-->
            <span class="indicator-label">Submit</span>
            <!--end::Indicator label-->
        </button>
        <a href="{{ route('login') }}" class="btn btn-light">Cancel</a>
    </div>
    <!--end::Actions-->
</form>
@endsection