<div class="navbar navbar-home {{$navbar_position_class}}">
  <nav id="navbar-intelix" class="{{$navbar_intelix_class}}">
    <div class="nav-wrapper">
      <div class="row">
        <div class="col s12">
          <a href="#" data-activates="mobile-menu" class="button-collapse show-med-and-down {{ $button_class }} right"><i class="material-icons">menu</i></a>
          <div class="hide-on-med-and-down">
            <a href="{{ route('home') }}" class="brand-logo">
              <img id="nav-menu-logo" src="{{ asset('images/Home_0007_logo_color.png') }}">
            </a>
          </div>
          <div class="show-on-medium-and-down hide-on-med-and-up">
            <a href="{{ route('home') }}" class="brand-logo">
              <img id="nav-menu-logo-white" src="{{ asset('images/Home_0007_logo_color.png') }}">
            </a>
          </div>
          <ul class="right hide-on-med-and-down" id="desktop-menu">
            <li id="home-active"><a class="waves-effect waves-light {{ $button_class }}" href="{{ route('loadContent', '') }}">Home</a></li>
            <li class="{{ ($menu_option == 'nosotros') ? 'active':''}}"><a class="waves-effect waves-light {{ $button_class }}" href="{{ route('loadContent', 'nosotros') }}">Nosotros</a></li>
            <li class="{{ ($menu_option == 'servicios') ? 'active':''}}"><a class="waves-effect waves-light {{ $button_class }}" href="{{ route('loadContent', 'servicios') }}">Servicios</a></li>
            <li class="{{ ($menu_option == 'empleos') ? 'active':''}}"><a class="waves-effect waves-light {{ $button_class }}" href="{{ route('loadContent', 'empleos') }}">Empleos</a></li>
            <li class="{{ ($menu_option == 'contacto') ? 'active':''}}"><a class="waves-effect waves-light {{ $button_class }}" href="{{ route('loadContent', 'contacto') }}">Contáctanos</a></li>
            <li><a class="social-media-padding" href="#"><img id="{{ $button_class }}-instagram" src="{{ asset('images/Home_0008_Instagram_color.png') }}"></a></li>
            <li><a class="social-media-padding" href="#"><img id="{{ $button_class }}-twitter" src="{{ asset('images/Home_0009_Twitter_color.png') }}"></a></li>
            <li><a class="social-media-padding" href="#"><img id="{{ $button_class }}-facebook" src="{{ asset('images/Home_0010_Facebook_color.png') }}"></a></li>
            <li><a class="social-media-padding" href="#"><img id="{{ $button_class }}-youtube" src="{{ asset('images/Home_0011_YouTube_color.png') }}"></a></li>
          </ul>
        </div>
      </div>
      <ul class="side-nav" id="mobile-menu">
        <li>
          <div class="user-view">
          <div class="background">
            <img src="{{ asset('images/Home_0006_BG_MENU.png') }}">
          </div>
          <div>
            <img id="sidenav-logo" class="logo-menu" src="{{ asset('images/Home_0005_Isotipo_blanco_BIG.png') }}"></a>
          </div>
          <div class="social-media-nav">
            <a href="#" class="social-media"><img src="{{ asset('images/instagram.svg') }}"></a>
            <a href="#" class="social-media"><img src="{{ asset('images/twitter-logo.svg') }}"></a>
            <a href="#" class="social-media"><img src="{{ asset('images/facebook-logo.svg') }}"></a>
            <a href="#" class="social-media"><img src="{{ asset('images/youtube-play-button.svg') }}"></a>
          </div>
          </div>
        </li>
        <li class="{{ ($menu_option == 'home') ? 'active':''}}"><a class="waves-effect waves-light" href="{{ route('loadContent', '') }}">Home</a></li>
        <li class="{{ ($menu_option == 'nosotros') ? 'active':''}}"><a class="waves-effect waves-light" href="{{ route('loadContent', 'nosotros') }}">Nosotros</a></li>
        <li class="{{ ($menu_option == 'servicios') ? 'active':''}}"><a class="waves-effect waves-light" href="{{ route('loadContent', 'servicios') }}">Servicios</a></li>
        <li class="{{ ($menu_option == 'empleos') ? 'active':''}}"><a class="waves-effect waves-light" href="{{ route('loadContent', 'empleos') }}">Empleos</a></li>
        <li class="{{ ($menu_option == 'contacto') ? 'active':''}}"><a class="waves-effect waves-light" href="{{ route('loadContent', 'contacto') }}">Contáctanos</a></li>
      </ul>
    </div>
  </nav>
</div>