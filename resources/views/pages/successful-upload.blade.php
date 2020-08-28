@extends('themes.orijin.template-parts.content')
@section('page_title')
 Successful Upload
@endsection

@section('appcontent')
 <div class="col-md-12 lets-sign">
    <h1 class="heading-wel animated fadeInDown">Upload Successful</h1>
     <div class="cele-message">
        @if (session('upload_status'))
            {{ session('upload_status') }}
        @endif
</p>
     </div>
 </div>
@endsection