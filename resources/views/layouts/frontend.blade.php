<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@section('htmlheader')
    @include('layouts.partials.htmlheader')
@show

<body>
	@include('layouts.partials.navbar')

	@yield('main-content')

	@include('layouts.partials.footer')

	@include('layouts.partials.scripts')

	@section('customScripts')

	@show
</body>
</html>