<template id="toastalert-template">
    <div class="max-w-xs relative bg-white border-white text-sm text-red-800 rounded-lg dark:bg-red-800/10 dark:border-red-900 dark:text-red-500 shadow-xl"
        role="alert" tabindex="-1" aria-labelledby="hs-toast-avatar-label">
        <div class="flex p-4">
            <div class="shrink-0 relative">
                <span id="indicator-alert" class="relative flex h-3 w-3">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-red-600"></span>
                </span>
                <button onclick="tostifyCustomClose(this)" type="button"
                    class="absolute top-3 end-3 inline-flex shrink-0 justify-center items-center size-5 rounded-lg text-gray-800 opacity-50 hover:opacity-100 focus:outline-hidden focus:opacity-100 dark:text-white"
                    aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="ms-4 me-5 flex-1">
                <h3 id="hs-toast-avatar-label" class="font-medium text-sm">
                    <span class="font-bold">Alert</span>
                </h3>
                <div class="mt-1 text-sm">
                    Message Content Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>
            </div>
        </div>
        <!-- Loading Bar -->
        <div class="absolute bottom-0 left-0 h-2 w-full bg-red-600 rounded-b-lg overflow-hidden">
            <div class="h-2 bg-red-400 animate-toast-progress"></div>
        </div>
    </div>
</template>

<style>
@keyframes toastProgress {
  from { width: 0%; }
  to { width: 100%; }
}

/* Animate progress bar 5 detik */
.animate-toast-progress {
  width: 0%;
  animation: toastProgress 3s linear forwards;
}
</style>
