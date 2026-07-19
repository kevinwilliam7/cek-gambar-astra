@extends('layouts.app')
@section('title', 'Ahass | Cek KPB Digital')
@section('main-content')
    <div
        class="relative px-2 sm:px-5 py-5
     before:absolute before:top-0 before:start-0 before:-z-1 before:w-full before:h-112.5 before:bg-slate-900 dark:before:bg-slate-950
     animate-slide-down">
        <div class="max-w-max mx-auto flex flex-col gap-y-5 pt-4 md:pt-16">
            <!-- Header -->
            <div class="mb-4 flex flex-col justify-center gap-y-3 text-center">
                <h1 class="text-2xl md:text-3xl font-semibold text-white">
                    Cek Kupon Perawatan Berkala Digital (KPB Digital)
                </h1>
                <p class="text-sm text-white/70">
                    Pengecekan Klaim KPB Digital
                </p>
            </div>
            <!-- End Header -->

            <div class="bg-white border border-gray-200 shadow-xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                <div class="grid grid-cols-1 md:grid-cols-12">
                    <div class="md:col-span-4 flex-1 flex flex-col h-full">
                        <div class="md:sticky md:top-0 p-5 md:pt-6.5">
                            <p class="text-start text-sm font-medium text-gray-800 rounded-lg dark:text-neutral-200 mb-5">Monitor KPB Digital Queue Process</p>
                            <div id="jobs-container"></div>
                        </div>
                    </div>
                    <div class="md:col-span-8 md:border-s border-gray-200 dark:border-neutral-700">
                        <div class="hs-accordion-group space-y-2 p-1.5 md:p-3">
                            <div class="hs-accordion flex flex-col" id="hs-dkd-accordion-logs">
                                <button class="hs-accordion-toggle p-3.5 w-full inline-flex justify-between items-center gap-x-3 text-start text-sm bg-gray-100 font-medium text-gray-800 rounded-lg focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-neutral-800 dark:text-neutral-200" aria-expanded="true" aria-controls="hs-dkd-accordion-logs-content">
                                    Log Activities
                                    <svg class="hs-accordion-active:hidden block size-4.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"></path></svg>
                                    <svg class="hs-accordion-active:block hidden size-4.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"></path></svg>
                                </button>
                                <div id="hs-dkd-accordion-logs-content" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-dkd-accordion-logs">
                                    <div class="p-3.5 sm:pb-8"><div id="logs-container"></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table in Card -->
            <div class="flex flex-col bg-white border border-gray-200 shadow-xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                <div class="border-b border-gray-200 dark:border-neutral-700">
                    <div class="py-3 px-5 flex flex-wrap justify-between items-center gap-y-2 gap-x-5">
                        <div id="topbar-table1" class="flex flex-1 flex-wrap items-center justify-start gap-x-3 gap-y-2"></div>
                        <div class="flex justify-end items-center gap-x-2">
                            <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-large-modal" data-hs-overlay="#hs-large-modal" class="py-2 px-2.5 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-indigo-600 text-white hover:bg-indigo-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-500">
                                <svg class="hidden sm:block shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg>
                                Add Data
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Filter Bar -->
                <div class="py-4 px-5 space-y-4">
                    <div class="mt-2 flex flex-nowrap gap-2 md:gap-3 overflow-x-auto [&::-webkit-scrollbar]:h-1 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                        <div class="flex">
                            <div class="flex flex-wrap items-center gap-2">
                                <!-- Dropdown Service ID -->
                                <div class="hs-dropdown [--auto-close:inside] inline-block">
                                    <button id="hs-dkd-btn-service_id" type="button" class="hs-dropdown-toggle py-1 px-3 flex items-center gap-x-1 border border-gray-200 text-sm text-start text-gray-800 rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:rounded-full dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        Service ID
                                        <span id="indicator-service_id" class="hidden relative flex h-2 w-2 ms-2"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-600"></span></span>
                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6" /></svg>
                                    </button>
                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-20 max-w-xs bg-white rounded-xl shadow-xl before:absolute before:-top-4 before:start-0 before:w-full before:h-5 dark:bg-neutral-900" role="menu" aria-orientation="vertical" aria-labelledby="hs-dkd-btn-service_id">
                                        <div class="p-4 sm:p-6">
                                            <div class="space-y-0.5">
                                                @foreach ($data['service_id'] as $service_id)
                                                    @if ($service_id != 4)
                                                        <div class="flex items-center">
                                                            <label class="p-2 group w-full inline-flex items-center cursor-pointer text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-800">
                                                                <input type="checkbox" name="service_id" class="shrink-0 size-4.5 border-gray-300 rounded-sm text-indigo-600 checked:border-indigo-600 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-500 dark:checked:bg-indigo-500 dark:checked:border-indigo-500 dark:focus:ring-offset-gray-800" value="{{ $service_id }}">
                                                                <span class="ms-2 text-gray-800 dark:text-neutral-400">KPB {{ $service_id }}</span>
                                                                <span class="ms-auto text-xs text-gray-500 dark:text-neutral-500">(&#8734;)</span>
                                                            </label>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div id="hs-dkd-collapse-heading" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-dkd-collapse-btn">
                                                <div class="space-y-0.5">
                                                    @foreach ($data['service_id'] as $service_id)
                                                        @if ($service_id == 4)
                                                            <div class="flex items-center">
                                                                <label class="p-2 group w-full inline-flex items-center cursor-pointer text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-800">
                                                                    <input type="checkbox" name="service_id" class="shrink-0 size-4.5 border-gray-300 rounded-sm text-indigo-600 checked:border-indigo-600 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-500 dark:checked:bg-indigo-500 dark:checked:border-indigo-500 dark:focus:ring-offset-gray-800" value="{{ $service_id }}">
                                                                    <span class="ms-2 text-gray-800 dark:text-neutral-400">KPB {{ $service_id }}</span>
                                                                    <span class="ms-auto text-xs text-gray-500 dark:text-neutral-500">(&#8734;)</span>
                                                                </label>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="mt-1">
                                                <button type="button" class="hs-collapse-toggle inline-flex items-center gap-x-1.5 text-[13px] text-gray-800 underline underline-offset-4 hover:text-indigo-600 focus:outline-hidden focus:text-indigo-600 dark:text-neutral-200 dark:hover:text-indigo-400 dark:focus:text-indigo-400" id="hs-dkd-collapse-btn" aria-expanded="false" aria-controls="hs-dkd-collapse-heading" data-hs-collapse="#hs-dkd-collapse-heading">
                                                    <span class="hs-collapse-open:hidden">Show more</span>
                                                    <span class="hs-collapse-open:block hidden">Show less</span>
                                                    <svg class="hs-collapse-open:rotate-180 shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6" /></svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Dropdown Service ID -->
                                <!-- Dropdown Type Motor -->
                                <div class="hs-dropdown [--auto-close:inside] inline-block">
                                    <button id="hs-dkd-btn-type_motor" type="button" class="hs-dropdown-toggle py-1 px-3 flex items-center gap-x-1 border border-gray-200 text-sm text-start text-gray-800 rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        Type Motor
                                        <span id="indicator-type_motor" class="hidden relative flex h-2 w-2 ms-2"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span><span class="relative inline-flex rounded-full h-2 w-2 bg-green-600"></span></span>
                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6" /></svg>
                                    </button>
                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-20 max-w-xs bg-white rounded-xl shadow-xl before:absolute before:-top-4 before:start-0 before:w-full before:h-5 dark:bg-neutral-900" role="menu" aria-orientation="vertical" aria-labelledby="hs-dkd-btn-type_motor">
                                        <div class="p-4 sm:p-6">
                                            <div class="mx-px grid grid-cols-3 gap-2">
                                                @foreach ($data['motor'] as $keyMotor => $motor)
                                                    <label for="hs-dkd-motor-{{ $motor['type_motor'] }}" class="p-2.5 group relative flex justify-center items-center gap-x-3 text-center text-xs bg-white text-gray-800 border border-gray-200 cursor-pointer rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 has-checked:text-indigo-600 dark:has-checked:text-indigo-500 has-checked:border-indigo-600 dark:has-checked:border-indigo-500 has-checked:ring-1 has-checked:ring-indigo-600 dark:has-checked:ring-indigo-500 has-disabled:pointer-events-none has-disabled:text-gray-200 dark:has-disabled:text-neutral-700">
                                                        <input type="checkbox" id="hs-dkd-motor-{{ $motor['type_motor'] }}" class="hidden bg-transparent border-gray-200 text-indigo-600 focus:ring-white focus:ring-offset-0 dark:text-indigo-500 dark:border-neutral-700 dark:focus:ring-neutral-900" name="type_motor" value="{{ $motor['type_motor'] }}">
                                                        <span class="block">{{ $motor['type_motor'] }}</span>
                                                    </label>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Dropdown Type Motor -->
                            </div>
                        </div>
                        <div class="ml-auto flex items-center">
                            <button id="clear-filters" class="py-1 px-3 text-sm rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-100 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700">Clear</button>
                        </div>
                    </div>
                </div>
                <!-- End Filter Bar -->
                <!-- Table -->
                <div class="overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                    <div class="min-w-full inline-block align-middle">
                        <table id="table1" class="min-w-full divide-y divide-gray-200 border-t border-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                            <thead id="thead1" class="bg-gray-50 dark:bg-neutral-700/50">
                                @php
                                    $headers = [
                                        '',
                                        'Nama File',
                                        'Type Motor',
                                        'No Mesin',
                                        'No Rangka',
                                        'KPB Type',
                                        'KM',
                                        'Tgl Beli',
                                        'Tgl Claim',
                                        'Validitas',
                                        'Filename',
                                        'Catatan'
                                    ];
                                @endphp
                                <tr>
                                    @foreach ($headers as $header)
                                        <th scope="col">
                                            @if ($header !== '')
                                                <button type="button" class="px-5 py-2.5 text-start w-full flex items-center gap-x-1 text-sm text-nowrap whitespace-nowrap font-normal text-gray-500 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-500 dark:focus:bg-neutral-700">
                                                    {{ $header }}
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7 15 5 5 5-5"></path><path d="m7 9 5-5 5 5"></path></svg>
                                                </button>
                                            @endif
                                        </th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody id="tbody1" class="divide-y divide-gray-200 dark:divide-neutral-700"></tbody>
                        </table>
                    </div>
                </div>
                <!-- End Table -->
                <div class="py-3 px-5 border-t border-gray-200 dark:border-neutral-800 flex flex-col sm:flex-row items-center justify-between gap-2">
                    <div id="info-table1" class="text-sm text-gray-800 dark:text-neutral-200"></div>
                    <div id="pagination-table1" class="flex justify-center sm:justify-end items-center gap-x-1"></div>
                </div>
            </div>
            <!-- End Table in Card -->
        </div>
    </div>
    @include('template.empty_table_template.index')
    @include('template.loading_table_template.index')
    @include('template.processing_table_template.index')
    @include('components.toast.index')
    @include('cek_kpb_digital.partial.modal_upload')
@endsection
@section('js')
    <script>
        const jobsContainer = document.getElementById('jobs-container');
        const logsContainer = document.getElementById('logs-container');
        const noData = `
            <div class="p-5 h-full flex flex-col justify-center items-center text-center">
                <svg class="w-48 mx-auto mb-4" width="178" height="90" viewBox="0 0 178 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="27" y="50.5" width="124" height="39" rx="7.5" fill="currentColor" class="fill-white dark:fill-neutral-800"></rect>
                <rect x="19.5" y="28.5" width="139" height="39" rx="7.5" fill="currentColor" class="fill-white dark:fill-neutral-800"></rect>
                <rect x="19.5" y="28.5" width="139" height="39" rx="7.5" stroke="currentColor" class="stroke-gray-100 dark:stroke-neutral-700/30"></rect>
                <rect x="27" y="36" width="24" height="24" rx="4" fill="currentColor" class="fill-gray-100 dark:fill-neutral-700/70"></rect>
                <rect x="59" y="39" width="60" height="6" rx="3" fill="currentColor" class="fill-gray-100 dark:fill-neutral-700/70"></rect>
                <rect x="12" y="6" width="154" height="40" rx="8" fill="currentColor" class="fill-white dark:fill-neutral-800" shape-rendering="crispEdges"></rect>
                <rect x="20" y="14" width="24" height="24" rx="4" fill="currentColor" class="fill-gray-200 dark:fill-neutral-700"></rect>
                <rect x="52" y="17" width="60" height="6" rx="3" fill="currentColor" class="fill-gray-200 dark:fill-neutral-700"></rect>
                <rect x="52" y="29" width="106" height="6" rx="3" fill="currentColor" class="fill-gray-200 dark:fill-neutral-700"></rect>
                </svg>
                <div class="max-w-sm mx-auto">
                    <p class="mt-2 font-medium text-gray-800 dark:text-neutral-200">No data</p>
                    <p class="mb-5 text-sm text-gray-500 dark:text-neutral-500">No data here yet.</p>
                </div>
            </div>
        `;

        function renderJobs(jobs) {
            jobsContainer.innerHTML = '';
            if (jobs.length === 0) { jobsContainer.innerHTML = noData; return; }
            jobs.forEach(job => {
                const progress = job.cek_kpb_digital_progress ?? {};
                const jobId = progress.job_id ?? job.id;
                const total = progress.total ?? 0;
                const current = progress.progress ?? 0;
                const percent = total > 0 ? ((current / total) * 100).toFixed(1) : '0.0';
                const html = `<div class="mt-5 flex flex-col"><div class="py-2.5 border-t border-dashed border-gray-200 dark:border-neutral-700"><div class="flex items-center gap-3"><div class="grow"><p class="text-sm text-gray-800 dark:text-neutral-200">${job.file_name ?? '(belum ada file)'}</p><div class="mt-2 flex flex-col gap-x-3"><span class="block mb-1.5 text-xs text-gray-500 dark:text-neutral-400">${percent}% &middot; ${current} / ${total} Checked</span><div class="flex w-full h-1 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700"><div class="flex flex-col justify-center overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap" style="width: ${percent}%"></div></div></div></div></div></div></div>`;
                jobsContainer.insertAdjacentHTML('beforeend', html);
            });
        }

        function renderLogs(logs) {
            logsContainer.innerHTML = '';
            if (logs.length === 0) { logsContainer.innerHTML = noData; return; }
            logs.forEach(log => {
                const sc = log.status === 'failed' ? 'bg-red-100 text-red-800 dark:bg-red-500/10 dark:text-red-500' : 'bg-green-100 text-green-800 dark:bg-green-500/10 dark:text-green-500';
                const sl = log.status === 'failed' ? 'Gagal' : 'Berhasil';
                const html = `<div class="p-5 mt-2 space-y-4 flex flex-col bg-white border border-gray-200 rounded-xl dark:bg-neutral-800 dark:border-neutral-700"><div class="flex flex-wrap justify-between items-center gap-2"><span class="font-medium text-gray-800 dark:text-neutral-200">${log.file_name}</span><span class="inline-flex items-center gap-1.5 py-px px-2 text-xs font-medium rounded-full ${sc}">${sl}</span></div><ul class="space-y-2"><li class="flex justify-between items-center"><span class="text-xs uppercase text-gray-500 dark:text-neutral-500">IP address:</span><span class="text-sm text-gray-800 dark:text-neutral-200">${log.ip_address}</span></li><li class="flex justify-between items-center"><span class="text-xs uppercase text-gray-500 dark:text-neutral-500">Deskripsi:</span><span class="text-sm text-gray-800 dark:text-neutral-200">${log.description}</span></li><li class="flex justify-between items-center"><span class="text-xs uppercase text-gray-500 dark:text-neutral-500">Recent activity:</span><span class="text-sm text-gray-800 dark:text-neutral-200">${log.created_at_human}</span></li></ul></div>`;
                logsContainer.insertAdjacentHTML('beforeend', html);
            });
        }

        fetch('/cek-kpb-digital/getAllJobs').then(r => r.json()).then(renderJobs).catch(e => console.error(e));
        fetch('/cek-kpb-digital/getAllLogJobs').then(r => r.json()).then(renderLogs).catch(e => console.error(e));

        window.addEventListener('load', () => {
            $(document).ready(() => {
                let table1 = $('#table1').DataTable({
                    processing: true,
                    serverSide: true,
                    pagingType: 'simple_numbers',
                    ajax: {
                        url: '{{ route("datatable.cek-kpb-digital") }}',
                        data: function(d) {
                            d.type_motor = Array.from(document.querySelectorAll('input[name="type_motor"]:checked')).map(cb => cb.value);
                            d.service_id = Array.from(document.querySelectorAll('input[name="service_id"]:checked')).map(cb => cb.value);
                        }
                    },
                    columns: [
                        {
                            data: 'duplicates_count',
                            orderable: false,
                            searchable: false,
                            className: 'text-center',
                            render: function(data) {
                                if (parseInt(data) > 0) {
                                    return `<button class="expand-btn inline-flex items-center justify-center size-5 rounded-full bg-indigo-100 hover:bg-indigo-200 text-indigo-600 transition-colors" title="Lihat data engine sama"><svg class="size-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg></button>`;
                                }
                                return '';
                            }
                        },
                        { data: 'file_name', name: 'file_name', render: function(data) { return data ?? '-'; } },
                        { data: 'type_motor', name: 'type_motor', render: function(data) { return data ?? '-'; } },
                        { data: 'engine', name: 'engine', render: function(data) { return data ?? '-'; } },
                        { data: 'no_rangka', name: 'no_rangka', render: function(data) { return data ?? '-'; } },
                        { data: 'service_id', name: 'service_id', render: function(data) { return data ? 'KPB ' + data : '-'; } },
                        { data: 'km', name: 'km', render: function(data) { return data ? `${data} km` : '-'; } },
                        { data: 'buy_date', name: 'buy_date', render: function(data) { return data ?? '-'; } },
                        { data: 'service_date', name: 'service_date',
                          render: function(data) {
                              if (!data) return '<span class="text-gray-300 dark:text-neutral-600">-</span>';
                              return `<div class="flex items-center gap-1.5">
                                  <span class="shrink-0 size-2 inline-block bg-blue-500 rounded-full"></span>
                                  <span class="block text-sm text-gray-800 dark:text-neutral-200">${data}</span>
                              </div>`;
                          }
                        },
                        { data: 'validitas', name: 'validitas',
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
                        { data: 'filename', name: 'filename',
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
                        {
                            data: 'notes', name: 'notes', searchable: false, orderable: false,
                            render: function(data, type, row) {
                                if (!row?.notes?.length) return '<span class="text-gray-300 dark:text-neutral-600">-</span>';
                                return '<ul class="list-disc ms-4 text-sm text-gray-800 dark:text-neutral-200">' + row.notes.map(n => `<li>${n.message}</li>`).join('') + '</ul>';
                            }
                        },
                    ],
                    createdRow: function(row, data) {
                        $(row).addClass('hover:bg-gray-50 dark:hover:bg-neutral-800 text-sm text-gray-800 dark:text-white');
                        $('td', row).addClass('py-3 px-5');
                    },
                    drawCallback: function(settings) {
                        const api = this.api();
                        api.rows().every(function() {
                            const data = this.data();
                            const tr = $(this.node());
                            
                            if (parseInt(data.duplicates_count) > 0 && !tr.hasClass('dt-hasChild')) {
                                const row = this;
                                $.getJSON('{{ route("datatable.cek-kpb-digital.duplicates") }}', { phash: data.phash, exclude_id: data.astra_webc_id }, function(duplicates) {
                                    row.child($(buildChildRows(duplicates))).show();
                                    tr.addClass('dt-hasChild');
                                    
                                    // Ubah icon tombol expand menjadi minus (-)
                                    const btn = tr.find('.expand-btn');
                                    btn.removeClass('bg-indigo-100 text-indigo-600').addClass('bg-red-100 text-red-600');
                                    btn.find('svg path').attr('d', 'M19.5 12h-15');
                                });
                            }
                        });
                    },
                    language: {
                        emptyTable: document.getElementById('empty-table-template').innerHTML,
                        zeroRecords: document.getElementById('empty-table-template').innerHTML,
                        processing: document.getElementById('processing-table-template').innerHTML,
                        loadingRecords: document.getElementById('loading-table-template').innerHTML,
                        search: '', searchPlaceholder: 'Search table...',
                    },
                });

                $('#topbar-table1').append($('.dt-length')).append($('.dt-search'));
                $('#pagination-table1').append($('.dt-paging'));
                $('#info-table1').append($('.dt-info'));

                ['service_id', 'type_motor'].forEach(name => {
                    document.querySelectorAll(`input[name="${name}"]`).forEach(cb => {
                        cb.addEventListener('change', () => {
                            const checked = document.querySelectorAll(`input[name="${name}"]:checked`).length > 0;
                            const indicator = document.getElementById(`indicator-${name}`);
                            if (indicator) indicator.classList.toggle('hidden', !checked);
                            table1.draw();
                        });
                    });
                });

                document.getElementById('clear-filters').addEventListener('click', function() {
                    document.querySelectorAll('input[type="checkbox"][name="service_id"], input[type="checkbox"][name="type_motor"]').forEach(cb => { cb.checked = false; });
                    ['service_id', 'type_motor'].forEach(field => {
                        const el = document.getElementById(`indicator-${field}`);
                        if (el) el.classList.add('hidden');
                    });
                    table1.draw();
                });

                // Expand Child Rows
                function buildChildRows(rows) {
                    if (!rows.length) return '<tr><td colspan="12" class="px-5 py-3 text-sm text-gray-400">Tidak ada duplikat ditemukan.</td></tr>';
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
                            <td class="px-5 py-2 text-xs" colspan="3">${filename}</td>
                        </tr>`;
                    }).join('');
                }

                $('#table1 tbody').on('click', 'tr .expand-btn', function() {
                    const tr = $(this).closest('tr');
                    const row = table1.row(tr);
                    const data = row.data();
                    if (!data || !data.phash) return;

                    if (tr.hasClass('dt-hasChild')) {
                        row.child.hide();
                        tr.removeClass('dt-hasChild');
                        $(this).find('svg path').attr('d', 'M12 4.5v15m7.5-7.5h-15');
                        $(this).closest('td').find('button').removeClass('bg-red-100 text-red-600').addClass('bg-indigo-100 text-indigo-600');
                    } else {
                        $.getJSON('{{ route("datatable.cek-kpb-digital.duplicates") }}', { phash: data.phash, exclude_id: data.astra_webc_id }, function(duplicates) {
                            row.child($(buildChildRows(duplicates))).show();
                            tr.addClass('dt-hasChild');
                        });
                        $(this).find('svg path').attr('d', 'M19.5 12h-15');
                        $(this).closest('td').find('button').removeClass('bg-indigo-100 text-indigo-600').addClass('bg-red-100 text-red-600');
                    }
                });
            });
        });

        // ===== Upload / Modal Logic =====
        const dropZone      = document.getElementById('dkd-drop-zone');
        const fileInput     = document.getElementById('dkd-file-input');
        const filePreview   = document.getElementById('dkd-file-preview');
        const submitBtn     = document.getElementById('dkd-submit-btn');
        const submitIcon    = document.getElementById('dkd-submit-icon');
        const submitLabel   = document.getElementById('dkd-submit-label');
        let selectedFiles   = [];

        function renderFilePreview() {
            filePreview.innerHTML = '';
            selectedFiles.forEach((file, i) => {
                const el = document.createElement('div');
                el.className = 'flex items-center justify-between gap-3 p-3 bg-gray-50 border border-gray-200 rounded-lg dark:bg-neutral-700/50 dark:border-neutral-600';
                el.innerHTML = `
                    <div class="flex items-center gap-2 min-w-0">
                        <svg class="shrink-0 size-5 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>
                        <span class="text-sm text-gray-700 dark:text-neutral-200 truncate">${file.name}</span>
                        <span class="text-xs text-gray-400 dark:text-neutral-400 shrink-0">${(file.size / 1024).toFixed(1)} KB</span>
                    </div>
                    <button type="button" data-index="${i}" class="dkd-remove-file shrink-0 size-5 inline-flex items-center justify-center rounded-full text-gray-400 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-500/10 transition-colors">
                        <svg class="size-3.5 pointer-events-none" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>`;
                filePreview.appendChild(el);
            });

            filePreview.querySelectorAll('.dkd-remove-file').forEach(btn => {
                btn.addEventListener('click', () => {
                    selectedFiles.splice(Number(btn.dataset.index), 1);
                    renderFilePreview();
                });
            });
        }

        function addFiles(files) {
            Array.from(files).forEach(f => {
                if (/\.(xls|xlsx)$/i.test(f.name) && !selectedFiles.find(x => x.name === f.name && x.size === f.size)) {
                    selectedFiles.push(f);
                }
            });
            renderFilePreview();
        }

        fileInput.addEventListener('change', () => addFiles(fileInput.files));

        dropZone.addEventListener('dragover', e => { e.preventDefault(); dropZone.classList.add('border-indigo-400', 'bg-indigo-50', 'dark:bg-indigo-900/10'); });
        dropZone.addEventListener('dragleave', () => { dropZone.classList.remove('border-indigo-400', 'bg-indigo-50', 'dark:bg-indigo-900/10'); });
        dropZone.addEventListener('drop', e => {
            e.preventDefault();
            dropZone.classList.remove('border-indigo-400', 'bg-indigo-50', 'dark:bg-indigo-900/10');
            addFiles(e.dataTransfer.files);
        });

        submitBtn.addEventListener('click', function () {
            if (!selectedFiles.length) {
                alert('Pilih minimal satu file Excel terlebih dahulu.');
                return;
            }

            const formData = new FormData();
            selectedFiles.forEach(f => formData.append('excels[]', f));
            formData.append('_token', '{{ csrf_token() }}');

            submitBtn.disabled  = true;
            submitIcon.classList.remove('hidden');
            submitLabel.textContent = 'Mengupload...';

            fetch('{{ route("cek-kpb-digital.store") }}', {
                method: 'POST',
                body: formData,
            })
            .then(async res => {
                const json = await res.json();
                if (res.ok && json.queued) {
                    HSOverlay.close(document.querySelector('#hs-large-modal'));
                    selectedFiles = [];
                    renderFilePreview();
                    // toast success
                    const toast = document.getElementById('toast-success');
                    if (toast) {
                        toast.querySelector('[data-toast-message]')?.setAttribute('data-toast-message', json.message ?? 'File sedang diproses di background.');
                        toast.classList.remove('hidden');
                        setTimeout(() => toast.classList.add('hidden'), 5000);
                    }
                } else {
                    alert(json.error ?? 'Terjadi kesalahan saat upload.');
                }
            })
            .catch(() => alert('Gagal menghubungi server. Coba lagi.'))
            .finally(() => {
                submitBtn.disabled  = false;
                submitIcon.classList.add('hidden');
                submitLabel.textContent = 'Upload & Check';
            });
        });
    </script>
@endsection
