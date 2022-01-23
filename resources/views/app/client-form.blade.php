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

    <div class="card card-flush mt-6 mt-xl-9">
        <div class="card-body pt-0">
            <div class="table-responsive">

                <form class="form" action="javascript:void(0);" id="form_data">
                    @csrf
                    
                    <div class="modal-body py-10 px-lg-17">
                        
                        <div style="border: none;background-color: #edecec;padding: 2% 3% 2% 3%;border-left-width: medium;border-bottom-right-radius: 22px;border-top-right-radius: 22px;border-top-left-radius: 22px;border-bottom-left-radius: 22px;margin: 1% 0;">
                            
                            <label class="fs-6 fw-bold mb-2" style="border-bottom-style: ridge;" >Dados pessoais</label>
                                    
                            <div class="row row-cols-lg-2 g-10">
                            <div class="col">
                                <div class="fv-row mb-9">
                                    <label class="fs-6 fw-bold required mb-2">Nome</label>
                                    <input type="text" class="form-control form-control-solid" placeholder="Nome do cliente" name="name" tabindex="1" value="Nogueira" />
                                </div>
                            </div>
                            <div class="col" >
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold required mb-2">E-mail</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="E-mail do cliente" name="email" tabindex="2" value="nogarm2@gmail.com" />
                                    </div>
                                </div>
                            </div>

                            <div class="row row-cols-lg-2 g-10">
                                <div class="col" data-kt-calendar="datepicker">
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold required mb-2">Data aniversário</label>
                                        <input class="form-control form-control-solid" id="kt_calendar_datepicker_start_date" placeholder="Data aniversário"  name="birthdate" tabindex="3" value="01/07/1988" />
                                    </div>
                                </div>
                                <div class="col" >
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold mb-2">Sexo</label>
                                        <select aria-label="Select a Timezone" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid" name="gender" tabindex="4" >
                                            <option value="man" selected >Masculino</option>
                                            <option value="woman">Feminino</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        <div style="border: none;background-color: #edecec;padding: 2% 3% 2% 3%;border-left-width: medium;border-bottom-right-radius: 22px;border-top-right-radius: 22px;border-top-left-radius: 22px;border-bottom-left-radius: 22px;margin: 1% 0;">

                            <label class="fs-6 fw-bold mb-2" style="border-bottom-style: ridge;" >Endereço e contato</label>
                            
                            <div class="row row-cols-lg-2 g-10">
                                <div class="col" >
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold mb-2">Telefone 1</label>
                                        <input class="form-control form-control-solid phone" id="telephone1" placeholder="Telefone 1"  name="telephone1" tabindex="5" value="41992443685" />
                                    </div>
                                </div>
                                <div class="col" >
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold mb-2">Telefone 2</label>
                                        <input class="form-control form-control-solid phone" id="telephone2" placeholder="Telefone 2"  name="telephone2" tabindex="6" value="41992443685" />
                                    </div>
                                </div>

                            </div>
                            
                            <div class="row row-cols-lg-2 g-10">
                                <div class="col">
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold required mb-2">CEP</label>
                                        <input class="form-control form-control-solid" id="cep" placeholder="CEP"  name="cep" tabindex="7" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold required mb-2">Endereço</label>
                                        <input class="form-control form-control-solid" id="address" placeholder="Endereço"  name="address" tabindex="8" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row row-cols-lg-2 g-10">
                                <div class="col">
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold required mb-2">Bairro</label>
                                        <input class="form-control form-control-solid" id="district" placeholder="Bairro"  name="district" tabindex="9" />
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold required mb-2">Cidade</label>
                                        <input class="form-control form-control-solid" id="city" placeholder="Cidade"  name="city" tabindex="10" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row row-cols-lg-2 g-10">
                                <div class="col">
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold required mb-2">Estado</label>
                                        <input class="form-control form-control-solid" id="state" placeholder="Estado"  name="state" tabindex="11" />
                                    </div>
                                </div>
                                {{-- <div class="col">
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold required mb-2">País</label>
                                        <input class="form-control form-control-solid" id="country" placeholder="País"  name="country" tabindex="12" />
                                    </div>
                                </div> --}}
                            </div>

                        </div>

                        <div style="border: none;background-color: #edecec;padding: 2% 3% 2% 3%;border-left-width: medium;border-bottom-right-radius: 22px;border-top-right-radius: 22px;border-top-left-radius: 22px;border-bottom-left-radius: 22px;margin: 1% 0;">    
                            <label class="fs-6 fw-bold mb-2" style="border-bottom-style: ridge;" >Plano</label>

                            <div class="row row-cols-lg-2 g-10">
                                <div class="col">
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold required mb-2">Convênio</label>
                                        <select data-control="select2" class="form-select form-select-sm form-select-solid" style="padding-top: 0.85rem !important;" name="covenant" tabindex="13" >
                                            <option value="man">Convenio 1</option>
                                            <option value="woman">Convenio 2</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col" >
                                    <div class="fv-row mb-9">
                                        <div class="fv-row mb-9">
                                            <label class="fs-6 fw-bold required mb-2">Plano</label>
                                            <select data-control="select2" class="form-select form-select-sm form-select-solid" style="padding-top: 0.85rem !important;" name="healthplan" tabindex="14" >
                                                <option value="man">Convenio 1</option>
                                                <option value="woman">Convenio 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-cols-lg-2 g-10">
                                <div class="col">
                                    <div class="fv-row mb-9">
                                        <label class="fs-6 fw-bold required mb-2">Número da carteirinha</label>
                                        <input class="form-control form-control-solid" id="cardnumber" placeholder="Número da carteirinha"  name="cardnumber" tabindex="15" />
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