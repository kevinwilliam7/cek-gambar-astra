@extends('layouts.app')
@section('title', 'Ahass | Astra')
@section('main-content')
    <div
        class="relative px-2 sm:px-5 py-5
     before:absolute before:top-0 before:start-0 before:-z-1 before:w-full before:h-112.5 before:bg-slate-900 dark:before:bg-slate-950
     animate-slide-down">
        <div class="max-w-max mx-auto flex flex-col gap-y-5 pt-4 md:pt-16">
            <!-- Header -->
            <div class="mb-4 flex flex-col justify-center gap-y-3 text-center">
                <h1 class="text-2xl md:text-3xl font-semibold text-white">
                    Astra Honda Authorized Service Station (AHASS)
                </h1>
                <p class="text-sm text-white/70">
                    Data Ahass Record
                </p>
            </div>
            <!-- End Header -->

            <!-- Bar Chart in Card -->
            <div
                class="flex flex-col bg-white border border-gray-200 shadow-xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                <!-- Header -->
                <div class="border-b border-gray-200 dark:border-neutral-700">
                    <!-- Page Header -->
                    <div
                        class="py-3 px-5 flex flex-wrap justify-between items-center gap-y-2 gap-x-5 bg-white dark:bg-neutral-900">
                        <!-- Input Search -->
                        <div id="topbar-table1" class="flex flex-1 flex-wrap items-center justify-start gap-x-3 gap-y-2">
                        </div>
                        <!-- End Input Search -->

                        <div class="flex justify-end items-center gap-x-2">
                            <button type="button" aria-haspopup="dialog" aria-expanded="false"
                                aria-controls="hs-large-modal" data-hs-overlay="#hs-large-modal"
                                class="py-2 px-2.5 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-indigo-600 text-white hover:bg-indigo-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-500">
                                <svg class="hidden sm:block shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5v14"></path>
                                </svg>
                                Add Data
                            </button>
                            <button id="hs-new-toast" type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            </button>
                        </div>
                    </div>
                    <!-- End Page Header -->
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="py-4 px-5 space-y-4">
                    <!-- Grid -->
                    <div
                        class="mt-2 flex flex-nowrap gap-2 md:gap-3 overflow-x-auto [&amp;::-webkit-scrollbar]:h-1 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-100 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500">
                        <div class="flex">
                            <!-- Filter Bar -->
                            <div class="flex flex-wrap  items-center gap-2">
                                <!-- Dropdown Wilayah -->
                                <div class="hs-dropdown [--auto-close:inside] inline-block">
                                    <!-- Nosin Button -->
                                    <button id="hs-pro-shsfbctd" type="button"
                                        class="hs-dropdown-toggle py-1 px-3 flex items-center gap-x-1 border border-gray-200 text-sm text-start text-gray-800 rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:rounded-full hover dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        Wilayah
                                        <span id="indicator-wilayah" class="hidden relative flex h-2 w-2 ms-2">
                                            <span
                                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                                            <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-600"></span>
                                        </span>
                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>
                                    <!-- End Category Button -->

                                    <!-- Dropdown Menu -->
                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-20 max-w-xs bg-white rounded-xl shadow-xl before:absolute before:-top-4 before:start-0 before:w-full before:h-5 dark:bg-neutral-900"
                                        role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-shsfbctd">
                                        <div class="p-4 sm:p-6">
                                            <!-- List -->
                                            <div class="space-y-0.5">
                                                @foreach ($data['wilayah'] as $key_wilayah => $wilayah)
                                                    @if ($key_wilayah < 4)
                                                        <!-- Checkbox langsung tampil -->
                                                        <div class="flex items-center">
                                                            <label
                                                                class="p-2 group w-full inline-flex items-center cursor-pointer text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-800">
                                                                <input type="checkbox" name="wilayah"
                                                                    class="shrink-0 size-4.5 border-gray-300 rounded-sm text-indigo-600 checked:border-indigo-600 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-500 dark:checked:bg-indigo-500 dark:checked:border-indigo-500 dark:focus:ring-offset-gray-800"
                                                                    value="{{ $wilayah }}">
                                                                <span
                                                                    class="ms-2 text-gray-800 dark:text-neutral-400">{{ $wilayah }}</span>
                                                                <span
                                                                    class="ms-auto text-xs text-gray-500 dark:text-neutral-500">(∞)</span>
                                                            </label>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <!-- End List -->

                                            <!-- Collapse -->
                                            <div id="hs-pro-shfcc-heading"
                                                class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300"
                                                aria-labelledby="hs-pro-shfcc">
                                                <div class="space-y-0.5">
                                                    @foreach ($data['wilayah'] as $key_wilayah => $wilayah)
                                                        @if ($key_wilayah >= 4)
                                                            <!-- Checkbox dalam collapse -->
                                                            <div class="flex items-center">
                                                                <label
                                                                    class="p-2 group w-full inline-flex items-center cursor-pointer text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-800">
                                                                    <input type="checkbox" name="wilayah"
                                                                        class="shrink-0 size-4.5 border-gray-300 rounded-sm text-indigo-600 checked:border-indigo-600 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-500 dark:checked:bg-indigo-500 dark:checked:border-indigo-500 dark:focus:ring-offset-gray-800"
                                                                        value="{{ $wilayah }}">
                                                                    <span
                                                                        class="ms-2 text-gray-800 dark:text-neutral-400">{{ $wilayah }}</span>
                                                                    <span
                                                                        class="ms-auto text-xs text-gray-500 dark:text-neutral-500">(∞)</span>
                                                                </label>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            <!-- End Collapse -->

                                            <div class="mt-1">
                                                <button type="button"
                                                    class="hs-collapse-toggle inline-flex items-center gap-x-1.5 text-[13px] text-gray-800 underline underline-offset-4 hover:text-indigo-600 focus:outline-hidden focus:text-indigo-600 dark:text-neutral-200 dark:hover:text-indigo-400 dark:focus:text-indigo-400"
                                                    id="hs-pro-shfcc" aria-expanded="false"
                                                    aria-controls="hs-pro-shfcc-heading"
                                                    data-hs-collapse="#hs-pro-shfcc-heading">
                                                    <span class="hs-collapse-open:hidden">Show more</span>
                                                    <span class="hs-collapse-open:block hidden">Show less</span>
                                                    <svg class="hs-collapse-open:rotate-180 shrink-0 size-3.5"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                        <path d="m6 9 6 6 6-6" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Dropdown Menu -->

                                </div>
                                <!-- End Dropdown Service ID -->

                                <!-- Dropdown Jenis Dealer -->
                                <div class="hs-dropdown [--auto-close:inside] inline-block">
                                    <!-- Jenis Dealer Button -->
                                    <button id="hs-pro-shscld" type="button"
                                        class="hs-dropdown-toggle py-1 px-3 flex items-center gap-x-1 border border-gray-200 text-sm text-start text-gray-800 rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        Jenis Dealer
                                        <span id="indicator-jenis_dealer" class="hidden relative flex h-2 w-2 ms-2">
                                            <span
                                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                                            <span class="relative inline-flex rounded-full h-2 w-2 bg-red-600"></span>
                                        </span>
                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>
                                    <!-- End Jenis Dealer Button -->

                                    <!-- Dropdown Menu -->
                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-20 w-full max-w-xs bg-white rounded-xl shadow-xl before:absolute before:-top-4 before:start-0 before:w-full before:h-5 dark:bg-neutral-900"
                                        role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-shscld">
                                        <div class="p-4 sm:p-6">
                                            <!-- Grid -->
                                            <div class="space-y-0.5">
                                                @foreach ($data['jenis_dealer'] as $jenis_dealer)
                                                    <!-- Radio -->
                                                    <label for="hs-pro-shflocss-{{ $jenis_dealer }}"
                                                        class="p-2 group w-full inline-flex items-center cursor-pointer text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-800">
                                                        <input type="checkbox"
                                                            class="shrink-0 size-4.5 bg-black border-black rounded-sm focus:ring-0 focus:ring-offset-0 checked:text-black disabled:opacity-50 disabled:pointer-events-none"
                                                            id="hs-pro-shflocss-{{ $jenis_dealer }}" name="jenis_dealer"
                                                            value="{{ $jenis_dealer }}">
                                                        <span
                                                            class="ms-2 text-gray-800 dark:text-neutral-400">{{ $jenis_dealer }}</span>
                                                        <span
                                                            class="ms-auto text-xs text-gray-500 dark:text-neutral-500">(∞)</span>
                                                    </label>
                                                    <!-- End Radio -->
                                                @endforeach
                                            </div>
                                            <!-- End Grid -->
                                        </div>
                                    </div>
                                    <!-- End Dropdown Menu -->
                                </div>
                                <!-- End Dropdown Jenis Dealer -->
                            </div>
                            <!-- End Filter Bar -->
                        </div>
                        <div class="ml-auto flex items-center">
                            <button id="clear-filters"
                                class="py-1 px-3 text-sm rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-100 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700">
                                Clear
                            </button>
                        </div>
                    </div>
                    <!-- End Grid -->
                </div>
                <!-- End Body -->

                <!-- Table Content -->
                <div
                    class="overflow-x-auto [&amp;::-webkit-scrollbar]:h-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-100 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500">
                    <div>
                        <div class="min-w-full inline-block align-middle">
                            <!-- Table -->
                            <table id="table1"
                                class="min-w-full divide-y divide-gray-200 border-t border-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                                <thead id="thead1" class="bg-gray-50 dark:bg-neutral-700/50">
                                    @php($table1_headers = [['', ''], ['Nama Ahass', 'nama_ahass'], ['Kode Ahass', 'kode_ahass'], ['Nama Ahass TTPK', 'nama_ahass_ttpk'], ['Wilayah', 'wilayah'], ['Jenis Dealer', 'jenis_dealer']])
                                    <tr>
                                        @foreach ($table1_headers as $table1_header)
                                            <th scope="col"
                                                class="{{ $table1_header[0] === '' ? '' : 'min-w-52' }} {{ $table1_header[0] === 'Action' ? 'text-right justify-end' : 'text-left' }}">
                                                <!-- Sort Dropdown -->
                                                <div class="hs-dropdown relative inline-flex w-full cursor-pointer">
                                                    {!! $table1_header[0] === ''
                                                        ? view('components.header_checkbox_table_component.index')->render()
                                                        : '<button id="hs-pro-ptpn" type="button" class="px-5 py-2.5 text-start w-full flex items-center gap-x-1 text-sm text-nowrap whitespace-nowrap font-normal text-gray-500 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-500 dark:focus:bg-neutral-700 ' .
                                                            ($table1_header[0] === 'Action' ? 'justify-end text-right' : 'text-left w-full text-start') .
                                                            '"aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">' .
                                                            $table1_header[0] .
                                                            '<svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> <path d="m7 15 5 5 5-5"></path><path d="m7 9 5-5 5 5"></path></svg>
                                                    </button>' !!}
                                                </div>
                                                <!-- End Sort Dropdown -->
                                            </th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody id="tbody1" class="divide-y divide-gray-200 dark:divide-neutral-700">
                                </tbody>
                            </table>
                            <!-- End Table -->
                        </div>
                    </div>
                </div>
                <!-- End Table Content -->

                <!-- Footer -->
                <div class="py-3 px-5 border-t border-gray-200 dark:border-neutral-800 flex flex-col sm:flex-row items-center justify-between gap-2">
                    <div id="info-table1" class="text-sm text-gray-800 dark:text-neutral-200"></div>
                    <div id="pagination-table1" class="flex justify-center sm:justify-end items-center gap-x-1"></div>
                </div>
                <!-- End Footer -->
            </div>
            <!-- End Bar Chart in Card -->
        </div>
    </div>
    @include('home.partial.modal_cu')
    @include('template.empty_table_template.index')
    @include('template.loading_table_template.index')
    @include('template.processing_table_template.index')
    @include('components.row_checkbox_table_component.index')
    @include('components.toast.index')
@endsection
@section('js')
    <script>
        window.addEventListener('load', () => {
            $(document).ready(() => {
                let table1 = $('#table1').DataTable({
                    processing: true,
                    serverSide: true,
                    colReorder: true,
                    // fixedHeader: true,
                    pagingType: 'simple_numbers',
                    ajax: {
                        url: '{{ route('datatable.ahass') }}',
                        data: function(d) {
                            // Tambahkan data filter ke dalam request AJAX
                            d.wilayah = Array.from(document.querySelectorAll(
                                'input[name="wilayah"]:checked')).map(cb => cb.value);
                            d.jenis_dealer = Array.from(document.querySelectorAll(
                                'input[name="jenis_dealer"]:checked')).map(cb => cb.value);
                        }
                    },
                    columns: [{
                            data: null,
                            name: 'checkbox',
                            orderable: false,
                            searchable: false,
                            render: function(data, type, row) {
                                return document.getElementById(
                                        'row-checkbox-table-component')
                                    .innerHTML;
                            }
                        },
                        {
                            data: 'nama_ahass',
                            name: 'nama_ahass',
                            render: function(data, type, row) {
                                return `<div class="flex items-center gap-x-3">
                                        <span class="relative size-9 shrink-0 bg-gray-100 rounded-full dark:bg-neutral-700">
                                            <img class="absolute inset-0 size-full object-cover rounded-full px-2 py-2" src="https://images.seeklogo.com/logo-png/31/2/honda-logo-png_seeklogo-310689.png" alt="Post Image">
                                        </span>
                                        <div class="grow">
                                            <a class="font-medium text-gray-800 underline-offset-2 hover:underline hover:decoration-2 hover:text-indigo-700 focus:outline-hidden focus:underline focus:decoration-2 focus:text-indigo-700 dark:text-neutral-200 dark:hover:text-indigo-400 dark:focus:text-indigo-400" href="#">
                                            ${data}
                                            </a>
                                            <ul class="flex flex-wrap items-center whitespace-nowrap gap-1.5">
                                            <li class="inline-flex items-center relative text-xs text-gray-500 pe-2 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:size-[3px] after:bg-gray-400 after:rounded-full after:-translate-y-1/2 dark:text-neutral-500 dark:after:bg-neutral-600">
                                                <p class="text-xs text-gray-500 dark:text-neutral-400">
                                                ${row.kode_ahass}
                                                </p>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>`;
                            }
                        },
                        {
                            data: 'kode_ahass',
                            name: 'kode_ahass'
                        },
                        {
                            data: 'nama_ahass_ttpk',
                            name: 'nama_ahass_ttpk'
                        },
                        {
                            data: 'wilayah',
                            name: 'wilayah',
                            render: function(data, type, row) {
                                return `<div class="flex items-center gap-x-3">
                                        <div class="grow">
                                            <a class="font-medium text-gray-800 underline-offset-2 hover:underline hover:decoration-2 hover:text-indigo-700 focus:outline-hidden focus:underline focus:decoration-2 focus:text-indigo-700 dark:text-neutral-200 dark:hover:text-indigo-400 dark:focus:text-indigo-400" href="#">
                                            ${data}
                                            </a>
                                            <ul class="flex flex-wrap items-center whitespace-nowrap gap-1.5">
                                            <li class="inline-flex items-center relative text-xs text-gray-500 pe-2 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:size-[3px] after:bg-gray-400 after:rounded-full after:-translate-y-1/2 dark:text-neutral-500 dark:after:bg-neutral-600">
                                                <p class="text-xs text-gray-500 dark:text-neutral-400">
                                                Kalimantan Barat
                                                </p>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>`;
                            }
                        },
                        {
                            data: 'jenis_dealer',
                            name: 'jenis_dealer'
                        },
                    ],
                    createdRow: function(row, data) {
                        $(row).addClass(
                            'hover:bg-gray-50 dark:hover:bg-neutral-800 text-sm text-gray-800 dark:text-white'
                        );
                        $('td', row).addClass('py-3 px-5');
                    },
                    language: {
                        emptyTable: document.getElementById('empty-table-template').innerHTML,
                        zeroRecords: document.getElementById('empty-table-template').innerHTML,
                        processing: document.getElementById('processing-table-template').innerHTML,
                        loadingRecords: document.getElementById('loading-table-template').innerHTML,
                        search: "", // hilangkan label “Search:”
                        searchPlaceholder: "Search table...", // <-- placeholder
                    },
                });
                const search = $('.dt-search');
                const length = $('.dt-length');
                const info = $('.dt-info');
                const pagination = $('.dt-paging');
                $('#topbar-table1').append(length).append(search);
                $('#pagination-table1').append(pagination);
                $('#info-table1').append(info);

                // Untuk Filter Checkbox
                ['wilayah', 'jenis_dealer'].forEach(name => {
                    document.querySelectorAll(`input[name="${name}"]`).forEach(cb => {
                        cb.addEventListener('change', () => {
                            let checked = document.querySelectorAll(
                                    `input[name="${name}"]:checked`)
                                .length > 0;
                            let indicator = document.getElementById(
                                `indicator-${name}`);
                            if (indicator) {
                                indicator.classList.toggle('hidden', !checked);
                            }
                            table1.draw();
                        });
                    });
                });

                //Untuk Clear Filter Button
                document.getElementById('clear-filters').addEventListener('click', function() {
                    // Uncheck semua checkbox
                    document.querySelectorAll(
                        'input[type="checkbox"][name="wilayah"], input[type="checkbox"][name="jenis_dealer"]'
                    ).forEach(
                        cb => {
                            cb.checked = false;
                        });

                    // Sembunyikan semua indicator
                    ['wilayah', 'jenis_dealer'].forEach(field => {
                        document.getElementById(`indicator-${field}`).classList.add(
                            'hidden');
                    });
                    table1.draw();
                });
            });
        });

        function tostifyCustomClose(el) {
            const parent = el.closest('.toastify');
            const close = parent.querySelector('.toast-close');
            close.click();
        }

        window.addEventListener('load', () => {
            (function () {
            const callToast = document.querySelector("#hs-new-toast");
            const toastMarkup1 = document.getElementById('toastalert-template').innerHTML;

            callToast.addEventListener("click", () => {
                Toastify({
                text: toastMarkup1,
                className: "hs-toastify-on:opacity-100 opacity-0 fixed -top-10 end-10 z-90 transition-all duration-300 w-72 bg-white text-sm text-gray-700 border border-gray-200 rounded-xl shadow-lg [&>.toast-close]:hidden dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400",
                duration: 3000,
                close: true,
                escapeMarkup: false,
                    style: {
                        background: "transparent",
                        color: "#111827", // text-gray-900
                        border: "1px solid transparent", // border-transparent
                        borderRadius: "0.75rem", // rounded-xl
                        boxShadow: "none" // shadow-lg
                    }
                }).showToast();
            });
            })();
        });
    </script>
@endsection
