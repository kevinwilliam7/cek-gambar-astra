@extends('layouts.app')
@section('title', 'Ahass | Astra')
@section('main-content')
    <div class="relative px-2 sm:px-5 py-5 before:absolute before:top-0 before:start-0 before:-z-1 before:w-full before:h-112.5 before:bg-slate-900 dark:before:bg-slate-950">
        <div class="max-w-max mx-auto flex flex-col gap-y-5 pt-4 md:pt-16">
            <!-- Header -->
            <div class="mb-4 flex flex-col justify-center gap-y-3 text-center">
                <h1 class="text-2xl md:text-3xl font-semibold text-white">
                    Rekap Kupon Perawatan Berkala (KPB)
                </h1>
                <p class="text-sm text-white/70">
                    History / Rekapitulasi Klaim KPB
                </p>
            </div>
            <!-- End Header -->

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
                                <svg class="shrink-0 size-4 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                            </div>
                            <div class="flex items-center gap-x-2">
                                <div class="grow relative">
                                    <input id="search-table1" type="text" class="border-1 py-1.5 sm:py-2 ps-10 pe-8 block w-full rounded-lg sm:text-sm border-gray-300 dark:border-gray-600
                                    bg-white dark:bg-neutral-700
                                    text-gray-900 dark:text-gray-100
                                    focus:outline-none
                                    focus:ring-2 focus:ring-indigo-500 focus:ring-offset-0
                                    dark:focus:ring-indigo-400 dark:focus:ring-offset-gray-900
                                    transition-shadow duration-150" placeholder="Search data" >
                                    <div class="absolute inset-y-0 end-0 flex items-center z-20 pe-2">
                                        <div class="flex items-center">
                                            <button type="button" class="hidden flex shrink-0 justify-center items-center size-6 rounded-full text-gray-500 hover:text-indigo-600 focus:outline-hidden focus:text-indigo-600 dark:text-neutral-500 dark:hover:text-indigo-500 dark:focus:text-indigo-500" aria-label="Close">
                                                <span class="sr-only">Close</span>
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>
                                            </button>
                                            <button type="button" class="inline-flex shrink-0 justify-center items-center size-6 text-sm font-medium rounded-full text-white bg-indigo-700 hover:bg-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-indigo-600">
                                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
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
                            <select id="page-size-table1" data-hs-select='{
                                "placeholder": "Select option...",
                                "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-2 ps-3 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-stone-200 rounded-lg text-start text-sm focus:outline-hidden focus:ring-2 focus:ring-green-600 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-hidden dark:focus:ring-1 dark:focus:ring-neutral-600",
                                "dropdownClasses": "mt-2 z-50 w-16 max-h-72 p-1 space-y-0.5 overflow-hidden overflow-y-auto bg-white rounded-xl shadow-xl [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-stone-100 [&::-webkit-scrollbar-thumb]:bg-stone-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900",
                                "optionClasses": "hs-selected:bg-stone-100 dark:hs-selected:bg-neutral-800 py-1.5 px-2 w-full text-[13px] text-stone-800 cursor-pointer hover:bg-stone-100 rounded-lg focus:outline-hidden focus:bg-stone-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700",
                                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-stone-800 dark:text-neutral-200\" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
                                }' class="hidden">
                                <option value="10" selected>10</option>
                                <option value="15">15</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                            </select>
                            <button type="button" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-large-modal" data-hs-overlay="#hs-large-modal"
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
                                    <button id="hs-pro-shsfbctd" type="button" class="hs-dropdown-toggle py-1 px-3 flex items-center gap-x-1 border border-gray-200 text-sm text-start text-gray-800 rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:rounded-full hover dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    Service ID
                                    <span id="indicator-service_id" class="hidden relative flex h-2 w-2 ms-2">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-indigo-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-2 w-2 bg-indigo-600"></span>
                                    </span>
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                                    </button>
                                    <!-- End Category Button -->

                                    <!-- Dropdown Menu -->
                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-20 max-w-xs bg-white rounded-xl shadow-xl before:absolute before:-top-4 before:start-0 before:w-full before:h-5 dark:bg-neutral-900" role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-shsfbctd">
                                        <div class="p-4 sm:p-6">
                                            <!-- List -->
                                            <div class="space-y-0.5">
                                                @foreach($data['service_id'] as $service_id)
                                                    @if($service_id != 4)
                                                        <!-- Checkbox langsung tampil -->
                                                        <div class="flex items-center">
                                                            <label class="p-2 group w-full inline-flex items-center cursor-pointer text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-800">
                                                                <input type="checkbox" name="service_id"
                                                                    class="shrink-0 size-4.5 border-gray-300 rounded-sm text-indigo-600 checked:border-indigo-600 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-500 dark:checked:bg-indigo-500 dark:checked:border-indigo-500 dark:focus:ring-offset-gray-800" 
                                                                    value="{{ $service_id }}">
                                                                <span class="ms-2 text-gray-800 dark:text-neutral-400">KPB {{ $service_id }}</span>
                                                                <span class="ms-auto text-xs text-gray-500 dark:text-neutral-500">(∞)</span>
                                                            </label>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <!-- End List -->

                                            <!-- Collapse -->
                                            <div id="hs-pro-shfcc-heading" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-pro-shfcc">
                                                <div class="space-y-0.5">
                                                    @foreach($data['service_id'] as $service_id)
                                                        @if($service_id == 4)
                                                            <!-- Checkbox dalam collapse -->
                                                            <div class="flex items-center">
                                                                <label class="p-2 group w-full inline-flex items-center cursor-pointer text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-800">
                                                                    <input type="checkbox" name="service_id"
                                                                        class="shrink-0 size-4.5 border-gray-300 rounded-sm text-indigo-600 checked:border-indigo-600 focus:ring-indigo-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-500 dark:checked:bg-indigo-500 dark:checked:border-indigo-500 dark:focus:ring-offset-gray-800" 
                                                                        value="{{ $service_id }}">
                                                                    <span class="ms-2 text-gray-800 dark:text-neutral-400">KPB {{ $service_id }}</span>
                                                                    <span class="ms-auto text-xs text-gray-500 dark:text-neutral-500">(∞)</span>
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
                                                    id="hs-pro-shfcc"
                                                    aria-expanded="false"
                                                    aria-controls="hs-pro-shfcc-heading"
                                                    data-hs-collapse="#hs-pro-shfcc-heading">
                                                    <span class="hs-collapse-open:hidden">Show more</span>
                                                    <span class="hs-collapse-open:block hidden">Show less</span>
                                                    <svg class="hs-collapse-open:rotate-180 shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
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
                                    <button id="hs-pro-shsszd" type="button" class="hs-dropdown-toggle py-1 px-3 flex items-center gap-x-1 border border-gray-200 text-sm text-start text-gray-800 rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    Type Motor
                                    <span id="indicator-type_motor" class="hidden relative flex h-2 w-2 ms-2">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-2 w-2 bg-green-600"></span>
                                    </span>
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                                    </button>
                                    <!-- End Size Button -->

                                    <!-- Dropdown Menu -->
                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-20 w-full max-w-xs bg-white rounded-xl shadow-xl before:absolute before:-top-4 before:start-0 before:w-full before:h-5 dark:bg-neutral-900" role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-shsszd">
                                    <div class="p-4 sm:p-6">
                                        <!-- Grid -->
                                        <div class="mx-px grid grid-cols-3 gap-2">
                                            @foreach($data['motor'] as $keyMotor => $motor)
                                            <!-- Checkbox -->
                                            <label for="hs-pro-{{ $motor['type_motor'] }}" class="p-2.5 group relative flex justify-center items-center gap-x-3 text-center text-xs bg-white text-gray-800 border border-gray-200 cursor-pointer rounded-lg dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200
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
                                                <input type="checkbox" id="hs-pro-{{ $motor['type_motor'] }}" class="hidden bg-transparent border-gray-200 text-indigo-600 focus:ring-white focus:ring-offset-0 dark:text-indigo-500 dark:border-neutral-700 dark:focus:ring-neutral-900" name="type_motor" value="{{ $motor['type_motor'] }}">
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

                                <!-- Dropdown Status Deskripsi -->
                                <div class="hs-dropdown [--auto-close:inside] inline-block">
                                    <!-- Status Deskripsi Button -->
                                    <button id="hs-pro-shscld" type="button" class="hs-dropdown-toggle py-1 px-3 flex items-center gap-x-1 border border-gray-200 text-sm text-start text-gray-800 rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    Status Deskripsi
                                    <span id="indicator-status_description" class="hidden relative flex h-2 w-2 ms-2">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-2 w-2 bg-red-600"></span>
                                    </span>
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                                    </button>
                                    <!-- End Status Deskripsi Button -->

                                    <!-- Dropdown Menu -->
                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-20 w-full max-w-xs bg-white rounded-xl shadow-xl before:absolute before:-top-4 before:start-0 before:w-full before:h-5 dark:bg-neutral-900" role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-shscld">
                                    <div class="p-4 sm:p-6">
                                        <!-- Grid -->
                                        <div class="space-y-0.5">
                                            @foreach($data['status_description'] as $status_description)
                                                <!-- Radio -->
                                                <label for="hs-pro-shflocss-{{ $status_description }}" class="p-2 group w-full inline-flex items-center cursor-pointer text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-800">
                                                    <input type="checkbox" class="shrink-0 size-4.5 bg-black border-black rounded-sm focus:ring-0 focus:ring-offset-0 checked:text-black disabled:opacity-50 disabled:pointer-events-none" id="hs-pro-shflocss-{{ $status_description }}" name="status_description" value="{{ $status_description }}">
                                                    <span class="ms-2 text-gray-800 dark:text-neutral-400">{{$status_description}}</span>
                                                    <span class="ms-auto text-xs text-gray-500 dark:text-neutral-500">(∞)</span>
                                                </label>
                                                <!-- End Radio -->
                                            @endforeach
                                        </div>
                                        <!-- End Grid -->
                                    </div>
                                    </div>
                                    <!-- End Dropdown Menu -->
                                </div>
                                <!-- End Dropdown Status Deskripsi -->

                                <!-- Dropdown Tahun -->
                                <div class="hs-dropdown [--auto-close:inside] inline-block">
                                    <!-- Tahun Button -->
                                    <button id="hs-pro-shscld" type="button" class="hs-dropdown-toggle py-1 px-3 flex items-center gap-x-1 border border-gray-200 text-sm text-start text-gray-800 rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    Rekap Tahun
                                    <span id="indicator-tahun" class="hidden relative flex h-2 w-2 ms-2">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-2 w-2 bg-yellow-600"></span>
                                    </span>
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                                    </button>
                                    <!-- End Tahun Button -->

                                    <!-- Dropdown Menu -->
                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-20 w-full max-w-xs bg-white rounded-xl shadow-xl before:absolute before:-top-4 before:start-0 before:w-full before:h-5 dark:bg-neutral-900" role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-shscld">
                                    <div class="p-4 sm:p-6">
                                        <!-- Grid -->
                                        <div class="space-y-0.5">
                                            @foreach($data['tahun'] as $tahun)
                                                <!-- Radio -->
                                                <label for="hs-pro-shflocss-{{ $tahun }}" class="p-2 group w-full inline-flex items-center cursor-pointer text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-800">
                                                    <input type="checkbox" class="shrink-0 size-4.5 bg-black border-black rounded-sm focus:ring-0 focus:ring-offset-0 checked:text-black disabled:opacity-50 disabled:pointer-events-none" id="hs-pro-shflocss-{{ $tahun }}" name="tahun" value="{{ $tahun }}">
                                                    <span class="ms-2 text-gray-800 dark:text-neutral-400">{{$tahun}}</span>
                                                    <span class="ms-auto text-xs text-gray-500 dark:text-neutral-500">(∞)</span>
                                                </label>
                                                <!-- End Radio -->
                                            @endforeach
                                        </div>
                                        <!-- End Grid -->
                                    </div>
                                    </div>
                                    <!-- End Dropdown Menu -->
                                </div>
                                <!-- End Dropdown Tahun-->

                                <!-- Dropdown Bulan -->
                                <div class="hs-dropdown [--auto-close:inside] inline-block">
                                    <!-- Bulan Button -->
                                    <button id="hs-pro-shscld" type="button" class="hs-dropdown-toggle py-1 px-3 flex items-center gap-x-1 border border-gray-200 text-sm text-start text-gray-800 rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                    Rekap Bulan
                                    <span id="indicator-bulan" class="hidden relative flex h-2 w-2 ms-2">
                                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                                        <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-600"></span>
                                    </span>
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                                    </button>
                                    <!-- End Bulan Button -->

                                    <!-- Dropdown Menu -->
                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-20 w-full max-w-xs bg-white rounded-xl shadow-xl before:absolute before:-top-4 before:start-0 before:w-full before:h-5 dark:bg-neutral-900" role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-shscld">
                                    <div class="p-4 sm:p-6">
                                        <!-- Grid -->
                                        <div class="space-y-0.5">
                                            @foreach($data['bulan'] as $bulan)
                                                <!-- Radio -->
                                                <label for="hs-pro-shflocss-{{ $bulan['value'] }}" class="p-2 group w-full inline-flex items-center cursor-pointer text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-800">
                                                    <input type="checkbox" class="shrink-0 size-4.5 bg-black border-black rounded-sm focus:ring-0 focus:ring-offset-0 checked:text-black disabled:opacity-50 disabled:pointer-events-none" id="hs-pro-shflocss-{{ $bulan['value'] }}" name="bulan" value="{{ $bulan['value'] }}">
                                                    <span class="ms-2 text-gray-800 dark:text-neutral-400">{{$bulan['label']}}</span>
                                                    <span class="ms-auto text-xs text-gray-500 dark:text-neutral-500">(∞)</span>
                                                </label>
                                                <!-- End Radio -->
                                            @endforeach
                                        </div>
                                        <!-- End Grid -->
                                    </div>
                                    </div>
                                    <!-- End Dropdown Menu -->
                                </div>
                                <!-- End Dropdown Tahun-->
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
                <div class="overflow-x-auto [&amp;::-webkit-scrollbar]:h-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-100 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500">
                    <div class="min-w-full inline-block align-middle">
                        <!-- Table -->
                        <table id="table1"
                            class="min-w-full divide-y divide-gray-200 border-t border-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                            <thead id="thead1" class="bg-gray-50 dark:bg-neutral-700/50">
                                @php($table1_headers = [['', ''], ['Nama Ahass', 'ahass_name'], ['Service ID', 'service_id'], ['Nomor Mesin', 'engine'], ['Tanggal Beli', 'buy_date'], ['Tanggal Service', 'service_date'], ['Jarak Tempuh', 'km'], ['Status Description', 'status_description']])
                                <tr>
                                    @foreach ($table1_headers as $table1_header)
                                        <th scope="col" class="{{ $table1_header[0] === '' ? '' : 'min-w-52' }} {{ $table1_header[0] === 'Action' ? 'text-right justify-end' : 'text-left' }}">
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
                                                        <button type="button" onclick="setSortTable1('{{ $table1_header[1] }}', 'asc')"
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
                                                        <button type="button" onclick="setSortTable1('{{ $table1_header[1] }}', 'desc')"
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
    @include('home.partial.modal_cu')
    @include('home.partial.modal_delete')
@endsection
@section('js')
    <script>
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
            fetch("{{ route('datatable.rekap-kpb') }}?"+ params.toString())// route ke controller serverside
                .then(res => res.json())
                .then(res => {
                    let tbody = document.getElementById("tbody1");
                    tbody.innerHTML = ""; // kosongkan dulu
                    if (res.data.length === 0) {
                        // 👇 Empty state row
                        let emptyRow = `
                            <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                <td colspan="8" class="py-6 text-center text-sm text-gray-500 dark:text-gray-400">
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
                            <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
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
                                            ${item.ahass_name}
                                            </a>
                                            <ul class="flex flex-wrap items-center whitespace-nowrap gap-1.5">
                                            <li class="inline-flex items-center relative text-xs text-gray-500 pe-2 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:size-[3px] after:bg-gray-400 after:rounded-full after:-translate-y-1/2 dark:text-neutral-500 dark:after:bg-neutral-600">
                                                <p class="text-xs text-gray-500 dark:text-neutral-400">
                                                Kode Ahass: ${item.ahass_code}
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
                                                ${item.frame}
                                                </p>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="flex items-center gap-x-3 py-3">
                                        <div class="grow">
                                            <a class="font-medium text-gray-800 underline-offset-2 hover:underline hover:decoration-2 hover:text-indigo-700 focus:outline-hidden focus:underline focus:decoration-2 focus:text-indigo-700 dark:text-neutral-200 dark:hover:text-indigo-400 dark:focus:text-indigo-400" href="#">
                                            ${item.buy_date}
                                            </a>
                                            <ul class="flex flex-wrap items-center whitespace-nowrap gap-1.5">
                                            <li class="inline-flex items-center relative text-xs text-gray-500 pe-2 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:size-[3px] after:bg-gray-400 after:rounded-full after:-translate-y-1/2 dark:text-neutral-500 dark:after:bg-neutral-600">
                                                <p class="text-xs text-gray-500 dark:text-neutral-400">
                                                ${formatDate(item.buy_date)}
                                                </p>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="flex items-center gap-x-3 py-3">
                                        <div class="grow">
                                            <a class="font-medium text-gray-800 underline-offset-2 hover:underline hover:decoration-2 hover:text-indigo-700 focus:outline-hidden focus:underline focus:decoration-2 focus:text-indigo-700 dark:text-neutral-200 dark:hover:text-indigo-400 dark:focus:text-indigo-400" href="#">
                                            ${item.service_date}
                                            </a>
                                            <ul class="flex flex-wrap items-center whitespace-nowrap gap-1.5">
                                            <li class="inline-flex items-center relative text-xs text-gray-500 pe-2 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:size-[3px] after:bg-gray-400 after:rounded-full after:-translate-y-1/2 dark:text-neutral-500 dark:after:bg-neutral-600">
                                                <p class="text-xs text-gray-500 dark:text-neutral-400">
                                                ${formatDate(item.service_date)}
                                                </p>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 px-5">
                                        <span class="text-sm text-gray-800 dark:text-white">
                                            ${item.km} <small>KM</small>
                                        </span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 px-5">
                                        <div class="flex flex-col">
                                            <div class="flex items-center gap-1.5">
                                                <span class="shrink-0 size-2 inline-block ${item.status_description === 'Tidak Dibayar' ? 'bg-red-500' : 'bg-violet-500'} rounded-full"></span>
                                                <span class="block text-sm text-gray-800 dark:text-neutral-200">
                                                ${item.status_description}
                                                </span>
                                            </div>
                                            ${item.status_description === 'Tidak Dibayar'
                                                ? `<span class="block text-sm text-gray-800 dark:text-neutral-200"> - ${item.unpaid_reason}</span>`
                                                : ''
                                            }
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
                        if(res.page === 1){
                            document.getElementById("prevBtnTable1").setAttribute("disabled", "true");
                        } else {
                            document.getElementById("prevBtnTable1").removeAttribute("disabled");
                        }

                        if(res.page === res.total_pages){
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
        document.getElementById("search-table1").addEventListener("input", (e) => {
            let tbody = document.getElementById("tbody1");
            tbody.innerHTML = showLoadingTable(8, "Loading...");
            searchTable1 = e.target.value;
            loadTable1(1);
        });
        document.getElementById("page-size-table1").addEventListener("change", function () {
            let tbody = document.getElementById("tbody1");
            tbody.innerHTML = showLoadingTable(8, "Loading...");
            perPageTable1 = this.value;
            loadTable1(1);
        });

        ['service_id', 'status_description', 'type_motor', 'tahun', 'bulan'].forEach(name => {
            document.querySelectorAll(`input[name="${name}"]`).forEach(cb => {
                cb.addEventListener('change', () => {
                    let checked = document.querySelectorAll(`input[name="${name}"]:checked`).length > 0;
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

        document.getElementById('clear-filters').addEventListener('click', function () {
            // Uncheck semua checkbox
            document.querySelectorAll('input[type="checkbox"][name="service_id"], input[type="checkbox"][name="type_motor"], input[type="checkbox"][name="status_description"], input[type="checkbox"][name="tahun"], input[type="checkbox"][name="bulan"]').forEach(cb => {
                cb.checked = false;
            });

            // Sembunyikan semua indicator
            ['service_id', 'type_motor', 'status_description', 'tahun', 'bulan'].forEach(field => {
                document.getElementById(`indicator-${field}`).classList.add('hidden');
            });

            let tbody = document.getElementById("tbody1");
            tbody.innerHTML = showLoadingTable(8, "Loading...");
            loadTable1(1);
        });

        loadTable1();
    </script>

@endsection
