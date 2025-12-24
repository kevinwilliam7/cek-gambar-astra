<div id="hs-large-modal"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-80 overflow-x-hidden overflow-y-auto pointer-events-none"
    role="dialog" tabindex="-1" aria-labelledby="hs-large-modal-label">
    <div
        class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all lg:max-w-4xl lg:w-full m-3 lg:mx-auto">
        <div
            class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
            <div class="flex justify-between items-center py-3 px-4 border-b border-gray-200 dark:border-neutral-700">
                <h3 id="hs-large-modal-label" class="font-bold text-gray-800 dark:text-white">
                    Modal title
                </h3>
                <button type="button"
                    class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                    aria-label="Close" data-hs-overlay="#hs-large-modal">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <input type="hidden" id="id" name="id">
            <div class="p-4 overflow-y-auto">
                <div class="grid grid-cols-2 gap-x-2">
                    <div>
                        <label for="kode_nosin"
                            class="block mb-2 text-sm font-medium text-gray-800 dark:text-neutral-200">
                            Kode Nosin
                            <small class="text-red-500">*</small><small class="text-gray-500">(5 karakter & Required)</small>
                        </label>

                        <input id="kode_nosin" type="text" name="kode_nosin" placeholder="JMC1E" min="5"
                            max="5"
                            class="border-1 py-1.5 sm:py-2 px-3 block w-full border-gray-200 rounded-lg sm:text-sm placeholder:text-gray-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:placeholder:text-white/60 dark:focus:ring-neutral-600"
                            placeholder="Kode Nosin">
                    </div>

                    <div>
                        <label for="type_motor"
                            class="block mb-2 text-sm font-medium text-gray-800 dark:text-neutral-200">
                            Tipe Motor <small class="text-red-500">*</small><small class="text-gray-500">(Required)</small>
                        </label>

                        <input id="type_motor" type="text" name="type_motor" placeholder="E.g: Vario 125"
                            class="border-1 py-1.5 sm:py-2 px-3 block w-full border-gray-200 rounded-lg sm:text-sm placeholder:text-gray-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:placeholder:text-white/60 dark:focus:ring-neutral-600"
                            placeholder="Tipe Motor">
                    </div>
                </div>

                <div class="space-y-2 mt-5  ">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-800 dark:text-neutral-200">
                        Deskripsi
                    </label>

                    <textarea id="description" name="description"
                        class="border-1 py-1.5 sm:py-2 px-3 block w-full border-gray-200 rounded-lg sm:text-sm placeholder:text-gray-400 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:placeholder:text-white/60 dark:focus:ring-neutral-600"
                        rows="3" placeholder="Deskripsi motor e.g: Motor bebek, motor sport, dll." data-hs-textarea-auto-height=""
                        style="height: 79px;"></textarea>
                </div>

                <div class="hs-accordion-group">
                    <div class="hs-accordion active" id="hs-basic-nested-heading-one">
                        <button
                            class="hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                            aria-expanded="true" aria-controls="hs-basic-nested-collapse-one">
                            <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg>
                            <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                            </svg>
                            Kriteria KPB
                        </button>

                        <div id="hs-basic-nested-collapse-one"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                            role="region" aria-labelledby="hs-basic-nested-heading-one">
                            <div class="hs-accordion-group ps-6">
                                @for ($i = 1; $i <= 4; $i++)
                                    <div class="hs-accordion" id="hs-basic-nested-sub-heading-two">
                                        <button
                                            class="hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                                            aria-expanded="false" aria-controls="hs-basic-nested-sub-collapse-two">
                                            <svg class="hs-accordion-active:hidden block size-3" width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                                <path d="M8.12421 13.36V2.35999" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                            </svg>
                                            <svg class="hs-accordion-active:block hidden size-3" width="16"
                                                height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.62421 7.86L13.6242 7.85999" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round"></path>
                                            </svg>
                                            Kriteria KPB {{ $i }}
                                            <span style="font-size: 9px;">
                                                <span
                                                    class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-red-500 text-white"
                                                    style="font-size: 9px;">
                                                    NOTE :
                                                </span>
                                                Jika KPB {{ $i }} tidak ada maka dikosongkan saja fieldnya.
                                            </span>

                                        </button>
                                        <div id="hs-basic-nested-sub-collapse-two"
                                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                            role="region" aria-labelledby="hs-basic-nested-sub-heading-two">
                                            <!-- Section -->
                                            <div
                                                class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">
                                                <!-- End Col -->

                                                <div class="sm:col-span-3">
                                                    <label for="hari_maksimum"
                                                        class="inline-block mb-2 text-sm font-medium text-stone-800 dark:text-neutral-200">
                                                        Hari Maksimum
                                                    </label>
                                                </div>
                                                <!-- End Col -->

                                                <div class="sm:col-span-9">
                                                    <input id="hari_maksimum_{{ $i }}"
                                                        name="hari_maksimum[]" type="number" placeholder="E.g: 75"
                                                        class="border-1 py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 aadisabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                </div>
                                                <!-- End Col -->
                                                <div class="sm:col-span-3">
                                                    <label for="km_maksimum"
                                                        class="inline-block mb-2 text-sm font-medium text-stone-800 dark:text-neutral-200">
                                                        KM Maksimum
                                                    </label>
                                                </div>
                                                <!-- End Col -->

                                                <div class="sm:col-span-9">
                                                    <input id="km_maksimum_{{ $i }}" name="km_maksimum[]"
                                                        type="number" placeholder="E.g: 1250"
                                                        class="border-1 py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                </div>
                                                <!-- End Col -->
                                                <div class="sm:col-span-3">
                                                    <label for="material"
                                                        class="inline-block mb-2 text-sm font-medium text-stone-800 dark:text-neutral-200">
                                                        Harga Material
                                                    </label>
                                                </div>
                                                <!-- End Col -->

                                                <div class="sm:col-span-9">
                                                    <input id="material_{{ $i }}" name="material[]"
                                                        type="number" min="0" placeholder="E.g: 50000"
                                                        class="border-1 py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                </div>
                                                <!-- End Col -->

                                                <div class="sm:col-span-3">
                                                    <label for="jasa"
                                                        class="inline-block mb-2 text-sm font-medium text-stone-800 dark:text-neutral-200">
                                                        Harga Jasa
                                                    </label>
                                                </div>
                                                <!-- End Col -->

                                                <div class="sm:col-span-9">
                                                    <input id="jasa_{{ $i }}" name="jasa[]"
                                                        type="number" min="0" placeholder="E.g: 50000"
                                                        class="border-1 py-1.5 sm:py-2 px-3 pe-11 block w-full border-gray-200 shadow-2xs sm:text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                                </div>
                                                <!-- End Col -->
                                            </div>
                                            <!-- End Section -->
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>

                    <div class="hs-accordion" id="hs-basic-nested-heading-two">
                        <button
                            class="hs-accordion-toggle hs-accordion-active:text-blue-600 py-3 inline-flex items-center gap-x-3 w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-hidden focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                            aria-expanded="false" aria-controls="hs-basic-nested-collapse-two">
                            <svg class="hs-accordion-active:hidden block size-3.5" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5v14"></path>
                            </svg>
                            <svg class="hs-accordion-active:block hidden size-3.5" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                            </svg>
                            Foto Speedometer
                        </button>
                        <div id="hs-basic-nested-collapse-two"
                            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                            role="region" aria-labelledby="hs-basic-nested-heading-two">
                            <button id="add_foto_speedometer" type="button"
                                class="mb-2 py-1.5 px-2 inline-flex items-center gap-1 text-xs rounded-full bg-white border border-dashed border-gray-300 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5v14"></path>
                                </svg>
                                Tambah Foto Speedometer
                            </button>
                            <div id="image_input_container"></div>
                        </div>
                    </div>
                </div>

            </div>
            <div
                class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-gray-200 dark:border-neutral-700">
                <button type="button"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                    data-hs-overlay="#hs-large-modal">
                    Close
                </button>
                <button id="submit" type="button"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</div>
