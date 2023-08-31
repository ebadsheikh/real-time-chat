<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../" />
    @if (isset($setting->application_name))
        <title>
            {{ $setting->application_name ?? '' }} {{ $setting['short_description'] ?? '' }}</title>
    @endif
    <title>{{ __('multirestaurant') }} | {{ __('brings_everything_at_your_doorstep') }}</title>
    <meta charset="utf-8" />
    <meta name="description"
          content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Flask & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    @if (isset($setting))
        <link rel="shortcut icon" href="{{ ' ' . $setting->getFirstMediaUrl('setting.images') . ' ' }}" />
    @else
        <link rel="shortcut icon" href="{{ asset('assets/media/logos/default-dark.svg') }}" />
    @endif
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
          type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    @livewireStyles
{{--    <style>--}}
{{--        .image-input-placeholder {--}}
{{--            background-image: url('assets/media/svg/files/blank-image.svg');--}}
{{--        }--}}

{{--        [data-theme="dark"] .image-input-placeholder {--}}
{{--            background-image: url('assets/media/svg/files/blank-image-dark.svg');--}}
{{--        }--}}
{{--    </style>--}}
</head>
<!--end::Head-->
@stack('styles')
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
      data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
      data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
      data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page d-flex flex-row flex-row-fluid" id="kt_app_page">
        @yield('layouts.left_side_nav')
        <!--begin::Wrapper-->
        <div class="app-wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            @yield('layouts.header')
            @yield('content')
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::App-->


<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('assets/js/custom/apps/ecommerce/catalog/save-category.js') }}"></script>
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<!--end::Custom Javascript-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>

<!--end::Page Custom Javascript-->
@yield('scripts')
<!--end::Body-->
@livewireScripts
</body>

</html>
