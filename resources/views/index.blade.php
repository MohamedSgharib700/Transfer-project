@extends('masterPage.layout')

  @section('content')
    <header>
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-pause="false">
          <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="{{asset('/img/pickup_bg.jpg')}}" class="d-block img-header w-100" alt="...">
                  <div class="carousel-caption ">
                      <h5>@lang('lang.move') <span id="js-rotating"> @lang('lang.everything_everywhere_everytime')</span></h5>
                      <p><span>@lang('lang.winch') </span>@lang('lang.ds_winch_services')</p>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="{{asset('/img/large_pickup_bg.jpg')}}" class="d-block img-header w-100" alt="...">
                  <div class="carousel-caption ">
                      <h5>@lang('lang.move') <span id="js-rotating2">@lang('lang.everything_everywhere_everytime')</span></h5>
                      <p><span>@lang('lang.winch') </span> @lang('lang.ds_winch_services')</p>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="{{asset('/img/towing_service_bg.jpg')}}" class="d-block img-header w-100" alt="...">
                  <div class="carousel-caption ">
                      <h5>@lang('lang.move') <span id="js-rotating3"> @lang('lang.everything_everywhere_everytime')</span></h5>
                      <p><span>@lang('lang.winch') </span> @lang('lang.ds_winch_services')</p>
                  </div>
              </div>
              <div class="carousel-item">
                  <img src="{{asset('/img/furniture_moving_bg.jpg')}}" class="d-block img-header w-100" alt="...">
                  <div class="carousel-caption ">
                      <h5>@lang('lang.move') <span id="js-rotating4"> @lang('lang.everything_everywhere_everytime')</span></h5>
                      <p><span>@lang('lang.winch') </span> @lang('lang.ds_winch_services')</p>
                  </div>
              </div>
          </div>
      </div>
    </header>
      <section class="sec1">
          <div class="container">
              <div class="row">
                  <div class="col-12 text-center">
                      <h1 class="head-text">@lang('lang.services')</h1>
                      <p class="head-p">@lang('lang.service') <span>@lang('lang.winch')</span> @lang('lang.ds_all_services')</p>
                  </div>
                  <div class="col-md-4">
                      <div class="box-sec1 text-center">
                          <img class="img-fluid" src="{{asset('/img/arts/furniture_moving_services.png')}}" alt="">
                          <h2>@lang('lang.transport_furniture') </h2>
                          <p>@lang('lang.ds_furniture_service')</p>
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="box-sec1 text-center">
                          <img class="img-fluid" src="{{asset('/img/arts/towing_service_services.png')}}" alt="">
                            <h2>@lang('lang.save_cars') </h2>
                            <p>@lang('lang.ds_save_cars')</p>

                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="box-sec1 text-center">
                          <img class="img-fluid" src="{{asset('/img/arts/pickup_truck_services.png')}}" alt="">
                        <h2>@lang('lang.transport_goods') </h2>
                            <p>@lang('lang.ds_transport_goods')</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <section class="sec2 ">
          <div class="container">
              <div class="row">
                  <div class="col-12 text-center">
                      <h1 class="head-text">@lang('lang.some_talk')</h1>
                  </div>

              </div>
              <ul class="text-center myslider" id="lightSlider">
                  <li>
                      <img src="{{asset('img/Clint/1.png')}}" alt="">
                      <h3>@lang('lang.client_name1')</h3>
                      <ul class="list-unstyled">
                          <li> <i class="fa fa-star"></i> </li>
                          <li> <i class="fa fa-star"></i></li>
                          <li> <i class="fa fa-star"></i></li>
                          <li> <i class="fa fa-star"></i></li>
                          <li> <i class="fa fa-star-o"></i></li>
                      </ul>
                      <p>@lang('lang.client_comment1') </p>
                  </li>
                  <li>
                      <img src="{{asset('img/Clint/2.png')}}" alt="">
                      <h3>@lang('lang.client_name2')</h3>
                      <ul class="list-unstyled">
                          <li> <i class="fa fa-star"></i></li>
                          <li> <i class="fa fa-star"></i></li>
                          <li> <i class="fa fa-star"></i></li>
                          <li> <i class="fa fa-star"></i></li>
                          <li> <i class="fa fa-star"></i></li>
                      </ul>
                      <p>@lang('lang.client_comment2')</p>
                  </li>
                  <li>
                      <img src="{{asset('img/Clint/4.png')}}" alt="">
                      <h3>@lang('lang.client_name3')</h3>
                      <ul class="list-unstyled">
                          <li> <i class="fa fa-star"></i></li>
                          <li> <i class="fa fa-star"></i></li>
                          <li> <i class="fa fa-star"></i></li>
                          <li> <i class="fa fa-star"></i></li>
                          <li> <i class="fa fa-star"></i></li>
                      </ul>
                      <p>@lang('lang.client_comment3')</p>
                  </li>
                  <li>
                      <img src="{{asset('img/Clint/5.png')}}" alt="">
                      <h3>@lang('lang.client_name4')</h3>
                      <ul class="list-unstyled">
                          <li> <i class="fa fa-star"></i></li>
                          <li> <i class="fa fa-star"></i></li>
                          <li> <i class="fa fa-star"></i></li>
                          <li> <i class="fa fa-star"></i></li>
                          <li> <i class="fa fa-star"></i></li>
                      </ul>
                      <p>@lang('lang.client_comment4')</p>
                  </li>
                  <li>
                      <img src="{{asset('img/Clint/3.png')}}" alt="">
                      <h3>@lang('lang.client_name5')</h3>
                      <ul class="list-unstyled">
                          <li> <i class="fa fa-star"></i></li>
                          <li> <i class="fa fa-star"></i></li>
                          <li> <i class="fa fa-star"></i></li>
                          <li> <i class="fa fa-star"></i></li>
                          <li> <i class="fa fa-star"></i></li>
                      </ul>
                      <p>@lang('lang.client_comment5')</p>
                  </li>
              </ul>
          </div>
      </section>
      <!-- Show In xl Screeen To Md Screen -->
      <section class="sec3 d-none d-xl-block d-lg-block d-md-block ">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <h1 class="head-text text-center">@lang('lang.why_winch')</h1>
                  </div>
                  <div class="col-12">
                      <div class="box">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="info">
                                      <h2 class="">@lang('lang.why_winch_answer1')</h2>
                                      <p>@lang('lang.why_winch_answer2')</p>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <img class="img-fluid" src="{{asset('/img/arts/arrive_when_you_want.png')}}" alt="">
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="box">
                          <div class="row">
                              <div class="col-md-6">
                                  <img class="img-fluid" src="{{asset('/img/arts/your_stuff_is_safe.png')}}" alt="">
                              </div>
                              <div class="col-md-6">

                                  <div class="info">
                                      <h2 class=""> @lang('lang.titel_safe') </h2>
                                      <p> <span> @lang('lang.winch')</span> @lang('lang.stuff_safe')</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="box">
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="info">
                                      <h2 class="">@lang('lang.easy_tracking')</h2>
                                      <p>@lang('lang.ds_tracking')</p>
                                  </div>
                              </div>
                              <div class="col-md-6">
                                  <img class="img-fluid" src="{{asset('/img/arts/easy_traffic.png')}}" alt="">
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="box">
                          <div class="row">
                              <div class="col-md-6">
                                  <img class="img-fluid" src="{{asset('/img/arts/share_with_care.png')}}" alt="">
                              </div>
                              <div class="col-md-6">

                                  <div class="info">
                                      <h2 class="">@lang('lang.share_trip') </h2>
                                      <p>@lang('lang.da_share_trip')</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>

      </section>
      <!--Show In Sm Screen To xs Screen  -->
      <section class="sec3 d-lg-none d-xl-none d-md-none d-sm-block d-xs-block">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <h1 class="head-text text-center">@lang('lang.why_winch')</h1>
                  </div>
                  <div class="col-12">
                      <div class="box">
                          <div class="row">
                              <div class="col-md-6">
                                  <img class="img-fluid" src="{{asset('/img/arts/arrive_when_you_want.png')}}" alt="">
                              </div>
                              <div class="col-md-6">
                                  <div class="info">
                                      <h2 class="">@lang('lang.why_winch_answer1')</h2>
                                      <p>@lang('lang.why_winch_answer2') </p>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="box">
                          <div class="row">
                              <div class="col-md-6">
                                  <img class="img-fluid" src="{{asset('/img/arts/your_stuff_is_safe.png')}}" alt="">
                              </div>
                              <div class="col-md-6">
                                  <div class="info">
                                      <h2 class="">@lang('lang.titel_safe')</h2>
                                      <p><span> @lang('lang.winch')</span>@lang('lang.stuff_safe')</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="box">
                          <div class="row">
                              <div class="col-md-6">
                                  <img class="img-fluid" src="{{asset('/img/arts/easy_traffic.png')}}" alt="">
                              </div>
                              <div class="col-md-6">
                                  <div class="info">
                                      <h2 class="">@lang('lang.easy_tracking')</h2>
                                      <p>@lang('lang.ds_tracking')</p>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </div>
                  <div class="col-12">
                      <div class="box">
                          <div class="row">
                              <div class="col-md-6">
                                  <img class="img-fluid" src="{{asset('/img/arts/share_with_care.png')}}" alt="">
                              </div>
                              <div class="col-md-6">

                                  <div class="info">
                                      <h2 class="">@lang('lang.share_trip')</h2>
                                      <p>@lang('lang.da_share_trip')</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>

      </section>
      <!-- show in lg Screen Md Screen -->
      <section class="sec4 d-none d-xl-block d-lg-block">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <h1 class="head-text">@lang('lang.how_use_winch')</h1>
                  </div>
                  <div class="col-lg-6">
                      <ul class="list-sec4">
                          <li id="tab1" class="active">
                              <div class="row">
                                  <div class="col-2">
                                      <span>1</span>
                                  </div>
                                  <div class="col-10">
                                      <h2>@lang('lang.answer1')</h2>
                                      <p>@lang('lang.ds_answer1')</p>
                                  </div>
                              </div>
                          </li>
                          <li id="tab2" class="">
                              <div class="row">
                                  <div class="col-2">
                                      <span>2</span>
                                  </div>
                                  <div class="col-10">
                                      <h2>@lang('lang.answer2')</h2>
                                      <p>@lang('lang.ds_answer2')</p>
                                  </div>
                              </div>
                          </li>
                          <li id="tab3" class="">
                              <div class="row">
                                  <div class="col-2">
                                      <span>3</span>
                                  </div>
                                  <div class="col-10">
                                      <h2> @lang('lang.answer3')</h2>
                                      <p>@lang('lang.ds_answer3')</p>
                                  </div>
                              </div>
                          </li>
                          <li id="tab4" class="">
                              <div class="row">
                                  <div class="col-2">
                                      <span>4</span>
                                  </div>
                                  <div class="col-10">
                                      <h2>@lang('lang.answer4')</h2>
                                      <p>@lang('lang.ds_answer4')</p>
                                  </div>
                              </div>
                          </li>
                          <li id="tab5" class="">
                              <div class="row">
                                  <div class="col-2">
                                      <span>5</span>
                                  </div>
                                  <div class="col-10">
                                      <h2>@lang('lang.answer5')</h2>
                                      <p>@lang('lang.ds_answer5')</p>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
                  <div class="col-lg-6">
                      <div id="tab1-contetnt" class="my-content">
                          <img class="img img-fluid" src="{{asset('/img/step_01.gif')}}" alt="">
                      </div>
                      <div id="tab2-contetnt" class="my-content">
                          <img class="img img-fluid" src="{{asset('/img/step_02.gif')}}" alt="">
                      </div>
                      <div id="tab3-contetnt" class="my-content">
                          <img class="img img-fluid" src="{{asset('/img/step_03.gif')}}" alt="">
                      </div>
                      <div id="tab4-contetnt" class="my-content">
                          <img class="img img-fluid" src="{{asset('/img/step_04.gif')}}" alt="">
                      </div>
                      <div id="tab5-contetnt" class="my-content">
                          <img class="img img-fluid" src="{{asset('/img/step_05.gif')}}" alt="">
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Show In Sm Screen  -->
      <section class="sec4  d-block d-xl-none d-lg-none">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <h1 class="head-text">@lang('lang.how_use_winch')</h1>
                  </div>
                  <div class="col-lg-12">
                      <ul class="list-unstyled list-sec4">
                          <div class="row">

                              <li id="tab6" class="col active ">
                                  <span class="sm-screen">1</span>
                              </li>
                              <li id="tab7" class="col">
                                  <span class="sm-screen">2</span>
                              </li>
                              <li id="tab8" class="col">
                                  <span class="sm-screen">3</span>
                              </li>
                              <li id="tab9" class="col">
                                  <span class="sm-screen">4</span>
                              </li>
                              <li id="tab10" class="col">
                                  <span class="sm-screen">5</span>
                              </li>
                          </div>

                      </ul>
                  </div>
                  <div class="col-lg-6">
                      <div id="tab6-contetnte" class=" my-contente">
                          <div class="row">
                              <div class="col-12 text-center">
                                  <h2 class="h2-content">@lang('lang.answer1')</h2>
                                  <p class="p-content">@lang('lang.ds_answer1')</p>
                              </div>
                          </div>
                          <img class="img img-fluid" src="{{asset('/img/step_01.gif')}}" alt="">
                      </div>
                      <div id="tab7-contetnte" class=" my-contente">
                          <div class="row">
                              <div class="col-12 text-center">
                                  <h2 class="h2-content">@lang('lang.answer2')</h2>
                                  <p class="p-content">@lang('lang.ds_answer2')</p>
                              </div>
                          </div>
                          <img class="img img-fluid" src="{{asset('/img/step_02.gif')}}" alt="">
                      </div>
                      <!--  -->
                      <div id="tab8-contetnte" class=" my-contente">
                          <div class="row">
                              <div class="col-12 text-center">
                                  <h2 class="h2-content">@lang('lang.answer3')</h2>
                                  <p class="p-content">@lang('lang.ds_answer3')</p>
                              </div>
                          </div>
                          <img class="img img-fluid" src="{{asset('/img/step_03.gif')}}" alt="">
                      </div>
                      <!--  -->
                      <div id="tab9-contetnte" class=" my-contente">
                          <div class="row">
                              <div class="col-12 text-center">
                                  <h2 class="h2-content">@lang('lang.answer4')</h2>
                                  <p class="p-content">@lang('lang.ds_answer4')</p>
                              </div>
                          </div>
                          <img class="img img-fluid" src="{{asset('/img/step_04.gif')}}" alt="">
                      </div>
                      <!--  -->
                      <div id="tab10-contetnte" class=" my-contente">
                          <div class="row">
                              <div class="col-12 text-center">
                                  <h2 class="h2-content">@lang('lang.answer5')</h2>
                                  <p class="p-content">@lang('lang.ds_answer5')</p>
                              </div>
                          </div>
                          <img class="img img-fluid" src="{{asset('/img/step_05.gif')}}" alt="">
                      </div>
                  </div>


              </div>
          </div>
      </section>
      <!--  -->



      <section class="sec5 text-center">
          <div class="container">
              <div class="row">
                  <div class="col-12">
                      <img class="big-img img-fluid" src="{{asset('/img/arts/cars_background.png')}}" alt="">
                  </div>
                  <div class="col-12">
                      <h3 class="head-text">@lang('lang.book_winch')</h3>
                      <p><span>@lang('lang.winch') </span> @lang('lang.ds_book_winch')</p>
                      <a href="https://apps.apple.com/eg/app/winch-client/id1479411668">
                          <img class="img-download" src="{{asset('/img/icons/appstore_light.png')}}" alt="">
                      </a>
                      <a href="https://play.google.com/store/apps/details?id=com.lodex.winch">
                          <img class="img-download" src="{{asset('/img/icons/playstore_light.png')}}" alt="">
                      </a>
                  </div>

              </div>
          </div>
      </section>
      <section class="sec6">
          <div class="container">
              <div class="row">
                  <div class="col-xl-6 col-md-12 ">
                      <div class="content ">
                          <h2>@lang('lang.join_winch_team')  </h2>
                          <p>@lang('lang.ds_join_winch')</p>
                          <a class="btn" href="{{url('become_captain')}}">
                              @lang('lang.join_link')
                              <img src="{{asset('/img/icons/next.png')}}" alt="">
                          </a>
                      </div>
                  </div>
                  <!-- <div class="col-md-6  d-lg-block d-md-block d-none">
                    <div class="background"></div>
                  </div> -->
              </div>
          </div>
      </section>

  @endsection
@section('script')

    <div id="fb-root"></div>
    <?php
    $facebookWidjetLanguage = 'en_US';
    if (App::getLocale() == 'ar') {
        $facebookWidjetLanguage = 'ar_AR';
    }
    ?>


    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v4.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/{{$facebookWidjetLanguage}}/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your customer chat code -->
    <div class="fb-customerchat"
         attribution=setup_tool
         page_id="2260511990935432">
    </div>

@endsection
