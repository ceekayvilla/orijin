@extends('themes.admin.template-parts.content')
@section('appcontent')
    @forEach($vendors as $vendor)
            <div class="col-md-4">
                <img src="{{Storage::url($vendor->path)}}" class="card-img-top" alt="{{$vendor->name}}">
                <h4 class="card-title mb-3">{{$vendor->name}}</h4>
            </div>
    @endforeach
@endsection