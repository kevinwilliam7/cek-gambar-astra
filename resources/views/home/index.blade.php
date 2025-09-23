@extends('layouts.app')
@section('title', 'Ahass | Astra')
@section('main-content')
    <div class="relative px-2 sm:px-5 py-5 before:absolute before:top-0 before:start-0 before:-z-1 before:w-full before:h-112.5 before:bg-slate-900 dark:before:bg-slate-950">
        <div class="max-w-6xl mx-auto flex flex-col gap-y-5 pt-4 md:pt-16">
            <!-- Header -->
            <div class="mb-4 flex flex-col justify-center gap-y-3 text-center">
                <h1 class="text-2xl md:text-3xl font-semibold text-white">
                    Astra Honda Authorized Service Station
                </h1>
                <p class="text-sm text-white/70">
                    Bengkel resmi sepeda motor Honda
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
                            <div class="flex bg-gray-100 hover:bg-gray-200 rounded-lg transition p-1 dark:bg-neutral-700 dark:hover:bg-neutral-600">
                                <nav class="flex gap-x-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                                <button type="button" class="hs-tab-active:bg-white hs-tab-active:text-gray-700 hs-tab-active:dark:bg-neutral-800 hs-tab-active:dark:text-neutral-400 dark:hs-tab-active:bg-gray-800 py-3 px-4 inline-flex items-center gap-x-2 bg-transparent text-sm text-gray-500 hover:text-gray-700 focus:outline-hidden focus:text-gray-700 font-medium rounded-lg hover:hover:text-blue-600 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-white dark:focus:text-white active" id="segment-item-1" aria-selected="true" data-hs-tab="#segment-1" aria-controls="segment-1" role="tab">
                                    Astra Honda Authorized Service Station
                                </button>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- End Grid -->
                </div>
                <!-- End Body -->

                <div id="segment-1" role="tabpanel" aria-labelledby="segment-item-1">
                    <!-- Table Content -->
                    <div class="overflow-x-auto [&amp;::-webkit-scrollbar]:h-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-100 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500">
                        <div class="min-w-full inline-block align-middle">
                            <!-- Table -->
                            <table id="table1"
                                class="min-w-full divide-y divide-gray-200 border-t border-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                                <thead id="thead1" class="bg-gray-50 dark:bg-neutral-700/50">
                                    @php($table1_headers = ['Nama Ahass', 'Kode Ahass', 'Created At', 'Action'])
                                    <tr>
                                        @foreach ($table1_headers as $table1_header)
                                            <th scope="col" class="min-w-62.5 {{ $table1_header === 'Action' ? 'text-right justify-end' : 'text-left' }}">
                                                <!-- Sort Dropdown -->
                                                <div class="hs-dropdown relative inline-flex w-full cursor-pointer">
                                                    <button id="hs-pro-ptpn" type="button"
                                                        class="px-5 py-2.5 text-start w-full flex items-center gap-x-1 text-sm text-nowrap whitespace-nowrap font-normal text-gray-500 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-500 dark:focus:bg-neutral-700 {{ $table1_header === 'Action' ? 'justify-end text-right' : 'text-left w-full text-start' }}"
                                                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                                        {{ $table1_header }}
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
                                    <tr><td colspan="4" class="py-6 text-center text-sm text-gray-500 dark:text-gray-400">Loading...</td></tr>
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
        function loadTable1(currentPageTable1) {
            fetch("{{ route('datatable.ahass') }}?"+ new URLSearchParams({
                page: currentPageTable1,
                per_page: perPageTable1,
                q: searchTable1,
            })) // route ke controller serverside
                .then(res => res.json())
                .then(res => {
                    let tbody = document.getElementById("tbody1");
                    tbody.innerHTML = ""; // kosongkan dulu
                    if (res.data.length === 0) {
                        // 👇 Empty state row
                        let emptyRow = `
                            <tr class="hover:bg-gray-100 dark:hover:bg-neutral-700">
                                <td colspan="4" class="py-6 text-center text-sm text-gray-500 dark:text-gray-400">
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
                                    <a class="py-3 px-5 block text-sm font-medium text-gray-800 hover:text-indigo-600 dark:text-white"
                                        href="/projects/${item.id}">
                                        <div class="flex items-center gap-x-4">
                                            <svg class="shrink-0 size-5" width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 1C10 1 5 1 0 1C0 7 6 13 13 15L14 15C14 12 16 4 17 2C16.5 2 16 2 16 1Z" fill="#A49DFF"></path>
                                                <path d="M17 2C17 2 25 8 29 16C30 11 31 6 32 1C27 1 22 1 17 2Z" fill="#28289A"></path>
                                            </svg>
                                            <div class="grow ps-4 border-s border-gray-200 dark:border-neutral-700">
                                                ${item.nama_ahass}
                                            </div>
                                        </div>
                                    </a>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 px-5">
                                        <span class="text-sm text-gray-800 dark:text-white">
                                            ${item.kode_ahass}
                                        </span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="py-3 px-5">
                                        <span class="text-sm text-gray-800 dark:text-white">
                                            ${item.created_at}
                                        </span>
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap text-right">
                                    <div class="flex gap-x-2 justify-end px-5">
                                        <button id="btnEdit${item.id}" type="button" class="py-2 px-2.5 inline-flex items-center gap-x-1.5 text-xs font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-hs-overlay="#hs-pro-dminvm">
                                            <svg class="text-orange-500 shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
                                            <path d="M12 20h9"/>
                                            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4 12.5-12.5z"/>
                                            </svg>
                                        </button>
                                        <button id="btnDelete${item.id}" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-danger-alert" data-hs-overlay="#hs-danger-alert" type="button" class="size-8.5 inline-flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                            <svg class="text-red-500 shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"></path>
                                            <path d="M10 11v6"></path>
                                            <path d="M14 11v6"></path>
                                            <path d="M9 6V4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>`;
                            tbody.insertAdjacentHTML("beforeend", row);
                        });
                        document.getElementById("pagination1-current-page").innerText = res.page;
                        document.getElementById("pagination1-total-page").innerText = res.total_pages;
                        document.getElementById("pagination1-total-data").innerText = res.total_filtered;
                    }
                });
        }
        document.getElementById("prevBtnTable1").addEventListener("click", () => {
            if (currentPageTable1 > 1) loadTable1(currentPageTable1 -= 1);
        });
        document.getElementById("nextBtnTable1").addEventListener("click", () => {
            loadTable1(currentPageTable1 += 1);
        });
        document.getElementById("search-table1").addEventListener("change", (e) => {
            searchTable1 = e.target.value;
            loadTable1(1);
        });
        document.getElementById("page-size-table1").addEventListener("change", function () {
            perPageTable1 = this.value;
            loadTable1(1);
        });
        loadTable1();
    </script>

@endsection
