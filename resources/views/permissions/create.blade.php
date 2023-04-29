@extends('layouts.app') 
@section('title','Create User | KTWO')
@section('toolbar')
<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap gap-2">
    <!--begin::Page title-->
    <div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
        <!--begin::Title-->
        <h1 class="d-flex text-dark fw-bold m-0 fs-3">Add Permission</h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-600">
                <a href="{{ route('roles.index') }}" class="text-gray-600 text-hover-primary">Dashboard</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-600">Permission Management</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-600">Permissions</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-500">Add Permission</li>
            <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->
    </div>
    <div class="d-flex align-items-center">
        <!--begin::Daterange-->
        <a href="{{ route('permissions.index') }}" class="btn btn-light me-3 btn-sm">
            Back
        </a>
        <!--end::Daterange-->
     </div
    <!--end::Page title-->
</div>
@endsection 
@section('content')
<div class="content flex-row-fluid" id="kt_content">
    <!--begin::Contacts App- Add New Contact-->
    <div class="row g-7">
        <div class="col-md-3"></div>
        <div class="col-xl-6 ">
            <!--begin::Contacts-->
            <div class="card card-flush h-lg-100" id="kt_contacts_main">
                <!--begin::Card header-->
                <div class="card-header pt-7" id="kt_chat_contacts_header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>Add Permission</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <!--begin::Form-->
                    <form class="form" id="permission_form" action="{{ route('permissions.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold fs-6 text-gray-700">Select Permission Types</label>
                                    <!--end::Label-->
                                    <!--begin::Select-->
                                    <input type="hidden" name="permission">
                                    <select name="type" aria-label="Select a Timezone" data-control="select2" data-placeholder="Types" class="form-select form-select-solid">
                                        <option value=""></option>
                                        @forelse ($permissionTypes as $pt)
                                            <option data-kt-flag="flags/united-states.svg" value="{{ $pt ?? '' }}" @selected(old('type') == $pt)>{{ Str::ucfirst($pt) ?? '' }}</option>
                                        @empty
                                            
                                        @endforelse
                                    </select>
                                    @error('type')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <!--end::Select-->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold fs-6 text-gray-700">Select Model</label>
                                    <!--end::Label-->
                                    <!--begin::Select-->
                                    <select name="model" aria-label="Select a Timezone" data-control="select2" data-placeholder="Models" class="form-select form-select-solid">
                                        <option value=""></option>
                                        @forelse ($models as $model)
                                            <option data-kt-flag="flags/united-states.svg" value="{{ $model ?? '' }}" @selected(old('model') == $model)>{{ Str::ucfirst($model) ?? '' }}</option>
                                        @empty
                                            
                                        @endforelse
                                    </select>
                                    @error('model')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <!--end::Select-->
                                </div>
                            </div>
                        </div>
                        <div class='separator my-5'></div>
                        <!--begin::Separator-->
                        <!--end::Separator-->
                        <!--begin::Action buttons-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                <span class="indicator-label">Save</span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Action buttons-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Contacts-->
        </div>
        <div class="col-md-3"></div>
    </div>
    <!--end::Contacts App- Add New Contact-->
</div>
@endsection
