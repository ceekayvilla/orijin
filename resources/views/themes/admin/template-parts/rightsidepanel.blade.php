@extends('layouts.admin.app')
@section('content')
<div id="right-panel" class="right-panel">
    @include('themes.admin.template-parts.header')
    @include('themes.admin.template-parts.breadcrumbs')
    @yield('subcontent')
    <div class="clearfix"></div>
    @include('themes.admin.template-parts.footer')
</div>
@endsection