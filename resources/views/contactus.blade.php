@extends('masterPage.layout')
@section('content')

    <section class="sec1-twingservice About">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="content">
                        <h1 class="">@lang('lang.title_contact')</h1>
                        <p class="">@lang('lang.desc_contact')</p>
                        <div class="box-3 mt d-none d-xl-block d-lg-block">
                            <div class="row">
                                <div class="col-md-2">
                                    <img class="mx-auto d-block" src="{{asset('img/arts/our_office.png')}}" alt="">
                                </div>
                                <div class="col-md-10">
                                    <h3 class="">@lang('lang.our_office')</h3>
                                    <p class="p-content ">@lang('lang.desc_office1') <br/>@lang('lang.desc_office2')
                                        <br/> <a class="vist" href="https://lodex-solutions.com/"
                                                 target="_blank">@lang('lang.desc_office3')</a></p>

                                </div>

                            </div>
                        </div>
                        <!--  -->
                        <div class="box-3 d-none d-xl-block d-lg-block">
                            <div class="row">
                                <div class="col-md-2">
                                    <img class="mx-auto d-block" src="{{asset('img/arts/email_us.png')}}" alt="">
                                </div>
                                <div class="col-md-10 ">
                                    <h3 class="">@lang('lang.mail_us')</h3>
                                    <p class="p-content">@lang('lang.desc_mail_us') <a class="email"
                                                                                       href="mailto: info@winch.com">@lang('lang.mail')</a>
                                        <br/>@lang('lang.or_register')</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-5 col-md-10  mx-auto">

                    <form id="contactForm" method="post" action="{{url('sendemail')}}">
                        @csrf
                        <div class="alert alert-danger" id="devError" style="display: none">
                            <span id="nameErrMsg" class="error"></span>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success" id="successMessage"
                                     style="color: #ffffff;background-color: #aab2de; border-color: #aab2de;"
                                     role="alert">
                                    @lang('lang.send_successfully')
                                </div>
                                <h1>@lang('lang.here_help')</h1>
                            </div>
                            <div class="col-6 mx">
                                <input class="btn-block" type="text" name="first_name" id="first_name"
                                       placeholder="@lang('lang.first_name')">
                            </div>
                            <div class="col-6">
                                <input class="btn-block" type="text" name="last_name" id="last_name"
                                       placeholder="@lang('lang.last_name')">
                            </div>
                            <div class="col-12">
                                <input class="btn-block" type="email" name="email" id="email"
                                       placeholder="@lang('lang.email')">
                            </div>
                            <div class="col-12">
                                <textarea class="btn-block" name="message" id="message" rows="8" cols="80"
                                          placeholder="@lang('lang.message')"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn" type="submit" name="submit" id="submit">
                                    @lang('lang.send_button')
                                    <img src="{{asset('img/icons/next.png')}}" alt="">
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="partners2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 ">
                    <div class="content content2">
                        <div class="box-3 mt d-lg-none d-md-block d-sm-block">
                            <div class="row">
                                <div class="col-2">
                                    <img class="mx-auto img-fluid d-block" src="{{asset('img/arts/our_office.png')}}"
                                         alt="">
                                </div>
                                <div class="col-10">
                                    <h3 class=" text-md-right">@lang('lang.our_office')</h3>
                                    <p class="p-content  text-md-right">@lang('lang.desc_office1')
                                        .@lang('lang.desc_office1')</p>
                                </div>

                            </div>
                        </div>
                        <!--  -->
                        <div class="box-3 d-lg-none d-md-block d-sm-block">
                            <div class="row">
                                <div class="col-2">
                                    <img class="mx-auto img-fluid d-block" src="{{asset('img/arts/email_us.png')}}"
                                         alt="">
                                </div>
                                <div class="col-10 ">
                                    <h3 class="text-md-right">@lang('lang.mail_us')</h3>
                                    <p class="p-content  text-md-right">@lang('lang.desc_mail_us')<a class="email"
                                                                                                     href="mailto: info@winch.com">info@winch.com</a>
                                        <br/>@lang('lang.or_register')</p>
                                </div>
                            </div>
                        </div>
                        <!--  -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="sec1-about">
      <div class="container">
        <div class="row">
            <div class="col-md-6">
              <div class="box mb-sm-5">
                <div class="row">
                  <div class="col-4">
                    <img class="img-fluid" src="img/arts/about_us.png" alt="">
                  </div>
                  <div class="col-8">
                    <h1>About Us</h1>
                    <p>WINCH is leading the logistics technology in Egypt. From furniture to goods to cars, We move it all. We offer hassle free, cheaper & safermoving service.</p>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-6">
              <div class="box mb-sm-5">
                <div class="row">
                  <div class="col-4">
                    <img class="img-fluid" src="img/arts/our_mission.png" alt="">
                  </div>
                  <div class="col-8">
                    <h1>Our Mission</h1>
                    <p>WINCH is set to change the logistic services in Egypt. changing every step, From finding a service, calculating the cost, tracking the trip & providing a quality service.</p>
                  </div>
                </div>
              </div>
            </div>

        </div>

      </div>
      <div class="sec1">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="head-text">Our Values</h1>

          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box-sec1 mb-md-5  mb-sm-5 text-center">
              <img class="img-fluid" src="img/arts/safety.png" alt="">
              <h2>Safety</h2>
              <p>Winch takes serious measuresto insure the safety of youritems like wrapping & packingto insuring items.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box-sec1 mb-md-5  mb-sm-5 text-center">
              <img class="img-fluid" src="img/arts/transparency.png" alt="">
              <h2>Transparency</h2>
              <p>We provide all the information like driver details as well astrip details and estimationcosts and delivery.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box-sec1 mb-md-5  mb-sm-5 text-center">
              <img class="img-fluid" src="img/arts/flexibility.png" alt="">
              <h2>Flexibility</h2>
              <p>We offer trip scheduling options, micro services and multiple payment options to satisfyevery need.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="box-sec1 mb-md-5  mb-sm-5 text-center">
              <img class="img-fluid" src="img/arts/competitive_pricing.png" alt="">
              <h2>Competitive Pricing</h2>
              <p>Offering a reliable, fast service with a competitive pricing is ourtop priority for winch.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section> -->



@endsection
@section('script')

    <?php
    $dataRequier = 'Please enter your Date';
    $nameMin = 'Please enter a first name and a last name with at least 3 letters';
    $emailRequier = 'Please enter your email';
    $messageRequier = 'Please enter your message';
    if (App::getLocale() == 'ar') {
        $dataRequier = 'من فضلك ادخل بياناتك';
        $nameMin = 'من فضلك يجب ان يكون الاسم ثلاثة احروف علي الاقل';
        $emailRequier = 'من فضلك ادخل بريدك الإلكتروني';
        $messageRequier = 'من فضلك ادخل رسالتك';
    }
    ?>

    <script>


        // $("#devError").hide();
        $("#successMessage").hide();
        $("#contactForm").submit(function (e) {
            e.preventDefault();
            formSubmit();
        })

        function formSubmit() {

            $.ajax({
                url: "{{url('sendemail')}}",
                type: "post",
                data: $("#contactForm").serialize() + "&submit=submit",
                success: function (response) {
                    $("#contactForm")[0].reset();
                    $("#successMessage").show();
                    $("#devError").fadeOut();
                    return true;
                },

            });
        }


        $(document).ready(function () {
            $('#submit').click(function () {
                var devError = 0;
                var devErrorMessage = '';
                var first_name = $('#first_name').val();
                var last_name = $('#last_name').val();
                var email = $('#email').val();
                var message = $('#message').val();
                var errMsgHolder = document.getElementById('nameErrMsg');

                if ((first_name == '') && (last_name == '') && (email == '') && (message == '') || (first_name == '') || (last_name == '') || (email == '') || (message == '')) {
                    devError = 1;
                    devErrorMessage = '{{$dataRequier}}';
                }

                if ((first_name.length < 3) || (last_name.length < 3)) {
                    devError = 1;
                    devErrorMessage = '{{$nameMin}}';
                }
                if ((email == '')) {
                    devError = 1;
                    devErrorMessage = '{{$emailRequier}}';
                }
                if ((message == '')) {
                    devError = 1;
                    devErrorMessage = '{{$messageRequier}}';
                }

                if (devError) {
                    $("#devError").fadeIn();
                    errMsgHolder.innerHTML = devErrorMessage;
                    return false;
                }

            });
        });


    </script>

@endsection

