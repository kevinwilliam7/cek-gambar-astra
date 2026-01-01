<template id="processing-table-template">
    <div class="relative">
        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
            <div class="flex">
                <div class="shrink-0">
                    <svg class="shrink-0 size-4 text-blue-600 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
                        <path d="M12 9v4"></path>
                        <path d="M12 17h.01"></path>
                    </svg>
                </div>
                <div class="ms-3">
                    <h3 class="text-sm text-blue-800 font-medium">
                        Loading Data...
                    </h3>
                    <div class="text-sm text-blue-700 mt-2">
                        <span class="font-semibold">Please wait</span> while we are fetching the data from
                        server. This may take a few seconds.
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute top-0 start-0 size-full bg-white/50 rounded-lg dark:bg-neutral-800/40"></div>

        <div class="absolute top-1/2 start-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <div class="animate-spin inline-block size-6 border-3 border-current border-t-transparent text-blue-600 rounded-full dark:text-blue-500"
                role="status" aria-label="loading">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
</template>
