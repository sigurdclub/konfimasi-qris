    <!DOCTYPE html>

    <!-- =========================================================
    * Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
    ==============================================================

    * Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
    * Created by: ThemeSelection
    * License: You must have a valid license purchased in order to legally use the theme for your project.
    * Copyright ThemeSelection (https://themeselection.com)

    =========================================================
    -->
    <!-- beautify ignore:start -->
    <html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="template/assets/"
    data-template="vertical-menu-template-free"
    >
    <head>
        <meta charset="utf-8" />
        <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
        />

        <title>Konfirmasi QRIS</title>

        <meta name="description" content="" />

        <!-- Core CSS -->
            @include('layouts.css.css_layout')
        <!--/Core CSS -->

        
    </head>

    <body>
        <!-- Layout wrapper -->
        <section class="layout-wrapper layout-content-navbar">
        <section class="layout-container">
            
            <!-- Menu -->
                <!-- Layouts Fix Sidebar -->
                    @include('layouts.sidebar')
                <!-- / Layouts Fix Sidebar -->
            <!-- / Menu -->
            
            <!-- Layout container -->
                <section class="layout-page">
                    
                <!-- Navbar -->
                    @include('layouts.navbar')
                <!-- / Navbar -->
                

                <!-- Content wrapper -->
                <section class="container-fluid content-wrapper">
                    <!-- Content -->
                        @yield('content')
                    <!--/ Content -->
                </section>
                <!--/ Content wrapper -->

                @yield('modal')
                <!-- Footer Layout Fix -->
                    @include('layouts.footer')
                <!--/ Footer Layout Fix -->
            <!-- / Layout wrapper -->

        <!-- Core JS -->
            @include('layouts.js.js_layout')
        <!--/ Core JS -->

    
    </body>
    </html>
