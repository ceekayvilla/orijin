@extends('themes.orijin.template-parts.content')

@section('page_title')
    Our Roots
@endsection

@section('appcontent')
    <div class="row">
      <div class="col-md-12 lets-sign">
        <h1 class="heading-wel animated fadeInDown">Our Roots</h1>
      
      </div>
    </div>
    <div class="row">
        <div class="col-md-12 header-tabs">

            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-products-tab" data-toggle="tab" href="#nav-products" role="tab" aria-controls="nav-products" aria-selected="true">Products</a>
                    <a class="nav-link" id="nav-recipes-tab" data-toggle="tab" href="#nav-recipes" role="tab" aria-controls="nav-recipes" aria-selected="false">Recipes</a>
                </div>
            </nav>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-products" role="tabpanel" aria-labelledby="nav-products-tab">
                    <div class="row fans-sec">

                        @forEach($brands as $brand)
                            <div class="col-md-4 aos-init aos-animate" data-aos="fade-up">
                                <div class="title-post">
                                    <h3 style="text-transform: uppercase;">{{$brand->name}}</h3>
                                </div>
                                <div class="fans-image">
                                    <img src="{{Storage::url($brand->path)}}">
                                </div>
                                <div class="fans-content">
                                    {!! $brand->description !!}
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-recipes" role="tabpanel" aria-labelledby="nav-recipes-tab"> 
                    <div class="row fans-sec">
                        @forEach($recipes as $recipe)
                            <div class="col-md-4 aos-init aos-animate" data-aos="fade-up">
                                <div class="title-post">
                                    <h4>
                                        {{$recipe->name}}
                                    </h4>
                                    <div class="fans-content">
                                        {!! $recipe->description !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
@endsection
