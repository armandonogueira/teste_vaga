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

    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Especialidades</h1>
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
                    <li class="breadcrumb-item text-dark">Criar</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Container-->
    </div>

    <div class="card card-flush mt-6 mt-xl-9">
        <div class="card-body pt-0">
            <div class="table-responsive">

                <form class="form" action="javascript:void(0);" id="form_data">
                    @csrf
                    
                    <div class="modal-body py-10 px-lg-17">
                        
                        <div style="border: none;background-color: #edecec;padding: 2% 3% 2% 3%;border-left-width: medium;border-bottom-right-radius: 22px;border-top-right-radius: 22px;border-top-left-radius: 22px;border-bottom-left-radius: 22px;margin: 1% 0;">
                            
                            {{-- <label class="fs-6 fw-bold mb-2" style="border-bottom-style: ridge;" >Especialidade </label> --}}
                                    
                            <div class="row row-cols-lg-2 g-10">
                            <div class="col">
                                <div class="fv-row mb-9">
                                    <label class="fs-6 fw-bold required mb-2">Especialidade</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="Especialidade" name="name" tabindex="1" value="" />
                                </div>
                            </div>
                            <div class="col">
                                <div class="fv-row mb-9">
                                    <label class="fs-6 fw-bold required mb-2">Status</label>
                                    <select data-control="select2" class="form-select form-select-sm form-select-solid" style="padding-top: 0.85rem !important;" name="covenant" tabindex="13" >
                                        <option value="man">Ativo</option>
                                        <option value="woman">Inativo</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        
                    </div>

                    <div class="modal-footer flex-center">
                        <button type="reset" id="kt_modal_add_event_cancel" class="btn btn-light me-3">Cancelar</button>
                        <button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
                            <span class="indicator-label">Salvar</span>
                            <span class="indicator-progress">Processando...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>

                </form>
                
            </div>
        </div>
    </div>
    
    {{-- <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="assets/js/custom/apps/calendar/calendar.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/modals/create-app.js"></script>
    <script src="assets/js/custom/modals/upgrade-plan.js"></script> --}}
    {{-- <script src="jquery.js" type="text/javascript"></script>
    <script src="jquery.maskedinput.js" type="text/javascript"></script> --}}
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/jquery.mask.js"></script> 
    <script type="text/javascript" >
        jQuery(function($){
            $("#kt_calendar_datepicker_start_date").mask("99/99/9999");
            $(".phone").mask("(99) 999999999");
            //$("#tin").mask("99-9999999");
            //$("#ssn").mask("999-99-9999");
        });

        $( '#cep' ).change(function() {

            $(this).removeClass().addClass('form-control form-control-solid');
            
            $.ajax({
                type: "GET",
                url: "get-cep",
                data: "cep=" + $('#cep').val(),
                dataType: "json",
                success: function(result) {
                    if( result.status  == '1'){                        
                        $("#address").val(result.address);
                        $("#district").val(result.district);
                        $("#city").val(result.city);
                        $("#state").val(result.state);
                    }else{
                        $("#address, #district, #city, #state").val("");
                        $("#cep").removeClass().addClass('form-control form-control-solid input-error');
                    }
                },
                error: function(result, status) {
                    console.log(result);
                }
            });
            
            
        });
    </script>

    
@endsection
<?php } ?> 