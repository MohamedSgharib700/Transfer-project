@extends('masterPage.layout')
 @section('content')

     <section class="header-privacy">
         <div class="container">
             <div class="row">
                 <div class="col-12 text-center">
                     <h2>@lang('lang.policy')</h2>
                 </div>
             </div>
         </div>
     </section>
     <section class="privacy_policy">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="box-content">
                         <h1>@lang('lang.introduction')</h1>
                         <p class="content">@lang('lang.ds_introduction1')</p>
                         <p class="content-bold">@lang('lang.ds_introduction2')</p>
                         <hr>
                     </div>
                 </div>
                 <div class="col-12">
                     <div class="box-content">
                         <h1>@lang('lang.protection_officer')</h1>
                         <p class="content">@lang('lang.ds_protection')</p>
                         <p class="content-bold">@lang('lang.general_data_protection')</p>
                         <ul class="list-unstyled">
                             <li>@lang('lang.dec_general_data_protection')</li>
                         </ul>
                         <p class="content-bold">@lang('lang.inquiries')</p>
                         <ul class="list-unstyled">
                             <li>@lang('lang.dsc_inquiries')</li>
                         </ul>
                         <p class="content-bold">@lang('lang.data_protection_officer')</p>
                         <ul class="list-unstyled">
                             <li>@lang('lang.protection_officer_name')</li>
                             <li>@lang('lang.protection_officer_email')</li>
                         </ul>
                         <hr>
                     </div>
                 </div>
                 <div class="col-12">
                     <div class="box-content">
                         <h1>@lang('lang.what_personal_data')</h1>
                         <p class="content">"@lang('lang.personal_data') </p>

                         <hr>
                     </div>
                 </div>
                 <div class="col-12">
                     <div class="box-content">
                         <h1>@lang('lang.purpose_process_date')</h1>
                         <p class="content">@lang('lang.dsc_purpose_process_date') </p>
                         <p class="content-bold"></p>
                         <hr>
                     </div>
                 </div>

                 <div class="col-12">
                     <div class="box-content">
                         <h1>@lang('lang.what_personal_info')</h1>
                         <p class="content-bold">@lang('lang.personal_data_send')</p>
                         <ul class="list-unstyled">
                             <li>@lang('lang.winch_about')</li>
                             <ul class="list-tow">
                                 <li>@lang('lang.your_email')</li>
                                 <li>@lang('lang.your_name').</li>
                                 <li>@lang('lang.your_password')</li>
                                 <li>@lang('lang.if_you_register')</li>
                             </ul>
                         </ul>

                         <ul class="list-unstyled">
                             <li>@lang('lang.using_app')</li>
                             <ul class="list-tow">
                                 <li>@lang('lang.location_info')</li>
                                 <li>@lang('lang.use_info')</li>
                                 <li>@lang('lang.device_info')</li>
                             </ul>
                         </ul>
                         <p class="content-bold">@lang('lang.payment_info_required')</p>
                         <ul class="list-unstyled">
                             <li>@lang('lang.if_use_cradit')</li>
                             <ul class="list-tow">
                                 <li>@lang('lang.your_real_name')</li>
                                 <li>@lang('lang.your_address')</li>
                                 <li>@lang('lang.card_info')</li>
                             </ul>
                         </ul>
                         <p class="content-bold">@lang('lang.check_info')</p>
                         <ul class="list-unstyled">
                             <li> @lang('lang.national_id')</li>
                             <li>@lang('lang.drivers_license') </li>
                             <li> @lang('lang.cars_license')</li>
                             <li>@lang('lang.criminal_record_report')</li>
                             <ul class="list-tow">
                                 <li>@lang('lang.provision_above_info') </li>
                             </ul>
                         </ul>
                         <p class="content-bold">@lang('lang.newsletters')</p>
                         <ul class="list-unstyled">
                             <li>@lang('lang.your_mail')</li>
                         </ul>
                         <hr>
                     </div>
                 </div>
                 <div class="col-12">
                     <div class="box-content">
                         <h1>@lang('lang.how_use_data')</h1>
                         <ul class="list-unstyled">
                             <li>@lang('lang.use_step1')</li>
                             <li>@lang('lang.use_step2')</li>
                             <li>@lang('lang.use_step3')</li>
                             <li>@lang('lang.use_step4')</li>
                             <li>@lang('lang.use_step5')</li>
                             <li>@lang('lang.use_step6')</li>
                             <li>@lang('lang.use_step7')</li>
                             <li>@lang('lang.use_step8')</li>
                             <li>@lang('lang.use_step9')</li>
                         </ul>
                         <hr>
                     </div>
                 </div>
                 <div class="col-12">
                     <div class="box-content">
                         <h1>@lang('lang.save_long_data')</h1>
                         <p class="content">@lang('lang.dsc_save_long_data')</p>
                         <hr>
                     </div>
                 </div>

                 <div class="col-12">
                     <div class="box-content">
                         <h1>@lang('lang.how_save_data')</h1>
                         <p class="content">@lang('lang.document_save_date')</p>
                         <hr>
                     </div>
                 </div>
                 <div class="col-12">
                     <div class="box-content">
                         <h1>@lang('lang.options_fields')</h1>
                         <p class="content">@lang('lang.dsc_options_fields')</p>
                         <p class="content-bold">@lang('lang.tools_info')</p>
                         <p class="content">@lang('lang.dsc_tools_info')</p>
                         <p class="content-bold">@lang('lang.cancel_approval')</p>
                         <p class="content">@lang('lang.desc_cancel_approval')</p>
                         <p class="content-bold">@lang('lang.copy_request')</p>
                         <p class="content">@lang('lang.dsc_copy_request')</p>
                         <hr>
                     </div>
                 </div>
                 <div class="col-12">
                     <div class="box-content">
                         <h1>@lang('lang.changeing_updateing')</h1>
                         <p class="content">@lang('lang.dsc_cangening_updateing')</p>

                     </div>
                 </div>
             </div>
         </div>
     </section>

 @endsection
