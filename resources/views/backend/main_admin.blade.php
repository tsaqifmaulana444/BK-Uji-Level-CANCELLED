@extends('backend.main.admin')

@section('isi')
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal">Today's Money</p>
                                <h5 class="mb-0 font-bold">
                                    $53,000
                                    <span class="text-sm leading-normal font-weight-bolder text-lime-500">+55%</span>
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div
                                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-green-700 to-green-300">
                                <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal">Today's Users</p>
                                <h5 class="mb-0 font-bold">
                                    2,300
                                    <span class="text-sm leading-normal font-weight-bolder text-lime-500">+3%</span>
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div
                                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-green-700 to-green-300">
                                <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card3 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal">New Clients</p>
                                <h5 class="mb-0 font-bold">
                                    +3,462
                                    <span class="text-sm leading-normal text-red-600 font-weight-bolder">-2%</span>
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div
                                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-green-700 to-green-300">
                                <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card4 -->
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal">Sales</p>
                                <h5 class="mb-0 font-bold">
                                    $103,430
                                    <span class="text-sm leading-normal font-weight-bolder text-lime-500">+5%</span>
                                </h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div
                                class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-green-700 to-green-300">
                                <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- cards row 4 -->

    <div class="flex flex-wrap my-6 -mx-3">
        <!-- card 1 -->

        <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-2/3 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                    <div class="flex flex-wrap mt-0 -mx-3">
                        <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                            <h6>Projects</h6>
                            <p class="mb-0 text-sm leading-normal">
                                <i class="fa fa-check text-cyan-500"></i>
                                <span class="ml-1 font-semibold">30 done</span>
                                this month
                            </p>
                        </div>
                        <div class="flex-none w-5/12 max-w-full px-3 my-auto text-right lg:w-1/2 lg:flex-none">
                            <div class="relative pr-6 lg:float-right">
                                <a dropdown-trigger class="cursor-pointer" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v text-slate-400"></i>
                                </a>
                                <p class="hidden transform-dropdown-show"></p>

                                <ul dropdown-menu
                                    class="z-100 text-sm transform-dropdown shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 -ml-34 before:text-5.5 pointer-events-none absolute top-0 m-0 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:top-0 before:right-7 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8']">
                                    <li class="relative">
                                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                            href="javascript:;">Action</a>
                                    </li>
                                    <li class="relative">
                                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                            href="javascript:;">Another action</a>
                                    </li>
                                    <li class="relative">
                                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                            href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-auto p-6 px-0 pb-2">
                    <div class="overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                        Companies</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                        Members</th>
                                    <th
                                        class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                        Budget</th>
                                    <th
                                        class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                        Completion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <img src="./assets/img/small-logos/logo-xd.svg"
                                                    class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                    alt="xd" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 text-sm leading-normal">Soft UI XD Version</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="mt-2 avatar-group">
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="./assets/img/team-1.jpg" class="w-full rounded-full"
                                                    alt="team1" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg"
                                                role="tooltip">
                                                Ryan Tompson
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="{{ asset('assets/img/team-2.jpg') }}"
                                                    class="w-full rounded-full" alt="team2" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg"
                                                role="tooltip">
                                                Romina Hadid
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="./assets/img/team-3.jpg" class="w-full rounded-full"
                                                    alt="team3" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg"
                                                role="tooltip">
                                                Alexander Smith
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="./assets/img/team-4.jpg" class="w-full rounded-full"
                                                    alt="team4" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg"
                                                role="tooltip">
                                                Jessica Doe
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                                        <span class="text-xs font-semibold leading-tight"> $14,000 </span>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="w-3/4 mx-auto">
                                            <div>
                                                <div>
                                                    <span class="text-xs font-semibold leading-tight">60%</span>
                                                </div>
                                            </div>
                                            <div
                                                class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                    role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <img src="./assets/img/small-logos/logo-atlassian.svg"
                                                    class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                    alt="atlassian" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 text-sm leading-normal">Add Progress Track</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="mt-2 avatar-group">
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="./assets/img/team-2.jpg" class="w-full rounded-full"
                                                    alt="team5" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg"
                                                role="tooltip">
                                                Romina Hadid
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="./assets/img/team-4.jpg" class="w-full rounded-full"
                                                    alt="team6" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg"
                                                role="tooltip">
                                                Jessica Doe
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                                        <span class="text-xs font-semibold leading-tight"> $3,000 </span>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="w-3/4 mx-auto">
                                            <div>
                                                <div>
                                                    <span class="text-xs font-semibold leading-tight">10%</span>
                                                </div>
                                            </div>
                                            <div
                                                class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 w-1/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                    role="progressbar" aria-valuenow="10" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <img src="./assets/img/small-logos/logo-slack.svg"
                                                    class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                    alt="team7" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 text-sm leading-normal">Fix Platform Errors</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="mt-2 avatar-group">
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="./assets/img/team-3.jpg" class="w-full rounded-full"
                                                    alt="team8" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg"
                                                role="tooltip">
                                                Romina Hadid
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="./assets/img/team-1.jpg" class="w-full rounded-full"
                                                    alt="team9" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg"
                                                role="tooltip">
                                                Jessica Doe
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                                        <span class="text-xs font-semibold leading-tight"> Not set </span>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="w-3/4 mx-auto">
                                            <div>
                                                <div>
                                                    <span class="text-xs font-semibold leading-tight">100%</span>
                                                </div>
                                            </div>
                                            <div
                                                class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                <div class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                    role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <img src="./assets/img/small-logos/logo-spotify.svg"
                                                    class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl"
                                                    alt="spotify" />
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 text-sm leading-normal">Launch our Mobile App</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="mt-2 avatar-group">
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="./assets/img/team-4.jpg" class="w-full rounded-full"
                                                    alt="user1" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg"
                                                role="tooltip">
                                                Ryan Tompson
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="./assets/img/team-3.jpg" class="w-full rounded-full"
                                                    alt="user2" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg"
                                                role="tooltip">
                                                Romina Hadid
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="./assets/img/team-4.jpg" class="w-full rounded-full"
                                                    alt="user3" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg"
                                                role="tooltip">
                                                Alexander Smith
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                            <a href="javascript:;"
                                                class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30"
                                                data-target="tooltip_trigger" data-placement="bottom">
                                                <img src="./assets/img/team-1.jpg" class="w-full rounded-full"
                                                    alt="user4" />
                                            </a>
                                            <div data-target="tooltip"
                                                class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg"
                                                role="tooltip">
                                                Jessica Doe
                                                <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']"
                                                    data-popper-arrow></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                                        <span class="text-xs font-semibold leading-tight"> $20,500 </span>
                                    </td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                        <div class="w-3/4 mx-auto">
                                            <div>
                                                <div>
                                                    <span class="text-xs font-semibold leading-tight">100%</span>
                                                </div>
                                            </div>
                                            <div
                                                class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                                                <div class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all"
                                                    role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- card 2 -->

    </div>
    <script src="{{ asset('Assets/js/Noticme.min.js') }}"></script>
    <script>
        @if(isset($message))
            Noticme.any({
                text: "{{ $message }}",
                timer: 5000,
                type: "success",
            });
        @endif
    </script>
@endsection
