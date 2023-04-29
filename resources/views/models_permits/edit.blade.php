@extends('layouts.app') 
@section('title','Create Model | KTWO')
@section('toolbar')
<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap gap-2">
    <!--begin::Page title-->
    <div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
        <!--begin::Title-->
        <h1 class="d-flex text-dark fw-bold m-0 fs-3">Edit model</h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
            <!--begin::Item--> 
            <li class="breadcrumb-item text-gray-600">
                <a href="{{ route('roles.index') }}" class="text-gray-600 text-hover-primary">Dashboard</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-600">Model Management</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-600">Models</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-500">Edit Model</li>
            <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->
    </div>
    <div class="d-flex align-items-center">
        <!--begin::Daterange-->
        <a href="{{ route('models.index') }}" class="btn btn-light me-3 btn-sm">
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
                        <h2>Edit Model</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <!--begin::Form-->
                    <form class="form" action="{{ route('models.update',['model'=>$model]) }}" method="POST">
                        {{ csrf_field() }}
                        @method('PUT')
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span class="required">Model Name</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Add model name that associate with permissions"></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input type="text" id="modelName" class="form-control form-control-solid" value="{{ $model->model_name ?? old('name') }}" name="name" placeholder="Enter Model" />
                            @error('name')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mt-3">
                                <span class="required">Description</span>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <textarea name="description" class="form-control form-control-solid" cols="30" rows="5" placeholder="Enter Description">{{ $model->desc ?? old('description') ?? '' }}</textarea>
                            @error('description')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
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
