<x-app-layout>
    <div>
        @if(request()->hasCookie('api_token'))
            {{-- Token exists in cookies, do something --}}
            <p>Token exists in cookies!</p>
        @else
            {{-- Token doesn't exist in cookies, do something else --}}
            <p>Token doesn't exist in cookies.</p>
        @endif

        <!-- row -->
        <div class="container-fluid">
            <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
                <h2 class="mb-3 me-auto">Dashboard</h2>
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="card-data me-2">
                                <h5>Properties for Sale</h5>
                                <h2 class="fs-40 font-w600">50</h2>
                            </div>
                            <div><span class="donut1"
                                    data-peity='{ "fill": ["var(--primary)", "rgba(242, 246, 252)"]}'>5/6</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="card-data me-2">
                                <h5>Commercial Properties</h5>
                                <h2 class="fs-40 font-w600">2</h2>
                            </div>
                            <div><span class="donut1"
                                    data-peity='{ "fill": ["rgb(56, 226, 93,1)", "rgba(242, 246, 252)"]}'>2/8</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="card-data me-2">
                                <h5>Residential Properties</h5>
                                <h2 class="fs-40 font-w600">30</h2>
                            </div>
                            <div><span class="donut1"
                                    data-peity='{ "fill": ["rgb(255, 135, 35,1)", "rgba(242, 246, 252)"]}'>5/8</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="card-data me-2">
                                <h5>Lease Properties</h5>
                                <h2 class="fs-40 font-w600">13</h2>
                            </div>
                            <div><span class="donut1"
                                    data-peity='{ "fill": ["rgb(51, 62, 75,1)", "rgba(242, 246, 252)"]}'>3/8</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header border-0  flex-wrap">
                                    <h4 class="fs-20">Total Revenue</h4>
                                    <div class="d-flex">
                                        <div class="card-action coin-tabs mt-3 mt-sm-0">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#Monthly"
                                                        role="tab">Monthly</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link " data-bs-toggle="tab" href="#Daily"
                                                        role="tab">Daily</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#Today"
                                                        role="tab">Today</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="dropdown custom-dropdown mb-0 ms-3">
                                            <div class="btn sharp tp-btn dark-btn" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13C12.5523 13 13 12.5523 13 12Z"
                                                        stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M6 12C6 11.4477 5.55228 11 5 11C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13C5.55228 13 6 12.5523 6 12Z"
                                                        stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M20 12C20 11.4477 19.5523 11 19 11C18.4477 11 18 11.4477 18 12C18 12.5523 18.4477 13 19 13C19.5523 13 20 12.5523 20 12Z"
                                                        stroke="#2E2E2E" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                <a class="dropdown-item text-danger"
                                                    href="javascript:void(0);">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body py-0">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="Monthly">
                                            <div class="flex-wrap mb-sm-4 mb-2 align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <span class=" revenue text-black font-w600 me-5">$236,535</span>
                                                    <div class="d-flex align-items-center">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15.9999 3.44C10.1548 3.44 4.94004 7.64128 3.71732 13.3622C3.10644 16.2208 3.51796 19.2605 4.88084 21.847C6.19252 24.3363 8.34292 26.3482 10.9157 27.4883C13.5919 28.6746 16.6642 28.8813 19.477 28.0723C22.1906 27.2922 24.5967 25.5798 26.2348 23.2813C29.6597 18.4758 29.2018 11.7261 25.1724 7.41984C22.8111 4.89632 19.4565 3.44 15.9999 3.44ZM16.6783 9.98272L20.1855 13.4902C21.061 14.3658 19.7032 15.7235 18.8277 14.8477L17.0661 13.0858V21.2323C17.0661 21.8134 16.5807 22.2986 15.9996 22.2986C15.4184 22.2986 14.933 21.8134 14.933 21.2323V13.0451L13.1637 14.7725C12.2799 15.6362 10.9346 14.2659 11.8226 13.3987L15.3292 9.97472C15.7048 9.60736 16.3064 9.61088 16.6783 9.98272Z"
                                                                fill="#32D16D" />
                                                        </svg>
                                                        <div class="ms-3">
                                                            <span class="revenue-1 font-w500 text-success">0,8%</span>
                                                            <p class="mb-0">Than last week</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="chartTimeline" class="timeline-chart"></div>
                                        </div>
                                        <div class="tab-pane fade " id="Daily">
                                            <div class="flex-wrap mb-sm-4 mb-2 align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <span class="revenue text-black font-w600 me-5">$236,535</span>
                                                    <div class="d-flex align-items-center">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15.9999 3.44C10.1548 3.44 4.94004 7.64128 3.71732 13.3622C3.10644 16.2208 3.51796 19.2605 4.88084 21.847C6.19252 24.3363 8.34292 26.3482 10.9157 27.4883C13.5919 28.6746 16.6642 28.8813 19.477 28.0723C22.1906 27.2922 24.5967 25.5798 26.2348 23.2813C29.6597 18.4758 29.2018 11.7261 25.1724 7.41984C22.8111 4.89632 19.4565 3.44 15.9999 3.44ZM16.6783 9.98272L20.1855 13.4902C21.061 14.3658 19.7032 15.7235 18.8277 14.8477L17.0661 13.0858V21.2323C17.0661 21.8134 16.5807 22.2986 15.9996 22.2986C15.4184 22.2986 14.933 21.8134 14.933 21.2323V13.0451L13.1637 14.7725C12.2799 15.6362 10.9346 14.2659 11.8226 13.3987L15.3292 9.97472C15.7048 9.60736 16.3064 9.61088 16.6783 9.98272Z"
                                                                fill="#32D16D" />
                                                        </svg>
                                                        <div class="ms-3">
                                                            <span class="revenue-1 font-w500 text-success">0,8%</span>
                                                            <p class="mb-0">Than last week</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="chartTimeline1" class="timeline-chart"></div>
                                        </div>
                                        <div class="tab-pane fade" id="Today">
                                            <div class="flex-wrap mb-sm-4 mb-2 align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <span class="revenue text-black font-w600 me-5">$236,535</span>
                                                    <div class="d-flex align-items-center">
                                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M15.9999 3.44C10.1548 3.44 4.94004 7.64128 3.71732 13.3622C3.10644 16.2208 3.51796 19.2605 4.88084 21.847C6.19252 24.3363 8.34292 26.3482 10.9157 27.4883C13.5919 28.6746 16.6642 28.8813 19.477 28.0723C22.1906 27.2922 24.5967 25.5798 26.2348 23.2813C29.6597 18.4758 29.2018 11.7261 25.1724 7.41984C22.8111 4.89632 19.4565 3.44 15.9999 3.44ZM16.6783 9.98272L20.1855 13.4902C21.061 14.3658 19.7032 15.7235 18.8277 14.8477L17.0661 13.0858V21.2323C17.0661 21.8134 16.5807 22.2986 15.9996 22.2986C15.4184 22.2986 14.933 21.8134 14.933 21.2323V13.0451L13.1637 14.7725C12.2799 15.6362 10.9346 14.2659 11.8226 13.3987L15.3292 9.97472C15.7048 9.60736 16.3064 9.61088 16.6783 9.98272Z"
                                                                fill="#32D16D" />
                                                        </svg>
                                                        <div class="ms-3">
                                                            <span class="revenue-1 font-w500 text-success">0,8%</span>
                                                            <p class="mb-0">Than last week</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="chartTimeline2" class="timeline-chart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-xxl-12">
                            <div class="card">
                                <div class="card-header d-block border-0">
                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                        <h4 class="fs-20">Overview</h4>
                                        <div class="dropdown custom-dropdown mb-0">
                                            <div class="btn sharp tp-btn dark-btn" data-bs-toggle="dropdown">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z"
                                                        stroke="#342E59" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z"
                                                        stroke="#342E59" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z"
                                                        stroke="#342E59" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);">Details</a>
                                                <a class="dropdown-item text-danger"
                                                    href="javascript:void(0);">Cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="d-flex col-sm-4 col-6 align-items-center">
                                            <div class="building-icon">
                                                <i class="far fa-building bg-primary"></i>
                                            </div>
                                            <div class="ms-sm-3 ms-2 building">
                                                <span class="fs-14">Total Sale</span>
                                                <h4 class="font-w600 mb-0">2,346 Unit</h4>
                                            </div>
                                        </div>
                                        <div class="d-flex col-sm-4 col-6 align-items-center">
                                            <div class="building-icon">
                                                <i class="far fa-building bg-success"></i>
                                            </div>
                                            <div class="ms-sm-3 ms-2 building">
                                                <span class="fs-14">Total Sale</span>
                                                <h4 class="font-w600 mb-0">2,346 Unit</h4>
                                            </div>
                                        </div>
                                        <div class="d-flex col-sm-4 mt-sm-0 mt-3 align-items-center">
                                            <div class="me-3 text-sm-end text-start">
                                                <span class="fs-20 font-w500 text-success">0,8%</span>
                                                <p class="mb-0">than last week</p>
                                            </div>
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M15.9999 3.44C10.1548 3.44 4.94004 7.64128 3.71732 13.3622C3.10644 16.2208 3.51796 19.2605 4.88084 21.847C6.19252 24.3363 8.34292 26.3482 10.9157 27.4883C13.5919 28.6746 16.6642 28.8813 19.477 28.0723C22.1906 27.2922 24.5967 25.5798 26.2348 23.2813C29.6597 18.4758 29.2018 11.7261 25.1724 7.41984C22.8111 4.89632 19.4565 3.44 15.9999 3.44ZM16.6783 9.98272L20.1855 13.4902C21.061 14.3658 19.7032 15.7235 18.8277 14.8477L17.0661 13.0858V21.2323C17.0661 21.8134 16.5807 22.2986 15.9996 22.2986C15.4184 22.2986 14.933 21.8134 14.933 21.2323V13.0451L13.1637 14.7725C12.2799 15.6362 10.9346 14.2659 11.8226 13.3987L15.3292 9.97472C15.7048 9.60736 16.3064 9.61088 16.6783 9.98272Z"
                                                    fill="#32D16D" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body py-0 px-sm-3 px-2">
                                    <div id="marketChart" class="market-line"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-3 col-xxl-4">
                    <div class="row">


                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>