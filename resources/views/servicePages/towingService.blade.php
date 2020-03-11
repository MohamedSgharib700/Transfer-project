@extends('masterPage.layout')
 @section('content')

     <section class="sec1-twingservice">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6 col-md-6">
                     <div class="content">
                         <h1>@lang('lang.titel_save_cars') </h1>
                         <p>@lang('lang.dsc_save_cars')</p>
                         <a class="btn" href="{{url('become_captain')}}">
                             @lang('lang.join_link')
                             <img src="{{asset('img/icons/next.png')}}" alt="">
                         </a>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-6 mx-auto">
                     <img class="img-fluid img-l" src="{{asset('img/arts/towing_service_light.png')}}" alt="">
                 </div>
             </div>
         </div>
     </section>
     <section class="sec2-towing text-center">
         <div class="container">
             <div class="">
                 <div class="row">
                     <div class="col-md-6 mx-auto">
                         <div class="box">
                             <img src="{{asset('img/arts/towing_emergency.png')}}" alt="">
                             <h3>@lang('lang.services_car1')</h3>
                             <p>@lang('lang.ds_services_car1')</p>
                         </div>
                     </div>
                     <div class="col-md-6 mx-auto">
                         <div class="box">
                             <img src="{{asset('img/arts/towing_new_car.png')}}" alt="">
                             <h3> @lang('lang.services_car2')</h3>
                             <p>@lang('lang.ds_services_car2')</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

 @endsection
