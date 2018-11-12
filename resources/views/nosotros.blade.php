@extends('layouts.frontend')

@section('htmlheader_title')
    Nosotros
@endsection

@section('main-content')
    <div class="parallax-container">
        <div class="parallax">
            <img src="{{ asset('images/Nosotros_BG.png') }}">
            <div class="container items-centered-to-left">
                <div class="col s12 m12 l6">
                    <div class="text-banners-parallax">
                        <p class="extra-big fw-400 white-text line-less-big" data-aos="zoom-in-down">Nos adaptamos de<br>manera eficiente</p>
                        <p class="less-big fw-400 intelix-text" data-aos="zoom-in">a las necesidades de cada cliente</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section white">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l6">
                    <p class="grey-text-dark fw-400 big">Agregamos valor al cliente, adaptando la tecnología a los objetivos de su organización.</p>
                    <p class="grey-text-dark fw-300 less-big line-less-big justify-align">Potenciados por el conocimiento, experiencia y certificaciones de nuestros expertos, aplicamos metodologías de trabajo que nos permite evaluar y analizar las necesidades de cada cliente desde una visión holística. Nuestras soluciones Intelix son creativas e innovadoras, hacen uso de TI de vanguardia, y están profundamente pensadas y analizadas según las necesidades de cada cliente.</p>
                </div>
                <div class="col s12 m12 l6">
                    <div class="section-nosotros">
                        <div class="hide-on-med-and-down">
                            <div class="logo-intelix-float">
                                <img class="animate fadeInUp image-levitation" src="{{ asset('images/logo_intelix_sin_sombra.png') }}" />
                            </div>
                            <div class="logo-intelix-shadow">
                                <img class="shadow-image-levitation" src="{{ asset('images/logo_intelix_sombra.png') }}" />
                            </div>
                        </div>
                        <p class="grey-text-dark fw-300 less-big line-less-big left-align justify-align">Nos enfocamos en darle el justo valor a cada proceso o área de negocio que interactúan, integrándolos de forma práctica y armónica, y así generar ventajas competitivas para nuestros clientes, ofreciéndoles soluciones inteligentes que sean sostenibles en el tiempo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="section grey lighten-2">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l6">
                    <p class="intelix-text fw-600 big left-align">Certificaciones</p>
                    <p class="grey-text fw-300 thin line-big">Contamos con talentos certificados en el area de Tecnologia de la Informacion y metodologias  de reconocimiento internacional.</p>
                </div>
                <div class="col s12 m12 l6 right-align">
                    <div class="owl-carousel owl-theme">
                        <div class="item"><a href="#"><img class="responsive-img" src="{{ asset('images/Nosotros_0009_Layer-19.png') }}"></a></div>
                        <div class="item"><a href="#"><img class="responsive-img" src="{{ asset('images/Nosotros_0008_Layer-17.png') }}"></a></div>
                        <div class="item"><a href="#"><img class="responsive-img" src="{{ asset('images/Nosotros_0007_Layer-18.png') }}"></a></div>
                        <div class="item"><a href="#"><img class="responsive-img" src="{{ asset('images/Nosotros_0009_Layer-19.png') }}"></a></div>
                        <div class="item"><a href="#"><img class="responsive-img" src="{{ asset('images/Nosotros_0008_Layer-17.png') }}"></a></div>
                        <div class="item"><a href="#"><img class="responsive-img" src="{{ asset('images/Nosotros_0007_Layer-18.png') }}"></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

@endsection

@section('customScripts')
<script type="text/javascript">
    
    AOS.init();     //Animations init

    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:4000,
            autoHeight: false,
            autoHeightClass: 'owl-height',
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
                    items:4,
                    nav:false
                }
            }
        });
    });
    
</script>
@endsection


