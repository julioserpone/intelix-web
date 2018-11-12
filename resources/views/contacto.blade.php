@extends('layouts.frontend')

@section('htmlheader_title')
    Contacto
@endsection

@section('main-content')
    <div class="parallax-container">
        <div class="parallax">
            <img src="{{ asset('images/Contacto_BG.png') }}">
            <div class="container items-centered-to-left">
                <div class="col s12 m12 l12">
                    <div class="text-banners-parallax">
                        <div class="contacto">
                            <p class="extra-big fw-400 white-text line-less-big" data-aos="zoom-in-down">¿En qué<br>podemos ayudarte?</p>
                            <p class="less-big fw-400 intelix-text shadow-black" data-aos="zoom-in">Deja que Intelix lo haga por tí</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section white">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l5">
                    <div class="section-contacto">
                        <div class="hide-on-med-and-down">
                            <div class="phone-intelix-float">
                                <img class="animate fadeInUp image-levitation floating" src="{{ asset('images/phone_sin_sombra.png') }}" />
                            </div>
                            <div class="phone-intelix-shadow">
                                <img class="shadow-image-levitation" src="{{ asset('images/phone_sombra.png') }}" />
                            </div>
                        </div>
                        <p class="grey-text darken-2 fw-600 big left-align">Contáctanos:</p>
                        <p class="grey-text fw-300 thin line-big left-align">Con nuestros talentos y experiencia podemos diseñar, desarrollar e implementar esa solución inteligente e integral que tu empresa necesita</p>

                        <p class="grey-text fw-300 thin line-big left-align"><span class="fw-500 darken-2">Email:</span> intelix@intelix.biz</p>
                        <p class="grey-text fw-300 thin line-big left-align"><span class="fw-500 darken-2">Conoce aún mas en:</span> 
                            <a href="#" class="social-media"><img src="{{ asset('images/Contacto_0007_Instagram_color-x2.png') }}"></a>
                            <a href="#" class="social-media"><img src="{{ asset('images/Contacto_0008_Twitter_color-x2.png') }}"></a>
                            <a href="#" class="social-media"><img src="{{ asset('images/Contacto_0009_Facebook_color-x2.png') }}"></a>
                            <a href="#" class="social-media"><img src="{{ asset('images/Contacto_0010_YouTube_color-x2.png') }}"></a>
                        </p>
                    </div>
                </div>
                <div class="col s12 m12 l7">
                    <form method="post" action="{{ route('contacto') }}" id="frmContacto"  class="col s12 mt-50">
                        {{ csrf_field() }}
                        <div class="row mb-5">
                            <div class="input-field col s6">
                                <i class="material-icons prefix intelix-text">account_circle</i>
                                <input id="names" name="names" type="text" class="validate grey-text lighten-2">
                                <label for="names" data-error="Error en tipo de dato" data-success="Ok">Nombres y Apellidos</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix intelix-text">email</i>
                                <input id="email" name="email" type="email" class="validate grey-text lighten-2">
                                <label for="email" data-error="Error en tipo de dato" data-success="Ok">Correo Electronico</label>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="input-field col s6">
                                <i class="material-icons prefix intelix-text">phone</i>
                                <input id="telephone" name="telephone" type="text" class="validate grey-text lighten-2">
                                <label for="telephone" data-error="Error en tipo de dato" data-success="Ok">Teléfono contacto</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix intelix-text">store_mall_directory</i>
                                <input id="company" name="company" type="text" class="validate grey-text lighten-2">
                                <label for="company" data-error="Error en tipo de dato" data-success="Ok">Empresa</label>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="input-field col s12">
                                <i class="material-icons prefix intelix-text">event_note</i>
                                <select id='service_required' name='service_required' class="grey-text darken-2">
                                    <option value="" selected>Seleccione un servicio</option>
                                    @foreach($services as $service)
                                        <option value="{{ $service->id }}">{{ $service->description }}</option>
                                    @endforeach
                                </select>
                                <label>Servicio requerido</label>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="input-field col s12">
                                <i class="material-icons prefix intelix-text">sms</i>
                                <textarea id="more_info" name="more_info" class="materialize-textarea grey-text darken-2"></textarea>
                                <label for="cuentanos">Cuentanos un poco más</label>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="input-field col s12">
                                <button class="btn waves-effect waves-light intelix right" type="submit" name="action">ENVIAR
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('customScripts')
<script type="text/javascript">
    
    $(document).ready(function(){
    
        AOS.init();     //Animations init

        function formatErrors(list) {

            var errors = "<ul>";
            var results = $.parseJSON(list);

            for(var k in results.errors) {
                errors += "<li>"+ results.errors[k] +"</li>" ;
            }
            errors += "</ul>";
            return errors;
        }

        $("#frmContacto").submit(function(e)
        {
            e.preventDefault();
            var data = new FormData(this);
            token = "{{ csrf_token() }}";
            url = "{{ route('contacto') }}";

            swal({
                title: "{{ trans('messages.modal.contact.title') }}",
                text: "{{ trans('messages.modal.contact.subtitle') }}",
                type: 'warning',
                confirmButtonColor: '#00bcb5',
                showCancelButton: true,
                confirmButtonText: "{{ trans('messages.modal.confirm_button') }}",
                cancelButtonText: "{{ trans('messages.modal.cancel_button') }}",
                showLoaderOnConfirm: true,
                preConfirm: function() {
                    return new Promise((resolve) => {
                        $.ajax({
                            url: url,
                            headers: {'X-CSRF-TOKEN': token},
                            data: data,
                            type: 'POST',
                            datatype: 'JSON',
                            cache: false,
                            contentType: false,
                            processData: false
                        }).done(function(response) {
                            swal({
                                title: "{{ trans('messages.modal.title_success') }}",
                                html: "{{ trans('messages.modal.contact.done_msg') }}",
                                type: 'success'
                            });
                        }).fail(function(response) {
                            swal({
                                title: "{{ trans('messages.modal.title_fail') }}",
                                html: "{{ trans('messages.modal.contact.fail_msg') }}: " + formatErrors(response.responseText),
                                type: 'error'
                            });
                        });
                    });
                },
                allowOutsideClick: false
            }).then((result) => {
                if (result.dismiss === 'cancel') {
                    swal(
                        "{{ trans('messages.modal.title_cancel') }}",
                        "{{ trans('messages.modal.contact.cancel_msg') }}",
                        'error'
                    )
                }
            });
            
        });
    });
    
</script>
@endsection


