@extends('masterPage.layout')
 @section('content')

     <section class="header-help-center">
         <div class="container">
             <div class="row">
                 <div class="col-12 text-center">
                     <h2>@lang('lang.help_center')</h2>
                 </div>
             </div>
         </div>
     </section>
     <section class="help-center-content">
         <div class="container">
             <div class="row">
                 <div class="col-md-8">
                     <div class="row">
                         <div class="col-12 ">
                             <div class="head-help">
                                 <a href="{{url('help')}}">@lang('lang.winch_captin')</a>
                                 <i class="fa fa-chevron-left"></i>
                                 <a class="active" href="#">@lang('lang.getting_paid')</a>
                                 <i class="fa fa-chevron-left"></i>
                             </div>
                         </div>
                         <div class="col-12">
                             <div id="money" class="ctrate-tab block ">
                                 <div class="row">
                                     <div class="col-md-8">
                                         <h1>@lang('lang.how_collect_money')</h1>
                                         <p>@lang('lang.collect_money1')</p>
                                         <ul class="list-unstyled tab">
                                             <li class="" id="">@lang('lang.collect_money2').</li>
                                             <li>@lang('lang.collect_money3')</li>
                                             <li>@lang('lang.collect_money4') </li>
                                         </ul>
                                         <ul class="list-unstyled">
                                             <li class="" id="">@lang('lang.collect_money5')</li>
                                         </ul>
                                     </div>
                                     <div class="col-md-4 all-tabs">
                                         <img  src="{{asset('img/Captains/4- Getting paid/captains_11.jpg')}}" alt="">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-12">
                             <div id="earnings" class="ctrate block">
                                 <div class="row">
                                     <div class="col-md-8">
                                         <h1>@lang('lang.how_see_earnings')</h1>
                                         <!-- <p class="app">Go on Menu > Earnings</p> -->
                                         <ul class="list-unstyled ">
                                             <li>@lang('lang.see_earnings1') </li>
                                             <li>@lang('lang.see_earnings2')</li>
                                             <li>@lang('lang.see_earnings3')</li>
                                             <li>@lang('lang.see_earnings4') </li>
                                         </ul>
                                     </div>
                                     <div class="col-md-4">
                                         <img  src="{{asset('img/Captains/4- Getting paid/captains_12.jpg')}}" alt="">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-12">
                             <div id="payment" class="ctrate block">
                                 <div class="row">
                                     <div class="col-md-9">
                                         <h1>@lang('lang.how_payment')</h1>
                                         <ul class="list-unstyled tab">
                                             <li>@lang('lang.payment1')</li>
                                             <li>@lang('lang.payment2') </li>
                                             <li>@lang('lang.payment3')</li>
                                             <li>@lang('lang.payment4')</li>
                                         </ul>
                                     </div>
                                     <!-- <div class="col-md-4">

                                     </div> -->
                                 </div>
                             </div>
                         </div>
                         <div class="col-12">
                             <div id="calculation" class="ctrate block br-none">
                                 <div class="row">
                                     <div class="col-md-9">
                                         <h1>@lang('lang.example')</h1>
                                         <ul class="list-unstyled tab">
                                             <li>@lang('lang.example1')</li>
                                             <li>@lang('lang.example2')</li>
                                             <ul class="non">
                                                 <li>@lang('lang.example3')</li>
                                                 <li>@lang('lang.example4')</li>
                                             </ul>
                                             <li>@lang('lang.example5')</li>
                                             <ul class="non">
                                                 <li>@lang('lang.example6')</li>
                                                 <li>@lang('lang.example7')</li>
                                                 <li>@lang('lang.example8')</li>
                                                 <li>@lang('lang.example9')</li>
                                             </ul>
                                         </ul>
                                     </div>
                                     <!-- <div class="col-md-4">

                                     </div> -->
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="box-fixed d-none d-lg-block">
             <ul class="list-unstyled">
                 <li data-scroll="money" class="active"> <span>@lang('lang.how_collect_money')</span> </li>
                 <li data-scroll="earnings"> <span>@lang('lang.how_see_earnings')</span> </li>
                 <li data-scroll="payment"> <span>@lang('lang.how_payment')</span> </li>
                 <li data-scroll="calculation"> <span>@lang('lang.example')</span> </li>
             </ul>
         </div>
     </section>

 @endsection
