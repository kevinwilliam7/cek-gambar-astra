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
</head>

<body class="bg-gray-50 dark:bg-neutral-900">
    <!-- ========== HEADER CONTENT ========== -->
    @include('layouts.header')
    <!-- ========== END HEADER CONTENT ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    @yield('main-content')
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ========== FOOTER CONTENT ========== -->
    {{-- @include('layouts.footer') --}}
    <!-- ========== END FOOTER CONTENT ========== -->
    @yield('js')
    <script>
        function showLoadingTable(colspan = 0, message = "Loading...") {
            return `
                <tr>
                    <td colspan="${colspan}" class="py-6 text-center">
                        <div class="flex items-center justify-center gap-2 text-sm text-gray-500 dark:text-gray-400">
                            <div class="animate-spin inline-block size-4 border-2 border-current border-t-transparent text-blue-600 rounded-full dark:text-blue-500"
                                role="status" aria-label="loading">
                                <span class="sr-only">${message}</span>
                            </div>
                            <span>${message}</span>
                        </div>
                    </td>
                </tr>
            `;
        }

        function formatDate(dateString) {
            const bulan = [
                "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                "Juli", "Agustus", "September", "Oktober", "November", "Desember"
            ];

            let d = new Date(dateString);
            let day = String(d.getDate()).padStart(2, '0');
            let month = bulan[d.getMonth()];
            let year = d.getFullYear();

            return `${day} ${month} ${year}`;
        }
    </script>
</body>

</html>
