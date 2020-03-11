@extends('masterPage.layout')
 @section('content')

     <section class="header-help-center">
         <div class="container">
             <div class="row">
                 <div class="col-12 text-center">
                     <h2>@lang('lang.help_center') </h2>
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
                                 <a class="active" href="#">@lang('lang.payment')</a>
                                 <i class="fa fa-chevron-left"></i>
                             </div>
                         </div>

                         <div class="col-12">
                             <div id="Payment" class="ctrate-tab2 block pt-0">
                                 <div class="row">
                                     <div class="col-md-8">
                                         <h1>@lang('lang.payment_options')</h1>
                                         <ul class="list-unstyled tabs2">
                                             <li id="tab2">@lang('lang.payment_options1')</li>
                                             <li id="tab3">@lang('lang.payment_options2')</li>
                                             <li id="tab4">@lang('lang.payment_options3')</li>
                                             <li id="tab5">@lang('lang.payment_options4')</li>
                                             <li id="tab6">@lang('lang.payment_options5')</li>
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


                         <div class="col-12">
                             <div id="changed-number" class="ctrate-tab block ">
                                 <div class="row">
                                     <div class="col-md-8">
                                         <h1>@lang('lang.change_phone_number')</h1>
                                         <ul class="list-unstyled tabs">
                                             <li class="active" id="tab1">@lang('lang.change_step1') </li>
                                             <li id="tab2">@lang('lang.change_step2') </li>
                                             <li id="tab3">@lang('lang.change_step3')</li>
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
                             <div id="Payment-options" class="ctrate-tab3 block br-none">
                                 <div class="row">
                                     <div class="col-md-8">
                                         <h1>@lang('lang.code_no_working')</h1>
                                         <ul class="list-unstyled tabs3">
                                             <li class="active" id="tab1">@lang('lang.fix_step1')</li>
                                             <li id="tab2">@lang('lang.fix_step2')</li>
                                             <li id="tab3">@lang('lang.fix_step3')</li>

                                         </ul>
                                     </div>
                                     <div class="col-md-4 all-tabs">
                                         <img id="tab1-contentee" src="{{asset('img/client/1- Using the app/client_4.jpg')}}" alt="">
                                         <img id="tab2-contentee" src="{{asset('img/client/1- Using the app/client_5.jpg')}}" alt="">
                                         <img id="tab3-contentee" src="{{asset('img/client/1- Using the app/client_6.jpg')}}" alt="">
                                         <img id="tab4-contentee" src="{{asset('img/client/1- Using the app/client_7.jpg')}}" alt="">
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
                 <li class="active" data-scroll="Payment"> <span> @lang('lang.payment_options')</span> </li>
                 <li data-scroll="changed-number"> <span>@lang('lang.change_phone_number')</span> </li>
                 <li data-scroll="Payment-options"> <span>@lang('lang.code_no_working')</span> </li>
             </ul>
         </div>
     </section>

 @endsection
