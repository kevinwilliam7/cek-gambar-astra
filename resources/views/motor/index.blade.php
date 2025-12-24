@extends('layouts.app')
@section('title', 'Motor Honda | Astra')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
@endsection
@section('main-content')
    <div class="relative px-2 py-5 sm:px-5">
        <div
            class="p-5 space-y-4 flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <!-- Header -->
            <div class="flex justify-between items-center gap-x-5">
                <h2 class="inline-block font-semibold text-lg text-gray-800 dark:text-neutral-200">
                    Motor Honda
                </h2>
            </div>
            <!-- End Header -->

            <!-- Filter Group -->
            <div class="grid md:grid-cols-2 gap-y-2 md:gap-y-0 md:gap-x-5">
                <div>
                    <!-- Search Input -->
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none z-20 ps-3.5">
                            <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-400"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8" />
                                <path d="m21 21-4.3-4.3" />
                            </svg>
                        </div>
                        <input id="search-table1" type="text"
                            class="py-1 sm:py-1.5 ps-10 pe-8 block w-full bg-gray-100 border-transparent rounded-lg sm:text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:border-transparent dark:text-neutral-400 dark:placeholder:text-neutral-400 dark:focus:bg-neutral-800 dark:focus:ring-neutral-600"
                            placeholder="Search projects">
                        <div class="hidden absolute inset-y-0 end-0 flex items-center z-20 pe-1">
                            <button type="button"
                                class="inline-flex shrink-0 justify-center items-center size-6 rounded-full text-gray-500 hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                                aria-label="Close">
                                <span class="sr-only">Close</span>
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="m15 9-6 6" />
                                    <path d="m9 9 6 6" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!-- End Search Input -->
                </div>
                <!-- End Col -->

                <div class="flex md:justify-end items-center gap-x-2">

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
                        <button id="add-data" type="button" aria-haspopup="dialog" aria-expanded="false"
                            aria-controls="hs-large-modal" data-hs-overlay="#hs-large-modal"
                            class="py-2 px-2.5 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-indigo-600 text-white hover:bg-indigo-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-500">
                            <svg class="hidden sm:block shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg>
                            Add Data
                        </button>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Filter Group -->

            <!-- Table Section -->
            <div
                class="overflow-x-auto [&::-webkit-scrollbar]:h-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                <div class="min-w-full inline-block align-middle">
                    <!-- Table -->
                    <table id="table1" class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                        <thead id="thead1">
                            @php($table1_headers = [['Kode Nosin', 'kode_nosin'], ['Deskripsi', 'deskripsi'], ['KM', 'km_maksimum'], ['Hari', 'hari_maksimum'], ['Material', 'material'], ['Jasa', 'jasa']])
                            <tr
                                class="border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
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
                                                role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-ptpn"
                                                tabindex="-1">
                                                <div class="p-1">
                                                    <button type="button"
                                                        onclick="setSortTable1('{{ $table1_header[1] }}', 'asc')"
                                                        class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <path d="m5 12 7-7 7 7"></path>
                                                            <path d="M12 19V5"></path>
                                                        </svg>
                                                        Sort ascending
                                                    </button>
                                                    <button type="button"
                                                        onclick="setSortTable1('{{ $table1_header[1] }}', 'desc')"
                                                        class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" stroke="currentColor" stroke-width="2"
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
                                <th scope="col" class="text-gray-500 font-normal text-[13px] p-4">Action</th>
                            </tr>
                        </thead>

                        <tbody id="tbody1" class="divide-y divide-gray-200 dark:divide-neutral-700">
                        </tbody>
                    </table>
                    <!-- End Table -->
                </div>
            </div>
            <!-- End Table Section -->

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
    @include('motor.partial.modal_cu')
    @include('motor.partial.modal')
@endsection
@section('js')
    <script>
        //Tombol Tambah
        document.getElementById("add-data").addEventListener("click", function() {
            console.log('Add Data Pressed   ')
            document.getElementById("hs-large-modal-label").innerText = "Add Motor Honda";
            document.getElementById('id').value = '';
            document.getElementById('kode_nosin').value = '';
            document.getElementById('type_motor').value = '';
            document.getElementById('description').value = '';
            document.getElementById('description').dispatchEvent(new Event('input'));
            for (let i = 1; i <=4; i++) {
                document.getElementById('hari_maksimum_' + i).value = '';
                document.getElementById('km_maksimum_' + i).value = '';
                document.getElementById('material_' + i).value = '';
                document.getElementById('jasa_' + i).value = '';
            }
            const container = document.getElementById('image_input_container');
            container.innerHTML = ''; // reset
        });

        //Tombol Edit
        document.addEventListener("click", function(e) {
            if (e.target.closest(".edit-data")) {
                document.getElementById("hs-large-modal-label").innerText = "Edit Motor Honda";
                HSOverlay.open('#hs-large-modal');
                const btn = e.target.closest(".edit-data");
                const data = JSON.parse(btn.dataset.json);
                document.getElementById('id').value = data?.id ?? '';
                document.getElementById('kode_nosin').value = data?.kode_nosin ?? '';
                document.getElementById('type_motor').value = data?.type_motor ?? '';
                document.getElementById('description').value = data?.deskripsi ?? '';
                document.getElementById('description').dispatchEvent(new Event('input'));
                data.kpb_kriteria.forEach((kpb_kriteria, indexKpbKriteria) => {
                    document.getElementById('hari_maksimum_' + (indexKpbKriteria + 1)).value = kpb_kriteria
                        ?.hari_maksimum ?? '';
                    document.getElementById('km_maksimum_' + (indexKpbKriteria + 1)).value = kpb_kriteria
                        ?.km_maksimum ?? '';
                    document.getElementById('material_' + (indexKpbKriteria + 1)).value = kpb_kriteria
                        ?.material ?? '';
                    document.getElementById('jasa_' + (indexKpbKriteria + 1)).value = kpb_kriteria?.jasa ??
                        '';
                });
                const container = document.getElementById('image_input_container');
                container.innerHTML = ''; // reset
                data.images.forEach((image, indexImage) => {
                    container.insertAdjacentHTML('beforeend', `
                        <div class="grid grid-cols-2 gap-x-2 gap-y-2 mb-2">
                            <div>
                                <label for="link_foto"
                                    class="block mb-2 text-sm font-medium text-gray-800 dark:text-neutral-200">
                                    Link Foto
                                </label>

                                <input id="link_foto_${indexImage+1}" value="${image.filename ?? ''}" type="text" name="link_foto" placeholder="E.g: https://example.com/foto.jpg   "
                                    min="5" max="5"
                                    class="border-1 py-1.5 sm:py-2 px-3 block w-full border-gray-200 rounded-lg sm:text-sm placeholder:text-gray-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:placeholder:text-white/60 dark:focus:ring-neutral-600"
                                    placeholder="Kode Nosin">
                            </div>

                            <div>
                                <label for="deskripsi_speedometer"
                                    class="block mb-2 text-sm font-medium text-gray-800 dark:text-neutral-200">
                                    Deskripsi
                                </label>

                                <input id="deskripsi_speedometer_${indexImage+1}" value="${image.deskripsi ?? ''}" type="text" name="deskripsi_speedometer"
                                    class="border-1 py-1.5 sm:py-2 px-3 block w-full border-gray-200 rounded-lg sm:text-sm placeholder:text-gray-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:placeholder:text-white/60 dark:focus:ring-neutral-600"
                                    placeholder="E.g: Putih Doff Dengan Striping Merah">
                            </div>
                        </div>
                    `);
                });
            }
        });

        //Tombol Submit Form
        document.getElementById('submit').addEventListener('click', function(data) {
            const formData = new FormData();
            let url = document.getElementById('id').value ? '{{ route("motor.update") }}' : '{{ route("motor.store") }}';
            formData.append('id', document.getElementById('id').value);
            formData.append('kode_nosin', document.getElementById('kode_nosin').value);
            formData.append('type_motor', document.getElementById('type_motor').value);
            formData.append('description', document.getElementById('description').value);
            document.querySelectorAll('input[name="hari_maksimum[]"]').forEach((el, i) => formData.append(
                'hari_maksimum[]', el.value));
            document.querySelectorAll('input[name="km_maksimum[]"]').forEach((el, i) => formData.append(
                'km_maksimum[]', el.value));
            document.querySelectorAll('input[name="material[]"]').forEach((el, i) => formData.append('material[]',
                el.value));
            document.querySelectorAll('input[name="jasa[]"]').forEach((el, i) => formData.append('jasa[]', el
                .value));
            document.querySelectorAll('input[name="link_foto"]').forEach((el, i) => formData.append('link_foto[]',
                el.value));
            document.querySelectorAll('input[name="deskripsi_speedometer"]').forEach((el, i) => formData.append(
                'deskripsi_speedometer[]', el.value));

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    document.getElementById('hs-task-created-alert-label').innerText = data?.status == true ? 'Success' : 'Failed';
                    document.getElementById('hs-task-created-alert-icon').innerHTML = '';
                    document.getElementById('hs-task-created-alert-content').innerText = data?.message;
                    document.getElementById('hs-task-created-alert-icon').innerHTML = `
                        <span
                            class="mb-4 inline-flex justify-center items-center size-11 rounded-full border-4 ${data?.status == true ? 'border-green-50 bg-green-100 text-green-500 dark:bg-green-700 dark:border-green-600 dark:text-green-100' : 'border-red-50 bg-red-100 text-red-500 dark:bg-red-700 dark:border-red-600 dark:text-red-100'}">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" viewBox="0 0 16 16">
                                <path
                                    d="M11.251.068a.5.5 0 0 1 .227.58L9.677 6.5H13a.5.5 0 0 1 .364.843l-8 8.5a.5.5 0 0 1-.842-.49L6.323 9.5H3a.5.5 0 0 1-.364-.843l8-8.5a.5.5 0 0 1 .615-.09z" />
                            </svg>
                        </span>
                    `;
                    HSOverlay.open('#hs-task-created-alert');
                    // close modal
                    HSOverlay.close('#hs-large-modal');
                    // reload jobs
                    loadTable1(1)
                    data?.status == false ? '' : confetti();
                })
                .catch(error => {
                    document.getElementById('hs-task-created-alert-label').innerText = 'Error';
                    document.getElementById('hs-task-created-alert-icon').innerHTML = '';
                    document.getElementById('hs-task-created-alert-content').innerText =
                        'Terjadi kesalahan saat update data.';
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

        //Tombol Tambah Foto Speedometer
        document.getElementById("add_foto_speedometer").addEventListener("click", function() {
            const container = document.getElementById('image_input_container');
            container.insertAdjacentHTML('beforeend', `
                <div class="grid grid-cols-2 gap-x-2 gap-y-2 mb-2">
                    <div>
                        <label for="link_foto"
                            class="block mb-2 text-sm font-medium text-gray-800 dark:text-neutral-200">
                            Link Foto
                        </label>

                        <input type="text" name="link_foto" placeholder="E.g: https://example.com/foto.jpg   "
                            min="5" max="5"
                            class="border-1 py-1.5 sm:py-2 px-3 block w-full border-gray-200 rounded-lg sm:text-sm placeholder:text-gray-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:placeholder:text-white/60 dark:focus:ring-neutral-600"
                            placeholder="Kode Nosin">
                    </div>

                    <div>
                        <label for="deskripsi_speedometer"
                            class="block mb-2 text-sm font-medium text-gray-800 dark:text-neutral-200">
                            Deskripsi
                        </label>

                        <input type="text" name="deskripsi_speedometer"
                            class="border-1 py-1.5 sm:py-2 px-3 block w-full border-gray-200 rounded-lg sm:text-sm placeholder:text-gray-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:placeholder:text-white/60 dark:focus:ring-neutral-600"
                            placeholder="E.g: Putih Doff Dengan Striping Merah">
                    </div>
                </div>
            `);
        })

        document.addEventListener('DOMContentLoaded', function() {
            window.lightbox = GLightbox({
                selector: '.glightbox',
                loop: true,
                touchNavigation: true,
                zoomable: true,
            });
        });
        let currentPageTable1 = 1;
        let perPageTable1 = document.getElementById("page-size-table1").value;
        let searchTable1 = "";
        let sortByTable1 = 'buy_date';
        let sortDirTable1 = 'desc';

        function loadTable1(currentPageTable1) {
            let jenisDealerValues = Array.from(
                document.querySelectorAll('input[name="jenis_dealer"]:checked')
            ).map(c => c.value);
            let wilayahValues = Array.from(
                document.querySelectorAll('input[name="wilayah"]:checked')
            ).map(c => c.value);

            // bikin parameter query
            let params = new URLSearchParams({
                page: currentPageTable1,
                per_page: perPageTable1,
                q: searchTable1,
                sort_by: sortByTable1,
                sort_dir: sortDirTable1,
            });

            // tambahin filter jenis_dealer[]
            jenisDealerValues.forEach(v => params.append("jenis_dealer[]", v));
            // tambahin filter wilayah[]
            wilayahValues.forEach(v => params.append("wilayah[]", v));
            let url = "{{ app()->environment('local') ? route('datatable.motor') : secure_url('datatable/motor') }}";
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
                        res.data.forEach((item, index) => {
                            const collapseId = `collapse-${index}`;
                            const collapseHeadingId = `collapse-heading-${index}`;
                            let row = `
                            <tr class="divide-x divide-gray-200 dark:divide-neutral-700">
                                <td class="size-px whitespace-nowrap">
                                <div class="px-5 py-2">
                                    <a href="${item.images && item.images.length > 0 ? item.images[0]['filename'] : 'https://via.placeholder.com/300x200?text=Gambar+Belum+Tersedia'}" data-gallery="motor-${index}" class="glightbox">
                                        <p class="text-sm font-semibold text-gray-800 dark:text-neutral-200">${item.type_motor}</p>
                                        <p class="text-sm text-gray-500 dark:text-neutral-500">${item.kode_nosin}</p>
                                    </a>
                                    ${item.images.slice(1).map(img => `
                                            <a href="${img.filename}" data-gallery="motor-${index}" class="glightbox hidden"></a>
                                        `).join('')}
                                </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                <div class="px-5 py-2">
                                    <div class="flex items-center -space-x-2">
                                        <p class="text-sm text-gray-500 dark:text-neutral-500">${item.deskripsi}</p>
                                    </div>
                                </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="flex flex-wrap gap-1.5 px-4 py-1">
                                        ${item.kpb_kriteria.filter(k => k.kpb_type).map(k => `
                                                <span class="p-2 bg-gray-100 text-gray-800 text-xs rounded-md dark:bg-neutral-700 dark:text-neutral-200">
                                                ${k.kpb_type}: ${k.km_maksimum} KM
                                                </span>
                                            `).join('')}
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="flex flex-wrap gap-1.5 px-4 py-1">
                                        ${item.kpb_kriteria.filter(k => k.kpb_type).map(k => `
                                                <span class="p-2 bg-gray-100 text-gray-800 text-xs rounded-md dark:bg-neutral-700 dark:text-neutral-200">
                                                ${k.kpb_type}: ${k.hari_maksimum} Hari
                                                </span>
                                            `).join('')}
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="flex flex-wrap gap-1.5 px-4 py-1">
                                        ${item.kpb_kriteria.filter(k => k.kpb_type).map(k => `
                                                <span class="p-2 bg-gray-100 text-gray-800 text-xs rounded-md dark:bg-neutral-700 dark:text-neutral-200">
                                                    ${k.kpb_type}: ${new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(k.material)}
                                                </span>
                                            `).join('')}
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="flex flex-wrap gap-1.5 px-4 py-1">
                                        ${item.kpb_kriteria.filter(k => k.kpb_type).map(k => `
                                                <span class="p-2 bg-gray-100 text-gray-800 text-xs rounded-md dark:bg-neutral-700 dark:text-neutral-200">
                                                    ${k.kpb_type}: ${new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(k.jasa)}
                                                </span>
                                            `).join('')}
                                    </div>
                                </td>
                                <td class="size-px whitespace-nowrap">
                                    <div class="flex flex-wrap gap-1.5 py-1 px-4 justify-end">
                                        <button data-json='${JSON.stringify(item)}' class="edit-data inline-flex items-center gap-x-0.5 text-[13px] text-indigo-700 underline underline-offset-2 hover:decoration-2 focus:outline-hidden focus:decoration-2 disabled:opacity-50 disabled:pointer-events-none dark:text-indigo-400" data-hs-overlay="#hs-large-modal">
                                            Edit
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            `;
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
                    lightbox.reload();
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
        loadTable1();
    </script>
@endsection
