@extends('themes.orijin.template-parts.content')
@section('page_title')
 My Uploads
@endsection

@section('appcontent')
    <div class="row">
        <div class="col-md-12 lets-sign">
            <h1 class="heading-wel animated fadeInDown">
                Fan Uploads
            </h1>
            <p class="animated fadeInUp">Talk your Orijinal Talk…Upload or Record your video and tell Nigeria how you feel</p>
            @php
                if(sizeof($videos) == 0):
                    print '<p class="animated fadeInUp">No uploads have been made yet.</p>';
                endif;
            @endphp
        </div>
    </div>

    <div class="row fans-sec">
        <div class="col-md-12">
          <div class="button-wrapper">
            <button class="btn btn-primary btn-block" type="button"><a href="{{route('talk-to-nigeria')}}">Upload  your Video</a></button>
           <button class="btn btn-secondary btn-block" type="button"><a href="#">Record your Video</a></button>
          </div>
        </div>
        @forEach($videos as $video)
            <div class="col-md-4" data-aos="fade-up">
                <div class="title-post">
                    <span class="title-bold"></span>
                    <span class="title-date">{{date_format($video->created_at, 'dS F Y')}}</span>
                </div>
                <div class="fans-image">
                    <video controls style="width:100%">
                        <source src="{{Storage::url($video->path)}}">
                    </video>
                </div>
            </div>
        @endforeach
    </div>
@endsection