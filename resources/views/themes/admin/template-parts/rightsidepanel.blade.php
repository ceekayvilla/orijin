@extends('layouts.admin.app')
@section('content')
<div id="right-panel" class="right-panel">
    @include('themes.admin.template-parts.header')
    @include('themes.admin.template-parts.breadcrumbs')
    @include('themes.admin.template-parts.reusable-ui.alerts.success')
    @include('themes.admin.template-parts.reusable-ui.alerts.error')
    @include('themes.admin.template-parts.reusable-ui.alerts.info')
    @include('themes.admin.template-parts.reusable-ui.alerts.single-error')
    @yield('subcontent')
    <div class="clearfix"></div>
    @include('themes.admin.template-parts.footer')
</div>
@endsection