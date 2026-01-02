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

            <!-- Bar Chart in Card -->
            <div>
                <!-- Header -->
                <div class="border-b bg-white border border-gray-200 dark:bg-neutral-800 dark:border-neutral-700">
                    <!-- Page Header -->
                    <div
                        class="py-3 px-5 flex flex-wrap justify-between items-center gap-y-2 gap-x-5 bg-white dark:bg-neutral-800">
                        <!-- Input Search -->
                        <div id="topbar-table1" class="flex flex-1 flex-wrap items-center justify-start gap-x-3 gap-y-2">
                        </div>
                        <!-- End Input Search -->

                        <div class="flex justify-end items-center gap-x-2">
                            <button type="button" id="add-data" aria-haspopup="dialog" aria-expanded="false"
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
                                <!-- Dropdown Jenis Dealer -->
                                <div class="hs-dropdown [--auto-close:inside] inline-block">
                                    <!-- Type Motor Button -->
                                    <button id="hs-pro-shscld" type="button"
                                        class="hs-dropdown-toggle py-1 px-3 flex items-center gap-x-1 border border-gray-200 text-sm text-start text-gray-800 rounded-full hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:border-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                        Type Motor
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
                                                @foreach ($data['motor'] as $type_motor)
                                                    <!-- Radio -->
                                                    <label for="hs-pro-shflocss-{{ $type_motor['type_motor'] }}"
                                                        class="p-2 group w-full inline-flex items-center cursor-pointer text-sm rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-800">
                                                        <input type="checkbox"
                                                            class="shrink-0 size-4.5 bg-black border-black rounded-sm focus:ring-0 focus:ring-offset-0 checked:text-black disabled:opacity-50 disabled:pointer-events-none"
                                                            id="hs-pro-shflocss-{{ $type_motor['type_motor'] }}" name="type_motor"
                                                            value="{{ $type_motor['type_motor'] }}">
                                                        <span
                                                            class="ms-2 text-gray-800 dark:text-neutral-400">{{ $type_motor['type_motor'] }}</span>
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
                                    @php($table1_headers = [['',''],['Kode Nosin', 'kode_nosin'], ['KM', 'km_maksimum'], ['Hari', 'hari_maksimum'], ['Material', 'material'], ['Jasa', 'jasa'], ['Action', 'action']])
                                    <tr>
                                        @foreach ($table1_headers as $table1_header)
                                            <th scope="col"
                                                class="{{ $table1_header[0] === '' ? '' : 'min-w-52' }} {{ $table1_header[0] === 'Action' ? 'text-right justify-end' : 'text-left' }}">
                                                <!-- Sort Dropdown -->
                                                <div class="hs-dropdown relative inline-flex w-full cursor-pointer">
                                                    {!! $table1_header[0] === ''
                                                        ? ''
                                                        : '<button id="hs-pro-ptpn" type="button" class="px-5 py-2.5 text-start w-full flex items-center gap-x-1 text-sm text-nowrap whitespace-nowrap font-normal text-gray-500 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-500 dark:focus:bg-neutral-700 ' .
                                                            ($table1_header[0] === 'Action' ? 'justify-end text-right' : 'text-left w-full text-start') .
                                                            '"aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">' .
                                                            $table1_header[0] .
                                                            '<svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7 15 5 5 5-5"></path><path d="m7 9 5-5 5 5"></path>
                                                            </svg>
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
    @include('motor.partial.modal_cu')
    @include('motor.partial.modal')
    @include('template.empty_table_template.index')
    @include('template.loading_table_template.index')
    @include('template.processing_table_template.index')
    @include('components.row_checkbox_table_component.index')
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
            for (let i = 1; i <= 4; i++) {
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
            let url = document.getElementById('id').value ? '{{ route('motor.update') }}' :
                '{{ route('motor.store') }}';
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
                    document.getElementById('hs-task-created-alert-label').innerText = data?.status == true ?
                        'Success' : 'Failed';
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

        window.addEventListener('load', () => {
            $(document).ready(() => {
                let table1 = $('#table1').DataTable({
                    processing: true,
                    serverSide: true,
                    colReorder: true,
                    // fixedHeader: true,
                    pagingType: 'simple_numbers',
                    ajax: {
                        url: '{{ route('datatable.motor') }}',
                        data: function(d) {
                            // Tambahkan data filter ke dalam request AJAX
                            d.type_motor = Array.from(document.querySelectorAll(
                                'input[name="type_motor"]:checked')).map(cb => cb.value);
                        }
                    },
                    columns: [
                        {
                            className: 'dt-control',
                            orderable: false,
                            data: null,
                            defaultContent: ''
                        },
                        {
                            data: 'kode_nosin',
                            name: 'kode_nosin',
                            render: function(data, type, row) {
                                return `<div class="flex items-center gap-x-3">
                                        <div class="grow">
                                            <a class="font-medium text-gray-800 underline-offset-2 hover:underline hover:decoration-2 hover:text-indigo-700 focus:outline-hidden focus:underline focus:decoration-2 focus:text-indigo-700 dark:text-neutral-200 dark:hover:text-indigo-400 dark:focus:text-indigo-400" href="#">
                                            ${data}
                                            </a>
                                            <ul class="flex flex-wrap items-center whitespace-nowrap gap-1.5">
                                            <li class="inline-flex items-center relative text-xs text-gray-500 pe-2 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:size-[3px] after:bg-gray-400 after:rounded-full after:-translate-y-1/2 dark:text-neutral-500 dark:after:bg-neutral-600">
                                                <p class="text-xs text-gray-500 dark:text-neutral-400">
                                                ${row.type_motor}
                                                </p>
                                            </li>
                                            </ul>
                                        </div>
                                    </div>`;
                            }
                        },
                        {
                            data: 'type_motor',
                            name: 'type_motor',
                            render: function (data, type, row) {
                                if (!row.kpb_kriteria?.length) return '-';
                                return row.kpb_kriteria
                                    .filter(k => k.kpb_type)
                                    .map(k => `
                                        <span class="inline-block p-2 mr-1 mb-1 bg-gray-100 text-gray-800 text-xs rounded-md">
                                            ${k.kpb_type}: ${k.km_maksimum} KM
                                        </span>
                                    `)
                                    .join('');
                            },
                        },
                        {
                            data: 'deskripsi',
                            name: 'deskripsi',
                            render: function (data, type, row) {
                                if (!row.kpb_kriteria?.length) return '-';
                                return row.kpb_kriteria
                                    .filter(k => k.kpb_type)
                                    .map(k => `
                                        <span class="inline-block p-2 mr-1 mb-1 bg-gray-100 text-gray-800 text-xs rounded-md">
                                            ${k.kpb_type}: ${k.hari_maksimum} Hari
                                        </span>
                                    `)
                                    .join('');
                            },
                        },
                        {
                            data: 'kode_nosin',
                            name: 'kode_nosin',
                            render: function (data, type, row) {
                                if (!row.kpb_kriteria?.length) return '-';
                                return row.kpb_kriteria
                                    .filter(k => k.kpb_type)
                                    .map(k => `
                                        <span class="inline-block p-2 mr-1 mb-1 bg-gray-100 text-gray-800 text-xs rounded-md">
                                            ${k.kpb_type}: ${k.material}
                                        </span>
                                    `)
                                    .join('');
                            },
                        },
                        {
                            data: 'kode_nosin',
                            name: 'kode_nosin',
                            render: function (data, type, row) {
                                if (!row.kpb_kriteria?.length) return '-';
                                return row.kpb_kriteria
                                    .filter(k => k.kpb_type)
                                    .map(k => `
                                        <span class="inline-block p-2 mr-1 mb-1 bg-gray-100 text-gray-800 text-xs rounded-md">
                                            ${k.kpb_type}: ${k.jasa}
                                        </span>
                                    `)
                                    .join('');
                            },
                        },
                        {
                            data: 'kode_nosin',
                            name: 'kode_nosin',
                            render: function(data, type, row) {
                                return `
                                    <div class="flex justify-end items-center gap-x-2">
                                        <button type="button" aria-haspopup="dialog" aria-expanded="false"
                                            aria-controls="hs-large-modal"
                                            class="edit-data py-1.5 px-3 text-sm rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-100 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700"
                                            data-json='${JSON.stringify(row)}'>
                                            Edit
                                        </button>
                                        <button type="button" class="delete-data py-1.5 px-3 text-sm rounded-lg border border-gray-200 text-gray-600 hover:bg-gray-100 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700">Delete</button>
                                    </div>
                                `;
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
                function format(d) {
                    const slides = (d.images && d.images.length)
                        ? d.images.map(img => `
                            <div class="hs-carousel-slide px-1 h-full">
                                <div class="flex justify-center items-center h-full bg-gray-100 dark:bg-neutral-900">
                                    <a href="${img.filename}" class="glightbox" data-gallery="motor-${d.id}" data-title="${d.type_motor} - ${img.deskripsi ?? ''}">
                                    <img
                                        src="${img.filename}"
                                        class="max-h-full object-contain rounded-lg"
                                        alt="${d.type_motor}"
                                    />
                                    </a>
                                </div>
                            </div>
                        `).join('')
                        : `
                            <div class="hs-carousel-slide px-1 h-full">
                                <div class="flex justify-center items-center h-full bg-gray-100 dark:bg-neutral-900">
                                    <span class="text-sm text-gray-500">Tidak ada gambar</span>
                                </div>
                            </div>
                        `;

                    return `
                        <div class="p-4 bg-gray-50 dark:bg-neutral-800 rounded-xl space-y-4">

                            <div>
                                <h4 class="font-semibold text-gray-800 dark:text-neutral-100">
                                    ${d.type_motor} (${d.kode_nosin}) [${d.deskripsi}]
                                </h4>
                            </div>

                            <div data-hs-carousel='{
                                "loadingClasses": "opacity-0",
                                "slidesQty": { "xs": 1, "lg": 3 },
                                "isDraggable": true
                            }' class="relative">

                                <div class="hs-carousel overflow-hidden rounded-lg bg-white dark:bg-neutral-900">
                                    <div class="relative h-72 -mx-1">
                                        <div class="hs-carousel-body absolute inset-0 flex h-full opacity-0 transition-transform duration-700">
                                            ${slides}
                                        </div>
                                    </div>
                                </div>

                                <button type="button"
                                    class="hs-carousel-prev absolute inset-y-0 start-0 z-10 flex items-center justify-center w-10
                                        text-gray-800 dark:text-white">
                                    ‹
                                </button>

                                <button type="button"
                                    class="hs-carousel-next absolute inset-y-0 end-0 z-10 flex items-center justify-center w-10
                                        text-gray-800 dark:text-white">
                                    ›
                                </button>

                                <div class="hs-carousel-pagination flex justify-center gap-2 mt-2"></div>
                            </div>

                        </div>
                    `;
                }

                table1.on('click', 'tbody td.dt-control', function (e) {
                    const tr = $(this).closest('tr');
                    const row = table1.row(tr);

                    if (row.child.isShown()) {
                        row.child.hide();
                        tr.removeClass('dt-hasChild');
                    } else {
                        row.child(format(row.data())).show();
                        tr.addClass('dt-hasChild');

                        // INIT ULANG PRELINE
                        setTimeout(() => {
                            window.HSStaticMethods.autoInit();
                            if (window.lightbox) {
                                window.lightbox.reload();
                            }
                        }, 0);
                    }
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
    </script>
@endsection
