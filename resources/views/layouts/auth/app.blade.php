<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @includeIf('layouts.auth.include.head-links')
</head>
<body id="kt_body" class="auth-bg bgi-size-cover bgi-position-center bgi-no-repeat">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Main-->
		<!--begin::Root-->
		@section('common_layout')
		<div class="d-flex flex-column flex-root">
			<!--begin::Page bg image-->
			@isset($login_page_bg_media)
				@php $pageMedia=asset('storage/'.$login_page_bg_media->id.'/'.$login_page_bg_media->file_name); @endphp
			@else    
				@php $pageMedia=asset('assets/media/auth/bg4.jpg') @endphp
			@endisset
			<style>body { background-image: url({{ $pageMedia ?? '' }}); } [data-theme="dark"] body { background-image: url({{ $pageMedia ?? '' }}); }</style>
			<!--end::Page bg image-->
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<!--begin::Aside-->
				<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
					<!--begin::Aside-->
					<div class="d-flex flex-center flex-lg-start flex-column">
						<!--begin::Logo-->
						<a href="#" class="mb-7">
							@isset($lightLogo)
								<img alt="Logo" src="{{ asset('storage/'.$lightLogo->id.'/'.$lightLogo->file_name) ?? asset('assets/media/logos/demo20.svg') }}" class="h-25px h-lg-65px" />
							@else   
								<img alt="Logo" src="{{ asset('assets/media/logos/logo.png') }}" class="h-25px h-lg-65px" />
							@endisset
						</a>
						<!--end::Logo-->
						<!--begin::Title-->
						<h2 class="text-white fw-normal m-0">{{ $login_heading ?? ' ' }}</h2>
						<!--end::Title-->
					</div>
					<!--begin::Aside-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-center w-lg-50 p-10">
					<!--begin::Card-->
					<div class="card rounded-3 w-md-550px">
						<!--begin::Card body-->
						<div class="card-body p-10 p-lg-20">
							<!--begin::Form-->
                            @yield('content')
							<!--end::Form-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		@show

		@section('forgot_layout')
		<div class="d-flex flex-column flex-root">
			@isset($login_page_bg_media)
				@php $pageMedia=asset('storage/'.$login_page_bg_media->id.'/'.$login_page_bg_media->file_name); @endphp
			@else    
				@php $pageMedia=asset('assets/media/auth/bg4.jpg') @endphp
			@endisset
			<!--begin::Page bg image-->
			<style>body { background-image: url({{ $pageMedia ?? '' }}); } [data-theme="dark"] body { background-image: url({{ $pageMedia ?? '' }}); }</style>
			<!--end::Page bg image-->
			<div class="d-flex flex-column flex-center flex-column-fluid">
				<!--begin::Content-->
				<div class="d-flex flex-column flex-center text-center p-10">
					<!--begin::Wrapper-->
					<div class="card card-flush w-lg-650px py-5">
						@yield('content')
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
		</div>
		@show
		<!--end::Root-->
		<!--end::Main-->
    @includeIf('layouts.auth.include.footer-links')
</body>
</html>
