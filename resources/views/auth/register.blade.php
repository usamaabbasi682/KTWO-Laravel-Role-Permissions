@extends('layouts.auth.app')
{{-- This will show common layout --}}
@section('common_layout') @parent @endsection
{{-- This will hide forgot layout --}}
@section('forgot_layout') @endsection
@section('title','Register | KTWO')
@section('heading','Branding tools designed for your business')
@section('content')
<form class="form w-100" id="register_form" method="POST" action="{{ route('register') }}" >
    {{ csrf_field() }}
    <!--begin::Heading-->
    <div class="text-center mb-11">
        <!--begin::Title-->
        <h1 class="text-dark fw-bolder mb-3">Sign Up</h1>
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
        <input type="text" placeholder="Name" name="name" autocomplete="name" autofocus value="{{ old('name') }}" class="form-control bg-transparent @error('name') is-invalid @enderror" />        
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <!--end::Email-->
    </div>

    <div class="fv-row mb-8">
        <!--begin::Email-->
        <input type="text" placeholder="Email" name="email" autocomplete="email" class="form-control bg-transparent @error('email') is-invalid @enderror" value="{{ old('email') }}" />
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <!--end::Email-->
    </div>
    <!--begin::Input group-->
    <div class="fv-row mb-8" data-kt-password-meter="true">
        <!--begin::Wrapper-->
        <div class="mb-1">
            <!--begin::Input wrapper-->
            <div class="position-relative mb-3">
                <input class="form-control bg-transparent @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" autocomplete="off" />
                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                    <i class="bi bi-eye-slash fs-2"></i>
                    <i class="bi bi-eye fs-2 d-none"></i>
                </span>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!--end::Input wrapper-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Hint-->
        {{-- <div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div> --}}
        <!--end::Hint-->
    </div>
    <!--end::Input group=-->
    <!--begin::Submit button-->
    <div class="d-grid mb-10">
        <button type="submit" name="btn_register" class="btn btn-primary">
            <!--begin::Indicator label-->
            <span class="indicator-label">Sign up</span>
            <!--end::Indicator label-->
        </button>
    </div>
    <!--end::Submit button-->
    <!--begin::Sign up-->
    <div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account?
    <a href="{{ route('login') }}" class="link-primary fw-semibold">Sign in</a></div>
    <!--end::Sign up-->
</form>
@endsection