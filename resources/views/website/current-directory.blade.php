@extends('layouts.website.master')
@section('content')
<div class="content-wrapper">

  {{-- <div class="breadcrumb-wrap bg-f br-1">
    <div class="container">
      <div class="breadcrumb-title">
        <h2>Current Directory</h2>
        <ul class="breadcrumb-menu list-style">
          <li><a href="{{url('/')}}">Home </a></li>
          <li>Current Directory</li>
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
                <h2> Current Directory</h2>
            </div>
        </div>
    </div>
      

      <div class="row">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              
              <th scope="col">Country</th>
              <th scope="col">Capital</th>
              <th scope="col">Currency</th>
              <th>Currency Symbol</th>
            </tr>
          </thead>

          <tbody>
       
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/AFN.gif" class="box">&nbsp;&nbsp; Afghanistan</td>
              <td>Kabul</td>
              <td><a rel="nofollow" href="currency-afghanistan-afghanis-afn-usd.php"> Afghanistan Afghanis</a></td>
              <td>AFN</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/ALL.gif" class="box">&nbsp;&nbsp; Albania</td>
              <td>Tirana</td>
              <td><a rel="nofollow" href="currency-albania-leke-all-usd.php"> Albania Leke</a></td>
              <td>ALL</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/DZD.gif" class="box">&nbsp;&nbsp; Algeria</td>
              <td>Algiers</td>
              <td><a rel="nofollow" href="currency-algeria-dinars-dzd-usd.php"> Algeria Dinars</a></td>
              <td>DZD</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/ARS.gif" class="box">&nbsp;&nbsp; Argentina</td>
              <td>Buenos Aires</td>
              <td><a rel="nofollow" href="currency-argentina-pesos-ars-usd.php"> Argentina Pesos</a></td>
              <td>ARS</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/AUD.gif" class="box">&nbsp;&nbsp; Australia</td>
              <td>Canberra</td>
              <td><a rel="nofollow" href="currency-australian-dollar-aud-usd.php"> Australian Dollar</a></td>
              <td>AUD</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/BSD.gif" class="box">&nbsp;&nbsp; Bahamas</td>
              <td>Nassau</td>
              <td><a rel="nofollow" href="currency-bahamas-dollars-bsd-usd.php"> Bahamas Dollars</a></td>
              <td>BSD</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/BHD.gif" class="box">&nbsp;&nbsp; Bahrain</td>
              <td>Manama</td>
              <td><a rel="nofollow" href="currency-bahrain-dinar-bhd-usd.php"> Bahrain Dinar</a></td>
              <td>BHD</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/BDT.gif" class="box">&nbsp;&nbsp; Bangladesh</td>
              <td>Dhaka</td>
              <td><a rel="nofollow" href="currency-bangladesh-taka-bdt-usd.php"> Bangladesh Taka</a></td>
              <td>BDT</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/BBD.gif" class="box">&nbsp;&nbsp; Barbados</td>
              <td>Bridgetown</td>
              <td><a rel="nofollow" href="currency-barbados-dollars-bbd-usd.php"> Barbados Dollars</a></td>
              <td>BBD</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/BMD.gif" class="box">&nbsp;&nbsp; Bermuda</td>
              <td>Hamilton</td>
              <td><a rel="nofollow" href="currency-bermuda-dollars-bmd-usd.php"> Bermuda Dollars</a></td>
              <td>BMD</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/BRL.gif" class="box">&nbsp;&nbsp; Brazil</td>
              <td>Brasilia</td>
              <td><a rel="nofollow" href="currency-brazil-reais-brl-usd.php"> Brazil Reais</a></td>
              <td>BRL</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/BGN.gif" class="box">&nbsp;&nbsp; Bulgaria</td>
              <td>Sofia</td>
              <td><a rel="nofollow" href="currency-bulgaria-leva-bgn-usd.php"> Bulgaria Leva</a></td>
              <td>BGN</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/CAD.gif" class="box">&nbsp;&nbsp; Canada</td>
              <td>Ottawa</td>
              <td><a rel="nofollow" href="currency-canadian-dollar-cad-usd.php"> Canadian Dollar</a></td>
              <td>CAD</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/CLP.gif" class="box">&nbsp;&nbsp; Chile</td>
              <td>Santiago</td>
              <td><a rel="nofollow" href="currency-chile-pesos-clp-usd.php"> Chile Pesos</a></td>
              <td>CLP</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/CNY.gif" class="box">&nbsp;&nbsp; China</td>
              <td>Beijing</td>
              <td><a rel="nofollow" href="currency-china-yuan-cny-usd.php"> China Yuan</a></td>
              <td>CNY</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/COP.gif" class="box">&nbsp;&nbsp; Colombia</td>
              <td>Bogota</td>
              <td><a rel="nofollow" href="currency-colombia-pesos-cop-usd.php"> Colombia Pesos</a></td>
              <td>COP</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/CRC.gif" class="box">&nbsp;&nbsp; Costa Rica</td>
              <td>San Jose</td>
              <td><a rel="nofollow" href="currency-costa-rica-colones-crc-usd.php"> Costa Rica Colones</a></td>
              <td>CRC</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/CZK.gif" class="box">&nbsp;&nbsp; Czech Republic</td>
              <td>Prague</td>
              <td><a rel="nofollow" href="currency-czech-republic-koruny-czk-usd.php"> Czech Republic Koruny</a></td>
              <td>CZK</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/DKK.gif" class="box">&nbsp;&nbsp; Denmark</td>
              <td>Copenhagen</td>
              <td><a rel="nofollow" href="currency-danish-krone-dkk-usd.php"> Danish Krone</a></td>
              <td>DKK</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/DOP.gif" class="box">&nbsp;&nbsp; Dominican Republic
              </td>
              <td>Santo Domingo</td>
              <td><a rel="nofollow" href="currency-dominican-republic-pesos-dop-usd.php"> Dominican Republic Pesos</a>
              </td>
              <td>DOP</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/XCD.gif" class="box">&nbsp;&nbsp; Eastern Caribbean
                States</td>
              <td>Castries</td>
              <td><a rel="nofollow" href="currency-east-caribbean-dollars-xcd-usd.php"> East Caribbean Dollars</a></td>
              <td>XCD</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/EGP.gif" class="box">&nbsp;&nbsp; Egypt</td>
              <td>Cairo</td>
              <td><a rel="nofollow" href="currency-egypt-pounds-egp-usd.php"> Egypt Pounds</a></td>
              <td>EGP</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/EEK.gif" class="box">&nbsp;&nbsp; Estonia</td>
              <td>Tallinn</td>
              <td><a rel="nofollow" href="currency-estonia-krooni-eek-usd.php"> Estonia Krooni</a></td>
              <td>EEK</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/FJD.gif" class="box">&nbsp;&nbsp; Fiji</td>
              <td>Suva</td>
              <td><a rel="nofollow" href="currency-fiji-dollars-fjd-usd.php"> Fiji Dollars</a></td>
              <td>FJD</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/XPF.gif" class="box">&nbsp;&nbsp; French Polynesia</td>
              <td>Papeete</td>
              <td><a rel="nofollow" href="currency-comptoirs-francais-du-pacifique-francs-xpf-usd.php"> Comptoirs
                  Francais du Pacifique Francs</a></td>
              <td>XPF</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/HKD.gif" class="box">&nbsp;&nbsp; Hong Kong</td>
              <td>Hong Kong Central</td>
              <td><a rel="nofollow" href="currency-hong-kong-dollar-hkd-usd.php"> Hong Kong Dollar</a></td>
              <td>HKD</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/HUF.gif" class="box">&nbsp;&nbsp; Hungary</td>
              <td>Budapest</td>
              <td><a rel="nofollow" href="currency-hungary-forint-huf-usd.php"> Hungary Forint</a></td>
              <td>HUF</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/ISK.gif" class="box">&nbsp;&nbsp; Iceland</td>
              <td>Reykjavik</td>
              <td><a rel="nofollow" href="currency-iceland-kronur-isk-usd.php"> Iceland Kronur</a></td>
              <td>ISK</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/INR.gif" class="box">&nbsp;&nbsp; India</td>
              <td>New Delhi</td>
              <td><a rel="nofollow" href="currency-indian-rupee-inr-usd.php"> Indian Rupee</a></td>
              <td>INR</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/IDR.gif" class="box">&nbsp;&nbsp; Indonesia</td>
              <td>Jakarta</td>
              <td><a rel="nofollow" href="currency-indonesia-rupiahs-idr-usd.php"> Indonesia Rupiahs</a></td>
              <td>IDR</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/IRR.gif" class="box">&nbsp;&nbsp; Iran</td>
              <td>Tehran</td>
              <td><a rel="nofollow" href="currency-iran-rials-irr-usd.php"> Iran Rials</a></td>
              <td>IRR</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/IQD.gif" class="box">&nbsp;&nbsp; Iraq</td>
              <td>Baghdad</td>
              <td><a rel="nofollow" href="currency-iraq-dinars-iqd-usd.php"> Iraq Dinars</a></td>
              <td>IQD</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/ILS.gif" class="box">&nbsp;&nbsp; Israel</td>
              <td>Jerusalem</td>
              <td><a rel="nofollow" href="currency-israel-new-shekels-ils-usd.php"> Israel New Shekels</a></td>
              <td>ILS</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/JMD.gif" class="box">&nbsp;&nbsp; Jamaica</td>
              <td>Kingston</td>
              <td><a rel="nofollow" href="currency-jamaica-dollars-jmd-usd.php"> Jamaica Dollars</a></td>
              <td>JMD</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/JPY.gif" class="box">&nbsp;&nbsp; Japan</td>
              <td>Tokyo</td>
              <td><a rel="nofollow" href="currency-japanese-yen-jpy-usd.php"> Japanese Yen</a></td>
              <td>JPY</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/JOD.gif" class="box">&nbsp;&nbsp; Jordan</td>
              <td>Amman</td>
              <td><a rel="nofollow" href="currency-jordan-dinars-jod-usd.php"> Jordan Dinars</a></td>
              <td>JOD</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/KES.gif" class="box">&nbsp;&nbsp; Kenya</td>
              <td>Nairobi</td>
              <td><a rel="nofollow" href="currency-kenya-shillings-kes-usd.php"> Kenya Shillings</a></td>
              <td>KES</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/KWD.gif" class="box">&nbsp;&nbsp; Kuwait</td>
              <td>Kuwait</td>
              <td><a rel="nofollow" href="currency-kuwaiti-dinar-kwd-usd.php"> Kuwaiti Dinar</a></td>
              <td>KWD</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/LBP.gif" class="box">&nbsp;&nbsp; Lebanon</td>
              <td>Beirut</td>
              <td><a rel="nofollow" href="currency-lebanon-pounds-lbp-usd.php"> Lebanon Pounds</a></td>
              <td>LBP</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/MYR.gif" class="box">&nbsp;&nbsp; Malaysia</td>
              <td>Kuala Lumpur</td>
              <td><a rel="nofollow" href="currency-malaysian-ringgit-myr-usd.php"> Malaysian Ringgit</a></td>
              <td>MYR</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/MUR.gif" class="box">&nbsp;&nbsp; Mauritius</td>
              <td>Port Louis</td>
              <td><a rel="nofollow" href="currency-mauritius-rupees-mur-usd.php"> Mauritius Rupees</a></td>
              <td>MUR</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/MXN.gif" class="box">&nbsp;&nbsp; Mexico</td>
              <td>Mexico City</td>
              <td><a rel="nofollow" href="currency-mexico-pesos-mxn-usd.php"> Mexico Pesos</a></td>
              <td>MXN</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/MAD.gif" class="box">&nbsp;&nbsp; Morocco</td>
              <td>Rabat</td>
              <td><a rel="nofollow" href="currency-morocco-dirhams-mad-usd.php"> Morocco Dirhams</a></td>
              <td>MAD</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/NZD.gif" class="box">&nbsp;&nbsp; New Zealand</td>
              <td>Wellington</td>
              <td><a rel="nofollow" href="currency-newzealand-$-nzd-usd.php"> NewZealand $</a></td>
              <td>NZD</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/NOK.gif" class="box">&nbsp;&nbsp; Norway</td>
              <td>Oslo</td>
              <td><a rel="nofollow" href="currency-norwegians-krone-nok-usd.php"> Norwegians Krone</a></td>
              <td>NOK</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/OMR.gif" class="box">&nbsp;&nbsp; Oman</td>
              <td>Muscat</td>
              <td><a rel="nofollow" href="currency-omani-riyal-omr-usd.php"> Omani Riyal</a></td>
              <td>OMR</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/PKR.gif" class="box">&nbsp;&nbsp; Pakistan</td>
              <td>Islamabad</td>
              <td><a rel="nofollow" href="currency-pakistan-rupee-pkr-usd.php"> Pakistan Rupee</a></td>
              <td>PKR</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/PEN.gif" class="box">&nbsp;&nbsp; Peru</td>
              <td>Lima</td>
              <td><a rel="nofollow" href="currency-peru-nuevos-soles-pen-usd.php"> Peru Nuevos Soles</a></td>
              <td>PEN</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/PHP.gif" class="box">&nbsp;&nbsp; Philippines</td>
              <td>Manila</td>
              <td><a rel="nofollow" href="currency-philippines-pesos-php-usd.php"> Philippines Pesos</a></td>
              <td>PHP</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/PLN.gif" class="box">&nbsp;&nbsp; Poland</td>
              <td>Warsaw</td>
              <td><a rel="nofollow" href="currency-poland-zlotych-pln-usd.php"> Poland Zlotych</a></td>
              <td>PLN</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/QAR.gif" class="box">&nbsp;&nbsp; Qatar</td>
              <td>Doha</td>
              <td><a rel="nofollow" href="currency-qatari-riyal-qar-usd.php"> Qatari Riyal</a></td>
              <td>QAR</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/RON.gif" class="box">&nbsp;&nbsp; Romania</td>
              <td>Bucharest</td>
              <td><a rel="nofollow" href="currency-romania-new-lei-ron-usd.php"> Romania New Lei</a></td>
              <td>RON</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/RUB.gif" class="box">&nbsp;&nbsp; Russian Federation
              </td>
              <td>Moscow</td>
              <td><a rel="nofollow" href="currency-russia-rubles-rub-usd.php"> Russia Rubles</a></td>
              <td>RUB</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/SAR.gif" class="box">&nbsp;&nbsp; Saudi Arabia</td>
              <td>Riyadh</td>
              <td><a rel="nofollow" href="currency-saudi-riyal-sar-usd.php"> Saudi Riyal</a></td>
              <td>SAR</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/SGD.gif" class="box">&nbsp;&nbsp; Singapore</td>
              <td>Singapore</td>
              <td><a rel="nofollow" href="currency-singapore-dollar-sgd-usd.php"> Singapore Dollar</a></td>
              <td>SGD</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/SKK.gif" class="box">&nbsp;&nbsp; Slovakia</td>
              <td>Bratislava</td>
              <td><a rel="nofollow" href="currency-slovakia-koruny-skk-usd.php"> Slovakia Koruny</a></td>
              <td>SKK</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/ZAR.gif" class="box">&nbsp;&nbsp; South Africa</td>
              <td>Pretoria</td>
              <td><a rel="nofollow" href="currency-south-africa-rand-zar-usd.php"> South Africa Rand</a></td>
              <td>ZAR</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/KRW.gif" class="box">&nbsp;&nbsp; South Korea</td>
              <td>Seoul</td>
              <td><a rel="nofollow" href="currency-south-korea-won-krw-usd.php"> South Korea Won</a></td>
              <td>KRW</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/LKR.gif" class="box">&nbsp;&nbsp; Sri Lanka</td>
              <td>Colombo</td>
              <td><a rel="nofollow" href="currency-sri-lanka-rupees-lkr-usd.php"> Sri Lanka Rupees</a></td>
              <td>LKR</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/HRK.gif" class="box">&nbsp;&nbsp; State of Croatia</td>
              <td>Zagreb</td>
              <td><a rel="nofollow" href="currency-croatia-kuna-hrk-usd.php"> Croatia Kuna</a></td>
              <td>HRK</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/SDG.gif" class="box">&nbsp;&nbsp; Sudan</td>
              <td>Khartoum</td>
              <td><a rel="nofollow" href="currency-sudan-pounds-sdg-usd.php"> Sudan Pounds</a></td>
              <td>SDG</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/SEK.gif" class="box">&nbsp;&nbsp; Sweden</td>
              <td>Stockholm</td>
              <td><a rel="nofollow" href="currency-swedish-korona-sek-usd.php"> Swedish Korona</a></td>
              <td>SEK</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/CHF.gif" class="box">&nbsp;&nbsp; Switzerland</td>
              <td>Bern</td>
              <td><a rel="nofollow" href="currency-swiss-franc-chf-usd.php"> Swiss Franc</a></td>
              <td>CHF</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/TWD.gif" class="box">&nbsp;&nbsp; Taiwan</td>
              <td>Taipei</td>
              <td><a rel="nofollow" href="currency-taiwan-new-dollars-twd-usd.php"> Taiwan New Dollars</a></td>
              <td>TWD</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/THB.gif" class="box">&nbsp;&nbsp; Thailand</td>
              <td>Bangkok</td>
              <td><a rel="nofollow" href="currency-thai-bhat-thb-usd.php"> Thai Bhat</a></td>
              <td>THB</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/TTD.gif" class="box">&nbsp;&nbsp; Trinidad &amp; Tobago
              </td>
              <td>Port-of-Spain</td>
              <td><a rel="nofollow" href="currency-trinidad-and-tobago-dollars-ttd-usd.php"> Trinidad and Tobago
                  Dollars</a></td>
              <td>TTD</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/TND.gif" class="box">&nbsp;&nbsp; Tunisia</td>
              <td>Tunis</td>
              <td><a rel="nofollow" href="currency-tunisia-dinars-tnd-usd.php"> Tunisia Dinars</a></td>
              <td>TND</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/TRY.gif" class="box">&nbsp;&nbsp; Turkey</td>
              <td>Ankara</td>
              <td><a rel="nofollow" href="currency-turkey-new-lira-try-usd.php"> Turkey New Lira</a></td>
              <td>TRY</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/AED.gif" class="box">&nbsp;&nbsp; United Arab Emirates
              </td>
              <td>Abu Dhabi</td>
              <td><a rel="nofollow" href="currency-u.a.e-dirham-aed-usd.php"> U.A.E Dirham</a></td>
              <td>AED</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/GBP.gif" class="box">&nbsp;&nbsp; United Kingdom</td>
              <td>London</td>
              <td><a rel="nofollow" href="currency-uk-pound-sterling-gbp-usd.php"> UK Pound Sterling</a></td>
              <td>GBP</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/USD.gif" class="box">&nbsp;&nbsp; United States of
                America</td>
              <td>Washington, DC</td>
              <td><a rel="nofollow" href="currency-us-dollar-usd-usd.php"> US Dollar</a></td>
              <td>USD</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/VEF.gif" class="box">&nbsp;&nbsp; Venezuela</td>
              <td>Caracas</td>
              <td><a rel="nofollow" href="currency-venezuela-bolivares-fuertes-vef-usd.php"> Venezuela Bolivares
                  Fuertes</a></td>
              <td>VEF</td>
            </tr>
            <tr bgcolor="#ffffff">
              <td><img src="{{url('')}}/website_assets/img/flag/VND.gif" class="box">&nbsp;&nbsp; Vietnam</td>
              <td>Hanoi</td>
              <td><a rel="nofollow" href="currency-vietnam-dong-vnd-usd.php"> Vietnam Dong</a></td>
              <td>VND</td>
            </tr>
            <tr bgcolor="#efefef">
              <td><img src="{{url('')}}/website_assets/img/flag/ZMK.gif" class="box">&nbsp;&nbsp; Zambia</td>
              <td>Lusaka</td>
              <td><a rel="nofollow" href="currency-zambia-kwacha-zmk-usd.php"> Zambia Kwacha</a></td>
              <td>ZMK</td>
            </tr>
          </tbody>

        </table>
      </div>
    </div>
  </section>
  @endsection