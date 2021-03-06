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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Médicos</h1>
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
                    <!--end::Svg Icon-->Filtrar</a>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_6132282ec44b8">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">CRM</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <div class="fv-row mb-10">
                                <input class="form-control form-control-solid" id="crm" placeholder="CRM"  name="crm" />
                            </div>
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true" onclick="filtro()">Aplicar</button>
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
                <a href="doctor-create" class="btn btn-sm btn-primary" >Criar</a>
                <!--end::Button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>

    <div class="card card-flush mt-6 mt-xl-9" style="margin-top: 0.2rem!important;">

        <div class="card-body pt-0">
            <div class="table-responsive">
                <table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
                    <thead class="fs-7 text-gray-400 text-uppercase">
                        <tr>
                            <th class="min-w-250px">Nome</th>
                            <th class="min-w-90px">Especialidade</th>
                            <th class="min-w-90px">CRM</th>
                            <th class="min-w-50px text-end">Details</th>
                        </tr>
                    </thead>

                    <tbody class="fs-6">

                        @if (sizeof($arrList) > 0  )
                            @foreach ( $arrList as $arrData )
                                <tr>
                                    <td>{{ $arrData['name'] }}</td>
                                    <td>{{ $arrData['specialty'] }}</td>
                                    <td>{{ $arrData['crm'] }}</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-sm">View</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>                                
                                <td colspan="4">Nenhum registro localizado</td>
                            </tr>
                        @endif

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/jquery.mask.js"></script> 
    <script type="text/javascript" >

        function filtro(){
            if( $("#crm").val().length > 1 ){
                crm = $("#crm").val()
                location="../doctor-list/"+crm;
            }else{
                location="../doctor-list";
            }
        }
        
    </script>


@endsection
<?php } ?> 