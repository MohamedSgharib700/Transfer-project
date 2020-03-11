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
                                 <a href="{{url('help')}}">@lang('lang.winch_partners')</a>
                                 <i class="fa fa-chevron-left"></i>
                                 <a class="active" href="#">@lang('lang.rquests_managment')</a>
                                 <i class="fa fa-chevron-left"></i>
                             </div>
                         </div>

                         <div class="col-12">
                             <div id="Schedule" class="ctrate-tab2 block pt-0">
                                 <div class="row">
                                     <div class="col-md-8">
                                         <h1>@lang('lang.schedule_trip')</h1>
                                         <p>@lang('lang.ds_schedule_trip')</p>
                                         <ul class="list-unstyled tabs2">
                                             <li class="" id="tab1">@lang('lang.booking_steps')</li>
                                         </ul>
                                     </div>
                                     <div class="col-md-4 all-tabs">
                                         <img id="tab1-contente" src="{{asset('img/client/3- Managing Requests/client_15.jpg')}}" alt="">
                                     </div>
                                 </div>
                             </div>
                         </div>


                         <div class="col-12">
                             <div id="Rate" class="ctrate-tab block ">
                                 <div class="row">
                                     <div class="col-md-8">
                                         <h1> @lang('lang.trip_rating')</h1>
                                         <ul class="list-unstyled tabs">
                                             <li class="active" id="tab1">@lang('lang.option1') </li>
                                             <li id="tab2">@lang('lang.option2') </li>
                                             <li id="tab1">@lang('lang.option3') </li>
                                         </ul>
                                     </div>
                                     <div class="col-md-4 all-tabs">
                                         <img id="tab1-content" src="{{asset('img/client/3- Managing Requests/client_16.jpg')}}" alt="">
                                         <img id="tab2-content" src="{{asset('img/client/3- Managing Requests/client_16.jpg')}}" alt="">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-12">
                             <div id="problem" class="ctrate block br-none">
                                 <div class="row">
                                     <div class="col-md-9">
                                         <h1>@lang('lang.i_have_problem')</h1>
                                         <ul class="list-unstyled tab">
                                             <li class="" id="tab1">@lang('lang.fix_problem1') </li>
                                             <li class="" id="tab1">@lang('lang.fix_problem2')</li>
                                         </ul>
                                     </div>
                                     <!-- <div class="col-md-4 all-tabs">

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
                 <li class="active" data-scroll="Schedule"> <span> @lang('lang.schedule_trip')</span> </li>
                 <li data-scroll="Rate"> <span> @lang('lang.trip_rating')</span> </li>
                 <li data-scroll="problem"> <span>@lang('lang.i_have_problem')</span> </li>
             </ul>
         </div>
     </section>

 @endsection
