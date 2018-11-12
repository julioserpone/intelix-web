@extends('layouts.welcome')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
    <div class="parallax-container parallax-logo-home">
        <div id="particles-js" class="particles-js"></div>
        <div class="parallax">
            <!--<img src="{{ asset('images/Home_0006_BG.png') }}"></div>-->
        </div>
    </div>
    
    <div id="logo-animated" class="logo-home-overlay" 
        data-aos="fade-down"
        data-aos-easing="linear"
        data-aos-duration="1600">
        <img id="logo-intelix-big" class="animated flip" src="{{ asset('images/Home_0005_Isotipo_blanco_BIG.png') }}" />
    </div>
    
    <div id="services" class="section grey lighten-2 section-overlay-home">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l6">
                    <div class="card-panel intelix z-depth-1 card-info-home" 
                        data-aos="fade-right"
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine"
                        data-aos-duration="1000">
                        <p class="flow-text center-align">Somos una empresa dedicada a los servicios de consultoria, diseño, desarrollo e implementación de soluciones en el área de <br><br><span class="text-awesome">TECNOLOGÍA DE LA INFORMACIÓN</span></p>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div>
                        <img class="image-align-right" src="{{ asset('images/Home_0012_ipad-tablet-technology-touch.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section grey darken-1">
        <div class="row container">
            <h5 class="center-align padding-bottom">Ofrecemos productos y servicios en las areas de</h5>
            <div class="row">
                <div class="col s6 l2 offset-l1 center-align">
                    <img class="icons-services-rotate" src="{{ asset('images/Home_0013_Icono_consultoria.png') }}" />
                    <p class="text-capitalize">Consultoría</p>
                    <p class="thin">Análisis, evaluación y diagnóstico de sus problemas tecnológicos</p>
                </div>
                <div class="col s6 l2 center-align">
                    <img class="icons-services-rotate" src="{{ asset('images/Home_0014_Icono_SI.png') }}" />
                    <p class="text-capitalize">Soluciones Integrales</p>
                    <p class="thin">Diseño, instalación y optimización de infraestructuras</p>
                </div>
                <div class="col s6 l2 center-align">
                    <img class="icons-services-rotate" src="{{ asset('images/Home_0015_Icono_operaciones.png') }}" />
                    <p class="text-capitalize">Operación y Soporte</p>
                    <p class="thin">Servicios de administración, soporte y mantenimiento</p>
                </div>
                <div class="col s6 l2 center-align">
                    <img class="icons-services-rotate" src="{{ asset('images/Home_0016_Icono_formacion.png') }}" />
                    <p class="text-capitalize">Formación</p>
                    <p class="thin">Cursos de Capacitación al personal de su organización</p>
                </div>
                <div class="col s6 l2 center-align">
                    <img class="icons-services-rotate" src="{{ asset('images/Home_0017_Icono_procura.png') }}" />
                    <p class="text-capitalize">Procura</p>
                    <p class="thin">Búsqueda y selección de productos y servicios de IT</p>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-container parallax-clientes">
        <div class="parallax">
            <img src="{{ asset('images/Home_0030_BG_Clientes.png') }}">
        </div>
        <div class="row container">
            <div class="col s12 m6">
                <p class="intelix-text big shadow-black">Algunos de nuestros clientes, de diversos sectores que</p>
                <h3><span class="less-big thin">CONFIAN EN NOSOTROS</span></h3>
                <ul class="hide-on-small-only less-small">
                    <li>Moda</li>
                    <li>Logistica</li>
                    <li>Automotriz</li>
                    <li>Mayoreo</li>
                    <li>Ferretero</li>
                    <li>Finanzas</li>
                    <li>Servicios</li>
                    <li>Manufactura</li>
                </ul>
            </div>
            <div class="col s12 m6">
                <div class="container">
                    <div class="row">
                        <div class="col s6 m6">
                            <img class="responsive-img" src="{{ asset('images/Home_0028_Layer-2.png') }}" 
                                data-aos="fade-right"
                                data-aos-easing="ease-in-sine"
                                data-aos-duration="300">
                        </div>
                        <div class="col s6 m6">
                            <img class="responsive-img" src="{{ asset('images/Home_0023_Layer-8.png') }}"
                                data-aos="fade-left"
                                data-aos-easing="ease-in-sine"
                                data-aos-duration="300">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6 m6">
                            <img class="responsive-img" src="{{ asset('images/Home_0021_Layer-10.png') }}"
                                data-aos="fade-right"
                                data-aos-easing="ease-in-sine"
                                data-aos-duration="500">
                        </div>
                        <div class="col s6 m6">
                            <img class="responsive-img" src="{{ asset('images/Home_0020_Layer-4.png') }}"
                                data-aos="fade-left"
                                data-aos-easing="ease-in-sine"
                                data-aos-duration="500">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6 m6">
                            <img class="responsive-img" src="{{ asset('images/Home_0025_Layer-6.png') }}"
                                data-aos="fade-right"
                                data-aos-easing="ease-in-sine"
                                data-aos-duration="700">
                        </div>
                        <div class="col s6 m6">
                            <img class="responsive-img" src="{{ asset('images/Home_0029_Layer-1.png') }}"
                                data-aos="fade-left"
                                data-aos-easing="ease-in-sine"
                                data-aos-duration="700">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6 m6">
                            <img class="responsive-img" src="{{ asset('images/Home_0024_Layer-7.png') }}"
                                data-aos="fade-right"
                                data-aos-easing="ease-in-sine"
                                data-aos-duration="900">
                        </div>
                        <div class="col s6 m6">
                            <img class="responsive-img" src="{{ asset('images/Home_0022_Layer-9.png') }}"
                                data-aos="fade-left"
                                data-aos-easing="ease-in-sine"
                                data-aos-duration="900">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s6 m6">
                            <img class="responsive-img" src="{{ asset('images/Home_0026_Layer-5.png') }}"
                                data-aos="fade-right"
                                data-aos-easing="ease-in-sine"
                                data-aos-duration="1100">
                        </div>
                        <div class="col s6 m6">
                            <img class="responsive-img" src="{{ asset('images/Home_0027_Layer-3.png') }}"
                                data-aos="fade-left"
                                data-aos-easing="ease-in-sine"
                                data-aos-duration="1100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section white section-aliados">
        <div class="row container" style="width: 100%">
            <div class="col s12 m8 background-aliados">
                <p class="grey-text extra-big strong">Nuestros</p>
                <h3><span class="less-small grey-text thin shadow-white">ALIADOS COMERCIALES</span></h3>
                <div class="owl-carousel owl-theme">
                    <div class="item"><a href="#"><img src="{{ asset('images/Home_0020_Layer-4.png') }}"></a></div>
                    <div class="item"><a href="#"><img src="{{ asset('images/Home_0027_Layer-3.png') }}"></a></div>
                    <div class="item"><a href="#"><img src="{{ asset('images/Home_0022_Layer-9.png') }}"></a></div>
                    <div class="item"><a href="#"><img src="{{ asset('images/Home_0024_Layer-7.png') }}"></a></div>
                    <div class="item"><a href="#"><img src="{{ asset('images/Home_0026_Layer-5.png') }}"></a></div>
                </div>
            </div>
            <div class="col s12 m4 background-work-us">
                <p class="big string">Trabaja con nosotros</p>
                <a class="waves-effect waves-light btn intelix">APLICA AQUI</a>
            </div>
        </div>
    </div>
    <footer class="page-footer intelix" style="margin-top: -20px;">
        <div class="container">
            <nav class="transparent z-depth-0">
                <div class="nav-wrapper">
                            <a href="http://intelix-web.app/" class="brand-logo">
                                <img src="{{ asset('images/Home_0037_Isotipo_blanco.png') }}">
                            </a>
                            <ul class="right hide-on-med-and-down white-text">
                                <li><a class="waves-effect waves-light white-text" href="#">Nosotros</a></li>
                                <li><a class="waves-effect waves-light white-text" href="#">Servicios</a></li>
                                <li><a class="waves-effect waves-light white-text" href="#">Empleos</a></li>
                                <li><a class="waves-effect waves-light white-text" href="#">Contactanos</a></li>
                                <li><a class="waves-effect waves-light white-text" href="#">Politicas</a></li>
                                <li><a href="#"><img id="nav-menu-instagram" src="{{ asset('images/Home_0001_Instagram_blanco.png') }}"></a></li>
                                <li><a href="#"><img id="nav-menu-twitter" src="{{ asset('images/Home_0002_Twitter_blanco.png') }}"></a></li>
                                <li><a href="#"><img id="nav-menu-facebook" src="{{ asset('images/Home_0003_Facebook_blanco.png') }}"></a></li>
                                <li><a href="#"><img id="nav-menu-youtube" src="{{ asset('images/Home_0004_YouTube_blanco.png') }}"></a></li>
                            </ul>
                </div>
            </nav>
        </div>
        <!--<div class="container">
            <div class="row">
                <div class="col m2">
                    <img class="animated flip" src="{{ asset('images/Home_0037_Isotipo_blanco.png') }}">
                </div>
                <div class="col m7 hide-on-med-and-down">
                </div>
                <div class="col m3 right-align">
                        Siguenos: &nbsp;
                        <a href="#"><img id="nav-menu-instagram" src="{{ asset('images/Home_0001_Instagram_blanco.png') }}"></a>
                        <a href="#"><img id="nav-menu-twitter" src="{{ asset('images/Home_0002_Twitter_blanco.png') }}"></a>
                        <a href="#"><img id="nav-menu-facebook" src="{{ asset('images/Home_0003_Facebook_blanco.png') }}"></a>
                        <a href="#"><img id="nav-menu-youtube" src="{{ asset('images/Home_0004_YouTube_blanco.png') }}"></a>
                </div>
            </div>
        </div>-->
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col m6">
                        © Intelix, C.A - 2017 All rights reserved
                    </div>
                    <div class="col m6">
                        <a class="grey-text text-lighten-4 right" href="#!">Design by Alter-Nos Group</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!-- WITH VIDEO BACKGROUND
    <section class="video-container">
        <video src="https://static.videezy.com/system/resources/previews/000/000/211/original/City%20street%20time%20lapse%20[SaveYouTube.com].mp4" autoplay loop playsinline></video>
        <div class="callout">
            <h1>A background video</h1>
            <div>
            <p>Object-Fit is the CSS Background-Size: Cover for Inline Images &amp; Videos.
                <br>It's not Microsoft friendly.</p>
            <a class="waves-effect waves-light btn-large teal lighten-2" href="#">Source</a>
            </div>
        </div>
        <div class="support">
            <a href="#">Browser Support</a><br>
            <a href="#">Need to support IE &amp; Edge?</a>
        </div>
    </section>

-->
@endsection

@section('customScripts')
<script type="text/javascript">
    /*var options = [
        {
            selector: '#navbar-intelix', offset: 100, callback: function(el) {
                //Materialize.toast("This is our ScrollFire Demo!", 1500 );
                $('#navbar-intelix').addClass('transparent z-depth-0');
                $('#navbar-intelix').removeClass('white z-depth-4 animated fadeIn');
            } 
        },
        {
            selector: '#logo-animated', offset: 1000, callback: function(el) {
                //Materialize.toast("This is our ScrollFire Demo!", 1500 );
                $('#navbar-intelix').removeClass('transparent z-depth-0');
                $('#navbar-intelix').addClass('white z-depth-4 animated fadeIn');
            } 
        }
    ];
    Materialize.scrollFire(options);*/
    AOS.init();

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        var os = $('#logo-animated').offset().top;
        var ht = $('#logo-animated').height();

        //console.log(scroll + 'offset: ' + os);
        if(scroll > os) {
            $('#navbar-intelix').removeClass('transparent z-depth-0 fadeOut');
            $('#navbar-intelix').addClass('white z-depth-4 animated fadeIn');
            $('.nav-menu').addClass('black-text').removeClass('white-text');
            $('#nav-menu-logo').attr("src","{{ asset('images/Home_0007_logo_color.png') }}");
            $('#nav-menu-instagram').attr("src","{{ asset('images/Home_0008_Instagram_color.png') }}");
            $('#nav-menu-twitter').attr("src","{{ asset('images/Home_0009_Twitter_color.png') }}");
            $('#nav-menu-facebook').attr("src","{{ asset('images/Home_0010_Facebook_color.png') }}");
            $('#nav-menu-youtube').attr("src","{{ asset('images/Home_0011_YouTube_color.png') }}");
            $('#logo-intelix-big').removeClass('animated flip').addClass('animated fadeOutUp');
        } 

        if (scroll < os) {
            $('.nav-menu').addClass('white-text').removeClass('black-text');
            $('#navbar-intelix').addClass('transparent z-depth-0 fadeOut');
            $('#navbar-intelix').removeClass('white z-depth-4 animated fadeIn');
            $('#nav-menu-logo').attr("src","{{ asset('images/Home_0000_logo_blanco.png') }}");
            $('#nav-menu-instagram').attr("src","{{ asset('images/Home_0001_Instagram_blanco.png') }}");
            $('#nav-menu-twitter').attr("src","{{ asset('images/Home_0002_Twitter_blanco.png') }}");
            $('#nav-menu-facebook').attr("src","{{ asset('images/Home_0003_Facebook_blanco.png') }}");
            $('#nav-menu-youtube').attr("src","{{ asset('images/Home_0004_YouTube_blanco.png') }}");
            $('#logo-intelix-big').removeClass('animated fadeOutUp').addClass('animated fadeInDown');
        }

        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            autoplay:true,
            autoplayTimeout:5000,
            responsive:{
                0:{
                    items:2,
                    nav:false
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:5,
                    nav:false
                }
            }
        });
    });
</script>
@endsection


