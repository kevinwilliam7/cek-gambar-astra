@extends('layouts.app')
@section('title', 'Ahass | Rekap KPB')
@section('main-content')
<div class="p-2 pb-10 sm:p-5 sm:pb-20">
      <!-- Heading -->
      <div class="pb-5 mb-5 flex justify-between items-center border-b border-gray-200 dark:border-neutral-700">
        <div>
          <h1 class="inline-block text-lg font-semibold text-gray-800 dark:text-neutral-200">
            Welcome to Files
          </h1>
        </div>

        <div class="flex items-center gap-x-2">
          <button type="button" class="py-1.5 sm:py-2 px-2.5 inline-flex items-center gap-x-1.5 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:ring-2 focus:ring-blue-500" data-hs-overlay="#hs-pro-dumf" aria-expanded="false">
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m18 9-6-6-6 6"></path>
              <path d="M12 3v14"></path>
              <path d="M5 21h14"></path>
            </svg>
            Upload or drop
          </button>
        </div>
      </div>
      <!-- End Heading -->

      <div class="flex flex-col gap-y-10">


        <div>
          <!-- Heading -->
          <div class="mb-3">
            <h2 class="inline-block font-medium text-gray-800 dark:text-neutral-200">
              Folders
            </h2>
          </div>
          <!-- End Heading -->

          <!-- Card Group -->
          <div class="flex flex-row gap-3 overflow-x-auto pb-1.5 [&amp;::-webkit-scrollbar]:h-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-200 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500">
            <!-- Card -->
            <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
              <a class="hs-dropdown-toggle p-1 block w-56 bg-white rounded-xl shadow-xs focus:outline-hidden dark:bg-neutral-800" href="#">
                <div class="p-3 flex items-center gap-x-2 rounded-lg group-hover:bg-gray-100 group-focus:bg-gray-100 dark:group-hover:bg-neutral-700 dark:group-focus:bg-neutral-700">
                  <svg class="shrink-0 size-4 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 14 1.5-2.9A2 2 0 0 1 9.24 10H20a2 2 0 0 1 1.94 2.5l-1.54 6a2 2 0 0 1-1.95 1.5H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h3.9a2 2 0 0 1 1.69.9l.81 1.2a2 2 0 0 0 1.67.9H18a2 2 0 0 1 2 2v2"></path>
                  </svg>
                  <div class="grow">
                    <p class="truncate font-medium text-sm text-gray-800 dark:text-neutral-200">
                      Analytics
                    </p>
                  </div>
                </div>
              </a>

              <!-- More Dropdown -->
              <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                <div class="p-1">
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                      <polyline points="16 6 12 2 8 6"></polyline>
                      <line x1="12" x2="12" y1="2" y2="15"></line>
                    </svg>
                    Share folder
                  </button>
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="15 14 20 9 15 4"></polyline>
                      <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                    </svg>
                    Move to
                  </button>
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    Add to starred
                  </button>
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                      <path d="m15 5 4 4"></path>
                    </svg>
                    Rename
                  </button>
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                      <polyline points="7 10 12 15 17 10"></polyline>
                      <line x1="12" x2="12" y1="15" y2="3"></line>
                    </svg>
                    Download
                  </button>

                  <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                      <line x1="4" x2="4" y1="22" y2="15"></line>
                    </svg>
                    Report
                  </button>

                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M3 6h18"></path>
                      <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                      <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                      <line x1="10" x2="10" y1="11" y2="17"></line>
                      <line x1="14" x2="14" y1="11" y2="17"></line>
                    </svg>
                    Delete
                  </button>
                </div>
              </div>
              <!-- End More Dropdown -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
              <a class="hs-dropdown-toggle p-1 block w-56 bg-white rounded-xl shadow-xs focus:outline-hidden dark:bg-neutral-800" href="#">
                <div class="p-3 flex items-center gap-x-2 rounded-lg group-hover:bg-gray-100 group-focus:bg-gray-100 dark:group-hover:bg-neutral-700 dark:group-focus:bg-neutral-700">
                  <svg class="shrink-0 size-4 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 14 1.5-2.9A2 2 0 0 1 9.24 10H20a2 2 0 0 1 1.94 2.5l-1.54 6a2 2 0 0 1-1.95 1.5H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h3.9a2 2 0 0 1 1.69.9l.81 1.2a2 2 0 0 0 1.67.9H18a2 2 0 0 1 2 2v2"></path>
                  </svg>
                  <div class="grow">
                    <p class="truncate font-medium text-sm text-gray-800 dark:text-neutral-200">
                      Invoice
                    </p>
                  </div>
                </div>
              </a>

              <!-- More Dropdown -->
              <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                <div class="p-1">
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                      <polyline points="16 6 12 2 8 6"></polyline>
                      <line x1="12" x2="12" y1="2" y2="15"></line>
                    </svg>
                    Share folder
                  </button>
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="15 14 20 9 15 4"></polyline>
                      <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                    </svg>
                    Move to
                  </button>
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    Add to starred
                  </button>
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                      <path d="m15 5 4 4"></path>
                    </svg>
                    Rename
                  </button>
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                      <polyline points="7 10 12 15 17 10"></polyline>
                      <line x1="12" x2="12" y1="15" y2="3"></line>
                    </svg>
                    Download
                  </button>

                  <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                      <line x1="4" x2="4" y1="22" y2="15"></line>
                    </svg>
                    Report
                  </button>

                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M3 6h18"></path>
                      <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                      <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                      <line x1="10" x2="10" y1="11" y2="17"></line>
                      <line x1="14" x2="14" y1="11" y2="17"></line>
                    </svg>
                    Delete
                  </button>
                </div>
              </div>
              <!-- End More Dropdown -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
              <a class="hs-dropdown-toggle p-1 block w-56 bg-white rounded-xl shadow-xs focus:outline-hidden dark:bg-neutral-800" href="#">
                <div class="p-3 flex items-center gap-x-2 rounded-lg group-hover:bg-gray-100 group-focus:bg-gray-100 dark:group-hover:bg-neutral-700 dark:group-focus:bg-neutral-700">
                  <svg class="shrink-0 size-4 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 14 1.5-2.9A2 2 0 0 1 9.24 10H20a2 2 0 0 1 1.94 2.5l-1.54 6a2 2 0 0 1-1.95 1.5H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h3.9a2 2 0 0 1 1.69.9l.81 1.2a2 2 0 0 0 1.67.9H18a2 2 0 0 1 2 2v2"></path>
                  </svg>
                  <div class="grow">
                    <p class="truncate font-medium text-sm text-gray-800 dark:text-neutral-200">
                      Audits
                    </p>
                  </div>
                </div>
              </a>

              <!-- More Dropdown -->
              <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                <div class="p-1">
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                      <polyline points="16 6 12 2 8 6"></polyline>
                      <line x1="12" x2="12" y1="2" y2="15"></line>
                    </svg>
                    Share folder
                  </button>
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="15 14 20 9 15 4"></polyline>
                      <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                    </svg>
                    Move to
                  </button>
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    Add to starred
                  </button>
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                      <path d="m15 5 4 4"></path>
                    </svg>
                    Rename
                  </button>
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                      <polyline points="7 10 12 15 17 10"></polyline>
                      <line x1="12" x2="12" y1="15" y2="3"></line>
                    </svg>
                    Download
                  </button>

                  <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                      <line x1="4" x2="4" y1="22" y2="15"></line>
                    </svg>
                    Report
                  </button>

                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M3 6h18"></path>
                      <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                      <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                      <line x1="10" x2="10" y1="11" y2="17"></line>
                      <line x1="14" x2="14" y1="11" y2="17"></line>
                    </svg>
                    Delete
                  </button>
                </div>
              </div>
              <!-- End More Dropdown -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
              <a class="hs-dropdown-toggle p-1 block w-56 bg-white rounded-xl shadow-xs focus:outline-hidden dark:bg-neutral-800" href="#">
                <div class="p-3 flex items-center gap-x-2 rounded-lg group-hover:bg-gray-100 group-focus:bg-gray-100 dark:group-hover:bg-neutral-700 dark:group-focus:bg-neutral-700">
                  <svg class="shrink-0 size-4 text-gray-800 dark:text-neutral-200" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 14 1.5-2.9A2 2 0 0 1 9.24 10H20a2 2 0 0 1 1.94 2.5l-1.54 6a2 2 0 0 1-1.95 1.5H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h3.9a2 2 0 0 1 1.69.9l.81 1.2a2 2 0 0 0 1.67.9H18a2 2 0 0 1 2 2v2"></path>
                  </svg>
                  <div class="grow">
                    <p class="truncate font-medium text-sm text-gray-800 dark:text-neutral-200">
                      Untitled
                    </p>
                  </div>
                </div>
              </a>

              <!-- More Dropdown -->
              <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                <div class="p-1">
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                      <polyline points="16 6 12 2 8 6"></polyline>
                      <line x1="12" x2="12" y1="2" y2="15"></line>
                    </svg>
                    Share folder
                  </button>
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <polyline points="15 14 20 9 15 4"></polyline>
                      <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                    </svg>
                    Move to
                  </button>
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                    Add to starred
                  </button>
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                      <path d="m15 5 4 4"></path>
                    </svg>
                    Rename
                  </button>
                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                      <polyline points="7 10 12 15 17 10"></polyline>
                      <line x1="12" x2="12" y1="15" y2="3"></line>
                    </svg>
                    Download
                  </button>

                  <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                      <line x1="4" x2="4" y1="22" y2="15"></line>
                    </svg>
                    Report
                  </button>

                  <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M3 6h18"></path>
                      <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                      <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                      <line x1="10" x2="10" y1="11" y2="17"></line>
                      <line x1="14" x2="14" y1="11" y2="17"></line>
                    </svg>
                    Delete
                  </button>
                </div>
              </div>
              <!-- End More Dropdown -->
            </div>
            <!-- End Card -->
          </div>
          <!-- End Card Group -->
        </div>

        <div>
          <!-- Heading -->
          <div class="mb-3">
            <h2 class="inline-block font-medium text-gray-800 dark:text-neutral-200">
              All files
            </h2>

            <!-- Filter Group -->
            <div class="flex flex-wrap justify-between items-center gap-1 sm:gap-5">
              <!-- Select -->
              <div class="relative inline-flex items-center">
                <span class="me-1 text-xs sm:text-sm text-gray-500 dark:text-neutral-500">Filter:</span>
                <div class="hs-select relative"><select data-hs-select="{
                    &quot;placeholder&quot;: &quot;Filter&quot;,
                    &quot;toggleTag&quot;: &quot;&lt;button type=\&quot;button\&quot; aria-expanded=\&quot;false\&quot;&gt;&lt;/button&gt;&quot;,
                    &quot;toggleClasses&quot;: &quot;hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-1 ps-1.5 pe-7 inline-flex shrink-0 justify-center items-center gap-x-1.5 border border-transparent text-sm text-gray-800 rounded-lg hover:bg-gray-100 hover:text-gray-800 focus:outline-hidden focus:bg-gray-100 before:absolute before:inset-0 before:z-1 dark:text-neutral-200 dark:bg-neutral-900 dark:hover:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800&quot;,
                    &quot;dropdownClasses&quot;: &quot;start-0 mt-2 p-1 z-50 w-40 sm:w-44 bg-white rounded-xl shadow-xl dark:bg-neutral-800&quot;,
                    &quot;optionClasses&quot;: &quot;flex items-center gap-x-3 py-2 px-3 text-xs sm:text-[13px] text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700&quot;,
                    &quot;optionTemplate&quot;: &quot;&lt;div class=\&quot;flex items-center w-full\&quot;&gt;&lt;div class=\&quot;me-2 sm:me-3\&quot; data-icon&gt;&lt;/div&gt;&lt;span data-title&gt;&lt;/span&gt;&lt;span class=\&quot;hidden hs-selected:block ms-auto\&quot;&gt;&lt;svg class=\&quot;shrink-0 size-3.5 text-gray-800 dark:text-neutral-200\&quot; xmlns=\&quot;http:.w3.org/2000/svg\&quot; width=\&quot;24\&quot; height=\&quot;24\&quot; viewBox=\&quot;0 0 24 24\&quot; fill=\&quot;none\&quot; stroke=\&quot;currentColor\&quot; stroke-width=\&quot;2\&quot; stroke-linecap=\&quot;round\&quot; stroke-linejoin=\&quot;round\&quot;&gt;&lt;polyline points=\&quot;20 6 9 17 4 12\&quot;/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;&quot;
                  }" class="hidden" style="display: none;">








                <option value="">Choose</option><option selected="" data-hs-select-option="{
                    &quot;icon&quot;: &quot;&lt;svg class=\&quot;shrink-0 size-3 sm:size-3.5\&quot; xmlns=\&quot;http://www.w3.org/2000/svg\&quot; width=\&quot;24\&quot; height=\&quot;24\&quot; viewBox=\&quot;0 0 24 24\&quot; fill=\&quot;none\&quot; stroke=\&quot;currentColor\&quot; stroke-width=\&quot;2\&quot; stroke-linecap=\&quot;round\&quot; stroke-linejoin=\&quot;round\&quot;&gt;&lt;path d=\&quot;M7 2h10\&quot;/&gt;&lt;path d=\&quot;M5 6h14\&quot;/&gt;&lt;rect width=\&quot;18\&quot; height=\&quot;12\&quot; x=\&quot;3\&quot; y=\&quot;10\&quot; rx=\&quot;2\&quot;/&gt;&lt;/svg&gt;&quot;}">
                    All files
                  </option><option data-hs-select-option="{
                    &quot;icon&quot;: &quot;&lt;svg class=\&quot;shrink-0 size-3 sm:size-3.5\&quot; xmlns=\&quot;http://www.w3.org/2000/svg\&quot; width=\&quot;24\&quot; height=\&quot;24\&quot; viewBox=\&quot;0 0 24 24\&quot; fill=\&quot;none\&quot; stroke=\&quot;currentColor\&quot; stroke-width=\&quot;2\&quot; stroke-linecap=\&quot;round\&quot; stroke-linejoin=\&quot;round\&quot;&gt;&lt;path d=\&quot;M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z\&quot;/&gt;&lt;polyline points=\&quot;14 2 14 8 20 8\&quot;/&gt;&lt;line x1=\&quot;16\&quot; x2=\&quot;8\&quot; y1=\&quot;13\&quot; y2=\&quot;13\&quot;/&gt;&lt;line x1=\&quot;16\&quot; x2=\&quot;8\&quot; y1=\&quot;17\&quot; y2=\&quot;17\&quot;/&gt;&lt;line x1=\&quot;10\&quot; x2=\&quot;8\&quot; y1=\&quot;9\&quot; y2=\&quot;9\&quot;/&gt;&lt;/svg&gt;&quot;}">
                    Documents
                  </option><option data-hs-select-option="{
                    &quot;icon&quot;: &quot;&lt;svg class=\&quot;shrink-0 size-3 sm:size-3.5\&quot; xmlns=\&quot;http://www.w3.org/2000/svg\&quot; width=\&quot;24\&quot; height=\&quot;24\&quot; viewBox=\&quot;0 0 24 24\&quot; fill=\&quot;none\&quot; stroke=\&quot;currentColor\&quot; stroke-width=\&quot;2\&quot; stroke-linecap=\&quot;round\&quot; stroke-linejoin=\&quot;round\&quot;&gt;&lt;rect width=\&quot;18\&quot; height=\&quot;18\&quot; x=\&quot;3\&quot; y=\&quot;3\&quot; rx=\&quot;2\&quot; ry=\&quot;2\&quot;/&gt;&lt;circle cx=\&quot;9\&quot; cy=\&quot;9\&quot; r=\&quot;2\&quot;/&gt;&lt;path d=\&quot;m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21\&quot;/&gt;&lt;/svg&gt;&quot;}">
                    Images
                  </option><option data-hs-select-option="{
                    &quot;icon&quot;: &quot;&lt;svg class=\&quot;shrink-0 size-3 sm:size-3.5\&quot; xmlns=\&quot;http://www.w3.org/2000/svg\&quot; width=\&quot;24\&quot; height=\&quot;24\&quot; viewBox=\&quot;0 0 24 24\&quot; fill=\&quot;none\&quot; stroke=\&quot;currentColor\&quot; stroke-width=\&quot;2\&quot; stroke-linecap=\&quot;round\&quot; stroke-linejoin=\&quot;round\&quot;&gt;&lt;polyline points=\&quot;16 18 22 12 16 6\&quot;/&gt;&lt;polyline points=\&quot;8 6 2 12 8 18\&quot;/&gt;&lt;/svg&gt;&quot;}">
                    Snippets
                  </option><option data-hs-select-option="{
                    &quot;icon&quot;: &quot;&lt;svg class=\&quot;shrink-0 size-3 sm:size-3.5\&quot; xmlns=\&quot;http://www.w3.org/2000/svg\&quot; width=\&quot;24\&quot; height=\&quot;24\&quot; viewBox=\&quot;0 0 24 24\&quot; fill=\&quot;none\&quot; stroke=\&quot;currentColor\&quot; stroke-width=\&quot;2\&quot; stroke-linecap=\&quot;round\&quot; stroke-linejoin=\&quot;round\&quot;&gt;&lt;path d=\&quot;M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z\&quot;/&gt;&lt;polyline points=\&quot;14 2 14 8 20 8\&quot;/&gt;&lt;path d=\&quot;M8 13h2\&quot;/&gt;&lt;path d=\&quot;M8 17h2\&quot;/&gt;&lt;path d=\&quot;M14 13h2\&quot;/&gt;&lt;path d=\&quot;M14 17h2\&quot;/&gt;&lt;/svg&gt;&quot;}">
                    Spreadsheets
                  </option><option data-hs-select-option="{
                    &quot;icon&quot;: &quot;&lt;svg class=\&quot;shrink-0 size-3 sm:size-3.5\&quot; xmlns=\&quot;http://www.w3.org/2000/svg\&quot; width=\&quot;24\&quot; height=\&quot;24\&quot; viewBox=\&quot;0 0 24 24\&quot; fill=\&quot;none\&quot; stroke=\&quot;currentColor\&quot; stroke-width=\&quot;2\&quot; stroke-linecap=\&quot;round\&quot; stroke-linejoin=\&quot;round\&quot;&gt;&lt;polygon points=\&quot;11 5 6 9 2 9 2 15 6 15 11 19 11 5\&quot;/&gt;&lt;path d=\&quot;M15.54 8.46a5 5 0 0 1 0 7.07\&quot;/&gt;&lt;path d=\&quot;M19.07 4.93a10 10 0 0 1 0 14.14\&quot;/&gt;&lt;/svg&gt;&quot;}">
                    Audio
                  </option><option data-hs-select-option="{
                    &quot;icon&quot;: &quot;&lt;svg class=\&quot;shrink-0 size-3 sm:size-3.5\&quot; xmlns=\&quot;http://www.w3.org/2000/svg\&quot; width=\&quot;24\&quot; height=\&quot;24\&quot; viewBox=\&quot;0 0 24 24\&quot; fill=\&quot;none\&quot; stroke=\&quot;currentColor\&quot; stroke-width=\&quot;2\&quot; stroke-linecap=\&quot;round\&quot; stroke-linejoin=\&quot;round\&quot;&gt;&lt;path d=\&quot;m22 8-6 4 6 4V8Z\&quot;/&gt;&lt;rect width=\&quot;14\&quot; height=\&quot;12\&quot; x=\&quot;2\&quot; y=\&quot;6\&quot; rx=\&quot;2\&quot; ry=\&quot;2\&quot;/&gt;&lt;/svg&gt;&quot;}">
                    Videos
                  </option></select><button type="button" aria-expanded="false" class="hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-1 ps-1.5 pe-7 inline-flex shrink-0 justify-center items-center gap-x-1.5 border border-transparent text-sm text-gray-800 rounded-lg hover:bg-gray-100 hover:text-gray-800 focus:outline-hidden focus:bg-gray-100 before:absolute before:inset-0 before:z-1 dark:text-neutral-200 dark:bg-neutral-900 dark:hover:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"><span class="truncate">
                    All files
                  </span></button><div data-hs-select-dropdown="" class="absolute start-0 mt-2 p-1 z-50 w-40 sm:w-44 bg-white rounded-xl shadow-xl dark:bg-neutral-800 hidden" role="listbox" tabindex="-1" aria-orientation="vertical" style=""><div data-value="All files" data-title-value="
                    All files
                  " tabindex="0" class="cursor-pointer selected flex items-center gap-x-3 py-2 px-3 text-xs sm:text-[13px] text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-id="0"><div class="flex items-center w-full"><div class="me-2 sm:me-3" data-icon=""><svg class="shrink-0 size-3 sm:size-3.5 max-w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 2h10"></path><path d="M5 6h14"></path><rect width="18" height="12" x="3" y="10" rx="2"></rect></svg></div><span data-title="">
                    All files
                  </span><span class="hidden hs-selected:block ms-auto"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="Documents" data-title-value="
                    Documents
                  " tabindex="1" class="cursor-pointer flex items-center gap-x-3 py-2 px-3 text-xs sm:text-[13px] text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-id="1"><div class="flex items-center w-full"><div class="me-2 sm:me-3" data-icon=""><svg class="shrink-0 size-3 sm:size-3.5 max-w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" x2="8" y1="13" y2="13"></line><line x1="16" x2="8" y1="17" y2="17"></line><line x1="10" x2="8" y1="9" y2="9"></line></svg></div><span data-title="">
                    Documents
                  </span><span class="hidden hs-selected:block ms-auto"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="Images" data-title-value="
                    Images
                  " tabindex="2" class="cursor-pointer flex items-center gap-x-3 py-2 px-3 text-xs sm:text-[13px] text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-id="2"><div class="flex items-center w-full"><div class="me-2 sm:me-3" data-icon=""><svg class="shrink-0 size-3 sm:size-3.5 max-w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect><circle cx="9" cy="9" r="2"></circle><path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path></svg></div><span data-title="">
                    Images
                  </span><span class="hidden hs-selected:block ms-auto"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="Snippets" data-title-value="
                    Snippets
                  " tabindex="3" class="cursor-pointer flex items-center gap-x-3 py-2 px-3 text-xs sm:text-[13px] text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-id="3"><div class="flex items-center w-full"><div class="me-2 sm:me-3" data-icon=""><svg class="shrink-0 size-3 sm:size-3.5 max-w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg></div><span data-title="">
                    Snippets
                  </span><span class="hidden hs-selected:block ms-auto"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="Spreadsheets" data-title-value="
                    Spreadsheets
                  " tabindex="4" class="cursor-pointer flex items-center gap-x-3 py-2 px-3 text-xs sm:text-[13px] text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-id="4"><div class="flex items-center w-full"><div class="me-2 sm:me-3" data-icon=""><svg class="shrink-0 size-3 sm:size-3.5 max-w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path><polyline points="14 2 14 8 20 8"></polyline><path d="M8 13h2"></path><path d="M8 17h2"></path><path d="M14 13h2"></path><path d="M14 17h2"></path></svg></div><span data-title="">
                    Spreadsheets
                  </span><span class="hidden hs-selected:block ms-auto"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="Audio" data-title-value="
                    Audio
                  " tabindex="5" class="cursor-pointer flex items-center gap-x-3 py-2 px-3 text-xs sm:text-[13px] text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-id="5"><div class="flex items-center w-full"><div class="me-2 sm:me-3" data-icon=""><svg class="shrink-0 size-3 sm:size-3.5 max-w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon><path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path><path d="M19.07 4.93a10 10 0 0 1 0 14.14"></path></svg></div><span data-title="">
                    Audio
                  </span><span class="hidden hs-selected:block ms-auto"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="Videos" data-title-value="
                    Videos
                  " tabindex="6" class="cursor-pointer flex items-center gap-x-3 py-2 px-3 text-xs sm:text-[13px] text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-id="6"><div class="flex items-center w-full"><div class="me-2 sm:me-3" data-icon=""><svg class="shrink-0 size-3 sm:size-3.5 max-w-full" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m22 8-6 4 6 4V8Z"></path><rect width="14" height="12" x="2" y="6" rx="2" ry="2"></rect></svg></div><span data-title="">
                    Videos
                  </span><span class="hidden hs-selected:block ms-auto"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div></div></div>

                <div class="absolute top-1/2 end-2 sm:end-1.5 -translate-y-1/2">
                  <svg class="shrink-0 size-3 sm:size-4 text-gray-700 dark:text-neutral-300" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="m6 9 6 6 6-6"></path>
                  </svg>
                </div>
              </div>
              <!-- End Select -->

              <!-- Form Group -->
              <div class="flex justify-end items-center gap-x-2">
                <!-- Select -->
                <div class="relative inline-flex items-center">
                  <span class="me-1 text-xs sm:text-sm text-gray-500 dark:text-neutral-500">Sort:</span>
                  <div class="hs-select relative"><select data-hs-select="{
                      &quot;placeholder&quot;: &quot;Sort&quot;,
                      &quot;toggleTag&quot;: &quot;&lt;button type=\&quot;button\&quot; aria-expanded=\&quot;false\&quot;&gt;&lt;/button&gt;&quot;,
                      &quot;toggleClasses&quot;: &quot;hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-1 ps-1.5 pe-7 inline-flex shrink-0 justify-center items-center gap-x-1.5 border border-transparent text-sm text-gray-800 rounded-lg hover:bg-gray-100 hover:text-gray-800 focus:outline-hidden focus:bg-gray-100 before:absolute before:inset-0 before:z-1 dark:text-neutral-200 dark:bg-neutral-900 dark:hover:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800&quot;,
                      &quot;dropdownClasses&quot;: &quot;end-0 mt-2 p-1 z-50 w-32 bg-white rounded-xl shadow-xl dark:bg-neutral-800&quot;,
                      &quot;optionClasses&quot;: &quot;flex items-center gap-x-3 py-2 px-3 text-xs sm:text-[13px] text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700&quot;,
                      &quot;optionTemplate&quot;: &quot;&lt;div class=\&quot;flex justify-between items-center w-full\&quot;&gt;&lt;span data-title&gt;&lt;/span&gt;&lt;span class=\&quot;hidden hs-selected:block\&quot;&gt;&lt;svg class=\&quot;shrink-0 size-3.5 text-gray-800 dark:text-neutral-200\&quot; xmlns=\&quot;http:.w3.org/2000/svg\&quot; width=\&quot;24\&quot; height=\&quot;24\&quot; viewBox=\&quot;0 0 24 24\&quot; fill=\&quot;none\&quot; stroke=\&quot;currentColor\&quot; stroke-width=\&quot;2\&quot; stroke-linecap=\&quot;round\&quot; stroke-linejoin=\&quot;round\&quot;&gt;&lt;polyline points=\&quot;20 6 9 17 4 12\&quot;/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;&quot;
                    }" class="hidden" style="display: none;">





                  <option value="">Choose</option><option selected="">Newest file</option><option>Oldest file</option><option>A to Z</option><option>Z to A</option></select><button type="button" aria-expanded="false" class="hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-1 ps-1.5 pe-7 inline-flex shrink-0 justify-center items-center gap-x-1.5 border border-transparent text-sm text-gray-800 rounded-lg hover:bg-gray-100 hover:text-gray-800 focus:outline-hidden focus:bg-gray-100 before:absolute before:inset-0 before:z-1 dark:text-neutral-200 dark:bg-neutral-900 dark:hover:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"><span class="truncate">Newest file</span></button><div data-hs-select-dropdown="" class="absolute top-full hidden end-0 mt-2 p-1 z-50 w-32 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="listbox" tabindex="-1" aria-orientation="vertical"><div data-value="Newest file" data-title-value="Newest file" tabindex="0" class="cursor-pointer selected flex items-center gap-x-3 py-2 px-3 text-xs sm:text-[13px] text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-id="0"><div class="flex justify-between items-center w-full"><span data-title="">Newest file</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="Oldest file" data-title-value="Oldest file" tabindex="1" class="cursor-pointer flex items-center gap-x-3 py-2 px-3 text-xs sm:text-[13px] text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-id="1"><div class="flex justify-between items-center w-full"><span data-title="">Oldest file</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="A to Z" data-title-value="A to Z" tabindex="2" class="cursor-pointer flex items-center gap-x-3 py-2 px-3 text-xs sm:text-[13px] text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-id="2"><div class="flex justify-between items-center w-full"><span data-title="">A to Z</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="Z to A" data-title-value="Z to A" tabindex="3" class="cursor-pointer flex items-center gap-x-3 py-2 px-3 text-xs sm:text-[13px] text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" data-id="3"><div class="flex justify-between items-center w-full"><span data-title="">Z to A</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div></div></div>

                  <div class="absolute top-1/2 end-2 sm:end-1.5 -translate-y-1/2">
                    <svg class="shrink-0 size-3 sm:size-4 text-gray-700 dark:text-neutral-300" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </div>
                </div>
                <!-- End Select -->

                <!-- Button Group -->
                <nav class="flex items-center" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                  <button type="button" class="hs-tab-active:bg-gray-200 hs-tab-active:focus:bg-gray-200 hs-tab-active:focus:text-gray-800 flex shrink-0 justify-center items-center size-7.5 border-md text-gray-800 rounded-md disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:text-gray-500 dark:text-neutral-200 dark:focus:text-neutral-500 dark:hs-tab-active:bg-neutral-700 dark:focus:hs-tab-active:text-neutral-200 dark:focus:hs-tab-active:bg-neutral-600" id="hs-pro-tabs-fdflt-item-grid" aria-selected="false" data-hs-tab="#hs-pro-tabs-fdflt-grid" aria-controls="hs-pro-tabs-fdflt-grid" role="tab">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <rect width="7" height="7" x="3" y="3" rx="1"></rect>
                      <rect width="7" height="7" x="14" y="3" rx="1"></rect>
                      <rect width="7" height="7" x="14" y="14" rx="1"></rect>
                      <rect width="7" height="7" x="3" y="14" rx="1"></rect>
                    </svg>
                    <span class="sr-only">Grid</span>
                  </button>
                  <button type="button" class="hs-tab-active:bg-gray-200 hs-tab-active:focus:bg-gray-200 hs-tab-active:focus:text-gray-800 flex shrink-0 justify-center items-center size-7.5 border-md text-gray-800 rounded-md disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:text-gray-500 dark:text-neutral-200 dark:focus:text-neutral-500 dark:hs-tab-active:bg-neutral-700 dark:focus:hs-tab-active:text-neutral-200 dark:focus:hs-tab-active:bg-neutral-600 active" id="hs-pro-tabs-fdflt-item-listing" aria-selected="true" data-hs-tab="#hs-pro-tabs-fdflt-listing" aria-controls="hs-pro-tabs-fdflt-listing" role="tab">
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <line x1="3" x2="21" y1="6" y2="6"></line>
                      <line x1="3" x2="21" y1="12" y2="12"></line>
                      <line x1="3" x2="21" y1="18" y2="18"></line>
                    </svg>
                    <span class="sr-only">List</span>
                  </button>
                </nav>
                <!-- End Button Group -->
              </div>
              <!-- End Form Group -->
            </div>
            <!-- End Filter Group -->
          </div>
          <!-- End Heading -->

          <!-- Tab Content -->
          <div id="hs-pro-tabs-fdflt-grid" class="hidden" role="tabpanel" aria-labelledby="hs-pro-tabs-fdflt-item-grid">

            <div class="flex flex-col gap-y-8">
              <div>
                <!-- Heading -->
                <div class="mb-3">
                  <h4 class="text-xs text-gray-500 dark:text-neutral-500">
                    This week
                  </h4>
                </div>
                <!-- End Heading -->

                <!-- Card Group -->
                <div class="flex flex-row gap-3 overflow-x-auto pb-1.5 [&amp;::-webkit-scrollbar]:h-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-200 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500">
                  <!-- Card -->
                  <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                    <div class="hs-dropdown-toggle relative p-1 block w-56 bg-white rounded-xl shadow-xs dark:bg-neutral-800">
                      <div class="p-3 h-42 bg-white rounded-lg group-hover:bg-gray-100 group-focus:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700 dark:group-focus:bg-neutral-700">
                        <div class="size-full flex shrink-0 justify-center items-center">
                          <img class="size-full object-cover object-center" src="https://images.unsplash.com/photo-1678851836066-dc27614cc56b?q=80&amp;w=480&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Untitled Image">
                        </div>
                      </div>

                      <div class="p-3">
                        <p class="truncate font-medium text-sm text-gray-800 dark:text-neutral-200">
                          Untitled
                        </p>

                        <ul class="text-xs truncate text-gray-500 dark:text-neutral-500">
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">PDF</span>
                          </li>
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">309 kb</span>
                          </li>
                        </ul>
                      </div>

                      <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                    </div>

                    <!-- More Dropdown -->
                    <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                      <div class="p-1">
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                            <polyline points="16 6 12 2 8 6"></polyline>
                            <line x1="12" x2="12" y1="2" y2="15"></line>
                          </svg>
                          Share folder
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 14 20 9 15 4"></polyline>
                            <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                          </svg>
                          Move to
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                          </svg>
                          Add to starred
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                            <path d="m15 5 4 4"></path>
                          </svg>
                          Rename
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" x2="12" y1="15" y2="3"></line>
                          </svg>
                          Download
                        </button>

                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                            <line x1="4" x2="4" y1="22" y2="15"></line>
                          </svg>
                          Report
                        </button>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 6h18"></path>
                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                            <line x1="10" x2="10" y1="11" y2="17"></line>
                            <line x1="14" x2="14" y1="11" y2="17"></line>
                          </svg>
                          Delete
                        </button>
                      </div>
                    </div>
                    <!-- End More Dropdown -->
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                    <div class="hs-dropdown-toggle relative p-1 block w-56 bg-white rounded-xl shadow-xs dark:bg-neutral-800">
                      <div class="p-3 h-42 bg-white rounded-lg group-hover:bg-gray-100 group-focus:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700 dark:group-focus:bg-neutral-700">
                        <div class="size-full flex shrink-0 justify-center items-center">
                          <svg class="shrink-0 size-16 mx-auto text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                            <path d="M16 4V1a1.003 1.003 0 0 0-1-1H4a1 1 0 0 0-1 1v3l6.5 1.379z" fill="#41a5ee"></path>
                            <path fill="#2b7cd3" d="M15.999 4h-13v4L9.5 9.168 15.999 8V4z"></path>
                            <path fill="#185abd" d="M16 8H3v4l6.499 1L16 12V8z"></path>
                            <path d="M3 12v3a1.003 1.003 0 0 0 1 1h11a1 1 0 0 0 1-1v-3z" fill="#103f91"></path>
                            <path d="M10 4.003L3 4l.002 10H9a2 2 0 0 0 2-2V5.002a1 1 0 0 0-1-1z" opacity=".5"></path>
                            <rect y="3" width="10" height="10" rx="1" fill="#185abd"></rect>
                            <path d="M3.352 9.54q.026.213.034.372h.02q.011-.15.045-.364t.065-.36L4.429 5H5.61l.945 4.126a6.335 6.335 0 0 1 .118.778h.016a6.293 6.293 0 0 1 .098-.753L7.543 5h1.075l-1.323 6H6.04l-.901-3.975q-.04-.171-.089-.448t-.06-.401h-.017q-.015.146-.06.435t-.073.427L3.992 11H2.716L1.382 5h1.094L3.3 9.197q.028.13.053.343z" fill="#fff"></path>
                          </svg>
                        </div>
                      </div>

                      <div class="p-3">
                        <p class="truncate font-medium text-sm text-gray-800 dark:text-neutral-200">
                          January 2025 Invoice
                        </p>

                        <ul class="text-xs truncate text-gray-500 dark:text-neutral-500">
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">DOCX</span>
                          </li>
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">20 kb</span>
                          </li>
                        </ul>
                      </div>

                      <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                    </div>

                    <!-- More Dropdown -->
                    <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                      <div class="p-1">
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                            <polyline points="16 6 12 2 8 6"></polyline>
                            <line x1="12" x2="12" y1="2" y2="15"></line>
                          </svg>
                          Share folder
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 14 20 9 15 4"></polyline>
                            <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                          </svg>
                          Move to
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                          </svg>
                          Add to starred
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                            <path d="m15 5 4 4"></path>
                          </svg>
                          Rename
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" x2="12" y1="15" y2="3"></line>
                          </svg>
                          Download
                        </button>

                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                            <line x1="4" x2="4" y1="22" y2="15"></line>
                          </svg>
                          Report
                        </button>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 6h18"></path>
                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                            <line x1="10" x2="10" y1="11" y2="17"></line>
                            <line x1="14" x2="14" y1="11" y2="17"></line>
                          </svg>
                          Delete
                        </button>
                      </div>
                    </div>
                    <!-- End More Dropdown -->
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Card Group -->
              </div>

              <div>
                <!-- Heading -->
                <div class="mb-3">
                  <h4 class="text-xs text-gray-500 dark:text-neutral-500">
                    Last month
                  </h4>
                </div>
                <!-- End Heading -->

                <!-- Card Group -->
                <div class="flex flex-row gap-3 overflow-x-auto pb-1.5 [&amp;::-webkit-scrollbar]:h-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-200 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500">
                  <!-- Card -->
                  <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                    <div class="hs-dropdown-toggle relative p-1 block w-56 bg-white rounded-xl shadow-xs dark:bg-neutral-800">
                      <div class="p-3 h-42 bg-white rounded-lg group-hover:bg-gray-100 group-focus:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700 dark:group-focus:bg-neutral-700">
                        <div class="size-full flex shrink-0 justify-center items-center">
                          <svg class="shrink-0 size-16 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                            <path d="M10 0H4a1.003 1.003 0 0 0-1 1v3l7.001 4L13 9.968 16 8V4z" fill="#21a366"></path>
                            <path fill="#107c41" d="M16 8H3v4l7 1.4 6-1.4V8z"></path>
                            <path d="M3 12v3a1.003 1.003 0 0 0 1 1h11a1 1 0 0 0 1-1v-3z" fill="#185c37"></path>
                            <path d="M10 4H3v10h6a2 2 0 0 0 2-2V5a1 1 0 0 0-1-1z" opacity=".5"></path>
                            <rect y="3" width="10" height="10" rx="1" fill="#107c41"></rect>
                            <path d="M2.292 11l1.942-3.008L2.455 5h1.431l.971 1.912q.134.272.184.406h.013q.096-.217.2-.423L6.293 5h1.314L5.782 7.975 7.652 11H6.255L5.133 8.9A1.753 1.753 0 0 1 5 8.62h-.016a1.324 1.324 0 0 1-.13.271L3.698 11z" fill="#fff"></path>
                            <path d="M16 1v3h-6V0h5a1.003 1.003 0 0 1 1 1z" fill="#33c481"></path>
                          </svg>
                        </div>
                      </div>

                      <div class="p-3">
                        <p class="truncate font-medium text-sm text-gray-800 dark:text-neutral-200">
                          2024 Audit
                        </p>

                        <ul class="text-xs truncate text-gray-500 dark:text-neutral-500">
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">XLS</span>
                          </li>
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">58 kb</span>
                          </li>
                        </ul>
                      </div>

                      <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                    </div>

                    <!-- More Dropdown -->
                    <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                      <div class="p-1">
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                            <polyline points="16 6 12 2 8 6"></polyline>
                            <line x1="12" x2="12" y1="2" y2="15"></line>
                          </svg>
                          Share folder
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 14 20 9 15 4"></polyline>
                            <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                          </svg>
                          Move to
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                          </svg>
                          Add to starred
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                            <path d="m15 5 4 4"></path>
                          </svg>
                          Rename
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" x2="12" y1="15" y2="3"></line>
                          </svg>
                          Download
                        </button>

                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                            <line x1="4" x2="4" y1="22" y2="15"></line>
                          </svg>
                          Report
                        </button>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 6h18"></path>
                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                            <line x1="10" x2="10" y1="11" y2="17"></line>
                            <line x1="14" x2="14" y1="11" y2="17"></line>
                          </svg>
                          Delete
                        </button>
                      </div>
                    </div>
                    <!-- End More Dropdown -->
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                    <div class="hs-dropdown-toggle relative p-1 block w-56 bg-white rounded-xl shadow-xs dark:bg-neutral-800">
                      <div class="p-3 h-42 bg-white rounded-lg group-hover:bg-gray-100 group-focus:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700 dark:group-focus:bg-neutral-700">
                        <div class="size-full flex shrink-0 justify-center items-center">
                          <img class="size-full object-cover object-center" src="https://images.unsplash.com/photo-1737233504527-c5033f0f1430?q=80&amp;w=480&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Desk - House Renovation Image">
                        </div>
                      </div>

                      <div class="p-3">
                        <p class="truncate font-medium text-sm text-gray-800 dark:text-neutral-200">
                          Desk - House Renovation
                        </p>

                        <ul class="text-xs truncate text-gray-500 dark:text-neutral-500">
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">PDF</span>
                          </li>
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">305 kb</span>
                          </li>
                        </ul>
                      </div>

                      <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                    </div>

                    <!-- More Dropdown -->
                    <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                      <div class="p-1">
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                            <polyline points="16 6 12 2 8 6"></polyline>
                            <line x1="12" x2="12" y1="2" y2="15"></line>
                          </svg>
                          Share folder
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 14 20 9 15 4"></polyline>
                            <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                          </svg>
                          Move to
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                          </svg>
                          Add to starred
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                            <path d="m15 5 4 4"></path>
                          </svg>
                          Rename
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" x2="12" y1="15" y2="3"></line>
                          </svg>
                          Download
                        </button>

                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                            <line x1="4" x2="4" y1="22" y2="15"></line>
                          </svg>
                          Report
                        </button>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 6h18"></path>
                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                            <line x1="10" x2="10" y1="11" y2="17"></line>
                            <line x1="14" x2="14" y1="11" y2="17"></line>
                          </svg>
                          Delete
                        </button>
                      </div>
                    </div>
                    <!-- End More Dropdown -->
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                    <div class="hs-dropdown-toggle relative p-1 block w-56 bg-white rounded-xl shadow-xs dark:bg-neutral-800">
                      <div class="p-3 h-42 bg-white rounded-lg group-hover:bg-gray-100 group-focus:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700 dark:group-focus:bg-neutral-700">
                        <div class="size-full flex shrink-0 justify-center items-center">
                          <img class="size-full object-cover object-center" src="https://images.unsplash.com/photo-1737233019359-625e96ec8694?q=80&amp;w=480&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Bedroom - House Renovation Image">
                        </div>
                      </div>

                      <div class="p-3">
                        <p class="truncate font-medium text-sm text-gray-800 dark:text-neutral-200">
                          Bedroom - House Renovation
                        </p>

                        <ul class="text-xs truncate text-gray-500 dark:text-neutral-500">
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">PDF</span>
                          </li>
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">305 kb</span>
                          </li>
                        </ul>
                      </div>

                      <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                    </div>

                    <!-- More Dropdown -->
                    <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                      <div class="p-1">
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                            <polyline points="16 6 12 2 8 6"></polyline>
                            <line x1="12" x2="12" y1="2" y2="15"></line>
                          </svg>
                          Share folder
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 14 20 9 15 4"></polyline>
                            <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                          </svg>
                          Move to
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                          </svg>
                          Add to starred
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                            <path d="m15 5 4 4"></path>
                          </svg>
                          Rename
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" x2="12" y1="15" y2="3"></line>
                          </svg>
                          Download
                        </button>

                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                            <line x1="4" x2="4" y1="22" y2="15"></line>
                          </svg>
                          Report
                        </button>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 6h18"></path>
                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                            <line x1="10" x2="10" y1="11" y2="17"></line>
                            <line x1="14" x2="14" y1="11" y2="17"></line>
                          </svg>
                          Delete
                        </button>
                      </div>
                    </div>
                    <!-- End More Dropdown -->
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                    <div class="hs-dropdown-toggle relative p-1 block w-56 bg-white rounded-xl shadow-xs dark:bg-neutral-800">
                      <div class="p-3 h-42 bg-white rounded-lg group-hover:bg-gray-100 group-focus:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700 dark:group-focus:bg-neutral-700">
                        <div class="size-full flex shrink-0 justify-center items-center">
                          <img class="size-full object-cover object-center" src="https://images.unsplash.com/photo-1737233347389-24bc3f3fe3a1?q=80&amp;w=480&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Work Room - House Renovation Image">
                        </div>
                      </div>

                      <div class="p-3">
                        <p class="truncate font-medium text-sm text-gray-800 dark:text-neutral-200">
                          Work Room - House Renovation
                        </p>

                        <ul class="text-xs truncate text-gray-500 dark:text-neutral-500">
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">PDF</span>
                          </li>
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">98 kb</span>
                          </li>
                        </ul>
                      </div>

                      <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                    </div>

                    <!-- More Dropdown -->
                    <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                      <div class="p-1">
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                            <polyline points="16 6 12 2 8 6"></polyline>
                            <line x1="12" x2="12" y1="2" y2="15"></line>
                          </svg>
                          Share folder
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 14 20 9 15 4"></polyline>
                            <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                          </svg>
                          Move to
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                          </svg>
                          Add to starred
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                            <path d="m15 5 4 4"></path>
                          </svg>
                          Rename
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" x2="12" y1="15" y2="3"></line>
                          </svg>
                          Download
                        </button>

                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                            <line x1="4" x2="4" y1="22" y2="15"></line>
                          </svg>
                          Report
                        </button>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 6h18"></path>
                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                            <line x1="10" x2="10" y1="11" y2="17"></line>
                            <line x1="14" x2="14" y1="11" y2="17"></line>
                          </svg>
                          Delete
                        </button>
                      </div>
                    </div>
                    <!-- End More Dropdown -->
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Card Group -->
              </div>

              <div>
                <!-- Heading -->
                <div class="mb-3">
                  <h4 class="text-xs text-gray-500 dark:text-neutral-500">
                    Older
                  </h4>
                </div>
                <!-- End Heading -->

                <!-- Card Group -->
                <div class="flex flex-row gap-3 overflow-x-auto pb-1.5 [&amp;::-webkit-scrollbar]:h-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-200 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500">
                  <!-- Card -->
                  <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                    <div class="hs-dropdown-toggle relative p-1 block w-56 bg-white rounded-xl shadow-xs dark:bg-neutral-800">
                      <div class="p-3 h-42 bg-white rounded-lg group-hover:bg-gray-100 group-focus:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700 dark:group-focus:bg-neutral-700">
                        <div class="size-full flex shrink-0 justify-center items-center">
                          <svg class="shrink-0 size-16 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                            <path d="M8 0a8.024 8.024 0 0 0-8 8l10 2.363z" fill="#ed6c47"></path>
                            <path d="M8 0v8l4 2.59L16 8a8.024 8.024 0 0 0-8-8z" fill="#ff8f6b"></path>
                            <path d="M16 8A8 8 0 0 1 0 8z" fill="#d35230"></path>
                            <path d="M10 4.003H1.086A7.93 7.93 0 0 0 2.735 14h6.264a2 2 0 0 0 2-2V5.002a1 1 0 0 0-1-1z" opacity=".5"></path>
                            <path d="M10 4.003H1.086A7.93 7.93 0 0 0 2.735 14h6.264a2 2 0 0 0 2-2V5.002a1 1 0 0 0-1-1z" opacity=".1"></path>
                            <rect y="3" width="10" height="10" rx="1" fill="#c43e1c"></rect>
                            <path d="M5.336 5a2.276 2.276 0 0 1 1.56.481 1.766 1.766 0 0 1 .542 1.393 2.019 2.019 0 0 1-.267 1.042 1.827 1.827 0 0 1-.762.71 2.475 2.475 0 0 1-1.144.253H4.182V11h-1.11V5zM4.182 7.962h.956a1.2 1.2 0 0 0 .845-.265 1.009 1.009 0 0 0 .285-.777q0-.991-1.094-.991h-.992z" fill="#fff"></path>
                          </svg>
                        </div>
                      </div>

                      <div class="p-3">
                        <p class="truncate font-medium text-sm text-gray-800 dark:text-neutral-200">
                          Assignment presentation
                        </p>

                        <ul class="text-xs truncate text-gray-500 dark:text-neutral-500">
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">PPTX</span>
                          </li>
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">48 kb</span>
                          </li>
                        </ul>
                      </div>

                      <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                    </div>

                    <!-- More Dropdown -->
                    <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                      <div class="p-1">
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                            <polyline points="16 6 12 2 8 6"></polyline>
                            <line x1="12" x2="12" y1="2" y2="15"></line>
                          </svg>
                          Share folder
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 14 20 9 15 4"></polyline>
                            <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                          </svg>
                          Move to
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                          </svg>
                          Add to starred
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                            <path d="m15 5 4 4"></path>
                          </svg>
                          Rename
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" x2="12" y1="15" y2="3"></line>
                          </svg>
                          Download
                        </button>

                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                            <line x1="4" x2="4" y1="22" y2="15"></line>
                          </svg>
                          Report
                        </button>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 6h18"></path>
                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                            <line x1="10" x2="10" y1="11" y2="17"></line>
                            <line x1="14" x2="14" y1="11" y2="17"></line>
                          </svg>
                          Delete
                        </button>
                      </div>
                    </div>
                    <!-- End More Dropdown -->
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                    <div class="hs-dropdown-toggle relative p-1 block w-56 bg-white rounded-xl shadow-xs dark:bg-neutral-800">
                      <div class="p-3 h-42 bg-white rounded-lg group-hover:bg-gray-100 group-focus:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700 dark:group-focus:bg-neutral-700">
                        <div class="size-full flex shrink-0 justify-center items-center">
                          <svg class="shrink-0 size-16 mx-auto text-blue-400" width="400" height="492" viewBox="0 0 400 492" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip1x019)">
                              <path d="M50.7496 -0.174609C22.9188 -0.174609 -0.0878906 22.4611 -0.0878906 50.6629V440.664C-0.0878906 468.495 22.5478 491.502 50.7496 491.502H349.095C376.926 491.502 399.932 468.866 399.932 440.664V119.683C399.932 119.683 400.675 110.406 396.593 101.129C392.882 92.5945 386.574 86.6573 386.574 86.6573L312.729 13.9263C312.729 13.9263 306.421 7.98906 297.144 3.90722C286.012 -0.916768 274.88 -0.174609 274.88 -0.174609H50.7496Z" fill="currentColor" class="fill-red-500"></path>
                              <path d="M50.7494 16.5238H274.508C274.508 16.5238 283.414 16.5238 290.094 19.4924C296.402 22.09 300.855 26.1718 300.855 26.1718L374.699 98.5317C374.699 98.5317 379.152 103.356 381.378 108.18C383.234 112.262 383.234 119.312 383.234 119.312V119.683V441.035C383.234 459.96 368.02 475.174 349.095 475.174H50.7494C31.8245 475.174 16.6104 459.96 16.6104 441.035V50.6629C16.6104 31.738 31.8245 16.5238 50.7494 16.5238Z" fill="currentColor" class="fill-white dark:fill-neutral-800"></path>
                              <path d="M99.7314 292.976C88.2281 281.472 100.845 265.887 134.242 248.818L155.393 238.427L163.557 220.245C168.009 210.226 175.06 193.898 178.771 184.25L185.45 166.439L180.626 153.08C174.689 136.752 172.833 112.261 176.544 103.356C181.368 91.4812 197.696 92.5944 204.004 105.582C209.199 115.601 208.457 133.784 202.52 156.791L197.696 175.715L202.148 183.137C204.375 187.219 211.425 196.867 217.363 204.288L228.866 218.389L242.967 216.534C288.238 210.597 303.452 220.616 303.452 235.088C303.452 253.27 267.829 254.755 238.143 233.974C231.464 229.15 227.011 224.698 227.011 224.698C227.011 224.698 208.457 228.408 199.18 231.006C189.532 233.603 185.079 235.088 170.978 239.912C170.978 239.912 166.154 246.962 162.814 252.157C150.94 271.453 137.21 287.038 127.191 292.976C117.172 298.171 105.669 298.542 99.7314 292.976ZM117.914 286.296C124.222 282.214 137.581 267 146.487 252.528L150.198 246.591L133.499 255.126C107.895 268.113 96.0207 280.359 101.958 287.781C105.298 291.862 109.75 291.491 117.914 286.296ZM285.27 239.541C291.578 235.088 290.836 226.182 283.414 222.471C277.848 219.502 273.395 219.131 258.923 219.131C250.017 219.874 235.916 221.358 233.319 222.1C233.319 222.1 241.112 227.666 244.451 229.522C248.904 232.119 260.407 236.943 268.571 239.541C276.735 242.138 281.559 242.138 285.27 239.541ZM217.734 211.339C214.023 207.257 207.344 199.093 203.262 192.785C197.696 185.735 195.098 180.911 195.098 180.911C195.098 180.911 191.016 193.527 188.048 201.32L178.029 226.182L175.06 231.748C175.06 231.748 190.645 226.553 198.438 224.698C206.972 222.471 223.671 219.131 223.671 219.131L217.734 211.339ZM196.211 124.507C197.324 116.343 197.696 108.18 195.098 104.098C187.677 96.3051 179.142 102.613 180.626 121.538C180.997 127.847 182.853 138.979 184.708 145.658L188.419 157.904L191.016 148.627C192.501 143.803 194.727 132.671 196.211 124.507Z" fill="currentColor" class="fill-red-500"></path>
                              <path d="M119.398 346.04H137.952C143.889 346.04 148.713 346.782 152.424 347.895C156.135 349.008 159.104 351.606 161.701 355.316C164.299 359.027 165.412 363.851 165.412 369.046C165.412 373.87 164.299 378.323 162.443 381.663C160.217 385.374 157.619 387.971 154.28 389.455C150.94 390.94 145.374 391.682 138.323 391.682H132.015V420.997H119.398V346.04ZM132.015 355.688V382.034H138.323C143.889 382.034 147.6 380.921 149.827 379.065C152.053 376.839 153.166 373.499 153.166 369.046C153.166 365.707 152.424 362.738 150.94 360.512C149.456 358.285 147.971 357.172 146.487 356.43C145.003 356.059 142.034 355.688 138.694 355.688H132.015Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                              <path d="M175.431 346.04H192.501C200.664 346.04 207.344 347.524 212.168 350.492C216.992 353.461 220.702 357.543 223.3 363.48C225.898 369.046 227.011 375.726 227.011 382.405C227.011 389.827 225.898 396.506 223.671 402.072C221.445 407.638 218.105 412.462 213.281 415.802C208.828 419.513 202.149 420.997 193.243 420.997H175.431V346.04ZM187.677 356.059V411.349H192.872C200.293 411.349 205.488 408.751 208.828 403.927C212.168 398.732 213.652 392.053 213.652 383.889C213.652 365.336 206.602 356.059 192.872 356.059H187.677Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                              <path d="M238.885 346.04H280.816V356.059H251.501V378.694H274.879V388.713H251.501V421.368H238.885V346.04Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                            </g>
                            <defs>
                              <clipPath id="clip1x019">
                                <rect width="400" height="491.75" fill="white"></rect>
                              </clipPath>
                            </defs>
                          </svg>
                        </div>
                      </div>

                      <div class="p-3">
                        <p class="truncate font-medium text-sm text-gray-800 dark:text-neutral-200">
                          Untitled
                        </p>

                        <ul class="text-xs truncate text-gray-500 dark:text-neutral-500">
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">PDF</span>
                          </li>
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">2 MB</span>
                          </li>
                        </ul>
                      </div>

                      <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                    </div>

                    <!-- More Dropdown -->
                    <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                      <div class="p-1">
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                            <polyline points="16 6 12 2 8 6"></polyline>
                            <line x1="12" x2="12" y1="2" y2="15"></line>
                          </svg>
                          Share folder
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 14 20 9 15 4"></polyline>
                            <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                          </svg>
                          Move to
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                          </svg>
                          Add to starred
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                            <path d="m15 5 4 4"></path>
                          </svg>
                          Rename
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" x2="12" y1="15" y2="3"></line>
                          </svg>
                          Download
                        </button>

                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                            <line x1="4" x2="4" y1="22" y2="15"></line>
                          </svg>
                          Report
                        </button>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 6h18"></path>
                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                            <line x1="10" x2="10" y1="11" y2="17"></line>
                            <line x1="14" x2="14" y1="11" y2="17"></line>
                          </svg>
                          Delete
                        </button>
                      </div>
                    </div>
                    <!-- End More Dropdown -->
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                    <div class="hs-dropdown-toggle relative p-1 block w-56 bg-white rounded-xl shadow-xs dark:bg-neutral-800">
                      <div class="p-3 h-42 bg-white rounded-lg group-hover:bg-gray-100 group-focus:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700 dark:group-focus:bg-neutral-700">
                        <div class="size-full flex shrink-0 justify-center items-center">
                          <img class="size-full object-cover object-center" src="https://images.unsplash.com/photo-1713492527322-471061e52516?q=80&amp;w=480&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="CleanShot 2024-02-13 at 06.20.48@2x Image">
                        </div>
                      </div>

                      <div class="p-3">
                        <p class="truncate font-medium text-sm text-gray-800 dark:text-neutral-200">
                          CleanShot 2024-02-13 at 06.20.48@2x
                        </p>

                        <ul class="text-xs truncate text-gray-500 dark:text-neutral-500">
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">PDF</span>
                          </li>
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">49 kb</span>
                          </li>
                        </ul>
                      </div>

                      <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                    </div>

                    <!-- More Dropdown -->
                    <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                      <div class="p-1">
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                            <polyline points="16 6 12 2 8 6"></polyline>
                            <line x1="12" x2="12" y1="2" y2="15"></line>
                          </svg>
                          Share folder
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 14 20 9 15 4"></polyline>
                            <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                          </svg>
                          Move to
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                          </svg>
                          Add to starred
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                            <path d="m15 5 4 4"></path>
                          </svg>
                          Rename
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" x2="12" y1="15" y2="3"></line>
                          </svg>
                          Download
                        </button>

                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                            <line x1="4" x2="4" y1="22" y2="15"></line>
                          </svg>
                          Report
                        </button>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 6h18"></path>
                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                            <line x1="10" x2="10" y1="11" y2="17"></line>
                            <line x1="14" x2="14" y1="11" y2="17"></line>
                          </svg>
                          Delete
                        </button>
                      </div>
                    </div>
                    <!-- End More Dropdown -->
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                    <div class="hs-dropdown-toggle relative p-1 block w-56 bg-white rounded-xl shadow-xs dark:bg-neutral-800">
                      <div class="p-3 h-42 bg-white rounded-lg group-hover:bg-gray-100 group-focus:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700 dark:group-focus:bg-neutral-700">
                        <div class="size-full flex shrink-0 justify-center items-center">
                          <svg class="shrink-0 size-16 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                            <path d="M10 0H4a1.003 1.003 0 0 0-1 1v3l7.001 4L13 9.968 16 8V4z" fill="#21a366"></path>
                            <path fill="#107c41" d="M16 8H3v4l7 1.4 6-1.4V8z"></path>
                            <path d="M3 12v3a1.003 1.003 0 0 0 1 1h11a1 1 0 0 0 1-1v-3z" fill="#185c37"></path>
                            <path d="M10 4H3v10h6a2 2 0 0 0 2-2V5a1 1 0 0 0-1-1z" opacity=".5"></path>
                            <rect y="3" width="10" height="10" rx="1" fill="#107c41"></rect>
                            <path d="M2.292 11l1.942-3.008L2.455 5h1.431l.971 1.912q.134.272.184.406h.013q.096-.217.2-.423L6.293 5h1.314L5.782 7.975 7.652 11H6.255L5.133 8.9A1.753 1.753 0 0 1 5 8.62h-.016a1.324 1.324 0 0 1-.13.271L3.698 11z" fill="#fff"></path>
                            <path d="M16 1v3h-6V0h5a1.003 1.003 0 0 1 1 1z" fill="#33c481"></path>
                          </svg>
                        </div>
                      </div>

                      <div class="p-3">
                        <p class="truncate font-medium text-sm text-gray-800 dark:text-neutral-200">
                          2023 Audit
                        </p>

                        <ul class="text-xs truncate text-gray-500 dark:text-neutral-500">
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">XLS</span>
                          </li>
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">52 kb</span>
                          </li>
                        </ul>
                      </div>

                      <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                    </div>

                    <!-- More Dropdown -->
                    <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                      <div class="p-1">
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                            <polyline points="16 6 12 2 8 6"></polyline>
                            <line x1="12" x2="12" y1="2" y2="15"></line>
                          </svg>
                          Share folder
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 14 20 9 15 4"></polyline>
                            <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                          </svg>
                          Move to
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                          </svg>
                          Add to starred
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                            <path d="m15 5 4 4"></path>
                          </svg>
                          Rename
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" x2="12" y1="15" y2="3"></line>
                          </svg>
                          Download
                        </button>

                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                            <line x1="4" x2="4" y1="22" y2="15"></line>
                          </svg>
                          Report
                        </button>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 6h18"></path>
                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                            <line x1="10" x2="10" y1="11" y2="17"></line>
                            <line x1="14" x2="14" y1="11" y2="17"></line>
                          </svg>
                          Delete
                        </button>
                      </div>
                    </div>
                    <!-- End More Dropdown -->
                  </div>
                  <!-- End Card -->

                  <!-- Card -->
                  <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                    <div class="hs-dropdown-toggle relative p-1 block w-56 bg-white rounded-xl shadow-xs dark:bg-neutral-800">
                      <div class="p-3 h-42 bg-white rounded-lg group-hover:bg-gray-100 group-focus:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700 dark:group-focus:bg-neutral-700">
                        <div class="size-full flex shrink-0 justify-center items-center">
                          <img class="size-full object-cover object-center" src="https://images.unsplash.com/photo-1724037231939-c4fa9bd69a84?q=80&amp;w=480&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="babe Image">
                        </div>
                      </div>

                      <div class="p-3">
                        <p class="truncate font-medium text-sm text-gray-800 dark:text-neutral-200">
                          babe
                        </p>

                        <ul class="text-xs truncate text-gray-500 dark:text-neutral-500">
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">PDF</span>
                          </li>
                          <li class="relative inline-block pe-3 last:pe-0 first-of-type:before:hidden before:absolute before:top-1/2 before:-start-2.5 before:-translate-y-1/2 before:size-1 before:bg-gray-400 before:rounded-full dark:before:bg-neutral-600">
                            <span class="truncate">114 kb</span>
                          </li>
                        </ul>
                      </div>

                      <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                    </div>

                    <!-- More Dropdown -->
                    <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                      <div class="p-1">
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                            <polyline points="16 6 12 2 8 6"></polyline>
                            <line x1="12" x2="12" y1="2" y2="15"></line>
                          </svg>
                          Share folder
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="15 14 20 9 15 4"></polyline>
                            <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                          </svg>
                          Move to
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                          </svg>
                          Add to starred
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                            <path d="m15 5 4 4"></path>
                          </svg>
                          Rename
                        </button>
                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" x2="12" y1="15" y2="3"></line>
                          </svg>
                          Download
                        </button>

                        <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                            <line x1="4" x2="4" y1="22" y2="15"></line>
                          </svg>
                          Report
                        </button>

                        <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                          <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 6h18"></path>
                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                            <line x1="10" x2="10" y1="11" y2="17"></line>
                            <line x1="14" x2="14" y1="11" y2="17"></line>
                          </svg>
                          Delete
                        </button>
                      </div>
                    </div>
                    <!-- End More Dropdown -->
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Card Group -->
              </div>
            </div>
          </div>
          <!-- End Tab Content -->

          <!-- Tab Content -->
          <div id="hs-pro-tabs-fdflt-listing" role="tabpanel" aria-labelledby="hs-pro-tabs-fdflt-item-listing" class="">

            <div class="p-2 flex flex-col bg-white rounded-xl shadow-xs dark:bg-neutral-800">
              <!-- Heading -->
              <div class="py-3 px-2 grid grid-cols-12 items-center gap-x-2">
                <div class="col-span-10 md:col-span-8 xl:col-span-7 2xl:col-span-8 ps-1.5">
                  <span class="block font-medium text-sm text-gray-800 dark:text-neutral-200">
                    Name
                  </span>
                </div>
                <div class="col-span-2 xl:col-span-1">
                  <span class="block font-medium text-sm text-gray-800 dark:text-neutral-200">
                    Size
                  </span>
                </div>
                <div class="md:col-span-2 hidden md:block">
                  <span class="block font-medium text-sm text-gray-800 dark:text-neutral-200">
                    Who can access
                  </span>
                </div>
                <div class="xl:col-span-2 2xl:col-span-1 hidden xl:block">
                  <span class="block font-medium text-sm text-gray-800 dark:text-neutral-200">
                    Modified
                  </span>
                </div>
              </div>
              <!-- End Heading -->

              <div class="py-1 border-t border-gray-200 first:pt-0 last:pb-0 first:border-t-0 dark:border-neutral-700">
                <!-- Card -->
                <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                  <div class="hs-dropdown-toggle relative p-2 block bg-white rounded-lg group-hover:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700">
                    <div class="grid grid-cols-12 items-center gap-x-2">
                      <div class="col-span-10 md:col-span-8 xl:col-span-7 2xl:col-span-8">
                        <div class="flex items-center gap-x-2 truncate">
                          <div class="size-8 flex shrink-0 justify-center items-center rounded-lg">
                            <svg class="shrink-0 size-5 mx-auto" width="400" height="492" viewBox="0 0 400 492" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip1)">
                                <path d="M50.7496 -0.174609C22.9188 -0.174609 -0.0878906 22.4611 -0.0878906 50.6629V440.664C-0.0878906 468.495 22.5478 491.502 50.7496 491.502H349.095C376.926 491.502 399.932 468.866 399.932 440.664V119.683C399.932 119.683 400.675 110.406 396.593 101.129C392.882 92.5945 386.574 86.6573 386.574 86.6573L312.729 13.9263C312.729 13.9263 306.421 7.98906 297.144 3.90722C286.012 -0.916768 274.88 -0.174609 274.88 -0.174609H50.7496Z" fill="currentColor" class="fill-red-500"></path>
                                <path d="M50.7494 16.5238H274.508C274.508 16.5238 283.414 16.5238 290.094 19.4924C296.402 22.09 300.855 26.1718 300.855 26.1718L374.699 98.5317C374.699 98.5317 379.152 103.356 381.378 108.18C383.234 112.262 383.234 119.312 383.234 119.312V119.683V441.035C383.234 459.96 368.02 475.174 349.095 475.174H50.7494C31.8245 475.174 16.6104 459.96 16.6104 441.035V50.6629C16.6104 31.738 31.8245 16.5238 50.7494 16.5238Z" fill="currentColor" class="fill-white dark:fill-neutral-800"></path>
                                <path d="M99.7314 292.976C88.2281 281.472 100.845 265.887 134.242 248.818L155.393 238.427L163.557 220.245C168.009 210.226 175.06 193.898 178.771 184.25L185.45 166.439L180.626 153.08C174.689 136.752 172.833 112.261 176.544 103.356C181.368 91.4812 197.696 92.5944 204.004 105.582C209.199 115.601 208.457 133.784 202.52 156.791L197.696 175.715L202.148 183.137C204.375 187.219 211.425 196.867 217.363 204.288L228.866 218.389L242.967 216.534C288.238 210.597 303.452 220.616 303.452 235.088C303.452 253.27 267.829 254.755 238.143 233.974C231.464 229.15 227.011 224.698 227.011 224.698C227.011 224.698 208.457 228.408 199.18 231.006C189.532 233.603 185.079 235.088 170.978 239.912C170.978 239.912 166.154 246.962 162.814 252.157C150.94 271.453 137.21 287.038 127.191 292.976C117.172 298.171 105.669 298.542 99.7314 292.976ZM117.914 286.296C124.222 282.214 137.581 267 146.487 252.528L150.198 246.591L133.499 255.126C107.895 268.113 96.0207 280.359 101.958 287.781C105.298 291.862 109.75 291.491 117.914 286.296ZM285.27 239.541C291.578 235.088 290.836 226.182 283.414 222.471C277.848 219.502 273.395 219.131 258.923 219.131C250.017 219.874 235.916 221.358 233.319 222.1C233.319 222.1 241.112 227.666 244.451 229.522C248.904 232.119 260.407 236.943 268.571 239.541C276.735 242.138 281.559 242.138 285.27 239.541ZM217.734 211.339C214.023 207.257 207.344 199.093 203.262 192.785C197.696 185.735 195.098 180.911 195.098 180.911C195.098 180.911 191.016 193.527 188.048 201.32L178.029 226.182L175.06 231.748C175.06 231.748 190.645 226.553 198.438 224.698C206.972 222.471 223.671 219.131 223.671 219.131L217.734 211.339ZM196.211 124.507C197.324 116.343 197.696 108.18 195.098 104.098C187.677 96.3051 179.142 102.613 180.626 121.538C180.997 127.847 182.853 138.979 184.708 145.658L188.419 157.904L191.016 148.627C192.501 143.803 194.727 132.671 196.211 124.507Z" fill="currentColor" class="fill-red-500"></path>
                                <path d="M119.398 346.04H137.952C143.889 346.04 148.713 346.782 152.424 347.895C156.135 349.008 159.104 351.606 161.701 355.316C164.299 359.027 165.412 363.851 165.412 369.046C165.412 373.87 164.299 378.323 162.443 381.663C160.217 385.374 157.619 387.971 154.28 389.455C150.94 390.94 145.374 391.682 138.323 391.682H132.015V420.997H119.398V346.04ZM132.015 355.688V382.034H138.323C143.889 382.034 147.6 380.921 149.827 379.065C152.053 376.839 153.166 373.499 153.166 369.046C153.166 365.707 152.424 362.738 150.94 360.512C149.456 358.285 147.971 357.172 146.487 356.43C145.003 356.059 142.034 355.688 138.694 355.688H132.015Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                                <path d="M175.431 346.04H192.501C200.664 346.04 207.344 347.524 212.168 350.492C216.992 353.461 220.702 357.543 223.3 363.48C225.898 369.046 227.011 375.726 227.011 382.405C227.011 389.827 225.898 396.506 223.671 402.072C221.445 407.638 218.105 412.462 213.281 415.802C208.828 419.513 202.149 420.997 193.243 420.997H175.431V346.04ZM187.677 356.059V411.349H192.872C200.293 411.349 205.488 408.751 208.828 403.927C212.168 398.732 213.652 392.053 213.652 383.889C213.652 365.336 206.602 356.059 192.872 356.059H187.677Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                                <path d="M238.885 346.04H280.816V356.059H251.501V378.694H274.879V388.713H251.501V421.368H238.885V346.04Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                              </g>
                              <defs>
                                <clipPath id="clip1">
                                  <rect width="400" height="491.75" fill="white"></rect>
                                </clipPath>
                              </defs>
                            </svg>
                          </div>
                          <p class="truncate text-sm text-gray-800 dark:text-neutral-200">
                            Untitled.pdf
                          </p>
                        </div>
                      </div>

                      <div class="col-span-2 xl:col-span-1">
                        <p class="xl:truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          256 kb
                        </p>
                      </div>

                      <div class="md:col-span-2 hidden md:block">
                        <div class="flex items-center gap-x-2">

                          <img class="shrink-0 size-5 rounded-full" src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=320&amp;h=320&amp;q=80" alt="Avatar">
                          <div class="grow">
                            <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                              Only you
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="xl:col-span-2 2xl:col-span-1 hidden xl:block">
                        <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          Feb 4, 2025
                        </p>
                      </div>
                    </div>

                    <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                  </div>

                  <!-- More Dropdown -->
                  <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                    <div class="p-1">
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                          <polyline points="16 6 12 2 8 6"></polyline>
                          <line x1="12" x2="12" y1="2" y2="15"></line>
                        </svg>
                        Share folder
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="15 14 20 9 15 4"></polyline>
                          <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                        </svg>
                        Move to
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                        Add to starred
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                          <path d="m15 5 4 4"></path>
                        </svg>
                        Rename
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                          <polyline points="7 10 12 15 17 10"></polyline>
                          <line x1="12" x2="12" y1="15" y2="3"></line>
                        </svg>
                        Download
                      </button>

                      <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                          <line x1="4" x2="4" y1="22" y2="15"></line>
                        </svg>
                        Report
                      </button>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M3 6h18"></path>
                          <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                          <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                          <line x1="10" x2="10" y1="11" y2="17"></line>
                          <line x1="14" x2="14" y1="11" y2="17"></line>
                        </svg>
                        Delete
                      </button>
                    </div>
                  </div>
                  <!-- End More Dropdown -->
                </div>
                <!-- End Card -->
              </div>

              <div class="py-1 border-t border-gray-200 first:pt-0 last:pb-0 first:border-t-0 dark:border-neutral-700">
                <!-- Card -->
                <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                  <div class="hs-dropdown-toggle relative p-2 block bg-white rounded-lg group-hover:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700">
                    <div class="grid grid-cols-12 items-center gap-x-2">
                      <div class="col-span-10 md:col-span-8 xl:col-span-7 2xl:col-span-8">
                        <div class="flex items-center gap-x-2 truncate">
                          <div class="size-8 flex shrink-0 justify-center items-center rounded-lg">
                            <svg class="shrink-0 size-5 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                              <path d="M16 4V1a1.003 1.003 0 0 0-1-1H4a1 1 0 0 0-1 1v3l6.5 1.379z" fill="#41a5ee"></path>
                              <path fill="#2b7cd3" d="M15.999 4h-13v4L9.5 9.168 15.999 8V4z"></path>
                              <path fill="#185abd" d="M16 8H3v4l6.499 1L16 12V8z"></path>
                              <path d="M3 12v3a1.003 1.003 0 0 0 1 1h11a1 1 0 0 0 1-1v-3z" fill="#103f91"></path>
                              <path d="M10 4.003L3 4l.002 10H9a2 2 0 0 0 2-2V5.002a1 1 0 0 0-1-1z" opacity=".5"></path>
                              <rect y="3" width="10" height="10" rx="1" fill="#185abd"></rect>
                              <path d="M3.352 9.54q.026.213.034.372h.02q.011-.15.045-.364t.065-.36L4.429 5H5.61l.945 4.126a6.335 6.335 0 0 1 .118.778h.016a6.293 6.293 0 0 1 .098-.753L7.543 5h1.075l-1.323 6H6.04l-.901-3.975q-.04-.171-.089-.448t-.06-.401h-.017q-.015.146-.06.435t-.073.427L3.992 11H2.716L1.382 5h1.094L3.3 9.197q.028.13.053.343z" fill="#fff"></path>
                            </svg>
                          </div>
                          <p class="truncate text-sm text-gray-800 dark:text-neutral-200">
                            January 2025 Invoice.docx
                          </p>
                        </div>
                      </div>

                      <div class="col-span-2 xl:col-span-1">
                        <p class="xl:truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          142 kb
                        </p>
                      </div>

                      <div class="md:col-span-2 hidden md:block">
                        <div class="flex items-center gap-x-2">

                          <span class="flex shrink-0 justify-center items-center size-5 bg-gray-200 text-gray-700 text-xs font-medium uppercase rounded-full dark:bg-neutral-700 dark:text-neutral-300">R</span>
                          <div class="grow">
                            <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                              2 members
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="xl:col-span-2 2xl:col-span-1 hidden xl:block">
                        <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          Feb 1, 2025
                        </p>
                      </div>
                    </div>

                    <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                  </div>

                  <!-- More Dropdown -->
                  <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                    <div class="p-1">
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                          <polyline points="16 6 12 2 8 6"></polyline>
                          <line x1="12" x2="12" y1="2" y2="15"></line>
                        </svg>
                        Share folder
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="15 14 20 9 15 4"></polyline>
                          <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                        </svg>
                        Move to
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                        Add to starred
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                          <path d="m15 5 4 4"></path>
                        </svg>
                        Rename
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                          <polyline points="7 10 12 15 17 10"></polyline>
                          <line x1="12" x2="12" y1="15" y2="3"></line>
                        </svg>
                        Download
                      </button>

                      <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                          <line x1="4" x2="4" y1="22" y2="15"></line>
                        </svg>
                        Report
                      </button>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M3 6h18"></path>
                          <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                          <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                          <line x1="10" x2="10" y1="11" y2="17"></line>
                          <line x1="14" x2="14" y1="11" y2="17"></line>
                        </svg>
                        Delete
                      </button>
                    </div>
                  </div>
                  <!-- End More Dropdown -->
                </div>
                <!-- End Card -->
              </div>

              <div class="py-1 border-t border-gray-200 first:pt-0 last:pb-0 first:border-t-0 dark:border-neutral-700">
                <!-- Card -->
                <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                  <div class="hs-dropdown-toggle relative p-2 block bg-white rounded-lg group-hover:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700">
                    <div class="grid grid-cols-12 items-center gap-x-2">
                      <div class="col-span-10 md:col-span-8 xl:col-span-7 2xl:col-span-8">
                        <div class="flex items-center gap-x-2 truncate">
                          <div class="size-8 flex shrink-0 justify-center items-center rounded-lg">
                            <svg class="shrink-0 size-5 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                              <path d="M10 0H4a1.003 1.003 0 0 0-1 1v3l7.001 4L13 9.968 16 8V4z" fill="#21a366"></path>
                              <path fill="#107c41" d="M16 8H3v4l7 1.4 6-1.4V8z"></path>
                              <path d="M3 12v3a1.003 1.003 0 0 0 1 1h11a1 1 0 0 0 1-1v-3z" fill="#185c37"></path>
                              <path d="M10 4H3v10h6a2 2 0 0 0 2-2V5a1 1 0 0 0-1-1z" opacity=".5"></path>
                              <rect y="3" width="10" height="10" rx="1" fill="#107c41"></rect>
                              <path d="M2.292 11l1.942-3.008L2.455 5h1.431l.971 1.912q.134.272.184.406h.013q.096-.217.2-.423L6.293 5h1.314L5.782 7.975 7.652 11H6.255L5.133 8.9A1.753 1.753 0 0 1 5 8.62h-.016a1.324 1.324 0 0 1-.13.271L3.698 11z" fill="#fff"></path>
                              <path d="M16 1v3h-6V0h5a1.003 1.003 0 0 1 1 1z" fill="#33c481"></path>
                            </svg>
                          </div>
                          <p class="truncate text-sm text-gray-800 dark:text-neutral-200">
                            2024 Audit.xls
                          </p>
                        </div>
                      </div>

                      <div class="col-span-2 xl:col-span-1">
                        <p class="xl:truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          69 kb
                        </p>
                      </div>

                      <div class="md:col-span-2 hidden md:block">
                        <div class="flex items-center gap-x-2">

                          <span class="flex shrink-0 justify-center items-center size-5 bg-gray-200 text-gray-700 text-xs font-medium uppercase rounded-full dark:bg-neutral-700 dark:text-neutral-300">A</span>
                          <div class="grow">
                            <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                              4 members
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="xl:col-span-2 2xl:col-span-1 hidden xl:block">
                        <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          Jan 28, 2025
                        </p>
                      </div>
                    </div>

                    <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                  </div>

                  <!-- More Dropdown -->
                  <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                    <div class="p-1">
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                          <polyline points="16 6 12 2 8 6"></polyline>
                          <line x1="12" x2="12" y1="2" y2="15"></line>
                        </svg>
                        Share folder
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="15 14 20 9 15 4"></polyline>
                          <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                        </svg>
                        Move to
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                        Add to starred
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                          <path d="m15 5 4 4"></path>
                        </svg>
                        Rename
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                          <polyline points="7 10 12 15 17 10"></polyline>
                          <line x1="12" x2="12" y1="15" y2="3"></line>
                        </svg>
                        Download
                      </button>

                      <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                          <line x1="4" x2="4" y1="22" y2="15"></line>
                        </svg>
                        Report
                      </button>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M3 6h18"></path>
                          <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                          <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                          <line x1="10" x2="10" y1="11" y2="17"></line>
                          <line x1="14" x2="14" y1="11" y2="17"></line>
                        </svg>
                        Delete
                      </button>
                    </div>
                  </div>
                  <!-- End More Dropdown -->
                </div>
                <!-- End Card -->
              </div>

              <div class="py-1 border-t border-gray-200 first:pt-0 last:pb-0 first:border-t-0 dark:border-neutral-700">
                <!-- Card -->
                <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                  <div class="hs-dropdown-toggle relative p-2 block bg-white rounded-lg group-hover:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700">
                    <div class="grid grid-cols-12 items-center gap-x-2">
                      <div class="col-span-10 md:col-span-8 xl:col-span-7 2xl:col-span-8">
                        <div class="flex items-center gap-x-2 truncate">
                          <div class="size-8 flex shrink-0 justify-center items-center rounded-lg">
                            <svg class="shrink-0 size-5 mx-auto" width="400" height="492" viewBox="0 0 400 492" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#cliadsd)">
                                <path d="M50.7496 -0.174609C22.9188 -0.174609 -0.0878906 22.4611 -0.0878906 50.6629V440.664C-0.0878906 468.495 22.5478 491.502 50.7496 491.502H349.095C376.926 491.502 399.932 468.866 399.932 440.664V119.683C399.932 119.683 400.675 110.406 396.593 101.129C392.882 92.5945 386.574 86.6573 386.574 86.6573L312.729 13.9263C312.729 13.9263 306.421 7.98906 297.144 3.90722C286.012 -0.916768 274.88 -0.174609 274.88 -0.174609H50.7496Z" fill="currentColor" class="fill-red-500"></path>
                                <path d="M50.7494 16.5238H274.508C274.508 16.5238 283.414 16.5238 290.094 19.4924C296.402 22.09 300.855 26.1718 300.855 26.1718L374.699 98.5317C374.699 98.5317 379.152 103.356 381.378 108.18C383.234 112.262 383.234 119.312 383.234 119.312V119.683V441.035C383.234 459.96 368.02 475.174 349.095 475.174H50.7494C31.8245 475.174 16.6104 459.96 16.6104 441.035V50.6629C16.6104 31.738 31.8245 16.5238 50.7494 16.5238Z" fill="currentColor" class="fill-white dark:fill-neutral-800"></path>
                                <path d="M99.7314 292.976C88.2281 281.472 100.845 265.887 134.242 248.818L155.393 238.427L163.557 220.245C168.009 210.226 175.06 193.898 178.771 184.25L185.45 166.439L180.626 153.08C174.689 136.752 172.833 112.261 176.544 103.356C181.368 91.4812 197.696 92.5944 204.004 105.582C209.199 115.601 208.457 133.784 202.52 156.791L197.696 175.715L202.148 183.137C204.375 187.219 211.425 196.867 217.363 204.288L228.866 218.389L242.967 216.534C288.238 210.597 303.452 220.616 303.452 235.088C303.452 253.27 267.829 254.755 238.143 233.974C231.464 229.15 227.011 224.698 227.011 224.698C227.011 224.698 208.457 228.408 199.18 231.006C189.532 233.603 185.079 235.088 170.978 239.912C170.978 239.912 166.154 246.962 162.814 252.157C150.94 271.453 137.21 287.038 127.191 292.976C117.172 298.171 105.669 298.542 99.7314 292.976ZM117.914 286.296C124.222 282.214 137.581 267 146.487 252.528L150.198 246.591L133.499 255.126C107.895 268.113 96.0207 280.359 101.958 287.781C105.298 291.862 109.75 291.491 117.914 286.296ZM285.27 239.541C291.578 235.088 290.836 226.182 283.414 222.471C277.848 219.502 273.395 219.131 258.923 219.131C250.017 219.874 235.916 221.358 233.319 222.1C233.319 222.1 241.112 227.666 244.451 229.522C248.904 232.119 260.407 236.943 268.571 239.541C276.735 242.138 281.559 242.138 285.27 239.541ZM217.734 211.339C214.023 207.257 207.344 199.093 203.262 192.785C197.696 185.735 195.098 180.911 195.098 180.911C195.098 180.911 191.016 193.527 188.048 201.32L178.029 226.182L175.06 231.748C175.06 231.748 190.645 226.553 198.438 224.698C206.972 222.471 223.671 219.131 223.671 219.131L217.734 211.339ZM196.211 124.507C197.324 116.343 197.696 108.18 195.098 104.098C187.677 96.3051 179.142 102.613 180.626 121.538C180.997 127.847 182.853 138.979 184.708 145.658L188.419 157.904L191.016 148.627C192.501 143.803 194.727 132.671 196.211 124.507Z" fill="currentColor" class="fill-red-500"></path>
                                <path d="M119.398 346.04H137.952C143.889 346.04 148.713 346.782 152.424 347.895C156.135 349.008 159.104 351.606 161.701 355.316C164.299 359.027 165.412 363.851 165.412 369.046C165.412 373.87 164.299 378.323 162.443 381.663C160.217 385.374 157.619 387.971 154.28 389.455C150.94 390.94 145.374 391.682 138.323 391.682H132.015V420.997H119.398V346.04ZM132.015 355.688V382.034H138.323C143.889 382.034 147.6 380.921 149.827 379.065C152.053 376.839 153.166 373.499 153.166 369.046C153.166 365.707 152.424 362.738 150.94 360.512C149.456 358.285 147.971 357.172 146.487 356.43C145.003 356.059 142.034 355.688 138.694 355.688H132.015Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                                <path d="M175.431 346.04H192.501C200.664 346.04 207.344 347.524 212.168 350.492C216.992 353.461 220.702 357.543 223.3 363.48C225.898 369.046 227.011 375.726 227.011 382.405C227.011 389.827 225.898 396.506 223.671 402.072C221.445 407.638 218.105 412.462 213.281 415.802C208.828 419.513 202.149 420.997 193.243 420.997H175.431V346.04ZM187.677 356.059V411.349H192.872C200.293 411.349 205.488 408.751 208.828 403.927C212.168 398.732 213.652 392.053 213.652 383.889C213.652 365.336 206.602 356.059 192.872 356.059H187.677Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                                <path d="M238.885 346.04H280.816V356.059H251.501V378.694H274.879V388.713H251.501V421.368H238.885V346.04Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                              </g>
                              <defs>
                                <clipPath id="cliadsd">
                                  <rect width="400" height="491.75" fill="white"></rect>
                                </clipPath>
                              </defs>
                            </svg>
                          </div>
                          <p class="truncate text-sm text-gray-800 dark:text-neutral-200">
                            Desk - House Renovation
                          </p>
                        </div>
                      </div>

                      <div class="col-span-2 xl:col-span-1">
                        <p class="xl:truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          7 MB
                        </p>
                      </div>

                      <div class="md:col-span-2 hidden md:block">
                        <div class="flex items-center gap-x-2">

                          <img class="shrink-0 size-5 rounded-full" src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=320&amp;h=320&amp;q=80" alt="Avatar">
                          <div class="grow">
                            <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                              Only you
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="xl:col-span-2 2xl:col-span-1 hidden xl:block">
                        <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          Jan 22, 2025
                        </p>
                      </div>
                    </div>

                    <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                  </div>

                  <!-- More Dropdown -->
                  <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                    <div class="p-1">
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                          <polyline points="16 6 12 2 8 6"></polyline>
                          <line x1="12" x2="12" y1="2" y2="15"></line>
                        </svg>
                        Share folder
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="15 14 20 9 15 4"></polyline>
                          <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                        </svg>
                        Move to
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                        Add to starred
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                          <path d="m15 5 4 4"></path>
                        </svg>
                        Rename
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                          <polyline points="7 10 12 15 17 10"></polyline>
                          <line x1="12" x2="12" y1="15" y2="3"></line>
                        </svg>
                        Download
                      </button>

                      <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                          <line x1="4" x2="4" y1="22" y2="15"></line>
                        </svg>
                        Report
                      </button>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M3 6h18"></path>
                          <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                          <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                          <line x1="10" x2="10" y1="11" y2="17"></line>
                          <line x1="14" x2="14" y1="11" y2="17"></line>
                        </svg>
                        Delete
                      </button>
                    </div>
                  </div>
                  <!-- End More Dropdown -->
                </div>
                <!-- End Card -->
              </div>

              <div class="py-1 border-t border-gray-200 first:pt-0 last:pb-0 first:border-t-0 dark:border-neutral-700">
                <!-- Card -->
                <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                  <div class="hs-dropdown-toggle relative p-2 block bg-white rounded-lg group-hover:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700">
                    <div class="grid grid-cols-12 items-center gap-x-2">
                      <div class="col-span-10 md:col-span-8 xl:col-span-7 2xl:col-span-8">
                        <div class="flex items-center gap-x-2 truncate">
                          <div class="size-8 flex shrink-0 justify-center items-center rounded-lg">
                            <svg class="shrink-0 size-5 mx-auto" width="400" height="492" viewBox="0 0 400 492" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip132ge)">
                                <path d="M50.7496 -0.174609C22.9188 -0.174609 -0.0878906 22.4611 -0.0878906 50.6629V440.664C-0.0878906 468.495 22.5478 491.502 50.7496 491.502H349.095C376.926 491.502 399.932 468.866 399.932 440.664V119.683C399.932 119.683 400.675 110.406 396.593 101.129C392.882 92.5945 386.574 86.6573 386.574 86.6573L312.729 13.9263C312.729 13.9263 306.421 7.98906 297.144 3.90722C286.012 -0.916768 274.88 -0.174609 274.88 -0.174609H50.7496Z" fill="currentColor" class="fill-red-500"></path>
                                <path d="M50.7494 16.5238H274.508C274.508 16.5238 283.414 16.5238 290.094 19.4924C296.402 22.09 300.855 26.1718 300.855 26.1718L374.699 98.5317C374.699 98.5317 379.152 103.356 381.378 108.18C383.234 112.262 383.234 119.312 383.234 119.312V119.683V441.035C383.234 459.96 368.02 475.174 349.095 475.174H50.7494C31.8245 475.174 16.6104 459.96 16.6104 441.035V50.6629C16.6104 31.738 31.8245 16.5238 50.7494 16.5238Z" fill="currentColor" class="fill-white dark:fill-neutral-800"></path>
                                <path d="M99.7314 292.976C88.2281 281.472 100.845 265.887 134.242 248.818L155.393 238.427L163.557 220.245C168.009 210.226 175.06 193.898 178.771 184.25L185.45 166.439L180.626 153.08C174.689 136.752 172.833 112.261 176.544 103.356C181.368 91.4812 197.696 92.5944 204.004 105.582C209.199 115.601 208.457 133.784 202.52 156.791L197.696 175.715L202.148 183.137C204.375 187.219 211.425 196.867 217.363 204.288L228.866 218.389L242.967 216.534C288.238 210.597 303.452 220.616 303.452 235.088C303.452 253.27 267.829 254.755 238.143 233.974C231.464 229.15 227.011 224.698 227.011 224.698C227.011 224.698 208.457 228.408 199.18 231.006C189.532 233.603 185.079 235.088 170.978 239.912C170.978 239.912 166.154 246.962 162.814 252.157C150.94 271.453 137.21 287.038 127.191 292.976C117.172 298.171 105.669 298.542 99.7314 292.976ZM117.914 286.296C124.222 282.214 137.581 267 146.487 252.528L150.198 246.591L133.499 255.126C107.895 268.113 96.0207 280.359 101.958 287.781C105.298 291.862 109.75 291.491 117.914 286.296ZM285.27 239.541C291.578 235.088 290.836 226.182 283.414 222.471C277.848 219.502 273.395 219.131 258.923 219.131C250.017 219.874 235.916 221.358 233.319 222.1C233.319 222.1 241.112 227.666 244.451 229.522C248.904 232.119 260.407 236.943 268.571 239.541C276.735 242.138 281.559 242.138 285.27 239.541ZM217.734 211.339C214.023 207.257 207.344 199.093 203.262 192.785C197.696 185.735 195.098 180.911 195.098 180.911C195.098 180.911 191.016 193.527 188.048 201.32L178.029 226.182L175.06 231.748C175.06 231.748 190.645 226.553 198.438 224.698C206.972 222.471 223.671 219.131 223.671 219.131L217.734 211.339ZM196.211 124.507C197.324 116.343 197.696 108.18 195.098 104.098C187.677 96.3051 179.142 102.613 180.626 121.538C180.997 127.847 182.853 138.979 184.708 145.658L188.419 157.904L191.016 148.627C192.501 143.803 194.727 132.671 196.211 124.507Z" fill="currentColor" class="fill-red-500"></path>
                                <path d="M119.398 346.04H137.952C143.889 346.04 148.713 346.782 152.424 347.895C156.135 349.008 159.104 351.606 161.701 355.316C164.299 359.027 165.412 363.851 165.412 369.046C165.412 373.87 164.299 378.323 162.443 381.663C160.217 385.374 157.619 387.971 154.28 389.455C150.94 390.94 145.374 391.682 138.323 391.682H132.015V420.997H119.398V346.04ZM132.015 355.688V382.034H138.323C143.889 382.034 147.6 380.921 149.827 379.065C152.053 376.839 153.166 373.499 153.166 369.046C153.166 365.707 152.424 362.738 150.94 360.512C149.456 358.285 147.971 357.172 146.487 356.43C145.003 356.059 142.034 355.688 138.694 355.688H132.015Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                                <path d="M175.431 346.04H192.501C200.664 346.04 207.344 347.524 212.168 350.492C216.992 353.461 220.702 357.543 223.3 363.48C225.898 369.046 227.011 375.726 227.011 382.405C227.011 389.827 225.898 396.506 223.671 402.072C221.445 407.638 218.105 412.462 213.281 415.802C208.828 419.513 202.149 420.997 193.243 420.997H175.431V346.04ZM187.677 356.059V411.349H192.872C200.293 411.349 205.488 408.751 208.828 403.927C212.168 398.732 213.652 392.053 213.652 383.889C213.652 365.336 206.602 356.059 192.872 356.059H187.677Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                                <path d="M238.885 346.04H280.816V356.059H251.501V378.694H274.879V388.713H251.501V421.368H238.885V346.04Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                              </g>
                              <defs>
                                <clipPath id="clip132ge">
                                  <rect width="400" height="491.75" fill="white"></rect>
                                </clipPath>
                              </defs>
                            </svg>
                          </div>
                          <p class="truncate text-sm text-gray-800 dark:text-neutral-200">
                            Bedroom - House Renovation
                          </p>
                        </div>
                      </div>

                      <div class="col-span-2 xl:col-span-1">
                        <p class="xl:truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          1 MB
                        </p>
                      </div>

                      <div class="md:col-span-2 hidden md:block">
                        <div class="flex items-center gap-x-2">

                          <img class="shrink-0 size-5 rounded-full" src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=320&amp;h=320&amp;q=80" alt="Avatar">
                          <div class="grow">
                            <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                              Only you
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="xl:col-span-2 2xl:col-span-1 hidden xl:block">
                        <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          Jan 9, 2025
                        </p>
                      </div>
                    </div>

                    <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                  </div>

                  <!-- More Dropdown -->
                  <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                    <div class="p-1">
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                          <polyline points="16 6 12 2 8 6"></polyline>
                          <line x1="12" x2="12" y1="2" y2="15"></line>
                        </svg>
                        Share folder
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="15 14 20 9 15 4"></polyline>
                          <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                        </svg>
                        Move to
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                        Add to starred
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                          <path d="m15 5 4 4"></path>
                        </svg>
                        Rename
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                          <polyline points="7 10 12 15 17 10"></polyline>
                          <line x1="12" x2="12" y1="15" y2="3"></line>
                        </svg>
                        Download
                      </button>

                      <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                          <line x1="4" x2="4" y1="22" y2="15"></line>
                        </svg>
                        Report
                      </button>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M3 6h18"></path>
                          <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                          <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                          <line x1="10" x2="10" y1="11" y2="17"></line>
                          <line x1="14" x2="14" y1="11" y2="17"></line>
                        </svg>
                        Delete
                      </button>
                    </div>
                  </div>
                  <!-- End More Dropdown -->
                </div>
                <!-- End Card -->
              </div>

              <div class="py-1 border-t border-gray-200 first:pt-0 last:pb-0 first:border-t-0 dark:border-neutral-700">
                <!-- Card -->
                <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                  <div class="hs-dropdown-toggle relative p-2 block bg-white rounded-lg group-hover:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700">
                    <div class="grid grid-cols-12 items-center gap-x-2">
                      <div class="col-span-10 md:col-span-8 xl:col-span-7 2xl:col-span-8">
                        <div class="flex items-center gap-x-2 truncate">
                          <div class="size-8 flex shrink-0 justify-center items-center rounded-lg">
                            <svg class="shrink-0 size-5 mx-auto" width="400" height="492" viewBox="0 0 400 492" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip1001)">
                                <path d="M50.7496 -0.174609C22.9188 -0.174609 -0.0878906 22.4611 -0.0878906 50.6629V440.664C-0.0878906 468.495 22.5478 491.502 50.7496 491.502H349.095C376.926 491.502 399.932 468.866 399.932 440.664V119.683C399.932 119.683 400.675 110.406 396.593 101.129C392.882 92.5945 386.574 86.6573 386.574 86.6573L312.729 13.9263C312.729 13.9263 306.421 7.98906 297.144 3.90722C286.012 -0.916768 274.88 -0.174609 274.88 -0.174609H50.7496Z" fill="currentColor" class="fill-red-500"></path>
                                <path d="M50.7494 16.5238H274.508C274.508 16.5238 283.414 16.5238 290.094 19.4924C296.402 22.09 300.855 26.1718 300.855 26.1718L374.699 98.5317C374.699 98.5317 379.152 103.356 381.378 108.18C383.234 112.262 383.234 119.312 383.234 119.312V119.683V441.035C383.234 459.96 368.02 475.174 349.095 475.174H50.7494C31.8245 475.174 16.6104 459.96 16.6104 441.035V50.6629C16.6104 31.738 31.8245 16.5238 50.7494 16.5238Z" fill="currentColor" class="fill-white dark:fill-neutral-800"></path>
                                <path d="M99.7314 292.976C88.2281 281.472 100.845 265.887 134.242 248.818L155.393 238.427L163.557 220.245C168.009 210.226 175.06 193.898 178.771 184.25L185.45 166.439L180.626 153.08C174.689 136.752 172.833 112.261 176.544 103.356C181.368 91.4812 197.696 92.5944 204.004 105.582C209.199 115.601 208.457 133.784 202.52 156.791L197.696 175.715L202.148 183.137C204.375 187.219 211.425 196.867 217.363 204.288L228.866 218.389L242.967 216.534C288.238 210.597 303.452 220.616 303.452 235.088C303.452 253.27 267.829 254.755 238.143 233.974C231.464 229.15 227.011 224.698 227.011 224.698C227.011 224.698 208.457 228.408 199.18 231.006C189.532 233.603 185.079 235.088 170.978 239.912C170.978 239.912 166.154 246.962 162.814 252.157C150.94 271.453 137.21 287.038 127.191 292.976C117.172 298.171 105.669 298.542 99.7314 292.976ZM117.914 286.296C124.222 282.214 137.581 267 146.487 252.528L150.198 246.591L133.499 255.126C107.895 268.113 96.0207 280.359 101.958 287.781C105.298 291.862 109.75 291.491 117.914 286.296ZM285.27 239.541C291.578 235.088 290.836 226.182 283.414 222.471C277.848 219.502 273.395 219.131 258.923 219.131C250.017 219.874 235.916 221.358 233.319 222.1C233.319 222.1 241.112 227.666 244.451 229.522C248.904 232.119 260.407 236.943 268.571 239.541C276.735 242.138 281.559 242.138 285.27 239.541ZM217.734 211.339C214.023 207.257 207.344 199.093 203.262 192.785C197.696 185.735 195.098 180.911 195.098 180.911C195.098 180.911 191.016 193.527 188.048 201.32L178.029 226.182L175.06 231.748C175.06 231.748 190.645 226.553 198.438 224.698C206.972 222.471 223.671 219.131 223.671 219.131L217.734 211.339ZM196.211 124.507C197.324 116.343 197.696 108.18 195.098 104.098C187.677 96.3051 179.142 102.613 180.626 121.538C180.997 127.847 182.853 138.979 184.708 145.658L188.419 157.904L191.016 148.627C192.501 143.803 194.727 132.671 196.211 124.507Z" fill="currentColor" class="fill-red-500"></path>
                                <path d="M119.398 346.04H137.952C143.889 346.04 148.713 346.782 152.424 347.895C156.135 349.008 159.104 351.606 161.701 355.316C164.299 359.027 165.412 363.851 165.412 369.046C165.412 373.87 164.299 378.323 162.443 381.663C160.217 385.374 157.619 387.971 154.28 389.455C150.94 390.94 145.374 391.682 138.323 391.682H132.015V420.997H119.398V346.04ZM132.015 355.688V382.034H138.323C143.889 382.034 147.6 380.921 149.827 379.065C152.053 376.839 153.166 373.499 153.166 369.046C153.166 365.707 152.424 362.738 150.94 360.512C149.456 358.285 147.971 357.172 146.487 356.43C145.003 356.059 142.034 355.688 138.694 355.688H132.015Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                                <path d="M175.431 346.04H192.501C200.664 346.04 207.344 347.524 212.168 350.492C216.992 353.461 220.702 357.543 223.3 363.48C225.898 369.046 227.011 375.726 227.011 382.405C227.011 389.827 225.898 396.506 223.671 402.072C221.445 407.638 218.105 412.462 213.281 415.802C208.828 419.513 202.149 420.997 193.243 420.997H175.431V346.04ZM187.677 356.059V411.349H192.872C200.293 411.349 205.488 408.751 208.828 403.927C212.168 398.732 213.652 392.053 213.652 383.889C213.652 365.336 206.602 356.059 192.872 356.059H187.677Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                                <path d="M238.885 346.04H280.816V356.059H251.501V378.694H274.879V388.713H251.501V421.368H238.885V346.04Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                              </g>
                              <defs>
                                <clipPath id="clip1001">
                                  <rect width="400" height="491.75" fill="white"></rect>
                                </clipPath>
                              </defs>
                            </svg>
                          </div>
                          <p class="truncate text-sm text-gray-800 dark:text-neutral-200">
                            Work Room - House Renovation
                          </p>
                        </div>
                      </div>

                      <div class="col-span-2 xl:col-span-1">
                        <p class="xl:truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          99 kb
                        </p>
                      </div>

                      <div class="md:col-span-2 hidden md:block">
                        <div class="flex items-center gap-x-2">

                          <img class="shrink-0 size-5 rounded-full" src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=320&amp;h=320&amp;q=80" alt="Avatar">
                          <div class="grow">
                            <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                              Only you
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="xl:col-span-2 2xl:col-span-1 hidden xl:block">
                        <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          Jan 9, 2025
                        </p>
                      </div>
                    </div>

                    <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                  </div>

                  <!-- More Dropdown -->
                  <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                    <div class="p-1">
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                          <polyline points="16 6 12 2 8 6"></polyline>
                          <line x1="12" x2="12" y1="2" y2="15"></line>
                        </svg>
                        Share folder
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="15 14 20 9 15 4"></polyline>
                          <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                        </svg>
                        Move to
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                        Add to starred
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                          <path d="m15 5 4 4"></path>
                        </svg>
                        Rename
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                          <polyline points="7 10 12 15 17 10"></polyline>
                          <line x1="12" x2="12" y1="15" y2="3"></line>
                        </svg>
                        Download
                      </button>

                      <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                          <line x1="4" x2="4" y1="22" y2="15"></line>
                        </svg>
                        Report
                      </button>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M3 6h18"></path>
                          <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                          <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                          <line x1="10" x2="10" y1="11" y2="17"></line>
                          <line x1="14" x2="14" y1="11" y2="17"></line>
                        </svg>
                        Delete
                      </button>
                    </div>
                  </div>
                  <!-- End More Dropdown -->
                </div>
                <!-- End Card -->
              </div>

              <div class="py-1 border-t border-gray-200 first:pt-0 last:pb-0 first:border-t-0 dark:border-neutral-700">
                <!-- Card -->
                <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                  <div class="hs-dropdown-toggle relative p-2 block bg-white rounded-lg group-hover:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700">
                    <div class="grid grid-cols-12 items-center gap-x-2">
                      <div class="col-span-10 md:col-span-8 xl:col-span-7 2xl:col-span-8">
                        <div class="flex items-center gap-x-2 truncate">
                          <div class="size-8 flex shrink-0 justify-center items-center rounded-lg">
                            <svg class="shrink-0 size-5 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                              <path d="M8 0a8.024 8.024 0 0 0-8 8l10 2.363z" fill="#ed6c47"></path>
                              <path d="M8 0v8l4 2.59L16 8a8.024 8.024 0 0 0-8-8z" fill="#ff8f6b"></path>
                              <path d="M16 8A8 8 0 0 1 0 8z" fill="#d35230"></path>
                              <path d="M10 4.003H1.086A7.93 7.93 0 0 0 2.735 14h6.264a2 2 0 0 0 2-2V5.002a1 1 0 0 0-1-1z" opacity=".5"></path>
                              <path d="M10 4.003H1.086A7.93 7.93 0 0 0 2.735 14h6.264a2 2 0 0 0 2-2V5.002a1 1 0 0 0-1-1z" opacity=".1"></path>
                              <rect y="3" width="10" height="10" rx="1" fill="#c43e1c"></rect>
                              <path d="M5.336 5a2.276 2.276 0 0 1 1.56.481 1.766 1.766 0 0 1 .542 1.393 2.019 2.019 0 0 1-.267 1.042 1.827 1.827 0 0 1-.762.71 2.475 2.475 0 0 1-1.144.253H4.182V11h-1.11V5zM4.182 7.962h.956a1.2 1.2 0 0 0 .845-.265 1.009 1.009 0 0 0 .285-.777q0-.991-1.094-.991h-.992z" fill="#fff"></path>
                            </svg>
                          </div>
                          <p class="truncate text-sm text-gray-800 dark:text-neutral-200">
                            Assignment presentation.pptx
                          </p>
                        </div>
                      </div>

                      <div class="col-span-2 xl:col-span-1">
                        <p class="xl:truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          30 MB
                        </p>
                      </div>

                      <div class="md:col-span-2 hidden md:block">
                        <div class="flex items-center gap-x-2">

                          <span class="flex shrink-0 justify-center items-center size-5 bg-gray-200 text-gray-700 text-xs font-medium uppercase rounded-full dark:bg-neutral-700 dark:text-neutral-300">D</span>
                          <div class="grow">
                            <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                              9 members
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="xl:col-span-2 2xl:col-span-1 hidden xl:block">
                        <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          Dec 24, 2024
                        </p>
                      </div>
                    </div>

                    <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                  </div>

                  <!-- More Dropdown -->
                  <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                    <div class="p-1">
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                          <polyline points="16 6 12 2 8 6"></polyline>
                          <line x1="12" x2="12" y1="2" y2="15"></line>
                        </svg>
                        Share folder
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="15 14 20 9 15 4"></polyline>
                          <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                        </svg>
                        Move to
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                        Add to starred
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                          <path d="m15 5 4 4"></path>
                        </svg>
                        Rename
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                          <polyline points="7 10 12 15 17 10"></polyline>
                          <line x1="12" x2="12" y1="15" y2="3"></line>
                        </svg>
                        Download
                      </button>

                      <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                          <line x1="4" x2="4" y1="22" y2="15"></line>
                        </svg>
                        Report
                      </button>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M3 6h18"></path>
                          <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                          <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                          <line x1="10" x2="10" y1="11" y2="17"></line>
                          <line x1="14" x2="14" y1="11" y2="17"></line>
                        </svg>
                        Delete
                      </button>
                    </div>
                  </div>
                  <!-- End More Dropdown -->
                </div>
                <!-- End Card -->
              </div>

              <div class="py-1 border-t border-gray-200 first:pt-0 last:pb-0 first:border-t-0 dark:border-neutral-700">
                <!-- Card -->
                <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                  <div class="hs-dropdown-toggle relative p-2 block bg-white rounded-lg group-hover:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700">
                    <div class="grid grid-cols-12 items-center gap-x-2">
                      <div class="col-span-10 md:col-span-8 xl:col-span-7 2xl:col-span-8">
                        <div class="flex items-center gap-x-2 truncate">
                          <div class="size-8 flex shrink-0 justify-center items-center rounded-lg">
                            <svg class="shrink-0 size-5 mx-auto" width="400" height="492" viewBox="0 0 400 492" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip1a2f0)">
                                <path d="M50.7496 -0.174609C22.9188 -0.174609 -0.0878906 22.4611 -0.0878906 50.6629V440.664C-0.0878906 468.495 22.5478 491.502 50.7496 491.502H349.095C376.926 491.502 399.932 468.866 399.932 440.664V119.683C399.932 119.683 400.675 110.406 396.593 101.129C392.882 92.5945 386.574 86.6573 386.574 86.6573L312.729 13.9263C312.729 13.9263 306.421 7.98906 297.144 3.90722C286.012 -0.916768 274.88 -0.174609 274.88 -0.174609H50.7496Z" fill="currentColor" class="fill-red-500"></path>
                                <path d="M50.7494 16.5238H274.508C274.508 16.5238 283.414 16.5238 290.094 19.4924C296.402 22.09 300.855 26.1718 300.855 26.1718L374.699 98.5317C374.699 98.5317 379.152 103.356 381.378 108.18C383.234 112.262 383.234 119.312 383.234 119.312V119.683V441.035C383.234 459.96 368.02 475.174 349.095 475.174H50.7494C31.8245 475.174 16.6104 459.96 16.6104 441.035V50.6629C16.6104 31.738 31.8245 16.5238 50.7494 16.5238Z" fill="currentColor" class="fill-white dark:fill-neutral-800"></path>
                                <path d="M99.7314 292.976C88.2281 281.472 100.845 265.887 134.242 248.818L155.393 238.427L163.557 220.245C168.009 210.226 175.06 193.898 178.771 184.25L185.45 166.439L180.626 153.08C174.689 136.752 172.833 112.261 176.544 103.356C181.368 91.4812 197.696 92.5944 204.004 105.582C209.199 115.601 208.457 133.784 202.52 156.791L197.696 175.715L202.148 183.137C204.375 187.219 211.425 196.867 217.363 204.288L228.866 218.389L242.967 216.534C288.238 210.597 303.452 220.616 303.452 235.088C303.452 253.27 267.829 254.755 238.143 233.974C231.464 229.15 227.011 224.698 227.011 224.698C227.011 224.698 208.457 228.408 199.18 231.006C189.532 233.603 185.079 235.088 170.978 239.912C170.978 239.912 166.154 246.962 162.814 252.157C150.94 271.453 137.21 287.038 127.191 292.976C117.172 298.171 105.669 298.542 99.7314 292.976ZM117.914 286.296C124.222 282.214 137.581 267 146.487 252.528L150.198 246.591L133.499 255.126C107.895 268.113 96.0207 280.359 101.958 287.781C105.298 291.862 109.75 291.491 117.914 286.296ZM285.27 239.541C291.578 235.088 290.836 226.182 283.414 222.471C277.848 219.502 273.395 219.131 258.923 219.131C250.017 219.874 235.916 221.358 233.319 222.1C233.319 222.1 241.112 227.666 244.451 229.522C248.904 232.119 260.407 236.943 268.571 239.541C276.735 242.138 281.559 242.138 285.27 239.541ZM217.734 211.339C214.023 207.257 207.344 199.093 203.262 192.785C197.696 185.735 195.098 180.911 195.098 180.911C195.098 180.911 191.016 193.527 188.048 201.32L178.029 226.182L175.06 231.748C175.06 231.748 190.645 226.553 198.438 224.698C206.972 222.471 223.671 219.131 223.671 219.131L217.734 211.339ZM196.211 124.507C197.324 116.343 197.696 108.18 195.098 104.098C187.677 96.3051 179.142 102.613 180.626 121.538C180.997 127.847 182.853 138.979 184.708 145.658L188.419 157.904L191.016 148.627C192.501 143.803 194.727 132.671 196.211 124.507Z" fill="currentColor" class="fill-red-500"></path>
                                <path d="M119.398 346.04H137.952C143.889 346.04 148.713 346.782 152.424 347.895C156.135 349.008 159.104 351.606 161.701 355.316C164.299 359.027 165.412 363.851 165.412 369.046C165.412 373.87 164.299 378.323 162.443 381.663C160.217 385.374 157.619 387.971 154.28 389.455C150.94 390.94 145.374 391.682 138.323 391.682H132.015V420.997H119.398V346.04ZM132.015 355.688V382.034H138.323C143.889 382.034 147.6 380.921 149.827 379.065C152.053 376.839 153.166 373.499 153.166 369.046C153.166 365.707 152.424 362.738 150.94 360.512C149.456 358.285 147.971 357.172 146.487 356.43C145.003 356.059 142.034 355.688 138.694 355.688H132.015Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                                <path d="M175.431 346.04H192.501C200.664 346.04 207.344 347.524 212.168 350.492C216.992 353.461 220.702 357.543 223.3 363.48C225.898 369.046 227.011 375.726 227.011 382.405C227.011 389.827 225.898 396.506 223.671 402.072C221.445 407.638 218.105 412.462 213.281 415.802C208.828 419.513 202.149 420.997 193.243 420.997H175.431V346.04ZM187.677 356.059V411.349H192.872C200.293 411.349 205.488 408.751 208.828 403.927C212.168 398.732 213.652 392.053 213.652 383.889C213.652 365.336 206.602 356.059 192.872 356.059H187.677Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                                <path d="M238.885 346.04H280.816V356.059H251.501V378.694H274.879V388.713H251.501V421.368H238.885V346.04Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                              </g>
                              <defs>
                                <clipPath id="clip1a2f0">
                                  <rect width="400" height="491.75" fill="white"></rect>
                                </clipPath>
                              </defs>
                            </svg>
                          </div>
                          <p class="truncate text-sm text-gray-800 dark:text-neutral-200">
                            Untitled.pdf
                          </p>
                        </div>
                      </div>

                      <div class="col-span-2 xl:col-span-1">
                        <p class="xl:truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          41 kb
                        </p>
                      </div>

                      <div class="md:col-span-2 hidden md:block">
                        <div class="flex items-center gap-x-2">

                          <img class="shrink-0 size-5 rounded-full" src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=320&amp;h=320&amp;q=80" alt="Avatar">
                          <div class="grow">
                            <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                              Only you
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="xl:col-span-2 2xl:col-span-1 hidden xl:block">
                        <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          Dec 3, 2024
                        </p>
                      </div>
                    </div>

                    <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                  </div>

                  <!-- More Dropdown -->
                  <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                    <div class="p-1">
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                          <polyline points="16 6 12 2 8 6"></polyline>
                          <line x1="12" x2="12" y1="2" y2="15"></line>
                        </svg>
                        Share folder
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="15 14 20 9 15 4"></polyline>
                          <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                        </svg>
                        Move to
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                        Add to starred
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                          <path d="m15 5 4 4"></path>
                        </svg>
                        Rename
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                          <polyline points="7 10 12 15 17 10"></polyline>
                          <line x1="12" x2="12" y1="15" y2="3"></line>
                        </svg>
                        Download
                      </button>

                      <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                          <line x1="4" x2="4" y1="22" y2="15"></line>
                        </svg>
                        Report
                      </button>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M3 6h18"></path>
                          <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                          <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                          <line x1="10" x2="10" y1="11" y2="17"></line>
                          <line x1="14" x2="14" y1="11" y2="17"></line>
                        </svg>
                        Delete
                      </button>
                    </div>
                  </div>
                  <!-- End More Dropdown -->
                </div>
                <!-- End Card -->
              </div>

              <div class="py-1 border-t border-gray-200 first:pt-0 last:pb-0 first:border-t-0 dark:border-neutral-700">
                <!-- Card -->
                <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                  <div class="hs-dropdown-toggle relative p-2 block bg-white rounded-lg group-hover:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700">
                    <div class="grid grid-cols-12 items-center gap-x-2">
                      <div class="col-span-10 md:col-span-8 xl:col-span-7 2xl:col-span-8">
                        <div class="flex items-center gap-x-2 truncate">
                          <div class="size-8 flex shrink-0 justify-center items-center rounded-lg">
                            <svg class="shrink-0 size-5 mx-auto" width="400" height="492" viewBox="0 0 400 492" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip1302qk0-)">
                                <path d="M50.7496 -0.174609C22.9188 -0.174609 -0.0878906 22.4611 -0.0878906 50.6629V440.664C-0.0878906 468.495 22.5478 491.502 50.7496 491.502H349.095C376.926 491.502 399.932 468.866 399.932 440.664V119.683C399.932 119.683 400.675 110.406 396.593 101.129C392.882 92.5945 386.574 86.6573 386.574 86.6573L312.729 13.9263C312.729 13.9263 306.421 7.98906 297.144 3.90722C286.012 -0.916768 274.88 -0.174609 274.88 -0.174609H50.7496Z" fill="currentColor" class="fill-red-500"></path>
                                <path d="M50.7494 16.5238H274.508C274.508 16.5238 283.414 16.5238 290.094 19.4924C296.402 22.09 300.855 26.1718 300.855 26.1718L374.699 98.5317C374.699 98.5317 379.152 103.356 381.378 108.18C383.234 112.262 383.234 119.312 383.234 119.312V119.683V441.035C383.234 459.96 368.02 475.174 349.095 475.174H50.7494C31.8245 475.174 16.6104 459.96 16.6104 441.035V50.6629C16.6104 31.738 31.8245 16.5238 50.7494 16.5238Z" fill="currentColor" class="fill-white dark:fill-neutral-800"></path>
                                <path d="M99.7314 292.976C88.2281 281.472 100.845 265.887 134.242 248.818L155.393 238.427L163.557 220.245C168.009 210.226 175.06 193.898 178.771 184.25L185.45 166.439L180.626 153.08C174.689 136.752 172.833 112.261 176.544 103.356C181.368 91.4812 197.696 92.5944 204.004 105.582C209.199 115.601 208.457 133.784 202.52 156.791L197.696 175.715L202.148 183.137C204.375 187.219 211.425 196.867 217.363 204.288L228.866 218.389L242.967 216.534C288.238 210.597 303.452 220.616 303.452 235.088C303.452 253.27 267.829 254.755 238.143 233.974C231.464 229.15 227.011 224.698 227.011 224.698C227.011 224.698 208.457 228.408 199.18 231.006C189.532 233.603 185.079 235.088 170.978 239.912C170.978 239.912 166.154 246.962 162.814 252.157C150.94 271.453 137.21 287.038 127.191 292.976C117.172 298.171 105.669 298.542 99.7314 292.976ZM117.914 286.296C124.222 282.214 137.581 267 146.487 252.528L150.198 246.591L133.499 255.126C107.895 268.113 96.0207 280.359 101.958 287.781C105.298 291.862 109.75 291.491 117.914 286.296ZM285.27 239.541C291.578 235.088 290.836 226.182 283.414 222.471C277.848 219.502 273.395 219.131 258.923 219.131C250.017 219.874 235.916 221.358 233.319 222.1C233.319 222.1 241.112 227.666 244.451 229.522C248.904 232.119 260.407 236.943 268.571 239.541C276.735 242.138 281.559 242.138 285.27 239.541ZM217.734 211.339C214.023 207.257 207.344 199.093 203.262 192.785C197.696 185.735 195.098 180.911 195.098 180.911C195.098 180.911 191.016 193.527 188.048 201.32L178.029 226.182L175.06 231.748C175.06 231.748 190.645 226.553 198.438 224.698C206.972 222.471 223.671 219.131 223.671 219.131L217.734 211.339ZM196.211 124.507C197.324 116.343 197.696 108.18 195.098 104.098C187.677 96.3051 179.142 102.613 180.626 121.538C180.997 127.847 182.853 138.979 184.708 145.658L188.419 157.904L191.016 148.627C192.501 143.803 194.727 132.671 196.211 124.507Z" fill="currentColor" class="fill-red-500"></path>
                                <path d="M119.398 346.04H137.952C143.889 346.04 148.713 346.782 152.424 347.895C156.135 349.008 159.104 351.606 161.701 355.316C164.299 359.027 165.412 363.851 165.412 369.046C165.412 373.87 164.299 378.323 162.443 381.663C160.217 385.374 157.619 387.971 154.28 389.455C150.94 390.94 145.374 391.682 138.323 391.682H132.015V420.997H119.398V346.04ZM132.015 355.688V382.034H138.323C143.889 382.034 147.6 380.921 149.827 379.065C152.053 376.839 153.166 373.499 153.166 369.046C153.166 365.707 152.424 362.738 150.94 360.512C149.456 358.285 147.971 357.172 146.487 356.43C145.003 356.059 142.034 355.688 138.694 355.688H132.015Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                                <path d="M175.431 346.04H192.501C200.664 346.04 207.344 347.524 212.168 350.492C216.992 353.461 220.702 357.543 223.3 363.48C225.898 369.046 227.011 375.726 227.011 382.405C227.011 389.827 225.898 396.506 223.671 402.072C221.445 407.638 218.105 412.462 213.281 415.802C208.828 419.513 202.149 420.997 193.243 420.997H175.431V346.04ZM187.677 356.059V411.349H192.872C200.293 411.349 205.488 408.751 208.828 403.927C212.168 398.732 213.652 392.053 213.652 383.889C213.652 365.336 206.602 356.059 192.872 356.059H187.677Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                                <path d="M238.885 346.04H280.816V356.059H251.501V378.694H274.879V388.713H251.501V421.368H238.885V346.04Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                              </g>
                              <defs>
                                <clipPath id="clip1302qk0-">
                                  <rect width="400" height="491.75" fill="white"></rect>
                                </clipPath>
                              </defs>
                            </svg>
                          </div>
                          <p class="truncate text-sm text-gray-800 dark:text-neutral-200">
                            CleanShot 2024-02-13 at 06.20.48@2x.pdf
                          </p>
                        </div>
                      </div>

                      <div class="col-span-2 xl:col-span-1">
                        <p class="xl:truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          76 kb
                        </p>
                      </div>

                      <div class="md:col-span-2 hidden md:block">
                        <div class="flex items-center gap-x-2">

                          <img class="shrink-0 size-5 rounded-full" src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=320&amp;h=320&amp;q=80" alt="Avatar">
                          <div class="grow">
                            <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                              Only you
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="xl:col-span-2 2xl:col-span-1 hidden xl:block">
                        <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          Nov 2, 2024
                        </p>
                      </div>
                    </div>

                    <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                  </div>

                  <!-- More Dropdown -->
                  <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                    <div class="p-1">
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                          <polyline points="16 6 12 2 8 6"></polyline>
                          <line x1="12" x2="12" y1="2" y2="15"></line>
                        </svg>
                        Share folder
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="15 14 20 9 15 4"></polyline>
                          <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                        </svg>
                        Move to
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                        Add to starred
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                          <path d="m15 5 4 4"></path>
                        </svg>
                        Rename
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                          <polyline points="7 10 12 15 17 10"></polyline>
                          <line x1="12" x2="12" y1="15" y2="3"></line>
                        </svg>
                        Download
                      </button>

                      <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                          <line x1="4" x2="4" y1="22" y2="15"></line>
                        </svg>
                        Report
                      </button>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M3 6h18"></path>
                          <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                          <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                          <line x1="10" x2="10" y1="11" y2="17"></line>
                          <line x1="14" x2="14" y1="11" y2="17"></line>
                        </svg>
                        Delete
                      </button>
                    </div>
                  </div>
                  <!-- End More Dropdown -->
                </div>
                <!-- End Card -->
              </div>

              <div class="py-1 border-t border-gray-200 first:pt-0 last:pb-0 first:border-t-0 dark:border-neutral-700">
                <!-- Card -->
                <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                  <div class="hs-dropdown-toggle relative p-2 block bg-white rounded-lg group-hover:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700">
                    <div class="grid grid-cols-12 items-center gap-x-2">
                      <div class="col-span-10 md:col-span-8 xl:col-span-7 2xl:col-span-8">
                        <div class="flex items-center gap-x-2 truncate">
                          <div class="size-8 flex shrink-0 justify-center items-center rounded-lg">
                            <svg class="shrink-0 size-5 mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                              <path d="M10 0H4a1.003 1.003 0 0 0-1 1v3l7.001 4L13 9.968 16 8V4z" fill="#21a366"></path>
                              <path fill="#107c41" d="M16 8H3v4l7 1.4 6-1.4V8z"></path>
                              <path d="M3 12v3a1.003 1.003 0 0 0 1 1h11a1 1 0 0 0 1-1v-3z" fill="#185c37"></path>
                              <path d="M10 4H3v10h6a2 2 0 0 0 2-2V5a1 1 0 0 0-1-1z" opacity=".5"></path>
                              <rect y="3" width="10" height="10" rx="1" fill="#107c41"></rect>
                              <path d="M2.292 11l1.942-3.008L2.455 5h1.431l.971 1.912q.134.272.184.406h.013q.096-.217.2-.423L6.293 5h1.314L5.782 7.975 7.652 11H6.255L5.133 8.9A1.753 1.753 0 0 1 5 8.62h-.016a1.324 1.324 0 0 1-.13.271L3.698 11z" fill="#fff"></path>
                              <path d="M16 1v3h-6V0h5a1.003 1.003 0 0 1 1 1z" fill="#33c481"></path>
                            </svg>
                          </div>
                          <p class="truncate text-sm text-gray-800 dark:text-neutral-200">
                            2023 Audit.xls
                          </p>
                        </div>
                      </div>

                      <div class="col-span-2 xl:col-span-1">
                        <p class="xl:truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          45 kb
                        </p>
                      </div>

                      <div class="md:col-span-2 hidden md:block">
                        <div class="flex items-center gap-x-2">

                          <span class="flex shrink-0 justify-center items-center size-5 bg-gray-200 text-gray-700 text-xs font-medium uppercase rounded-full dark:bg-neutral-700 dark:text-neutral-300">A</span>
                          <div class="grow">
                            <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                              4 members
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="xl:col-span-2 2xl:col-span-1 hidden xl:block">
                        <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          Feb 2, 2024
                        </p>
                      </div>
                    </div>

                    <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                  </div>

                  <!-- More Dropdown -->
                  <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                    <div class="p-1">
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                          <polyline points="16 6 12 2 8 6"></polyline>
                          <line x1="12" x2="12" y1="2" y2="15"></line>
                        </svg>
                        Share folder
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="15 14 20 9 15 4"></polyline>
                          <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                        </svg>
                        Move to
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                        Add to starred
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                          <path d="m15 5 4 4"></path>
                        </svg>
                        Rename
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                          <polyline points="7 10 12 15 17 10"></polyline>
                          <line x1="12" x2="12" y1="15" y2="3"></line>
                        </svg>
                        Download
                      </button>

                      <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                          <line x1="4" x2="4" y1="22" y2="15"></line>
                        </svg>
                        Report
                      </button>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M3 6h18"></path>
                          <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                          <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                          <line x1="10" x2="10" y1="11" y2="17"></line>
                          <line x1="14" x2="14" y1="11" y2="17"></line>
                        </svg>
                        Delete
                      </button>
                    </div>
                  </div>
                  <!-- End More Dropdown -->
                </div>
                <!-- End Card -->
              </div>

              <div class="py-1 border-t border-gray-200 first:pt-0 last:pb-0 first:border-t-0 dark:border-neutral-700">
                <!-- Card -->
                <div class="hs-dropdown [--trigger:contextmenu] [--scope:window] relative z-1 group">
                  <div class="hs-dropdown-toggle relative p-2 block bg-white rounded-lg group-hover:bg-gray-100 dark:bg-neutral-800 dark:group-hover:bg-neutral-700">
                    <div class="grid grid-cols-12 items-center gap-x-2">
                      <div class="col-span-10 md:col-span-8 xl:col-span-7 2xl:col-span-8">
                        <div class="flex items-center gap-x-2 truncate">
                          <div class="size-8 flex shrink-0 justify-center items-center rounded-lg">
                            <svg class="shrink-0 size-5 mx-auto" width="400" height="492" viewBox="0 0 400 492" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#cldaasd33)">
                                <path d="M50.7496 -0.174609C22.9188 -0.174609 -0.0878906 22.4611 -0.0878906 50.6629V440.664C-0.0878906 468.495 22.5478 491.502 50.7496 491.502H349.095C376.926 491.502 399.932 468.866 399.932 440.664V119.683C399.932 119.683 400.675 110.406 396.593 101.129C392.882 92.5945 386.574 86.6573 386.574 86.6573L312.729 13.9263C312.729 13.9263 306.421 7.98906 297.144 3.90722C286.012 -0.916768 274.88 -0.174609 274.88 -0.174609H50.7496Z" fill="currentColor" class="fill-red-500"></path>
                                <path d="M50.7494 16.5238H274.508C274.508 16.5238 283.414 16.5238 290.094 19.4924C296.402 22.09 300.855 26.1718 300.855 26.1718L374.699 98.5317C374.699 98.5317 379.152 103.356 381.378 108.18C383.234 112.262 383.234 119.312 383.234 119.312V119.683V441.035C383.234 459.96 368.02 475.174 349.095 475.174H50.7494C31.8245 475.174 16.6104 459.96 16.6104 441.035V50.6629C16.6104 31.738 31.8245 16.5238 50.7494 16.5238Z" fill="currentColor" class="fill-white dark:fill-neutral-800"></path>
                                <path d="M99.7314 292.976C88.2281 281.472 100.845 265.887 134.242 248.818L155.393 238.427L163.557 220.245C168.009 210.226 175.06 193.898 178.771 184.25L185.45 166.439L180.626 153.08C174.689 136.752 172.833 112.261 176.544 103.356C181.368 91.4812 197.696 92.5944 204.004 105.582C209.199 115.601 208.457 133.784 202.52 156.791L197.696 175.715L202.148 183.137C204.375 187.219 211.425 196.867 217.363 204.288L228.866 218.389L242.967 216.534C288.238 210.597 303.452 220.616 303.452 235.088C303.452 253.27 267.829 254.755 238.143 233.974C231.464 229.15 227.011 224.698 227.011 224.698C227.011 224.698 208.457 228.408 199.18 231.006C189.532 233.603 185.079 235.088 170.978 239.912C170.978 239.912 166.154 246.962 162.814 252.157C150.94 271.453 137.21 287.038 127.191 292.976C117.172 298.171 105.669 298.542 99.7314 292.976ZM117.914 286.296C124.222 282.214 137.581 267 146.487 252.528L150.198 246.591L133.499 255.126C107.895 268.113 96.0207 280.359 101.958 287.781C105.298 291.862 109.75 291.491 117.914 286.296ZM285.27 239.541C291.578 235.088 290.836 226.182 283.414 222.471C277.848 219.502 273.395 219.131 258.923 219.131C250.017 219.874 235.916 221.358 233.319 222.1C233.319 222.1 241.112 227.666 244.451 229.522C248.904 232.119 260.407 236.943 268.571 239.541C276.735 242.138 281.559 242.138 285.27 239.541ZM217.734 211.339C214.023 207.257 207.344 199.093 203.262 192.785C197.696 185.735 195.098 180.911 195.098 180.911C195.098 180.911 191.016 193.527 188.048 201.32L178.029 226.182L175.06 231.748C175.06 231.748 190.645 226.553 198.438 224.698C206.972 222.471 223.671 219.131 223.671 219.131L217.734 211.339ZM196.211 124.507C197.324 116.343 197.696 108.18 195.098 104.098C187.677 96.3051 179.142 102.613 180.626 121.538C180.997 127.847 182.853 138.979 184.708 145.658L188.419 157.904L191.016 148.627C192.501 143.803 194.727 132.671 196.211 124.507Z" fill="currentColor" class="fill-red-500"></path>
                                <path d="M119.398 346.04H137.952C143.889 346.04 148.713 346.782 152.424 347.895C156.135 349.008 159.104 351.606 161.701 355.316C164.299 359.027 165.412 363.851 165.412 369.046C165.412 373.87 164.299 378.323 162.443 381.663C160.217 385.374 157.619 387.971 154.28 389.455C150.94 390.94 145.374 391.682 138.323 391.682H132.015V420.997H119.398V346.04ZM132.015 355.688V382.034H138.323C143.889 382.034 147.6 380.921 149.827 379.065C152.053 376.839 153.166 373.499 153.166 369.046C153.166 365.707 152.424 362.738 150.94 360.512C149.456 358.285 147.971 357.172 146.487 356.43C145.003 356.059 142.034 355.688 138.694 355.688H132.015Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                                <path d="M175.431 346.04H192.501C200.664 346.04 207.344 347.524 212.168 350.492C216.992 353.461 220.702 357.543 223.3 363.48C225.898 369.046 227.011 375.726 227.011 382.405C227.011 389.827 225.898 396.506 223.671 402.072C221.445 407.638 218.105 412.462 213.281 415.802C208.828 419.513 202.149 420.997 193.243 420.997H175.431V346.04ZM187.677 356.059V411.349H192.872C200.293 411.349 205.488 408.751 208.828 403.927C212.168 398.732 213.652 392.053 213.652 383.889C213.652 365.336 206.602 356.059 192.872 356.059H187.677Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                                <path d="M238.885 346.04H280.816V356.059H251.501V378.694H274.879V388.713H251.501V421.368H238.885V346.04Z" fill="currentColor" class="fill-black dark:fill-white"></path>
                              </g>
                              <defs>
                                <clipPath id="cldaasd33">
                                  <rect width="400" height="491.75" fill="white"></rect>
                                </clipPath>
                              </defs>
                            </svg>
                          </div>
                          <p class="truncate text-sm text-gray-800 dark:text-neutral-200">
                            babe.pdf
                          </p>
                        </div>
                      </div>

                      <div class="col-span-2 xl:col-span-1">
                        <p class="xl:truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          52 kb
                        </p>
                      </div>

                      <div class="md:col-span-2 hidden md:block">
                        <div class="flex items-center gap-x-2">

                          <img class="shrink-0 size-5 rounded-full" src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=facearea&amp;facepad=3&amp;w=320&amp;h=320&amp;q=80" alt="Avatar">
                          <div class="grow">
                            <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                              Only you
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="xl:col-span-2 2xl:col-span-1 hidden xl:block">
                        <p class="truncate text-[13px] text-gray-500 dark:text-neutral-500">
                          Jan 15, 2024
                        </p>
                      </div>
                    </div>

                    <div class="after:absolute after:inset-0 after:z-1" role="button" data-hs-overlay="#hs-pro-dfo" aria-expanded="false"></div>
                  </div>

                  <!-- More Dropdown -->
                  <div class="hs-dropdown-menu z-2 hidden w-40 bg-white rounded-xl shadow-xl dark:bg-neutral-800" role="menu" aria-orientation="vertical" tabindex="-1">
                    <div class="p-1">
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                          <polyline points="16 6 12 2 8 6"></polyline>
                          <line x1="12" x2="12" y1="2" y2="15"></line>
                        </svg>
                        Share folder
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="15 14 20 9 15 4"></polyline>
                          <path d="M4 20v-7a4 4 0 0 1 4-4h12"></path>
                        </svg>
                        Move to
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                        </svg>
                        Add to starred
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"></path>
                          <path d="m15 5 4 4"></path>
                        </svg>
                        Rename
                      </button>
                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                          <polyline points="7 10 12 15 17 10"></polyline>
                          <line x1="12" x2="12" y1="15" y2="3"></line>
                        </svg>
                        Download
                      </button>

                      <div class="my-1 border-t border-gray-200 dark:border-neutral-700"></div>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path>
                          <line x1="4" x2="4" y1="22" y2="15"></line>
                        </svg>
                        Report
                      </button>

                      <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <path d="M3 6h18"></path>
                          <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                          <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                          <line x1="10" x2="10" y1="11" y2="17"></line>
                          <line x1="14" x2="14" y1="11" y2="17"></line>
                        </svg>
                        Delete
                      </button>
                    </div>
                  </div>
                  <!-- End More Dropdown -->
                </div>
                <!-- End Card -->
              </div>
            </div>
          </div>
          <!-- End Tab Content -->
        </div>
      </div>
    </div>
@endsection
@section('js')

@endsection
