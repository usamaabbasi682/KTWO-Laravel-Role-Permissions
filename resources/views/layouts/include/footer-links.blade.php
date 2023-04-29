<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src={{ asset('assets/plugins/global/plugins.bundle.js') }}></script>
<script src={{ asset('assets/js/scripts.bundle.js') }}></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src={{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}></script>
<script src={{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src={{ asset('assets/js/custom/apps/user-management/users/list/table.js') }}></script>
<script src={{ asset('assets/js/custom/apps/user-management/users/list/export-users.js') }}></script>
<script src={{ asset('assets/js/custom/apps/user-management/users/list/add.js') }}></script>
<script src={{ asset('assets/js/custom/apps/user-management/permissions/list.js') }}></script>
<script src={{ asset('assets/js/custom/apps/user-management/permissions/add-permission.js') }}></script>
<script src={{ asset('assets/js/custom/apps/user-management/permissions/update-permission.js') }}></script>
<script src={{ asset('assets/js/custom/account/settings/signin-methods.js') }}></script>
<script src={{ asset('assets/js/widgets.bundle.js') }}></script>
<script src={{ asset('assets/js/custom/widgets.js') }}></script>
<script src={{ asset('assets/js/custom/apps/chat/chat.js') }}></script>
<script src={{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}></script>
<script src={{ asset('assets/js/custom/utilities/modals/create-campaign.js') }}></script>
<script src={{ asset('assets/js/custom/utilities/modals/create-app.js') }}></script>
<script src={{ asset('assets/js/custom/utilities/modals/users-search.js') }}></script> 
<script src="{{ asset('assets/js/custom/custom-jquery.js') }}"></script>
<script src={{ asset('assets/js/custom/jquery-search.js') }}></script>
<script src="{{ asset('assets/js/custom/validation.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pluralize/8.0.0/pluralize.min.js"></script>
<!--end::Custom Javascript-->