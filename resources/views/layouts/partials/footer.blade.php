    <footer class="page-footer grey darken-1">
        <div class="container">
            <div class="row valign-wrapper" style="margin-bottom: 0;">
                <div class="col s12 m1 center-align hide-on-med-and-down">
                    <a href="{{ route('home') }}" class="brand-logo">
                        <img class="icons-rotate" src="{{ asset('images/Home_0037_Isotipo_blanco.png') }}">
                    </a>
                </div>
                <div class="col s12 m12 l7">
                    <span class="grey-text fw-200 text-lighten-4 less-small">RIF: {{ $company->identification }} <span style="margin-left: 30px;">©{{ $company->name_legal }} - 2018 All rights reserved</span></span>
                </div>
                <div class="col s12 m12 l4 right-align hide-on-med-and-down">
                    {{-- <a class="grey-text fw-200 text-lighten-4 less-small" href="#!">Políticas de Privacidad</a> --}}
                </div>
            </div>
        </div>
    </footer>