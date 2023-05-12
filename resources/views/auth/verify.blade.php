@extends('layouts.auth.app')
{{-- This will hide common layout --}}
@section('common_layout') @endsection
{{-- This will show forgot layout --}}
@section('forgot_layout') @parent @endsection
@section('title','Verify Email | KTWO')
@section('content')
<div class="card-body py-15 py-lg-20">
    <!--begin::Logo-->
    <div class="mb-14">
        <a href="#" class="">
            @isset($darkLogo)
                <img alt="Logo" src="{{ asset('storage/'.$darkLogo->id.'/'.$darkLogo->file_name) ?? asset('assets/media/logos/dark-logo.png') }}" class="h-25px h-lg-65px" />
            @else   
                <img alt="Logo" src="{{ asset('assets/media/logos/dark-logo.png') }}" class="h-25px h-lg-65px" />
            @endisset
        </a>
    </div>
    <!--end::Logo-->
    <!--begin::Title-->
    <h1 class="fw-bolder text-gray-900 mb-5">{{ __('Verify Your Email Address') }}</h1>
    <!--end::Title-->
    <!--begin::Action-->
    <div class="fs-6 mb-8">
        <span class="fw-semibold text-gray-500">{{ __('Before proceeding, please check your email for a verification link.') }}</span>
    </div>

    <div class="fs-6 mb-8">
        <span class="fw-semibold text-gray-500">If you did't receive the email?</span>
    </div>
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif
    <!--end::Action-->
    <!--begin::Link-->
    <div class="mb-11">
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-sm btn-primary">{{ __('Request Another') }}</button>.
        </form>
    </div>
    <!--end::Link-->
    <!--begin::Illustration-->
    <div class="mb-0">
        <img src="{{ asset('assets/media/auth/please-verify-your-email.png') }}" class="mw-100 mh-300px theme-light-show" alt="" />
        <img src="{{ asset('assets/media/auth/please-verify-your-email-dark.png') }}" class="mw-100 mh-300px theme-dark-show" alt="" />
    </div>
    <!--end::Illustration-->
</div>
@endsection