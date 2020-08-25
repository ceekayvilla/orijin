@extends('themes.admin.template-parts.content')
@section('appcontent')
<div class="@yield('class')">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">
                @yield('cardheader')
            </strong>
        </div>
        <div class="card-body card-block">
            @yield('form')
        </div>
    </div>
</div>
@endsection