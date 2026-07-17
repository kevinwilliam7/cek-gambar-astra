@extends('layouts.app')
@section('title', 'Astra | WebC Data')
@section('main-content')
    <div
        class="relative px-2 sm:px-5 py-5
     before:absolute before:top-0 before:start-0 before:-z-1 before:w-full before:h-112.5 before:bg-slate-900 dark:before:bg-slate-950
     animate-slide-down">
        <div class="max-w-max mx-auto flex flex-col gap-y-5 pt-4 md:pt-16">
            <!-- Header -->
            <div class="mb-4 flex flex-col justify-center gap-y-3 text-center">
                <h1 class="text-2xl md:text-3xl font-semibold text-white">
                    Data WebConsole
                </h1>
                <p class="text-sm text-white/70">
                    Daftar seluruh data pada tabel <code class="bg-white/10 rounded px-1 py-0.5">Webconsole</code>
                </p>
            </div>
            <!-- End Header -->

            <!-- Table in Card -->
            <div
                class="flex flex-col bg-white border border-gray-200 shadow-xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                <!-- Header -->
                <div class="border-b border-gray-200 dark:border-neutral-700">
                    <!-- Page Header -->
                    <div class="py-3 px-5 flex flex-wrap justify-between items-center gap-y-2 gap-x-5">
                        <!-- Topbar (length + search dari DataTable) -->
                        <div id="topbar-table1" class="flex flex-1 flex-wrap items-center justify-start gap-x-3 gap-y-2">
                        </div>
                        <!-- End Topbar -->
                    </div>
                    <!-- End Page Header -->
                </div>
                <!-- End Header -->

                <!-- Body (Filter Bar) -->
                <div class="py-4 px-5 space-y-4">
                    <!-- Grid -->
                    <div
                        class="mt-2 flex flex-nowrap gap-2 md:gap-3 overflow-x-auto [&::-webkit-scrollbar]:h-1 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                        <div class="flex">
                            <!-- Filter Bar -->
                            <div class="flex flex-wrap items-center gap-2">

                                <!-- ===== Dropdown Tanggal Claim ===== -->
                                <div class="hs-dropdown [--auto-close:inside] inline-block">
                                    <button id="hs-webc-tanggal" type="button"
                                        class="hs-dropdown-toggle py-1 px-3 flex items-center gap-x-1 border border-gray-200 text-sm text-start text-gray-800 rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:rounded-full dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        Tanggal Claim
                                        <span id="indicator-tanggal_claim" class="hidden relative flex h-2 w-2 ms-2">
                                            <span
                                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-600"></span>
                                        </span>
                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <!-- Dropdown Menu Tanggal -->
                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-20 max-w-xs bg-white rounded-xl shadow-xl before:absolute before:-top-4 before:start-0 before:w-full before:h-5 dark:bg-neutral-900"
                                        role="menu" aria-orientation="vertical" aria-labelledby="hs-webc-tanggal">
                                        <div class="p-4 sm:p-5 space-y-3">
                                            <p class="text-xs font-semibold text-gray-500 dark:text-neutral-400 uppercase tracking-wide">Range Tanggal Claim</p>
                                            <div>
                                                <label class="block text-xs text-gray-600 dark:text-neutral-400 mb-1">Dari</label>
                                                <input type="date" id="tanggal_claim_dari"
                                                    class="w-full py-1.5 px-3 text-sm border border-gray-200 rounded-lg dark:bg-neutral-800 dark:border-neutral-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                            </div>
                                            <div>
                                                <label class="block text-xs text-gray-600 dark:text-neutral-400 mb-1">Sampai</label>
                                                <input type="date" id="tanggal_claim_sampai"
                                                    class="w-full py-1.5 px-3 text-sm border border-gray-200 rounded-lg dark:bg-neutral-800 dark:border-neutral-600 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Dropdown Menu Tanggal -->
                                </div>
                                <!-- End Dropdown Tanggal Claim -->

                                <!-- ===== Dropdown Kode AHASS ===== -->
                                <div class="hs-dropdown [--auto-close:inside] inline-block">
                                    <button id="hs-webc-ahass" type="button"
                                        class="hs-dropdown-toggle py-1 px-3 flex items-center gap-x-1 border border-gray-200 text-sm text-start text-gray-800 rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        AHASS
                                        <span id="indicator-kode_ahass" class="hidden relative flex h-2 w-2 ms-2">
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

                                    <!-- Dropdown Menu Kode AHASS -->
                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-20 max-w-xs bg-white rounded-xl shadow-xl before:absolute before:-top-4 before:start-0 before:w-full before:h-5 dark:bg-neutral-900"
                                        role="menu" aria-orientation="vertical" aria-labelledby="hs-webc-ahass">
                                        <div class="p-4 sm:p-6">
                                            <div class="space-y-0.5 max-h-64 overflow-y-auto">
                                                @foreach ($ahass as $a)
                                                    <div class="flex items-center">
                                                        <label
                                                            class="p-2 group w-full inline-flex items-center cursor-pointer text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-800">
                                                            <input type="checkbox" name="kode_ahass"
                                                                class="shrink-0 size-4.5 border-gray-300 rounded-sm text-indigo-600 checked:border-indigo-600 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-500 dark:checked:bg-indigo-500 dark:checked:border-indigo-500 dark:focus:ring-offset-gray-800"
                                                                value="{{ $a->kode_ahass }}">
                                                            <span class="ms-2 text-gray-800 dark:text-neutral-400">{{ $a->nama_ahass }}</span>
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Dropdown Menu Kode AHASS -->
                                </div>
                                <!-- End Dropdown Kode AHASS -->

                                <!-- ===== Dropdown Validitas ===== -->
                                <div class="hs-dropdown [--auto-close:inside] inline-block">
                                    <button id="hs-webc-validitas" type="button"
                                        class="hs-dropdown-toggle py-1 px-3 flex items-center gap-x-1 border border-gray-200 text-sm text-start text-gray-800 rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        Validitas
                                        <span id="indicator-validitas" class="hidden relative flex h-2 w-2 ms-2">
                                            <span
                                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                            <span class="relative inline-flex rounded-full h-2 w-2 bg-green-600"></span>
                                        </span>
                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="m6 9 6 6 6-6" />
                                        </svg>
                                    </button>

                                    <!-- Dropdown Menu Validitas -->
                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-20 max-w-xs bg-white rounded-xl shadow-xl before:absolute before:-top-4 before:start-0 before:w-full before:h-5 dark:bg-neutral-900"
                                        role="menu" aria-orientation="vertical" aria-labelledby="hs-webc-validitas">
                                        <div class="p-4 sm:p-6">
                                            <div class="space-y-0.5">
                                                @foreach ($validitas as $val)
                                                    <div class="flex items-center">
                                                        <label
                                                            class="p-2 group w-full inline-flex items-center cursor-pointer text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-800">
                                                            <input type="checkbox" name="validitas"
                                                                class="shrink-0 size-4.5 bg-black border-black rounded-sm focus:ring-0 focus:ring-offset-0 checked:text-black disabled:opacity-50 disabled:pointer-events-none"
                                                                value="{{ $val }}">
                                                            <span class="ms-2 text-gray-800 dark:text-neutral-400">{{ $val }}</span>
                                                            <span class="ms-auto text-xs text-gray-500 dark:text-neutral-500">(∞)</span>
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Dropdown Menu Validitas -->
                                </div>
                                <!-- End Dropdown Validitas -->

                                <!-- ===== Dropdown Foto Sama ===== -->
                                <div class="hs-dropdown [--auto-close:inside] inline-block">
                                    <button id="hs-webc-foto-sama" type="button"
                                        class="hs-dropdown-toggle py-1 px-3 flex items-center gap-x-1 border border-gray-200 text-sm text-start text-gray-800 rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        Foto Sama
                                        <span id="indicator-foto_sama" class="hidden relative flex h-2 w-2 ms-2">
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

                                    <!-- Dropdown Menu Foto Sama -->
                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-20 max-w-xs bg-white rounded-xl shadow-xl before:absolute before:-top-4 before:start-0 before:w-full before:h-5 dark:bg-neutral-900"
                                        role="menu" aria-orientation="vertical" aria-labelledby="hs-webc-foto-sama">
                                        <div class="p-4 sm:p-6">
                                            <div class="space-y-0.5">
                                                <div class="flex items-center">
                                                    <label
                                                        class="p-2 group w-full inline-flex items-center cursor-pointer text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-800">
                                                        <input type="checkbox" name="foto_sama"
                                                            class="shrink-0 size-4.5 bg-black border-black rounded-sm focus:ring-0 focus:ring-offset-0 checked:text-black disabled:opacity-50 disabled:pointer-events-none"
                                                            value="1">
                                                        <span class="ms-2 text-gray-800 dark:text-neutral-400">Ya (Hanya Duplikat)</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Dropdown Menu Foto Sama -->
                                </div>
                                <!-- End Dropdown Foto Sama -->

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
                    class="overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                    <div class="min-w-full inline-block align-middle">
                        <!-- Table -->
                        <table id="table1"
                            class="min-w-full divide-y divide-gray-200 border-t border-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                            <thead id="thead1" class="bg-gray-50 dark:bg-neutral-700/50">
                                <tr>
                                    @php
                                        $headers = [
                                            '',
                                            'Nama AHASS',
                                            'Type Motor',
                                            'No Mesin',
                                            'No Rangka',
                                            'KPB Type',
                                            'KM',
                                            'Tgl Beli',
                                            'Tgl Claim',
                                            'Validitas',
                                            'Filename',
                                        ];
                                    @endphp
                                    @foreach ($headers as $header)
                                        <th scope="col">
                                            @if($header !== '')
                                            <button type="button"
                                                class="px-5 py-2.5 text-start w-full flex items-center gap-x-1 text-sm text-nowrap whitespace-nowrap font-normal text-gray-500 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-500 dark:focus:bg-neutral-700">
                                                {{ $header }}
                                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="m7 15 5 5 5-5"></path>
                                                    <path d="m7 9 5-5 5 5"></path>
                                                </svg>
                                            </button>
                                            @endif
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
                <!-- End Table Content -->

                <!-- Footer -->
                <div
                    class="py-3 px-5 border-t border-gray-200 dark:border-neutral-800 flex flex-col sm:flex-row items-center justify-between gap-2">
                    <div id="info-table1" class="text-sm text-gray-800 dark:text-neutral-200"></div>
                    <div id="pagination-table1" class="flex justify-center sm:justify-end items-center gap-x-1"></div>
                </div>
                <!-- End Footer -->
            </div>
            <!-- Table in Card -->
        </div>
    </div>
    @include('template.empty_table_template.index')
    @include('template.processing_table_template.index')
    @include('template.loading_table_template.index')
@endsection

@section('js')
    <script>
        window.addEventListener('load', () => {
            $(document).ready(() => {
                let table1 = $('#table1').DataTable({
                    processing: true,
                    serverSide: true,
                    pagingType: 'simple_numbers',
                    ajax: {
                        url: '{{ route('datatable.astra-webc') }}',
                        data: function(d) {
                            d.tanggal_claim_dari   = document.getElementById('tanggal_claim_dari').value;
                            d.tanggal_claim_sampai = document.getElementById('tanggal_claim_sampai').value;
                            d.kode_ahass = Array.from(document.querySelectorAll('input[name="kode_ahass"]:checked')).map(cb => cb.value);
                            d.validitas  = Array.from(document.querySelectorAll('input[name="validitas"]:checked')).map(cb => cb.value);
                            d.foto_sama  = Array.from(document.querySelectorAll('input[name="foto_sama"]:checked')).map(cb => cb.value);
                        }
                    },
                    columns: [
                        {
                            // Kolom expand (dt-control)
                            data: 'duplicates_count',
                            orderable: false,
                            searchable: false,
                            className: 'text-center',
                            render: function(data) {
                                if (parseInt(data) > 0) {
                                    return `<button class="expand-btn inline-flex items-center justify-center size-5 rounded-full bg-indigo-100 hover:bg-indigo-200 text-indigo-600 transition-colors" title="Lihat duplikat">
                                        <svg class="size-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                        </svg>
                                    </button>`;
                                }
                                return '';
                            }
                        },
                        { data: 'nama_ahass',      name: 'nama_ahass' },
                        { data: 'type_motor',      name: 'type_motor' },
                        { data: 'nomor_mesin',     name: 'nomor_mesin' },
                        { data: 'no_rangka',       name: 'no_rangka' },
                        { data: 'kpb_type',        name: 'kpb_type' },
                        { data: 'km',              name: 'km',
                          render: function(data) { return data ? `${data} km` : '-'; } },
                        { data: 'tanggal_beli',    name: 'tanggal_beli' },
                        { data: 'tanggal_claim',   name: 'tanggal_claim',
                          render: function(data) {
                              if (!data) return '<span class="text-gray-300 dark:text-neutral-600">-</span>';
                              return `<div class="flex items-center gap-1.5">
                                  <span class="shrink-0 size-2 inline-block bg-blue-500 rounded-full"></span>
                                  <span class="block text-sm text-gray-800 dark:text-neutral-200">${data}</span>
                              </div>`;
                          }
                        },
                        { data: 'validitas',       name: 'validitas',
                          render: function(data) {
                              if (!data) return '<span class="text-gray-300 dark:text-neutral-600">-</span>';
                              const isValid = data.toLowerCase().includes('valid');
                              const color = isValid ? 'bg-violet-500' : 'bg-red-500';
                              return `<div class="flex items-center gap-1.5">
                                  <span class="shrink-0 size-2 inline-block ${color} rounded-full"></span>
                                  <span class="block text-sm text-gray-800 dark:text-neutral-200">${data}</span>
                              </div>`;
                          }
                        },
                        { data: 'filename',        name: 'filename',
                          orderable: false,
                          render: function(data) {
                              if (!data) return '<span class="text-gray-300 dark:text-neutral-600">-</span>';
                              return `<a href="${data}" target="_blank" rel="noopener noreferrer"
                                  class="inline-flex items-center gap-x-1 text-indigo-600 underline underline-offset-2 hover:text-indigo-800 dark:text-indigo-400 dark:hover:text-indigo-300 text-sm">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                                  </svg>
                                  Lihat File
                              </a>`;
                          }
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
                        search: "",
                        searchPlaceholder: "Search table...",
                    },
                });

                const search     = $('.dt-search');
                const length     = $('.dt-length');
                const info       = $('.dt-info');
                const pagination = $('.dt-paging');
                $('#topbar-table1').append(length).append(search);
                $('#pagination-table1').append(pagination);
                $('#info-table1').append(info);

                // ===== Filter Tanggal Claim =====
                ['tanggal_claim_dari', 'tanggal_claim_sampai'].forEach(id => {
                    document.getElementById(id).addEventListener('change', () => {
                        const dari   = document.getElementById('tanggal_claim_dari').value;
                        const sampai = document.getElementById('tanggal_claim_sampai').value;
                        const indicator = document.getElementById('indicator-tanggal_claim');
                        if (indicator) indicator.classList.toggle('hidden', !dari && !sampai);
                        table1.draw();
                    });
                });

                // ===== Filter Checkbox =====
                ['kode_ahass', 'validitas', 'foto_sama'].forEach(name => {
                    document.querySelectorAll(`input[name="${name}"]`).forEach(cb => {
                        cb.addEventListener('change', () => {
                            const checked = document.querySelectorAll(`input[name="${name}"]:checked`).length > 0;
                            const indicator = document.getElementById(`indicator-${name}`);
                            if (indicator) indicator.classList.toggle('hidden', !checked);
                            table1.draw();
                        });
                    });
                });

                // ===== Clear Filter Button =====
                document.getElementById('clear-filters').addEventListener('click', function() {
                    // Reset tanggal
                    document.getElementById('tanggal_claim_dari').value   = '';
                    document.getElementById('tanggal_claim_sampai').value = '';

                    // Uncheck semua checkbox
                    document.querySelectorAll(
                        'input[name="kode_ahass"], input[name="validitas"], input[name="foto_sama"]'
                    ).forEach(cb => { cb.checked = false; });

                    // Sembunyikan semua indicator
                    ['tanggal_claim', 'kode_ahass', 'validitas', 'foto_sama'].forEach(field => {
                        const el = document.getElementById(`indicator-${field}`);
                        if (el) el.classList.add('hidden');
                    });

                    table1.draw();
                });

                // ===== Expand Child Row (duplikat) =====
                function buildChildRows(rows) {
                    if (!rows.length) return '<tr><td colspan="11" class="px-5 py-3 text-sm text-gray-400">Tidak ada duplikat ditemukan.</td></tr>';
                    return rows.map(r => {
                        const filename = r.filename
                            ? `<a href="${r.filename}" target="_blank" class="text-indigo-500 underline text-xs">Lihat File</a>`
                            : '-';
                        return `<tr class="bg-indigo-50 dark:bg-indigo-900/20 border-l-4 border-indigo-400">
                            <td class="px-5 py-2 text-xs text-indigo-400">↳</td>
                            <td class="px-5 py-2 text-xs text-gray-700 dark:text-neutral-300">${r.nama_ahass ?? '-'}</td>
                            <td class="px-5 py-2 text-xs text-gray-700 dark:text-neutral-300">${r.type_motor ?? '-'}</td>
                            <td class="px-5 py-2 text-xs text-gray-700 dark:text-neutral-300">${r.nomor_mesin ?? '-'}</td>
                            <td class="px-5 py-2 text-xs text-gray-700 dark:text-neutral-300">${r.no_rangka ?? '-'}</td>
                            <td class="px-5 py-2 text-xs text-gray-700 dark:text-neutral-300">${r.kpb_type ?? '-'}</td>
                            <td class="px-5 py-2 text-xs text-gray-700 dark:text-neutral-300">${r.km ?? '-'}</td>
                            <td class="px-5 py-2 text-xs text-gray-700 dark:text-neutral-300">${r.tanggal_beli ?? '-'}</td>
                            <td class="px-5 py-2 text-xs text-gray-700 dark:text-neutral-300">${r.tanggal_claim ?? '-'}</td>
                            <td class="px-5 py-2 text-xs" colspan="2">${filename}</td>
                        </tr>`;
                    }).join('');
                }

                $('#table1 tbody').on('click', 'tr .expand-btn', function() {
                    const tr   = $(this).closest('tr');
                    const row  = table1.row(tr);
                    const data = row.data();

                    if (!data || !data.phash) return;

                    if (tr.hasClass('dt-hasChild')) {
                        // Tutup child row
                        row.child.hide();
                        tr.removeClass('dt-hasChild');
                        $(this).find('svg path').attr('d', 'M12 4.5v15m7.5-7.5h-15'); // plus icon
                        $(this).closest('td').find('button').removeClass('bg-red-100 text-red-600').addClass('bg-indigo-100 text-indigo-600');
                    } else {
                        // Buka child row
                        $.getJSON('{{ route("datatable.astra-webc.duplicates") }}', {
                            phash: data.phash,
                            exclude_id: data.id
                        }, function(duplicates) {
                            row.child($(buildChildRows(duplicates))).show();
                            tr.addClass('dt-hasChild');
                        });
                        $(this).find('svg path').attr('d', 'M19.5 12h-15'); // minus icon
                        $(this).closest('td').find('button').removeClass('bg-indigo-100 text-indigo-600').addClass('bg-red-100 text-red-600');
                    }
                });

            });
        });
    </script>
@endsection
