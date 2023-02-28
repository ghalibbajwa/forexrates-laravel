@extends('layouts.website.master')
@section('content')
<div class="content-wrapper">

    {{-- <div class="breadcrumb-wrap bg-f br-1">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Central Banks</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li>Central Banks</li>
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
                        <h2>Central Banks</h2>
                    </div>
                    <p align="justify">
                        Find the central banks or reserve banks of all countries around the world. A central bank or reserve bank is a public institution that usually issues the currency, regulates the money supply, and controls the interest rates in a country. Central banks often also oversee the commercial banking system within the country.<br>
        
                    </p>
                </div>
            </div>

            <div class="row">
                <table class="table table-striped table-hover">
                    <tbody>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/AFN.gif" border="0" class="box">&nbsp;&nbsp;Afghanistan
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Central Bank of Afghanistan</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/ALL.gif" border="0" class="box">&nbsp;&nbsp;Albania
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bank of Albania</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/DZD.gif" border="0" class="box">&nbsp;&nbsp;Algeria
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bank of Algeria</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/ARS.gif" border="0" class="box">&nbsp;&nbsp;Argentina
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Banco Central de la Republica Argentina</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/AUD.gif" border="0" class="box">&nbsp;&nbsp;Australia
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Reserve Bank of Australia</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/BSD.gif" border="0" class="box">&nbsp;&nbsp;Bahamas
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Central Bank of The Bahamas</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/BHD.gif" border="0" class="box">&nbsp;&nbsp;Bahrain
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bahrain Monetary Agency</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/BDT.gif" border="0" class="box">&nbsp;&nbsp;Bangladesh
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bangladesh Bank</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/BBD.gif" border="0" class="box">&nbsp;&nbsp;Barbados
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Central Bank of Barbados</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/BMD.gif" border="0" class="box">&nbsp;&nbsp;Bermuda
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bermuda Monetary Authority</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/BRL.gif" border="0" class="box">&nbsp;&nbsp;Brazil
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Banco Central do Brasil</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/BGN.gif" border="0" class="box">&nbsp;&nbsp;Bulgaria
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bulgarian National Bank</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/CAD.gif" border="0" class="box">&nbsp;&nbsp;Canada
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bank of Canada</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/CLP.gif" border="0" class="box">&nbsp;&nbsp;Chile
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Banco Central de Chile</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/CNY.gif" border="0" class="box">&nbsp;&nbsp;China
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">The People's Bank of China</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/COP.gif" border="0" class="box">&nbsp;&nbsp;Colombia
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Banco de la Republica</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/CRC.gif" border="0" class="box">&nbsp;&nbsp;Costa Rica
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Banco Central de Costa Rica</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/CZK.gif" border="0" class="box">&nbsp;&nbsp;Czech Republic
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Ceska Narodni Banka</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/DKK.gif" border="0" class="box">&nbsp;&nbsp;Denmark
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Danmarks Nationalbank</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/DOP.gif" border="0" class="box">&nbsp;&nbsp;Dominican Republic
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Banco Central de la Republica Dominicana</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/XCD.gif" border="0" class="box">&nbsp;&nbsp;Eastern Caribbean States
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">The Eastern Caribbean Central Bank</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/EGP.gif" border="0" class="box">&nbsp;&nbsp;Egypt
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Central Bank of Egypt</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/EEK.gif" border="0" class="box">&nbsp;&nbsp;Estonia
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Eesti Pank</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/FJD.gif" border="0" class="box">&nbsp;&nbsp;Fiji
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Reserve Bank of Fiji</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/XPF.gif" border="0" class="box">&nbsp;&nbsp;French Polynesia
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Banque de France</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/HKD.gif" border="0" class="box">&nbsp;&nbsp;Hong Kong
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Hong Kong Monetary Authority</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/HUF.gif" border="0" class="box">&nbsp;&nbsp;Hungary
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">National Bank of Hungary</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/ISK.gif" border="0" class="box">&nbsp;&nbsp;Iceland
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Central Bank of Iceland</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/INR.gif" border="0" class="box">&nbsp;&nbsp;India
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Reserve Bank of India</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/IDR.gif" border="0" class="box">&nbsp;&nbsp;Indonesia
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bank Indonesia</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/IRR.gif" border="0" class="box">&nbsp;&nbsp;Iran
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">The Central Bank of the Islamic Republic of Iran</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/IQD.gif" border="0" class="box">&nbsp;&nbsp;Iraq
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Central Bank Of Iraq</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/ILS.gif" border="0" class="box">&nbsp;&nbsp;Israel
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bank of Israel</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/JMD.gif" border="0" class="box">&nbsp;&nbsp;Jamaica
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bank of Jamaica</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/JPY.gif" border="0" class="box">&nbsp;&nbsp;Japan
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bank of Japan</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/JOD.gif" border="0" class="box">&nbsp;&nbsp;Jordan
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Central Bank of Jordan</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/KES.gif" border="0" class="box">&nbsp;&nbsp;Kenya
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Central Bank of Kenya</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/KWD.gif" border="0" class="box">&nbsp;&nbsp;Kuwait
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Central Bank of Kuwait</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/LBP.gif" border="0" class="box">&nbsp;&nbsp;Lebanon
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Banque du Liban</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/MYR.gif" border="0" class="box">&nbsp;&nbsp;Malaysia
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bank Negara Malaysia</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/MUR.gif" border="0" class="box">&nbsp;&nbsp;Mauritius
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bank of Mauritius</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/MXN.gif" border="0" class="box">&nbsp;&nbsp;Mexico
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Banco de Mexico</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/MAD.gif" border="0" class="box">&nbsp;&nbsp;Morocco
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bank Al-Maghrib</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/NZD.gif" border="0" class="box">&nbsp;&nbsp;New Zealand
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Reserve Bank of New Zealand</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/NOK.gif" border="0" class="box">&nbsp;&nbsp;Norway
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Norges Bank</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/OMR.gif" border="0" class="box">&nbsp;&nbsp;Oman
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Central Bank of Oman</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/PKR.gif" border="0" class="box">&nbsp;&nbsp;Pakistan
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">State Bank of Pakistan</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/PEN.gif" border="0" class="box">&nbsp;&nbsp;Peru
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Banco Central de Reserva del Peru</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/PHP.gif" border="0" class="box">&nbsp;&nbsp;Philippines
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bangko Sentral ng Pilipinas</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/PLN.gif" border="0" class="box">&nbsp;&nbsp;Poland
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">National Bank of Poland</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/QAR.gif" border="0" class="box">&nbsp;&nbsp;Qatar
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Qatar Central Bank</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/RON.gif" border="0" class="box">&nbsp;&nbsp;Romania
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">National Bank of Romania</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/RUB.gif" border="0" class="box">&nbsp;&nbsp;Russian Federation
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Central Bank of Russia</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/SAR.gif" border="0" class="box">&nbsp;&nbsp;Saudi Arabia
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Saudi Arabian Monetary Agency</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/SGD.gif" border="0" class="box">&nbsp;&nbsp;Singapore
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Monetary Authority of Singapore</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/SKK.gif" border="0" class="box">&nbsp;&nbsp;Slovakia
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">National Bank of Slovakia</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/ZAR.gif" border="0" class="box">&nbsp;&nbsp;South Africa
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">South African Reserve Bank</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/KRW.gif" border="0" class="box">&nbsp;&nbsp;South Korea
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Central bank of South Korea</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/LKR.gif" border="0" class="box">&nbsp;&nbsp;Sri Lanka
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Central Bank of Sri Lanka</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/HRK.gif" border="0" class="box">&nbsp;&nbsp;State of Croatia
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Croatian National Bank</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/SDG.gif" border="0" class="box">&nbsp;&nbsp;Sudan
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bank of Sudan</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/SEK.gif" border="0" class="box">&nbsp;&nbsp;Sweden
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Sveriges Riksbank</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/CHF.gif" border="0" class="box">&nbsp;&nbsp;Switzerland
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Schweizerische Nationalbank</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/TWD.gif" border="0" class="box">&nbsp;&nbsp;Taiwan
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bank Of Taiwan</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/THB.gif" border="0" class="box">&nbsp;&nbsp;Thailand
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bank of Thailand</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/TTD.gif" border="0" class="box">&nbsp;&nbsp;Trinidad &amp; Tobago
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Central Bank of Trinidad and Tobago</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/TND.gif" border="0" class="box">&nbsp;&nbsp;Tunisia
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Banque Centrale de Tunisie</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/TRY.gif" border="0" class="box">&nbsp;&nbsp;Turkey
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">T�rkiye Cumhuriyet Merkez Bankasi</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/AED.gif" border="0" class="box">&nbsp;&nbsp;United Arab Emirates
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Central Bank of United Arab Emirates</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/GBP.gif" border="0" class="box">&nbsp;&nbsp;United Kingdom
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bank of England</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/USD.gif" border="0" class="box">&nbsp;&nbsp;United States of America
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Board of Governors of the Federal Reserve System (Washington)</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/VEF.gif" border="0" class="box">&nbsp;&nbsp;Venezuela
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Banco Central de Venezuela</span>



                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/VND.gif" border="0" class="box">&nbsp;&nbsp;Vietnam
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">State Bank of Vietnam</span>



                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/ZMK.gif" border="0" class="box">&nbsp;&nbsp;Zambia
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bank of Zambia</span>



                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    @endsection