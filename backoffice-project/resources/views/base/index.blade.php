<!DOCTYPE html>
<html lang="en" >
    <!--begin::Head-->
    <head><base href=""/>
        <title>Metronic - The World's #1 Selling Tailwind CSS & Bootstrap Admin Template by KeenThemes</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Metronic - The World's #1 Selling Tailwind CSS & Bootstrap Admin Template by KeenThemes" />
        <meta property="og:url" content="https://keenthemes.com/metronic"/>
        <meta property="og:site_name" content="Metronic by Keenthemes" />
        <link rel="canonical" href="http://preview.keenthemes.com?page=index"/>
        <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>
        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->
                    <!--begin::Vendor Stylesheets(used for this page only)-->
                            <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>
                            <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
                        <!--end::Vendor Stylesheets-->
                    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
                    @vite('resources/sass/style.scss')
                        <!--end::Global Stylesheets Bundle-->
        <script>
            // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
            if (window.top != window.self) {
                window.top.location.replace(window.self.location.href);
            }
        </script>
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body  id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"  class="app-default" >
@include('base.partials.theme-mode/_init')

<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
@include('base.layout.partials/_header')
        <!--begin::Wrapper-->
        <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
@include('base.layout.partials/_sidebar')
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
@include('base.layout.partials/_toolbar')
@yield('contenido')
                                    </div>
                <!--end::Content wrapper-->
@include('base.layout.partials/_footer')
                            </div>
            <!--end:::Main-->
                    </div>
        <!--end::Wrapper-->
            </div>
    <!--end::Page-->
</div>
<!--end::App-->
@include('base.partials._drawers')

@include('base.partials._scrolltop')
                    <!--begin::Modals-->
@include('base.partials.modals/_upgrade-plan')
@include('base.partials.modals/create-app/_main')

@include('base.partials.modals/_view-users')
@include('base.partials.modals/users-search/_main')
@include('base.partials.modals/_invite-friends')
            <!--end::Modals-->
        <!--begin::Javascript-->
        <script>
            var hostUrl = "assets/";        </script>
                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                            <script src="/assets/plugins/global/plugins.bundle.js"></script>
                            <script src="/assets/js/scripts.bundle.js"></script>
                            @vite ('resources/js/scripts.js')
                        <!--end::Global Javascript Bundle-->
                    <!--begin::Vendors Javascript(used for this page only)-->
                            <script src="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
                            <script src="/assets/plugins/custom/datatables/datatables.bundle.js"></script>
                        <!--end::Vendors Javascript-->
                    <!--begin::Custom Javascript(used for this page only)-->
                            <script src="/assets/js/widgets.bundle.js"></script>
                            <script src="/assets/js/custom/widgets.js"></script>
                            <script src="/assets/js/custom/apps/chat/chat.js"></script>
                            <script src="/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
                            <script src="/assets/js/custom/utilities/modals/create-app.js"></script>
                            <script src="/assets/js/custom/utilities/modals/new-target.js"></script>
                            <script src="/assets/js/custom/utilities/modals/users-search.js"></script>
                        <!--end::Custom Javascript-->
                <!--end::Javascript-->
    </body>
    <!--end::Body-->
</html>