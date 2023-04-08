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
         <!--begin::Description-->
         <small class="text-gray-500 fs-7 fw-semibold my-1">#XRS-45670</small>
         <!--end::Description-->
      </h1>
      <!--end::Title-->
   </div>
   <!--end::Page title-->
   <!--begin::Actions-->
   <div class="d-flex align-items-center">
      <!--begin::Daterange-->
      <a href="#" class="btn btn-flex bg-body h-35px h-lg-40px px-5" id="kt_dashboard_daterangepicker" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-trigger="hover" title="Select dashboard daterange">
         <span class="me-4">
            <span class="text-muted fw-semibold me-1" id="kt_dashboard_daterangepicker_title">Today</span>
            <span class="text-primary fw-bold" id="kt_dashboard_daterangepicker_date">Dec 16</span>
         </span>
         <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
         <span class="svg-icon svg-icon-4 m-0">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                  fill="currentColor"
               />
            </svg>
         </span>
         <!--end::Svg Icon-->
      </a>
      <!--end::Daterange-->
   </div>
   <!--end::Actions-->
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
                  <a href="#" class="card-title fw-bold text-success fs-5 mb-3 d-block">Total Users</a>
                  <div class="py-1">
                     <span class="text-dark fs-1 fw-bold me-2">50</span>
                     <span class="fw-semibold text-muted fs-7">Avarage</span>
                  </div>
                  <div class="progress h-7px bg-success bg-opacity-50 mt-7">
                     <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
                  <a href="#" class="card-title fw-bold text-warning fs-5 mb-3 d-block">Company Finance</a>
                  <div class="py-1">
                     <span class="text-dark fs-1 fw-bold me-2">15%</span>
                     <span class="fw-semibold text-muted fs-7">48k Goal</span>
                  </div>
                  <div class="progress h-7px bg-warning bg-opacity-50 mt-7">
                     <div class="progress-bar bg-warning" role="progressbar" style="width: 15%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
               <!--end:: Body-->
            </div>
            <!--end: Statistics Widget 6-->
         </div>
         <div class="col-xl-3">
            <!--begin: Statistics Widget 6-->
            <div class="card bg-light-light card-xl-stretch mb-5 mb-xl-8">
               <!--begin::Body-->
               <div class="card-body my-3">
                  <a href="#" class="card-title fw-bold text-primary fs-5 mb-3 d-block">Marketing Analysis</a>
                  <div class="py-1">
                     <span class="text-dark fs-1 fw-bold me-2">76%</span>
                     <span class="fw-semibold text-muted fs-7">400k Impressions</span>
                  </div>
                  <div class="progress h-7px bg-primary bg-opacity-50 mt-7">
                     <div class="progress-bar bg-primary" role="progressbar" style="width: 76%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
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
                  <a href="#" class="card-title fw-bold text-primary fs-5 mb-3 d-block">Marketing Analysis</a>
                  <div class="py-1">
                     <span class="text-dark fs-1 fw-bold me-2">76%</span>
                     <span class="fw-semibold text-muted fs-7">400k Impressions</span>
                  </div>
                  <div class="progress h-7px bg-primary bg-opacity-50 mt-7">
                     <div class="progress-bar bg-primary" role="progressbar" style="width: 76%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
               </div>
               <!--end:: Body-->
            </div>
            <!--end: Statistics Widget 6-->
         </div>
      </div>
      <!--begin::Col-->
      <div class="col-xl-4 mb-xl-10">
         <!--begin::Mixed Widget 2-->
         <div class="card h-xl-100">
            <!--begin::Header-->
            <div class="card-header border-0 bg-primary py-5">
               <h3 class="card-title fw-bold text-white">Sales Statistics</h3>
               <div class="card-toolbar">
                  <!--begin::Menu-->
                  <button type="button" class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                     <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                     <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                           <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                              <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                              <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                              <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                           </g>
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </button>
                  <!--begin::Menu 3-->
                  <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                     <!--begin::Heading-->
                     <div class="menu-item px-3">
                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                     </div>
                     <!--end::Heading-->
                     <!--begin::Menu item-->
                     <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">Create Invoice</a>
                     </div>
                     <!--end::Menu item-->
                     <!--begin::Menu item-->
                     <div class="menu-item px-3">
                        <a href="#" class="menu-link flex-stack px-3">Create Payment <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                     </div>
                     <!--end::Menu item-->
                     <!--begin::Menu item-->
                     <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">Generate Bill</a>
                     </div>
                     <!--end::Menu item-->
                     <!--begin::Menu item-->
                     <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                        <a href="#" class="menu-link px-3">
                           <span class="menu-title">Subscription</span>
                           <span class="menu-arrow"></span>
                        </a>
                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3">Plans</a>
                           </div>
                           <!--end::Menu item-->
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3">Billing</a>
                           </div>
                           <!--end::Menu item-->
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3">Statements</a>
                           </div>
                           <!--end::Menu item-->
                           <!--begin::Menu separator-->
                           <div class="separator my-2"></div>
                           <!--end::Menu separator-->
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <div class="menu-content px-3">
                                 <!--begin::Switch-->
                                 <label class="form-check form-switch form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                    <!--end::Input-->
                                    <!--end::Label-->
                                    <span class="form-check-label text-muted fs-6">Recuring</span>
                                    <!--end::Label-->
                                 </label>
                                 <!--end::Switch-->
                              </div>
                           </div>
                           <!--end::Menu item-->
                        </div>
                        <!--end::Menu sub-->
                     </div>
                     <!--end::Menu item-->
                     <!--begin::Menu item-->
                     <div class="menu-item px-3 my-1">
                        <a href="#" class="menu-link px-3">Settings</a>
                     </div>
                     <!--end::Menu item-->
                  </div>
                  <!--end::Menu 3-->
                  <!--end::Menu-->
               </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body p-0">
               <!--begin::Chart-->
               <div class="mixed-widget-2-chart card-rounded-bottom bg-primary" data-kt-color="primary" style="height: 200px;"></div>
               <!--end::Chart-->
               <!--begin::Stats-->
               <div class="card-p mt-n20 position-relative">
                  <!--begin::Row-->
                  <div class="row g-0">
                     <!--begin::Col-->
                     <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                        <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                           <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
                              <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
                              <rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
                              <rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
                           </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <a href="#" class="text-warning fw-semibold fs-6">Weekly Sales</a>
                     </div>
                     <!--end::Col-->
                     <!--begin::Col-->
                     <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
                        <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                        <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                           <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                 opacity="0.3"
                                 d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                 fill="currentColor"
                              />
                              <path
                                 d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                 fill="currentColor"
                              />
                           </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <a href="#" class="text-primary fw-semibold fs-6">New Projects</a>
                     </div>
                     <!--end::Col-->
                  </div>
                  <!--end::Row-->
                  <!--begin::Row-->
                  <div class="row g-0">
                     <!--begin::Col-->
                     <div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                        <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                           <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                 opacity="0.3"
                                 d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                 fill="currentColor"
                              />
                              <path
                                 d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                 fill="currentColor"
                              />
                           </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <a href="#" class="text-danger fw-semibold fs-6 mt-2">Item Orders</a>
                     </div>
                     <!--end::Col-->
                     <!--begin::Col-->
                     <div class="col bg-light-success px-6 py-8 rounded-2">
                        <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                        <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                           <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
                              <path
                                 opacity="0.3"
                                 d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                 fill="currentColor"
                              />
                           </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <a href="#" class="text-success fw-semibold fs-6 mt-2">Bug Reports</a>
                     </div>
                     <!--end::Col-->
                  </div>
                  <!--end::Row-->
               </div>
               <!--end::Stats-->
            </div>
            <!--end::Body-->
         </div>
         <!--end::Mixed Widget 2-->
      </div>
      <!--end::Col-->

      <!--begin::Col-->
      <div class="col-xl-4 mb-xl-10">
         <!--begin::Mixed Widget 6-->
         <div class="card h-xl-100">
            <!--begin::Beader-->
            <div class="card-header border-0 py-5">
               <h3 class="card-title align-items-start flex-column">
                  <span class="card-label fw-bold fs-3 mb-1">Sales Statistics</span>
                  <span class="text-muted fw-semibold fs-7">Recent sales statistics</span>
               </h3>
               <div class="card-toolbar">
                  <!--begin::Menu-->
                  <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                     <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                     <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                           <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                              <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                              <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                              <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                           </g>
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </button>
                  <!--begin::Menu 1-->
                  <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_639c1d87d1644">
                     <!--begin::Header-->
                     <div class="px-7 py-5">
                        <div class="fs-5 text-dark fw-bold">Filter Options</div>
                     </div>
                     <!--end::Header-->
                     <!--begin::Menu separator-->
                     <div class="separator border-gray-200"></div>
                     <!--end::Menu separator-->
                     <!--begin::Form-->
                     <div class="px-7 py-5">
                        <!--begin::Input group-->
                        <div class="mb-10">
                           <!--begin::Label-->
                           <label class="form-label fw-semibold">Status:</label>
                           <!--end::Label-->
                           <!--begin::Input-->
                           <div>
                              <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_639c1d87d1644" data-allow-clear="true">
                                 <option></option>
                                 <option value="1">Approved</option>
                                 <option value="2">Pending</option>
                                 <option value="2">In Process</option>
                                 <option value="2">Rejected</option>
                              </select>
                           </div>
                           <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                           <!--begin::Label-->
                           <label class="form-label fw-semibold">Member Type:</label>
                           <!--end::Label-->
                           <!--begin::Options-->
                           <div class="d-flex">
                              <!--begin::Options-->
                              <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                 <input class="form-check-input" type="checkbox" value="1" />
                                 <span class="form-check-label">Author</span>
                              </label>
                              <!--end::Options-->
                              <!--begin::Options-->
                              <label class="form-check form-check-sm form-check-custom form-check-solid">
                                 <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                 <span class="form-check-label">Customer</span>
                              </label>
                              <!--end::Options-->
                           </div>
                           <!--end::Options-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                           <!--begin::Label-->
                           <label class="form-label fw-semibold">Notifications:</label>
                           <!--end::Label-->
                           <!--begin::Switch-->
                           <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                              <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                              <label class="form-check-label">Enabled</label>
                           </div>
                           <!--end::Switch-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                           <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                           <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                        </div>
                        <!--end::Actions-->
                     </div>
                     <!--end::Form-->
                  </div>
                  <!--end::Menu 1-->
                  <!--end::Menu-->
               </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body p-0 d-flex flex-column">
               <!--begin::Stats-->
               <div class="card-px pt-5 pb-10 flex-grow-1">
                  <!--begin::Row-->
                  <div class="row g-0 mt-5 mb-10">
                     <!--begin::Col-->
                     <div class="col">
                        <div class="d-flex align-items-center me-2">
                           <!--begin::Symbol-->
                           <div class="symbol symbol-50px me-3">
                              <div class="symbol-label bg-light-info">
                                 <!--begin::Svg Icon | path: icons/duotune/art/art007.svg-->
                                 <span class="svg-icon svg-icon-1 svg-icon-info">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          opacity="0.3"
                                          d="M20.859 12.596L17.736 13.596L10.388 20.944C10.2915 21.0406 10.1769 21.1172 10.0508 21.1695C9.9247 21.2218 9.78953 21.2486 9.65302 21.2486C9.5165 21.2486 9.3813 21.2218 9.25519 21.1695C9.12907 21.1172 9.01449 21.0406 8.918 20.944L2.29999 14.3229C2.10543 14.1278 1.99619 13.8635 1.99619 13.588C1.99619 13.3124 2.10543 13.0481 2.29999 12.853L11.853 3.29999C11.9495 3.20341 12.0641 3.12679 12.1902 3.07452C12.3163 3.02225 12.4515 2.9953 12.588 2.9953C12.7245 2.9953 12.8597 3.02225 12.9858 3.07452C13.1119 3.12679 13.2265 3.20341 13.323 3.29999L21.199 11.176C21.3036 11.2791 21.3797 11.4075 21.4201 11.5486C21.4605 11.6898 21.4637 11.8391 21.4295 11.9819C21.3953 12.1247 21.3249 12.2562 21.2249 12.3638C21.125 12.4714 20.9989 12.5514 20.859 12.596Z"
                                          fill="currentColor"
                                       />
                                       <path
                                          d="M14.8 10.184C14.7447 10.1843 14.6895 10.1796 14.635 10.1699L5.816 8.69997C5.55436 8.65634 5.32077 8.51055 5.16661 8.29469C5.01246 8.07884 4.95035 7.8106 4.99397 7.54897C5.0376 7.28733 5.18339 7.05371 5.39925 6.89955C5.6151 6.7454 5.88334 6.68332 6.14498 6.72694L14.963 8.19692C15.2112 8.23733 15.435 8.36982 15.59 8.56789C15.7449 8.76596 15.8195 9.01502 15.7989 9.26564C15.7784 9.51626 15.6642 9.75001 15.479 9.92018C15.2939 10.0904 15.0514 10.1846 14.8 10.184ZM17 18.6229C17 19.0281 17.0985 19.4272 17.287 19.7859C17.4755 20.1446 17.7484 20.4521 18.0821 20.6819C18.4158 20.9117 18.8004 21.0571 19.2027 21.1052C19.605 21.1534 20.0131 21.103 20.3916 20.9585C20.7702 20.814 21.1079 20.5797 21.3758 20.2757C21.6437 19.9716 21.8336 19.607 21.9293 19.2133C22.025 18.8195 22.0235 18.4085 21.925 18.0154C21.8266 17.6223 21.634 17.259 21.364 16.9569L19.843 15.257C19.7999 15.2085 19.7471 15.1697 19.688 15.1432C19.6289 15.1167 19.5648 15.1029 19.5 15.1029C19.4352 15.1029 19.3711 15.1167 19.312 15.1432C19.2529 15.1697 19.2001 15.2085 19.157 15.257L17.636 16.9569C17.2254 17.4146 16.9988 18.0081 17 18.6229ZM10.388 20.9409L17.736 13.5929H1.99999C1.99921 13.7291 2.02532 13.8643 2.0768 13.9904C2.12828 14.1165 2.2041 14.2311 2.29997 14.3279L8.91399 20.9409C9.01055 21.0381 9.12539 21.1152 9.25188 21.1679C9.37836 21.2205 9.51399 21.2476 9.65099 21.2476C9.78798 21.2476 9.92361 21.2205 10.0501 21.1679C10.1766 21.1152 10.2914 21.0381 10.388 20.9409Z"
                                          fill="currentColor"
                                       />
                                    </svg>
                                 </span>
                                 <!--end::Svg Icon-->
                              </div>
                           </div>
                           <!--end::Symbol-->
                           <!--begin::Title-->
                           <div>
                              <div class="fs-4 text-dark fw-bold">$2,034</div>
                              <div class="fs-7 text-muted fw-bold">Author Sales</div>
                           </div>
                           <!--end::Title-->
                        </div>
                     </div>
                     <!--end::Col-->
                     <!--begin::Col-->
                     <div class="col">
                        <div class="d-flex align-items-center me-2">
                           <!--begin::Symbol-->
                           <div class="symbol symbol-50px me-3">
                              <div class="symbol-label bg-light-danger">
                                 <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                 <span class="svg-icon svg-icon-1 svg-icon-danger">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          opacity="0.3"
                                          d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                          fill="currentColor"
                                       />
                                       <path
                                          d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                          fill="currentColor"
                                       />
                                    </svg>
                                 </span>
                                 <!--end::Svg Icon-->
                              </div>
                           </div>
                           <!--end::Symbol-->
                           <!--begin::Title-->
                           <div>
                              <div class="fs-4 text-dark fw-bold">$706</div>
                              <div class="fs-7 text-muted fw-bold">Commision</div>
                           </div>
                           <!--end::Title-->
                        </div>
                     </div>
                     <!--end::Col-->
                  </div>
                  <!--end::Row-->
                  <!--begin::Row-->
                  <div class="row g-0">
                     <!--begin::Col-->
                     <div class="col">
                        <div class="d-flex align-items-center me-2">
                           <!--begin::Symbol-->
                           <div class="symbol symbol-50px me-3">
                              <div class="symbol-label bg-light-success">
                                 <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                 <span class="svg-icon svg-icon-1 svg-icon-success">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
                                       <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
                                       <path
                                          opacity="0.3"
                                          d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                          fill="currentColor"
                                       />
                                    </svg>
                                 </span>
                                 <!--end::Svg Icon-->
                              </div>
                           </div>
                           <!--end::Symbol-->
                           <!--begin::Title-->
                           <div>
                              <div class="fs-4 text-dark fw-bold">$49</div>
                              <div class="fs-7 text-muted fw-bold">Average Bid</div>
                           </div>
                           <!--end::Title-->
                        </div>
                     </div>
                     <!--end::Col-->
                     <!--begin::Col-->
                     <div class="col">
                        <div class="d-flex align-items-center me-2">
                           <!--begin::Symbol-->
                           <div class="symbol symbol-50px me-3">
                              <div class="symbol-label bg-light-primary">
                                 <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm010.svg-->
                                 <span class="svg-icon svg-icon-1 svg-icon-primary">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                       <path
                                          opacity="0.3"
                                          d="M3 6C2.4 6 2 5.6 2 5V3C2 2.4 2.4 2 3 2H5C5.6 2 6 2.4 6 3C6 3.6 5.6 4 5 4H4V5C4 5.6 3.6 6 3 6ZM22 5V3C22 2.4 21.6 2 21 2H19C18.4 2 18 2.4 18 3C18 3.6 18.4 4 19 4H20V5C20 5.6 20.4 6 21 6C21.6 6 22 5.6 22 5ZM6 21C6 20.4 5.6 20 5 20H4V19C4 18.4 3.6 18 3 18C2.4 18 2 18.4 2 19V21C2 21.6 2.4 22 3 22H5C5.6 22 6 21.6 6 21ZM22 21V19C22 18.4 21.6 18 21 18C20.4 18 20 18.4 20 19V20H19C18.4 20 18 20.4 18 21C18 21.6 18.4 22 19 22H21C21.6 22 22 21.6 22 21Z"
                                          fill="currentColor"
                                       />
                                       <path
                                          d="M3 16C2.4 16 2 15.6 2 15V9C2 8.4 2.4 8 3 8C3.6 8 4 8.4 4 9V15C4 15.6 3.6 16 3 16ZM13 15V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V15C11 15.6 11.4 16 12 16C12.6 16 13 15.6 13 15ZM17 15V9C17 8.4 16.6 8 16 8C15.4 8 15 8.4 15 9V15C15 15.6 15.4 16 16 16C16.6 16 17 15.6 17 15ZM9 15V9C9 8.4 8.6 8 8 8H7C6.4 8 6 8.4 6 9V15C6 15.6 6.4 16 7 16H8C8.6 16 9 15.6 9 15ZM22 15V9C22 8.4 21.6 8 21 8H20C19.4 8 19 8.4 19 9V15C19 15.6 19.4 16 20 16H21C21.6 16 22 15.6 22 15Z"
                                          fill="currentColor"
                                       />
                                    </svg>
                                 </span>
                                 <!--end::Svg Icon-->
                              </div>
                           </div>
                           <!--end::Symbol-->
                           <!--begin::Title-->
                           <div>
                              <div class="fs-4 text-dark fw-bold">$5.8M</div>
                              <div class="fs-7 text-muted fw-bold">All Time Sales</div>
                           </div>
                           <!--end::Title-->
                        </div>
                     </div>
                     <!--end::Col-->
                  </div>
                  <!--end::Row-->
               </div>
               <!--end::Stats-->
               <!--begin::Chart-->
               <div class="mixed-widget-6-chart card-rounded-bottom" data-kt-chart-color="success" style="height: 200px;"></div>
               <!--end::Chart-->
            </div>
            <!--end::Body-->
         </div>
         <!--end::Mixed Widget 6-->
      </div>
      <!--end::Col-->
      <!--begin::Col-->
      <div class="col-xl-4 mb-xl-10">
         <!--begin::List Widget 4-->
         <div class="card h-xl-100">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
               <h3 class="card-title align-items-start flex-column">
                  <span class="card-label fw-bold text-dark">Trends</span>
                  <span class="text-muted mt-1 fw-semibold fs-7">Latest tech trends</span>
               </h3>
               <div class="card-toolbar">
                  <!--begin::Menu-->
                  <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                     <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                     <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                           <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                              <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                              <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                              <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                           </g>
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </button>
                  <!--begin::Menu 3-->
                  <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                     <!--begin::Heading-->
                     <div class="menu-item px-3">
                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                     </div>
                     <!--end::Heading-->
                     <!--begin::Menu item-->
                     <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">Create Invoice</a>
                     </div>
                     <!--end::Menu item-->
                     <!--begin::Menu item-->
                     <div class="menu-item px-3">
                        <a href="#" class="menu-link flex-stack px-3">Create Payment <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
                     </div>
                     <!--end::Menu item-->
                     <!--begin::Menu item-->
                     <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">Generate Bill</a>
                     </div>
                     <!--end::Menu item-->
                     <!--begin::Menu item-->
                     <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                        <a href="#" class="menu-link px-3">
                           <span class="menu-title">Subscription</span>
                           <span class="menu-arrow"></span>
                        </a>
                        <!--begin::Menu sub-->
                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3">Plans</a>
                           </div>
                           <!--end::Menu item-->
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3">Billing</a>
                           </div>
                           <!--end::Menu item-->
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3">Statements</a>
                           </div>
                           <!--end::Menu item-->
                           <!--begin::Menu separator-->
                           <div class="separator my-2"></div>
                           <!--end::Menu separator-->
                           <!--begin::Menu item-->
                           <div class="menu-item px-3">
                              <div class="menu-content px-3">
                                 <!--begin::Switch-->
                                 <label class="form-check form-switch form-check-custom form-check-solid">
                                    <!--begin::Input-->
                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                    <!--end::Input-->
                                    <!--end::Label-->
                                    <span class="form-check-label text-muted fs-6">Recuring</span>
                                    <!--end::Label-->
                                 </label>
                                 <!--end::Switch-->
                              </div>
                           </div>
                           <!--end::Menu item-->
                        </div>
                        <!--end::Menu sub-->
                     </div>
                     <!--end::Menu item-->
                     <!--begin::Menu item-->
                     <div class="menu-item px-3 my-1">
                        <a href="#" class="menu-link px-3">Settings</a>
                     </div>
                     <!--end::Menu item-->
                  </div>
                  <!--end::Menu 3-->
                  <!--end::Menu-->
               </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-5">
               <!--begin::Item-->
               <div class="d-flex align-items-sm-center mb-7">
                  <!--begin::Symbol-->
                  <div class="symbol symbol-50px me-5">
                     <span class="symbol-label">
                        <img src="assets/media/svg/brand-logos/plurk.svg" class="h-50 align-self-center" alt="" />
                     </span>
                  </div>
                  <!--end::Symbol-->
                  <!--begin::Section-->
                  <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                     <div class="flex-grow-1 me-2">
                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Top Authors</a>
                        <span class="text-muted fw-semibold d-block fs-7">Mark, Rowling, Esther</span>
                     </div>
                     <span class="badge badge-light fw-bold my-2">+82$</span>
                  </div>
                  <!--end::Section-->
               </div>
               <!--end::Item-->
               <!--begin::Item-->
               <div class="d-flex align-items-sm-center mb-7">
                  <!--begin::Symbol-->
                  <div class="symbol symbol-50px me-5">
                     <span class="symbol-label">
                        <img src="assets/media/svg/brand-logos/telegram.svg" class="h-50 align-self-center" alt="" />
                     </span>
                  </div>
                  <!--end::Symbol-->
                  <!--begin::Section-->
                  <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                     <div class="flex-grow-1 me-2">
                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Popular Authors</a>
                        <span class="text-muted fw-semibold d-block fs-7">Randy, Steve, Mike</span>
                     </div>
                     <span class="badge badge-light fw-bold my-2">+280$</span>
                  </div>
                  <!--end::Section-->
               </div>
               <!--end::Item-->
               <!--begin::Item-->
               <div class="d-flex align-items-sm-center mb-7">
                  <!--begin::Symbol-->
                  <div class="symbol symbol-50px me-5">
                     <span class="symbol-label">
                        <img src="assets/media/svg/brand-logos/vimeo.svg" class="h-50 align-self-center" alt="" />
                     </span>
                  </div>
                  <!--end::Symbol-->
                  <!--begin::Section-->
                  <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                     <div class="flex-grow-1 me-2">
                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">New Users</a>
                        <span class="text-muted fw-semibold d-block fs-7">John, Pat, Jimmy</span>
                     </div>
                     <span class="badge badge-light fw-bold my-2">+4500$</span>
                  </div>
                  <!--end::Section-->
               </div>
               <!--end::Item-->
               <!--begin::Item-->
               <div class="d-flex align-items-sm-center mb-7">
                  <!--begin::Symbol-->
                  <div class="symbol symbol-50px me-5">
                     <span class="symbol-label">
                        <img src="assets/media/svg/brand-logos/bebo.svg" class="h-50 align-self-center" alt="" />
                     </span>
                  </div>
                  <!--end::Symbol-->
                  <!--begin::Section-->
                  <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                     <div class="flex-grow-1 me-2">
                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Active Customers</a>
                        <span class="text-muted fw-semibold d-block fs-7">Mark, Rowling, Esther</span>
                     </div>
                     <span class="badge badge-light fw-bold my-2">+686$</span>
                  </div>
                  <!--end::Section-->
               </div>
               <!--end::Item-->
               <!--begin::Item-->
               <div class="d-flex align-items-sm-center mb-7">
                  <!--begin::Symbol-->
                  <div class="symbol symbol-50px me-5">
                     <span class="symbol-label">
                        <img src="assets/media/svg/brand-logos/kickstarter.svg" class="h-50 align-self-center" alt="" />
                     </span>
                  </div>
                  <!--end::Symbol-->
                  <!--begin::Section-->
                  <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                     <div class="flex-grow-1 me-2">
                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Bestseller Theme</a>
                        <span class="text-muted fw-semibold d-block fs-7">Disco, Retro, Sports</span>
                     </div>
                     <span class="badge badge-light fw-bold my-2">+726$</span>
                  </div>
                  <!--end::Section-->
               </div>
               <!--end::Item-->
               <!--begin::Item-->
               <div class="d-flex align-items-sm-center">
                  <!--begin::Symbol-->
                  <div class="symbol symbol-50px me-5">
                     <span class="symbol-label">
                        <img src="assets/media/svg/brand-logos/fox-hub.svg" class="h-50 align-self-center" alt="" />
                     </span>
                  </div>
                  <!--end::Symbol-->
                  <!--begin::Section-->
                  <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                     <div class="flex-grow-1 me-2">
                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Fox Broker App</a>
                        <span class="text-muted fw-semibold d-block fs-7">Finance, Corporate, Apps</span>
                     </div>
                     <span class="badge badge-light fw-bold my-2">+145$</span>
                  </div>
                  <!--end::Section-->
               </div>
               <!--end::Item-->
            </div>
            <!--end::Body-->
         </div>
         <!--end::List Widget 4-->
      </div>
      <!--end::Col-->
   </div>
   <!--end::Row-->
   <!--begin::Row-->

   <!--begin::Modals-->
   <!--begin::Modal - New Product-->
   <div class="modal fade" id="kt_modal_add_event" tabindex="-1" aria-hidden="true">
      <!--begin::Modal dialog-->
      <div class="modal-dialog modal-dialog-centered mw-650px">
         <!--begin::Modal content-->
         <div class="modal-content">
            <!--begin::Form-->
            <form class="form" action="#" id="kt_modal_add_event_form">
               <!--begin::Modal header-->
               <div class="modal-header">
                  <!--begin::Modal title-->
                  <h2 class="fw-bold" data-kt-calendar="title">Add Event</h2>
                  <!--end::Modal title-->
                  <!--begin::Close-->
                  <div class="btn btn-icon btn-sm btn-active-icon-primary" id="kt_modal_add_event_close">
                     <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                     <span class="svg-icon svg-icon-1">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                           <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </div>
                  <!--end::Close-->
               </div>
               <!--end::Modal header-->
               <!--begin::Modal body-->
               <div class="modal-body py-10 px-lg-17">
                  <!--begin::Input group-->
                  <div class="fv-row mb-9">
                     <!--begin::Label-->
                     <label class="fs-6 fw-semibold required mb-2">Event Name</label>
                     <!--end::Label-->
                     <!--begin::Input-->
                     <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_name" />
                     <!--end::Input-->
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="fv-row mb-9">
                     <!--begin::Label-->
                     <label class="fs-6 fw-semibold mb-2">Event Description</label>
                     <!--end::Label-->
                     <!--begin::Input-->
                     <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_description" />
                     <!--end::Input-->
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="fv-row mb-9">
                     <!--begin::Label-->
                     <label class="fs-6 fw-semibold mb-2">Event Location</label>
                     <!--end::Label-->
                     <!--begin::Input-->
                     <input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_location" />
                     <!--end::Input-->
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="fv-row mb-9">
                     <!--begin::Checkbox-->
                     <label class="form-check form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="" id="kt_calendar_datepicker_allday" />
                        <span class="form-check-label fw-semibold" for="kt_calendar_datepicker_allday">All Day</span>
                     </label>
                     <!--end::Checkbox-->
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="row row-cols-lg-2 g-10">
                     <div class="col">
                        <div class="fv-row mb-9">
                           <!--begin::Label-->
                           <label class="fs-6 fw-semibold mb-2 required">Event Start Date</label>
                           <!--end::Label-->
                           <!--begin::Input-->
                           <input class="form-control form-control-solid" name="calendar_event_start_date" placeholder="Pick a start date" id="kt_calendar_datepicker_start_date" />
                           <!--end::Input-->
                        </div>
                     </div>
                     <div class="col" data-kt-calendar="datepicker">
                        <div class="fv-row mb-9">
                           <!--begin::Label-->
                           <label class="fs-6 fw-semibold mb-2">Event Start Time</label>
                           <!--end::Label-->
                           <!--begin::Input-->
                           <input class="form-control form-control-solid" name="calendar_event_start_time" placeholder="Pick a start time" id="kt_calendar_datepicker_start_time" />
                           <!--end::Input-->
                        </div>
                     </div>
                  </div>
                  <!--end::Input group-->
                  <!--begin::Input group-->
                  <div class="row row-cols-lg-2 g-10">
                     <div class="col">
                        <div class="fv-row mb-9">
                           <!--begin::Label-->
                           <label class="fs-6 fw-semibold mb-2 required">Event End Date</label>
                           <!--end::Label-->
                           <!--begin::Input-->
                           <input class="form-control form-control-solid" name="calendar_event_end_date" placeholder="Pick a end date" id="kt_calendar_datepicker_end_date" />
                           <!--end::Input-->
                        </div>
                     </div>
                     <div class="col" data-kt-calendar="datepicker">
                        <div class="fv-row mb-9">
                           <!--begin::Label-->
                           <label class="fs-6 fw-semibold mb-2">Event End Time</label>
                           <!--end::Label-->
                           <!--begin::Input-->
                           <input class="form-control form-control-solid" name="calendar_event_end_time" placeholder="Pick a end time" id="kt_calendar_datepicker_end_time" />
                           <!--end::Input-->
                        </div>
                     </div>
                  </div>
                  <!--end::Input group-->
               </div>
               <!--end::Modal body-->
               <!--begin::Modal footer-->
               <div class="modal-footer flex-center">
                  <!--begin::Button-->
                  <button type="reset" id="kt_modal_add_event_cancel" class="btn btn-light me-3">Cancel</button>
                  <!--end::Button-->
                  <!--begin::Button-->
                  <button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
                     <span class="indicator-label">Submit</span>
                     <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                  </button>
                  <!--end::Button-->
               </div>
               <!--end::Modal footer-->
            </form>
            <!--end::Form-->
         </div>
      </div>
   </div>
   <!--end::Modal - New Product-->
   <!--begin::Modal - New Product-->
   <div class="modal fade" id="kt_modal_view_event" tabindex="-1" aria-hidden="true">
      <!--begin::Modal dialog-->
      <div class="modal-dialog modal-dialog-centered mw-650px">
         <!--begin::Modal content-->
         <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header border-0 justify-content-end">
               <!--begin::Edit-->
               <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Edit Event" id="kt_modal_view_event_edit">
                  <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                  <span class="svg-icon svg-icon-2">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           opacity="0.3"
                           d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                           fill="currentColor"
                        />
                        <path
                           d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                           fill="currentColor"
                        />
                     </svg>
                  </span>
                  <!--end::Svg Icon-->
               </div>
               <!--end::Edit-->
               <!--begin::Edit-->
               <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-danger me-2" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Delete Event" id="kt_modal_view_event_delete">
                  <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                  <span class="svg-icon svg-icon-2">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
                     </svg>
                  </span>
                  <!--end::Svg Icon-->
               </div>
               <!--end::Edit-->
               <!--begin::Close-->
               <div class="btn btn-icon btn-sm btn-color-gray-500 btn-active-icon-primary" data-bs-toggle="tooltip" title="Hide Event" data-bs-dismiss="modal">
                  <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                  <span class="svg-icon svg-icon-1">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                     </svg>
                  </span>
                  <!--end::Svg Icon-->
               </div>
               <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-20 px-lg-17">
               <!--begin::Row-->
               <div class="d-flex">
                  <!--begin::Icon-->
                  <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                  <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
                        <path
                           d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                           fill="currentColor"
                        />
                        <path
                           d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                           fill="currentColor"
                        />
                     </svg>
                  </span>
                  <!--end::Svg Icon-->
                  <!--end::Icon-->
                  <div class="mb-9">
                     <!--begin::Event name-->
                     <div class="d-flex align-items-center mb-2">
                        <span class="fs-3 fw-bold me-3" data-kt-calendar="event_name"></span>
                        <span class="badge badge-light-success" data-kt-calendar="all_day"></span>
                     </div>
                     <!--end::Event name-->
                     <!--begin::Event description-->
                     <div class="fs-6" data-kt-calendar="event_description"></div>
                     <!--end::Event description-->
                  </div>
               </div>
               <!--end::Row-->
               <!--begin::Row-->
               <div class="d-flex align-items-center mb-2">
                  <!--begin::Icon-->
                  <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                  <span class="svg-icon svg-icon-1 svg-icon-success me-5">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <circle fill="currentColor" cx="12" cy="12" r="8" />
                     </svg>
                  </span>
                  <!--end::Svg Icon-->
                  <!--end::Icon-->
                  <!--begin::Event start date/time-->
                  <div class="fs-6">
                     <span class="fw-bold">Starts</span>
                     <span data-kt-calendar="event_start_date"></span>
                  </div>
                  <!--end::Event start date/time-->
               </div>
               <!--end::Row-->
               <!--begin::Row-->
               <div class="d-flex align-items-center mb-9">
                  <!--begin::Icon-->
                  <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                  <span class="svg-icon svg-icon-1 svg-icon-danger me-5">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <circle fill="currentColor" cx="12" cy="12" r="8" />
                     </svg>
                  </span>
                  <!--end::Svg Icon-->
                  <!--end::Icon-->
                  <!--begin::Event end date/time-->
                  <div class="fs-6">
                     <span class="fw-bold">Ends</span>
                     <span data-kt-calendar="event_end_date"></span>
                  </div>
                  <!--end::Event end date/time-->
               </div>
               <!--end::Row-->
               <!--begin::Row-->
               <div class="d-flex align-items-center">
                  <!--begin::Icon-->
                  <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                  <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                           opacity="0.3"
                           d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                           fill="currentColor"
                        />
                        <path
                           d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                           fill="currentColor"
                        />
                     </svg>
                  </span>
                  <!--end::Svg Icon-->
                  <!--end::Icon-->
                  <!--begin::Event location-->
                  <div class="fs-6" data-kt-calendar="event_location"></div>
                  <!--end::Event location-->
               </div>
               <!--end::Row-->
            </div>
            <!--end::Modal body-->
         </div>
      </div>
   </div>
   <!--end::Modal - New Product-->
   <!--end::Modals-->
</div>
@endsection
