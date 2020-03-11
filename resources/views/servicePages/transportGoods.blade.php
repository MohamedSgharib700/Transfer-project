@extends('masterPage.layout')
 @section('content')

     <section class="sec1-twingservice ">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6 col-md-6">
                     <div class="content">
                         <h1>@lang('lang.goods_move')</h1>
                         <p>@lang('lang.ds_goods_move')</p>
                         <a class="btn" href="{{url('become_captain')}}">
                             @lang('lang.join_link')
                             <img src="{{asset('img/icons/next.png')}}" alt="">
                         </a>
                     </div>
                 </div>
                 <div class="col-lg-6 col-md-6 mx-auto">
                     <img class="img-fluid img-l" src="{{asset('img/arts/goods_transportation_light.png')}}" alt="">
                 </div>
             </div>
         </div>
     </section>
     <section class="sec2-towing sec1-goods text-center">
         <div class="container">
             <div class="">
                 <div class="row">
                     <div class="col-md-6 mx-auto">
                         <div class="box">
                             <img src="{{asset('img/arts/goods_small_pickups.png')}}" alt="">
                             <h3>@lang('lang.small_pickup') </h3>
                             <p>@lang('lang.move1')</p>
                         </div>
                     </div>
                     <div class="col-md-6 mx-auto">
                         <div class="box">
                             <img src="{{asset('img/arts/goods_large_pickups.png')}}" alt="">
                             <h3>@lang('lang.large_pickup')</h3>
                             <p>@lang('lang.move2')</p>
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
                         <div class="col-md-3 ">
                             <img class="mx-auto img-fluid" src="{{asset('img/arts/professional_movers.png')}}" alt="">
                         </div>
                         <div class="col-md-9 mx-auto ">
                             <p class="">@lang('lang.service1')</p>
                         </div>
                     </div>
                 </div>
                 <!--  -->
                 <div class="col-md-4">
                     <div class="row">
                         <div class="col-md-3 mx-auto">
                             <img class="mx-auto img-fluid" src="{{asset('img/arts/wrapping_&_packing.png')}}" alt="">
                         </div>
                         <div class="col-md-9 mx-auto">
                             <p class="">@lang('lang.service3')</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="sec4-towing">
         <div class="container">
             <div class="col-12">
                 <div class="content">
                     <h1>@lang('lang.attention')</h1>
                     <h2> @lang('lang.goods_type1') </h2>
                     <p>@lang('lang.ds_goods1') </p>
                     <h2>@lang('lang.goods_type2')  </h2>
                     <p>@lang('lang.ds_goods2')</p>
                 </div>
             </div>
         </div>
     </section>

 @endsection
