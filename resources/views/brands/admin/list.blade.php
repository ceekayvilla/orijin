@extends('themes.admin.template-parts.content')
@section('appcontent')
    @forEach($brands as $brand)
            <div class="col-md-4">
                <img src="{{Storage::url($brand->path)}}" class="card-img-top" alt="{{$brand->name}}">
                <h4 class="card-title mb-3">{{$brand->name}}</h4>
                <div class="card-text">{{$brand->description}}</div>
            </div>
    @endforeach
@endsection