@extends('themes.admin.template-parts.content')
@section('appcontent')
<div class="@yield('class')">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">
                @yield('cardheader')
            </strong>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        @yield('headers')
                    </tr>
                    
                </thead>
                <tbody>
                    @yield('rows')
                </tbody>
                
            </table>
        </div>
    </div>
</div>
@endsection