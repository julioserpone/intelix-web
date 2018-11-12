@extends('layouts.frontend')

@section('htmlheader_title')
    Servicios
@endsection

@section('main-content')
    <div class="parallax-container">
        <div class="parallax" style="z-index: 0;">
            <img src="{{ asset('images/Servicios_BG.png') }}">
            <div class="container items-centered-to-left">
                <div class="col s12 m12 l6">
                    <div>
                        <p class="extra-big fw-400 white-text line-less-big mb-30" data-aos="zoom-in-down">¡Aplicamos la tecnología de<br>manera inteligente!</p>
                        <a class="btn waves-effect waves-light intelix" href="{{ route('loadContent', 'contacto') }}" data-aos="zoom-in">Pregúntanos ¿Cómo?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section white">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 center-align">
                    <p class="grey-text-dark fw-500 more-big mb-0" data-aos="zoom-out-right">TECNOLOGÍA DE INFORMACIÓN</h1>
                    <p class="grey-text-dark fw-200 more-big mt-10" data-aos="zoom-out-left">transformada en soluciones integrales</p>
                </div>
            </div>
        </div>
    </div>
    {{-- ////////////// SECCION 1-A //////////// --}}
    <div class="section section-service-1-a grey-background-soften">
        <div class="container row row-full-with">
            <div class="col s12 m12 l6 content-left">
                <div class="row">
                    <div class="col s6 m8 l6">
                        <p class="intelix-text fw-600 more-big left-align">Consultoría</p>
                    </div>
                    <div class="col s6 m4 l6 right-align">
                        <img class="icons-rotate" src="{{ asset('images/Servicios_0006_Icono_consultoria.png') }}" />
                    </div>
                </div>
                <p class="grey-text-dark fw-300 less-big line-less-big justify-align">En Intelix ofrecemos servicio de Consultoría en todo lo relacionado con Tecnología de Informacion, orientadas a mejorar la funcionalidad, productividad e integracion de los procesos de su empresa</p>
                <p class="grey-text-dark fw-300 less-big line-less-big justify-align">Contamos con profesionales calificados y certificados, con la capacidad de realizar un reconocimiento de las necesidades de su organización, a través del análisis, evaluación y diagnóstico de sus problemas tecnológicos</p>
            </div>
            <div class="col s12 m12 l6 background-section-service-1"></div>
        </div>
    </div>
    {{-- ////////////// SECCION 1-B //////////// --}}
    <div class="section section-service-1-b grey-background-soften">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <p class="grey-text-dark fw-300 less-big line-less-big justify-align">Brindamos a su organización la consultoría tecnológica para el análisis y diseño en:</p>
                </div>
            </div>
            <div class="row hide-on-med-and-down pl-20 bt-50">
                <div class="col s12 m6 l4">
                    <ul>
                        <li>Gerencia de Proyectos</li>
                        <li>Procesos de Negocio</li>
                        <li>Infraestructura</li>
                    </ul>
                </div>
                <div class="col s12 m6 l4">
                    <ul>
                        <li>Seguridad Informática</li>
                        <li>Auditoría de Sistemas</li>
                        <li>Auditoría de Proyectos</li>
                    </ul>
                </div>
                <div class="col s12 m6 l4">
                    <ul>
                        <li>Evaluación de Soluciones del mercado</li>
                        <li>Arquitectura de Tecnología</li>
                    </ul>
                </div>
            </div>
            <div class="row show-on-small hide-on-large-only pl-20 bt-50">
                <div class="col s12 m6">
                    <ul>
                        <li>Gerencia de Proyectos</li>
                        <li>Procesos de Negocio</li>
                        <li>Infraestructura</li>
                        <li>Seguridad Informática</li>
                    </ul>
                </div>
                <div class="col s12 m6">
                    <ul>
                        <li>Auditoría de Sistemas</li>
                        <li>Auditoría de Proyectos</li>
                        <li>Evaluación de Soluciones del mercado</li>
                        <li>Arquitectura de Tecnología</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="white">
        {{-- ////////////// SECCION 2-B //////////// --}}
        <div class="section section-service-2-a white">
            <div class="container row row-full-with">
                <div class="col s12 m12 l5 background-section-service-2"></div>
                <div class="col s12 m12 l7 content-right">
                    <div class="row">
                        <div class="col s6 m6 l6">
                            <p class="intelix-text fw-600 big left-align">Soluciones Integrales</p>
                        </div>
                        <div class="col s6 m6 l6 right-align">
                            <img class="icons-rotate" src="{{ asset('images/Servicios_0008_Icono_SI.png') }}" />
                        </div>
                    </div>
                    <p class="grey-text-dark fw-300 less-big line-less-big justify-align">Nuestros profesionales en estas áreas están certificados en metodologías de punta para el diseño, desarrollo e implementación de soluciones integrales, orientadas a maximizar la eficiencia e integración de los procesos de su organización.</p>
                    <p class="grey-text-dark fw-300 less-big line-less-big justify-align">Con un reconocimiento previo de su negocio que incluye el análisis, evaluación de procesos existentes y diagnóstico de la problemática actual, en Intelix le ofrecemos la solución tecnológica mas acertada y adaptada a sus necesidades y expectativas.</p>
                </div>
            </div>
        </div>
        {{-- ////////////// SECCION 2-B //////////// --}}
        <div class="section section-service-2-b white">
            <div class="container">
                <div class="row hide-on-med-and-down">
                    <div class="col s12 m4 l4">
                        <div class="paragrah-intelix">
                            <p>En Intelix ponemos a su alcance, la experiencia de personal altamente capacitado en la búsqueda de soluciones de diseño, desarrollo e implementación para</p>
                        </div>
                    </div>
                    <div class="col s12 m4 l4">
                        <ul>
                            <li>Diseño, instalación y optimización de infraestructura de:</li>
                            <ul class="browser-default">
                                <li>Redes</li>
                                <li>Servidores</li>
                                <li>Centro de Datos</li>
                                <li>Microinformática</li>
                                <li>Impresión</li>
                                <li>Telefonía</li>
                                <li>Video Conferencia</li>
                                <li>Telecomunicaciones</li>
                            </ul>
                        </ul>
                    </div>
                    <div class="col s12 m4 l4">
                        <ul>
                            <li>Desarrollo de aplicaciones</li>
                            <li>Integración de soluciones de terceros</li>
                            <li>Desarrollo de aplicaciones web y móviles</li>
                            <li>Diseño, instalación y optimización de otros servicios:</li>
                            <ul class="browser-default">
                                <li>Correo y colaboración</li>
                                <li>Acceso e identidad</li>
                                <li>Seguridad Informática</li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="row show-on-small hide-on-large-only">
                    <div class="col s12 m6">
                        <div class="paragrah-intelix">
                            <p>En Intelix ponemos a su alcance, la experiencia de personal altamente capacitado en la búsqueda de soluciones de diseño, desarrollo e implementación para:</p>
                        </div>
                    </div>
                    <div class="col s12 m6 content-right">
                        <ul>
                            <li>Diseño, instalación y optimización de infraestructura de:</li>
                            <ul class="browser-default">
                                <li>Redes</li>
                                <li>Servidores</li>
                                <li>Centro de Datos</li>
                                <li>Microinformática</li>
                                <li>Impresión</li>
                                <li>Telefonía</li>
                                <li>Video Conferencia</li>
                                <li>Telecomunicaciones</li>
                            </ul>
                            <li>Desarrollo de aplicaciones</li>
                            <li>Integración de soluciones de terceros</li>
                            <li>Desarrollo de aplicaciones web y móviles</li>
                            <li>Diseño, instalación y optimización de otros servicios:</li>
                            <ul class="browser-default">
                                <li>Correo y colaboración</li>
                                <li>Acceso e identidad</li>
                                <li>Seguridad Informática</li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ////////////// SECCION 3-A //////////// --}}
    <div class="section section-service-3-a grey-background-soften">
        <div class="container row row-full-with">
            <div class="col s12 m12 l7 content-left mb-50">
                <div class="row">
                    <div class="col s6 m8 l6">
                        <p class="intelix-text fw-600 more-big left-align mt-10 mb-10">Operación y Soporte</p>
                    </div>
                    <div class="col s6 m4 l6 right-align">
                        <img class="icons-rotate" src="{{ asset('images/Servicios_0012_Icono_operaciones.png') }}" />
                    </div>
                </div>
                <p class="grey-text-dark fw-300 less-big line-less-big justify-align">Porque siempre estamos comprometidos con nuestros clientes, ponemos a su disposición los servicios de administración, soporte y mantenimiento para desarrollos propios o de terceros, con la finalidad de garantizar la continuidad operativa de su organización</p>
                <div class="pl-20 mb-10 mt-50">
                    <ul>
                        <li>Soporte en sitio</li>
                        <li>Soporte remoto</li>
                        <li>Mantenimiento de aplicaciones</li>
                        <li>Administración, operación y soporte de infraestructura</li>
                        <li>Administración, operación y soporte de otros servicios</li>
                    </ul>
                </div>
            </div>
            <div class="col s12 m12 l5 background-section-service-3"></div>
        </div>
    </div>
    {{-- ////////////// SECCION 4-A //////////// --}}
    <div class="white">
        <div class="section section-service-4-a white">
            <div class="container row row-full-with">
                <div class="col s12 m12 l6 background-section-service-4 show-on-large hide-on-med-and-down"></div>
                <div class="col s12 m12 l6 content-right mb-50">
                    <div class="row">
                        <div class="col s6 m6 l6">
                            <p class="intelix-text fw-600 big left-align mt-10 mb-10">Formación</p>
                        </div>
                        <div class="col s6 m6 l6 right-align">
                            <img class="icons-rotate" src="{{ asset('images/Servicios_0010_Icono_formacion.png') }}" />
                        </div>
                    </div>
                    <p class="grey-text-dark fw-300 less-big line-less-big justify-align">Ofrecemos cursos de capacitación al personal de su organización, en lo que se refiere a la utilización y máximo aprovechamiento de las bondades de los sistemas de tecnología de información implementados.</p>
                    <p class="grey-text-dark fw-300 less-big line-less-big justify-align">Un personal capacitado, no solo desarrolla habilidades y destrezas en el manejo de las herramientas, también contribuye a la correcta operatividad de los sistemas y a la productividad diaria de su organización.</p>
                </div>
                <div class="col s12 m12 l6 background-section-service-4 show-on-small hide-on-large-only"></div>
            </div>
        </div>
    </div>
    {{-- ////////////// SECCION 5-A //////////// --}}
    <div class="white">
        <div class="section section-service-5-a grey-background-soften">
            <div class="container row row-full-with">
                <div class="col s12 m12 l6 content-left mb-50">
                    <div class="row">
                        <div class="col s6 m6 l6">
                            <p class="intelix-text fw-600 big left-align mt-10 mb-10">Procura</p>
                        </div>
                        <div class="col s6 m6 l6 right-align">
                            <img class="icons-rotate" src="{{ asset('images/Servicios_0014_Icono_procura.png') }}" />
                        </div>
                    </div>
                    <p class="grey-text-dark fw-300 less-big line-less-big justify-align">En Intelix ofrecemos nuestros servicios de acompañamiento en el proceso de procura de productos y servicios de tecnología de la información para garantizar la eficiencia, eficacia y ahorros en la organización.</p>
                    <p class="grey-text-dark fw-300 less-big line-less-big justify-align">Nuestros especialistas se encargan de analizar los gastos actuales de la empresa, diseñan e implementan una estrategia de procura eficiente que disminuirá las ineficiencias y reducirá los costos. Nuestros objetivos se enfocan en determinar las capacidades principales del negocio, así como identificar nichos de oportunidad en las operaciones y relaciones con los proveedores, de forma que se puedan establecer objetivos a corto y largo plazo para el proyecto.</p>
                    <p class="grey-text-dark fw-300 less-big line-less-big justify-align">Servicios de búsqueda y selección de proveedores, análisis de oferta, negociación financiera, y selección de productos o servicios con actividades claves en el éxito de toda empresa.</p>
                </div>
                <div class="col s12 m12 l6 background-section-service-5">
                    <div class="content-bottom hide-on-med-and-down">
                        <ul>
                            <li>Evaluación de necesidades</li>
                            <li>Asesoría y acompañamiento en la adquisición de productos y servicios TI</li>
                            <li>Suministro de productos y servicios TI</li>
                            <li>Alquiler de productos y servicios TI</li>
                            <li>Manejo de Inventarios</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container row row-full-with show-on-small hide-on-large-only">
                <div class="col s12 content-bottom">
                    <ul>
                        <li>Evaluación de necesidades</li>
                        <li>Asesoría y acompañamiento en la adquisición de productos y servicios TI</li>
                        <li>Suministro de productos y servicios TI</li>
                        <li>Alquiler de productos y servicios TI</li>
                        <li>Manejo de Inventarios</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('customScripts')
<script type="text/javascript">
    
    AOS.init();     //Animations init

    $(document).ready(function(){
        
    });
    
</script>
@endsection


