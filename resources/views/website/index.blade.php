@extends('layouts.website.master')
@section('content')


<section class="exchange-table-wrap pt-200">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                <div style="margin-top: 60px" class="section-title style1 text-center mb-40">
                    <span>LIVE EXCHANGE RATES</span>
                    <h2>Welcome to FOREXRATES.pk</h2>
                </div>
            </div>
            <div class="col-md-12 mb-40">
                <p align="justify">
                    Forex.pk, Pakistan's best currency rates portal provides you upto the minute exchange rates in Pakistan Open Market, Pakistan Inter Bank & International Currency market. Here you will find currency rates archives, USD to PKR rates, graphs, charts, forex news, forex dealers directory, currency directory, gold rates, pakistan prize bond results and a wide range of information to help you explore the world of forex.

                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h4 style="color: #a3b30a;margin-top: 20px">International Currency Rates in US Dollar (USD)</h5>
                    <p>As on {{\Carbon\Carbon::now()->format('D, M d Y, h:i')}} PST</p>
                    <div class="exchange-table">
                        <table class="table" style="font-size: 15px;">
                            <thead>
                                <tr>

                                    <th scope="col">Currency</th>
                                    <th scope="col">Symbol</th>
                                    <th scope="col">Unit Per USD</th>
                                    <th scope="col">USD per Unit</th>
                                    <th scope="col">Chart(24h)</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($irates as $rate)
                                <tr>
                                    <td>
                                        <img src="{{url('').'/website_assets/img/flag/'.$rate->Symbol.'.gif'}}" class="box">
                                        {{-- <img src="{{$rate->url}}" class="box">&nbsp;&nbsp; --}}
                                        {{ $rate->Currency }}
                                    </td>
                                    <td>
                                        {{ $rate->Symbol}}
                                    </td>
                                    <td>
                                        {{ $rate->Units_per_USD }}
                                    </td>
                                    <td>
                                        {{ $rate->USD_per_Unit }}
                                    </td>
                                    <td>
                                        <a href="{{ route('detail_page_usd',['CAD']) }}">
                                            <img src="{{url('')}}/website_assets/img/chart-img/chart-1.png" alt="Image">
                                        </a>
                                    </td>
                                </tr>


                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <a href="{{route('International_forex_rate')}}"> <span class="bot-head">More Currencies</span></a>
            </div>
            <div class="col-lg-6">
                <h4 style="color: #a3b30a;    margin-top: 20px">Currency Rates Pakistan Open Market (PKR)</h5>
                    <p>As on {{\Carbon\Carbon::now()->format('D, M d Y, h:i')}} PST</p>
                    <div class="exchange-table">
                        <table class="table" style="font-size: 15px;">
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
                                @foreach ($openrates as $rate)
                                <tr>
                                    <td>
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
                                        <a href="{{ route('detail_page_pkr',['AUD','Open_Market_Rate']) }}">
                                            <img src="{{url('')}}/website_assets/img/chart-img/chart-1.png" alt="Image">
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <a href="{{route('detail_page_pkr',['USD','Open_Market_Rate'])}}"> <span class="bot-head">USD to PKR</span> </a> | <a href="{{route('detail_page_pkr',['EUR','Open_Market_Rate'])}}"> <span class="bot-head">EUR to PKR</span> </a>| <a href="{{route('detail_page_pkr',['AED','Open_Market_Rate'])}}"> <span class="bot-head">AED to PKR</span> </a> | <a href="{{route('detail_page_pkr',['SAR','Open_Market_Rate'])}}"> <span class="bot-head">SAR to PKR</span> </a> | <a href="{{route('detail_page_pkr',['JPY','Open_Market_Rate'])}}"> <span class="bot-head">JPY to PKR</span> </a> | <a href="{{route('detail_page_pkr',['CNY','Open_Market_Rate'])}}"> <span class="bot-head">CNY to PKR</span> </a> | <a href="{{route('detail_page_pkr',['GBP','Open_Market_Rate'])}}"> <span class="bot-head">GBP to PKR</span> </a>
                    
                    <hr>
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          Select Currency
                        </button>
                        <div class="dropdown-menu" data-menu="none" style="display: none;max-height: 150px !important;overflow-y: scroll;">
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['USD','Open_Market_Rate'])}}">USD to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['AUD','Open_Market_Rate'])}}">AUD to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['BHD','Open_Market_Rate'])}}">BHD to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['CAD','Open_Market_Rate'])}}">CAD to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['CNY','Open_Market_Rate'])}}">CNY to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['DKK','Open_Market_Rate'])}}">DKK to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['EUR','Open_Market_Rate'])}}">EUR to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['HKD','Open_Market_Rate'])}}">HKD to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['INR','Open_Market_Rate'])}}">INR to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['JPY','Open_Market_Rate'])}}">JPY to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['KWD','Open_Market_Rate'])}}">KWD to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['MYR','Open_Market_Rate'])}}">MYR to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['NZD','Open_Market_Rate'])}}">NZD to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['NOK','Open_Market_Rate'])}}">NOK to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['OMR','Open_Market_Rate'])}}">OMR to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['QAR','Open_Market_Rate'])}}">QAR to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['SAR','Open_Market_Rate'])}}">SAR to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['SGD','Open_Market_Rate'])}}">SGD to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['SEK','Open_Market_Rate'])}}">SEK to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['CHF','Open_Market_Rate'])}}">CHF to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['THB','Open_Market_Rate'])}}">THB to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['AED','Open_Market_Rate'])}}">AED to PKR</a>
                            <a class="dropdown-item" href="{{route('detail_page_pkr',['GBP','Open_Market_Rate'])}}">GBP to PKR</a>
                        </div>
                    </div>
                    <hr>
                    <a href="{{route('pak_open_market_rates')}}"> <span class="bot-head">More Currencies</span></a>
                    <a href="{{route('pak_inter_bank_rate')}}"> <span class="bot-head">Inter Bank Rates</span></a>
            </div>
        </div>
    </div>
</section>

<section class="blog-wrap pt-100 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                <div class="section-title style1 text-center mb-40">
                    <h2>Currency Conversions</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 pb-5" style="padding-right: 84px">
                    <h4 style="color: #a3b30a;">CURRENCY CONVERTER</h4>
                    <div class="form-group">
                        <label for="currency">Convert Amount</label>
                        <input type="number" placeholder="ammont" id="amount" name="currency">
                    </div>
                    <div class="form-group">
                        <label for="country_from">From</label>
                        <select name="country_from" id="country_from">
                            <option value="USD">USD - US Dollar</option>
                            @foreach ($currencies as $currency)
                                <option value="{{$currency->symbol}}">{{$currency->symbol}} - {{$currency->country}}</option>
                                
                            @endforeach
                         </select>
                    </div>
                    <div class="form-group">
                        <label for="country_to">To</label>
                        <select name="country_to" id="country_to">
                            <option value="PKR">PKR - Pakistan Rupees </option>
                            @foreach ($currencies as $currency)
                                <option value="{{$currency->symbol}}">{{$currency->symbol}} - {{$currency->country}}</option>
                            @endforeach
                           </select>
                    </div>
                        <div>
                        <p><b>Result:</b> <span id="res">0</span></h5>
                    </div>
                    <button type="button" id="convert" class="btn style1 float-right">CONVERT NOW</button>
                </div>


                <div class="col-lg-6 pb-5" style="padding-right: 84px">
                    <h4 style="color: #a3b30a;">CURRENCY ARCHIVE</h4>
                    <h5 style="text-align: center">International</h5>
                    <div class="form-group">
                        <label for="country_from">Base Currency</label>
                        <select name="country_from" id="country_from">
                            <option value="1">USD - US Dollar</option>
                            <option value="2">EUR - Euro</option>
                            <option value="3">CAD - Canadian Dollar</option>
                            <option value="9">JPY - Japanese Yen </option>
                            <option value="66">PKR - Pakistan Rupees </option>
                            <option value="21">AED - U.A.E Dirham </option>
                            <option value="22">GBP - UK Pound Sterling </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="country_to">Required Currency</label>
                        <select name="country_to" id="country_to">
                            <option value="1">USD - US Dollar</option>
                            <option value="2">EUR - Euro</option>
                            <option value="3">CAD - Canadian Dollar</option>
                            <option value="9">JPY - Japanese Yen </option>
                            <option value="66">PKR - Pakistan Rupees </option>
                            <option value="21">AED - U.A.E Dirham </option>
                            <option value="22">GBP - UK Pound Sterling </option>
                        </select>
                    </div>
                    <a href="{{route('currency_rates',['USD','PKR'])}}"> <button type="button" class="btn style1 float-right">Show NOW</button></a>

                    <h5 style="margin-top: 5px;text-align: center">Pakistan</h5>
                    <div class="form-group">
                        <label for="country_to">Required Currency</label>
                        <select name="country_from" id="country_from">
                            <option value="1">USD - US Dollar</option>
                            <option value="2">EUR - Euro</option>
                            <option value="3">CAD - Canadian Dollar</option>
                            <option value="9">JPY - Japanese Yen </option>
                            <option value="66">PKR - Pakistan Rupees </option>
                            <option value="21">AED - U.A.E Dirham </option>
                            <option value="22">GBP - UK Pound Sterling </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="country_to">Look in</label>
                        <select name="Rates" id="Rates">

                            <option value="OPEN" selected="">Pak Open Market Rates</option>
                            <option value="INTER">Pak Inter Bank Rates</option>
                            {{-- <option value="INTL">Intl Forex Rates</option> --}}

                        </select>
                    </div>
                    <a href="{{route('currency_rates',['USD','PKR'])}}"> <button type="button" class="btn style1 float-right">Show NOW</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-wrap pb-75">
    <div class="container">
        <div class="row">
            <h4 style="padding-left:0px;margin-top:20px;"><a href="{{route('gold_rates')}}">Gold Rates</a></h4>
            Investment in gold bullion means that your money is protected from inflation—this is enough for why you
            should invest in gold bullion. FOREXRATES.pk provide you with detailed gold rate analysis and history charts
            from the International Gold market by minute-to-minute update. For gold bullion coins collecting and other
            precious metal investments, you must be aware of Gold, silver, and platinum bullion rates.
            <h4 style="padding-left:0px;margin-top:20px;"><a href="{{route('converter')}}">Currency Rate Archive & Charts</a></h4>
            Forex charts assist the investor by providing a visual representation of exchange rate fluctuations. Many
            variables affect currency exchange rates, such as interest rates, bank policies, geopolitics, and even the
            time of day may affect exchange rates.
            <h4 style="padding-left:0px;margin-top:20px;">Currency Brokers Directory</h4>
            Choosing the best forex broker is important. In our Forex Brokers Directory.
             {{-- you'll find guides on choosing
            the best forex brokerage firm.
            • H & H Exchange Co. (Pvt) Ltd.
            • Glaxy Exchange (Pvt.) Ltd.
            • DollarEast Exchange (Pvt) Ltd.
            • Habib Exchange Co.
            <a href="{{route('forex_brokers')}}">Pakistani Money Exchange</a>  --}}
            <a href="{{route('forex_brokers_directory')}}">Worldwide Forex Brokers </a> 

         
        </div>
        
    </div>
</section>
@endsection

@section('page-scripts')
    
<script type="text/javascript">

    $(document).ready(function(){
        $('.dropdown-toggle').click(function(){

            var menu = $('.dropdown-menu').data('menu');
            if(menu == "none"){
                $('.dropdown-menu').css('display','block');
                $('.dropdown-menu').data('menu','block');
            }else{
                $('.dropdown-menu').css('display','none');
                $('.dropdown-menu').data('menu','none');
            }
        });
    });
    $("#convert").click(function()
    {

        var amount=$('#amount').val();
        var from=$('#country_from').val();
        var to=$('#country_to').val();
        console.log(amount+from+to);
        axios
            .post('{{route("convert-currency")}}', {
                _token: '{{csrf_token()}}',
                _method: 'post',
                amount:amount,
                from: from,
                to: to,
            })
            .then(function (responsive) {
                console.log(responsive.data);
                
                $('#res').text(responsive.data.result); 
                // getResult(responsive.data)
                // $('#res').text(responsive.result);
            })
            .catch(function (error) {
                console.log(error);
            });
        // var myHeaders = new Headers();
        // myHeaders.append("apikey", "BpG8ToxSGdpLnDPUUouDEfbE5CCkyZ8y");

        // var requestOptions = {
        // method: 'GET',
        // redirect: 'follow',
        // };

        // fetch("https://v6.exchangerate-api.com/v6/YOUR-API-KEY/pair/EUR/GBP", requestOptions)
        // fetch("https://api.apilayer.com/exchangerates_data/convert?to="+to+"&from="+from+"&amount="+amount+"", requestOptions)
        // .then(response => response.text())
        // .then(result => getResult(result))
        // .catch(error => console.log('error', error));
    });

    // function getResult(data)
    // {
    //     if (data!=null || data!=undefined) {
    //         var res=JSON.parse(data);
    //         $('#res').text(res.data); 
    //     }
       
    // }

    // function getsymbols(){
    //     //         var myHeaders = new Headers();
    //     // myHeaders.append("apikey", "BpG8ToxSGdpLnDPUUouDEfbE5CCkyZ8y");

    //     var requestOptions = {
    //     method: 'GET',
    //     redirect: 'follow',
    //     // headers: myHeaders
    //     };

    //     fetch("https://api.apilayer.com/exchangerates_data/symbols", requestOptions)
    //     .then(response => response.text())
    //     .then(result => getData(result))
    //     .catch(error => console.log('error', error));
    // } 
    
    // function getData(data)
    // {
    //     var html='';
    //     if (data!=null || data!=undefined) {
            
    //         var res=JSON.parse(data);
    //         $.map(res['symbols'], function(val, key) {
                
    //             html+='<option value="'+key+'">'+val+'-'+key+'</option>';
                
    //         });   
    //         // $('#country_from').html('');
    //         // $('#country_from').append(html);

    //         // $('#country_to').html('');
    //         // $('#country_to').append(html);

    //         $('#country_from').val('USD')
    //         $('#country_to').val('PKR')


    //     }
       
    // }

    // getsymbols();
   
</script>
@endsection