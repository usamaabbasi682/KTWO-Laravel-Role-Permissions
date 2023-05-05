@extends('layouts.app') 
@section('title','Settings | KTWO')
@section('toolbar')
<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap gap-2">
    <!--begin::Page title-->
    <div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
        <!--begin::Title-->
        <h1 class="d-flex text-dark fw-bold m-0 fs-3">Account Settings</h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-600">
                <a href="{{ route('home') }}" class="text-gray-600 text-hover-primary">Dashboard</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-600">Account</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-500">Settings</li>
            <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->
    </div>
    <!--end::Page title-->
</div>
@endsection 
@section('content')
<div class="content flex-row-fluid" id="kt_content">
    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
        @if (session('success'))
        <x-alert class="alert-success">
            <strong>Success!</strong> {{ session('success') }}
        </x-alert>
        @endif
        @if (session('error'))
            <x-alert class="alert-danger">
                <strong>Error!</strong> {{ session('error') }}
            </x-alert>
        @endif
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Profile Details</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::Form-->
            <form class="form" action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Col-->
                        <div class="col-lg-4 text-center">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{ asset('assets/media/logos/default-logo.png') }})">
                                <!--begin::Preview existing avatar-->
                                @isset($light_logo) 
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset('storage/'.$light_logo->id.'/'.$light_logo->file_name) ?? '' }})"></div>
                                @else 
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset('assets/media/logos/default-logo.png')  }})"></div>
                                @endisset
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="light_logo" accept=".png, .jpg, .jpeg,.svg,.ico" />
                                    <input type="hidden" name="light_logo_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Hint-->
                            <div class="form-text">Select Light Logo (Allowed file types: png, jpg, jpeg, svg, ico)</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-lg-4 text-center">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{ asset('assets/media/logos/default-logo.png') }})">
                                <!--begin::Preview existing avatar-->
                                @isset($header_image)
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset('storage/'.$header_image->id.'/'.$header_image->file_name) ?? '' }})"></div>
                                @else 
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset('assets/media/logos/default-logo.png') }})"></div>
                                @endisset
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="header_image" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="dark_logo_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Hint-->
                            <div class="form-text">Select Background image for header (Allowed file types: png, jpg, jpeg.)</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-4 text-center">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{ asset('assets/media/logos/default-logo.png') }})">
                                <!--begin::Preview existing avatar-->
                                @isset($favicon_icon)
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset('storage/'.$favicon_icon->id.'/'.$favicon_icon->file_name) ?? '' }})"></div>
                                @else 
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url({{ asset('assets/media/logos/default-logo.png') }})"></div>
                                @endisset
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="favicon_icon" accept=".png, .jpg, .jpeg,.svg,.ico" />
                                    <input type="hidden" name="favicon_icon_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->
                            <!--begin::Hint-->
                            <div class="form-text">Select Favicon Icon (Allowed file types: png, jpg, jpeg, svg, ico)</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">App Name</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-12 fv-row">
                                    <input type="text" id="appName" name="app_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Application name" value="{{ $settings->app_name ?? env('APP_NAME') }}" />
                                    @error('app_name')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!--end::Col-->
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span>App URL</span>
                            <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Please enter your website url."></i>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" id="appUrl" name="app_url" class="form-control form-control-lg form-control-solid" placeholder="Enter App Url" value="{{ $settings->app_url ?? env('APP_URL') }}" />
                            @error('app_url')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Card body-->
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="submit" class="btn btn-primary" name="btn_profile">Save Changes</button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Basic info-->
</div>
@endsection