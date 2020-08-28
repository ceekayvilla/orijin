@if(Session::has('single-error'))
    <div class="alert alert-danger" role="alert">
        {!! session('single-error') !!}
    </div>
@endif