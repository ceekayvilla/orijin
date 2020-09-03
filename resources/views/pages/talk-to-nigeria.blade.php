@extends('themes.orijin.template-parts.content')
@section('page_title')
 Talk To Nigeria
@endsection

@section('appcontent')
    <div class="col-md-12 lets-sign">
         <div class="talk">
            <img src="{{ asset('resources/css/images/talk-to-nigeria.png')}}" />
        </div>
        <p>Talk your Orijinal Talk…Upload your video and tell Nigeria how you feel</p>

        @if(auth()->guest())  
            <button class="btn btn-primary btn-block" type="button"><a href="{{route('login')}}">Sign In</a></button>
             <span><h1>or</h1> </span>
             <button class="btn btn-primary btn-block" type="button"><a href="{{route('register')}}">Sign Up</a></button>

        @else
        @if (count($errors) > 0)
             @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
            {{ Form::open(array('url' => 'upload-media', 'files' => true)) }}
            <div class=" file btn btn-secondary btn-block">
                Select Video
                <input type="file" name="user_media" />

            </div>
            <span>allowed extensions: (mp4, mov, 3gp, ogx, oga, ogv, ogg, webm, wmv)</span>

            <button class="btn btn-primary btn-block" type="submit">Upload  your Video</button>

        {{ Form::close() }}
        @endif
    </div>
@endsection
