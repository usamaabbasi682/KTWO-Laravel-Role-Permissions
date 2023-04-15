@extends('layouts.app') 
@section('title','View Role | KTWO')
@section('toolbar')
<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap gap-2">
    <!--begin::Page title-->
    <div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
        <!--begin::Title-->
        <h1 class="d-flex text-dark fw-bold m-0 fs-3">View Role</h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-600">
                <a href="{{ route('roles.index') }}" class="text-gray-600 text-hover-primary">Dashboard</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-600">View Management</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-500">Permissions</li>
            <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->
    </div>
    <div class="d-flex align-items-center">
        <!--begin::Daterange-->
        <a href="{{ route('roles.index') }}" class="btn btn-light me-3 btn-sm">
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
                        <h2>Assign Permissions</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-5">
                    <form id="kt_modal_update_role_form" class="form" action="#" method="POST">
                        {{ csrf_field() }}
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_role_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_role_header" data-kt-scroll-wrappers="#kt_modal_update_role_scroll" data-kt-scroll-offset="300px">
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bold form-label mb-2">
                                    <span class="required">Role name</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" readonly value="{{ $role->name ?? '' }}" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Permissions-->
                            <div class="fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bold form-label mb-2">Role Permissions</label>
                                <!--end::Label-->
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                        <!--begin::Table body-->
                                        <tbody class="text-gray-600 fw-semibold">
                                            <!--begin::Table row-->
                                            <tr>
                                                <td class="text-gray-800">Administrator Access
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Allows a full access to the system"></i></td>
                                                <td>
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                                        <input class="form-check-input" type="checkbox" value="" id="kt_roles_select_all" />
                                                        <span class="form-check-label" for="kt_roles_select_all">Select all</span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </td>
                                            </tr>
                                            <!--end::Table row-->
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <!--begin::Input-->
                                    <input type="text" id="search" class="search-input form-control" placeholder="Search by Keyword e.g. Post,User...">
                                    <!--end::Input-->
                                </div>
                            </div>

                            <div class="row mt-2" id="items-to-search">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bold form-label mb-2">Permissions</label>
                                <!--end::Label-->
                                @forelse ($permissions as $permission)
                                <div class="col-md-4 mt-3" data-search-data="{{ $permission->name ?? '' }}">
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                        <input class="form-check-input" type="checkbox" value="" name="user_management_read" />
                                        <span class="form-check-label">{{ Str::ucfirst($permission->name) ?? '' }}</span>
                                    </label>
                                </div>
                                @empty
                                    
                                @endforelse
                            </div>
                            <!--end::Permissions-->
                        </div>
                        <div class='separator my-5'></div>
                        <!--end::Scroll-->
                        <!--begin::Action buttons-->
                        <div class="d-flex justify-content-end">
                            <!--begin::Button-->
                            <button type="reset" data-kt-contacts-type="cancel" class="btn btn-light me-3">Cancel</button>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <button type="submit" data-kt-contacts-type="submit" class="btn btn-primary">
                                <span class="indicator-label">Save</span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Action buttons-->
                    </form>
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
