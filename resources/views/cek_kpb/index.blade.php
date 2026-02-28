@extends('layouts.app')
@section('title', 'Ahass | Cek KPB')
@section('main-content')
    <div
        class="relative px-2 sm:px-5 py-5
     before:absolute before:top-0 before:start-0 before:-z-1 before:w-full before:h-112.5 before:bg-slate-900 dark:before:bg-slate-950
     animate-slide-down">
        <div class="max-w-max mx-auto flex flex-col gap-y-5 pt-4 md:pt-16">
            <!-- Header -->
            <div class="mb-4 flex flex-col justify-center gap-y-3 text-center">
                <h1 class="text-2xl md:text-3xl font-semibold text-white">
                    Cek Kupon Perawatan Berkala (KPB)
                </h1>
                <p class="text-sm text-white/70">
                    Pengecekan Klaim KPB
                </p>
            </div>
            <!-- End Header -->

            <div class="bg-white border border-gray-200 shadow-xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                <div class="grid grid-cols-1 md:grid-cols-12">
                    <div class="md:col-span-4 flex-1 flex flex-col h-full">
                        <div class="md:sticky md:top-0 p-5 md:pt-6.5">
                            <p class="text-start text-sm font-medium text-gray-800 rounded-lg dark:text-neutral-200 mb-5">Monitor KPB Queue Process</p>
                            <div id="jobs-container">
                                <!-- JS akan generate semua job di sini -->
                            </div>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="md:col-span-8 md:border-s border-gray-200 dark:border-neutral-700">
                        <!-- Accordion Group -->
                        <div class="hs-accordion-group space-y-2 p-1.5 md:p-3">


                            <!-- Accordion -->
                            <div class="hs-accordion flex flex-col" id="hs-pro-psuf-sg-hd-one-mps-hd">
                                <!-- Accordion Button -->
                                <button class="hs-accordion-toggle p-3.5 w-full inline-flex justify-between items-center gap-x-3 text-start text-sm bg-gray-100 font-medium text-gray-800 rounded-lg focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-neutral-800 dark:text-neutral-200" aria-expanded="true" aria-controls="hs-pro-psuf-sg-one-mps">
                                    Log Activities

                                    <svg class="hs-accordion-active:hidden block size-4.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden size-4.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m18 15-6-6-6 6"></path>
                                    </svg>
                                </button>
                                <!-- End Accordion Button -->

                                <!-- Accordion Content -->
                                <div id="hs-pro-psuf-sg-one-mps" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="region" aria-labelledby="hs-pro-psuf-sg-hd-one-mps-hd">
                                    <div class="p-3.5 sm:pb-8">
                                        <div id="logs-container"></div>
                                    </div>
                                </div>
                                <!-- End Accordion Content -->
                            </div>
                            <!-- End Accordion -->
                        </div>
                        <!-- End Accordion Group -->
                    </div>
                    <!-- End Col -->
                </div>
            </div>

            <!-- Bar Chart in Card -->
            <div
                class="flex flex-col bg-white border border-gray-200 shadow-xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                <!-- Header -->
                <div class="border-b border-gray-200 dark:border-neutral-700">
                    <!-- Page Header -->
                    <div class="py-3 px-5 flex flex-wrap justify-between items-center gap-y-2 gap-x-5">
                        <!-- Input -->
                        <div id="topbar-table1" class="flex flex-1 flex-wrap items-center justify-start gap-x-3 gap-y-2">
                        </div>
                        <!-- End Input -->

                        <div class="flex justify-end items-center gap-x-2">
                            <button type="button" aria-haspopup="dialog" aria-expanded="false"
                                aria-controls="hs-large-modal" data-hs-overlay="#hs-large-modal"
                                class="py-2 px-2.5 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-indigo-600 text-white hover:bg-indigo-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-500">
                                <svg class="hidden sm:block shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5v14"></path>
                                </svg>
                                Add Data
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
                                <!-- Dropdown Service ID -->
                                <div class="hs-dropdown [--auto-close:inside] inline-block">
                                    <!-- Nosin Button -->
                                    <button id="hs-pro-shsfbctd" type="button"
                                        class="hs-dropdown-toggle py-1 px-3 flex items-center gap-x-1 border border-gray-200 text-sm text-start text-gray-800 rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:rounded-full hover dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        Service ID
                                        <span id="indicator-service_id" class="hidden relative flex h-2 w-2 ms-2">
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
                                                @foreach ($data['service_id'] as $service_id)
                                                    @if ($service_id != 4)
                                                        <!-- Checkbox langsung tampil -->
                                                        <div class="flex items-center">
                                                            <label
                                                                class="p-2 group w-full inline-flex items-center cursor-pointer text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-800">
                                                                <input type="checkbox" name="service_id"
                                                                    class="shrink-0 size-4.5 border-gray-300 rounded-sm text-indigo-600 checked:border-indigo-600 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-500 dark:checked:bg-indigo-500 dark:checked:border-indigo-500 dark:focus:ring-offset-gray-800"
                                                                    value="{{ $service_id }}">
                                                                <span class="ms-2 text-gray-800 dark:text-neutral-400">KPB
                                                                    {{ $service_id }}</span>
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
                                                    @foreach ($data['service_id'] as $service_id)
                                                        @if ($service_id == 4)
                                                            <!-- Checkbox dalam collapse -->
                                                            <div class="flex items-center">
                                                                <label
                                                                    class="p-2 group w-full inline-flex items-center cursor-pointer text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-800">
                                                                    <input type="checkbox" name="service_id"
                                                                        class="shrink-0 size-4.5 border-gray-300 rounded-sm text-indigo-600 checked:border-indigo-600 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-500 dark:checked:bg-indigo-500 dark:checked:border-indigo-500 dark:focus:ring-offset-gray-800"
                                                                        value="{{ $service_id }}">
                                                                    <span
                                                                        class="ms-2 text-gray-800 dark:text-neutral-400">KPB
                                                                        {{ $service_id }}</span>
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

                                <!-- Dropdown Type Motor -->
                                <div class="hs-dropdown [--auto-close:inside] inline-block">
                                    <!-- Size Button -->
                                    <button id="hs-pro-shsszd" type="button"
                                        class="hs-dropdown-toggle py-1 px-3 flex items-center gap-x-1 border border-gray-200 text-sm text-start text-gray-800 rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        Type Motor
                                        <span id="indicator-type_motor" class="hidden relative flex h-2 w-2 ms-2">
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
                                    <!-- End Size Button -->

                                    <!-- Dropdown Menu -->
                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-20 w-full max-w-xs bg-white rounded-xl shadow-xl before:absolute before:-top-4 before:start-0 before:w-full before:h-5 dark:bg-neutral-900"
                                        role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-shsszd">
                                        <div class="p-4 sm:p-6">
                                            <!-- Grid -->
                                            <div class="mx-px grid grid-cols-3 gap-2">
                                                @foreach ($data['motor'] as $keyMotor => $motor)
                                                    <!-- Checkbox -->
                                                    <label for="hs-pro-{{ $motor['type_motor'] }}"
                                                        class="p-2.5 group relative flex justify-center items-center gap-x-3 text-center text-xs bg-white text-gray-800 border border-gray-200 cursor-pointer rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200
                                            has-checked:text-indigo-600 dark:has-checked:text-indigo-500
                                            has-checked:border-indigo-600 dark:has-checked:border-indigo-500
                                            has-checked:ring-1
                                            has-checked:ring-indigo-600 dark:has-checked:ring-indigo-500
                                            has-disabled:pointer-events-none
                                            has-disabled:text-gray-200 dark:has-disabled:text-neutral-700
                                            has-disabled:after:absolute
                                            has-disabled:after:inset-0
                                            has-disabled:after:bg-[linear-gradient(to_right_bottom,transparent_calc(50%-1px),var(--color-gray-200)_calc(50%-1px),var(--color-gray-200)_50%,transparent_50%)]
                                            dark:has-disabled:after:bg-[linear-gradient(to_right_bottom,transparent_calc(50%-1px),var(--color-neutral-700)_calc(50%-1px),var(--color-neutral-700)_50%,transparent_50%)] ">
                                                        <input type="checkbox" id="hs-pro-{{ $motor['type_motor'] }}"
                                                            class="hidden bg-transparent border-gray-200 text-indigo-600 focus:ring-white focus:ring-offset-0 dark:text-indigo-500 dark:border-neutral-700 dark:focus:ring-neutral-900"
                                                            name="type_motor" value="{{ $motor['type_motor'] }}">
                                                        <span class="block">
                                                            {{ $motor['type_motor'] }}
                                                        </span>
                                                    </label>
                                                    <!-- End Checkbox -->
                                                @endforeach
                                            </div>
                                            <!-- End Grid -->
                                        </div>
                                    </div>
                                    <!-- End Dropdown Menu -->
                                </div>
                                <!-- End Dropdown Type Motor -->
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
                    <div class="min-w-full inline-block align-middle">
                        <!-- Table -->
                        <table id="table1"
                            class="min-w-full divide-y divide-gray-200 border-t border-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                            <thead id="thead1" class="bg-gray-50 dark:bg-neutral-700/50">
                                @php($table1_headers = [['', ''], ['Nama File', 'ahass_name'], ['Service ID', 'service_id'], ['Nomor Mesin', 'engine'], ['Catatan', 'notes.message']])
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
                <!-- End Table Content -->

                <!-- Footer -->
                <div
                    class="py-3 px-5 border-t border-gray-200 dark:border-neutral-800 flex flex-col sm:flex-row items-center justify-between gap-2">
                    <div id="info-table1" class="text-sm text-gray-800 dark:text-neutral-200"></div>
                    <div id="pagination-table1" class="flex justify-center sm:justify-end items-center gap-x-1"></div>
                </div>
                <!-- End Footer -->
            </div>
            <!-- End Bar Chart in Card -->
        </div>
    </div>
    @include('cek_kpb.partial.modal_upload')
    @include('cek_kpb.partial.modal')
    @include('template.empty_table_template.index')
    @include('template.loading_table_template.index')
    @include('template.processing_table_template.index')
    @include('components.row_checkbox_table_component.index')
    @include('components.toast.index')
@endsection
@section('js')
    <script>
        const jobsContainer = document.getElementById('jobs-container');
        const logsContainer = document.getElementById('logs-container');
        const noData = `
            <div class="p-5 h-full flex flex-col justify-center items-center text-center">
                <svg class="w-48 mx-auto mb-4" width="178" height="90" viewBox="0 0 178 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="27" y="50.5" width="124" height="39" rx="7.5" fill="currentColor" class="fill-white dark:fill-neutral-800"></rect>
                <rect x="27" y="50.5" width="124" height="39" rx="7.5" stroke="currentColor" class="stroke-gray-50 dark:stroke-neutral-700/10"></rect>
                <rect x="34.5" y="58" width="24" height="24" rx="4" fill="currentColor" class="fill-gray-50 dark:fill-neutral-700/30"></rect>
                <rect x="66.5" y="61" width="60" height="6" rx="3" fill="currentColor" class="fill-gray-50 dark:fill-neutral-700/30"></rect>
                <rect x="66.5" y="73" width="77" height="6" rx="3" fill="currentColor" class="fill-gray-50 dark:fill-neutral-700/30"></rect>
                <rect x="19.5" y="28.5" width="139" height="39" rx="7.5" fill="currentColor" class="fill-white dark:fill-neutral-800"></rect>
                <rect x="19.5" y="28.5" width="139" height="39" rx="7.5" stroke="currentColor" class="stroke-gray-100 dark:stroke-neutral-700/30"></rect>
                <rect x="27" y="36" width="24" height="24" rx="4" fill="currentColor" class="fill-gray-100 dark:fill-neutral-700/70"></rect>
                <rect x="59" y="39" width="60" height="6" rx="3" fill="currentColor" class="fill-gray-100 dark:fill-neutral-700/70"></rect>
                <rect x="59" y="51" width="92" height="6" rx="3" fill="currentColor" class="fill-gray-100 dark:fill-neutral-700/70"></rect>
                <g filter="url(#filter14)">
                    <rect x="12" y="6" width="154" height="40" rx="8" fill="currentColor" class="fill-white dark:fill-neutral-800" shape-rendering="crispEdges"></rect>
                    <rect x="12.5" y="6.5" width="153" height="39" rx="7.5" stroke="currentColor" class="stroke-gray-100 dark:stroke-neutral-700/60" shape-rendering="crispEdges"></rect>
                    <rect x="20" y="14" width="24" height="24" rx="4" fill="currentColor" class="fill-gray-200 dark:fill-neutral-700 "></rect>
                    <rect x="52" y="17" width="60" height="6" rx="3" fill="currentColor" class="fill-gray-200 dark:fill-neutral-700"></rect>
                    <rect x="52" y="29" width="106" height="6" rx="3" fill="currentColor" class="fill-gray-200 dark:fill-neutral-700"></rect>
                </g>
                <defs>
                    <filter id="filter14" x="0" y="0" width="178" height="64" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
                    <feOffset dy="6"></feOffset>
                    <feGaussianBlur stdDeviation="6"></feGaussianBlur>
                    <feComposite in2="hardAlpha" operator="out"></feComposite>
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.03 0"></feColorMatrix>
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1187_14810"></feBlend>
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1187_14810" result="shape"></feBlend>
                    </filter>
                </defs>
                </svg>

                <div class="max-w-sm mx-auto">
                <p class="mt-2 font-medium text-gray-800 dark:text-neutral-200">
                    No data
                </p>
                <p class="mb-5 text-sm text-gray-500 dark:text-neutral-500">
                    No data here yet. We will notify you when there's an update.
                </p>
                </div>
            </div>
        `;
        // Render semua job ke DOM
        function renderJobs(jobs) {
            jobsContainer.innerHTML = ``;
            if(jobs.length === 0) {
                jobsContainer.innerHTML = noData;
                return;
            }
            jobs.forEach(job => {
                const progress = job.cek_kpb_progress ?? {};
                const jobId = progress.job_id ?? job.id;
                const total = progress.total ?? 0;
                const current = progress.progress ?? 0;
                const percent = ((current / total) * 100).toFixed(1);

                const html = `
                    <div class="mt-5 flex flex-col">
                        <div class="py-2.5 border-t border-dashed border-gray-200 dark:border-neutral-700">
                            <div class="flex items-center gap-3">
                                <div class="grow">
                                    <p class="text-sm text-gray-800 dark:text-neutral-200">${job.file_name ?? '(belum ada file)'}</p>
                                    <div class="mt-2 flex flex-col gap-x-3">
                                        <span id="percent-text-${jobId}" class="block mb-1.5 text-xs text-gray-500 dark:text-neutral-400">
                                            ${percent}% · ${current} / ${total} Checked
                                        </span>
                                        <div class="flex w-full h-1 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                            <div id="percent-bar-${jobId}"
                                                class="flex flex-col justify-center overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap dark:bg-neutral-200"
                                                style="width: ${percent}%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                jobsContainer.insertAdjacentHTML('beforeend', html);
            });
        }
        // Render semua log ke DOM
        function renderLogs(logs) {
            logsContainer.innerHTML = ``;
            if(logs.length === 0) {
                logsContainer.innerHTML = noData;
                return;
            }
            logs.forEach(log => {
                const html = `
                    <div class="p-5 mt-2 space-y-4 flex flex-col bg-white border border-gray-200 rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                        <!-- Heading -->
                        <div class="flex flex-wrap justify-between items-center gap-2">
                            <span class="font-medium text-gray-800 dark:text-neutral-200">
                            ${log.file_name}
                            </span>
                            <span class="inline-flex items-center gap-1.5 py-px px-2 text-xs font-medium ${log.status === 'failed' ? 'bg-red-100 text-red-800 rounded-full dark:bg-red-500/10 dark:text-red-500' : 'bg-green-100 text-green-800 rounded-full dark:bg-green-500/10 dark:text-green-500'}">
                            ${log.status === 'failed' ? 'Gagal' : 'Berhasil'}
                            </span>
                        </div>
                        <!-- End Heading -->

                        <!-- List Group -->
                        <ul class="space-y-2">
                            <li class="flex justify-between items-center">
                            <span class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                                IP address:
                            </span>
                            <span class="text-sm text-gray-800 dark:text-neutral-200">
                                ${log.ip_address}
                            </span>
                            </li>
                            <li class="flex justify-between items-center">
                            <span class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                                Deskripsi:
                            </span>
                            <span class="text-sm text-gray-800 dark:text-neutral-200">
                                ${log.description}
                            </span>
                            </li>
                            <li class="flex justify-between items-center">
                            <span class="text-xs uppercase text-gray-500 dark:text-neutral-500">
                                Recent activity:
                            </span>
                            <span class="text-sm text-gray-800 dark:text-neutral-200">
                                ${log.created_at_human}
                            </span>
                            </li>
                        </ul>
                        <!-- End List Group -->
                    </div>
                `;
                logsContainer.insertAdjacentHTML('beforeend', html);
            });
        }
        // Ambil semua job dari server
        fetch('/cek-kpb/getAllJobs')
            .then(res => res.json())
            .then(jobs => {
                renderJobs(jobs);

                // Ambil semua job_id dari cek_kpb_progress untuk polling
                const jobIds = jobs.map(job => job.cek_kpb_progress?.job_id ?? job.id);
            })
            .catch(err => console.error('Error fetching jobs', err));
        // Ambil semua log dari server
        fetch('/cek-kpb/getAllLogJobs')
            .then(res => res.json())
            .then(logs => {
                renderLogs(logs);
            })
            .catch(err => console.error('Error fetching logs', err));
        const checkKpbSubmit = document.getElementById('checkKpbSubmit');
        let selectedFiles = [];

        const inputFile = document.getElementById('hs-pro-eipb');
        const previewContainer = document.getElementById('file-preview');
        const allowedExtensions = ['xls', 'xlsx'];

        inputFile.addEventListener('change', function(e) {
            Array.from(e.target.files).forEach(file => {
                const ext = file.name.split('.').pop().toLowerCase();

                if (!allowedExtensions.includes(ext)) {
                    alert(`❌ File "${file.name}" bukan format Excel (.xls/.xlsx)!`);
                    return;
                }

                // Skip duplikat
                if (selectedFiles.some(f => f.name === file.name)) return;

                selectedFiles.push(file);

                const fileItem = document.createElement('div');
                fileItem.classList.add(
                    'flex', 'items-center', 'justify-between',
                    'gap-x-3', 'p-2', 'border', 'border-stone-200',
                    'rounded-lg', 'bg-stone-50',
                    'dark:bg-neutral-700', 'dark:border-neutral-600'
                );

                fileItem.innerHTML = `
                    <div class="flex items-center gap-x-3">
                        <img src="https://cdn-icons-png.flaticon.com/512/732/732220.png" alt="Excel" class="w-6 h-6">
                        <span class="text-sm text-stone-700 dark:text-neutral-200">${file.name}</span>
                    </div>
                    <button type="button" class="delete-file text-red-500 hover:text-red-700 text-sm font-medium">✕</button>
                `;

                // Hapus file dari daftar & tampilan
                fileItem.querySelector('.delete-file').addEventListener('click', () => {
                    selectedFiles = selectedFiles.filter(f => f.name !== file.name);
                    fileItem.remove();
                });

                previewContainer.appendChild(fileItem);
            });

            // Reset input supaya bisa pilih file sama lagi
            e.target.value = '';
        });

        checkKpbSubmit.addEventListener('click', function() {
            if (selectedFiles.length === 0) {
                document.getElementById('hs-task-created-alert-label').innerText = 'Tidak ada file yang dipilih!';
                document.getElementById('hs-task-created-alert-icon').innerHTML = '';
                document.getElementById('hs-task-created-alert-content').innerText = 'Silakan pilih minimal satu file Excel untuk diunggah.';
                document.getElementById('hs-task-created-alert-icon').innerHTML = `
                    <span
                        class="mb-4 inline-flex justify-center items-center size-11 rounded-full border-4 border-yellow-50 bg-yellow-100 text-yellow-500 dark:bg-yellow-700 dark:border-yellow-600 dark:text-yellow-100">
                        <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                    </span>
                `;
                HSOverlay.open('#hs-task-created-alert');
                return;
            }

            const formData = new FormData();
            selectedFiles.forEach(file => formData.append('excels[]', file));

            fetch('{{ route('cek-kpb.store') }}', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    document.getElementById('hs-task-created-alert-label').innerText = 'Sukses';
                    document.getElementById('hs-task-created-alert-icon').innerHTML = '';
                    document.getElementById('hs-task-created-alert-content').innerText = 'File anda berhasil diunggah dan sedang diproses.';
                    document.getElementById('hs-task-created-alert-icon').innerHTML = `
                        <span
                            class="mb-4 inline-flex justify-center items-center size-11 rounded-full border-4 border-green-50 bg-green-100 text-green-500 dark:bg-green-700 dark:border-green-600 dark:text-green-100">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z" />
                            </svg>
                        </span>
                    `;
                    HSOverlay.open('#hs-task-created-alert');
                    // reset form
                    selectedFiles = [];
                    previewContainer.innerHTML = '';
                    // close modal
                    HSOverlay.close('#hs-large-modal');
                    // reload jobs
                    fetch('/cek-kpb/getAllJobs')
                        .then(res => res.json())
                        .then(jobs => {
                            console.log(jobs);
                            renderJobs(jobs);
                            const jobIds = jobs.map(job => job.cek_kpb_progress?.job_id ?? job.id);
                        })
                        .catch(err => console.error('Error fetching jobs', err));
                    fetch('/cek-kpb/getAllLogJobs')
                        .then(res => res.json())
                        .then(logs => {
                            renderLogs(logs);
                        })
                        .catch(err => console.error('Error fetching logs', err));
                    confetti();
                })
                .catch(error => {
                    document.getElementById('hs-task-created-alert-label').innerText = 'Error';
                    document.getElementById('hs-task-created-alert-icon').innerHTML = '';
                    document.getElementById('hs-task-created-alert-content').innerText = 'Terjadi kesalahan saat mengunggah file.';
                    document.getElementById('hs-task-created-alert-icon').innerHTML = `
                        <span
                            class="mb-4 inline-flex justify-center items-center size-11 rounded-full border-4 border-red-50 bg-red-100 text-red-500 dark:bg-red-700 dark:border-red-600 dark:text-red-100">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        </span>
                    `;
                    HSOverlay.open('#hs-task-created-alert');
                });
        });


        window.addEventListener('load', () => {
            $(document).ready(() => {
                let table1 = $('#table1').DataTable({
                    processing: true,
                    serverSide: true,
                    colReorder: true,
                    // fixedHeader: true,
                    pagingType: 'simple_numbers',
                    ajax: {
                        url: '{{ route('datatable.cek-kpb') }}',
                        data: function(d) {
                            // Tambahkan data filter ke dalam request AJAX
                            d.type_motor = Array.from(document.querySelectorAll(
                                'input[name="type_motor"]:checked')).map(cb => cb.value);
                            d.service_id = Array.from(document.querySelectorAll(
                                'input[name="service_id"]:checked')).map(cb => cb.value);
                        }
                    },
                    columns: [
                        {
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
                            data: 'file_name',
                            name: 'file_name',
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
                                                ${row?.user?.name}
                                                </p>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>`;
                            }
                        },
                        {
                            data: 'service_id',
                            name: 'service_id'
                        },
                        {
                            data: 'engine',
                            name: 'engine',
                            render: function(data, type, row) {
                                return `<div class="flex items-center gap-x-3">
                                        <div class="grow">
                                            <a class="font-medium text-gray-800 underline-offset-2 hover:underline hover:decoration-2 hover:text-indigo-700 focus:outline-hidden focus:underline focus:decoration-2 focus:text-indigo-700 dark:text-neutral-200 dark:hover:text-indigo-400 dark:focus:text-indigo-400" href="#">
                                            ${data}
                                            </a>
                                            <ul class="flex flex-wrap items-center whitespace-nowrap gap-1.5">
                                            <li class="inline-flex items-center relative text-xs text-gray-500 pe-2 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:size-[3px] after:bg-gray-400 after:rounded-full after:-translate-y-1/2 dark:text-neutral-500 dark:after:bg-neutral-600">
                                                <p class="text-xs text-gray-500 dark:text-neutral-400">
                                                ${row?.motor?.type_motor}
                                                </p>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>`;
                            }
                        },
                        {
                            data: 'notes',
                            name: 'notes',
                            searchable: false,
                            orderable: false,
                            render: function(data, type, row) {
                                return `<div class="py-3 px-5">
                                    <div class="flex flex-col">
                                        <div class="flex items-center gap-1.5">
                                            <span class="shrink-0 size-2 inline-block rounded-full"></span>
                                            <span class="block text-sm text-gray-800 dark:text-neutral-200">
                                                <ul class="list-disc ms-4 text-sm text-gray-800 dark:text-neutral-200">
                                                    ${row?.notes?.map(n => `<li>${n.message}</li>`).join('')}
                                                </ul>
                                            </span>
                                        </div>
                                    </div>
                                </div>`;
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
                ['service_id', 'type_motor'].forEach(name => {
                    document.querySelectorAll(`input[name="${name}"]`).forEach(cb => {
                        cb.addEventListener('change', () => {
                            let checked = document.querySelectorAll(`input[name="${name}"]:checked`)
                                .length > 0;
                            let indicator = document.getElementById(`indicator-${name}`);
                            if (indicator) {
                                indicator.classList.toggle('hidden', !checked);
                            }

                            let tbody = document.getElementById("tbody1");
                            tbody.innerHTML = showLoadingTable(8, "Loading...");
                            table1.draw();
                        });
                    });
                });

                //Untuk Clear Filter Button
                document.getElementById('clear-filters').addEventListener('click', function() {
                    // Uncheck semua checkbox
                    document.querySelectorAll(
                        'input[type="checkbox"][name="service_id"], input[type="checkbox"][name="type_motor"]'
                    ).forEach(
                        cb => {
                            cb.checked = false;
                        });

                    // Sembunyikan semua indicator
                    ['service_id', 'type_motor'].forEach(field => {
                        document.getElementById(`indicator-${field}`).classList.add(
                            'hidden');
                    });
                    table1.draw();
                });
            });
        });
    </script>
@endsection
