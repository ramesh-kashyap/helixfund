<!DOCTYPE html>
<html>

<head>
    <!-- Google Tag Manager -->


    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <title>{{siteName()}}</title>
    <base href="{{asset('')}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-iconf9e3.png?v=1.1">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32f9e3.png?v=1.1">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16f9e3.png?v=1.1">
    <link rel="manifest" href="/favicons/site.webmanifest?v=1.1">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg?v=1.0" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#ffffff">

    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">

    <link rel="stylesheet" href="{{asset('')}}assets/css/libs.css">
    <link rel="stylesheet" href="{{asset('')}}assets/css/app54f9.css?v=1.009995">
    <link rel="stylesheet" href="{{asset('')}}assets/css/customb361.css?v=1.000099999">
    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]-->

</head>

<body>
 
    <div class="copy-success">
        <svg>
            <use xlink:href="/assets/img/sprite.svg#check"></use>
        </svg>
    </div>
    <div class="wrapper">
        <section class="sign">
            <div class="container"> <a class="sign-logo" href="/"><img style="    width: 200px;" src="/assets/img/Clogo.png?v=1.0"
                        alt="logo" /></a>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3">
                        <form action="{{ route('login') }}" method="POST" name="login_frm">
                            {{ csrf_field() }}
                            <div class="sign-box">
                                <div class="sign-img"> <img src="/assets/img/contacts-form-img.png"
                                        alt="contacts-form-img" /></div>
                                <div class="sign-title">Sign IN<p>Welcome to {{siteName()}}</p>
                                </div>
                                <div class="contacts-form__inputs"><label
                                        class="contacts-form__input contacts-form__input_icon"><input type="text"
                                            name="username" value="" placeholder="Your Login Id"><svg>
                                            <use xlink:href="/assets/img/sprite.svg#user"></use>
                                        </svg></label>
                                        
                                        <label
                                        class="contacts-form__input contacts-form__input_icon"><input type="password"
                                            name="password" value="" placeholder="Your Password"><svg>
                                            <use xlink:href="/assets/img/sprite.svg#pass"></use>
                                        </svg></label>
                                        
                                          <label
                                        class="contacts-form__input contacts-form__input_icon"><input type="text"
                                            name="captcha" value="" placeholder="Enter Captcha"><svg>
                                            <use xlink:href="/assets/img/sprite.svg#pass"></use>
                                        </svg></label>
                                        
                                        <label
                                        class="contacts-form__input contacts-form__input_icon">
                                              @php
                                                $captcha = getCustomCaptcha($height = 46, $width = '100%', $bgcolor = '#003');
                                                @endphp 

                                              @php echo  $captcha @endphp
                                            @if(reCaptcha())
                                            @php echo reCaptcha(); @endphp
                                            @endif
                                            
                                        </label>
                                        
                                        
                                        <input name="__Cert" value="dbfcbcc5" type="hidden"></div><a
                                    class="sign-link" href="/forgot-password">Forgot your password?</a><button
                                    name="login_frm_btn" type="submit" class="main-btn main-btn_orange main-btn_m">Sign
                                    IN</button>
                                <div class="sign-bot">Don't you have an account yet?<a href="register"> Sign Up</a></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="sign-footer">Copyright © 2023 etriton.co All rights reserved</div>
        </section>
    </div>
@include('partials.notify')
    <script src="{{asset('')}}assets/js/libsb883.js?v=1.01"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<script src="{{asset('')}}assets/js/app437f.js?v=1.000991"></script>

    <script>
        var images = document.getElementsByTagName('img');
        for (var i = 0; i < images.length; i++) {
            var imageUrl = images[i].src;
            images[i].src = imageUrl + '?v=1.0';
        }
    </script>


</body>

</html>
