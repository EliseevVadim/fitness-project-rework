<!DOCTYPE html>
<!--
* CoreUI Free Laravel Bootstrap Admin Template
* @version v2.0.1
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>GoodDiets Admin</title>
    <link rel="icon" href="images/logo.svg" type="image/x-icon">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Icons-->
    <link href="{{ asset('css/admin/free.min.css') }}" rel="stylesheet"> <!-- icons -->
    <link href="{{ asset('css/admin/flag-icon.min.css') }}" rel="stylesheet"> <!-- icons -->
    @stack('styles')

    <!-- Main styles for this application-->
    <link href="{{ asset('css/admin/style.css') }}" rel="stylesheet">
@yield('css')

<!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>

    <link href="{{ asset('css/admin/coreui-chartjs.css') }}" rel="stylesheet">
</head>


<body class="c-app">
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">

    @include('admin.dashboard.shared.nav-builder')

    @include('admin.dashboard.shared.header')

    <div class="c-body">

        <main class="c-main">

            @yield('content')

        </main>
        @include('admin.dashboard.shared.footer')
    </div>
</div>


<!-- CoreUI and necessary plugins-->
<script src="{{ asset('js/admin/coreui.bundle.min.js') }}"></script>
<script src="{{ asset('js/admin/coreui-utils.js') }}"></script>
<script src="{{ asset('js/admin/admin-app.js') }}"></script>
@yield('javascript')
@stack('scripts')

</body>
</html>
