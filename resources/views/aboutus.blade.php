@extends('masterPage.layout')
@section('content')

    <section class="sec1-twingservice help about-us">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">@lang('lang.titel_page')</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="sec2-towing sec2-help text-center">
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <div class="box ">
                            <img class="img-fluid" src="{{asset('img/arts/about_us.png')}}" alt="">
                            <h3>@lang('lang.about_winch')</h3>
                            <p>@lang('lang.dsc_titel_page')</p>
                        </div>
                    </div>
                    <div class="col-md-6 mx-auto">
                        <div class="box ">
                            <img src="{{asset('img/arts/our_mission.png')}}" alt="">
                            <h3>@lang('lang.tasks')</h3>
                            <p>@lang('lang.dsc_tasks')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec1-about pt-0">
        <div class="sec1 pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="head-text">@lang('lang.our_values')</h1>

                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="box-sec1 mb-md-5  mb-sm-5 text-center">
                            <img class="img-fluid" src="{{asset('img/arts/safety.png')}}" alt="">
                            <h2>@lang('lang.safety')</h2>
                            <p>@lang('lang.desc_safety')</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="box-sec1 mb-md-5  mb-sm-5 text-center">
                            <img class="img-fluid" src="{{asset('img/arts/transparency.png')}}" alt="">
                            <h2>@lang('lang.transparency')</h2>
                            <p>@lang('lang.desc_transparency')</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="box-sec1 mb-md-5  mb-sm-5 text-center">
                            <img class="img-fluid" src="{{asset('img/arts/flexibility.png')}}" alt="">
                            <h2>@lang('lang.flexiblity')</h2>
                            <p>@lang('lang.desc_flexiblity')</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="box-sec1 mb-md-5  mb-sm-5 text-center">
                            <img class="img-fluid" src="{{asset('img/arts/competitive_pricing.png')}}" alt="">
                            <h2>@lang('lang.competitive_pricing')</h2>
                            <p>@lang('lang.desc_competitive_pricing')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



