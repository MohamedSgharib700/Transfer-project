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
                                 <a class="active" href="#">@lang('lang.join_in_winch')</a>
                                 <i class="fa fa-chevron-left"></i>
                             </div>
                         </div>
                         <div class="col-12">
                             <div id="Join" class="ctrate-tab block pt-0">
                                 <div class="row">
                                     <div class="col-md-8">
                                         <h1>@lang('lang.how_join_winch')</h1>
                                         <p class="app">@lang('lang.join_winch')</p>
                                         <a href="#">
                                             <img class="img-download img-fluid" src="{{asset('img/icons/app_store.png')}}" alt="">
                                         </a>
                                         <a href="#">
                                             <img class="img-download img-fluid" src="{{asset('img/icons/play_store.png')}}" alt="">
                                         </a>
                                         <ul class="list-unstyled tabs">
                                             <li class="active" id="tab1">@lang('lang.join_winch1')</li>
                                              <li id="tab2">@lang('lang.join_winch2')</li>
                                         </ul>
                                     </div>
                                     <div class="col-md-4 all-tabs">
                                         <img id="tab1-content" src="{{asset('img/Captains/1- Joining Winch/captains_2.jpg')}}" alt="">
                                         <img id="tab2-content" src="{{asset('img/Captains/1- Joining Winch/captains_3.jpg')}}" alt="">
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-12">
                             <div id="Requirements" class="ctrate block br-none">
                                 <div class="row">
                                     <div class="col-md-9">
                                         <h1>@lang('lang.require_document')</h1>
                                         <p>@lang('lang.requirements')</p>
                                         <ul class="list-unstyled tab">
                                             <li class="" id="tab1">@lang('lang.requirements1')</li>
                                             <li id="tab2">@lang('lang.requirements2')</li>
                                             <li id="tab3">@lang('lang.requirements3')</li>
                                             <li id="tab4">@lang('lang.requirements4')</li>
                                             <li id="tab4">@lang('lang.requirements5')</li>
                                             <li id="tab4">@lang('lang.requirements6')</li>
                                             <li id="tab4">@lang('lang.requirements7')</li>
                                             <li>@lang('lang.requirements8')</li>
                                             <li>@lang('lang.requirements9') </li>

                                             <ul class="non">
                                                 <li> @lang('lang.requirements10')</li>
                                                 <li>@lang('lang.requirements11')</li>
                                                 <li>@lang('lang.requirements12')</li>
                                             </ul>
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
                 <li data-scroll="Join"  class="active"> <span>@lang('lang.how_join_winch')</span> </li>
                 <li data-scroll="Requirements"> <span>@lang('lang.require_document')</span> </li>
             </ul>
         </div>
     </section>

 @endsection
