@extends('themes.admin.template-parts.rightsidepanel')
@section('subcontent')
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            @yield('appcontent')
        </div>
    </div>
</div>
@endsection