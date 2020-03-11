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
                                 <a href="{{url('/help')}}">@lang('lang.winch_partners')</a>
                                 <i class="fa fa-chevron-left"></i>
                                 <a class="active" href="#">@lang('lang.app_use')</a>
                                 <i class="fa fa-chevron-left"></i>
                             </div>
                         </div>
                         <div class="col-12">
                             <div id="getApp" class="box-download block">
                                 <div class="row">
                                     <div class="col-md-6">
                                         <h3>@lang('lang.app_download')</h3>
                                         <p>@lang('lang.terms_download')</p>
                                     </div>
                                     <div class="col-md-3 col-6">
                                         <a href="https://apps.apple.com/eg/app/winch-client/id1479411668">
                                             <img class="img-download img-fluid" src="{{asset('img/icons/app_store.png')}}" alt="">
                                         </a>
                                     </div>
                                     <div class="col-md-3 col-6">
                                         <a href="https://play.google.com/store/apps/details?id=com.lodex.winch">
                                             <img class="img-download img-fluid" src="{{asset('img/icons/play_store.png')}}" alt="">
                                         </a>
                                     </div>

                                 </div>
                             </div>
                         </div>
                         <div class="col-12">
                             <div id="createApp" class="ctrate-tab block ">
                                 <div class="row">
                                     <div class="col-md-8">
                                         <h1>@lang('lang.create')</h1>
                                         <ul class="list-unstyled tabs">
                                             <li class="active" id="tab1">@lang('lang.enter_phone')</li>
                                             <li id="tab2">@lang('lang.check_actvition')</li>
                                             <li id="tab3">@lang('lang.Complete_data')</li>
                                         </ul>
                                     </div>
                                     <div class="col-md-4 all-tabs">
                                         <img id="tab1-content" src="{{asset('img/client/1- Using the app/client_1.jpg')}}" alt="">
                                         <img id="tab2-content" src="{{asset('img/client/1- Using the app/client_2.jpg')}}" alt="">
                                         <img id="tab3-content" src="{{asset('img/client/1- Using the app/client_3.jpg')}}" alt="">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-12">
                             <div id="cereatApp2" class="ctrate-tab2 block br-none">
                                 <div class="row">
                                     <div class="col-md-8">
                                         <h1>@lang('lang.create_trip')</h1>
                                         <ul class="list-unstyled tabs2">
                                             <li class="active" id="tab1">@lang('lang.note_trip1')</li>
                                             <li id="tab2">@lang('lang.note_trip2')</li>
                                             <li id="tab3">@lang('lang.note_trip3')</li>
                                             <li id="tab4">@lang('lang.note_trip4')</li>
                                         </ul>
                                     </div>
                                     <div class="col-md-4 all-tabs">
                                         <img id="tab1-contente" src="{{asset('img/client/1- Using the app/client_4.jpg')}}" alt="">
                                         <img id="tab2-contente" src="{{asset('img/client/1- Using the app/client_5.jpg')}}" alt="">
                                         <img id="tab3-contente" src="{{asset('img/client/1- Using the app/client_6.jpg')}}" alt="">
                                         <img id="tab4-contente" src="{{asset('img/client/1- Using the app/client_7.jpg')}}" alt="">
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
                 <li class="active" data-scroll="getApp"> <span>@lang('lang.app_download')</span> </li>
                 <li data-scroll="createApp"> <span>@lang('lang.create') </span> </li>
                 <li data-scroll="cereatApp2"> <span> @lang('lang.create_trip')</span> </li>
             </ul>
         </div>
     </section>
 @endsection
