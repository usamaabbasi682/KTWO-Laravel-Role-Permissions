@extends('layouts.auth.app')
{{-- This will show common layout --}}
@section('common_layout') @parent @endsection
{{-- This will hide forgot layout --}}
@section('forgot_layout') @endsection
@section('title','Reset Password | KTWO')
@section('heading','Branding tools designed for your business')
@section('content')
<form class="form w-100" method="POST" action="{{ route('password.update') }}">
    {{ csrf_field() }}
    <input type="hidden" name="token" value="{{ $token }}">
    <!--begin::Heading-->
    <div class="text-center mb-10">
        <!--begin::Title-->
        <h1 class="text-dark fw-bolder mb-3">Setup New Password</h1>
        <!--end::Title-->
        <!--begin::Link-->
        <div class="text-gray-500 fw-semibold fs-6">Have you already reset the password ?
        <a href="{{ route('login') }}" class="link-primary fw-bold">Sign in</a></div>
        <!--end::Link-->
    </div>
    <!--begin::Heading-->

    <div class="fv-row mb-8">
        <!--begin::Repeat Password-->
        <input type="text" placeholder="Email" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus class="form-control bg-transparent @error('email') is-invalid @enderror" />
        
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <!--end::Repeat Password-->
    </div>
    <!--begin::Input group-->
    <div class="fv-row mb-8" data-kt-password-meter="">
        <!--begin::Wrapper-->
        <div class="mb-1">
            <!--begin::Input wrapper-->
            <div class="position-relative mb-3">
                <input class="form-control bg-transparent @error('password') is-invalid @enderror" id="password" type="password" placeholder="Password" name="password" autocomplete="new-password" />
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
        <div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
        <!--end::Hint-->
    </div>
    <!--end::Input group=-->
    <!--end::Input group=-->
    <div class="fv-row mb-8">
        <!--begin::Repeat Password-->
        <input id="password-confirm" type="password" placeholder="Repeat Password" name="password_confirmation" autocomplete="new-password" class="form-control bg-transparent" />
        <!--end::Repeat Password-->
    </div>
    <!--end::Input group=-->
    <!--begin::Action-->
    <div class="d-grid mb-10">
        <button type="submit" name="btn_forgot_password" class="btn btn-primary">
            <!--begin::Indicator label-->
            <span class="indicator-label">Submit</span>
            <!--end::Indicator label-->
        </button>
    </div>
    <!--end::Action-->
</form>
@endsection



