@extends('layouts.app') 
@section('title','Roles | KTWO')
@section('toolbar')
<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap gap-2">
    <!--begin::Page title-->
    <div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
        <!--begin::Title-->
        <h1 class="d-flex text-dark fw-bold m-0 fs-3">Roles List</h1>
        <!--end::Title-->
        <!--begin::Breadcrumb-->
        <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-600">
                <a href="{{ route('home') }}" class="text-gray-600 text-hover-primary">Dashboard</a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-600">Role Management</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-600">Roles</li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-gray-500">Roles List</li>
            <!--end::Item-->
        </ul>
        <!--end::Breadcrumb-->
    </div>
    <!--end::Page title-->
</div>
@endsection 
@section('content')
<div class="content flex-row-fluid" id="kt_content">
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
    <!--begin::Row-->
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">
        <!--begin::Col-->
        @forelse ($roles as $role)
        <div class="col-md-4">
            <!--begin::Card-->
            <div class="card card-flush h-md-100">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>{{ Str::ucfirst($role->name) ?? '' }}</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-1 mt-2">
                    <!--begin::Users-->
                    <div class="fw-bold text-gray-600 mb-5">Total users with this role: {{ $role->users->count(); }}</div>
                    <!--end::Users-->
                    <!--begin::Permissions-->
                    @php($permissionCount = $role->getPermissionNames()->count())
                    <div class="d-flex flex-column text-gray-600" >
                        @forelse ($role->getPermissionNames() as $permission)
                            @if ($loop->iteration <= 4)
                                <div class="d-flex align-items-center py-2 text-primary" style="margin-bottom: -9px;">
                                <span class="bullet bg-primary me-3"></span>{{ Str::ucfirst($permission) ?? '' }}</div>
                            @else   
                                @if ($permissionCount > 4 && $loop->last)
                                    @php($remaning = $permissionCount-4)
                                    <div class="d-flex align-items-center py-2 text-primary" style="margin-bottom: -9px;">
                                    <span class="bullet bg-primary me-3"></span>{{ 'and '.$remaning.' more...' ?? '' }}</div> 
                                @endif                           
                            @endif
                        @empty
                            <div class="d-flex align-items-center py-2 text-danger">
                            <span class="bullet bg-danger me-3"></span>No Permission Found</div>
                        @endforelse
                    </div>
                    <!--end::Permissions-->
                </div>
                <!--end::Card body-->
                <!--begin::Card footer-->
                <div class="card-footer flex-wrap d-flex pt-0">
                    <a href="{{ route('roles.show',$role) }}" class="btn btn-light btn-active-primary my-1 me-2">View Role</a>
                    <a href="{{ route('roles.edit',$role) }}" class="btn btn-light btn-active-light-primary my-1">Edit Role</a>
                    <form action="{{ route('roles.destroy',$role) }}" method="post">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button type="submit" class="btn btn-light btn-active-light-danger my-1 ml-1" onclick="return confirm('Are you sure you want to delete?')" style="margin-left: 6px;">Delete Role</button>
                    </form>
                    {{-- <a href="{{ route('roles.edit',$role) }}" class="btn btn-light btn-active-light-primary my-1">Delete Role</a> --}}
                </div>
                <!--end::Card footer-->
            </div>
            <!--end::Card-->
        </div>
        @empty
            
        @endforelse
        <!--end::Col-->

        <!--end::Col-->
        <!--begin::Add new card-->
        <div class="ol-md-4">
            <!--begin::Card-->
            <div class="card h-md-100">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center">
                    <!--begin::Button-->
                    <a href="{{ route('roles.create') }}" class="btn btn-clear d-flex flex-column flex-center">
                        <!--begin::Illustration-->
                        <img src="{{ asset('assets/media/auth/4.png') }}" alt="" class="mw-100 mh-150px mb-7" />
                        <!--end::Illustration-->
                        <!--begin::Label-->
                        <div class="fw-bold fs-3 text-gray-600 text-hover-primary">Add New Role</div>
                        <!--end::Label-->
                    </a>
                    <!--begin::Button-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--begin::Add new card-->
    </div>
    <!--end::Row-->
</div>
@endsection
