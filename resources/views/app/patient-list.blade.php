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
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Pacientes</h1>
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
                <a href="patient-create" class="btn btn-sm btn-primary" >Criar</a>
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
                            <th class="min-w-120px">nome</th>
                            <th class="min-w-50px">cpf</th>
                            <th class="min-w-90px text-end">telefone</th>
                            <th class="min-w-50px text-end">e-mail</th>
                            <th class="min-w-30px text-end">cep</th>
                            <th class="min-w-150px text-end">endereço</th>
                            <th class="min-w-20px text-end">número</th>
                            <th class="min-w-20px text-end">Ação</th>
                        </tr>
                    </thead>

                    <tbody class="fs-6">

                        @if (sizeof($arrList) > 0  )
                            @foreach ( $arrList as $arrData )
                                <tr>
                                    <td>{{ $arrData['name'] }}</td>
                                    <td>{{ $arrData['cpf'] }}</td>
                                    <td>{{ $arrData['telephone'] }}</td>
                                    <td>{{ $arrData['email'] }}</td>
                                    <td>{{ $arrData['zipcode'] }}</td>
                                    <td>{{ $arrData['address'] }}</td>
                                    <td>{{ $arrData['number'] }}</td>
                                    <td class="text-end">
                                        <a href="patient-edit/1" class="btn btn-light btn-sm">Editar</a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>                                
                                <td colspan="3">Nenhum registro localizado</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
<?php } ?> 