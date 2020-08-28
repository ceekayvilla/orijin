<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Orijin - @yield('page_title')</title>
        @include('themes.orijin.template-parts.css')
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{secure_asset('themes/orijin/images/icons/favicon.ico')}}" rel="shortcut icon" type="image/x-icon">
    </head>

    <body class="main-flower-bg">
        @include('themes.orijin.template-parts.header')
        @yield('content')
        @include('themes.orijin.template-parts.footer')
        @include('themes.orijin.template-parts.modal')
        @include('themes.orijin.template-parts.js')
    </body>
</html>