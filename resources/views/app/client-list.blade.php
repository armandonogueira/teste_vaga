@extends('layouts.master')

@section('menu_lateral')
    @include('layouts.menu_lateral')
@endsection

@section('menu_sup')
    @include('layouts.menu_sup')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

<?php if (1==1){ ?> 
@section('content')
{{-- <div class="content d-flex flex-column flex-column-fluid" id="kt_content"> --}}
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Clientes</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">listagem</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-1">
                <!--begin::Wrapper-->
                <div class="me-4">
                    <!--begin::Menu-->
                    <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                    <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->Filter</a>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6132282ec44b8">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_6132282ec44b8" data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Button-->
                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>
                <!--end::Button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <div class="card card-flush mt-6 mt-xl-9" style="margin-top: 0.2rem!important;">
        <!--begin::Card header-->
        <div class="card-header mt-5">
            <!--begin::Card title-->
            <div class="card-title flex-column">
                <h3 class="fw-bolder mb-1">Clientes</h3>
                {{-- <div class="fs-6 text-gray-400">Total $260,300 sepnt so far</div> --}}
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar my-1">
                <!--begin::Select-->
                <div class="me-6 my-1">
                    <select id="kt_filter_year" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                        <option value="All" selected="selected">All time</option>
                        <option value="thisyear">This year</option>
                        <option value="thismonth">This month</option>
                        <option value="lastmonth">Last month</option>
                        <option value="last90days">Last 90 days</option>
                    </select>
                </div>
                <!--end::Select-->
                <!--begin::Select-->
                <div class="me-4 my-1">
                    <select id="kt_filter_orders" name="orders" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                        <option value="All" selected="selected">All Orders</option>
                        <option value="Approved">Approved</option>
                        <option value="Declined">Declined</option>
                        <option value="In Progress">In Progress</option>
                        <option value="In Transit">In Transit</option>
                    </select>
                </div>
                <!--end::Select-->
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-3 position-absolute ms-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Search Order" />
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
                    <!--begin::Head-->
                    <thead class="fs-7 text-gray-400 text-uppercase">
                        <tr>
                            <th class="min-w-250px">Nome</th>
                            <th class="min-w-150px">Anivers??rio</th>
                            <th class="min-w-90px">Sexo</th>
                            <th class="min-w-90px">Status</th>
                            <th class="min-w-50px text-end">Details</th>
                        </tr>
                    </thead>
                    <!--end::Head-->
                    <!--begin::Body-->
                    <tbody class="fs-6">
                        @foreach ( $arrList as $arrData )

                            <tr>
                                <td>
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Wrapper-->
                                        <div class="me-5 position-relative">
                                            <!--begin::Avatar-->
                                            {{-- <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                            </div> --}}
                                            {{-- <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-bold"></span>
                                            </div> --}}
                                            <!--end::Avatar-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-column justify-content-center">
                                            <a href="" class="fs-6 text-gray-800 text-hover-primary">{{ $arrData->name }}</a>
                                            <div class="fw-bold text-gray-400">{{ $arrData->email }}</div>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->
                                </td>
                                <td>{{ $arrData->birthdate }}</td>
                                <td>{{ $arrData->gender }}</td>
                                <td>
                                    <span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-light btn-sm">View</a>
                                </td>
                            </tr>
                            
                        @endforeach
                
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
                                        <div class="fw-bold text-gray-400">e.smith@kpmg.com.au</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Sep 22, 2021</td>
                            <td>$824.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Melody Macy</a>
                                        <div class="fw-bold text-gray-400">melody@altbox.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Oct 25, 2021</td>
                            <td>$699.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Max Smith</a>
                                        <div class="fw-bold text-gray-400">max@kt.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Dec 20, 2021</td>
                            <td>$810.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-4.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Sean Bean</a>
                                        <div class="fw-bold text-gray-400">sean@dellito.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Jun 24, 2021</td>
                            <td>$417.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-15.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Brian Cox</a>
                                        <div class="fw-bold text-gray-400">brian@exchange.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Mar 10, 2021</td>
                            <td>$692.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Mikaela Collins</a>
                                        <div class="fw-bold text-gray-400">mikaela@pexcom.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>May 05, 2021</td>
                            <td>$544.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-8.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Francis Mitcham</a>
                                        <div class="fw-bold text-gray-400">f.mitcham@kpmg.com.au</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Aug 19, 2021</td>
                            <td>$757.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>
                                        <div class="fw-bold text-gray-400">olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Oct 25, 2021</td>
                            <td>$521.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Neil Owen</a>
                                        <div class="fw-bold text-gray-400">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Feb 21, 2021</td>
                            <td>$723.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-6.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Dan Wilson</a>
                                        <div class="fw-bold text-gray-400">dam@consilting.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Sep 22, 2021</td>
                            <td>$841.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Bold</a>
                                        <div class="fw-bold text-gray-400">emma@intenso.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Oct 25, 2021</td>
                            <td>$658.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-7.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Ana Crown</a>
                                        <div class="fw-bold text-gray-400">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Dec 20, 2021</td>
                            <td>$708.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Robert Doe</a>
                                        <div class="fw-bold text-gray-400">robert@benko.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>May 05, 2021</td>
                            <td>$696.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-17.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                        <div class="fw-bold text-gray-400">miller@mapple.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Oct 25, 2021</td>
                            <td>$413.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-success text-success fw-bold">L</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Lucy Kunic</a>
                                        <div class="fw-bold text-gray-400">lucy.m@fentech.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Jul 25, 2021</td>
                            <td>$594.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-10.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Ethan Wilder</a>
                                        <div class="fw-bold text-gray-400">ethan@loop.com.au</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Apr 15, 2021</td>
                            <td>$897.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Robert Doe</a>
                                        <div class="fw-bold text-gray-400">robert@benko.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Jun 20, 2021</td>
                            <td>$963.00</td>
                            <td>
                                <span class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-17.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                        <div class="fw-bold text-gray-400">miller@mapple.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Mar 10, 2021</td>
                            <td>$712.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Mikaela Collins</a>
                                        <div class="fw-bold text-gray-400">mikaela@pexcom.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Dec 20, 2021</td>
                            <td>$950.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-7.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Ana Crown</a>
                                        <div class="fw-bold text-gray-400">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Aug 19, 2021</td>
                            <td>$402.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-success text-success fw-bold">L</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Lucy Kunic</a>
                                        <div class="fw-bold text-gray-400">lucy.m@fentech.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Jun 20, 2021</td>
                            <td>$728.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-26.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Max Smith</a>
                                        <div class="fw-bold text-gray-400">max@kt.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Feb 21, 2021</td>
                            <td>$964.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-1.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Emma Smith</a>
                                        <div class="fw-bold text-gray-400">e.smith@kpmg.com.au</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Jun 20, 2021</td>
                            <td>$923.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Neil Owen</a>
                                        <div class="fw-bold text-gray-400">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Mar 10, 2021</td>
                            <td>$721.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Neil Owen</a>
                                        <div class="fw-bold text-gray-400">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Dec 20, 2021</td>
                            <td>$664.00</td>
                            <td>
                                <span class="badge badge-light-warning fw-bolder px-4 py-3">Pending</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-17.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">John Miller</a>
                                        <div class="fw-bold text-gray-400">miller@mapple.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Jul 25, 2021</td>
                            <td>$639.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Olivia Wild</a>
                                        <div class="fw-bold text-gray-400">olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Jun 24, 2021</td>
                            <td>$490.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-7.jpg" />
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Ana Crown</a>
                                        <div class="fw-bold text-gray-400">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Apr 15, 2021</td>
                            <td>$742.00</td>
                            <td>
                                <span class="badge badge-light-success fw-bolder px-4 py-3">Approved</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Neil Owen</a>
                                        <div class="fw-bold text-gray-400">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>Aug 19, 2021</td>
                            <td>$694.00</td>
                            <td>
                                <span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!--begin::User-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Wrapper-->
                                    <div class="me-5 position-relative">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Online-->
                                        <div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
                                        <!--end::Online-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Info-->
                                    <div class="d-flex flex-column justify-content-center">
                                        <a href="" class="fs-6 text-gray-800 text-hover-primary">Robert Doe</a>
                                        <div class="fw-bold text-gray-400">robert@benko.com</div>
                                    </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::User-->
                            </td>
                            <td>May 05, 2021</td>
                            <td>$792.00</td>
                            <td>
                                <span class="badge badge-light-info fw-bolder px-4 py-3">In progress</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-sm">View</a>
                            </td>
                        </tr>
                    </tbody>
                    <!--end::Body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--end::Card body-->
    </div>
    {{-- </div> --}}
@endsection
<?php } ?> 