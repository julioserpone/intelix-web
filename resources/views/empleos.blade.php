@extends('layouts.frontend')

@section('htmlheader_title')
    Empleos
@endsection

@section('main-content')
    <div class="parallax-container">
        <div class="parallax">
            <img src="{{ asset('images/Empleos_BG.png') }}">
            <div class="container items-centered-to-left">
                <div class="col s12 m12 l6">
                    <div class="text-banners-parallax">
                        <p class="extra-big fw-400 white-text line-less-big" data-aos="zoom-in-down">¿Eres Creativo y<br>Comprometido?</p>
                        <p class="less-big fw-400 intelix-text" data-aos="zoom-in">¡Entonces puedes ser parte de nuestro equipo!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-empleos white">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l6">
                    <p class="grey-text darken-2 fw-600 extra-big line-big">¡Asume cada desafío con compromiso y con la meta de hacer realidad cada idea!</p>
                    <p class="grey-text fw-300 thin line-big">¡Para nosotros es fundamental contar con los mejores talentos! es por esta razón que en Intelix estamos siempre comprometidos con la formación contínua de nuestro personal, desarrollando en ellos las competencias necesarias para alcanzar su máximo potencial y entrega en cada uno de los retos que la experiencia profesional en Intelix les presenta.</p>
                </div>
                <div class="col s12 m12 l6">
                    <div class="row mt-50 pl-30 pl-0">
                        <p class="grey-text darken-2 fw-600 less-big line-less-big">Envianos tu CV en el siguiente formulario:</p>
                        <form class="col s12" method="post" action="{{ route('send_cv') }}" id="frmEmpleos" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row mb-5">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix intelix-text">account_circle</i>
                                    <input id="names" name="names" type="text" class="validate grey-text lighten-2">
                                    <label for="names">Nombres y Apellidos</label>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix intelix-text">location_city</i>
                                    <input id="residence" name="residence" type="text" class="validate grey-text lighten-2">
                                    <label for="residence">Ciudad de residencia</label>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix intelix-text">email</i>
                                    <input id="email" name="email" type="email" class="validate grey-text lighten-2">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix intelix-text">phone</i>
                                    <input id="telephone" name="telephone" type="text" class="validate grey-text lighten-2">
                                    <label for="telephone">Teléfono contacto</label>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="file-field input-field col s12">
                                    <div class="btn">
                                        <span>Cargar</span>
                                        <input type="file" id="document" name="document" class="grey-text lighten-2">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" placeholder="Carga aqui tu CV">
                                    </div>
                                    <div id="data-error-file">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix intelix-text">card_membership</i>
                                    <input id="link_social_network" name="link_social_network" type="text" class="validate grey-text lighten-2">
                                    <label for="link_social_network">Enlace de Red Laboral</label>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="input-field col s12">
                                    <button id="btnEmpleo" name="btnEmpleo" class="btn waves-effect waves-light intelix right" type="submit">ENVIAR
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('customScripts')
<script type="text/javascript">
    
    $.validator.addMethod('filesize', function (value, element, param) {
        return this.optional(element) || (element.files[0].size < (param*1000))
    }, 'El archivo no puede ser mayor de {0} Kb');

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

        $("#frmEmpleos").validate({
            rules: {
                names: {
                    required: true,
                    minlength: 5
                },
                residence: {
                    required: true
                },
                email: {
                    required: true,
                    email:true
                },
                telephone: {
                    required: true,
                    minlength: 11,
                    number: true
                },
                link_social_network: {
                    url: true
                },
                document: {
                    required: true,
                    extension: "pdf|doc|docx",
                    filesize: 500
                }
            },
            //For custom messages
            messages: {
                names:{
                    required: "Ingrese su nombre y apellido",
                    minlength: "Ingrese al menos 5 caracteres"
                },
                residence: "Ingrese su ciudad de residencia",
                email:{
                    required: "Ingrese tu dirección de correo electrónico",
                    email: "El formato del correo electrónico ingresado es incorrecto"
                },
                telephone: {
                    required: "Ingresa un número telefónico",
                    minlength: "Ingrese al menos 11 números",
                    number: "Debe ingresar solamente números"
                },
                link_social_network: {
                    url: "Debe ingresar una url válida"
                },
                document: {
                    required: "Debe indicar un archivo",
                    extension: "Solo está permitido archivos PDF y documentos de Word"
                }
            },
            errorElement : 'div',
            errorClass: "data-error",
            errorPlacement: function(error, element) {
              var placement = $(element).data('error');
              if (placement) {
                $(placement).append(error)
              } else {
                if($(element).attr('id') == 'document') {
                    error.insertAfter($('#data-error-file'));
                } else {
                    error.insertAfter(element);
                }
              }
            },
            submitHandler: function(form) {
                // some other code
                // maybe disabling submit button
                // then:
   
                var data = new FormData(form);
                token = "{{ csrf_token() }}";
                url = "{{ route('send_cv') }}";

                swal({
                    title: "{{ trans('messages.modal.employee.title') }}",
                    text: "{{ trans('messages.modal.employee.subtitle') }}",
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
                                    html: "{{ trans('messages.modal.employee.done_msg') }}",
                                    type: 'success'
                                });
                            }).fail(function(response) {
                                swal({
                                    title: "{{ trans('messages.modal.title_fail') }}",
                                    html: "{{ trans('messages.modal.employee.fail_msg') }}: " + formatErrors(response.responseText),
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
                            "{{ trans('messages.modal.employee.cancel_msg') }}",
                            'error'
                        )
                    }
                });
                //form.submit(function(e) {
                //    e.preventDefault();
                //});
            }
        });

        /*$("#frmEmpleos").submit(function(e)
        {
            e.preventDefault();
            var data = new FormData(this);
            token = "{{ csrf_token() }}";
            url = "{{ route('send_cv') }}";

            swal({
                title: "{{ trans('messages.modal.employee.title') }}",
                text: "{{ trans('messages.modal.employee.subtitle') }}",
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
                                html: "{{ trans('messages.modal.employee.done_msg') }}",
                                type: 'success'
                            });
                        }).fail(function(response) {
                            swal({
                                title: "{{ trans('messages.modal.title_fail') }}",
                                html: "{{ trans('messages.modal.employee.fail_msg') }}: " + formatErrors(response.responseText),
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
                        "{{ trans('messages.modal.employee.cancel_msg') }}",
                        'error'
                    )
                }
            });
            
        });*/
    });
    
</script>
@endsection


