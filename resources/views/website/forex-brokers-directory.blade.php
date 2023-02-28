@extends('layouts.website.master')
@section('content')
<div class="content-wrapper">

    {{-- <div class="breadcrumb-wrap bg-f br-1">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Forex Brokers Directory</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li>Forex Brokers Directory</li>
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
                        <h2> Forex Broker Directory</h2>
                    </div>
                </div>
            </div>
        <div class="container" style="margin-top: 0px">
            <div class="row mb-3">
                <div class="col-xl-12 col-lg-12 mt-2">
                    <form action="#" class="convert-form">
                        <div class="row">
                            <div class="col-md-12 mb-40">
                                <p>Choosing the best forex broker is important. The best currency trading broker provides you the services you're looking for. Here at FOREXRATES.pk you'll find information, so you can better choose a forex brokerage firm. Foreign Exchange Currency trade is conducted via an international network of forex brokers. Until recently, the forex market was confined to larger brokers, major international commercial and investment banks, international money brokers, and currency traders. </p>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="currency"
                                        style="display: block;color: #000;font-weight: 400;margin-bottom: 10px">
                                        Search Text for
                                    </label>
                                    <input type="text" placeholder="Search text.." id="currency" name="currency">
                                </div>

                            </div>

                            {{-- <div class="col-lg-2">
                                <div class="form-group">
                                    <label for="currency"
                                        style="display: block;color: #000;font-weight: 400;margin-bottom: 10px">
                                        In
                                    </label>
                                    <select name="searchin" id="searchin">
                                        <option value="dealer" selected="">Dealer Name</option>
                                        <option value="address">Address</option>
                                        <option value="city">City</option>
                                        <option value="state">State</option>
                                        <option value="country">Country</option>
                                    </select>
                                </div>

                            </div> --}}
                            <div class="col-lg-2 text-lg-end" style="margin-top: 32px">
                                <button type="submit" class="btn style1">Show<i
                                        class="ri-arrow-right-s-line"></i></button>
                            </div>

                        </div>



                    </form>
                </div>
            </div>

            <div class="row">
                <h6>Forex Brokers Worldwide</h6>
                <table width="50%" border="0" cellspacing="2" cellpadding="2" align="left">
                    <tbody>
                        <tr bgcolor="#efefef">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/AFN.gif" class="box">&nbsp;&nbsp;
                                Afghanistan (1)
                            </td>
                        </tr>

                        <tr bgcolor="#ffffff">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/AUD.gif" class="box">&nbsp;&nbsp;
                                Australia (22)
                            </td>
                        </tr>

                        <tr bgcolor="#efefef">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/BDT.gif" class="box">&nbsp;&nbsp;
                                Bangladesh (16)
                            </td>
                        </tr>

                        <tr bgcolor="#ffffff">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/BRL.gif" class="box">&nbsp;&nbsp;
                                Brazil (1)
                            </td>
                        </tr>

                        <tr bgcolor="#efefef">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/BGN.gif" class="box">&nbsp;&nbsp;
                                Bulgaria (1)
                            </td>
                        </tr>

                        <tr bgcolor="#ffffff">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/CAD.gif" class="box">&nbsp;&nbsp;
                                Canada (7)
                            </td>
                        </tr>

                        <tr bgcolor="#efefef">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/CNY.gif" class="box">&nbsp;&nbsp;
                                China (1)
                            </td>
                        </tr>

                        <tr bgcolor="#ffffff">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/DKK.gif" class="box">&nbsp;&nbsp;
                                Denmark (2)
                            </td>
                        </tr>

                        <tr bgcolor="#efefef">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/EGP.gif" class="box">&nbsp;&nbsp;
                                Egypt (16)
                            </td>
                        </tr>

                        <tr bgcolor="#ffffff">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/EEK.gif" class="box">&nbsp;&nbsp;
                                Estonia (1)
                            </td>
                        </tr>

                        <tr bgcolor="#efefef">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/HKD.gif" class="box">&nbsp;&nbsp;
                                Kong (54)
                            </td>
                        </tr>

                        <tr bgcolor="#ffffff">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/HUF.gif" class="box">&nbsp;&nbsp;
                                Hungary (1)
                            </td>
                        </tr>

                        <tr bgcolor="#efefef">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/INR.gif" class="box">&nbsp;&nbsp;
                                India (83)
                            </td>
                        </tr>

                        <tr bgcolor="#ffffff">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/IRR.gif" class="box">&nbsp;&nbsp;
                                Iran (5)
                            </td>
                        </tr>

                        <tr bgcolor="#efefef">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/JPY.gif" class="box">&nbsp;&nbsp;
                                Japan (1)
                            </td>
                        </tr>
                    </tbody>

                </table>


                <table width="50%" border="0" cellspacing="2" cellpadding="2" align="left">

                    <tbody>
                        <tr bgcolor="#efefef">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/MYR.gif" class="box">&nbsp;&nbsp;
                                Malaysia (20)
                            </td>
                        </tr>

                        <tr bgcolor="#ffffff">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/NZD.gif" class="box">&nbsp;&nbsp;
                                Zealand (40)
                            </td>
                        </tr>

                        <tr bgcolor="#efefef">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/OMR.gif" class="box">&nbsp;&nbsp;
                                Oman (12)
                            </td>
                        </tr>

                        <tr bgcolor="#ffffff">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/PKR.gif" class="box">&nbsp;&nbsp;
                                Pakistan (102)
                            </td>
                        </tr>

                        <tr bgcolor="#efefef">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/PHP.gif" class="box">&nbsp;&nbsp;
                                Philippines (1)
                            </td>
                        </tr>

                        <tr bgcolor="#ffffff">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/PLN.gif" class="box">&nbsp;&nbsp;
                                Poland (1)
                            </td>
                        </tr>

                        <tr bgcolor="#efefef">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/QAR.gif" class="box">&nbsp;&nbsp;
                                Qatar (10)
                            </td>
                        </tr>

                        <tr bgcolor="#ffffff">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/RUB.gif" class="box">&nbsp;&nbsp;
                                Russian Federation (1)
                            </td>
                        </tr>

                        <tr bgcolor="#efefef">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/SAR.gif" class="box">&nbsp;&nbsp;
                                Arabia (28)
                            </td>
                        </tr>

                        <tr bgcolor="#ffffff">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/SGD.gif" class="box">&nbsp;&nbsp;
                                Singapore (48)
                            </td>
                        </tr>

                        <tr bgcolor="#efefef">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/SEK.gif" class="box">&nbsp;&nbsp;
                                Sweden (1)
                            </td>
                        </tr>

                        <tr bgcolor="#ffffff">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/CHF.gif" class="box">&nbsp;&nbsp;
                                Switzerland (18)
                            </td>
                        </tr>

                        <tr bgcolor="#efefef">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/AED.gif" class="box">&nbsp;&nbsp;
                                United Arab Emirates (8)
                            </td>
                        </tr>

                        <tr bgcolor="#ffffff">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/GBP.gif" class="box">&nbsp;&nbsp;
                                United Kingdom (42)
                            </td>
                        </tr>

                        <tr bgcolor="#efefef">
                            <td align="left" valign="top">

                                <img src="{{url('')}}/website_assets/img/flag/USD.gif" class="box">&nbsp;&nbsp;
                                United States of America (41)
                            </td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <div class="exchange-table" style="margin-top: 60px">
                    <h4>Currency Rates Pakistan Open Market (PKR)</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Currency</th>
                                <th scope="col">Symbol</th>
                                <th scope="col">Buying</th>
                                <th scope="col">Selling</th>
                                <th scope="col">Chart(24h)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($openrates) && !empty($openrates))
                            @foreach ($openrates as $rate)
                            <tr>
                                <td>
                                    {{-- <img src="{{$rate->url}}" class="box"> --}}
                                    <img src="{{url('').'/website_assets/img/flag/'.$rate->Symbol.'.gif'}}" class="box">
                                    &nbsp;&nbsp;
                                    {{ $rate->Currency }}
                                </td>
                                <td>
                                    {{ $rate->Symbol}}
                                </td>
                                <td>
                                    {{ $rate->Buying }}
                                </td>
                                <td>
                                    {{ $rate->Selling }}
                                </td>
                                <td>
                                    <a href="{{ route('detail_page_pkr',[$rate->Symbol,'Open_Market_Rate']) }}">
                                        <img src="{{url('')}}/website_assets/img/chart-img/chart-1.png" alt="Image">
                                    </a>
                                </td>
                            </tr>
                            
    
                            @endforeach
                            @endif
                           
                           
                            
                        </tbody>
                    </table>
                    <hr>
                    
                </div>
            </div>
        </div>
    </section>




</div>


@endsection