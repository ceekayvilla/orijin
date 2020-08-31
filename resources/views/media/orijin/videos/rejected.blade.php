@extends('themes.admin.template-parts.content')
@section('page_title')
    Rejected Videos
@endsection
@section('appcontent')
    @forEach($videos as $video)
        <div class="col-md-4">
            <video controls style="width:100%">
                <source src="{{Storage::url($video->path)}}">
            </video>
            <div class="row">
                <div class="col-md-12">
                    {{ Form::open(array('url' => 'moderate')) }}
                        <input type="hidden" name="media_id" value="{{$video->media_id}}" />
                        <input type="hidden" name="moderation_action" value="approve"> 
                        {{ Form::submit('Approve', array('class' => 'btn btn-success btn-lg btn-block')) }}
                    {{ Form::close() }}
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    @endforeach
@endsection