<!-- ========== HEADER ========== -->
<header
    class="flex flex-wrap md:justify-start md:flex-nowrap z-50 bg-slate-900 px-2 sm:px-5 xl:px-0 dark:bg-slate-950">
    <div class="max-w-7xl flex flex-wrap basis-full items-center w-full mx-auto py-2.5">
        <div class="md:order-1 md:w-42 flex items-center">
            <!-- Logo -->
            <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80"
                href="../../pro/project/index.html" aria-label="Preline">
                <img src="{{ asset('images/logo.png') }}" alt="Laravel Logo" class="w-28 h-auto">

            </a>
            <!-- End Logo -->
        </div>

        <div class="md:order-4 md:w-42 flex justify-end items-center gap-x-1 sm:gap-x-2 ms-auto md:ms-0">
            <!-- Account -->
            <div class="hs-dropdown [--placement:bottom-right] [--auto-close:inside] relative inline-flex">
                <button id="hs-pro-dropdown-account" type="button"
                    class="inline-flex shrink-0 items-center gap-x-2 text-sm font-medium rounded-full border border-transparent text-white hover:text-white/80 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-white/10"
                    aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    <img class="shrink-0 size-9.5 rounded-full"
                        src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=320&amp;h=320&amp;q=80"
                        alt="Avatar">
                </button>

                <!-- Account Dropdown -->
                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-60 transition-[opacity,margin] duration opacity-0 hidden z-20 bg-white rounded-xl shadow-xl before:absolute before:-top-3 before:start-0 before:w-full before:h-5 dark:bg-neutral-900"
                    role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-dropdown-account"
                    tabindex="-1">
                    <div class="p-1">
                        <a class="flex items-center gap-x-3 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                            href="#">
                            <svg class="shrink-0 mt-0.5 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            My account
                        </a>
                    </div>
                    <div class="px-4 py-3.5 border-gray-200 dark:border-neutral-800">
                        <!-- Switch/Toggle -->
                        <div class="flex flex-wrap justify-between items-center gap-2">
                            <label for="hs-pro-pnaddm"
                                class="flex-1 cursor-pointer text-sm text-gray-800 dark:text-neutral-300">Dark
                                mode</label>
                            <label for="hs-pro-pnaddm" class="relative inline-block w-11 h-6 cursor-pointer">
                                <input data-hs-theme-switch="" type="checkbox" id="hs-pro-pnaddm"
                                    class="peer sr-only">
                                <span
                                    class="absolute inset-0 bg-gray-200 rounded-full transition-colors duration-200 ease-in-out peer-checked:bg-indigo-600 dark:bg-neutral-700 dark:peer-checked:bg-indigo-500 peer-disabled:opacity-50 peer-disabled:pointer-events-none"></span>
                                <span
                                    class="absolute top-1/2 start-0.5 -translate-y-1/2 size-5 bg-white rounded-full shadow-sm !transition-transform duration-200 ease-in-out peer-checked:translate-x-full dark:bg-neutral-400 dark:peer-checked:bg-white"></span>
                            </label>
                        </div>
                        <!-- End Switch/Toggle -->
                    </div>
                </div>
                <!-- End Account Dropdown -->
            </div>
            <!-- End Account -->

            <div class="md:hidden">
                <!-- Collapse Button Trigger -->
                <button type="button"
                    class="hs-collapse-toggle inline-flex justify-center items-center w-7 h-9.5 text-start border border-white/20 text-white rounded-lg shadow-2xs align-middle hover:bg-white/10 disabled:opacity-50 focus:outline-hidden focus:bg-white/10"
                    id="hs-pro-dmh-collapse" aria-expanded="false" aria-controls="hs-pro-dmh"
                    aria-label="Toggle navigation" data-hs-collapse="#hs-pro-dmh">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="1"></circle>
                        <circle cx="12" cy="5" r="1"></circle>
                        <circle cx="12" cy="19" r="1"></circle>
                    </svg>
                </button>
                <!-- End Collapse Button Trigger -->
            </div>
        </div>

        <!-- Nav Links -->
        <div class="md:order-2 basis-full grow md:basis-auto md:ms-5">
            <!-- Collapse -->
            <div id="hs-pro-dmh"
                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block border-b border-white/20 md:border-0"
                aria-labelledby="hs-pro-dmh-collapse">
                <div
                    class="overflow-hidden overflow-y-auto max-h-[75vh] [&amp;::-webkit-scrollbar]:w-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-white/10 [&amp;::-webkit-scrollbar-thumb]:bg-white/30 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500">
                    <div
                        class="flex flex-col md:flex-row md:justify-center md:items-center md:gap-y-0 md:gap-x-2 pt-2 md:pt-0">
                        <a class="py-1.5 px-2 inline-flex items-center gap-x-2 font-medium text-sm whitespace-nowrap rounded-md border border-transparent text-white hover:text-white/80 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-white/10 {{ request()->routeIs('home.index')
                            ? 'bg-white/10'
                            : '' }}"
                            href="{{ route('home.index') }}">
                            Home
                        </a>
                        <a class="py-1.5 px-2 inline-flex items-center gap-x-2 font-medium text-sm whitespace-nowrap rounded-md border border-transparent text-white hover:text-white/80 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-white/10 {{ request()->routeIs('motor.index')
                            ? 'bg-white/10'
                            : '' }}"
                            href="{{ route('motor.index') }}">
                            Speedo Motor Honda
                        </a>
                        <a class="py-1.5 px-2 inline-flex items-center gap-x-2 font-medium text-sm whitespace-nowrap rounded-md border border-transparent text-white hover:text-white/80 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-white/10 {{ request()->routeIs('rekap-kpb.index')
                            ? 'bg-white/10'
                            : '' }}"
                            href="{{ route('rekap-kpb.index') }}">
                            Rekap KPB
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Collapse -->
        </div>
        <!-- End Nav Links -->
    </div>
</header>
<!-- ========== END HEADER ========== -->
