@extends('layouts.website.master')
@section('content')
<div class="content-wrapper">

    {{-- <div class="breadcrumb-wrap bg-f br-1">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Security Commissions</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li>Security Commissions</li>
                </ul>
            </div>
        </div>
    </div> --}}

    <section class="exchange-table-wrap pb-100">
        <div class="container" style="margin-top: 0px">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div style="margin-top: 60px" class="section-title style1 text-center mb-40">
                        <span>LIVE EXCHANGE RATES</span>
                        <h2> Security Commissions</h2>
                        {{-- <p align="justify">
                            Directory of security commissions around the world. Security commissions, also called Regulatory
                            Authorities, work with the aim of protecting the Forex investor, and encouraging and promoting the
                            development of the securities and futures markets in the country...<br>
            
                        </p> --}}
                    </div>
                </div>
            </div>

            <div class="row">
                <table class="table table-striped table-hover">
                    <tbody>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/ALL.gif" border="0"
                                    class="box">&nbsp;&nbsp;Albania
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Albanian Securities Commission</span>


                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/ARS.gif" border="0"
                                    class="box">&nbsp;&nbsp;Argentina
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Comision Nacional de Valores</span>


                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/AUD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Australia
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Australian Securities and Investments Commission</span>


                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/BSD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Bahamas
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Securities Commission of the Bahamas</span>


                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/BDT.gif" border="0"
                                    class="box">&nbsp;&nbsp;Bangladesh
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Securities and Exchange Commission</span>


                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/BMD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Bermuda
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Bermuda Monetary Authority</span>


                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/BRL.gif" border="0"
                                    class="box">&nbsp;&nbsp;Brazil
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Comiss�o de Valores Mobili�rios</span>


                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/CAD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Canada
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Alberta Securities Commission</span>


                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/CNY.gif" border="0"
                                    class="box">&nbsp;&nbsp;China
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">China Securities Regulatory Commission</span>


                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/COP.gif" border="0"
                                    class="box">&nbsp;&nbsp;Colombia
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Superintendencia de Valores</span>


                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/CZK.gif" border="0"
                                    class="box">&nbsp;&nbsp;Czech Republic
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Czech Securities Commission</span>


                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/DKK.gif" border="0"
                                    class="box">&nbsp;&nbsp;Denmark
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Finanstilsynet</span>


                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/EGP.gif" border="0"
                                    class="box">&nbsp;&nbsp;Egypt
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Capital Market Authority</span>


                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/XPF.gif" border="0"
                                    class="box">&nbsp;&nbsp;French Polynesia
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Commission des Operations de Bourse</span>


                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/HKD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Hong Kong
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Securities and Futures Commission</span>


                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/INR.gif" border="0"
                                    class="box">&nbsp;&nbsp;India
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Securities and Exchange Board of India</span>


                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/IDR.gif" border="0"
                                    class="box">&nbsp;&nbsp;Indonesia
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Capital Market Supervisory Agency</span>


                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/IQD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Iraq
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Iraq Securities Commission</span>


                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/JPY.gif" border="0"
                                    class="box">&nbsp;&nbsp;Japan
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Financial Services Agency</span>


                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/JOD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Jordan
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Jordan Securities Commission</span>


                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/KES.gif" border="0"
                                    class="box">&nbsp;&nbsp;Kenya
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Capital Markets Authority</span>


                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/MYR.gif" border="0"
                                    class="box">&nbsp;&nbsp;Malaysia
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Malaysia Securities Commission</span>


                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/MXN.gif" border="0"
                                    class="box">&nbsp;&nbsp;Mexico
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Comision Nacional Bancaria y de Valores</span>


                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/NZD.gif" border="0"
                                    class="box">&nbsp;&nbsp;New Zealand
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">New Zealand Securities Commission</span>


                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/PKR.gif" border="0"
                                    class="box">&nbsp;&nbsp;Pakistan
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Securities &amp; Exchange Commission of Pakistan</span>


                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/PEN.gif" border="0"
                                    class="box">&nbsp;&nbsp;Peru
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Comision Nacional Supervisora de Empresas y Valores</span>


                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/PHP.gif" border="0"
                                    class="box">&nbsp;&nbsp;Philippines
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Securities and Exchange Commission</span>


                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/RUB.gif" border="0"
                                    class="box">&nbsp;&nbsp;Russian Federation
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Federal Commission for the Securities Market of the Russian
                                    Federation</span>


                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/SGD.gif" border="0"
                                    class="box">&nbsp;&nbsp;Singapore
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Monetary Authority of Singapore</span>


                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/ZAR.gif" border="0"
                                    class="box">&nbsp;&nbsp;South Africa
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Financial Services Board</span>


                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/KRW.gif" border="0"
                                    class="box">&nbsp;&nbsp;South Korea
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Korea Financial Supervisory Commission</span>


                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/LKR.gif" border="0"
                                    class="box">&nbsp;&nbsp;Sri Lanka
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Securities and Exchange Commission</span>


                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/CHF.gif" border="0"
                                    class="box">&nbsp;&nbsp;Switzerland
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Commission Federale des Banques</span>


                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/THB.gif" border="0"
                                    class="box">&nbsp;&nbsp;Thailand
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Securities and Exchange Commission</span>


                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/TRY.gif" border="0"
                                    class="box">&nbsp;&nbsp;Turkey
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Capital Markets Board</span>


                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/AED.gif" border="0"
                                    class="box">&nbsp;&nbsp;United Arab Emirates
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Securities and Commodities Authority</span>


                            </td>
                        </tr>
                        <tr bgcolor="#efefef">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/GBP.gif" border="0"
                                    class="box">&nbsp;&nbsp;United Kingdom
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">Financial Services Authority</span>


                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td width="48%" align="left" valign="top">
                                <img src="{{url('')}}/website_assets/img/flag/USD.gif" border="0"
                                    class="box">&nbsp;&nbsp;United States of America
                            </td>
                            <td width="52%" align="left" valign="top">

                                <span class="gray">United States Securities and Exchange Commission</span>


                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    @endsection