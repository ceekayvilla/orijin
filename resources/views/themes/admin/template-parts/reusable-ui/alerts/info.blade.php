@if(Session::has('info'))
<div class="alert alert-primary" role="alert">
    {!! session('info') !!}
</div>
@endif