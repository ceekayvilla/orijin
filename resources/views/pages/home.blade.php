@extends('layouts.orijin.app')
@section('content')
<div class="view jarallax" data-jarallax-video="https://www.youtube.com/embed/1FSyKj6ukxU">
  <div class="full-bg-img">
    <div class="container flex-center">
      <div class="row">
        <div class="col-md-12 lets-sign animated fadeIn">
          <div class="text-center">
           <h1 class="heading-wel animated fadeInDown">Welcome to ORIJIN!</h1>
           <P class="animated fadeInUp">Click Talk to Nigeria to join the Orijinal Talk OR click lifestyle to join the Original "Geng"</P>
           <div class="button-wrapper-home">
             <button class="btn btn-primary" type="button"><a href="{{route('talk-to-nigeria')}}">Talk To Nigeria</a></button>
             <button class="btn btn-secondary" type="button"><a href="#">Orijinal Lifestyle</a></button>
           </div>
           
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
@endsection