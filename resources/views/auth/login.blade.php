@extends('layouts.auth.app')
{{-- This will show common layout --}}
@section('common_layout') @parent @endsection
{{-- This will hide forgot layout --}}
@section('forgot_layout') @endsection
@section('title','Login | KTWO')
@section('heading','Branding tools designed for your business')
@section('content')
<form class="form w-100" id="login_form" action="{{ route('login') }}" method="POST">
    {{ csrf_field() }}
    <!--begin::Heading-->
    <div class="text-center mb-11">
        <!--begin::Title-->
        <h1 class="text-dark fw-bolder mb-3">Sign In</h1>
        <!--end::Title-->
        <!--begin::Subtitle-->
        <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
        <!--end::Subtitle=-->
    </div>
    <!--begin::Heading-->
    <!--begin::Login options-->
    <div class="row g-3 mb-9">
        <!--begin::Col-->
        <div class="col-md-12">
            <!--begin::Google link=-->
            <a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
            <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-15px me-3" />Sign in with Google</a>
            <!--end::Google link=-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Login options-->
    <!--begin::Separator-->
    <div class="separator separator-content my-14">
        <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
    </div>
    <!--end::Separator-->
    <!--begin::Input group=-->
    <div class="fv-row mb-8">
        <!--begin::Email-->
        <input type="text" placeholder="Email" name="email" autocomplete="email" value="{{ old('email') }}" autofocus class="form-control bg-transparent @error('email') is-invalid @enderror" />
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <!--end::Email-->
    </div>
    <!--end::Input group=-->
    <div class="fv-row mb-3">
        <!--begin::Password-->
        <input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent @error('password') is-invalid @enderror" />
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <!--end::Password-->
    </div>
    <!--end::Input group=-->
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
        <div></div>
        @if (Route::has('password.request'))
            <!--begin::Link-->
            <a href="{{ route('password.request') }}" class="link-primary">Forgot Password ?</a>
            <!--end::Link-->
        @endif
    </div>
    <!--end::Wrapper-->
    <!--begin::Submit button-->
    <div class="d-grid mb-10">
        <button type="submit" name="btn_login" class="btn btn-primary">
            <!--begin::Indicator label-->
            <span class="indicator-label">Sign In</span>
            <!--end::Indicator label-->
        </button>
    </div>
    <!--end::Submit button-->
    <!--begin::Sign up-->
    <div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
    <a href="{{ route('register') }}" class="link-primary">Sign up</a></div>
    <!--end::Sign up-->
</form>
@endsection