<div id="hs-large-modal"
    class="hs-overlay hidden size-full fixed top-0 start-0 z-80 overflow-x-hidden overflow-y-auto pointer-events-none"
    role="dialog" tabindex="-1" aria-labelledby="hs-dkd-modal-label">
    <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all lg:max-w-4xl lg:w-full m-3 lg:mx-auto">
        <div class="flex flex-col bg-white border border-gray-200 shadow-2xs rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">

            <!-- Modal Header -->
            <div class="flex justify-between items-center py-3 px-4 border-b border-gray-200 dark:border-neutral-700">
                <h3 id="hs-dkd-modal-label" class="font-bold text-gray-800 dark:text-white">
                    Cek KPB Digital — Upload Excel
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
            <!-- End Modal Header -->

            <!-- Modal Body -->
            <div class="p-4 overflow-y-auto">
                <div class="bg-white border border-neutral-200 shadow-2xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">

                    <!-- Card Header -->
                    <div class="py-3 px-4 flex justify-between items-center border-b border-stone-200 dark:border-neutral-700">
                        <h3 class="font-semibold text-stone-800 dark:text-neutral-200">Excel KPB Digital</h3>
                        <span class="inline-flex items-center gap-1.5 py-0.5 px-2 text-xs font-medium bg-indigo-100 text-indigo-700 rounded-full dark:bg-indigo-500/20 dark:text-indigo-400">
                            <svg class="size-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09Z" />
                            </svg>
                            AI-powered
                        </span>
                    </div>
                    <!-- End Card Header -->

                    <div class="p-4">
                        <label class="block text-sm text-stone-500 dark:text-neutral-400 mb-3">
                            Upload file Excel KPB Digital. Sistem akan memvalidasi data secara otomatis dan hasil analisis AI akan disimpan di kolom
                            <code class="px-1 py-0.5 text-xs bg-gray-100 rounded dark:bg-neutral-700 text-indigo-600 dark:text-indigo-400">ai_generated</code>.
                        </label>

                        <!-- Drag & Drop Zone -->
                        <div class="space-y-2">
                            <div id="dkd-drop-zone"
                                class="p-12 h-56 flex flex-col justify-center items-center bg-white border-2 border-dashed border-stone-300 rounded-xl transition-colors dark:bg-neutral-800 dark:border-neutral-600 hover:border-indigo-400 dark:hover:border-indigo-500">
                                <div class="text-center">
                                    <svg class="w-16 text-stone-400 mx-auto dark:text-neutral-400" width="70" height="46"
                                        viewBox="0 0 70 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="17.0656" y="1.62305" width="35.8689" height="42.7541" rx="5"
                                            fill="currentColor" stroke="currentColor" stroke-width="2"
                                            class="fill-white stroke-stone-400 dark:fill-neutral-800 dark:stroke-neutral-500" />
                                        <circle cx="39.5902" cy="14.9672" r="4.16393" stroke="currentColor"
                                            stroke-width="2" class="stroke-stone-400 dark:stroke-neutral-500" />
                                    </svg>
                                    <div class="mt-4 flex flex-wrap justify-center text-sm/6 text-stone-600">
                                        <span class="pe-1 font-medium text-stone-800 dark:text-neutral-200">
                                            Drop file Excel di sini atau
                                        </span>
                                        <label for="dkd-file-input"
                                            class="relative cursor-pointer bg-white font-semibold text-indigo-600 hover:text-indigo-700 rounded-lg decoration-2 hover:underline focus-within:outline-hidden focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 dark:bg-neutral-800 dark:text-indigo-400 dark:hover:text-indigo-500">
                                            <span>browse</span>
                                            <input id="dkd-file-input" type="file" class="sr-only"
                                                name="excels[]" accept=".xls,.xlsx" multiple>
                                        </label>
                                    </div>
                                    <p class="mt-1 text-xs text-stone-400 dark:text-neutral-400">
                                        Hanya file Excel (.xls, .xlsx) — bisa multi-file
                                    </p>
                                </div>
                            </div>

                            <!-- File Preview List -->
                            <div id="dkd-file-preview" class="mt-4 space-y-2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal Body -->

            <!-- Modal Footer -->
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-gray-200 dark:border-neutral-700">
                <button type="button"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                    data-hs-overlay="#hs-large-modal">
                    Batal
                </button>
                <button type="button" id="dkd-submit-btn"
                    class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-hidden focus:bg-indigo-700 disabled:opacity-50 disabled:pointer-events-none">
                    <svg id="dkd-submit-icon" class="hidden animate-spin size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                    </svg>
                    <span id="dkd-submit-label">Upload & Check</span>
                </button>
            </div>
            <!-- End Modal Footer -->

        </div>
    </div>
</div>