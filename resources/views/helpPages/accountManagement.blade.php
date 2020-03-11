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
                                 <a class="active" href="#">@lang('lang.account_managment')</a>
                                 <i class="fa fa-chevron-left"></i>
                             </div>
                         </div>
                         <div class="col-12">
                             <div id="changed" class="ctrate-tab block ">
                                 <div class="row">
                                     <div class="col-md-8">
                                         <h1>@lang('lang.change_my_phone')</h1>
                                         <p>@lang('lang.change_my_phone1')</p>
                                         <ul class="list-unstyled tab">
                                             <li class="" id="">@lang('lang.change_my_phone2') </li>
                                             <li>@lang('lang.change_my_phone3') </li>
                                             <li>@lang('lang.change_my_phone4')</li>

                                         </ul>
                                     </div>
                                     <div class="col-md-4 all-tabs">
                                         <img  src="{{asset('img/Captains/3- Account management/captains_9.jpg')}}" alt="">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-12">
                             <div id="updating" class="ctrate block">
                                 <div class="row">
                                     <div class="col-md-8">
                                         <h1>@lang('lang.update_documents')</h1>
                                         <p>@lang('lang.update_documents1') </p>
                                         <ul class="list-unstyled ">
                                             <li>@lang('lang.update_documents2')</li>
                                             <li> @lang('lang.update_documents3')</li>
                                             <li>@lang('lang.update_documents4')</li>
                                             <li>@lang('lang.update_documents5'))</li>
                                         </ul>
                                     </div>
                                     <div class="col-md-4">
                                         <img  src="{{asset('img/Captains/3- Account management/captains_10.jpg')}}" alt="">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-12">
                             <div id="vehicle" class="ctrate block br-none">
                                 <div class="row">
                                     <div class="col-md-8">
                                         <h1>@lang('lang.change_vehicle')</h1>
                                         <p>@lang('lang.change_vehicle1') </p>
                                         <ul class="list-unstyled tab">
                                             <li>@lang('lang.change_vehicle2')</li>
                                             <li>@lang('lang.change_vehicle3') </li>
                                             <li>@lang('lang.change_vehicle4') </li>
                                             <li>@lang('lang.change_vehicle5')</li>
                                             <li>@lang('lang.change_vehicle6')</li>
                                         </ul>
                                     </div>
                                     <div class="col-md-4">
                                         <img src="{{asset('img/Captains/3- Account management/captains_8.jpg')}}" alt="">
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="box-fixed d-none d-lg-block">
             <ul class="list-unstyled">
                 <li class="active" data-scroll="changed"> <span>@lang('lang.change_my_phone')</span> </li>
                 <li data-scroll="updating"> <span>@lang('lang.update_documents')</span> </li>
                 <li data-scroll="vehicle"> <span>@lang('lang.change_vehicle')</span> </li>

             </ul>
         </div>
     </section>

 @endsection
