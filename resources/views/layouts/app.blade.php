<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
	{!! Html::style('garage-template/source/bootstrap-3.3.6-dist/css/bootstrap.css') !!}
	{!! Html::style('garage-template/source/font-awesome-4.5.0/css/font-awesome.css') !!}
	{!! Html::style('garage-template/style/slider.css') !!}
	{!! Html::style('garage-template/style/mystyle.css') !!}




    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="app">
        @include('partials.nav')
        @include('partials.header')
        
        @include('partials.carousel')

        @yield('content')
        
        
        
        
        @include('partials.footer')
    </div>

    <!-- Scripts -->
    
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

    {!! Html::script('garage-template/source/bootstrap-3.3.6-dist/js/jquery.js') !!}
    {!! Html::script('garage-template/source/js/isotope.js') !!}
    {!! Html::script('garage-template/source/js/myscript.js') !!}
    {!! Html::script('garage-template/source/bootstrap-3.3.6-dist/js/jquery.1.11.js') !!}
    {!! Html::script('garage-template/source/bootstrap-3.3.6-dist/js/bootstrap.js') !!}
</body>
</html>
