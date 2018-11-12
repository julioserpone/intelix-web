@extends('layouts.welcome')

@section('htmlheader_title')
    Home
@endsection

@section('main-content')
    <!--<div class="parallax-container parallax-logo-home">-->
    <div class="home-container">
        <div id="particles-js" class="particles-js"></div>
        <div class="home-intelix-title">
            <div class="home-intelix-left">
                <img src="{{ asset('images/Home_Inteli.png') }}" />    
            </div>
            <div class="home-intelix-right" id="logo-animated" 
                data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="1600">
                <img id="logo-intelix-big" class="animated flip" src="{{ asset('images/Home_X.png') }}" /> 
            </div>
        </div>
	    {{-- <div id="logo-animated" class="logo-home-overlay" 
	        data-aos="fade-down"
	        data-aos-easing="linear"
	        data-aos-duration="1600">
	        <img id="logo-intelix-big" class="animated flip" src="{{ asset('images/Home_0005_Isotipo_blanco_BIG.png') }}" />
	    </div> --}}
        @include('layouts.partials.navbar')
        
    </div> 

    {{-- <section class="video-container">
        <video src="{{ asset('video/bg_intelix_full.mp4') }}" autoplay loop playsinline></video>
        @include('layouts.partials.navbar')
        <!--<div class="callout">
            <h1>A background video</h1>
            <div>
            <p>Object-Fit is the CSS Background-Size: Cover for Inline Images &amp; Videos.
                <br>It's not Microsoft friendly.</p>
            <a class="waves-effect waves-light btn-large teal lighten-2" href="#">Source</a>
            </div>
        </div> -->
    </section> --}}
    <div id="services" class="section grey lighten-2 section-overlay-home">
        <div class="container">
            <div class="row mb-0">
                <div class="col s12 m12 l6">
                    <div class="card-panel intelix z-depth-1 card-info-home" 
                        data-aos="fade-right"
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine"
                        data-aos-duration="1000">
                        <p class="flow-text center-align mb-0">
                            <span class="less-small line-less-big">{{ $data->print('h01_que_somos_subtitle') }}</span><br><span class="fw-500 big line-less-big">{{ $data->print('h01_que_somos_title') }}</span>
                        </p>
                        <p class="flow-text center-align mt-0">
                            <span class="less-small line-less-big">{{ $data->print('h01_que_somos_paragrah') }}</span>
                        </p>
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
        <div class="container"  style="width: 90%">
            <h5 class="center-align padding-bottom">{{ $data->print('h02_servicios_title') }}</h5>
            <div class="row">
                <div class="col s12 m6 l2 offset-l1">
                    <img class="icons-rotate" src="{{ asset($data->print('h02_servicios_p01_image')) }}" />
                    <p class="fw-600 less-big titles-services">{{ $data->print('h02_servicios_p01_title') }}</p>
                    <p class="fw-200 paragraph-services">{{ $data->print('h02_servicios_p01_description') }}</p>
                </div>
                <div class="col s12 m6 l2">
                    <img class="icons-rotate" src="{{ asset($data->print('h02_servicios_p02_image')) }}" />
                    <p class="fw-600 less-big titles-services">{{ $data->print('h02_servicios_p02_title') }}</p>
                    <p class="fw-200 paragraph-services">{{ $data->print('h02_servicios_p02_description') }}</p>
                </div>
                <div class="col s12 m6 l2">
                    <img class="icons-rotate" src="{{ asset($data->print('h02_servicios_p03_image')) }}" />
                    <p class="fw-600 less-big titles-services">{{ $data->print('h02_servicios_p03_title') }}</p>
                    <p class="fw-200 paragraph-services">{{ $data->print('h02_servicios_p03_description') }}</p>
                </div>
                <div class="col s12 m6 l2">
                    <img class="icons-rotate" src="{{ asset($data->print('h02_servicios_p04_image')) }}" />
                    <p class="fw-600 less-big titles-services">{{ $data->print('h02_servicios_p04_title') }}</p>
                    <p class="fw-200 paragraph-services">{{ $data->print('h02_servicios_p04_description') }}</p>
                </div>
                <div class="col s12 m6 l2">
                    <img class="icons-rotate" src="{{ asset($data->print('h02_servicios_p05_image')) }}" />
                    <p class="fw-600 less-big titles-services">{{ $data->print('h02_servicios_p05_title') }}</p>
                    <p class="fw-200 paragraph-services">{{ $data->print('h02_servicios_p05_description') }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-container parallax-clientes">
        <div class="parallax">
            <img src="{{ asset('images/Home_0030_BG_Clientes-min.png') }}">
        </div>
        <div class="row container">
            <div class="col s12 m6 list-sectors">
                <p class="intelix-text shadow-black">Algunos de nuestros clientes de diversos sectores que</p>
                <h3>CONFIAN EN NOSOTROS</h3>
                <ul class="hide-on-small-only less-small">
                    <li>Moda</li>
                    <li>Logística</li>
                    <li>Automotriz</li>
                    <li>Mayoreo</li>
                    <li>Ferretero</li>
                    <li>Finanzas</li>
                    <li>Servicios</li>
                    <li>Manufactura</li>
                </ul>
            </div>
            {{-- <div class="col s12 m6">
                <div class="bstimeslider">
                    <div id="rightArrow"></div>
                    <div id="viewContainer">
                        <div id="tslshow">
                            <div class="bktibx"> 12:00   </div>
                            <div class="bktibx"> 12:30   </div>
                            <div class="bktibx"> 13:00   </div>
                            <div class="bktibx"> 13:30   </div>
                            <div class="bktibx"> 14:00   </div>
                            <div class="bktibx"> 14:30   </div>
                            <div class="bktibx"> 15:00   </div>
                            <div class="bktibx"> 15:30   </div>
                            <div class="bktibx"> 16:00   </div>
                            <div class="bktibx"> 16:30   </div>
                            <div class="bktibx"> 17:00   </div>
                            <div class="bktibx"> 17:30   </div>
                        </div>
                    </div>
                    <div id="leftArrow"></div>
                </div>
            </div> --}}
            <div class="col s12 m6">
                <div class="row">
                    <div class="col s1 m1 l1">
                        <a id="cursor_left" href="#"><img class="responsive-img w-10" src="{{ asset('images/cursor_left.png') }}"></a>
                    </div>
                    <div id="aliados_1" class="col s10 m10 l10">
                        <div class="container">
                            <div class="row company-list">
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
                    <div id="aliados_2" class="col s10 m10 l10" style="display: none">
                    </div>
                    <div class="col s1 m1 l1">
                        <a id="cursor_right" href="#"><img class="responsive-img w-10" src="{{ asset('images/cursor_right.png') }}"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section white section-aliados">
        <div class="row container background-aliados">
            <div class="col s12 m6 left-align">
                <p class="extra-big grey-text fw-300 line-regular shadow-white">ALIADOS COMERCIALES</p>
            </div>
            <div class="col s12 m6">
                <div class="owl-carousel owl-theme">
                    <div class="item"><a href="#"><img class="responsive-img" src="{{ asset('images/Home_0034_Layer-13.png') }}"></a></div>
                    <div class="item"><a href="#"><img class="responsive-img" src="{{ asset('images/Home_0033_Alter-Nos.png') }}"></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-container parallax-work-us">
        <div class="parallax">
            <img src="{{ asset('images/Home_0036_BG_Trabaja-con-nosotros.jpg') }}">
        </div>
        <div class="container row">
            <div class="col s12 m12 l5 offset-l7 xl4 offset-xl8 section-work-us">
                <p class="fw-200 less-big">{{ $data->print('h03_empleos_description') }}<br><span class="big">{{ $data->print('h03_empleos_subtitle') }}</span></p>
                <a class="waves-effect waves-light btn intelix" href="{{ route('loadContent', 'empleos') }}">APLICA AQUÍ</a>
            </div>
        </div>
    </div>
    {{-- <div class="section white section-aliados">
        <div class="row container aliance-section">
            <div class="col s12 m12 background-aliados">
                <div class="row">
                    <div class="col s6 m6">
                        <span class="extra-big grey-text fw-300 line-regular shadow-white">ALIADOS COMERCIALES</span>
                    </div>
                    <div class="col s6 m6">
                        <div class="owl-carousel owl-theme">
                            <div class="item"><a href="#"><img class="responsive-img" src="{{ asset('images/Home_0034_Layer-13.png') }}"></a></div>
                            <div class="item"><a href="#"><img class="responsive-img" src="{{ asset('images/Home_0033_Alter-Nos.png') }}"></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 background-work-us">
                <p class="fw-200 less-big">{{ $data->print('h03_empleos_description') }}<br><span class="big">{{ $data->print('h03_empleos_subtitle') }}</span></p>
                <a class="waves-effect waves-light btn intelix" href="{{ route('loadContent', 'empleos') }}">APLICA AQUI</a>
            </div>
        </div>
    </div> --}}

@endsection

@section('cssCustoms')
<style type="text/css" media="screen">
.bstimeslider {
    
width:500px;
height:40px;
background:#ccc;
position:relative;    
}

.bktibx {
    
float:left;
margin:0 40px 0 0 ;
font-size:18px;
width:60px;
display:block;
background:#000;
color:#fff;
    
}

#tslshow {
position:absolute;
left:0;
width:1200px;
   
}

#leftArrow {
    
width:40px;
height:40px;
background:#ff0000; 
position:absolute;
left:0px;
}

#rightArrow {
    
width:40px;
height:40px;
background:#ff0000; 
position:absolute;
right:0px;
}

#viewContainer {
width:360px;
height:100%;
background:#00ff00;
position:absolute;
left:50%;
margin-left:-180px;
overflow:hidden; 
}    
</style>
@endsection


@section('customScripts')
<script type="text/javascript">

    //scroll customers 
    var view = $("#tslshow");
    var move = "100px";
    var sliderLimit = -750

    $("#rightArrow").click(function(){
        
        var currentPosition = parseInt(view.css("left"));
        if (currentPosition >= sliderLimit) view.stop(false,true).animate({left:"-="+move},{ duration: 400})

    });

    $("#leftArrow").click(function(){

        var currentPosition = parseInt(view.css("left"));
        if (currentPosition < 0) view.stop(false,true).animate({left:"+="+move},{ duration: 400})

    });
    
    AOS.init();     //Animations init (aos)

    $(document).ready(function(){

        //Primera carga de la vista. Esto luego interactua dinamicamente en funcion del scroll
        $('#nav-menu-logo').attr("src","{{ asset('images/descriptor_intelix.png') }}");
        $('#nav-menu-logo-white').attr("src","{{ asset('images/Home_0000_logo_blanco.png') }}");
        $('#nav-menu-instagram').attr("src","{{ asset('images/Home_0001_Instagram_blanco.png') }}");
        $('#nav-menu-twitter').attr("src","{{ asset('images/Home_0002_Twitter_blanco.png') }}");
        $('#nav-menu-facebook').attr("src","{{ asset('images/Home_0003_Facebook_blanco.png') }}");
        $('#nav-menu-youtube').attr("src","{{ asset('images/Home_0004_YouTube_blanco.png') }}");

    	//Load particulesJs Effect
		particlesJS.load('particles-js', 'js/particlesjs-config.json', function() {
  			//console.log('callback - particles.js config loaded');
		});
	

        $(window).scroll(function() {
            
            var navHeight = $( window ).height() - 70;
            
            if ($(window).scrollTop() > navHeight) {
                $('#nav-menu-logo').attr("src","{{ asset('images/Home_0007_logo_color.png') }}");
                $('#nav-menu-logo-white').attr("src","{{ asset('images/Home_0007_logo_color.png') }}");
                $('#nav-menu-instagram').attr("src","{{ asset('images/Home_0008_Instagram_color.png') }}");
                $('#nav-menu-twitter').attr("src","{{ asset('images/Home_0009_Twitter_color.png') }}");
                $('#nav-menu-facebook').attr("src","{{ asset('images/Home_0010_Facebook_color.png') }}");
                $('#nav-menu-youtube').attr("src","{{ asset('images/Home_0011_YouTube_color.png') }}");
                $('.navbar-home').addClass('fixed-navbar-home').removeClass('navbar-home-bottom');
                $('#navbar-intelix').removeClass('transparent z-depth-0 fadeOut');
                $('#navbar-intelix').addClass('white z-depth-4 animated fadeIn');
                $('.nav-menu').addClass('grey-text').removeClass('white-text');
                $('#home-active').addClass('active');
            } else {
                $('#nav-menu-logo').attr("src","{{ asset('images/descriptor_intelix.png') }}");
                $('#nav-menu-logo-white').attr("src","{{ asset('images/Home_0000_logo_blanco.png') }}");
                $('#nav-menu-instagram').attr("src","{{ asset('images/Home_0001_Instagram_blanco.png') }}");
                $('#nav-menu-twitter').attr("src","{{ asset('images/Home_0002_Twitter_blanco.png') }}");
                $('#nav-menu-facebook').attr("src","{{ asset('images/Home_0003_Facebook_blanco.png') }}");
                $('#nav-menu-youtube').attr("src","{{ asset('images/Home_0004_YouTube_blanco.png') }}");
                $('.navbar-home').removeClass('fixed-navbar-home').addClass('navbar-home-bottom');
                $('.nav-menu').addClass('white-text').removeClass('grey-text');
                $('#navbar-intelix').addClass('transparent z-depth-0 fadeOut');
                $('#navbar-intelix').removeClass('white z-depth-4 animated fadeIn');
                $('#home-active').removeClass('active');
            }

            var scroll = $(window).scrollTop();
        	var os = $('#logo-animated').offset().top;
        	var ht = $('#logo-animated').height();

        	if(scroll > os) {
                $('#logo-intelix-big').removeClass('animated flip image-levitation').addClass('animated fadeOutUp');
        	} else
        	{
                $('#logo-intelix-big').removeClass('animated flip fadeOutUp').addClass('animated fadeIn image-levitation');
        	}
        });
        
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            autoplay:false,
            autoplayTimeout:4000,
            autoHeight: false,
            autoHeightClass: 'owl-height',
            responsive:{
                0:{
                    items:2,
                    nav:false
                },
                600:{
                    items:2,
                    nav:false
                },
                1000:{
                    items:2,
                    nav:false
                }
            }
        });
    });
    
</script>
@endsection


