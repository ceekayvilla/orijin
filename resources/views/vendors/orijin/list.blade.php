@extends('themes.orijin.template-parts.content')

@section('page_title')
    Buy Online
@endsection

@section('appcontent')
    <div class="row">
        <div class="col-md-12 lets-sign">
          <h1 class="heading-wel animated fadeInDown">Buy Online</h1>
          <p class="animated fadeInUp">Select your Vendor and proceed to buy</p>
       </div>
    </div>
    <div class="row Lifestyle-icons">
        @forEach($vendors as $vendor)
        @php
            $class = "";
            if($vendor->name == "JumiaParty"){
                $class="jumia";
            }else if($vendor->name == "UberEats"){
                $class="uber";
            }  
            else if($vendor->name == "Drinks.ng"){
                $class="drinks";
            } else if ($vendor->name == "Glovo"){
                $class="glovo";
            }else{}

        @endphp
            <div class="col-md-3">
                <div class="{{ $class }}">
                    <div class="ih-item square effect3 bottom_to_top">
                        <a href="{{$vendor->website}}" target="blank">
                            <div class="img">
                                <img src="{{Storage::url($vendor->path)}}" alt="{{$vendor->name}}">
                            </div>
                            <div class="info">
                                <h2>{{$vendor->name}}</h2>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
