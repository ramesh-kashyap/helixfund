<!DOCTYPE html>
<html>

<head>
    <!-- Google Tag Manager -->


    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <title>Dashboard | {{ siteName() }}</title>
    <base href="{{ asset('') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-iconf9e3.png?v=1.1">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32f9e3.png?v=1.1">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16f9e3.png?v=1.1">
    <link rel="manifest" href="/favicons/site.webmanifest?v=1.1">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg?v=1.0" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#603cba">
    <meta name="theme-color" content="#ffffff">
    
  <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
  
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="ie=edge" http-equiv="x-ua-compatible">

    <link rel="stylesheet" href="{{ asset('') }}assets/css/libs.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/app54f9.css?v=1.009995">
    <link rel="stylesheet" href="{{ asset('') }}assets/css/customb361.css?v=1.000099999">
    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]-->

</head>
<style>
    .justify-content-center {
      -ms-flex-pack: center!important;
      justify-content: center!important;
  }.pagination {
      display: -ms-flexbox;
      display: flex;
      padding-left: 0;
      list-style: none;
      border-radius: 0.25rem;
  }
  
  .pagination .page-item .page-link {
      -webkit-transition: all .3s linear;
      transition: all .3s linear;
      outline: 0;
      border: 0;
      background-color: transparent;
      font-size: .9rem;
      color: black;
  }
  
  .page-item.disabled .page-link {
      color: #6c757d;
      pointer-events: none;
      cursor: auto;
      background-color: #fff;
      border-color: #dee2e6;
  }
  .page-item:first-child .page-link {
      margin-left: 0;
      border-top-left-radius: 0.25rem;
      border-bottom-left-radius: 0.25rem;
  }
  .page-link:not(:disabled):not(.disabled) {
      cursor: pointer;
  }
  .pagination .page-item .page-link {
      -webkit-transition: all .3s linear;
      transition: all .3s linear;
      outline: 0;
      border: 0;
      background-color: transparent;
      font-size: .9rem;
      color: #999;
      font-weight: bold;
  }
  .pagination .page-item.active .page-link {
      -webkit-transition: all .2s linear;
      transition: all .2s linear;
      border-radius: 0.125rem;
      background-color: #2bbbad;
      color: #fff;
  }
  
  .pagination .page-item .page-link {
      -webkit-transition: all .3s linear;
      transition: all .3s linear;
      outline: 0;
      border: 0;
      background-color: transparent;
      font-size: .9rem;
      color: black;
  }
  .page-link {
      border: none!important;
  }
  .page-link {
      position: relative;
      display: block;
      padding: 0.5rem 0.75rem;
      margin-left: -1px;
      line-height: 1.25;
      color: #007bff;
      background-color: #fff;
      border: 1px solid #dee2e6;
  }
  .page-link {
      border: none!important;
  }
          </style>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NTC48LN4" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div class="copy-success">
        <svg>
            <use xlink:href="/assets/img/sprite.svg#check"></use>
        </svg>
    </div>
    <style>
        .cab-head-info:after {
            background-image: url(/assets/img/cab-head-info-3.png);
        }
    </style>
    <div class="wrapper">
        <div class="cab">
            <div class="cab-head">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cab-head-top">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-4 d-flex align-items-center justify-content-between"><a
                                            class="cab-logo" href="/"><img style="width: 180px;" src="/assets/img/Clogo.png?v=1.0"
                                                alt="cab-logo" /></a>
                                        <div class="cab-burger"><span> </span></div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="cab-head-nav">
                                            <style>
                                                .header-lang__hide table td div {
                                                    background: rgb(194 149 109);
                                                    margin: 0 5px;
                                                }

                                                .header-lang__hide table td.inactive div {
                                                    padding: 2px 10px;
                                                }

                                                .header-lang__hide table td.empty {
                                                    background: none;
                                                }

                                                .header-lang__hide table a {
                                                    color: #ffffff;
                                                    text-decoration: none;
                                                    transition: none;
                                                    padding: 2px 10px;
                                                }

                                                .header-lang__hide table td div.active,
                                                .header-lang__hide table td div:hover {
                                                    background: #ffffff;
                                                    color: #000;
                                                }

                                                .header-lang__hide table td div.active a,
                                                .header-lang__hide table td div:hover a {
                                                    color: #000;
                                                    opacity: 1;
                                                }

                                                .header-lang:hover .header-lang__hide table td.inactive {
                                                    opacity: 0.4;
                                                    pointer-events: none !important;
                                                    cursor: default;
                                                }

                                                .header-lang__hide table td.inactive div:hover {
                                                    background: rgb(194 149 109);
                                                    color: #ffffff;
                                                }
                                            </style>
                                            <div class="header-lang">
                                                <div class="header-lang__arrow">
                                                    <svg>
                                                        <use xlink:href="/assets/img/sprite.svg#arrow"></use>
                                                    </svg>
                                                </div>
                                                <div class="header-lang__text">
                                                    English
                                                </div>
                                                <div class="header-lang__hide">
                                                    <table style="
    color: #fff;">
                                                        {{-- <tbody>
                                                            q<tr>

                                                                <td>
                                                                    <div class="active"><a
                                                                            href="">English</a></div>
                                                                </td>

                                                               
                                                            </tr>
                                                        </tbody> --}}
                                                    </table>
                                                </div>
                                            </div>


                                            <div class="cab-hero">
                                                <div class="cab-hero__info">
                                                    <h3>welcome back,</h3>
                                                    <p>{{Auth::user()->name}}</p>
                                                </div><a class="cab-hero__out" ref="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"
                                                    style="color: #ffffff;">Logout<img src="/assets/img/logout.svg"
                                                        alt="logout" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="page-bread"> <a href="user/dashboard">
                                            <svg>
                                                <use xlink:href="/assets/img/sprite.svg#arrow"></use>
                                            </svg>home</a><a href="/">
                                            <svg>
                                                <use xlink:href="/assets/img/sprite.svg#arrow"></use>
                                            </svg>Dashboard</a></div>
                                    <div class="cab-head-title">
                                        <h3>Dashboard<span>:</span><img src="/assets/img/cab-title-1.svg"
                                                alt="cab-title-1" />
                                        </h3>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="cab-head-total">
                                        <h3>Total account balance</h3>
                                        <p> <sup>$</sup>{{ number_format(Auth::user()->available_balance(), 2) }}</p>
                                       
                                    </div>
                                </div>
                            </div>

                          <br>
                          

                        </div>
                        {{-- <div class="col-lg-3">
                            <div class="cab-head-info">
                                <h3>When reinvesting from the balance</h3>
                                <p> <span style="color:#E7BF98;">+ 2% </span>to the deposit body</p>
                            </div>
                        </div> --}}
                    </div>

                    <div class="cab-menu">
                        <div class="cab-menu__list">

                            <a class="active" id="dashboard" href="{{route('user.dashboard')}}">
                                <svg>
                                    <use xlink:href="/assets/img/sprite.svg#cab-menu-1"></use>
                                </svg>Dashboard
                            </a>
                            <a id="invest" href="{{route('user.invest')}}">
                                <svg>
                                    <use xlink:href="/assets/img/sprite.svg#cab-menu-2"></use>
                                </svg>Make Desposit
                            </a>
                            <a id="Withdraw" href="{{route('user.Withdraw')}}">
                                <svg>
                                    <use xlink:href="/assets/img/sprite.svg#cab-menu-3"></use>
                                </svg>Withdrawal
                            </a>
                            <a id="DepositHistory" href="{{route('user.DepositHistory')}}">
                                <svg>
                                    <use xlink:href="/assets/img/sprite.svg#cab-menu-4"></use>
                                </svg>Deposits
                            </a>
                            <a id="roi-bonus"  href="{{route('user.roi-bonus')}}">
                                <svg>
                                    <use xlink:href="/assets/img/sprite.svg#cab-menu-5"></use>
                                </svg>Operations
                            </a>
                            <a id="referral-team" href="{{route('user.referral-team')}}">
                                <svg>
                                    <use xlink:href="/assets/img/sprite.svg#cab-menu-6"></use>
                                </svg>Referrals
                            </a>
                            <a id="profile"  href="{{route('user.profile')}}">
                                <svg>
                                    <use xlink:href="/assets/img/sprite.svg#cab-menu-7"></use>
                                </svg>Settings
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            class="d-none">
                            @csrf
                        </form>
                            <a   href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                                <svg>
                                    <use xlink:href="/assets/img/sprite.svg#cab-menu-7"></use>
                                </svg>Logout
                            </a>

                           
                        </div>
                       
                    </div>
                </div>
            </div>

            <style>
                .cab-head-btns__lounchpad .main-btn {
                    background: #975d34;
                    background: -moz- oldlinear-gradient(259deg, #975d34 11%, #bf835a 79%);
                    background: linear-gradient(191deg, #975d34 11%, #bf835a 79%);
                }

                .cab-head-btns__lounchpad .main-btn:hover {
                    background: -moz- oldlinear-gradient(10deg, #bf835a 11%, #975d34 79%);
                    background: linear-gradient(80deg, #bf835a 11%, #975d34 79%);
                }

                .cab-menu__bounty i {
                    width: 8px;
                    height: 8px;
                    position: absolute;
                    border-radius: 50%;
                    background-color: #f67942;
                    -webkit-transition: all 0.3s ease;
                    transition: all 0.3s ease;
                    left: -17px;
                    margin-top: 6px;
                    -webkit-animation: fading 1s linear 0s infinite normal;
                    animation: fading 1s linear 0s infinite normal;
                }

                @media (max-width: 767.98px) {
                    .cab-menu__bounty i {
                        left: 56px;
                    }
                }

                @media (min-width: 768px) {
                    .cab-menu__bounty.active i {
                        background: #fff;
                    }
                }

                @-webkit-keyframes fading {

                    0%,
                    100% {
                        opacity: 0;
                    }

                    50% {
                        opacity: 1;
                    }
                }

                @keyframes fading {

                    0%,
                    100% {
                        opacity: 0;
                    }

                    50% {
                        opacity: 1;
                    }
                }
            </style>
            <script src="{{ asset('') }}assets/js/libsb883.js?v=1.01"></script>
            <link rel="stylesheet" href="/assets/more.css?1703238682">
            <script src="assets/bonus/more.js?1703238682"></script>