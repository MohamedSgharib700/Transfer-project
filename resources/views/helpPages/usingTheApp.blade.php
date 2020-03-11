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
                                 <a class="active" href="#">@lang('lang.app_use')</a>
                                 <i class="fa fa-chevron-left"></i>
                             </div>
                         </div>
                         <div class="col-12">
                             <div id="service" class="box-download block">
                                 <h3>@lang('lang.how_select_service')</h3>
                                 <p class="app">@lang('lang.select_service')</p>

                             </div>
                         </div>
                         <div class="col-12">
                             <div id="documents" class="ctrate-tab block ">
                                 <div class="row">
                                     <div class="col-md-8">
                                         <h1>@lang('lang.how_uplode_files')</h1>
                                         <p>@lang('lang.uplode_files')</p>
                                         <ul class="list-unstyled tabs">
                                             <li class="active" id="tab1">@lang('lang.uplode_files1')</li>
                                             <li id="tab2">@lang('lang.uplode_files2')</li>
                                             <li id="tab3">@lang('lang.uplode_files3')</li>
                                         </ul>
                                     </div>
                                     <div class="col-md-4 all-tabs">
                                         <img id="tab1-content" src="{{asset('img/Captains/2- Using the app/captains_5.jpg')}}" alt="">
                                         <img id="tab2-content" src="{{asset('img/Captains/2- Using the app/captains_6.jpg')}}" alt="">
                                         <img id="tab3-content" src="{{asset('img/Captains/2- Using the app/captains_7.jpg')}}" alt="">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-12">
                             <div id="Confirmation" class="ctrate block">
                                 <div class="row">
                                     <div class="col-md-9">
                                         <h1> @lang('lang.activate_account')</h1>
                                         <p>@lang('lang.activate_account1') </p>
                                         <ul class="list-unstyled tab">
                                             <li>@lang('lang.activate_account2') </li>
                                             <li>@lang('lang.activate_account3') </li>
                                             <li>@lang('lang.activate_account4')</li>
                                             <li>@lang('lang.activate_account5')</li>
                                         </ul>
                                     </div>
                                     <!-- <div class="col-md-4 all-tabs">

                                   </div> -->
                                 </div>
                             </div>
                         </div>
                         <div class="col-12">
                             <div id="Going" class="ctrate block">
                                 <div class="row">
                                     <div class="col-md-8">
                                         <h1>@lang('lang.online_offline')</h1>
                                         <ul class="list-unstyled tab">
                                             <li>@lang('lang.online_offline1')</li>
                                         </ul>
                                     </div>
                                     <div class="col-md-4 all-tabs">
                                         <img src="{{asset('img/Captains/2- Using the app/captains_6.jpg')}}" alt="">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-12">
                             <div id="requests" class="ctrate block">
                                 <div class="row">
                                     <div class="col-md-8">
                                         <h1>@lang('lang.receive_request')</h1>
                                         <ul class="list-unstyled tab">
                                             <li>@lang('lang.receive_request1') </li>
                                             <li>@lang('lang.receive_request2') </li>
                                             <li>@lang('lang.receive_request3')</li>
                                         </ul>
                                     </div>
                                     <div class="col-md-4 all-tabs">
                                         <img src="{{asset('img/Captains/2- Using the app/captains_7.jpg')}}" alt="">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-12">
                             <div id="Navigation" class="ctrate block br-none">
                                 <div class="row">
                                     <div class="col-md-9">
                                         <h1> @lang('lang.navigtion')</h1>
                                         <ul class="list-unstyled tab">
                                             <li>@lang('lang.navigtion1') </li>
                                             <li>@lang('lang.navigtion2')</li>
                                         </ul>
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
                 <li class="active" data-scroll="service"> <span>@lang('lang.how_select_service')</span> </li>
                 <li data-scroll="documents"> <span>@lang('lang.how_uplode_files')</span> </li>
                 <li data-scroll="Confirmation"> <span>@lang('lang.activate_account')</span> </li>
                 <li data-scroll="Going"> <span>@lang('lang.online_offline1')</span> </li>
                 <li data-scroll="requests"> <span>@lang('lang.receive_request')</span> </li>
                 <li data-scroll="Navigation"> <span>@lang('lang.navigtion')</span> </li>
             </ul>
         </div>
     </section>

 @endsection
