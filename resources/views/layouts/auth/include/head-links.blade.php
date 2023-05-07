<title>@yield('title','KTWO')</title>
<meta charset="utf-8" />
<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
@isset($faviconIcon)
    <link rel="shortcut icon" href="{{ asset('storage/'.$faviconIcon->id.'/'.$faviconIcon->file_name) }}" />
@else 
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
@endisset
<!--begin::Fonts(mandatory for all pages)-->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
<!--end::Fonts-->
<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
<!--end::Global Stylesheets Bundle-->