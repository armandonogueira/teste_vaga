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
                            
                            <label class="fs-6 fw-bold mb-2" style="border-bottom-style: ridge;" >Médico</label>
                                    
                            <div class="row row-cols-lg-2 g-10">
                                <div class="col">
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold required mb-2">Especialidade</label>
                                        <select data-control="select2" class="form-select form-select-sm form-select-solid" style="padding-top: 0.85rem !important;" id="spe" name="specialty" tabindex="1" onchange="getDoctor(this);" >
                                            <option value="E"> Selecione</option>
                                            @foreach ( $arrSpecialty as $arrData )
                                                <option value="{{ $arrData['id_specialty'] }}">{{ $arrData['specialty'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold required mb-2">Médico</label>
                                        <select data-control="select2" class="form-select form-select-sm form-select-solid" style="padding-top: 0.85rem !important;" name="doctor" id="doctor" tabindex="2" >
                                            <option value="E"> Selecione</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-cols-lg-2 g-10">
                                <div class="col">
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold required mb-2">Paciente</label>
                                        <select data-control="select2" class="form-select form-select-sm form-select-solid" style="padding-top: 0.85rem !important;" name="patient" tabindex="3" >
                                            <option value="E"> Selecione</option>
                                            @foreach ( $arrPatientNew as $arrPatient )
                                                <option value="{{ $arrPatient['id_patient'] }}">{{ $arrPatient['patient'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                {{-- onchange="checkBirthDate(this);" --}}
                                <div class="col" >
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold required mb-2">Data nascimento</label>
                                        <input class="form-control form-control-solid" id="birthdate" placeholder="Data nascimento"  name="birthdate" tabindex="4" value=""  />
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row row-cols-lg-2 g-10" id="block_responsible" style="display:none;">
                                <div class="col">
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold required mb-2">nome do responsável</label>
                                        <input class="form-control form-control-solid" id="responsible_name" placeholder="nome do responsável"  name="responsible_name" tabindex="9" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold required mb-2">CPF do responsável</label>
                                        <input class="form-control form-control-solid" id="responsible_cpf" placeholder="CPF do responsável"  name="responsible_cpf" tabindex="10" />
                                    </div>
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
        
        $( '#kt_modal_add_event_submit' ).on('click', function() {

            if( $('#birthdate').attr('smaller12') == "Y" ){
                
                if( $("#responsible_name").val().length < 1 ){
                    alert('Paciente menor de 12 anos, é obrigatório ter nome e cpf de um responsável.')
                    return false;
                }
                if( $("#responsible_cpf").val().length < 1 ){
                     alert('Paciente menor de 12 anos, é obrigatório ter nome e cpf de um responsável.')
                    return false;
                }
                if( $("#select2-spe-container").text() != "Pediatria" ){
                    alert('Paciente menor de 12 anos, pode ser consultado apenas com PEDIATRA.')
                    return false;
                }
            }
            console.log($('#form_data').serialize());
            $.ajax({
                type: "POST",
                url: "ma-save",
                data: $('#form_data').serialize(),
                dataType: "json",
                success: function(result) {
                    console.log(result);
                },
                error: function(result, status) {
                    console.log(result);
                }
            });

            
                
            return false;
            /*$(this).removeClass().addClass('form-control form-control-solid');

            $.ajax({
                type: "GET",
                url: "ma-checkbirthdate/"+birthdate,
                dataType: "json",
                success: function(result) {
                    if( result.smaller12 == 'Y' ){
                       $("#block_responsible").show();
                       $("#responsible_name, #responsible_cpf").removeClass().addClass('form-control form-control-solid input-error');
                    }else{
                       $("#block_responsible").hide();
                    }
                },
                error: function(result, status) {
                    console.log(result);
                }
            });*/
            
            
        });

        $( '#birthdate' ).change(function() {

            $(this).removeClass().addClass('form-control form-control-solid');
            birthdate = $('#birthdate').val().replace('/', '.').replace('/', '.').replace('/', '.')
            $.ajax({
                type: "GET",
                url: "ma-checkbirthdate/"+birthdate,
                dataType: "json",
                success: function(result) {
                    if( result.smaller12 == 'Y' ){
                       $("#block_responsible").show();
                       $("#birthdate").attr('smaller12', 'Y');
                       $("#responsible_name, #responsible_cpf").removeClass().addClass('form-control form-control-solid input-error');
                    }else{
                       $("#birthdate").removeAttr('smaller12');
                       $("#block_responsible").hide();
                    }
                },
                error: function(result, status) {
                    console.log(result);
                }
            });
            
            
        });

        function getDoctor(data){
            $.ajax({
                type: "GET",
                url: "doctor-get/"+data.value,
                dataType: "json",
                success: function(result) {
                    $("#doctor").html(result.option);
                    console.log(result.option);
                }
            });

        }
        jQuery(function($){
            $("#birthdate").mask("99/99/9999");
            $(".phone").mask("(99) 999999999");
            $("#responsible_cpf").mask("999.999.999-99");
            //$("#tin").mask("99-9999999");
            //$("#ssn").mask("999-99-9999");

            
        });

        
    </script>

    
@endsection
<?php } ?> 