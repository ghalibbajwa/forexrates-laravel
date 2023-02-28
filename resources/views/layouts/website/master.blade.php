<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/cuex/default/{{url('/')}} by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Oct 2022 07:49:10 GMT -->

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{url('')}}/website_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('')}}/website_assets/css/flaticon.css">
    <link rel="stylesheet" href="{{url('')}}/website_assets/css/remixicon.css">
    <link rel="stylesheet" href="{{url('')}}/website_assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('')}}/website_assets/css/odometer.min.css">
    <link rel="stylesheet" href="{{url('')}}/website_assets/css/fancybox.css">
    <link rel="stylesheet" href="{{url('')}}/website_assets/css/aos.css">
    <link rel="stylesheet" href="{{url('')}}/website_assets/css/style.css">
    <link rel="stylesheet" href="{{url('')}}/website_assets/css/responsive.css">
    <link rel="stylesheet" href="{{url('')}}/website_assets/css/dark-theme.css">
    <link rel="stylesheet" href="{{url('')}}/website_assets/apexchat/apexcharts.css">
    <title>Forexrates - Forex Exchange</title>
    <link rel="icon" type="image/png" href="{{url('')}}/website_assets/img/favicon.png">
    <style>
    .nav-link {
        display: block;
        padding: 0.5rem 1rem;
        color: #a3b30a !important;
        text-decoration: none;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
        }
        a.nav-link.sub-header {
            font-size: 12px !important;
        }
        input,select,textarea
            {
                width: 100%;
                height: 48px;
                border-radius: 10px;
                border: 1px solid rgba(0, 0, 0, 0.2);
                background-color: transparent;
                padding: 10px 15px;
            }
            .box {
                border-bottom-color: #000000;
                border-bottom-style: solid;
                border-bottom-width: 1px;
                border-top-color: #000000;
                border-top-style: solid;
                border-top-width: 1px;
                border-left-color: #000000;
                border-left-style: solid;
                border-left-width: 1px;
                border-right-color: #000000;
                border-right-style: solid;
                border-right-width: 1px;
            }
            .form-group label
            {
                margin: 0 0 10px;
            }
            .form-group
            {
                margin-bottom: 15px;
            }
            .exchange-table-wrap .exchange-table table tbody tr td{
                font-size: 10px;
                padding: 3px !important;
            }
            .header-wrap .navbar .navbar-nav .nav-item a{
                color: #000000a8 !important;
            }
            .header-wrap .navbar .navbar-nav .nav-item a{
                font-size: 13px !important;

            }
            /* Ticker Csss */
          
            /* (A) FIXED WRAPPER */
            .hwrap {
            overflow: hidden; /* HIDE SCROLL BAR */
            }
            
            /* (B) MOVING TICKER WRAPPER */
            .hmove { 
                display: flex;
                color: #fff5f5bd;
            }

            /* (C) ITEMS - INTO A LONG HORIZONTAL ROW */
            .hitem {
            flex-shrink: 0;
            height: 20px;
            margin-left: 20px;
            box-sizing: border-box;
            text-align: center;
            }
            
            /* (D) ANIMATION - MOVE ITEMS FROM RIGHT TO LEFT */
            /* 4 ITEMS -400%, CHANGE THIS IF YOU ADD/REMOVE ITEMS */
            @keyframes tickerh {
            0% { transform: translate3d(100%, 0, 0); }
            100% { transform: translate3d(-400%, 0, 0); }
            }
            .hmove { animation: tickerh linear 55s infinite; }
            .hmove:hover { animation-play-state: paused; }
            /* End Ticker */
            /* width */
            ::-webkit-scrollbar {
            width: 5px;
            height: 3px;
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
            background: rgb(191, 231, 79); 
            border-radius: 4px;
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
            background: #b30000; 
            }

            .scroll {
                white-space: nowrap !important;
                overflow-x: auto !important; 
                -webkit-overflow-scrolling: touch !important;
                display: block !important;
                overflow-x: scroll;
                white-space: nowrap;
                flex-direction: row;
            }
            li.nav-item{
                display: inline-block;
            }
            .conver-box-st{
                padding-left: 60px;
            }
            .conver-amount-st{
                padding-right: 100px;
            }
            .bot-head{
                color: #3377ca;
                font-size: 13px;
                text-decoration: underline;
            }
        @media only screen and (max-width: 767px){
            .navbar{
                display: block !important;
                flex-wrap:inherit !important;
                align-items: center !important;
                width: 100%;
            }
            li.nav-item {
                /* border-right: 1px solid #80808070; */
                padding: 5px !important;
            }

            .col-xl-6.offset-xl-3.col-lg-8.offset-lg-2 {
                margin-top: 80px !important;
            }
            .row{
                margin: 10px;
            }
            .conver-box-st{
                padding-left: 0px;
            }
            .conver-amount-st{
                padding-right: 0px;
            }
            .leftborder{
                display: none;
            }
            .apexcharts-toolbar{
                display: none !important;
            }
            .table-responsive{
                font-size: 11px !important;
            }
        }
    </style>
</head>

<body>
    <div class="preloader js-preloader">
        <div class="loader loader-inner-1">
            <div class="loader loader-inner-2">
                <div class="loader loader-inner-3">
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="switch-theme-mode">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div> --}}

    <div class="page-wrapper">
        @include('layouts.website.header')
            @yield('content')
        @include('layouts.website.footer')

    </div>


    <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>


    {{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script src="{{url('')}}/website_assets/js/jquery.min.js"></script>
    <script src="{{url('')}}/website_assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('')}}/website_assets/js/form-validator.min.js"></script>
    <script src="{{url('')}}/website_assets/js/contact-form-script.js"></script>
    <script src="{{url('')}}/website_assets/js/aos.js"></script>
    <script src="{{url('')}}/website_assets/js/owl.carousel.min.js"></script>
    <script src="{{url('')}}/website_assets/js/odometer.min.js"></script>
    <script src="{{url('')}}/website_assets/js/jquery.countdown.min.js"></script>
    <script src="{{url('')}}/website_assets/js/fancybox.js"></script>
    <script src="{{url('')}}/website_assets/js/jquery.appear.js"></script>
    <script src="{{url('')}}/website_assets/js/tweenmax.min.js"></script>
    <script src="{{url('')}}/website_assets/js/main.js"></script>
    <script src="{{url('')}}/website_assets/apexchat/apexcharts.js"></script>
    <script src="{{url('')}}/dash-assets/plugins/axios/axios.min.js"></script>
    @yield('page-scripts')
    <script type="text/javascript">
        //alert('hello');
    </script>

    
    
</body>
    
    <!-- Mirrored from templates.hibootstrap.com/cuex/default/{{url('/')}} by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 Oct 2022 07:50:54 GMT -->
    
</html>
    