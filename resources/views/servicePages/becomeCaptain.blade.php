@extends('masterPage.layout')
@section('content')

    <section class="sec1-twingservice BecomeCaptain">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="content">
                    <h1 class="">@lang('lang.join_to_winch')</h1>
                    <p class="">@lang('lang.sign_up')</p>
                    <div class="box-3 mt d-none d-lg-block">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="mx-auto d-block mb-2" src="{{asset('img/arts/make_extra_money.png')}}" alt="">
                            </div>
                            <div class="col-md-10">
                                <h3 class="">@lang('lang.extra_money')</h3>
                                <p class="p-content">@lang('lang.moor_work')</p>
                            </div>

                        </div>
                    </div>
                    <!--  -->
                    <div class="box-3 d-none d-lg-block">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="mx-auto d-block mb-2" src="{{asset('img/arts/work_when_you_want.png')}}" alt="">
                            </div>
                            <div class="col-md-10 ">
                                <h3 class="">@lang('lang.anytime')</h3>
                                <p class="p-content">@lang('lang.select_time')</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="box-3 d-none d-lg-block">
                        <div class="row">
                            <div class="col-md-2">
                                <img class="mx-auto d-block mb-2" src="{{asset('img/arts/track_earnings.png')}}" alt="">
                            </div>
                            <div class="col-md-10">
                                <h3 class="">@lang('lang.track_earnings')</h3>
                                <p class="p-content">@lang('lang.track_income')</p>
                            </div>

                        </div>
                    </div>
                    <!--  -->

                </div>
            </div>

            @php
                $today = date("Y-m-d H:i:s");
            @endphp

            <div class="col-lg-5 col-md-10  mx-auto">
                <form class="" action="" id="winchForm" method="post">

                    <div class="alert alert-danger" id="devError" >
                        <span id="nameErrMsg" class="error"></span>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" id="successMessage"  style="color: #ffffff;background-color: #aab2de; border-color: #aab2de;"role="alert">
                                @lang('lang.sent_successfully')
                            </div>
                            <h1>@lang('lang.join_to_winch')</h1>
                        </div>
                        <div class="col-6 mx">
                            <input class="btn-block" type="text" name="FirstName" id="FirstName" value="" placeholder="@lang('lang.first_name')" >
                        </div>
                        <div class="col-6">
                            <input class="btn-block" type="text" name="LastName" id="LastName" value="" placeholder="@lang('lang.last_name')" >
                        </div>
                        <div class="col-12">
                            <input class="btn-block" type="email" name="Email" id="Email" value="" placeholder="@lang('lang.email')" >
                            <input  type="hidden" name="Date" id="Date" value="{{$today}}" >
                        </div>
                        <div class="col-12">
                            <input class="btn-block" type="text" name="PhoneNumber" id="PhoneNumber" value="" placeholder="@lang('lang.phone')" >
                        </div>
                        <div class="col-12">
                            <input class="btn-block" type="text" name="CompanyName" id="CompanyName" value="" placeholder="@lang('lang.company_name')" >
                        </div>
                        <div class="col-12">
                            <button class="btn"  type="submit"name="submit" id="submit">
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
                                <img class="mx-auto img-fluid d-block" src="{{asset('img/arts/make_extra_money.png')}}" alt="">
                            </div>
                            <div class="col-10">
                                <h3 class=" text-md-right">@lang('lang.extra_money')</h3>
                                <p class="p-content  text-md-right">@lang('lang.moor_work')</p>
                            </div>

                        </div>
                    </div>
                    <!--  -->
                    <div class="box-3 d-lg-none d-md-block d-sm-block">
                        <div class="row">
                            <div class="col-2">
                                <img class="mx-auto img-fluid d-block" src="{{asset('img/arts/work_when_you_want.png')}}" alt="">
                            </div>
                            <div class="col-10 ">
                                <h3 class="text-md-right">@lang('lang.anytime')</h3>
                                <p class="p-content  text-md-right">@lang('lang.select_time')</p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="box-3 d-lg-none d-md-block d-sm-block">
                        <div class="row">
                            <div class="col-2">
                                <img class="mx-auto img-fluid d-block" src="{{asset('img/arts/track_earnings.png')}}" alt="">
                            </div>
                            <div class="col-10">
                                <h3 class=" text-md-right">@lang('lang.track_earnings')</h3>
                                <p class="p-content  text-md-right">@lang('lang.track_income')</p>
                            </div>

                        </div>
                    </div>
                    <!--  -->

                </div>
            </div>
         </div>
       </div>
     </section>
@endsection

@section('script')

    <?php
    $dataRequier = 'Please enter your Date';
    $nameMin = 'Please enter a first name and a last name with at least 3 letters';
    $emailRequier = 'Please enter your email';
    $numberRequier = 'Please enter your phone number';
    if (App::getLocale() == 'ar') {
        $dataRequier = 'من فضلك ادخل بياناتك';
        $nameMin = 'من فضلك يجب ان يكون الاسم ثلاثة احروف علي الاقل';
        $emailRequier = 'من فضلك ادخل بريدك الإلكتروني';
        $numberRequier = 'من فضلك ادخل رقم هاتفك';
    }
    ?>
    <script>
        $("#devError").hide();
        $("#successMessage").hide();
        $("#winchForm").submit(function (e) {
            e.preventDefault();
            formSubmit();
            //alert("ff");
        })
        function formSubmit(){

            $.ajax({
                url: "https://script.google.com/macros/s/AKfycbz4fouEX3PM7l1guiDe0zFhP9y3iSB9UzVfuOc_jvopWun1cFc/exec",
                type: "get",
                data: $("#winchForm").serialize(),
                success: function (response) {
                    $("#winchForm")[0].reset();
                    // alert("you register success");
                    $("#successMessage").show();
                    $("#devError").fadeOut();
                    return true;

                },

            });
        }

        $(document).ready(function(){
            $('#submit').click(function(){
                var devError = 0;
                var first_name = $('#FirstName').val();
                var last_name = $('#LastName').val();
                var email = $('#Email').val();
                var number = $('#PhoneNumber').val();
                var errMsgHolder = document.getElementById('nameErrMsg');

                if ((first_name == '') && (last_name == '') && (email == '') && (number == '') ||(first_name == '') ||(last_name == '') ||(email == '') ||(number == '')) {
                    devError = 1;
                    errMsgHolder.innerHTML ='{{$dataRequier}}';

                }

                if((first_name.length < 3) || (last_name.length < 3))
                {
                    devError = 1;
                    errMsgHolder.innerHTML = '{{$nameMin}}';

                }
                if ((email == '')) {
                    devError = 1;
                    errMsgHolder.innerHTML = '{{$emailRequier}}';

                }
                if ((number == '')) {
                    devError = 1;
                    errMsgHolder.innerHTML = '{{$numberRequier}}';

                }

                if (devError) {
                    $("#devError").fadeIn();
                    return false;
                }


            });
        });

    </script>

@endsection
