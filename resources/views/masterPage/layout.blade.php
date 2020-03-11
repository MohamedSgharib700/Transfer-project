<?php
$url_segment = \Request::segment(1);
if ($url_segment == 'ar' || $url_segment == 'en') {
    App::setLocale($url_segment);
    $locale = App::getLocale();
} else {
    App::setLocale('ar');
    $locale = App::getLocale();
}

session(['sess_locale' => $locale]);
$sess_locale = session('sess_locale');
//  if(auth()->user()){
$sess_user_id = session('user_id');
?>

    <!DOCTYPE html>
<html lang="{{App::getLocale()}}" dir="{{App::getLocale() == "ar" ? "rtl":"ltr" }}">

<head>
    <title>@lang('lang.website_title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
          content="@lang('lang.meta_description')">
    <meta name="keywords" content="@lang('lang.meta_keywords')">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="icon" href="{{asset('img/icons/fav.png')}}" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/morphext.css')}}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
    <link rel="stylesheet" href="{{asset('/css/lightslider.min.css')}}">

    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    @if (app()->getLocale()=='ar')
        <link rel="stylesheet" href="{{asset('/css/style-ar.css')}}">
    @endif



<!-- Facebook Pixel Code -->

    <script>

        !function(f,b,e,v,n,t,s)

        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?

            n.callMethod.apply(n,arguments):n.queue.push(arguments)};

            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';

            n.queue=[];t=b.createElement(e);t.async=!0;

            t.src=v;s=b.getElementsByTagName(e)[0];

            s.parentNode.insertBefore(t,s)}(window,document,'script',

            'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1200155143515770');

        fbq('track', 'PageView');

    </script>

    <noscript>

        <img height="1" width="1"

             src="https://www.facebook.com/tr?id=1200155143515770&ev=PageView

&noscript=1"/>

    </noscript>

    <!-- End Facebook Pixel Code -->

</head>

@if(Request::is('en') || Request::is('ar'))
    {{--Index page--}}
    @php
        $footerClass="";
        $footerLogo="logo_yellow.png";
        $footerImageName="light";
        $bodyClass = "";
    @endphp

@else
    {{--Other pages--}}
    @php
        $footerClass="footer-pages";
        $footerLogo="logo_dark.png";
        $footerImageName="dark";
        $bodyClass = "page";
    @endphp


@endif

<body class="{{$bodyClass}}">
<div class="loder">
    <!-- <h2 class="text">WINCH</h2> -->
    <img src="{{asset('img/Winsh web 02.gif')}}" alt="">
</div>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand d-xl-none d-lg-none d-md-block" href="{{url('/')}}">
            <img class="img-1" src="{{asset('/img/icons/logo_light.png')}}" alt="">
            <img class="img-2" src="{{asset('/img/icons/logo_yellow.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto p-0">
                <li class="nav-item dropdown dropdown-lang">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if (App::getLocale()=='en')
                            English

                        @else
                            العربية

                        @endif
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if (App::getLocale()=='en')
                            <a class="dropdown-item" href="{{url('ar')}}">العربية</a>
                        @else
                            <a class="dropdown-item" href="{{url('en')}}">English</a>
                        @endif




                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">@lang('lang.home')</a>
                </li>
                <li class="nav-item dropdown dropdown-select ">
                    <a class="nav-link nav-link2 dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @lang('lang.services')
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('furniture')}}">
                            <img class="d-none d-lg-block d-xl-block  mx-auto" src="{{asset('/img/arts/furniture_moving_menu.png')}}" alt="">
                            <span class="d-block">@lang('lang.transport_furniture')</span>
                        </a>
                        <hr>
                        <a class="dropdown-item text-center" href="{{url('transport_goods')}}">
                            <img class="d-none d-lg-block d-xl-block  mx-auto" src="{{asset('/img/arts/goods_transportation.png')}}" alt="">
                            <span class="d-block">@lang('lang.transport_goods')</span>
                        </a>
                        <hr>
                        <a class="dropdown-item text-center" href="{{url('towing_service')}}">
                            <img class="d-none d-lg-block d-xl-block  mx-auto" src="{{asset('/img/arts/towing_service_menu.png')}}" alt="">
                            <span class="d-block">@lang('lang.save_cars')</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        <a class="navbar-brand d-xl-block d-lg-block d-none" href="{{url('/')}}">
            <img class="img-1" src="{{asset('img/icons/logo_light.png')}}" alt="">
            <img class="img-2" src="{{asset('img/icons/logo_yellow.png')}}" alt="">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto p-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('partners')}}">@lang('lang.partners')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('help')}}">@lang('lang.help')</a>
                </li>
                <li class="nav-item book-item">
                    <a class="nav-link" href="https://appurl.io/vQjXerMUT">@lang('lang.book_now')</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')
{{--Home--}}

<footer class="{{$footerClass}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 mb-md-5">
                <div class="first">

                    <img class="logo-footer" src="{{asset('/img/icons/'.$footerLogo)}}" alt="">

                    <p>@lang('lang.ds_footer')</p>
                    <ul class="list-unstyled">
                        <li class="pl-2">
                            <a href="https://www.facebook.com/winchapp1/" target="_blank">
                                <img src="{{asset('/img/icons/facebook_'.$footerImageName.'.png')}}" alt="">
                            </a>
                        </li>
                        <li class="pl-2">
                            <a href="https://www.instagram.com/winchapp1/" target="_blank">
                                <img src="{{asset('/img/icons/instagram_'.$footerImageName.'.png')}}" alt="">
                            </a>
                        </li>
                        <li class="pl-2">
                            <a href="https://www.youtube.com/channel/UCvoFPi3n1q6vAU_6pGJBTpg" target="_blank">
                                <img src="{{asset('/img/icons/youtube_'.$footerImageName.'.png')}}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4">
                <div class="sacend">
                    <h3>@lang('lang.winch_f')</h3>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{url('/')}}">@lang('lang.home_f')</a>
                        </li>
                        <li>
                            <a href="{{url('furniture')}}">@lang('lang.services_f')</a>
                        </li>
                        <li>
                            <a href="{{url('partners')}}">@lang('lang.join_partners')</a>
                        </li>
                        <li>
                            <a href="{{url('become_captain')}}">@lang('lang.join_captin')</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4">
                <div class="sacend">
                    <h3>@lang('lang.about')</h3>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{url('aboutus')}}">@lang('lang.aboutus') </a>
                        </li>
                        <li>
                            <a href="{{url('contactus')}}">@lang('lang.contactus') </a>
                        </li>
                        <li>
                            <a href="{{url('help')}}">@lang('lang.help_f') </a>
                        </li>
                        <li>
                            <a href="{{url('privacy_policy')}}">@lang('lang.privacy_policy')</a>
                        </li>
                        <li>
                            <a href="#">@lang('lang.terms_service') </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4">
                <div class="finel">
                    <h3>@lang('lang.download_f') </h3>
                    <ul class="list-unstyled">
                        <li class="pl-2">
                            <a href="https://apps.apple.com/eg/app/winch-client/id1479411668">
                                <img src="{{asset('/img/icons/appstore_'.$footerImageName.'.png')}}" alt="">
                            </a>
                        </li >
                        <li class="pl-2">
                            <a href="https://play.google.com/store/apps/details?id=com.lodex.winch">
                                <img src="{{asset('/img/icons/playstore_'.$footerImageName.'.png')}}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pl-0 pr-0">
        <p class="text-center end-footer">@lang('lang.copyright')</p>
    </div>

</footer>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/popper.js')}}"></script>
<script src="{{asset('/js/morphext.min.js')}}"></script>
<script src="{{asset('/js/lightslider.min.js')}}"></script>
<script src="{{asset('/js/min.js')}}"></script>


@yield('script')
<!-- Load Facebook SDK for JavaScript -->
</body>
</html>


