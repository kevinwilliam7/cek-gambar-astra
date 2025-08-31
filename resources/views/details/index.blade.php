@extends('layouts.app')
@section('title', 'Cek Gambar | Astra')
@section('main-content')
<main id="content" class="pb-10 sm:pb-16">
    <div class="relative px-2 sm:px-5 py-5 before:absolute before:top-0 before:start-0 before:-z-1 before:w-full before:h-112.5 before:bg-indigo-900 dark:before:bg-neutral-950">
      <div class="max-w-6xl mx-auto flex flex-col gap-y-5 pt-4 md:pt-14">
        <div class="mb-3">
          <!-- Header -->
          <div class="relative flex gap-3 sm:gap-x-5 pe-11">
            <!-- Icon -->
            <span class="flex shrink-0 justify-center items-center size-19 bg-white rounded-xl dark:bg-neutral-800">
              <svg class="shrink-0 size-14" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 2L0 7.27424L8 12.471L15.9999 7.27424L8 2ZM23.9999 2L15.9999 7.27424L23.9999 12.471L31.9998 7.27424L23.9999 2ZM0 17.7451L8 23.0194L15.9999 17.7451L8 12.471L0 17.7451ZM23.9999 12.471L15.9999 17.7451L23.9999 23.0194L31.9998 17.7451L23.9999 12.471ZM8 24.7258L15.9999 30L23.9999 24.7258L15.9999 19.5291L8 24.7258Z" fill="#0062FF"></path>
              </svg>
            </span>
            <!-- End Icon -->

            <div class="grow">
              <h1 class="text-white">
                Dropbox
              </h1>
              <h2 class="font-semibold text-xl sm:text-2xl text-white">
                Get a complete store audit
              </h2>

              <!-- List -->
              <ul class="mt-1 flex flex-wrap items-center whitespace-nowrap gap-1.5">
                <li class="inline-flex items-center relative text-xs/3 pe-2.5 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:size-[3px] after:bg-white/50 after:rounded-full after:-translate-y-1/2">
                  <p class="text-xs/3 text-white/70">
                    Started: 14 April 2025
                  </p>
                </li>
                <li class="inline-flex items-center relative text-xs/3 pe-2.5 last:pe-0 last:after:hidden after:absolute after:top-1/2 after:end-0 after:inline-block after:size-[3px] after:bg-white/50 after:rounded-full after:-translate-y-1/2">
                  <p class="text-xs/3 text-white/70">
                    Deadline: 29 April 2025
                  </p>
                </li>
              </ul>
              <!-- End List -->
            </div>

            <div class="absolute top-0 end-0">
              <!-- Dropdown Link -->
              <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                <!-- Link -->
                <button id="hs-pro-pdmd" type="button" class="hs-dropdown-toggle size-9 flex shrink-0 justify-center items-center text-sm bg-white text-gray-800 rounded-lg hover:bg-white/90 focus:outline-hidden focus:bg-white/90 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                  <span class="sr-only">Customers</span>
                  <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="1"></circle>
                    <circle cx="12" cy="5" r="1"></circle>
                    <circle cx="12" cy="19" r="1"></circle>
                  </svg>
                </button>
                <!-- End Link -->

                <!-- Dropdown Menu -->
                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-40 z-10 transition-[opacity,margin] duration opacity-0 hidden bg-white rounded-xl shadow-lg dark:bg-neutral-950" role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-pdmd" tabindex="-1">
                  <div class="p-1 space-y-0.5">
                    <a class="relative group py-2 px-3 flex items-center gap-x-2.5 text-[13px] text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                      <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21.174 6.812a1 1 0 0 0-3.986-3.987L3.842 16.174a2 2 0 0 0-.5.83l-1.321 4.352a.5.5 0 0 0 .623.622l4.353-1.32a2 2 0 0 0 .83-.497z"></path>
                      </svg>
                      Edit project
                    </a>
                    <a class="relative group py-2 px-3 flex items-center gap-x-2.5 text-[13px] text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                      <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect width="20" height="5" x="2" y="3" rx="1"></rect>
                        <path d="M4 8v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8"></path>
                        <path d="M10 12h4"></path>
                      </svg>
                      Archive project
                    </a>
                    <a class="relative group py-2 px-3 flex items-center gap-x-2.5 text-[13px] text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" href="#">
                      <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 6h18"></path>
                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                        <line x1="10" x2="10" y1="11" y2="17"></line>
                        <line x1="14" x2="14" y1="11" y2="17"></line>
                      </svg>
                      Delete project
                    </a>
                  </div>
                </div>
                <!-- End Dropdown Menu -->
              </div>
              <!-- End Dropdown Link -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Header -->
        </div>

        <!-- Card -->
        <div class="flex flex-col bg-white border border-gray-200 shadow-xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
          <!-- Header -->
          <div class="py-3 px-5 border-b border-gray-200 dark:border-neutral-700">
            <div class="flex flex-wrap justify-between items-center gap-y-2 gap-x-5">
              <div>
                <h2 class="font-medium text-gray-800 dark:text-neutral-200">
                  Project progress
                </h2>
              </div>

              <!-- Status -->
              <div class="hs-tooltip inline-block">
                <span class="hs-tooltip-toggle py-1 px-2.5 inline-flex items-center gap-x-2.5 bg-green-100 text-green-700 text-start whitespace-nowrap font-medium text-[13px] rounded-full dark:bg-green-500/10 dark:text-green-400">
                  <span class="relative w-2.5 h-px bg-green-700 after:absolute after:top-1/2 after:-end-1 after:size-1.5 after:bg-green-700 after:rounded-full after:-translate-y-1/2 dark:bg-green-400 dark:after:bg-green-400"></span>
                  On&nbsp;track
                </span>
                <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 inline-block absolute invisible z-20 py-1.5 px-2.5 bg-gray-900 text-xs text-white rounded-lg dark:bg-neutral-700" role="tooltip" data-placement="top" style="position: fixed; left: 1076.6px; top: 226.75px;">
                  Everything is progressing as planned
                </span>
              </div>
              <!-- End Status -->
            </div>
          </div>
          <!-- End Header -->

          <!-- Body -->
          <div class="py-4 px-5">
            <!-- Apex Bar Chart -->
            <div id="hs-bar-chart" class="min-h-[365px] -mx-2" style="min-height: 365px;"><div id="apexchartscmfv3sef" class="apexcharts-canvas apexchartscmfv3sef apexcharts-theme-" style="width: 1126px; height: 350px;"><svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" width="1126" height="350"><foreignObject x="0" y="0" width="1126" height="350"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 175px;"></div><style type="text/css">
      .apexcharts-flip-y {
        transform: scaleY(-1) translateY(-100%);
        transform-origin: top;
        transform-box: fill-box;
      }
      .apexcharts-flip-x {
        transform: scaleX(-1);
        transform-origin: center;
        transform-box: fill-box;
      }
      .apexcharts-legend {
        display: flex;
        overflow: auto;
        padding: 0 10px;
      }
      .apexcharts-legend.apexcharts-legend-group-horizontal {
        flex-direction: column;
      }
      .apexcharts-legend-group {
        display: flex;
      }
      .apexcharts-legend-group-vertical {
        flex-direction: column-reverse;
      }
      .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
        flex-wrap: wrap
      }
      .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
        flex-direction: column;
        bottom: 0;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
        justify-content: flex-start;
        align-items: flex-start;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
        justify-content: center;
        align-items: center;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
        justify-content: flex-end;
        align-items: flex-end;
      }
      .apexcharts-legend-series {
        cursor: pointer;
        line-height: normal;
        display: flex;
        align-items: center;
      }
      .apexcharts-legend-text {
        position: relative;
        font-size: 14px;
      }
      .apexcharts-legend-text *, .apexcharts-legend-marker * {
        pointer-events: none;
      }
      .apexcharts-legend-marker {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        margin-right: 1px;
      }

      .apexcharts-legend-series.apexcharts-no-click {
        cursor: auto;
      }
      .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
        display: none !important;
      }
      .apexcharts-inactive-legend {
        opacity: 0.45;
      }

    </style></foreignObject><g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g><g class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g><g class="apexcharts-yaxis" rel="0" transform="translate(11.859375, 0)"><g class="apexcharts-yaxis-texts-g" transform="translate(-15.546875, 0)"><text x="20" y="34.333333333333336" text-anchor="left" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>5k</tspan><title>5k</title></text><text x="20" y="90.47933333333333" text-anchor="left" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>4k</tspan><title>4k</title></text><text x="20" y="146.62533333333334" text-anchor="left" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>3k</tspan><title>3k</title></text><text x="20" y="202.77133333333336" text-anchor="left" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>2k</tspan><title>2k</title></text><text x="20" y="258.9173333333334" text-anchor="left" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>1k</tspan><title>1k</title></text><text x="20" y="315.0633333333334" text-anchor="left" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>0</tspan><title>0</title></text></g></g><g class="apexcharts-inner apexcharts-graphical" transform="translate(41.859375, 30)"><defs><clipPath id="gridRectMaskcmfv3sef"><rect width="1060.984375" height="287.73" x="-3.5" y="-3.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectBarMaskcmfv3sef"><rect width="1060.984375" height="287.73" x="-3.5" y="-3.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskcmfv3sef"><rect width="1053.984375" height="280.73" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskcmfv3sef"></clipPath><clipPath id="nonForecastMaskcmfv3sef"></clipPath></defs><g class="apexcharts-grid"><g class="apexcharts-gridlines-horizontal"><line x1="0" y1="56.146" x2="1053.984375" y2="56.146" stroke="oklch(0.928 0.006 264.531)" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line x1="0" y1="112.292" x2="1053.984375" y2="112.292" stroke="oklch(0.928 0.006 264.531)" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line x1="0" y1="168.438" x2="1053.984375" y2="168.438" stroke="oklch(0.928 0.006 264.531)" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line x1="0" y1="224.584" x2="1053.984375" y2="224.584" stroke="oklch(0.928 0.006 264.531)" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g class="apexcharts-gridlines-vertical"></g><line x1="0" y1="280.73" x2="1053.984375" y2="280.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line x1="0" y1="1" x2="0" y2="280.73" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g class="apexcharts-grid-borders"><line x1="0" y1="0" x2="1053.984375" y2="0" stroke="oklch(0.928 0.006 264.531)" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line><line x1="0" y1="280.73" x2="1053.984375" y2="280.73" stroke="oklch(0.928 0.006 264.531)" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g class="apexcharts-bar-series apexcharts-plot-series"><g class="apexcharts-series" rel="1" seriesName="Expenses" data:realIndex="0"><path d="M 3.1468505859375 277.231 L 3.1468505859375 267.3872 C 3.1468505859375 266.3872 4.1468505859375 265.3872 5.1468505859375 265.3872 L 60.7271728515625 265.3872 C 61.7271728515625 265.3872 62.7271728515625 266.3872 62.7271728515625 267.3872 L 62.7271728515625 277.231 C 62.7271728515625 278.231 61.7271728515625 279.231 60.7271728515625 279.231 L 5.1468505859375 279.231 C 4.1468505859375 279.231 3.1468505859375 278.231 3.1468505859375 277.231 Z " fill="oklch(0.511 0.262 276.966)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskcmfv3sef)" pathTo="M 3.1468505859375 277.231 L 3.1468505859375 267.3872 C 3.1468505859375 266.3872 4.1468505859375 265.3872 5.1468505859375 265.3872 L 60.7271728515625 265.3872 C 61.7271728515625 265.3872 62.7271728515625 266.3872 62.7271728515625 267.3872 L 62.7271728515625 277.231 C 62.7271728515625 278.231 61.7271728515625 279.231 60.7271728515625 279.231 L 5.1468505859375 279.231 C 4.1468505859375 279.231 3.1468505859375 278.231 3.1468505859375 277.231 Z " pathFrom="M 3.1468505859375 279.231 L 3.1468505859375 279.231 L 62.7271728515625 279.231 L 62.7271728515625 279.231 L 62.7271728515625 279.231 L 62.7271728515625 279.231 L 62.7271728515625 279.231 L 3.1468505859375 279.231 Z" cy="263.88620000000003" cx="66.0208740234375" j="0" val="300" barHeight="16.8438" barWidth="62.580322265625"></path><path d="M 69.0208740234375 277.231 L 69.0208740234375 256.158 C 69.0208740234375 255.15800000000002 70.0208740234375 254.15800000000002 71.0208740234375 254.15800000000002 L 126.6011962890625 254.15800000000002 C 127.6011962890625 254.15800000000002 128.6011962890625 255.15800000000002 128.6011962890625 256.158 L 128.6011962890625 277.231 C 128.6011962890625 278.231 127.6011962890625 279.231 126.6011962890625 279.231 L 71.0208740234375 279.231 C 70.0208740234375 279.231 69.0208740234375 278.231 69.0208740234375 277.231 Z " fill="oklch(0.511 0.262 276.966)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskcmfv3sef)" pathTo="M 69.0208740234375 277.231 L 69.0208740234375 256.158 C 69.0208740234375 255.15800000000002 70.0208740234375 254.15800000000002 71.0208740234375 254.15800000000002 L 126.6011962890625 254.15800000000002 C 127.6011962890625 254.15800000000002 128.6011962890625 255.15800000000002 128.6011962890625 256.158 L 128.6011962890625 277.231 C 128.6011962890625 278.231 127.6011962890625 279.231 126.6011962890625 279.231 L 71.0208740234375 279.231 C 70.0208740234375 279.231 69.0208740234375 278.231 69.0208740234375 277.231 Z " pathFrom="M 69.0208740234375 279.231 L 69.0208740234375 279.231 L 128.6011962890625 279.231 L 128.6011962890625 279.231 L 128.6011962890625 279.231 L 128.6011962890625 279.231 L 128.6011962890625 279.231 L 69.0208740234375 279.231 Z" cy="252.657" cx="131.8948974609375" j="1" val="500" barHeight="28.073000000000004" barWidth="62.580322265625"></path><path d="M 134.8948974609375 277.231 L 134.8948974609375 244.92880000000002 C 134.8948974609375 243.92880000000002 135.8948974609375 242.92880000000002 136.8948974609375 242.92880000000002 L 192.4752197265625 242.92880000000002 C 193.4752197265625 242.92880000000002 194.4752197265625 243.92880000000002 194.4752197265625 244.92880000000002 L 194.4752197265625 277.231 C 194.4752197265625 278.231 193.4752197265625 279.231 192.4752197265625 279.231 L 136.8948974609375 279.231 C 135.8948974609375 279.231 134.8948974609375 278.231 134.8948974609375 277.231 Z " fill="oklch(0.511 0.262 276.966)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskcmfv3sef)" pathTo="M 134.8948974609375 277.231 L 134.8948974609375 244.92880000000002 C 134.8948974609375 243.92880000000002 135.8948974609375 242.92880000000002 136.8948974609375 242.92880000000002 L 192.4752197265625 242.92880000000002 C 193.4752197265625 242.92880000000002 194.4752197265625 243.92880000000002 194.4752197265625 244.92880000000002 L 194.4752197265625 277.231 C 194.4752197265625 278.231 193.4752197265625 279.231 192.4752197265625 279.231 L 136.8948974609375 279.231 C 135.8948974609375 279.231 134.8948974609375 278.231 134.8948974609375 277.231 Z " pathFrom="M 134.8948974609375 279.231 L 134.8948974609375 279.231 L 194.4752197265625 279.231 L 194.4752197265625 279.231 L 194.4752197265625 279.231 L 194.4752197265625 279.231 L 194.4752197265625 279.231 L 134.8948974609375 279.231 Z" cy="241.42780000000002" cx="197.7689208984375" j="2" val="700" barHeight="39.302200000000006" barWidth="62.580322265625"></path><path d="M 200.7689208984375 277.231 L 200.7689208984375 233.6996 C 200.7689208984375 232.6996 201.7689208984375 231.6996 202.7689208984375 231.6996 L 258.3492431640625 231.6996 C 259.3492431640625 231.6996 260.3492431640625 232.6996 260.3492431640625 233.6996 L 260.3492431640625 277.231 C 260.3492431640625 278.231 259.3492431640625 279.231 258.3492431640625 279.231 L 202.7689208984375 279.231 C 201.7689208984375 279.231 200.7689208984375 278.231 200.7689208984375 277.231 Z " fill="oklch(0.511 0.262 276.966)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskcmfv3sef)" pathTo="M 200.7689208984375 277.231 L 200.7689208984375 233.6996 C 200.7689208984375 232.6996 201.7689208984375 231.6996 202.7689208984375 231.6996 L 258.3492431640625 231.6996 C 259.3492431640625 231.6996 260.3492431640625 232.6996 260.3492431640625 233.6996 L 260.3492431640625 277.231 C 260.3492431640625 278.231 259.3492431640625 279.231 258.3492431640625 279.231 L 202.7689208984375 279.231 C 201.7689208984375 279.231 200.7689208984375 278.231 200.7689208984375 277.231 Z " pathFrom="M 200.7689208984375 279.231 L 200.7689208984375 279.231 L 260.3492431640625 279.231 L 260.3492431640625 279.231 L 260.3492431640625 279.231 L 260.3492431640625 279.231 L 260.3492431640625 279.231 L 200.7689208984375 279.231 Z" cy="230.1986" cx="263.6429443359375" j="3" val="900" barHeight="50.531400000000005" barWidth="62.580322265625"></path><path d="M 266.6429443359375 277.231 L 266.6429443359375 222.4704 C 266.6429443359375 221.4704 267.6429443359375 220.4704 268.6429443359375 220.4704 L 324.2232666015625 220.4704 C 325.2232666015625 220.4704 326.2232666015625 221.4704 326.2232666015625 222.4704 L 326.2232666015625 277.231 C 326.2232666015625 278.231 325.2232666015625 279.231 324.2232666015625 279.231 L 268.6429443359375 279.231 C 267.6429443359375 279.231 266.6429443359375 278.231 266.6429443359375 277.231 Z " fill="oklch(0.511 0.262 276.966)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskcmfv3sef)" pathTo="M 266.6429443359375 277.231 L 266.6429443359375 222.4704 C 266.6429443359375 221.4704 267.6429443359375 220.4704 268.6429443359375 220.4704 L 324.2232666015625 220.4704 C 325.2232666015625 220.4704 326.2232666015625 221.4704 326.2232666015625 222.4704 L 326.2232666015625 277.231 C 326.2232666015625 278.231 325.2232666015625 279.231 324.2232666015625 279.231 L 268.6429443359375 279.231 C 267.6429443359375 279.231 266.6429443359375 278.231 266.6429443359375 277.231 Z " pathFrom="M 266.6429443359375 279.231 L 266.6429443359375 279.231 L 326.2232666015625 279.231 L 326.2232666015625 279.231 L 326.2232666015625 279.231 L 326.2232666015625 279.231 L 326.2232666015625 279.231 L 266.6429443359375 279.231 Z" cy="218.9694" cx="329.5169677734375" j="4" val="1100" barHeight="61.760600000000004" barWidth="62.580322265625"></path><path d="M 332.5169677734375 277.231 L 332.5169677734375 211.24120000000002 C 332.5169677734375 210.24120000000002 333.5169677734375 209.24120000000002 334.5169677734375 209.24120000000002 L 390.0972900390625 209.24120000000002 C 391.0972900390625 209.24120000000002 392.0972900390625 210.24120000000002 392.0972900390625 211.24120000000002 L 392.0972900390625 277.231 C 392.0972900390625 278.231 391.0972900390625 279.231 390.0972900390625 279.231 L 334.5169677734375 279.231 C 333.5169677734375 279.231 332.5169677734375 278.231 332.5169677734375 277.231 Z " fill="oklch(0.511 0.262 276.966)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskcmfv3sef)" pathTo="M 332.5169677734375 277.231 L 332.5169677734375 211.24120000000002 C 332.5169677734375 210.24120000000002 333.5169677734375 209.24120000000002 334.5169677734375 209.24120000000002 L 390.0972900390625 209.24120000000002 C 391.0972900390625 209.24120000000002 392.0972900390625 210.24120000000002 392.0972900390625 211.24120000000002 L 392.0972900390625 277.231 C 392.0972900390625 278.231 391.0972900390625 279.231 390.0972900390625 279.231 L 334.5169677734375 279.231 C 333.5169677734375 279.231 332.5169677734375 278.231 332.5169677734375 277.231 Z " pathFrom="M 332.5169677734375 279.231 L 332.5169677734375 279.231 L 392.0972900390625 279.231 L 392.0972900390625 279.231 L 392.0972900390625 279.231 L 392.0972900390625 279.231 L 392.0972900390625 279.231 L 332.5169677734375 279.231 Z" cy="207.74020000000002" cx="395.3909912109375" j="5" val="1300" barHeight="72.9898" barWidth="62.580322265625"></path><path d="M 398.3909912109375 277.231 L 398.3909912109375 200.01200000000003 C 398.3909912109375 199.01200000000003 399.3909912109375 198.01200000000003 400.3909912109375 198.01200000000003 L 455.9713134765625 198.01200000000003 C 456.9713134765625 198.01200000000003 457.9713134765625 199.01200000000003 457.9713134765625 200.01200000000003 L 457.9713134765625 277.231 C 457.9713134765625 278.231 456.9713134765625 279.231 455.9713134765625 279.231 L 400.3909912109375 279.231 C 399.3909912109375 279.231 398.3909912109375 278.231 398.3909912109375 277.231 Z " fill="oklch(0.511 0.262 276.966)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskcmfv3sef)" pathTo="M 398.3909912109375 277.231 L 398.3909912109375 200.01200000000003 C 398.3909912109375 199.01200000000003 399.3909912109375 198.01200000000003 400.3909912109375 198.01200000000003 L 455.9713134765625 198.01200000000003 C 456.9713134765625 198.01200000000003 457.9713134765625 199.01200000000003 457.9713134765625 200.01200000000003 L 457.9713134765625 277.231 C 457.9713134765625 278.231 456.9713134765625 279.231 455.9713134765625 279.231 L 400.3909912109375 279.231 C 399.3909912109375 279.231 398.3909912109375 278.231 398.3909912109375 277.231 Z " pathFrom="M 398.3909912109375 279.231 L 398.3909912109375 279.231 L 457.9713134765625 279.231 L 457.9713134765625 279.231 L 457.9713134765625 279.231 L 457.9713134765625 279.231 L 457.9713134765625 279.231 L 398.3909912109375 279.231 Z" cy="196.51100000000002" cx="461.2650146484375" j="6" val="1500" barHeight="84.21900000000001" barWidth="62.580322265625"></path><path d="M 464.2650146484375 277.231 L 464.2650146484375 177.55360000000002 C 464.2650146484375 176.55360000000002 465.2650146484375 175.55360000000002 466.2650146484375 175.55360000000002 L 521.8453369140625 175.55360000000002 C 522.8453369140625 175.55360000000002 523.8453369140625 176.55360000000002 523.8453369140625 177.55360000000002 L 523.8453369140625 277.231 C 523.8453369140625 278.231 522.8453369140625 279.231 521.8453369140625 279.231 L 466.2650146484375 279.231 C 465.2650146484375 279.231 464.2650146484375 278.231 464.2650146484375 277.231 Z " fill="oklch(0.511 0.262 276.966)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskcmfv3sef)" pathTo="M 464.2650146484375 277.231 L 464.2650146484375 177.55360000000002 C 464.2650146484375 176.55360000000002 465.2650146484375 175.55360000000002 466.2650146484375 175.55360000000002 L 521.8453369140625 175.55360000000002 C 522.8453369140625 175.55360000000002 523.8453369140625 176.55360000000002 523.8453369140625 177.55360000000002 L 523.8453369140625 277.231 C 523.8453369140625 278.231 522.8453369140625 279.231 521.8453369140625 279.231 L 466.2650146484375 279.231 C 465.2650146484375 279.231 464.2650146484375 278.231 464.2650146484375 277.231 Z " pathFrom="M 464.2650146484375 279.231 L 464.2650146484375 279.231 L 523.8453369140625 279.231 L 523.8453369140625 279.231 L 523.8453369140625 279.231 L 523.8453369140625 279.231 L 523.8453369140625 279.231 L 464.2650146484375 279.231 Z" cy="174.0526" cx="527.1390380859375" j="7" val="1900" barHeight="106.6774" barWidth="62.580322265625"></path><path d="M 530.1390380859375 277.231 L 530.1390380859375 166.3244 C 530.1390380859375 165.3244 531.1390380859375 164.3244 532.1390380859375 164.3244 L 587.7193603515625 164.3244 C 588.7193603515625 164.3244 589.7193603515625 165.3244 589.7193603515625 166.3244 L 589.7193603515625 277.231 C 589.7193603515625 278.231 588.7193603515625 279.231 587.7193603515625 279.231 L 532.1390380859375 279.231 C 531.1390380859375 279.231 530.1390380859375 278.231 530.1390380859375 277.231 Z " fill="oklch(0.511 0.262 276.966)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskcmfv3sef)" pathTo="M 530.1390380859375 277.231 L 530.1390380859375 166.3244 C 530.1390380859375 165.3244 531.1390380859375 164.3244 532.1390380859375 164.3244 L 587.7193603515625 164.3244 C 588.7193603515625 164.3244 589.7193603515625 165.3244 589.7193603515625 166.3244 L 589.7193603515625 277.231 C 589.7193603515625 278.231 588.7193603515625 279.231 587.7193603515625 279.231 L 532.1390380859375 279.231 C 531.1390380859375 279.231 530.1390380859375 278.231 530.1390380859375 277.231 Z " pathFrom="M 530.1390380859375 279.231 L 530.1390380859375 279.231 L 589.7193603515625 279.231 L 589.7193603515625 279.231 L 589.7193603515625 279.231 L 589.7193603515625 279.231 L 589.7193603515625 279.231 L 530.1390380859375 279.231 Z" cy="162.8234" cx="593.0130615234375" j="8" val="2100" barHeight="117.90660000000001" barWidth="62.580322265625"></path><path d="M 596.0130615234375 277.231 L 596.0130615234375 143.866 C 596.0130615234375 142.866 597.0130615234375 141.866 598.0130615234375 141.866 L 653.5933837890625 141.866 C 654.5933837890625 141.866 655.5933837890625 142.866 655.5933837890625 143.866 L 655.5933837890625 277.231 C 655.5933837890625 278.231 654.5933837890625 279.231 653.5933837890625 279.231 L 598.0130615234375 279.231 C 597.0130615234375 279.231 596.0130615234375 278.231 596.0130615234375 277.231 Z " fill="oklch(0.511 0.262 276.966)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskcmfv3sef)" pathTo="M 596.0130615234375 277.231 L 596.0130615234375 143.866 C 596.0130615234375 142.866 597.0130615234375 141.866 598.0130615234375 141.866 L 653.5933837890625 141.866 C 654.5933837890625 141.866 655.5933837890625 142.866 655.5933837890625 143.866 L 655.5933837890625 277.231 C 655.5933837890625 278.231 654.5933837890625 279.231 653.5933837890625 279.231 L 598.0130615234375 279.231 C 597.0130615234375 279.231 596.0130615234375 278.231 596.0130615234375 277.231 Z " pathFrom="M 596.0130615234375 279.231 L 596.0130615234375 279.231 L 655.5933837890625 279.231 L 655.5933837890625 279.231 L 655.5933837890625 279.231 L 655.5933837890625 279.231 L 655.5933837890625 279.231 L 596.0130615234375 279.231 Z" cy="140.365" cx="658.8870849609375" j="9" val="2500" barHeight="140.365" barWidth="62.580322265625"></path><path d="M 661.8870849609375 277.231 L 661.8870849609375 127.0222 C 661.8870849609375 126.0222 662.8870849609375 125.0222 663.8870849609375 125.0222 L 719.4674072265625 125.0222 C 720.4674072265625 125.0222 721.4674072265625 126.0222 721.4674072265625 127.0222 L 721.4674072265625 277.231 C 721.4674072265625 278.231 720.4674072265625 279.231 719.4674072265625 279.231 L 663.8870849609375 279.231 C 662.8870849609375 279.231 661.8870849609375 278.231 661.8870849609375 277.231 Z " fill="oklch(0.511 0.262 276.966)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskcmfv3sef)" pathTo="M 661.8870849609375 277.231 L 661.8870849609375 127.0222 C 661.8870849609375 126.0222 662.8870849609375 125.0222 663.8870849609375 125.0222 L 719.4674072265625 125.0222 C 720.4674072265625 125.0222 721.4674072265625 126.0222 721.4674072265625 127.0222 L 721.4674072265625 277.231 C 721.4674072265625 278.231 720.4674072265625 279.231 719.4674072265625 279.231 L 663.8870849609375 279.231 C 662.8870849609375 279.231 661.8870849609375 278.231 661.8870849609375 277.231 Z " pathFrom="M 661.8870849609375 279.231 L 661.8870849609375 279.231 L 721.4674072265625 279.231 L 721.4674072265625 279.231 L 721.4674072265625 279.231 L 721.4674072265625 279.231 L 721.4674072265625 279.231 L 661.8870849609375 279.231 Z" cy="123.5212" cx="724.7611083984375" j="10" val="2800" barHeight="157.20880000000002" barWidth="62.580322265625"></path><path d="M 727.7611083984375 277.231 L 727.7611083984375 104.56380000000001 C 727.7611083984375 103.56380000000001 728.7611083984375 102.56380000000001 729.7611083984375 102.56380000000001 L 785.3414306640625 102.56380000000001 C 786.3414306640625 102.56380000000001 787.3414306640625 103.56380000000001 787.3414306640625 104.56380000000001 L 787.3414306640625 277.231 C 787.3414306640625 278.231 786.3414306640625 279.231 785.3414306640625 279.231 L 729.7611083984375 279.231 C 728.7611083984375 279.231 727.7611083984375 278.231 727.7611083984375 277.231 Z " fill="oklch(0.511 0.262 276.966)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskcmfv3sef)" pathTo="M 727.7611083984375 277.231 L 727.7611083984375 104.56380000000001 C 727.7611083984375 103.56380000000001 728.7611083984375 102.56380000000001 729.7611083984375 102.56380000000001 L 785.3414306640625 102.56380000000001 C 786.3414306640625 102.56380000000001 787.3414306640625 103.56380000000001 787.3414306640625 104.56380000000001 L 787.3414306640625 277.231 C 787.3414306640625 278.231 786.3414306640625 279.231 785.3414306640625 279.231 L 729.7611083984375 279.231 C 728.7611083984375 279.231 727.7611083984375 278.231 727.7611083984375 277.231 Z " pathFrom="M 727.7611083984375 279.231 L 727.7611083984375 279.231 L 787.3414306640625 279.231 L 787.3414306640625 279.231 L 787.3414306640625 279.231 L 787.3414306640625 279.231 L 787.3414306640625 279.231 L 727.7611083984375 279.231 Z" cy="101.06280000000001" cx="790.6351318359375" j="11" val="3200" barHeight="179.6672" barWidth="62.580322265625"></path><path d="M 793.6351318359375 277.231 L 793.6351318359375 82.1054 C 793.6351318359375 81.1054 794.6351318359375 80.1054 795.6351318359375 80.1054 L 851.2154541015625 80.1054 C 852.2154541015625 80.1054 853.2154541015625 81.1054 853.2154541015625 82.1054 L 853.2154541015625 277.231 C 853.2154541015625 278.231 852.2154541015625 279.231 851.2154541015625 279.231 L 795.6351318359375 279.231 C 794.6351318359375 279.231 793.6351318359375 278.231 793.6351318359375 277.231 Z " fill="oklch(0.511 0.262 276.966)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskcmfv3sef)" pathTo="M 793.6351318359375 277.231 L 793.6351318359375 82.1054 C 793.6351318359375 81.1054 794.6351318359375 80.1054 795.6351318359375 80.1054 L 851.2154541015625 80.1054 C 852.2154541015625 80.1054 853.2154541015625 81.1054 853.2154541015625 82.1054 L 853.2154541015625 277.231 C 853.2154541015625 278.231 852.2154541015625 279.231 851.2154541015625 279.231 L 795.6351318359375 279.231 C 794.6351318359375 279.231 793.6351318359375 278.231 793.6351318359375 277.231 Z " pathFrom="M 793.6351318359375 279.231 L 793.6351318359375 279.231 L 853.2154541015625 279.231 L 853.2154541015625 279.231 L 853.2154541015625 279.231 L 853.2154541015625 279.231 L 853.2154541015625 279.231 L 793.6351318359375 279.231 Z" cy="78.6044" cx="856.5091552734375" j="12" val="3600" barHeight="202.12560000000002" barWidth="62.580322265625"></path><path d="M 859.5091552734375 277.231 L 859.5091552734375 70.87620000000001 C 859.5091552734375 69.87620000000001 860.5091552734375 68.87620000000001 861.5091552734375 68.87620000000001 L 917.0894775390625 68.87620000000001 C 918.0894775390625 68.87620000000001 919.0894775390625 69.87620000000001 919.0894775390625 70.87620000000001 L 919.0894775390625 277.231 C 919.0894775390625 278.231 918.0894775390625 279.231 917.0894775390625 279.231 L 861.5091552734375 279.231 C 860.5091552734375 279.231 859.5091552734375 278.231 859.5091552734375 277.231 Z " fill="oklch(0.511 0.262 276.966)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskcmfv3sef)" pathTo="M 859.5091552734375 277.231 L 859.5091552734375 70.87620000000001 C 859.5091552734375 69.87620000000001 860.5091552734375 68.87620000000001 861.5091552734375 68.87620000000001 L 917.0894775390625 68.87620000000001 C 918.0894775390625 68.87620000000001 919.0894775390625 69.87620000000001 919.0894775390625 70.87620000000001 L 919.0894775390625 277.231 C 919.0894775390625 278.231 918.0894775390625 279.231 917.0894775390625 279.231 L 861.5091552734375 279.231 C 860.5091552734375 279.231 859.5091552734375 278.231 859.5091552734375 277.231 Z " pathFrom="M 859.5091552734375 279.231 L 859.5091552734375 279.231 L 919.0894775390625 279.231 L 919.0894775390625 279.231 L 919.0894775390625 279.231 L 919.0894775390625 279.231 L 919.0894775390625 279.231 L 859.5091552734375 279.231 Z" cy="67.3752" cx="922.3831787109375" j="13" val="3800" barHeight="213.3548" barWidth="62.580322265625"></path><path d="M 925.3831787109375 277.231 L 925.3831787109375 54.03239999999999 C 925.3831787109375 53.03239999999999 926.3831787109375 52.03239999999999 927.3831787109375 52.03239999999999 L 982.9635009765625 52.03239999999999 C 983.9635009765625 52.03239999999999 984.9635009765625 53.03239999999999 984.9635009765625 54.03239999999999 L 984.9635009765625 277.231 C 984.9635009765625 278.231 983.9635009765625 279.231 982.9635009765625 279.231 L 927.3831787109375 279.231 C 926.3831787109375 279.231 925.3831787109375 278.231 925.3831787109375 277.231 Z " fill="oklch(0.511 0.262 276.966)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskcmfv3sef)" pathTo="M 925.3831787109375 277.231 L 925.3831787109375 54.03239999999999 C 925.3831787109375 53.03239999999999 926.3831787109375 52.03239999999999 927.3831787109375 52.03239999999999 L 982.9635009765625 52.03239999999999 C 983.9635009765625 52.03239999999999 984.9635009765625 53.03239999999999 984.9635009765625 54.03239999999999 L 984.9635009765625 277.231 C 984.9635009765625 278.231 983.9635009765625 279.231 982.9635009765625 279.231 L 927.3831787109375 279.231 C 926.3831787109375 279.231 925.3831787109375 278.231 925.3831787109375 277.231 Z " pathFrom="M 925.3831787109375 279.231 L 925.3831787109375 279.231 L 984.9635009765625 279.231 L 984.9635009765625 279.231 L 984.9635009765625 279.231 L 984.9635009765625 279.231 L 984.9635009765625 279.231 L 925.3831787109375 279.231 Z" cy="50.53139999999999" cx="988.2572021484375" j="14" val="4100" barHeight="230.19860000000003" barWidth="62.580322265625"></path><path d="M 991.2572021484375 277.231 L 991.2572021484375 37.1886 C 991.2572021484375 36.1886 992.2572021484375 35.1886 993.2572021484375 35.1886 L 1048.8375244140625 35.1886 C 1049.8375244140625 35.1886 1050.8375244140625 36.1886 1050.8375244140625 37.1886 L 1050.8375244140625 277.231 C 1050.8375244140625 278.231 1049.8375244140625 279.231 1048.8375244140625 279.231 L 993.2572021484375 279.231 C 992.2572021484375 279.231 991.2572021484375 278.231 991.2572021484375 277.231 Z " fill="oklch(0.511 0.262 276.966)" fill-opacity="1" stroke="transparent" stroke-opacity="1" stroke-linecap="square" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area undefined" index="0" clip-path="url(#gridRectBarMaskcmfv3sef)" pathTo="M 991.2572021484375 277.231 L 991.2572021484375 37.1886 C 991.2572021484375 36.1886 992.2572021484375 35.1886 993.2572021484375 35.1886 L 1048.8375244140625 35.1886 C 1049.8375244140625 35.1886 1050.8375244140625 36.1886 1050.8375244140625 37.1886 L 1050.8375244140625 277.231 C 1050.8375244140625 278.231 1049.8375244140625 279.231 1048.8375244140625 279.231 L 993.2572021484375 279.231 C 992.2572021484375 279.231 991.2572021484375 278.231 991.2572021484375 277.231 Z " pathFrom="M 991.2572021484375 279.231 L 991.2572021484375 279.231 L 1050.8375244140625 279.231 L 1050.8375244140625 279.231 L 1050.8375244140625 279.231 L 1050.8375244140625 279.231 L 1050.8375244140625 279.231 L 991.2572021484375 279.231 Z" cy="33.6876" cx="1054.1312255859375" j="15" val="4400" barHeight="247.04240000000001" barWidth="62.580322265625"></path><g class="apexcharts-bar-goals-markers"><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskcmfv3sef)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskcmfv3sef)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskcmfv3sef)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskcmfv3sef)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskcmfv3sef)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskcmfv3sef)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskcmfv3sef)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskcmfv3sef)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskcmfv3sef)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskcmfv3sef)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskcmfv3sef)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskcmfv3sef)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskcmfv3sef)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskcmfv3sef)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskcmfv3sef)"></g><g className="apexcharts-bar-goals-groups" class="apexcharts-hidden-element-shown" clip-path="url(#gridRectMarkerMaskcmfv3sef)"></g></g><g class="apexcharts-bar-shadows apexcharts-hidden-element-shown"></g></g><g class="apexcharts-datalabels apexcharts-hidden-element-shown" data:realIndex="0"></g></g><line x1="0" y1="0" x2="1053.984375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line x1="0" y1="0" x2="1053.984375" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g class="apexcharts-xaxis" transform="translate(0, 0)"><g class="apexcharts-xaxis-texts-g" transform="translate(-2, -4)"><text x="28.93701171875" y="308.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>Apr 14</tspan><title>Apr 14</title></text><text x="94.81103515625" y="308.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>Apr 15</tspan><title>Apr 15</title></text><text x="160.68505859375" y="308.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>Apr 16</tspan><title>Apr 16</title></text><text x="226.55908203125" y="308.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>Apr 17</tspan><title>Apr 17</title></text><text x="292.43310546875" y="308.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>Apr 18</tspan><title>Apr 18</title></text><text x="358.30712890625" y="308.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>Apr 19</tspan><title>Apr 19</title></text><text x="424.18115234375" y="308.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>Apr 20</tspan><title>Apr 20</title></text><text x="490.05517578125" y="308.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>Apr 21</tspan><title>Apr 21</title></text><text x="555.92919921875" y="308.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>Apr 22</tspan><title>Apr 22</title></text><text x="621.80322265625" y="308.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>Apr 23</tspan><title>Apr 23</title></text><text x="687.67724609375" y="308.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>Apr 24</tspan><title>Apr 24</title></text><text x="753.55126953125" y="308.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>Apr 25</tspan><title>Apr 25</title></text><text x="819.42529296875" y="308.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>Apr 26</tspan><title>Apr 26</title></text><text x="885.29931640625" y="308.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>Apr 27</tspan><title>Apr 27</title></text><text x="951.17333984375" y="308.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>Apr 28</tspan><title>Apr 28</title></text><text x="1017.04736328125" y="308.73" text-anchor="middle" dominant-baseline="auto" font-size="13px" font-family="Inter, ui-sans-serif" font-weight="400" fill="oklch(0.707 0.022 261.325)" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Inter, ui-sans-serif;"><tspan>Apr 29</tspan><title>Apr 29</title></text></g></g><g class="apexcharts-yaxis-annotations"></g><g class="apexcharts-xaxis-annotations"></g><g class="apexcharts-point-annotations"></g></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0" style="order: 1;"><span class="apexcharts-tooltip-marker" shape="circle" style="color: oklch(0.511 0.262 276.966);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
          </div>
          <!-- End Body -->
        </div>
        <!-- End Card -->

        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
          <!-- Card -->
          <div class="p-5 flex flex-col bg-white border border-gray-200 shadow-xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <div>
              <h2 class="text-sm text-gray-500 dark:text-neutral-500">
                Total hours
              </h2>
              <span class="block font-semibold text-xl text-gray-800 dark:text-neutral-200">
                93.00
              </span>
            </div>

            <div class="mt-3 flex flex-col gap-y-0.5">
              <div class="flex flex-wrap justify-between items-center gap-3">
                <span class="text-[13px] text-gray-500 dark:text-neutral-500">
                  Billable:
                </span>
                <span class="font-medium text-sm text-gray-800 dark:text-neutral-200">
                  91.00
                </span>
              </div>

              <div class="flex flex-wrap justify-between items-center gap-3">
                <span class="text-[13px] text-gray-500 dark:text-neutral-500">
                  Non-billable:
                </span>
                <span class="font-medium text-sm text-gray-800 dark:text-neutral-200">
                  2.00
                </span>
              </div>
            </div>
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div class="p-5 flex flex-col bg-white border border-gray-200 shadow-xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <div>
              <h2 class="text-sm text-gray-500 dark:text-neutral-500">
                Budget remaining (5%)
              </h2>
              <span class="block font-semibold text-xl text-gray-800 dark:text-neutral-200">
                $7,658.24
              </span>
            </div>

            <div class="mt-3 flex flex-col gap-y-0.5">
              <div class="flex flex-wrap justify-between items-center gap-3">
                <span class="text-[13px] text-gray-500 dark:text-neutral-500">
                  Total budget:
                </span>
                <span class="font-medium text-sm text-gray-800 dark:text-neutral-200">
                  $105,545.00
                </span>
              </div>
            </div>
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div class="p-5 flex flex-col bg-white border border-gray-200 shadow-xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <div>
              <h2 class="text-sm text-gray-500 dark:text-neutral-500">
                Internal costs
              </h2>
              <span class="block font-semibold text-xl text-gray-800 dark:text-neutral-200">
                $28,490.00
              </span>
            </div>

            <div class="mt-3 flex flex-col gap-y-0.5">
              <div class="flex flex-wrap justify-between items-center gap-3">
                <span class="text-[13px] text-gray-500 dark:text-neutral-500">
                  Time:
                </span>
                <span class="font-medium text-sm text-gray-800 dark:text-neutral-200">
                  $28,490.00
                </span>
              </div>

              <div class="flex flex-wrap justify-between items-center gap-3">
                <span class="text-[13px] text-gray-500 dark:text-neutral-500">
                  Expenses:
                </span>
                <span class="font-medium text-sm text-gray-800 dark:text-neutral-200">
                  0.00
                </span>
              </div>
            </div>
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div class="p-5 flex flex-col bg-white border border-gray-200 shadow-xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <div>
              <h2 class="text-sm text-gray-500 dark:text-neutral-500">
                Uninvoiced amount
              </h2>
              <span class="block font-semibold text-xl text-gray-800 dark:text-neutral-200">
                $29,501.00
              </span>
            </div>

            <div class="mt-auto pt-2">
              <div class="mb-1">
                <p class="text-[13px] leading-2 text-gray-500 dark:text-neutral-500">
                  3 out of 5 tasks had product costs.
                </p>
              </div>
              <button type="button" class="text-[13px] text-indigo-600 hover:decoration-2 underline underline-offset-4 focus:outline-hidden focus:decoration-2 dark:text-indigo-500">
                Create invoice
              </button>
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Grid -->

        <!-- Card -->
        <div class="flex flex-col bg-white border border-gray-200 shadow-xs rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
          <!-- Header -->
          <div class="pt-3 px-3.5 border-b border-gray-200 dark:border-neutral-700">
            <div class="flex flex-wrap justify-between items-center gap-y-2 gap-x-5">
              <!-- Nav Tab -->
              <nav class="flex gap-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
                <button type="button" class="hs-tab-active:after:bg-gray-800 hs-tab-active:text-gray-800 px-2 py-1.5 mb-2 relative inline-flex justify-center items-center gap-x-2 hover:bg-gray-100 text-gray-500 hover:text-gray-800 text-sm rounded-lg disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 after:absolute after:-bottom-2 after:inset-x-2 after:z-10 after:h-0.5 after:pointer-events-none dark:hs-tab-active:text-neutral-200 dark:hs-tab-active:after:bg-neutral-400 dark:text-neutral-500 dark:hover:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden active" id="hs-pro-tabs-pdprt-item-tasks" aria-selected="true" data-hs-tab="#hs-pro-tabs-pdprt-tasks" aria-controls="hs-pro-tabs-pdprt-tasks" role="tab">
                  Tasks
                </button>
                <button type="button" class="hs-tab-active:after:bg-gray-800 hs-tab-active:text-gray-800 px-2 py-1.5 mb-2 relative inline-flex justify-center items-center gap-x-2 hover:bg-gray-100 text-gray-500 hover:text-gray-800 text-sm rounded-lg disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 after:absolute after:-bottom-2 after:inset-x-2 after:z-10 after:h-0.5 after:pointer-events-none dark:hs-tab-active:text-neutral-200 dark:hs-tab-active:after:bg-neutral-400 dark:text-neutral-500 dark:hover:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden " id="hs-pro-tabs-pdprt-item-team" aria-selected="false" data-hs-tab="#hs-pro-tabs-pdprt-team" aria-controls="hs-pro-tabs-pdprt-team" role="tab">
                  Team
                </button>
                <button type="button" class="hs-tab-active:after:bg-gray-800 hs-tab-active:text-gray-800 px-2 py-1.5 mb-2 relative inline-flex justify-center items-center gap-x-2 hover:bg-gray-100 text-gray-500 hover:text-gray-800 text-sm rounded-lg disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 after:absolute after:-bottom-2 after:inset-x-2 after:z-10 after:h-0.5 after:pointer-events-none dark:hs-tab-active:text-neutral-200 dark:hs-tab-active:after:bg-neutral-400 dark:text-neutral-500 dark:hover:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden " id="hs-pro-tabs-pdprt-item-invoices" aria-selected="false" data-hs-tab="#hs-pro-tabs-pdprt-invoices" aria-controls="hs-pro-tabs-pdprt-invoices" role="tab">
                  Invoices
                </button>
              </nav>
              <!-- End Nav Tab -->
            </div>
          </div>
          <!-- End Header -->

          <div>
            <div class="py-4 px-5 flex flex-wrap justify-between items-center gap-y-2 gap-x-5">
              <h3 class="font-semibold text-gray-800 dark:text-neutral-200">
                Today
              </h3>

              <div class="flex justify-end items-center gap-x-2">
                <!-- Calendar Dropdown -->
                <div class="hs-dropdown [--auto-close:inside] [--placement:top-right] inline-flex">
                  <button id="hs-pro-prtcm" type="button" class="p-2 inline-flex items-center text-xs font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    <svg class="shrink-0 me-2 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <rect width="18" height="18" x="3" y="4" rx="2" ry="2"></rect>
                      <line x1="16" x2="16" y1="2" y2="6"></line>
                      <line x1="8" x2="8" y1="2" y2="6"></line>
                      <line x1="3" x2="21" y1="10" y2="10"></line>
                      <path d="M8 14h.01"></path>
                      <path d="M12 14h.01"></path>
                      <path d="M16 14h.01"></path>
                      <path d="M8 18h.01"></path>
                      <path d="M12 18h.01"></path>
                      <path d="M16 18h.01"></path>
                    </svg>
                    Today
                    <svg class="shrink-0 ms-1.5 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="m6 9 6 6 6-6"></path>
                    </svg>
                  </button>

                  <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-79.5 transition-[opacity,margin] duration opacity-0 hidden z-50 bg-white rounded-xl shadow-xl dark:bg-neutral-900" role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-prtcm" tabindex="-1">

                    <!-- Calendar -->
                    <div class="p-3 space-y-0.5">
                      <!-- Months -->
                      <div class="grid grid-cols-5 items-center gap-x-3 mx-1.5 pb-3">
                        <!-- Prev Button -->
                        <div class="col-span-1">
                          <button type="button" class="size-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <path d="m15 18-6-6 6-6"></path>
                            </svg>
                          </button>
                        </div>
                        <!-- End Prev Button -->

                        <!-- Month / Year -->
                        <div class="col-span-3 flex justify-center items-center gap-x-1">
                          <div class="relative">
                            <div class="hs-select relative"><select data-hs-select="{
                                  &quot;placeholder&quot;: &quot;Select month&quot;,
                                  &quot;toggleTag&quot;: &quot;&lt;button type=\&quot;button\&quot; aria-expanded=\&quot;false\&quot;&gt;&lt;/button&gt;&quot;,
                                  &quot;toggleClasses&quot;: &quot;hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative flex text-nowrap w-full cursor-pointer text-start font-medium text-gray-800 hover:text-gray-600 focus:outline-hidden focus:text-gray-600 before:absolute before:inset-0 before:z-1 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300&quot;,
                                  &quot;dropdownClasses&quot;: &quot;mt-2 z-50 w-32 max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden overflow-y-auto [&amp;::-webkit-scrollbar]:w-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-100 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700&quot;,
                                  &quot;optionClasses&quot;: &quot;p-2 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800&quot;,
                                  &quot;optionTemplate&quot;: &quot;&lt;div class=\&quot;flex justify-between items-center w-full\&quot;&gt;&lt;span data-title&gt;&lt;/span&gt;&lt;span class=\&quot;hidden hs-selected:block\&quot;&gt;&lt;svg class=\&quot;shrink-0 size-3.5 text-gray-800 dark:text-neutral-200\&quot; xmlns=\&quot;http:.w3.org/2000/svg\&quot; width=\&quot;24\&quot; height=\&quot;24\&quot; viewBox=\&quot;0 0 24 24\&quot; fill=\&quot;none\&quot; stroke=\&quot;currentColor\&quot; stroke-width=\&quot;2\&quot; stroke-linecap=\&quot;round\&quot; stroke-linejoin=\&quot;round\&quot;&gt;&lt;polyline points=\&quot;20 6 9 17 4 12\&quot;/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;&quot;
                                }" class="hidden" style="display: none;">












                            <option value="0">January</option><option value="1">February</option><option value="2">March</option><option value="3">April</option><option value="4">May</option><option value="5">June</option><option value="6" selected="">July</option><option value="7">August</option><option value="8">September</option><option value="9">October</option><option value="10">November</option><option value="11">December</option></select><button type="button" aria-expanded="false" class="hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative flex text-nowrap w-full cursor-pointer text-start font-medium text-gray-800 hover:text-gray-600 focus:outline-hidden focus:text-gray-600 before:absolute before:inset-0 before:z-1 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300"><span class="truncate">July</span></button><div data-hs-select-dropdown="" class="absolute top-full hidden mt-2 z-50 w-32 max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden overflow-y-auto [&amp;::-webkit-scrollbar]:w-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-100 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700" role="listbox" tabindex="-1" aria-orientation="vertical"><div data-value="0" data-title-value="January" tabindex="0" class="cursor-pointer p-2 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="0"><div class="flex justify-between items-center w-full"><span data-title="">January</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="1" data-title-value="February" tabindex="1" class="cursor-pointer p-2 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="1"><div class="flex justify-between items-center w-full"><span data-title="">February</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="2" data-title-value="March" tabindex="2" class="cursor-pointer p-2 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="2"><div class="flex justify-between items-center w-full"><span data-title="">March</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="3" data-title-value="April" tabindex="3" class="cursor-pointer p-2 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="3"><div class="flex justify-between items-center w-full"><span data-title="">April</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="4" data-title-value="May" tabindex="4" class="cursor-pointer p-2 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="4"><div class="flex justify-between items-center w-full"><span data-title="">May</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="5" data-title-value="June" tabindex="5" class="cursor-pointer p-2 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="5"><div class="flex justify-between items-center w-full"><span data-title="">June</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="6" data-title-value="July" tabindex="6" class="cursor-pointer selected p-2 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="6"><div class="flex justify-between items-center w-full"><span data-title="">July</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="7" data-title-value="August" tabindex="7" class="cursor-pointer p-2 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="7"><div class="flex justify-between items-center w-full"><span data-title="">August</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="8" data-title-value="September" tabindex="8" class="cursor-pointer p-2 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="8"><div class="flex justify-between items-center w-full"><span data-title="">September</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="9" data-title-value="October" tabindex="9" class="cursor-pointer p-2 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="9"><div class="flex justify-between items-center w-full"><span data-title="">October</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="10" data-title-value="November" tabindex="10" class="cursor-pointer p-2 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="10"><div class="flex justify-between items-center w-full"><span data-title="">November</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="11" data-title-value="December" tabindex="11" class="cursor-pointer p-2 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="11"><div class="flex justify-between items-center w-full"><span data-title="">December</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div></div></div>
                          </div>

                          <span class="text-gray-800 dark:text-neutral-200">/</span>

                          <div class="relative">
                            <div class="hs-select relative"><select data-hs-select="{
                                  &quot;placeholder&quot;: &quot;Select year&quot;,
                                  &quot;toggleTag&quot;: &quot;&lt;button type=\&quot;button\&quot; aria-expanded=\&quot;false\&quot;&gt;&lt;/button&gt;&quot;,
                                  &quot;toggleClasses&quot;: &quot;hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative flex text-nowrap w-full cursor-pointer text-start font-medium text-gray-800 hover:text-gray-600 focus:outline-hidden focus:text-gray-600 before:absolute before:inset-0 before:z-1 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300&quot;,
                                  &quot;dropdownClasses&quot;: &quot;mt-2 z-50 w-20 max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden overflow-y-auto [&amp;::-webkit-scrollbar]:w-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-100 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700&quot;,
                                  &quot;optionClasses&quot;: &quot;p-2 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800&quot;,
                                  &quot;optionTemplate&quot;: &quot;&lt;div class=\&quot;flex justify-between items-center w-full\&quot;&gt;&lt;span data-title&gt;&lt;/span&gt;&lt;span class=\&quot;hidden hs-selected:block\&quot;&gt;&lt;svg class=\&quot;shrink-0 size-3.5 text-gray-800 dark:text-neutral-200\&quot; xmlns=\&quot;http:.w3.org/2000/svg\&quot; width=\&quot;24\&quot; height=\&quot;24\&quot; viewBox=\&quot;0 0 24 24\&quot; fill=\&quot;none\&quot; stroke=\&quot;currentColor\&quot; stroke-width=\&quot;2\&quot; stroke-linecap=\&quot;round\&quot; stroke-linejoin=\&quot;round\&quot;&gt;&lt;polyline points=\&quot;20 6 9 17 4 12\&quot;/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;&quot;
                                }" class="hidden" style="display: none;">





                            <option selected="">2023</option><option>2024</option><option>2025</option><option>2026</option><option>2027</option></select><button type="button" aria-expanded="false" class="hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative flex text-nowrap w-full cursor-pointer text-start font-medium text-gray-800 hover:text-gray-600 focus:outline-hidden focus:text-gray-600 before:absolute before:inset-0 before:z-1 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300"><span class="truncate">2023</span></button><div data-hs-select-dropdown="" class="absolute top-full hidden mt-2 z-50 w-20 max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg shadow-lg overflow-hidden overflow-y-auto [&amp;::-webkit-scrollbar]:w-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-100 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700" role="listbox" tabindex="-1" aria-orientation="vertical"><div data-value="2023" data-title-value="2023" tabindex="0" class="cursor-pointer selected p-2 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="0"><div class="flex justify-between items-center w-full"><span data-title="">2023</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="2024" data-title-value="2024" tabindex="1" class="cursor-pointer p-2 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="1"><div class="flex justify-between items-center w-full"><span data-title="">2024</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="2025" data-title-value="2025" tabindex="2" class="cursor-pointer p-2 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="2"><div class="flex justify-between items-center w-full"><span data-title="">2025</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="2026" data-title-value="2026" tabindex="3" class="cursor-pointer p-2 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="3"><div class="flex justify-between items-center w-full"><span data-title="">2026</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="2027" data-title-value="2027" tabindex="4" class="cursor-pointer p-2 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="4"><div class="flex justify-between items-center w-full"><span data-title="">2027</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div></div></div>
                          </div>
                        </div>
                        <!-- End Month / Year -->

                        <!-- Next Button -->
                        <div class="col-span-1 flex justify-end">
                          <button type="button" class=" size-8 flex justify-center items-center text-gray-800 hover:bg-gray-100 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                            <svg class="shrink-0 size-4" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <path d="m9 18 6-6-6-6"></path>
                            </svg>
                          </button>
                        </div>
                        <!-- End Next Button -->
                      </div>
                      <!-- Months -->

                      <!-- Weeks -->
                      <div class="flex pb-1.5">
                        <span class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
                          Mo
                        </span>
                        <span class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
                          Tu
                        </span>
                        <span class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
                          We
                        </span>
                        <span class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
                          Th
                        </span>
                        <span class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
                          Fr
                        </span>
                        <span class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
                          Sa
                        </span>
                        <span class="m-px w-10 block text-center text-sm text-gray-500 dark:text-neutral-500">
                          Su
                        </span>
                      </div>
                      <!-- Weeks -->

                      <!-- Days -->
                      <div class="flex">
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200" disabled="">
                            26
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200" disabled="">
                            27
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200" disabled="">
                            28
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200" disabled="">
                            29
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200" disabled="">
                            30
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            1
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            2
                          </button>
                        </div>
                      </div>
                      <!-- Days -->

                      <!-- Days -->
                      <div class="flex">
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            3
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            4
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            5
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            6
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            7
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            8
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            9
                          </button>
                        </div>
                      </div>
                      <!-- Days -->

                      <!-- Days -->
                      <div class="flex">
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            10
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            11
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            12
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            13
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            14
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            15
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            16
                          </button>
                        </div>
                      </div>
                      <!-- Days -->

                      <!-- Days -->
                      <div class="flex">
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            17
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            18
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            19
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center bg-indigo-600 border border-transparent text-sm font-medium text-white hover:border-indigo-600 rounded-full dark:bg-indigo-500 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:hover:border-neutral-700">
                            20
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            21
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            22
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            23
                          </button>
                        </div>
                      </div>
                      <!-- Days -->

                      <!-- Days -->
                      <div class="flex">
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            24
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            25
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            26
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            27
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            28
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            29
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            30
                          </button>
                        </div>
                      </div>
                      <!-- Days -->

                      <!-- Days -->
                      <div class="flex">
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 rounded-full hover:border-indigo-600 hover:text-indigo-600 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:border-indigo-600 focus:text-indigo-600 dark:text-neutral-200">
                            31
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-indigo-600 hover:text-indigo-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-200 dark:hover:border-neutral-500 dark:focus:bg-neutral-700" disabled="">
                            1
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-indigo-600 hover:text-indigo-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-200 dark:hover:border-neutral-500 dark:focus:bg-neutral-700" disabled="">
                            2
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-indigo-600 hover:text-indigo-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-200 dark:hover:border-neutral-500 dark:focus:bg-neutral-700" disabled="">
                            3
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-indigo-600 hover:text-indigo-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-200 dark:hover:border-neutral-500 dark:focus:bg-neutral-700" disabled="">
                            4
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-indigo-600 hover:text-indigo-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-200 dark:hover:border-neutral-500 dark:focus:bg-neutral-700" disabled="">
                            5
                          </button>
                        </div>
                        <div>
                          <button type="button" class="m-px size-10 flex justify-center items-center border border-transparent text-sm text-gray-800 hover:border-indigo-600 hover:text-indigo-600 rounded-full disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-100 dark:text-neutral-200 dark:hover:border-neutral-500 dark:focus:bg-neutral-700" disabled="">
                            6
                          </button>
                        </div>
                      </div>
                      <!-- Days -->
                    </div>
                    <!-- End Calendar -->
                  </div>
                </div>
                <!-- End Calendar Dropdown -->

                <div class="inline-flex -space-x-px">
                  <!-- Switch/Toggle -->
                  <div class="ps-2 flex flex-wrap justify-between items-center bg-white border border-gray-200 rounded-s-lg shadow-2xs dark:bg-neutral-800 dark:border-neutral-700">
                    <label for="hs-pro-prtrst" class="relative inline-block w-9 h-5 cursor-pointer">
                      <input type="checkbox" id="hs-pro-prtrst" class="peer sr-only" checked="">
                      <span class="absolute inset-0 bg-gray-200 rounded-full transition-colors duration-200 ease-in-out peer-checked:bg-indigo-600 dark:bg-neutral-700 dark:peer-checked:bg-indigo-500 peer-disabled:opacity-50 peer-disabled:pointer-events-none"></span>
                      <span class="absolute top-1/2 start-0.5 -translate-y-1/2 size-4 bg-white rounded-full shadow-sm !transition-transform duration-200 ease-in-out peer-checked:translate-x-full dark:bg-neutral-400 dark:peer-checked:bg-white"></span>
                    </label>
                    <label for="hs-pro-prtrst" class="flex-1 py-2 px-2 cursor-pointer font-medium text-xs text-gray-800 dark:text-neutral-200">Rounding</label>
                  </div>
                  <!-- End Switch/Toggle -->

                  <!-- Time Rounding Dropdown -->
                  <div class="hs-dropdown [--auto-close:inside] [--placement:bottom-right] inline-flex">
                    <button id="hs-pro-prtrdm" type="button" class="size-8.5 flex shrink-0 justify-center items-center text-xs font-medium rounded-e-lg border border-gray-200 bg-white text-gray-800 shadow-2xs hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:bg-gray-50 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                      <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                      </svg>
                    </button>

                    <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-79.5 transition-[opacity,margin] duration opacity-0 hidden z-50 bg-white rounded-xl shadow-xl dark:bg-neutral-900" role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-prtrdm" tabindex="-1">
                      <div class="p-4 flex flex-col gap-y-5">
                        <!-- Select Input -->
                        <div>
                          <label class="block mb-2 text-sm text-gray-500 dark:text-neutral-500">
                            Rounding methods
                          </label>

                          <!-- Select -->
                          <div class="relative inline-block w-full">
                            <div class="hs-select relative"><select id="hs-pro-select-rounding-methods" data-hs-select="{
                              &quot;placeholder&quot;: &quot;Select rounding methods&quot;,
                              &quot;toggleTag&quot;: &quot;&lt;button type=\&quot;button\&quot; aria-expanded=\&quot;false\&quot;&gt;&lt;/button&gt;&quot;,
                              &quot;toggleClasses&quot;: &quot;hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-2 ps-3 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-hidden focus:ring-2 focus:ring-indigo-500 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-hidden dark:focus:ring-1 dark:focus:ring-neutral-600&quot;,

                              &quot;dropdownClasses&quot;: &quot;end-0 w-full max-h-72 p-1 space-y-0.5 z-50 overflow-hidden overflow-y-auto bg-white rounded-xl shadow-xl [&amp;::-webkit-scrollbar]:w-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-100 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900&quot;,
                              &quot;optionClasses&quot;: &quot;hs-selected:bg-gray-100 dark:hs-selected:bg-neutral-800 py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800&quot;,
                              &quot;optionTemplate&quot;: &quot;&lt;div class=\&quot;flex justify-between items-center w-full\&quot;&gt;&lt;span data-title&gt;&lt;/span&gt;&lt;span class=\&quot;hidden hs-selected:block\&quot;&gt;&lt;svg class=\&quot;shrink-0 size-3.5 text-gray-800 dark:text-neutral-200\&quot; xmlns=\&quot;http:.w3.org/2000/svg\&quot; width=\&quot;24\&quot; height=\&quot;24\&quot; viewBox=\&quot;0 0 24 24\&quot; fill=\&quot;none\&quot; stroke=\&quot;currentColor\&quot; stroke-width=\&quot;2\&quot; stroke-linecap=\&quot;round\&quot; stroke-linejoin=\&quot;round\&quot;&gt;&lt;polyline points=\&quot;20 6 9 17 4 12\&quot;/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;&quot;
                            }" class="hidden" style="display: none;">






                            <option value="">Choose</option><option value="Round to nearest" selected="">Round to nearest</option><option value="Round up">Round up</option><option value="Round down">Round down</option><option value="Ceil/Floor options">Ceil/Floor options</option><option value="Truncate">Truncate</option></select><button type="button" aria-expanded="false" class="hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-2 ps-3 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-hidden focus:ring-2 focus:ring-indigo-500 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-hidden dark:focus:ring-1 dark:focus:ring-neutral-600"><span class="truncate">Round to nearest</span></button><div data-hs-select-dropdown="" class="absolute top-full hidden end-0 w-full max-h-72 p-1 space-y-0.5 z-50 overflow-hidden overflow-y-auto bg-white rounded-xl shadow-xl [&amp;::-webkit-scrollbar]:w-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-100 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900" role="listbox" tabindex="-1" aria-orientation="vertical"><div data-value="Round to nearest" data-title-value="Round to nearest" tabindex="0" class="cursor-pointer selected hs-selected:bg-gray-100 dark:hs-selected:bg-neutral-800 py-2 px-4 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="0"><div class="flex justify-between items-center w-full"><span data-title="">Round to nearest</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="Round up" data-title-value="Round up" tabindex="1" class="cursor-pointer hs-selected:bg-gray-100 dark:hs-selected:bg-neutral-800 py-2 px-4 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="1"><div class="flex justify-between items-center w-full"><span data-title="">Round up</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="Round down" data-title-value="Round down" tabindex="2" class="cursor-pointer hs-selected:bg-gray-100 dark:hs-selected:bg-neutral-800 py-2 px-4 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="2"><div class="flex justify-between items-center w-full"><span data-title="">Round down</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="Ceil/Floor options" data-title-value="Ceil/Floor options" tabindex="3" class="cursor-pointer hs-selected:bg-gray-100 dark:hs-selected:bg-neutral-800 py-2 px-4 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="3"><div class="flex justify-between items-center w-full"><span data-title="">Ceil/Floor options</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="Truncate" data-title-value="Truncate" tabindex="4" class="cursor-pointer hs-selected:bg-gray-100 dark:hs-selected:bg-neutral-800 py-2 px-4 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="4"><div class="flex justify-between items-center w-full"><span data-title="">Truncate</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div></div></div>

                            <div class="absolute top-1/2 end-2.5 -translate-y-1/2">
                              <svg class="shrink-0 size-3.5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m7 15 5 5 5-5"></path>
                                <path d="m7 9 5-5 5 5"></path>
                              </svg>
                            </div>
                          </div>
                          <!-- End Select -->
                        </div>
                        <!-- End Select Input -->

                        <!-- Select Input -->
                        <div>
                          <label class="block mb-2 text-sm text-gray-500 dark:text-neutral-500">
                            Time rounding increments
                          </label>

                          <!-- Select -->
                          <div class="relative inline-block w-full">
                            <div class="hs-select relative"><select id="hs-pro-select-simple-time-rounding-increment" data-hs-select="{
                              &quot;placeholder&quot;: &quot;Select time rounding increment&quot;,
                              &quot;toggleTag&quot;: &quot;&lt;button type=\&quot;button\&quot; aria-expanded=\&quot;false\&quot;&gt;&lt;/button&gt;&quot;,
                              &quot;toggleClasses&quot;: &quot;hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-2 ps-3 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-hidden focus:ring-2 focus:ring-indigo-500 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-hidden dark:focus:ring-1 dark:focus:ring-neutral-600&quot;,

                              &quot;dropdownClasses&quot;: &quot;end-0 w-full max-h-72 p-1 space-y-0.5 z-50 overflow-hidden overflow-y-auto bg-white rounded-xl shadow-xl [&amp;::-webkit-scrollbar]:w-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-100 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900&quot;,
                              &quot;optionClasses&quot;: &quot;hs-selected:bg-gray-100 dark:hs-selected:bg-neutral-800 py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800&quot;,
                              &quot;optionTemplate&quot;: &quot;&lt;div class=\&quot;flex justify-between items-center w-full\&quot;&gt;&lt;span data-title&gt;&lt;/span&gt;&lt;span class=\&quot;hidden hs-selected:block\&quot;&gt;&lt;svg class=\&quot;shrink-0 size-3.5 text-gray-800 dark:text-neutral-200\&quot; xmlns=\&quot;http:.w3.org/2000/svg\&quot; width=\&quot;24\&quot; height=\&quot;24\&quot; viewBox=\&quot;0 0 24 24\&quot; fill=\&quot;none\&quot; stroke=\&quot;currentColor\&quot; stroke-width=\&quot;2\&quot; stroke-linecap=\&quot;round\&quot; stroke-linejoin=\&quot;round\&quot;&gt;&lt;polyline points=\&quot;20 6 9 17 4 12\&quot;/&gt;&lt;/svg&gt;&lt;/span&gt;&lt;/div&gt;&quot;
                            }" class="hidden" style="display: none;">







                            <option value="">Choose</option><option value="1 minute">1 minute</option><option value="5 minutes">5 minutes</option><option value="10 minutes">10 minutes</option><option value="15 minutes" selected="">15 minutes</option><option value="30 minutes">30 minutes</option><option value="1 hour">1 hour</option></select><button type="button" aria-expanded="false" class="hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-2 ps-3 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-hidden focus:ring-2 focus:ring-indigo-500 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-hidden dark:focus:ring-1 dark:focus:ring-neutral-600"><span class="truncate">15 minutes</span></button><div data-hs-select-dropdown="" class="absolute top-full hidden end-0 w-full max-h-72 p-1 space-y-0.5 z-50 overflow-hidden overflow-y-auto bg-white rounded-xl shadow-xl [&amp;::-webkit-scrollbar]:w-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-100 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900" role="listbox" tabindex="-1" aria-orientation="vertical"><div data-value="1 minute" data-title-value="1 minute" tabindex="0" class="cursor-pointer hs-selected:bg-gray-100 dark:hs-selected:bg-neutral-800 py-2 px-4 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="0"><div class="flex justify-between items-center w-full"><span data-title="">1 minute</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="5 minutes" data-title-value="5 minutes" tabindex="1" class="cursor-pointer hs-selected:bg-gray-100 dark:hs-selected:bg-neutral-800 py-2 px-4 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="1"><div class="flex justify-between items-center w-full"><span data-title="">5 minutes</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="10 minutes" data-title-value="10 minutes" tabindex="2" class="cursor-pointer hs-selected:bg-gray-100 dark:hs-selected:bg-neutral-800 py-2 px-4 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="2"><div class="flex justify-between items-center w-full"><span data-title="">10 minutes</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="15 minutes" data-title-value="15 minutes" tabindex="3" class="cursor-pointer selected hs-selected:bg-gray-100 dark:hs-selected:bg-neutral-800 py-2 px-4 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="3"><div class="flex justify-between items-center w-full"><span data-title="">15 minutes</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="30 minutes" data-title-value="30 minutes" tabindex="4" class="cursor-pointer hs-selected:bg-gray-100 dark:hs-selected:bg-neutral-800 py-2 px-4 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="4"><div class="flex justify-between items-center w-full"><span data-title="">30 minutes</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div><div data-value="1 hour" data-title-value="1 hour" tabindex="5" class="cursor-pointer hs-selected:bg-gray-100 dark:hs-selected:bg-neutral-800 py-2 px-4 w-full text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800" data-id="5"><div class="flex justify-between items-center w-full"><span data-title="">1 hour</span><span class="hidden hs-selected:block"><svg class="shrink-0 size-3.5 text-gray-800 dark:text-neutral-200" xmlns="http:.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg></span></div></div></div></div>

                            <div class="absolute top-1/2 end-2.5 -translate-y-1/2">
                              <svg class="shrink-0 size-3.5 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m7 15 5 5 5-5"></path>
                                <path d="m7 9 5-5 5 5"></path>
                              </svg>
                            </div>
                          </div>
                          <!-- End Select -->
                        </div>
                        <!-- End Select Input -->

                        <button type="button" class="py-2 px-2.5 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-indigo-600 text-white hover:bg-indigo-700 disabled:opacity-50 disabled:pointer-events-none focus:outline-hidden focus:ring-2 focus:ring-indigo-600 dark:focus:ring-indigo-500">
                          Apply
                        </button>
                      </div>
                    </div>
                  </div>
                  <!-- End Time Rounding Dropdown -->
                </div>
              </div>
            </div>

            <!-- Tab Content -->
            <div id="hs-pro-tabs-pdprt-tasks" role="tabpanel" aria-labelledby="hs-pro-tabs-pdprt-item-tasks">
              <!-- Table Content -->
              <div class="overflow-x-auto [&amp;::-webkit-scrollbar]:h-2 [&amp;::-webkit-scrollbar-thumb]:rounded-full [&amp;::-webkit-scrollbar-track]:bg-gray-100 [&amp;::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&amp;::-webkit-scrollbar-track]:bg-neutral-700 dark:[&amp;::-webkit-scrollbar-thumb]:bg-neutral-500">
                <div class="min-w-full inline-block align-middle">
                  <!-- Table -->
                  <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                    <thead class="bg-gray-50 border-t border-gray-200 dark:bg-neutral-700/50 dark:border-neutral-700">
                      <tr>
                        <th scope="col" class="w-100">
                          <!-- Sort Dropdown -->
                          <div class="hs-dropdown relative inline-flex w-full cursor-pointer">
                            <button id="hs-pro-prtbbt" type="button" class="px-5 py-2.5 text-start w-full flex items-center gap-x-1 text-sm text-nowrap whitespace-nowrap font-normal text-gray-500 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-500 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                              Billable tasks
                              <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m7 15 5 5 5-5"></path>
                                <path d="m7 9 5-5 5 5"></path>
                              </svg>
                            </button>

                            <!-- Dropdown -->
                            <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-40 transition-[opacity,margin] duration opacity-0 hidden z-10 bg-white rounded-xl shadow-xl dark:bg-neutral-900" role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-prtbbt" tabindex="-1">
                              <div class="p-1">
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m5 12 7-7 7 7"></path>
                                    <path d="M12 19V5"></path>
                                  </svg>
                                  Sort ascending
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 5v14"></path>
                                    <path d="m19 12-7 7-7-7"></path>
                                  </svg>
                                  Sort descending
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m12 19-7-7 7-7"></path>
                                    <path d="M19 12H5"></path>
                                  </svg>
                                  Move left
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                  </svg>
                                  Move right
                                </button>

                                <div class="my-1 border-t border-gray-200 dark:border-neutral-800"></div>

                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                    <path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                                    <path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                    <line x1="2" x2="22" y1="2" y2="22"></line>
                                  </svg>
                                  Hide in view
                                </button>
                              </div>
                            </div>
                            <!-- End Dropdown -->
                          </div>
                          <!-- End Sort Dropdown -->
                        </th>

                        <th scope="col" class="min-w-40">
                          <!-- Sort Dropdown -->
                          <div class="hs-dropdown relative inline-flex w-full cursor-pointer">
                            <button id="hs-pro-prtbbd" type="button" class="px-5 py-2.5 text-start w-full flex items-center gap-x-1 text-sm text-nowrap whitespace-nowrap font-normal text-gray-500 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-500 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                              Budget
                              <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m7 15 5 5 5-5"></path>
                                <path d="m7 9 5-5 5 5"></path>
                              </svg>
                            </button>

                            <!-- Dropdown -->
                            <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-40 transition-[opacity,margin] duration opacity-0 hidden z-10 bg-white rounded-xl shadow-xl dark:bg-neutral-900" role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-prtbbd" tabindex="-1">
                              <div class="p-1">
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m5 12 7-7 7 7"></path>
                                    <path d="M12 19V5"></path>
                                  </svg>
                                  Sort ascending
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 5v14"></path>
                                    <path d="m19 12-7 7-7-7"></path>
                                  </svg>
                                  Sort descending
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m12 19-7-7 7-7"></path>
                                    <path d="M19 12H5"></path>
                                  </svg>
                                  Move left
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                  </svg>
                                  Move right
                                </button>

                                <div class="my-1 border-t border-gray-200 dark:border-neutral-800"></div>

                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                    <path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                                    <path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                    <line x1="2" x2="22" y1="2" y2="22"></line>
                                  </svg>
                                  Hide in view
                                </button>
                              </div>
                            </div>
                            <!-- End Dropdown -->
                          </div>
                          <!-- End Sort Dropdown -->
                        </th>

                        <th scope="col" class="min-w-60">
                          <!-- Sort Dropdown -->
                          <div class="hs-dropdown relative inline-flex w-full cursor-pointer">
                            <button id="hs-pro-prtbsp" type="button" class="px-5 py-2.5 text-start w-full flex items-center gap-x-1 text-sm text-nowrap whitespace-nowrap font-normal text-gray-500 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-500 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                              Spent
                              <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m7 15 5 5 5-5"></path>
                                <path d="m7 9 5-5 5 5"></path>
                              </svg>
                            </button>

                            <!-- Dropdown -->
                            <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-40 transition-[opacity,margin] duration opacity-0 hidden z-10 bg-white rounded-xl shadow-xl dark:bg-neutral-900" role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-prtbsp" tabindex="-1">
                              <div class="p-1">
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m5 12 7-7 7 7"></path>
                                    <path d="M12 19V5"></path>
                                  </svg>
                                  Sort ascending
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 5v14"></path>
                                    <path d="m19 12-7 7-7-7"></path>
                                  </svg>
                                  Sort descending
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m12 19-7-7 7-7"></path>
                                    <path d="M19 12H5"></path>
                                  </svg>
                                  Move left
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                  </svg>
                                  Move right
                                </button>

                                <div class="my-1 border-t border-gray-200 dark:border-neutral-800"></div>

                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                    <path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                                    <path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                    <line x1="2" x2="22" y1="2" y2="22"></line>
                                  </svg>
                                  Hide in view
                                </button>
                              </div>
                            </div>
                            <!-- End Dropdown -->
                          </div>
                          <!-- End Sort Dropdown -->
                        </th>

                        <th scope="col" class="min-w-40">
                          <!-- Sort Dropdown -->
                          <div class="hs-dropdown relative inline-flex w-full cursor-pointer">
                            <button id="hs-pro-prtbrm" type="button" class="px-5 py-2.5 text-start w-full flex items-center gap-x-1 text-sm text-nowrap whitespace-nowrap font-normal text-gray-500 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-500 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                              Remaining
                              <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m7 15 5 5 5-5"></path>
                                <path d="m7 9 5-5 5 5"></path>
                              </svg>
                            </button>

                            <!-- Dropdown -->
                            <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-40 transition-[opacity,margin] duration opacity-0 hidden z-10 bg-white rounded-xl shadow-xl dark:bg-neutral-900" role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-prtbrm" tabindex="-1">
                              <div class="p-1">
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m5 12 7-7 7 7"></path>
                                    <path d="M12 19V5"></path>
                                  </svg>
                                  Sort ascending
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 5v14"></path>
                                    <path d="m19 12-7 7-7-7"></path>
                                  </svg>
                                  Sort descending
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m12 19-7-7 7-7"></path>
                                    <path d="M19 12H5"></path>
                                  </svg>
                                  Move left
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                  </svg>
                                  Move right
                                </button>

                                <div class="my-1 border-t border-gray-200 dark:border-neutral-800"></div>

                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                    <path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                                    <path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                    <line x1="2" x2="22" y1="2" y2="22"></line>
                                  </svg>
                                  Hide in view
                                </button>
                              </div>
                            </div>
                            <!-- End Dropdown -->
                          </div>
                          <!-- End Sort Dropdown -->
                        </th>

                        <th scope="col">
                          <!-- Sort Dropdown -->
                          <div class="hs-dropdown relative inline-flex w-full cursor-pointer">
                            <button id="hs-pro-prtbdr" type="button" class="px-5 py-2.5 text-start w-full flex items-center gap-x-1 text-sm text-nowrap whitespace-nowrap font-normal text-gray-500 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-500 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                              Duration
                              <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m7 15 5 5 5-5"></path>
                                <path d="m7 9 5-5 5 5"></path>
                              </svg>
                            </button>

                            <!-- Dropdown -->
                            <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-40 transition-[opacity,margin] duration opacity-0 hidden z-10 bg-white rounded-xl shadow-xl dark:bg-neutral-900" role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-prtbdr" tabindex="-1">
                              <div class="p-1">
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m5 12 7-7 7 7"></path>
                                    <path d="M12 19V5"></path>
                                  </svg>
                                  Sort ascending
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 5v14"></path>
                                    <path d="m19 12-7 7-7-7"></path>
                                  </svg>
                                  Sort descending
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m12 19-7-7 7-7"></path>
                                    <path d="M19 12H5"></path>
                                  </svg>
                                  Move left
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                  </svg>
                                  Move right
                                </button>

                                <div class="my-1 border-t border-gray-200 dark:border-neutral-800"></div>

                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                    <path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                                    <path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                    <line x1="2" x2="22" y1="2" y2="22"></line>
                                  </svg>
                                  Hide in view
                                </button>
                              </div>
                            </div>
                            <!-- End Dropdown -->
                          </div>
                          <!-- End Sort Dropdown -->
                        </th>

                        <th scope="col">
                          <!-- Sort Dropdown -->
                          <div class="hs-dropdown relative inline-flex w-full cursor-pointer">
                            <button id="hs-pro-prtbst" type="button" class="px-5 py-2.5 text-start w-full flex items-center gap-x-1 text-sm text-nowrap whitespace-nowrap font-normal text-gray-500 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-500 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                              Status
                              <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m7 15 5 5 5-5"></path>
                                <path d="m7 9 5-5 5 5"></path>
                              </svg>
                            </button>

                            <!-- Dropdown -->
                            <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-40 transition-[opacity,margin] duration opacity-0 hidden z-10 bg-white rounded-xl shadow-xl dark:bg-neutral-900" role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-prtbst" tabindex="-1">
                              <div class="p-1">
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m5 12 7-7 7 7"></path>
                                    <path d="M12 19V5"></path>
                                  </svg>
                                  Sort ascending
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 5v14"></path>
                                    <path d="m19 12-7 7-7-7"></path>
                                  </svg>
                                  Sort descending
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m12 19-7-7 7-7"></path>
                                    <path d="M19 12H5"></path>
                                  </svg>
                                  Move left
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                  </svg>
                                  Move right
                                </button>

                                <div class="my-1 border-t border-gray-200 dark:border-neutral-800"></div>

                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                    <path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                                    <path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                    <line x1="2" x2="22" y1="2" y2="22"></line>
                                  </svg>
                                  Hide in view
                                </button>
                              </div>
                            </div>
                            <!-- End Dropdown -->
                          </div>
                          <!-- End Sort Dropdown -->
                        </th>

                        <th scope="col">
                          <!-- Sort Dropdown -->
                          <div class="hs-dropdown relative inline-flex w-full cursor-pointer">
                            <button id="hs-pro-prtbct" type="button" class="px-5 py-2.5 text-start w-full flex items-center gap-x-1 text-sm text-nowrap whitespace-nowrap font-normal text-gray-500 focus:outline-hidden focus:bg-gray-100 dark:text-neutral-500 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                              Costs
                              <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m7 15 5 5 5-5"></path>
                                <path d="m7 9 5-5 5 5"></path>
                              </svg>
                            </button>

                            <!-- Dropdown -->
                            <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 w-40 transition-[opacity,margin] duration opacity-0 hidden z-10 bg-white rounded-xl shadow-xl dark:bg-neutral-900" role="menu" aria-orientation="vertical" aria-labelledby="hs-pro-prtbct" tabindex="-1">
                              <div class="p-1">
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m5 12 7-7 7 7"></path>
                                    <path d="M12 19V5"></path>
                                  </svg>
                                  Sort ascending
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 5v14"></path>
                                    <path d="m19 12-7 7-7-7"></path>
                                  </svg>
                                  Sort descending
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m12 19-7-7 7-7"></path>
                                    <path d="M19 12H5"></path>
                                  </svg>
                                  Move left
                                </button>
                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="m12 5 7 7-7 7"></path>
                                  </svg>
                                  Move right
                                </button>

                                <div class="my-1 border-t border-gray-200 dark:border-neutral-800"></div>

                                <button type="button" class="w-full flex items-center gap-x-3 py-1.5 px-2 rounded-lg text-[13px] font-normal text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-300 focus:outline-hidden focus:bg-gray-100 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                  <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                    <path d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                                    <path d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                                    <line x1="2" x2="22" y1="2" y2="22"></line>
                                  </svg>
                                  Hide in view
                                </button>
                              </div>
                            </div>
                            <!-- End Dropdown -->
                          </div>
                          <!-- End Sort Dropdown -->
                        </th>
                      </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                      <tr>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">Development</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">$25,000.00</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <div class="flex items-center gap-x-3">
                              <span class="text-sm text-gray-800 dark:text-white">$5,000.00</span>
                              <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <div class="flex flex-col justify-center overflow-hidden bg-indigo-600 text-xs text-white text-center whitespace-nowrap" style="width: 20%"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">$20,000.00 (80%)</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">3:30:00</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="py-1 px-2.5 inline-flex items-center gap-x-2.5 bg-green-100 text-green-700 text-start text-nowrap text-[13px] rounded-full dark:bg-green-500/10 dark:text-green-400">
                              In progress
                            </span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">$1,250.00</span>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">Design</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">$10,000.00</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <div class="flex items-center gap-x-3">
                              <span class="text-sm text-gray-800 dark:text-white">$3,000.00</span>
                              <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100">
                                <div class="flex flex-col justify-center overflow-hidden bg-indigo-600 text-xs text-white text-center whitespace-nowrap" style="width: 67%"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">$7,000.00 (33%)</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">2:15:00</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="py-1 px-2.5 inline-flex items-center gap-x-2.5 bg-green-100 text-green-700 text-start text-nowrap text-[13px] rounded-full dark:bg-green-500/10 dark:text-green-400">
                              In progress
                            </span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">$750.00</span>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">Testing</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">$8,500.00</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <div class="flex items-center gap-x-3">
                              <span class="text-sm text-gray-800 dark:text-white">$2,500.00</span>
                              <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                <div class="flex flex-col justify-center overflow-hidden bg-indigo-600 text-xs text-white text-center whitespace-nowrap" style="width: 60%"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">$6,000.00 (40%)</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">1:40:00</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="py-1 px-2.5 inline-flex items-center gap-x-2.5 bg-orange-100 text-orange-700 text-start text-nowrap text-[13px] rounded-full dark:bg-orange-500/10 dark:text-orange-400">
                              Pending review
                            </span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">$500.00</span>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">Marketing</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">$12,000.00</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <div class="flex items-center gap-x-3">
                              <span class="text-sm text-gray-800 dark:text-white">$4,000.00</span>
                              <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100">
                                <div class="flex flex-col justify-center overflow-hidden bg-indigo-600 text-xs text-white text-center whitespace-nowrap" style="width: 67%"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">$8,000.00 (33%)</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">2:45:00</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="py-1 px-2.5 inline-flex items-center gap-x-2.5 bg-green-100 text-green-700 text-start text-nowrap text-[13px] rounded-full dark:bg-green-500/10 dark:text-green-400">
                              In progress
                            </span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">$1,000.00</span>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">Operations</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">$18,500.00</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <div class="flex items-center gap-x-3">
                              <span class="text-sm text-gray-800 dark:text-white">$7,500.00</span>
                              <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                <div class="flex flex-col justify-center overflow-hidden bg-indigo-600 text-xs text-white text-center whitespace-nowrap" style="width: 40%"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">$11,000.00 (60%)</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">4:10:00</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="py-1 px-2.5 inline-flex items-center gap-x-2.5 bg-orange-100 text-orange-700 text-start text-nowrap text-[13px] rounded-full dark:bg-orange-500/10 dark:text-orange-400">
                              Pending review
                            </span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">$1,750.00</span>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">Training</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">$0.00</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <div class="flex items-center gap-x-3">
                              <span class="text-sm text-gray-800 dark:text-white">$0.00</span>
                              <div class="flex w-full h-1.5 bg-gray-200 rounded-full overflow-hidden dark:bg-neutral-700" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                <div class="flex flex-col justify-center overflow-hidden bg-indigo-600 text-xs text-white text-center whitespace-nowrap" style="width: 0%"></div>
                              </div>
                            </div>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">$0.00</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">0:00:00</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="py-1 px-2.5 inline-flex items-center gap-x-2.5 bg-gray-100 text-gray-800 text-start text-nowrap text-[13px] rounded-full dark:bg-neutral-700 dark:text-neutral-200">
                              Not started
                            </span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="text-sm text-gray-800 dark:text-white">$0.00</span>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="font-semibold text-sm text-gray-800 dark:text-white">Total</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="font-semibold text-sm text-gray-800 dark:text-white">$73,500.00</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="font-semibold text-sm text-gray-800 dark:text-white">$22,000.00</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="font-semibold text-sm text-gray-800 dark:text-white">$52,000.00</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="font-semibold text-sm text-gray-800 dark:text-white">19:25:00</span>
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                          </div>
                        </td>
                        <td class="size-px whitespace-nowrap">
                          <div class="py-3 px-5">
                            <span class="font-semibold text-sm text-gray-800 dark:text-white">$5,250.00</span>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  <!-- End Table -->
                </div>
              </div>
              <!-- End Table Content -->
            </div>
            <!-- End Tab Content -->

            <!-- Tab Content -->
            <div id="hs-pro-tabs-pdprt-team" class="hidden" role="tabpanel" aria-labelledby="hs-pro-tabs-pdprt-item-team">
              <div class="py-3 px-5">
                <!-- List Group -->
                <ul class="divide-y divide-gray-200 dark:divide-neutral-700">
                  <!-- List Item -->
                  <li class="py-6 first:pt-2 last:pb-2">
                    <div class="animate-pulse">
                      <div class="flex items-center gap-x-2">
                        <div class="shrink-0">
                          <span class="shrink-0 size-7 block bg-gray-200 rounded-md dark:bg-neutral-700"></span>
                        </div>

                        <div class="grow">
                          <p class="h-4 bg-gray-200 rounded-md dark:bg-neutral-700" style="width: 10%;"></p>
                        </div>
                      </div>

                      <ul class="mt-3 space-y-3">
                        <li class="h-4 bg-gray-200 rounded-md dark:bg-neutral-700" style="width: 25%;"></li>
                        <li class="w-full h-4 bg-gray-200 rounded-md dark:bg-neutral-700"></li>
                        <li class="w-full h-4 bg-gray-200 rounded-md dark:bg-neutral-700"></li>
                      </ul>
                    </div>
                  </li>
                  <!-- End List Item -->

                  <!-- List Item -->
                  <li class="py-6 first:pt-2 last:pb-2">
                    <div class="animate-pulse">
                      <div class="flex items-center gap-x-2">
                        <div class="shrink-0">
                          <span class="shrink-0 size-7 block bg-gray-200 rounded-md dark:bg-neutral-700"></span>
                        </div>

                        <div class="grow">
                          <p class="h-4 bg-gray-200 rounded-md dark:bg-neutral-700" style="width: 10%;"></p>
                        </div>
                      </div>

                      <ul class="mt-3 space-y-3">
                        <li class="h-4 bg-gray-200 rounded-md dark:bg-neutral-700" style="width: 25%;"></li>
                        <li class="w-full h-4 bg-gray-200 rounded-md dark:bg-neutral-700"></li>
                        <li class="w-full h-4 bg-gray-200 rounded-md dark:bg-neutral-700"></li>
                      </ul>
                    </div>
                  </li>
                  <!-- End List Item -->

                  <!-- List Item -->
                  <li class="py-6 first:pt-2 last:pb-2">
                    <div class="animate-pulse">
                      <div class="flex items-center gap-x-2">
                        <div class="shrink-0">
                          <span class="shrink-0 size-7 block bg-gray-200 rounded-md dark:bg-neutral-700"></span>
                        </div>

                        <div class="grow">
                          <p class="h-4 bg-gray-200 rounded-md dark:bg-neutral-700" style="width: 10%;"></p>
                        </div>
                      </div>

                      <ul class="mt-3 space-y-3">
                        <li class="h-4 bg-gray-200 rounded-md dark:bg-neutral-700" style="width: 25%;"></li>
                        <li class="w-full h-4 bg-gray-200 rounded-md dark:bg-neutral-700"></li>
                        <li class="w-full h-4 bg-gray-200 rounded-md dark:bg-neutral-700"></li>
                      </ul>
                    </div>
                  </li>
                  <!-- End List Item -->

                  <!-- List Item -->
                  <li class="py-6 first:pt-2 last:pb-2">
                    <div class="animate-pulse">
                      <div class="flex items-center gap-x-2">
                        <div class="shrink-0">
                          <span class="shrink-0 size-7 block bg-gray-200 rounded-md dark:bg-neutral-700"></span>
                        </div>

                        <div class="grow">
                          <p class="h-4 bg-gray-200 rounded-md dark:bg-neutral-700" style="width: 10%;"></p>
                        </div>
                      </div>

                      <ul class="mt-3 space-y-3">
                        <li class="h-4 bg-gray-200 rounded-md dark:bg-neutral-700" style="width: 25%;"></li>
                        <li class="w-full h-4 bg-gray-200 rounded-md dark:bg-neutral-700"></li>
                        <li class="w-full h-4 bg-gray-200 rounded-md dark:bg-neutral-700"></li>
                      </ul>
                    </div>
                  </li>
                  <!-- End List Item -->
                </ul>
                <!-- End List Group -->
              </div>
            </div>
            <!-- End Tab Content -->

            <!-- Tab Content -->
            <div id="hs-pro-tabs-pdprt-invoices" class="hidden" role="tabpanel" aria-labelledby="hs-pro-tabs-pdprt-item-invoices">
              <div class="py-3 px-5">
                <!-- List Group -->
                <ul class="divide-y divide-gray-200 dark:divide-neutral-700">
                  <!-- List Item -->
                  <li class="py-6 first:pt-2 last:pb-2">
                    <div class="animate-pulse">
                      <div class="flex items-center gap-x-2">
                        <div class="shrink-0">
                          <span class="shrink-0 size-7 block bg-gray-200 rounded-md dark:bg-neutral-700"></span>
                        </div>

                        <div class="grow">
                          <p class="h-4 bg-gray-200 rounded-md dark:bg-neutral-700" style="width: 10%;"></p>
                        </div>
                      </div>

                      <ul class="mt-3 space-y-3">
                        <li class="h-4 bg-gray-200 rounded-md dark:bg-neutral-700" style="width: 25%;"></li>
                        <li class="w-full h-4 bg-gray-200 rounded-md dark:bg-neutral-700"></li>
                        <li class="w-full h-4 bg-gray-200 rounded-md dark:bg-neutral-700"></li>
                      </ul>
                    </div>
                  </li>
                  <!-- End List Item -->

                  <!-- List Item -->
                  <li class="py-6 first:pt-2 last:pb-2">
                    <div class="animate-pulse">
                      <div class="flex items-center gap-x-2">
                        <div class="shrink-0">
                          <span class="shrink-0 size-7 block bg-gray-200 rounded-md dark:bg-neutral-700"></span>
                        </div>

                        <div class="grow">
                          <p class="h-4 bg-gray-200 rounded-md dark:bg-neutral-700" style="width: 10%;"></p>
                        </div>
                      </div>

                      <ul class="mt-3 space-y-3">
                        <li class="h-4 bg-gray-200 rounded-md dark:bg-neutral-700" style="width: 25%;"></li>
                        <li class="w-full h-4 bg-gray-200 rounded-md dark:bg-neutral-700"></li>
                        <li class="w-full h-4 bg-gray-200 rounded-md dark:bg-neutral-700"></li>
                      </ul>
                    </div>
                  </li>
                  <!-- End List Item -->

                  <!-- List Item -->
                  <li class="py-6 first:pt-2 last:pb-2">
                    <div class="animate-pulse">
                      <div class="flex items-center gap-x-2">
                        <div class="shrink-0">
                          <span class="shrink-0 size-7 block bg-gray-200 rounded-md dark:bg-neutral-700"></span>
                        </div>

                        <div class="grow">
                          <p class="h-4 bg-gray-200 rounded-md dark:bg-neutral-700" style="width: 10%;"></p>
                        </div>
                      </div>

                      <ul class="mt-3 space-y-3">
                        <li class="h-4 bg-gray-200 rounded-md dark:bg-neutral-700" style="width: 25%;"></li>
                        <li class="w-full h-4 bg-gray-200 rounded-md dark:bg-neutral-700"></li>
                        <li class="w-full h-4 bg-gray-200 rounded-md dark:bg-neutral-700"></li>
                      </ul>
                    </div>
                  </li>
                  <!-- End List Item -->

                  <!-- List Item -->
                  <li class="py-6 first:pt-2 last:pb-2">
                    <div class="animate-pulse">
                      <div class="flex items-center gap-x-2">
                        <div class="shrink-0">
                          <span class="shrink-0 size-7 block bg-gray-200 rounded-md dark:bg-neutral-700"></span>
                        </div>

                        <div class="grow">
                          <p class="h-4 bg-gray-200 rounded-md dark:bg-neutral-700" style="width: 10%;"></p>
                        </div>
                      </div>

                      <ul class="mt-3 space-y-3">
                        <li class="h-4 bg-gray-200 rounded-md dark:bg-neutral-700" style="width: 25%;"></li>
                        <li class="w-full h-4 bg-gray-200 rounded-md dark:bg-neutral-700"></li>
                        <li class="w-full h-4 bg-gray-200 rounded-md dark:bg-neutral-700"></li>
                      </ul>
                    </div>
                  </li>
                  <!-- End List Item -->
                </ul>
                <!-- End List Group -->
              </div>
            </div>
            <!-- End Tab Content -->
          </div>
        </div>
        <!-- End Card -->
      </div>
    </div>
  </main>
  @endsection
@section('js')
<script>
</script>

@endsection
