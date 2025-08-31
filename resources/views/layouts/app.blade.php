<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/erimicel/select2-tailwindcss-theme/dist/select2-tailwindcss-theme-plain.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <style>
        @media (min-width: 1024px) {
            #main-wrapper {
                margin-left: 16rem;
                /* 64 = 16rem */
            }
        }

        .dt-layout-row:has(.dt-search),
        .dt-layout-row:has(.dt-length),
        .dt-layout-row:has(.dt-paging) {
            display: none !important;
        }

        .dataTables_length {
            display: none;
        }

        .dataTables_filter {
            display: none;
        }

        .dataTables_paginate {
            display: none;
        }

        .dataTables_info {
            display: none;
        }

        td.dataTables_empty {
            padding: 15px;
            text-align: center;
            vertical-align: middle;
            font-weight: normal;
            font-style: italic;
        }
    </style>
</head>

<body class="bg-gray-50 dark:bg-neutral-900">
    <!-- ========== HEADER CONTENT ========== -->
    @include('layouts.header')
    <!-- ========== END HEADER CONTENT ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    @yield('main-content')
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER CONTENT ========== -->
    @include('layouts.footer')
    <!-- ========== END FOOTER CONTENT ========== -->
    @yield('js')
</body>

</html>
