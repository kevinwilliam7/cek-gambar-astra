@extends('layouts.app')
@section('title', 'Motor Honda | Astra')
@section('main-content')
    <div class="relative px-2 sm:px-5">
        <div class="max-w-7xl mx-auto flex flex-col gap-y-5 pt-4 md:pt-16">
            <!-- Filter Group -->
            <div class="py-4 grid lg:grid-cols-2 gap-y-2 lg:gap-y-0 lg:gap-x-5 border-y border-gray-200 dark:border-neutral-700">
                <div>
                    <!-- Search Input -->
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                            <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-400" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                        </div>
                        <input id="search-table1" type="text" class="border-1 py-1.5 sm:py-2 ps-10 pe-8 block w-full rounded-lg sm:text-sm border-gray-300 dark:border-gray-600bg-white dark:bg-neutral-700text-gray-900 dark:text-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-0 dark:focus:ring-indigo-400 dark:focus:ring-offset-gray-900 transition-shadow duration-150" placeholder="Search data" >
                        <div class="hidden absolute inset-y-0 end-0 flex items-center z-20 pe-1">
                            <button type="button" class="inline-flex shrink-0 justify-center items-center size-6 rounded-full text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500" aria-label="Close">
                            <span class="sr-only">Close</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6"/><path d="m9 9 6 6"/></svg>
                            </button>
                        </div>
                    </div>
                    <!-- End Search Input -->
                </div>
                <!-- Filter Bar -->
                <div class="flex flex-wrap  items-center gap-2">
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
                </div>
                <!-- End Filter Bar -->

            </div>
            <!-- End Filter Group -->

        </div>
        <!-- Content -->
        <div id="content" class="px-5">

        </div>
        <!-- End Content -->
        <div class="max-w-7xl mx-auto flex flex-col gap-y-5 pt-4 md:pt-16">
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
    <!-- Modal -->
<div
    x-data="{ modalOpen: false, imageSrc: '', scale: 1 }"
    x-show="modalOpen"
    x-transition
    class="fixed inset-0 bg-black/70 flex items-center justify-center z-50"
>
  <div class="relative bg-white rounded-lg shadow-lg p-4 max-w-4xl w-full flex flex-col items-center">

    <!-- Close -->
    <button
        @click="modalOpen = false; scale = 1"
        class="absolute top-2 right-2 text-gray-600 hover:text-red-500 text-xl font-bold">
        ✕
    </button>

    <!-- Image -->
    <div class="overflow-hidden">
      <img
          :src="imageSrc"
          :style="`transform: scale(${scale});`"
          class="transition-transform duration-300 max-h-[80vh] object-contain"
      />
    </div>

    <!-- Controls -->
    <div class="mt-4 flex gap-3">
      <button
          @click="if(scale > 0.4) scale -= 0.2"
          class="px-3 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">
          ➖ Zoom Out
      </button>
      <button
          @click="scale += 0.2"
          class="px-3 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">
          ➕ Zoom In
      </button>
      <button
          @click="scale = 1"
          class="px-3 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">
          🔄 Reset
      </button>
    </div>
  </div>
</div>
    @include('home.partial.modal_cu')
    @include('home.partial.modal_delete')
@endsection
@section('js')
    <script>
        let currentPageTable1 = 1;
        let searchTable1 = "";
        let sortByTable1 = 'id';
        let sortDirTable1 = 'asc';
        let typeMotorValues = [];

        function loadTable1(currentPageTable1) {

            let typeMotorValues = Array.from(
                document.querySelectorAll('input[name="type_motor"]:checked')
            ).map(c => c.value);
            // bikin parameter query
            let params = new URLSearchParams({
                page: currentPageTable1,
                per_page: 10,
                q: searchTable1,
                sort_by: sortByTable1,
                sort_dir: sortDirTable1,
            });

            // tambahin filter type_motor[]
            typeMotorValues.forEach(v => params.append("type_motor[]", v));
            fetch("{{ route('datatable.motor') }}?"+ params.toString())// route ke controller serverside
                .then(res => res.json())
                .then(res => {
                    let tbody = document.getElementById("content");
                    tbody.innerHTML = ""; // kosongkan dulu
                    if (res.data.length === 0) {
                        // 👇 Empty state row
                        let emptyRow = `
                            <div class="p-5 min-h-100 flex flex-col justify-center items-center text-center">
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
                            </div>`;
                        document.getElementById("pagination1-current-page").innerText = 0;
                        document.getElementById("pagination1-total-page").innerText = 0;
                        document.getElementById("pagination1-total-data").innerText = 0;
                        tbody.insertAdjacentHTML("beforeend", emptyRow);
                    } else {
                        res.data.forEach(item => {
                            let slides = '';
                            // Loop setiap gambar di item.images
                            if(item.images && item.images.length > 0){
                                item.images.forEach(img => {
                                    slides += `
                                    <div class="hs-carousel-slide">
                                        <!-- Card -->
                                        <div class="h-full flex flex-col">
                                            <div class="group relative">
                                            <div class="relative">
                                                <a class="block shrink-0 relative w-full h-48 md:h-64 overflow-hidden rounded-xl focus:outline-hidden">
                                                <img class="size-full absolute inset-0 object-cover object-center group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out rounded-xl" src="${img.filename}" alt="Product Image">
                                                </a>
                                            </div>

                                            <a class="after:z-1 after:absolute after:inset-0" @click="modalOpen = true; imageSrc='${img.filename}'"></a>

                                            <div class="pt-3">
                                                <div class="mt-1 flex flex-wrap items-center gap-1">
                                                <span class="font-semibold text-emerald-600 dark:text-emerald-500">
                                                    ${img.deskripsi !== null ? img.deskripsi : 'No Description'}
                                                </span>
                                                <span class="text-sm text-gray-500 dark:text-neutral-500">
                                                    ${item.kode_nosin}
                                                </span>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <!-- End Card -->
                                    </div>
                                    `;
                                });
                            } else {
                                // fallback jika tidak ada gambar
                                slides += `
                                <div class="hs-carousel-slide">
                                    <div class="h-full flex flex-col">
                                        <div class="group relative">
                                            <div class="relative">
                                                <a class="block shrink-0 relative w-full h-48 md:h-64 overflow-hidden rounded-xl focus:outline-hidden" href="#">
                                                    <img class="size-full absolute inset-0 object-cover object-center rounded-xl" src="https://via.placeholder.com/480x320" alt="No Image">
                                                </a>
                                            </div>
                                            <div class="pt-3">
                                                <h4 class="font-medium text-sm text-gray-800 dark:text-neutral-200">
                                                    ${item.deskripsi !== null ? item.deskripsi : item.kode_nosin}
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                `;
                            }

                            console.log(slides);
                            let row = `
                            <!-- You May Also Like This -->
                                <div class="py-10 w-full max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
                                <!-- Header -->
                                <div class="mb-3">
                                    <h2 class="font-medium text-xl text-gray-800 dark:text-neutral-200">
                                    ${item.kode_nosin} <small>(${item.type_motor})</small>
                                    </h2>
                                </div>
                                <!-- End Header -->
                                <!-- Slider -->
                                <div data-hs-carousel='{
                                    "loadingClasses": "opacity-0",
                                    "slidesQty": {
                                    "xs": 2,
                                    "md": 3,
                                    "lg": 4,
                                    "xl": 5
                                    },
                                    "isDraggable": true
                                }' class="relative">
                                <!-- Header -->
                                <div class="mb-2 flex flex-wrap justify-between items-center gap-3">
                                    <h2 class="font-small text-lg text-gray-800 dark:text-neutral-200">
                                    ${item.deskripsi !== null ? '<small>' + `${item.deskripsi}` + '</small><br>' : ''}
                                    ${item.kpb_kriteria && item.kpb_kriteria.length > 0 ? '<span class="text-sm text-gray-500 dark:text-neutral-500"> \n' + item.kpb_kriteria.map(k => k.kpb_type+': '+k.hari_maksimum+' Hari'+', '+k.km_maksimum+' KM').join(';<br> ') + '</span>' : ''}
                                    </h2>

                                    <!-- Nav -->
                                    <div class="flex items-center gap-x-2">
                                    <button type="button" class="hs-carousel-prev hs-carousel-disabled:opacity-50 hs-carousel-disabled:cursor-default inline-flex justify-center items-center size-8 bg-white border border-gray-100 text-gray-800 rounded-full shadow-2xs hover:bg-gray-100 focus:outline-hidden dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                        <span class="text-2xl" aria-hidden="true">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                                        </span>
                                        <span class="sr-only">Previous</span>
                                    </button>
                                    <button type="button" class="hs-carousel-next hs-carousel-disabled:opacity-50 hs-carousel-disabled:cursor-default inline-flex justify-center items-center size-8 bg-white border border-gray-100 text-gray-800 rounded-full shadow-2xs hover:bg-gray-100 focus:outline-hidden dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                        <span class="sr-only">Next</span>
                                        <span class="text-2xl" aria-hidden="true">
                                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                                        </span>
                                    </button>
                                    </div>
                                    <!-- End Nav -->
                                </div>
                                <!-- End Header -->

                                <!-- Carousel -->
                                <div class="hs-carousel w-full overflow-hidden">
                                    <div class="hs-carousel w-full">
                                    <div class="hs-carousel-body flex flex-nowrap gap-3 md:gap-5 opacity-0 transition-transform duration-700 cursor-grab hs-carousel-dragging:transition-none hs-carousel-dragging:cursor-grabbing">
                                         ${slides}

                                    </div>
                                    </div>
                                </div>
                                <!-- End Carousel -->
                                </div>
                                <!-- End Slider -->
                                </div>
                                <!-- End You May Also Like This -->
                            `;
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

                                    if (window.HSCarousel) {
                document.querySelectorAll('[data-hs-carousel]').forEach(carousel => {
                    new HSCarousel(carousel).init();
                });
            }
                    }
                });

        }
        function setSortTable1(column, order) {
            sortByTable1 = column;
            sortDirTable1 = order;
            let tbody = document.getElementById("content");
            tbody.innerHTML = showLoadingTable(8, "Loading...");
            loadTable1(1); // refresh dari page 1
        }
        document.getElementById("prevBtnTable1").addEventListener("click", () => {
            if (currentPageTable1 > 1) {
                let tbody = document.getElementById("content");
                tbody.innerHTML = showLoadingTable(8, "Loading...");
                loadTable1(currentPageTable1 -= 1);
            }
        });
        document.getElementById("nextBtnTable1").addEventListener("click", () => {
            let tbody = document.getElementById("content");
            tbody.innerHTML = showLoadingTable(8, "Loading...");
            loadTable1(currentPageTable1 += 1);
        });
        document.getElementById("search-table1").addEventListener("change", (e) => {
            let tbody = document.getElementById("content");
            tbody.innerHTML = showLoadingTable(8, "Loading...");
            searchTable1 = e.target.value;
            loadTable1(1);
        });

        ['type_motor'].forEach(name => {
            document.querySelectorAll(`input[name="${name}"]`).forEach(cb => {
                cb.addEventListener('change', () => {
                    let checked = document.querySelectorAll(`input[name="${name}"]:checked`).length > 0;
                    let indicator = document.getElementById(`indicator-${name}`);
                    if (indicator) {
                        indicator.classList.toggle('hidden', !checked);
                    }

                    let tbody = document.getElementById("content");
                    tbody.innerHTML = showLoadingTable(8, "Loading...");
                    loadTable1(1);
                });
            });
        });


        loadTable1();
    </script>
@endsection
