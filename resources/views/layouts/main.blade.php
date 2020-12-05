<!DOCTYPE html>
<html lang="en">
    <!--begin::Head-->
    <head>
        <meta charset="utf-8" />
        <title>Aprore | Encuesta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="shortcut icon" href="{{ asset('aprore.png') }}" />

        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->

        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles-->

        <!--begin::Page Vendors(used by this page)-->
        @yield('head')
        <!--end::Page Vendors-->
    </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body id="kt_body" class="header-fixed header-mobile-fixed header-bottom-enabled page-loading">
        <!--begin::Main-->
        @include('layouts.includes.header-mobile')
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="d-flex flex-row flex-column-fluid page">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    @include('layouts.includes.header')
                    <!--begin::Content-->
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <!--begin::Entry-->
                        @yield('content')
                        <!--end::Entry-->
                    </div>
                    <!--end::Content-->
                    @include('layouts.includes.footer')
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Page-->
        </div>
        <!--end::Main-->
        @include('layouts.includes.scrolltop')
        @include('layouts.includes.user-panel')
        @include('layouts.includes.config')

        <!--begin::Script extras(used by this page)-->
        @yield('script')
        <!--end::Script extras-->
    </body>
    <!--end::Body-->
</html>
