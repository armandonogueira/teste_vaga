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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Consultas</h1>
                <!--end::Title-->
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start mx-4"></span>
                <!--end::Separator-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="home" class="text-muted text-hover-primary">Home</a>
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
                <!--begin::Button-->
                <a href="ma-create" class="btn btn-sm btn-primary" >Criar</a>
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
                            <th class="min-w-100px">Especialidade</th>
                            <th class="min-w-100px">Médico</th>
                            <th class="min-w-100px">Paciente</th>
                            <th class="min-w-100px">Data Nasc</th>
                            <th class="min-w-100px">Nome responsável</th>
                            <th class="min-w-100px">CPF responsável</th>
                            <th class="min-w-100px">Consulta para dia</th>
                            <th class="min-w-100px">Data de criação</th>
                            <th class="min-w-50px text-end">Details</th>
                        </tr>
                    </thead>

                    <tbody class="fs-6">

                        @if (sizeof($arrListNew) > 0  )
                            @foreach ( $arrListNew as $arrData )
                                <tr>
                                    <td>{{ $arrData['specialty'] }}</td>
                                    <td>{{ $arrData['doctor'] }}</td>
                                    <td>{{ $arrData['patient'] }}</td>
                                    <td>{{ $arrData['birthdate'] }}</td>
                                    <td>{{ $arrData['responsible_name'] }}</td>
                                    <td>{{ $arrData['responsible_cpf'] }}</td>
                                    <td>{{ $arrData['medicalappointment'] }}</td>
                                    <td>{{ $arrData['ma_created'] }}</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-sm">Ver</a>
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

@endsection
<?php } ?> 