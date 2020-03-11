@extends('masterPage.layout')
 @section('content')

     <section class="sec1-twingservice">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6 col-md-6">
                     <div class="content">
                         <h1>@lang('lang.furniture_moveing')</h1>
                         <p>@lang('lang.ds_furniture_moveing')</p>

                         <a class="btn" href="{{url('become_captain')}}">
                            @lang('lang.join_link')
                             <img src="{{asset('img/icons/next.png')}}" alt="">
                         </a>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-6 mx-auto">
                     <img class="img-fluid img-l" src="{{asset('img/arts/furniture_moving_light.png')}}" alt="">
                 </div>
             </div>
         </div>
     </section>
     <section class="sec2-towing text-center">
         <div class="container">
             <div class="">
                 <div class="row">
                     <div class="col-md-4 mx-auto">
                         <div class="box">
                             <img class="img-fluid" src="{{asset('img/arts/furniture_small_pickup.png')}}" alt="">
                             <h3>@lang('lang.small_pickup')</h3>
                             <p>@lang('lang.ds_small_pickup')</p>
                         </div>
                     </div>
                     <div class="col-md-4 mx-auto">
                         <div class="box">
                             <img src="{{asset('img/arts/furniture_large_pickup.png')}}" alt="">
                             <h3>@lang('lang.large_pickup')</h3>
                             <p>@lang('lang.ds_large_pickup')</p>
                         </div>
                     </div>
                     <div class="col-md-4 mx-auto">
                         <div class="box">
                             <img class="img-fluid" src="{{asset('img/arts/furniture_professional_service.png')}}" alt="">
                             <h3>@lang('lang.services_move')</h3>
                             <p>@lang('lang.ds_services_move')</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="sec3-towing">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <h2>@lang('lang.services_winch')</h2>
                 </div>
                 <!--  -->
                 <div class="col-md-4">
                     <div class="row">
                         <div class="col-lg-3 col-md-4 ">
                             <img class="mx-auto" src="{{asset('img/arts/professional_movers.png')}}" alt="">
                         </div>
                         <div class="col-md-8 mx-auto ">
                             <p class="">@lang('lang.service1')</p>
                         </div>
                     </div>
                 </div>
                 <!--  -->
                 <div class="col-md-4">
                     <div class="row">
                         <div class="col-lg-3 col-md-4 mx-auto">
                             <img class="mx-auto" src="{{asset('img/arts/disassembly_service.png')}}" alt="">
                         </div>
                         <div class="col-md-8 mx-auto">
                             <p class="">@lang('lang.service2')</p>
                         </div>
                     </div>
                 </div>
                 <!--  -->
                 <div class=" col-lg-4 col-md-4">
                     <div class="row">
                         <div class="col-md-3 mx-auto">
                             <img class="mx-auto" src="{{asset('img/arts/wrapping_&_packing.png')}}" alt="">
                         </div>
                         <div class="col-md-8 mx-auto">
                             <p class="">@lang('lang.service3')</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

 @endsection
