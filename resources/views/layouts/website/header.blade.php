@php
    $rates = rates();
@endphp
<header class="header-wrap style1">
    <div class="header-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="header-top-left hwrap">
                        
                            <div class="hmove">
                                <div class="hitem">
                                    
                                    @foreach ($rates as $rate)
                                       
                                    
                                    <img style="margin-left: 10px" src="{{url('').'/website_assets/img/flag/'.$rate->Symbol.'.gif'}}">
                                     {{$rate->Symbol}} {{$rate->Buying}} 
                                        
                                    @endforeach
                                    {{-- <img src="{{url('')}}/website_assets/img/flag/CAD.gif"> CAD - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/CNY.gif"> CNY - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/DKK.gif"> DKK - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/EUR.gif"> EUR - 213.14  --}}
                                </div>
                                {{-- <div class="hitem">
                                    <img src="{{url('')}}/website_assets/img/flag/HKD.gif"> HKD - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/JPY.gif"> JPY - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/SAR.gif"> SAR - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/SGD.gif"> SGD - 213.14 

                                </div>
                                <div class="hitem">
                                    <img src="{{url('')}}/website_assets/img/flag/SEK.gif"> SEK - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/CHF.gif"> CHF - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/THB.gif"> THB - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/AED.gif"> AED - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/GBP.gif"> GBP - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/USD.gif"> USD - 213.14
                                </div>
                                <div class="hitem">
                                    <img src="{{url('')}}/website_assets/img/flag/HKD.gif"> HKD - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/JPY.gif"> JPY - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/SAR.gif"> SAR - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/SGD.gif"> SGD - 213.14 

                                </div>
                                <div class="hitem">
                                    <img src="{{url('')}}/website_assets/img/flag/SEK.gif"> SEK - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/CHF.gif"> CHF - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/THB.gif"> THB - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/AED.gif"> AED - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/GBP.gif"> GBP - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/USD.gif"> USD - 213.14
                                </div>
                                <div class="hitem">
                                    <img src="{{url('')}}/website_assets/img/flag/AUD.gif"> AUD - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/CAD.gif"> CAD - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/CNY.gif"> CNY - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/DKK.gif"> DKK - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/EUR.gif"> EUR - 213.14 
                                </div>
                                <div class="hitem">
                                    <img src="{{url('')}}/website_assets/img/flag/HKD.gif"> HKD - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/JPY.gif"> JPY - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/SAR.gif"> SAR - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/SGD.gif"> SGD - 213.14 

                                </div>
                                <div class="hitem">
                                    <img src="{{url('')}}/website_assets/img/flag/SEK.gif"> SEK - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/CHF.gif"> CHF - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/THB.gif"> THB - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/AED.gif"> AED - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/GBP.gif"> GBP - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/USD.gif"> USD - 213.14
                                </div>
                                <div class="hitem">
                                    <img src="{{url('')}}/website_assets/img/flag/HKD.gif"> HKD - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/JPY.gif"> JPY - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/SAR.gif"> SAR - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/SGD.gif"> SGD - 213.14 

                                </div>
                                <div class="hitem">
                                    <img src="{{url('')}}/website_assets/img/flag/SEK.gif"> SEK - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/CHF.gif"> CHF - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/THB.gif"> THB - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/AED.gif"> AED - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/GBP.gif"> GBP - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/USD.gif"> USD - 213.14
                                </div>
                                <div class="hitem">
                                    <img src="{{url('')}}/website_assets/img/flag/AUD.gif"> AUD - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/CAD.gif"> CAD - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/CNY.gif"> CNY - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/DKK.gif"> DKK - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/EUR.gif"> EUR - 213.14 
                                </div>
                                <div class="hitem">
                                    <img src="{{url('')}}/website_assets/img/flag/HKD.gif" > HKD - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/JPY.gif" > JPY - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/SAR.gif" > SAR - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/SGD.gif" > SGD - 213.14 

                                </div>
                                <div class="hitem">
                                    <img src="{{url('')}}/website_assets/img/flag/SEK.gif"> SEK - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/CHF.gif"> CHF - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/THB.gif"> THB - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/AED.gif"> AED - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/GBP.gif"> GBP - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/USD.gif"> USD - 213.14
                                </div>
                                <div class="hitem">
                                    <img src="{{url('')}}/website_assets/img/flag/HKD.gif" > HKD - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/JPY.gif" > JPY - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/SAR.gif" > SAR - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/SGD.gif" > SGD - 213.14 

                                </div>
                                <div class="hitem">
                                    <img src="{{url('')}}/website_assets/img/flag/SEK.gif"> SEK - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/CHF.gif"> CHF - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/THB.gif"> THB - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/AED.gif"> AED - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/GBP.gif"> GBP - 213.14 
                                    <img src="{{url('')}}/website_assets/img/flag/USD.gif"> USD - 213.14
                                </div> --}}
                            </div>
                            
                        {{-- </marquee> --}}
                        {{-- <ul class="contact-info list-style">
                        </ul> --}}
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img class="logo-light" src="{{url('')}}/website_assets/img/forexrates-logo.png" alt="logo" style="height: 50px">
                    <img class="logo-dark" src="{{url('')}}/website_assets/img/forexrates-logo.png" alt="logo"  style="height: 50px">
                </a>
                {{-- <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                    <div class="menu-close d-lg-none">
                        <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                    </div> --}}
                    <ul class="nav navbar-nav scroll">
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link active">
                                Home 
                            </a>
                                
                                
                        
                        </li> | 
                        <li class="nav-item">
                            <a href="{{ route('forex_brokers') }}" class="nav-link ">Pakistan Forex Brokers</a>
                        </li> | 
                        <li class="nav-item">
                            <a href="{{ route('forex_brokers_directory') }}" class="nav-link ">Forex Brokers Directory</a>
                        </li> |
                        <li class="nav-item">
                            <a href="{{ route('security_commission') }}" class="nav-link">Security Commissions</a>
                        </li> | 
                        <li class="nav-item">
                            <a href="{{ route('current_directory') }}" class="nav-link">Currency Directory</a>
                        </li> | 
                        <li class="nav-item">
                            <a href="{{ route('GlossaryTerm') }}" class="nav-link">Glossary Term</a>
                        </li> | 
                        <li class="nav-item">
                            <a href="{{ route('YourComment') }}" class="nav-link">Your Comments</a>
                        </li> | 
                        <li class="nav-item">
                            <a href="{{ route('TellFriend') }}" class="nav-link">Tell a Friend</a>
                        </li> 
                    </ul>
                   
                {{-- </div> --}}
            </nav>
            
        </div>
    </div>
    <div class="header-bottom" style="border-top:1px solid gray ">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                {{-- <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent"> --}}
                    <ul class="nav navbar-nav scroll">
                        <li class="nav-item">
                            <a href="{{route('pak_open_market_rates')}}" class="nav-link sub-header">Pakistan Open Market Rates</a>
                        </li> | 
                        <li class="nav-item">
                            <a href="{{route('pak_inter_bank_rate')}}" class="nav-link sub-header">Pak Inter Banks Rates</a>
                        </li> | 
                        <li class="nav-item">
                            <a href="{{route('International_forex_rate')}}" class="nav-link sub-header">International Forex Rates</a>
                        </li> | 
                        <li class="nav-item">
                            <a href="{{route('converter')}}" class="nav-link sub-header"> Currency Converter</a>
                        </li> | 
                        <li class="nav-item">
                            <a href="{{route('gold_rates')}}" class="nav-link sub-header">Gold Rates</a>
                        </li> | 
                        
                        {{-- <li class="nav-item">
                            <a href="{{ route('forex_chart') }}" class="nav-link sub-header">Forex Charts</a>
                        </li> |  --}}
                        <li class="nav-item">
                            <a href="{{ route('prize_bond') }}" class="nav-link sub-header">Price Bond Result</a>
                        </li> | 
                        <li class="nav-item">
                            <a href="{{ route('central_banks') }}" class="nav-link sub-header">Central Banks</a>
                        </li> | 
                        <li class="nav-item">
                            <a href="{{ route('gold_rates') }}" class="nav-link sub-header">Gold Rate in Pakistan</a>
                        </li> | 
                        <li class="nav-item">
                            <a href="{{ route('stock_exchanges') }}" class="nav-link sub-header">Stock Exchange</a>
                        </li>                        
                        
                    </ul>
                   
                {{-- </div> --}}
            </nav>
            
        </div>
    </div>
</header>
{{-- #00A79D --}}