@extends('layouts.app') 
@section('title','Dashboard | KTWO')
@section('toolbar')
<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap gap-2">
   <!--begin::Page title-->
   <div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
      <!--begin::Title-->
      <h1 class="d-flex text-dark fw-bold m-0 fs-3">
         Dashboard
         <!--begin::Separator-->
         <span class="h-20px border-gray-400 border-start mx-3"></span>
         <!--end::Separator-->
      </h1>
      <!--end::Title-->
   </div>
   <!--end::Page title-->
</div>
@endsection 
@section('content')
<div class="content flex-row-fluid" id="kt_content">
   <!--begin::Row-->
   <div class="row g-5 g-lg-10">
      <div class="row g-5 g-xl-8">
         <div class="col-xl-3">
            <!--begin: Statistics Widget 6-->
            <div class="card bg-light-success card-xl-stretch mb-xl-8">
               <!--begin::Body-->
               <div class="card-body my-3">
                  <a href="{{ route('users.index') }}" class="card-title fw-bold text-success fs-5 mb-3 d-block">Total Users</a>
                  <div class="py-1">
                     <span class="text-dark fs-1 fw-bold me-2">{{ $total_users ?? '0' }}</span>
                     <span class="fw-semibold text-muted fs-7">Users</span>
                  </div>
                  <div class="progress h-7px bg-success bg-opacity-50 mt-7">
                     <div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
               <!--end:: Body-->
            </div>
            <!--end: Statistics Widget 6-->
         </div>
         <div class="col-xl-3">
            <!--begin: Statistics Widget 6-->
            <div class="card bg-light-danger card-xl-stretch mb-xl-8">
               <!--begin::Body-->
               <div class="card-body my-3">
                  <a href="{{ route('roles.index') }}" class="card-title fw-bold text-warning fs-5 mb-3 d-block">Total Roles</a>
                  <div class="py-1">
                     <span class="text-dark fs-1 fw-bold me-2">{{ $total_roles ?? '0' }}</span>
                     <span class="fw-semibold text-muted fs-7">Roles</span>
                  </div>
                  <div class="progress h-7px bg-warning bg-opacity-50 mt-7">
                     <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
               <!--end:: Body-->
            </div>
            <!--end: Statistics Widget 6-->
         </div>
         <div class="col-xl-3">
            <!--begin: Statistics Widget 6-->
            <div class="card bg-light-info card-xl-stretch mb-5 mb-xl-8">
               <!--begin::Body-->
               <div class="card-body my-3">
                  <a href="{{ route('permissions.index') }}" class="card-title fw-bold text-info fs-5 mb-3 d-block">Total Permissions</a>
                  <div class="py-1">
                     <span class="text-dark fs-1 fw-bold me-2">{{ $total_permissions ?? '0' }}</span>
                     <span class="fw-semibold text-muted fs-7">Permissions</span>
                  </div>
                  <div class="progress h-7px bg-light bg-opacity-50 mt-7">
                     <div class="progress-bar bg-info" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
               <!--end:: Body-->
            </div>
            <!--end: Statistics Widget 6-->
         </div>
         <div class="col-xl-3">
            <!--begin: Statistics Widget 6-->
            <div class="card bg-light-primary card-xl-stretch mb-5 mb-xl-8">
               <!--begin::Body-->
               <div class="card-body my-3">
                  <a href="{{ route('models.index') }}" class="card-title fw-bold text-primary fs-5 mb-3 d-block">Total Models</a>
                  <div class="py-1">
                     <span class="text-dark fs-1 fw-bold me-2">{{ $total_models ?? '0' }}</span>
                     <span class="fw-semibold text-muted fs-7">Models</span>
                  </div>
                  <div class="progress h-7px bg-primary bg-opacity-50 mt-7">
                     <div class="progress-bar bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
               <!--end:: Body-->
            </div>
            <!--end: Statistics Widget 6-->
         </div>
      </div>
   </div>
   <!--end::Row-->
   <!--begin::Row-->
   @hasrole('admin') 
   <!--begin::Followers toolbar-->
   <div class="d-flex flex-wrap flex-stack mb-6">
      <!--begin::Title-->
      <h3 class="text-gray-800 fw-bold my-2">Recent Login User
      <span class="fs-6 text-gray-400 fw-semibold ms-1">({{ $loginUsersCount ?? '0' }})</span></h3>
      <!--end::Title-->
      <!--begin::Controls-->
      <div class="d-flex my-2">
         <!--begin::Select-->
         <a href="javascript:void(0)" id="reloadhomePage" class="btn btn-light btn-active-info my-1 me-2">Reload Page</a>
         <!--end::Select-->
      </div>
      <!--end::Controls-->
   </div>
   <!--end::Followers toolbar-->
   <div class="row g-6 g-xl-9"> 
      @forelse ($loginUsers as $login_user)

      <div class="col-md-6 col-xl-4">
         <!--begin::Card-->
         <a href="javascript:void(0)" class="card border-hover-primary">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-9">
               <!--begin::Card Title-->
               <div class="card-title m-0">
                  <!--begin::Avatar-->
                  <div class="symbol symbol-50px w-50px bg-light">
                     @php
                     $image=$login_user->getMedia('profile')->first()
                     @endphp
                     @isset($image)
                        <img src="{{ asset('storage/'.$image->id.'/'.$image->file_name) ?? '' }}" alt="image" class="p-3" />
                        {{-- <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div> --}}
                     @else 
                        <img src="{{ asset('assets/media/svg/avatars/blank.svg') }}" alt="image" class="p-3" />
                        {{-- <div class="bg-success position-absolute rounded-circle translate-middle start-100 top-100 border border-4 border-body h-15px w-15px ms-n3 mt-n3"></div> --}}
                     @endisset
                  </div>
                  <!--end::Avatar-->
               </div>
               <!--end::Car Title-->
               <!--begin::Card toolbar-->
               <div class="card-toolbar">
                  @if ($login_user->email_verified_at != null)
                     <span class="badge badge-light-primary fw-bold me-auto px-4 py-3">Verified Account</span>
                  @else 
                     <span class="badge badge-light-danger fw-bold me-auto px-4 py-3">Not Verified</span>
                  @endif
               </div>
               <!--end::Card toolbar-->
            </div>
            <!--end:: Card header-->
            <!--begin:: Card body-->
            <div class="card-body p-9">
               <!--begin::Name-->
               <div class="fs-3 fw-bold text-dark">{{ $login_user->name ?? '' }}</div>
               <!--end::Name-->
               <!--begin::Description-->
               <p class="text-gray-400 fw-semibold fs-5 mt-1 mb-7">{{ $login_user->email ?? '' }}</p>
               <!--end::Description-->
               <!--begin::Info-->
               <div class="d-flex flex-wrap mb-5">
                  <!--begin::Due-->
                  <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
                     <div class="fs-6 text-gray-800 fw-bold">
                        @php
                           $date=date_create($login_user->last_logged_in_at);
                        @endphp
                        {{ date_format($date,"Y/m/d H:i:s") }}
                     </div>
                     <div class="fw-semibold text-gray-400">Login At</div>
                  </div>
                  <!--end::Due-->
               </div>
               <!--end::Info-->
            </div>
            <!--end:: Card body-->
         </a>
         <!--end::Card-->
      </div>
      <!--end::Col-->
      @empty
          
      @endforelse    
   </div>
   @endhasrole 
</div>
@endsection
