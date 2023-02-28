@extends('layouts.website.master')
@section('content')
<div class="content-wrapper">

    {{-- <div class="breadcrumb-wrap bg-f br-1">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Stock Exchanges</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li>Stock Exchanges</li>
                </ul>
            </div>
        </div>
    </div> --}}

    <section class="exchange-table-wrap pb-100 ">
        <div class="container" style="margin-top: 0px">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div style="margin-top: 60px" class="section-title style1 text-center mb-40">
                        <span>LIVE EXCHANGE RATES</span>
                        <h2>Stock Exchanges</h2>
                    </div>
                    <p align="justify">
                        A list of Stock Exchanges Worldwide and other foreign currency exchange resources. A stock exchange or
                        share market is a corporation or mutual organization which provides Trading Facilities for stock brokers
                        and traders, to trade stocks and other securities. Stock exchanges also provide facilities for the issue
                        and redemption of securities as well as other financial instruments and capital events including the
                        payment of income and dividends...<br>
        
                    </p>
                </div>
            </div>
            
            <div class="row">
                <table class="table table-striped table-hover">
                    <tbody>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/AFN.gif" border="0"
                                    class="box">&nbsp;&nbsp;Afghanistan
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Kabul International Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/ARS.gif" border="0"
                                    class="box">&nbsp;&nbsp;Argentina
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Buenos Aires Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/AUD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Australia
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Australia Pacific Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Australian Securities Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bendigo Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">National Stock Exchange of Australia</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Sydney Futures Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/BSD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Bahamas
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bahamas Securities Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/BHD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Bahrain
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bahrain Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/BDT.gif" border="0"
                                    class="box">&nbsp;&nbsp;Bangladesh
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Chittagong Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Dhaka Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/BBD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Barbados
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Barbados Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/BMD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Bermuda
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bermuda Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/BRL.gif" border="0"
                                    class="box">&nbsp;&nbsp;Brazil
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">BM&amp;F Bovespa</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Rio de Janeiro Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Maring� Mercantile and Futures Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">BOVMESB</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/BGN.gif" border="0"
                                    class="box">&nbsp;&nbsp;Bulgaria
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bulgarian Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/CAD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Canada
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">CNQ</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Nasdaq Canada</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Winnipeg Commodity Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Toronto Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Montreal Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/CLP.gif" border="0"
                                    class="box">&nbsp;&nbsp;Chile
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Valpara�so Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Santiago Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Santiago Electronic Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/CNY.gif" border="0"
                                    class="box">&nbsp;&nbsp;China
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Shenzhen Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Shanghai Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/COP.gif" border="0"
                                    class="box">&nbsp;&nbsp;Colombia
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bolsa de Valores de Colombia</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/CRC.gif" border="0"
                                    class="box">&nbsp;&nbsp;Costa Rica
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bolsa Nacional de Valores de Costa Rica</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/CZK.gif" border="0"
                                    class="box">&nbsp;&nbsp;Czech Republic
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Prague Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/DKK.gif" border="0"
                                    class="box">&nbsp;&nbsp;Denmark
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Copenhagen Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/DOP.gif" border="0"
                                    class="box">&nbsp;&nbsp;Dominican Republic
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bolsa de Valores de la Rep�blica Dominicana</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/XCD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Eastern Caribbean States
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Eastern Caribbean Securities Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/EGP.gif" border="0"
                                    class="box">&nbsp;&nbsp;Egypt
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Cairo &amp; Alexandria Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/EEK.gif" border="0"
                                    class="box">&nbsp;&nbsp;Estonia
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Tallinn Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/FJD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Fiji
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">South Pacific Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/XPF.gif" border="0"
                                    class="box">&nbsp;&nbsp;French Polynesia
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Euronext Paris</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/HKD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Hong Kong
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Hong Kong Exchanges and Clearing</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/HUF.gif" border="0"
                                    class="box">&nbsp;&nbsp;Hungary
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Budapest Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/ISK.gif" border="0"
                                    class="box">&nbsp;&nbsp;Iceland
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Iceland Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/INR.gif" border="0"
                                    class="box">&nbsp;&nbsp;India
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Madras Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Mangalore Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Ahmedabad Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">National Stock Exchange of India</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bangalore Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">OTC Exchange of India</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bhubaneswar Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Pune Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bombay Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Uttar Pradesh Stock Association</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Calcutta Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Vadodara Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Cochin Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Meerut Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Coimbatore Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Digambar Finance Jabalpur</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Delhi Stock Exchange Association</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Gawahati Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Hyderabad Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Inter-connected Stock Exchange of India</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Jaipur Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Ludhiana Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Madhya Pradesh Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/IDR.gif" border="0"
                                    class="box">&nbsp;&nbsp;Indonesia
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Jakarta Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Surabaya Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Jakarta Futures Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/IRR.gif" border="0"
                                    class="box">&nbsp;&nbsp;Iran
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Tehran Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/IQD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Iraq
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Iraq Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/ILS.gif" border="0"
                                    class="box">&nbsp;&nbsp;Israel
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Tel-Aviv Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/JMD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Jamaica
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Jamaica Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/JPY.gif" border="0"
                                    class="box">&nbsp;&nbsp;Japan
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">JASDAQ</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Nagoya Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Osaka Securities Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Sapporo Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Tokyo Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Fukuoka Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/JOD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Jordan
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Amman Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/KES.gif" border="0"
                                    class="box">&nbsp;&nbsp;Kenya
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Nairobi Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/KWD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Kuwait
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Kuwait Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/LBP.gif" border="0"
                                    class="box">&nbsp;&nbsp;Lebanon
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Beirut Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/MYR.gif" border="0"
                                    class="box">&nbsp;&nbsp;Malaysia
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bursa Malaysia</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Kuala Lumpur Commodity Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bursa Derivatives</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">MESDAQ</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">FTSE Bursa Malaysia Index</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/MUR.gif" border="0"
                                    class="box">&nbsp;&nbsp;Mauritius
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">The Stock Exchange of Mauritius</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/MXN.gif" border="0"
                                    class="box">&nbsp;&nbsp;Mexico
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bolsa Mexicana de Valores</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/MAD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Morocco
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Casablanca Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/NZD.gif" border="0"
                                    class="box">&nbsp;&nbsp;New Zealand
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">New Zealand Exchange Limited</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/NOK.gif" border="0"
                                    class="box">&nbsp;&nbsp;Norway
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Oslo Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/OMR.gif" border="0"
                                    class="box">&nbsp;&nbsp;Oman
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Muscat Securities Market</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/PKR.gif" border="0"
                                    class="box">&nbsp;&nbsp;Pakistan
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Lahore Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Islamabad Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Karachi Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/PHP.gif" border="0"
                                    class="box">&nbsp;&nbsp;Philippines
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Philippine Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Philippine Dealing Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/PLN.gif" border="0"
                                    class="box">&nbsp;&nbsp;Poland
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Warsaw Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">NewConnect</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/RON.gif" border="0"
                                    class="box">&nbsp;&nbsp;Romania
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bucharest Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">SIBEX</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">RASDAQ</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/RUB.gif" border="0"
                                    class="box">&nbsp;&nbsp;Russian Federation
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Moscow Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">RTS Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Saint Petersburg Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Moscow Interbank Currency Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/SAR.gif" border="0"
                                    class="box">&nbsp;&nbsp;Saudi Arabia
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Saudi Arabia Electronic Securities Information System</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Tadawul</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/SGD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Singapore
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Singapore Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Singapore Commodity Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/SKK.gif" border="0"
                                    class="box">&nbsp;&nbsp;Slovakia
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bratislava Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/ZAR.gif" border="0"
                                    class="box">&nbsp;&nbsp;South Africa
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bond Exchange of South Africa</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">JSE Securities Exchange / Johannesburg Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">The South African Futures Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Alternative Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/LKR.gif" border="0"
                                    class="box">&nbsp;&nbsp;Sri Lanka
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Colombo Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/SDG.gif" border="0"
                                    class="box">&nbsp;&nbsp;Sudan
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Khartoum Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/SEK.gif" border="0"
                                    class="box">&nbsp;&nbsp;Sweden
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Nordic Growth Market</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Stockholm Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/CHF.gif" border="0"
                                    class="box">&nbsp;&nbsp;Switzerland
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">SWX Swiss Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bern eXchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/TWD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Taiwan
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Taiwan Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/THB.gif" border="0"
                                    class="box">&nbsp;&nbsp;Thailand
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Stock Exchange of Thailand</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Agricultural Futures Exchange of Thailand</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Thailand Futures Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Market for Alternative Investment</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/TTD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Trinidad &amp; Tobago
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Trinidad and Tobago Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/TND.gif" border="0"
                                    class="box">&nbsp;&nbsp;Tunisia
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bourse de Tunis</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/TRY.gif" border="0"
                                    class="box">&nbsp;&nbsp;Turkey
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Istanbul Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/AED.gif" border="0"
                                    class="box">&nbsp;&nbsp;United Arab Emirates
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Abu Dhabi Securities Market</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Dubai Financial Market</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Dubai International Financial Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/GBP.gif" border="0"
                                    class="box">&nbsp;&nbsp;United Kingdom
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">London Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Plus Markets</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Markit BOAT</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Project Turquose</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/USD.gif" border="0"
                                    class="box">&nbsp;&nbsp;United States of America
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Chicago Board of Trade</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Chicago Mercantile Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Chicago Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">International Securities Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Miami Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">NASDAQ Stock Market</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">National Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">New York Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Philadelphia Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">American Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Boston Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Boston Equities Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Boston Options Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Chicago Board Options Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/VEF.gif" border="0"
                                    class="box">&nbsp;&nbsp;Venezuela
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Bolsa de Valores de Caracas</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/VND.gif" border="0"
                                    class="box">&nbsp;&nbsp;Vietnam
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Ho Chi Minh Stock Exchange</span>
                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="38%" align="left" valign="top">
                                &nbsp; </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Hanoi Securities Trading Center</span>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="38%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/ZMK.gif" border="0"
                                    class="box">&nbsp;&nbsp;Zambia
                                &nbsp;
                            </td>
                            <td width="62%" align="left" valign="top">
                                <span class="gray">Lusaka Stock Exchange</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    @endsection