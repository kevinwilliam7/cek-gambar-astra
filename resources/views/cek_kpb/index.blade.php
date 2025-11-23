@extends('layouts.app')
@section('title', 'Ahass | Rekap KPB')
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
                            <!-- Timeline -->
                            <div>
                                <h3 class="mb-4 font-medium text-sm text-gray-800 dark:text-neutral-200">
                                    Module cek KPB
                                </h3>

                                <!-- Item -->
                                <div class="group relative flex gap-x-3.5">
                                    <!-- Icon -->
                                    <div
                                        class="relative group-last:after:hidden after:absolute after:top-6 after:bottom-1 after:start-2.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                                        <span
                                            class="size-5 flex justify-center items-center bg-green-600 text-white rounded-full dark:bg-green-500">
                                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                            <svg class="hidden shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242"></path>
                                                <path d="M12 12v9"></path>
                                                <path d="m8 17 4 4 4-4"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <!-- End Icon -->

                                    <!-- Right Content -->
                                    <div class="-mt-1 grow pb-5 group-last:pb-0">
                                        <span class="text-sm text-gray-800 dark:text-neutral-200">
                                            Cek Nosin kurang / lebih dari 12 karakter
                                        </span>
                                    </div>
                                    <!-- End Right Content -->
                                </div>
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="group relative flex gap-x-3.5">
                                    <!-- Icon -->
                                    <div
                                        class="relative group-last:after:hidden after:absolute after:top-6 after:bottom-1 after:start-2.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                                        <span
                                            class="size-5 flex justify-center items-center bg-green-600 text-white rounded-full dark:bg-green-500">
                                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                            <svg class="hidden shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242"></path>
                                                <path d="M12 12v9"></path>
                                                <path d="m8 17 4 4 4-4"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <!-- End Icon -->

                                    <!-- Right Content -->
                                    <div class="-mt-1 grow pb-5 group-last:pb-0">
                                        <span class="text-sm text-gray-800 dark:text-neutral-200">
                                            Cek tanggal beli sama dengan tanggal service
                                        </span>
                                    </div>
                                    <!-- End Right Content -->
                                </div>
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="group relative flex gap-x-3.5">
                                    <!-- Icon -->
                                    <div
                                        class="relative group-last:after:hidden after:absolute after:top-6 after:bottom-1 after:start-2.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                                        <span
                                            class="size-5 flex justify-center items-center bg-green-600 text-white rounded-full dark:bg-green-500">
                                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M20 6 9 17l-5-5"></path>
                                            </svg>
                                            <svg class="hidden shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242"></path>
                                                <path d="M12 12v9"></path>
                                                <path d="m8 17 4 4 4-4"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <!-- End Icon -->

                                    <!-- Right Content -->
                                    <div class="-mt-1 grow pb-5 group-last:pb-0">
                                        <span class="text-sm text-gray-800 dark:text-neutral-200">
                                            Cek KM / Tanggal service yang lebih kecil dari service ID sebelumnya (Compare dengan rekap database).
                                        </span>
                                    </div>
                                    <!-- End Right Content -->
                                </div>
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="group relative flex gap-x-3.5">
                                    <!-- Icon -->
                                    <div
                                        class="relative group-last:after:hidden after:absolute after:top-6 after:bottom-1 after:start-2.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                                        <span
                                            class="size-5 flex justify-center items-center border border-dashed border-gray-400 text-gray-800 rounded-full dark:text-neutral-200">
                                        </span>
                                    </div>
                                    <!-- End Icon -->

                                    <!-- Right Content -->
                                    <div class="-mt-1 grow pb-5 group-last:pb-0">
                                        <span class="text-sm text-gray-800 dark:text-neutral-200">
                                            Cek KM / Tanggal service yang lebih kecil dari service ID sebelumnya (Compare dengan sesama excel).
                                        </span>
                                    </div>
                                    <!-- End Right Content -->
                                </div>
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="group relative flex gap-x-3.5">
                                    <!-- Icon -->
                                    <div
                                        class="relative group-last:after:hidden after:absolute after:top-6 after:bottom-1 after:start-2.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200 dark:after:bg-neutral-700">
                                        <span
                                            class="size-5 flex justify-center items-center border border-dashed border-gray-400 text-gray-800 rounded-full dark:text-neutral-200">
                                        </span>
                                    </div>
                                    <!-- End Icon -->

                                    <!-- Right Content -->
                                    <div class="-mt-1 grow pb-5 group-last:pb-0">
                                        <span class="text-sm text-gray-800 dark:text-neutral-200">
                                            Cek Expired / Tanggal service melebihi batas maksimal
                                        </span>
                                    </div>
                                    <!-- End Right Content -->
                                </div>
                                <!-- End Item -->
                            </div>
                            <!-- End Timeline -->
                        </div>

                    </div>
                    <!-- End Col -->

                    <div class="md:col-span-8 md:border-s border-gray-200 dark:border-neutral-700">
                        <!-- Accordion Group -->
                        <div class="hs-accordion-group space-y-2 p-1.5 md:p-3">
                            <!-- Accordion -->
                            <div class="hs-accordion flex flex-col active" id="hs-pro-psuf-sg-hd-one-atm-hd">
                                <!-- Accordion Button -->
                                <button
                                    class="hs-accordion-toggle p-3.5 w-full inline-flex justify-between items-center gap-x-3 text-start text-sm bg-gray-100 font-medium text-gray-800 rounded-lg focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-neutral-800 dark:text-neutral-200"
                                    aria-expanded="true" aria-controls="hs-pro-psuf-sg-one-atm">
                                    Track file excel KPB queue process

                                    <svg class="hs-accordion-active:hidden block size-4.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6"></path>
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden size-4.5"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6"></path>
                                    </svg>
                                </button>
                                <!-- End Accordion Button -->

                                <!-- Accordion Content -->
                                <div id="hs-pro-psuf-sg-one-atm"
                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-pro-psuf-sg-hd-one-atm-hd">
                                    <div class="p-3.5 sm:pb-8">
                                        <p class="text-sm text-gray-500 dark:text-neutral-400">
                                            Monitor progress and keep your excel KPB queue proccess
                                        </p>
                                        {{-- @foreach ($jobs as $job)
                                            <!-- List Group -->
                                            <div class="mt-5 flex flex-col">
                                                <!-- Item -->
                                                <div
                                                    class="py-2.5 first:pt-0 last:pb-0 first:border-t-0 border-t border-dashed border-gray-200 dark:border-neutral-700">
                                                    <div class="flex items-center gap-3">
                                                        <div class="text-gray-800 dark:text-neutral-200">
                                                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg"
                                                                width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <rect width="18" height="18" x="3" y="3"
                                                                    rx="2"></rect>
                                                                <path d="M3 9a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2"></path>
                                                                <path
                                                                    d="M3 11h3c.8 0 1.6.3 2.1.9l1.1.9c1.6 1.6 4.1 1.6 5.7 0l1.1-.9c.5-.5 1.3-.9 2.1-.9H21">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <div class="grow">
                                                            <p class="text-sm text-gray-800 dark:text-neutral-200">
                                                                {{ $job->file_name }}
                                                            </p>
                                                            <div class="mt-2 flex flex-col gap-x-3">

                                                                <!-- TEXT (Kasih ID unik berdasarkan job_id) -->
                                                                <span id="percent-text-{{ $job->detail?->job_id }}"
                                                                    class="block mb-1.5 text-xs text-gray-500 dark:text-neutral-400">
                                                                    {{ number_format( ($job->detail?->progress / ($job->detail?->total ?? 1)) * 100, 1) }}% ·
                                                                    {{ $job->detail?->progress ?? 0 }} / {{ $job->detail?->total ?? 0 }} Checked
                                                                </span>

                                                                <!-- PROGRESS BAR -->
                                                                <div class="flex w-full h-1 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700">
                                                                    <div id="percent-bar-{{ $job->detail?->job_id }}"
                                                                        class="flex flex-col justify-center overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap dark:bg-neutral-200"
                                                                        style="width: {{ ($job->detail?->progress / ($job->detail->total ?? 1)) * 100 }}%">
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div>
                                                            <button type="button"
                                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-gray-800 text-white hover:bg-gray-900 disabled:bg-gray-100 disabled:text-gray-400 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-800 dark:bg-white dark:text-neutral-800 dark:hover:bg-neutral-200 dark:focus:bg-neutral-200 dark:disabled:bg-neutral-700 dark:disabled:text-neutral-400">
                                                                <span class="loading loading-infinity loading-xs"></span>
                                                                {{ $job->status }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Item -->
                                            </div>
                                            <!-- End List Group -->
                                        @endforeach --}}

                                        <div id="jobs-container">
                                            <!-- JS akan generate semua job di sini -->
                                        </div>
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
                        <div class="relative p-2">
                            <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                                <svg class="shrink-0 size-4 text-gray-800 dark:text-neutral-200"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8" />
                                    <path d="m21 21-4.3-4.3" />
                                </svg>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <div class="grow relative">
                                    <input id="search-table1" type="text"
                                        class="border-1 py-1.5 sm:py-2 ps-10 pe-8 block w-full rounded-lg sm:text-sm border-gray-300 dark:border-gray-600
                                    bg-white dark:bg-neutral-700
                                    text-gray-900 dark:text-gray-100
                                    focus:outline-none
                                    focus:ring-2 focus:ring-indigo-500 focus:ring-offset-0
                                    dark:focus:ring-indigo-400 dark:focus:ring-offset-gray-900
                                    transition-shadow duration-150"
                                        placeholder="Search data">
                                    <div class="absolute inset-y-0 end-0 flex items-center z-20 pe-2">
                                        <div class="flex items-center">
                                            <button type="button"
                                                class="hidden flex shrink-0 justify-center items-center size-6 rounded-full text-gray-500 hover:text-indigo-600 focus:outline-hidden focus:text-indigo-600 dark:text-neutral-500 dark:hover:text-indigo-500 dark:focus:text-indigo-500"
                                                aria-label="Close">
                                                <span class="sr-only">Close</span>
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10" />
                                                    <path d="m15 9-6 6" />
                                                    <path d="m9 9 6 6" />
                                                </svg>
                                            </button>
                                            <button type="button"
                                                class="inline-flex shrink-0 justify-center items-center size-6 text-sm font-medium rounded-full text-white bg-indigo-700 hover:bg-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-indigo-600">
                                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M5 12h14" />
                                                    <path d="m12 5 7 7-7 7" />
                                                </svg>
                                                <span class="sr-only">Search</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Input -->

                        <div class="flex justify-end items-center gap-x-2">
                            {{-- <span class="text-sm">Perpage</span> --}}
                            <select id="page-size-table1"
                                data-hs-select='{
                                "placeholder": "Select option...",
                                "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-2 ps-3 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-stone-200 rounded-lg text-start text-sm focus:outline-hidden focus:ring-2 focus:ring-green-600 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-hidden dark:focus:ring-1 dark:focus:ring-neutral-600",
                                "dropdownClasses": "mt-2 z-50 w-16 max-h-72 p-1 space-y-0.5 overflow-hidden overflow-y-auto bg-white rounded-xl shadow-xl [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-stone-100 [&::-webkit-scrollbar-thumb]:bg-stone-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900",
                                "optionClasses": "hs-selected:bg-stone-100 dark:hs-selected:bg-neutral-800 py-1.5 px-2 w-full text-[13px] text-stone-800 cursor-pointer hover:bg-stone-100 rounded-lg focus:outline-hidden focus:bg-stone-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700",
                                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-stone-800 dark:text-neutral-200\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                                }'
                                class="hidden">
                                <option value="10" selected>10</option>
                                <option value="15">15</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
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

                <!-- Table Content -->
                <div
                    class="overflow-x-auto [&amp;::-webkit-scrollbar]:h-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-100 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500">
                    <div class="min-w-full inline-block align-middle">
                        <!-- Table -->
                        <table id="table1"
                            class="min-w-full divide-y divide-gray-200 border-t border-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                            <thead id="thead1" class="bg-gray-50 dark:bg-neutral-700/50">
                                @php($table1_headers = [['', ''], ['Nama File', 'ahass_name'], ['Service ID', 'service_id'], ['Nomor Mesin', 'engine'], ['Notes', 'notes']])
                                <tr>
                                    @foreach ($table1_headers as $table1_header)
                                        <th scope="col"
                                            class="{{ $table1_header[0] === '' ? '' : 'min-w-52' }} {{ $table1_header[0] === 'Action' ? 'text-right justify-end' : 'text-left' }}">
                                            <!-- Sort Dropdown -->
                                            <div class="hs-dropdown relative inline-flex w-full cursor-pointer">
                                                <button id="hs-pro-ptpn" type="button"
                                                    class="px-5 py-2.5 text-start w-full flex items-center gap-x-1 text-sm text-nowrap whitespace-nowrap font-normal text-gray-500 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-500 dark:focus:bg-neutral-700 {{ $table1_header[0] === 'Action' ? 'justify-end text-right' : 'text-left w-full text-start' }}"
                                                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                                    {{ $table1_header[0] }}
                                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path d="m7 15 5 5 5-5"></path>
                                                        <path d="m7 9 5-5 5 5"></path>
                                                    </svg>
                                                </button>

                                                <!-- Dropdown -->
                                                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-40 transition-[opacity,margin] duration opacity-0 hidden z-10 bg-white rounded-xl shadow-xl dark:bg-neutral-900"
                                                    role="menu" aria-orientation="vertical"
                                                    aria-labelledby="hs-pro-ptpn" tabindex="-1">
                                                    <div class="p-1">
                                                        <button type="button"
                                                            onclick="setSortTable1('{{ $table1_header[1] }}', 'asc')"
                                                            class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                            <svg class="shrink-0 size-3.5"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="m5 12 7-7 7 7"></path>
                                                                <path d="M12 19V5"></path>
                                                            </svg>
                                                            Sort ascending
                                                        </button>
                                                        <button type="button"
                                                            onclick="setSortTable1('{{ $table1_header[1] }}', 'desc')"
                                                            class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                            <svg class="shrink-0 size-3.5"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="M12 5v14"></path>
                                                                <path d="m19 12-7 7-7-7"></path>
                                                            </svg>
                                                            Sort descending
                                                        </button>
                                                        <div class="my-1 border-t border-gray-200 dark:border-neutral-800">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Dropdown -->
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
                <div class="py-3 px-5 border-t border-gray-200 dark:border-neutral-800">
                    <!-- Footer -->
                    <div class="grid grid-cols-2 items-center gap-y-2 sm:gap-y-0 sm:gap-x-5">
                        <p class="text-sm text-gray-800 dark:text-neutral-200">
                            <span id="pagination1-total-data" class="font-medium">0</span>
                            <span class="text-gray-500 dark:text-neutral-500">results</span>
                        </p>

                        <!-- Pagination -->
                        <nav class="flex justify-end items-center gap-x-1" aria-label="Pagination">
                            <button id="prevBtnTable1" type="button"
                                class="min-h-9.5 min-w-9.5 py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-white dark:hover:bg-white/10 dark:focus:bg-neutral-700"
                                aria-label="Previous">
                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m15 18-6-6 6-6"></path>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </button>
                            <div class="flex items-center gap-x-1">
                                <span id="pagination1-current-page"
                                    class="min-h-9.5 min-w-9.5 flex justify-center items-center bg-gray-100 text-gray-800 py-2 px-3 text-sm rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:text-white"
                                    aria-current="page">0</span>
                                <span
                                    class="min-h-9.5 flex justify-center items-center text-gray-500 py-2 px-1.5 text-sm dark:text-neutral-500">of</span>
                                <span id="pagination1-total-page"
                                    class="min-h-9.5 flex justify-center items-center text-gray-500 py-2 px-1.5 text-sm dark:text-neutral-500">0</span>
                            </div>
                            <button id="nextBtnTable1" type="button"
                                class="min-h-9.5 min-w-9.5 py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm rounded-lg text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-white dark:hover:bg-white/10 dark:focus:bg-neutral-700"
                                aria-label="Next">
                                <span class="sr-only">Next</span>
                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </button>
                        </nav>
                        <!-- End Pagination -->
                    </div>
                    <!-- End Footer -->
                </div>
                <!-- End Footer -->
            </div>
            <!-- End Bar Chart in Card -->
        </div>
    </div>
    @include('cek_kpb.partial.modal_upload')
    @include('cek_kpb.partial.modal')
@endsection
@section('js')
    <script>
        const jobsContainer = document.getElementById('jobs-container');
        // Render semua job ke DOM
        function renderJobs(jobs) {
            jobsContainer.innerHTML = '';

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

        // Polling semua job progress
        async function refreshProgressMultiple(jobIds) {
            const interval = setInterval(async () => {
                try {
                    const results = await Promise.all(jobIds.map(async jobId => {
                        try {
                            const res = await fetch(`/cek-kpb/getProgressJob/${jobId}`);
                            if (!res.ok) return { jobId, done: true }; // fallback 100%

                            const data = await res.json();
                            const percent = data.progress >= data.total ? 100 : data.percent.toFixed(1);

                            const textEl = document.getElementById(`percent-text-${jobId}`);
                            const barEl = document.getElementById(`percent-bar-${jobId}`);

                            if (textEl) textEl.innerText = `${percent}% · ${data.progress} / ${data.total} Checked`;
                            if (barEl) barEl.style.width = percent + '%';

                            if(data.progress >= data.total) {
                                // Job selesai, fetch ulang semua job untuk update status
                                fetch('/cek-kpb/getAllJobs')
                                    .then(res => res.json())
                                    .then(jobs => {
                                        renderJobs(jobs);
                                        const jobIds = jobs.map(job => job.cek_kpb_progress?.job_id ?? job.id);
                                        refreshProgressMultiple(jobIds);
                                    })
                                    .catch(err => console.error('Error fetching jobs', err));
                                return { jobId, done: data.progress >= data.total };
                            }
                        } catch {
                            // error fetch → anggap done
                            return { jobId, done: true };
                        }
                    }));

                    // Hentikan interval jika semua job selesai
                    const allDone = results.every(r => r.done);
                    if (allDone) clearInterval(interval);

                } catch (err) {
                    console.error('Error polling jobs');
                }
            }, 1000);
        }
        // Ambil semua job dari server
        fetch('/cek-kpb/getAllJobs')
            .then(res => res.json())
            .then(jobs => {
                renderJobs(jobs);

                // Ambil semua job_id dari cek_kpb_progress untuk polling
                const jobIds = jobs.map(job => job.cek_kpb_progress?.job_id ?? job.id);
                refreshProgressMultiple(jobIds);
            })
            .catch(err => console.error('Error fetching jobs', err));

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
                            refreshProgressMultiple(jobIds);
                        })
                        .catch(err => console.error('Error fetching jobs', err));
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

        let currentPageTable1 = 1;
        let perPageTable1 = document.getElementById("page-size-table1").value;
        let searchTable1 = "";
        let sortByTable1 = 'buy_date';
        let sortDirTable1 = 'desc';
        let statusDescriptionValues = [];
        let typeMotorValues = [];
        let serviceIdValues = [];
        let tahunValues = [];
        let bulanValues = [];

        function loadTable1(currentPageTable1) {
            let statusDescriptionValues = Array.from(
                document.querySelectorAll('input[name="status_description"]:checked')
            ).map(c => c.value);
            let typeMotorValues = Array.from(
                document.querySelectorAll('input[name="type_motor"]:checked')
            ).map(c => c.value);
            let serviceIdValues = Array.from(
                document.querySelectorAll('input[name="service_id"]:checked')
            ).map(c => c.value);
            let tahunValues = Array.from(
                document.querySelectorAll('input[name="tahun"]:checked')
            ).map(c => c.value);
            let bulanValues = Array.from(
                document.querySelectorAll('input[name="bulan"]:checked')
            ).map(c => c.value);

            // bikin parameter query
            let params = new URLSearchParams({
                page: currentPageTable1,
                per_page: perPageTable1,
                q: searchTable1,
                sort_by: sortByTable1,
                sort_dir: sortDirTable1,
            });

            // tambahin filter status_description[]
            statusDescriptionValues.forEach(v => params.append("status_description[]", v));
            // tambahin filter type_motor[]
            typeMotorValues.forEach(v => params.append("type_motor[]", v));
            // tambahin filter service_id[]
            serviceIdValues.forEach(v => params.append("service_id[]", v));
            // tambahin filter tahun[]
            tahunValues.forEach(v => params.append("tahun[]", v));
            // tambahin filter bulan[]
            bulanValues.forEach(v => params.append("bulan[]", v));
            let url = "{{ app()->environment('local') ? route('datatable.cek-kpb') : secure_url('datatable/cek-kpb') }}";
            fetch(url + "?" + params.toString()) // route ke controller serverside
                .then(res => res.json())
                .then(res => {
                    let tbody = document.getElementById("tbody1");
                    tbody.innerHTML = ""; // kosongkan dulu
                    if (res.data.length === 0) {
                        // 👇 Empty state row
                        let emptyRow = `
                            <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                <td colspan="8" class="hidden md:table-cell py-6 text-center text-sm text-gray-500 dark:text-gray-400">
                                    <div class="animate-slide-down p-5 min-h-100 flex flex-col justify-center items-center text-center">
                                        <svg class="w-48 mx-auto mb-4 text-white" width="178" height="90" viewBox="0 0 178 90" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                            <g filter="url(#filter1)">
                                                <rect x="12" y="6" width="154" height="40" rx="8" fill="currentColor" class="fill-white dark:fill-neutral-800" shape-rendering="crispEdges"></rect>
                                                <rect x="12.5" y="6.5" width="153" height="39" rx="7.5" stroke="currentColor" class="stroke-gray-100 dark:stroke-neutral-700/60" shape-rendering="crispEdges"></rect>
                                                <rect x="20" y="14" width="24" height="24" rx="4" fill="currentColor" class="fill-gray-200 dark:fill-neutral-700 "></rect>
                                                <rect x="52" y="17" width="60" height="6" rx="3" fill="currentColor" class="fill-gray-200 dark:fill-neutral-700"></rect>
                                                <rect x="52" y="29" width="106" height="6" rx="3" fill="currentColor" class="fill-gray-200 dark:fill-neutral-700"></rect>
                                            </g>
                                            <defs>
                                                <filter id="filter1" x="0" y="0" width="178" height="64" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
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
                                                No Data
                                            </p>
                                            <p class="mb-5 text-sm text-gray-500 dark:text-neutral-500">
                                                No data here yet. We will notify you when there's an update.
                                            </p>
                                        </div>
                                        <a class="py-2 px-3 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-pink-600 text-white hover:bg-pink-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:ring-2 focus:ring-pink-500">
                                            <svg class="hidden sm:block shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M5 12h14"></path>
                                                <path d="M12 5v14"></path>
                                            </svg>Add data
                                        </a>
                                    </div>
                                </td>
                                <td colspan="5" class="table-cell md:hidden py-6 text-center text-sm text-gray-500 dark:text-gray-400">
                                    Data tidak ditemukan
                                </td>
                            </tr>`;
                        document.getElementById("pagination1-current-page").innerText = 0;
                        document.getElementById("pagination1-total-page").innerText = 0;
                        document.getElementById("pagination1-total-data").innerText = 0;
                        tbody.insertAdjacentHTML("beforeend", emptyRow);
                    } else {
                        res.data.forEach(item => {
                            let row = `
                            <tr class="animate-slide-down hover:bg-gray-100 dark:hover:bg-neutral-700">
                                <td class="size-px whitespace-nowrap">
                                    <div class="ps-6 py-3">
                                        <label for="hs-at-with-checkboxes-1" class="flex">
                                        <input type="checkbox" class="shrink-0 border-gray-300 rounded-sm text-blue-600 focus:ring-blue-500 checked:border-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-600 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-800" id="hs-at-with-checkboxes-1">
                                        <span class="sr-only">Checkbox</span>
                                        </label>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="flex items-center gap-x-3 py-3 px-5">
                                        <span class="relative size-9 shrink-0 bg-gray-100 rounded-full dark:bg-neutral-700">
                                            <img class="absolute inset-0 size-full object-cover rounded-full px-2 py-2" src="https://images.seeklogo.com/logo-png/31/2/honda-logo-png_seeklogo-310689.png" alt="Post Image">
                                        </span>
                                        <div class="grow">
                                            <a class="font-medium text-gray-800 underline-offset-2 hover:underline hover:decoration-2 hover:text-indigo-700 focus:outline-hidden focus:underline focus:decoration-2 focus:text-indigo-700 dark:text-neutral-200 dark:hover:text-indigo-400 dark:focus:text-indigo-400" href="#">
                                            ${item.file_name}
                                            </a>
                                            <ul class="flex flex-wrap items-center whitespace-nowrap gap-1.5">
                                            <li class="inline-flex items-center relative text-xs text-gray-500 pe-2 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:size-[3px] after:bg-gray-400 after:rounded-full after:-translate-y-1/2 dark:text-neutral-500 dark:after:bg-neutral-600">
                                                <p class="text-xs text-gray-500 dark:text-neutral-400">
                                                User: ${item.user?.name}
                                                </p>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 px-5">
                                        <span class="text-sm text-gray-800 dark:text-white">
                                            ${item.service_id}
                                        </span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="flex items-center gap-x-3 py-3">
                                        <div class="grow">
                                            <a class="font-medium text-gray-800 underline-offset-2 hover:underline hover:decoration-2 hover:text-indigo-700 focus:outline-hidden focus:underline focus:decoration-2 focus:text-indigo-700 dark:text-neutral-200 dark:hover:text-indigo-400 dark:focus:text-indigo-400" href="#">
                                            ${item.engine}
                                            </a>
                                            <ul class="flex flex-wrap items-center whitespace-nowrap gap-1.5">
                                            <li class="inline-flex items-center relative text-xs text-gray-500 pe-2 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:size-[3px] after:bg-gray-400 after:rounded-full after:-translate-y-1/2 dark:text-neutral-500 dark:after:bg-neutral-600">
                                                <p class="text-xs text-gray-500 dark:text-neutral-400">
                                                ${item.motor?.type_motor}
                                                </p>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 px-5">
                                        <div class="flex flex-col">
                                            <div class="flex items-center gap-1.5">
                                                <span class="shrink-0 size-2 inline-block rounded-full"></span>
                                                <span class="block text-sm text-gray-800 dark:text-neutral-200">
                                                ${item.notes[0]?.message}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>`;
                            tbody.insertAdjacentHTML("beforeend", row);
                        });
                        console.log(res);
                        document.getElementById("pagination1-current-page").innerText = res.page;
                        document.getElementById("pagination1-total-page").innerText = res.total_pages;
                        document.getElementById("pagination1-total-data").innerText = res.total_filtered;
                        if (res.page === 1) {
                            document.getElementById("prevBtnTable1").setAttribute("disabled", "true");
                        } else {
                            document.getElementById("prevBtnTable1").removeAttribute("disabled");
                        }

                        if (res.page === res.total_pages) {
                            document.getElementById("nextBtnTable1").setAttribute("disabled", "true");
                        } else {
                            document.getElementById("nextBtnTable1").removeAttribute("disabled");
                        }
                    }
                });
        }

        function setSortTable1(column, order) {
            sortByTable1 = column;
            sortDirTable1 = order;
            let tbody = document.getElementById("tbody1");
            tbody.innerHTML = showLoadingTable(8, "Loading...");
            loadTable1(1); // refresh dari page 1
        }
        document.getElementById("prevBtnTable1").addEventListener("click", () => {
            if (currentPageTable1 > 1) {
                let tbody = document.getElementById("tbody1");
                tbody.innerHTML = showLoadingTable(8, "Loading...");
                loadTable1(currentPageTable1 -= 1);
            }
        });
        document.getElementById("nextBtnTable1").addEventListener("click", () => {
            let tbody = document.getElementById("tbody1");
            tbody.innerHTML = showLoadingTable(8, "Loading...");
            loadTable1(currentPageTable1 += 1);
        });
        document.getElementById("search-table1").addEventListener("change", (e) => {
            let tbody = document.getElementById("tbody1");
            tbody.innerHTML = showLoadingTable(8, "Loading...");
            searchTable1 = e.target.value;
            loadTable1(1);
        });
        document.getElementById("page-size-table1").addEventListener("change", function() {
            let tbody = document.getElementById("tbody1");
            tbody.innerHTML = showLoadingTable(8, "Loading...");
            perPageTable1 = this.value;
            loadTable1(1);
        });

        ['service_id', 'status_description', 'type_motor', 'tahun', 'bulan'].forEach(name => {
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
                    loadTable1(1);
                });
            });
        });

        loadTable1();
    </script>
@endsection
