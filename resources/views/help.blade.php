@extends('masterPage.layout')
 @section('content')
     <section class="sec1-twingservice help">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <h1 class="text-center">@lang('lang.page_titel')</h1>
                     <div class="row">
                         <div class="col-md-6 mll">
                             <label>
                                 <input class="btn-block" type="text" name="" value="" placeholder="@lang('lang.search_input')">
                                 <img src="{{asset('/img/icons/search.png')}}" alt="">
                             </label>

                         </div>
                         <div class="col-md-3">
                             <button class="btn" type="button" name="button">@lang('lang.search_button')</button>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </section>
     <!-- <section class="sec2-towing sec2-help text-center">
       <div class="container">
         <div class="">
           <div class="row">
             <div class="col-md-6 mx-auto">
               <div class="box d-none d-lg-block d-md-block">
                 <img class="img-fluid" src="img/arts/users_sections.png" alt="">
                 <h3>clients</h3>
               </div>
             </div>
             <div class="col-md-6 mx-auto">
               <div class="box d-none d-lg-block d-md-block">
                 <img src="img/arts/drivers_sections.png" alt="">
                 <h3>captains</h3>
               </div>
             </div>
           </div>
         </div>
       </div>
     </section> -->
     <section class="sec1-help">
         <div class="container">
             <div class="row">
                 <div class="col-sm-6">
                     <div class="box-head">
                         <!-- <img class="img-fluid" src="img/arts/users_sections.png" alt=""> -->
                         <h1 class="head-text-help d-block d-lg-none d-md-none">@lang('lang.winch_partners')</h1>
                     </div>
                     <div class="box">
                         <h2> @lang('lang.use_app')</h2>
                         <ul class="list-unstyled">
                             <li> <a href="{{url('using_app')}}">@lang('lang.download_app') </a> </li>
                             <li> <a href="{{url('using_app')}}">@lang('lang.create_account') </a> </li>
                             <li> <a href="{{url('using_app')}}">@lang('lang.trip_request') </a> </li>
                         </ul>
                     </div>

                     <div class="box">
                         <h2>@lang('lang.payment')</h2>
                         <ul class="list-unstyled">
                             <li> <a href="{{url('account_and_payment')}}"> @lang('lang.pay_options')</a> </li>
                             <li> <a href="{{url('account_and_payment')}}"> @lang('lang.change_phone')</a></li>
                             <li> <a href="{{url('account_and_payment')}}"> @lang('lang.forget_password')</a></li>
                             <li> <a href="{{url('account_and_payment')}}">@lang('lang.descount_code')</a> </li>
                         </ul>
                     </div>
                     <div class="box">
                         <h2> @lang('lang.rquests_managment')</h2>
                         <ul class="list-unstyled">
                             <li> <a href="{{url('managing_requests')}}">@lang('lang.create_trip') </a> </li>
                             <li> <a href="{{url('managing_requests')}}">@lang('lang.rating_trip')</a></li>
                             <li> <a href="{{url('managing_requests')}}">@lang('lang.problem_trip')</a> </li>

                         </ul>
                     </div>



                     <div class="box">

                         <h2>@lang('lang.more')</h2>
                         <ul class="list-unstyled">
                             <li> <a href="{{url('privacy_policy')}}"> @lang('lang.policy') </a> </li>
                             <li> <a href="{{url('privacy_policy')}}">@lang('lang.terms')</a> </li>
                             <li> <a href="{{url('privacy_policy')}}">@lang('lang.insurance')</a> </li>
                         </ul>
                     </div>


                 </div>
                 <div class="col-sm-6">
                     <div class="box-head">
                         <!-- <img class="img-fluid" src="img/arts/users_sections.png" alt=""> -->
                         <h1 class="head-text-help d-block d-lg-none d-md-none">@lang('lang.winch_captin')</h1>
                     </div>
                     <div class="box">
                         <h2>@lang('lang.join_in_winch')</h2>
                         <ul class="list-unstyled">
                             <li> <a href="{{url('joining_winch')}}">@lang('lang.how_join')</a> </li>
                             <li> <a href="{{url('joining_winch')}}">@lang('lang.require_documents')</a> </li>
                         </ul>
                     </div>

                     <div class="box">
                         <h2>@lang('lang.app_use')</h2>
                         <ul class="list-unstyled">
                             <li> <a href="{{url('using_the_app')}}">@lang('lang.policy')</a> </li>
                             <li> <a href="{{url('using_the_app')}}">@lang('lang.account_actvtion')</a></li>
                             <li> <a href="{{url('using_the_app')}}">@lang('lang.receving_trips')</a> </li>
                             <li> <a href="{{url('using_the_app')}}">@lang('lang.navigation')</a> </li>
                         </ul>
                     </div>
                     <div class="box">
                         <h2>@lang('lang.account_managment') </h2>
                         <ul class="list-unstyled">
                             <li> <a href="{{url('account_management')}}">@lang('lang.change_phone')</a> </li>
                             <li> <a href="{{url('account_management')}}">@lang('lang.forget_password')</a> </li>
                             <li> <a href="{{url('account_management')}}">@lang('lang.update_document') </a> </li>
                             <li> <a href="{{url('account_management')}}">@lang('lang.vecisl_change') </a> </li>
                         </ul>
                     </div>
                     <div class="box">
                         <h2>@lang('lang.getting_paid')</h2>
                         <ul class="list-unstyled">
                             <li> <a href="{{url('getting_paid')}}">@lang('lang.how_getting_paid')</a> </li>
                             <li> <a href="{{url('getting_paid')}}">@lang('lang.how_see_values')</a> </li>
                             <li> <a href="{{url('getting_paid')}}">@lang('lang.how_payment_calculated')</a> </li>
                         </ul>
                     </div>



                 </div>
             </div>

         </div>

     </section>

 @endsection
