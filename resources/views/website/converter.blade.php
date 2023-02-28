@extends('layouts.website.master')
@section('content')

<div class="content-wrapper">



    <section class="exchange-table-wrap pb-100 pt-5">
        <div class="container" style="margin-top: 0px">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="section-title style1 text-center mb-40">
                        <span>LIVE EXCHANGE RATES</span>
                        <h2> Currency Conversion as per Pakistan Open Market Rates</h2>
                    </div>
                </div>
                <div class="col-md-12 mb-40">
                    <p>Here you can easily convert currency by using our detailed currency converter tool. Using our currency conversion tool, you can easily convert from any currency to any other currency and get historical currency data in multiple formats.</p>
                </div>
              
            <div class="row mb-3">
                <div class="col-xl-12 col-lg-12">
                    <form action="#" class="convert-form">

                        <div class="convert-box">
                            <div class="row conver-box-st" style="padding: 50px;">
                                <div class="col-md-6" >
                                    <table width="100%" border="0" cellpadding="2" cellspacing="2" class=""
                                    style="font-weight: bold;">
                                    <tbody>
                                        <tr>
                                            <td align="right" class="bluetext">
                                                <select name="country_from" id="country_from">
                                                    <option value="USD">USD - US Dollar</option>
                                                    @foreach ($currencies as $currency)
                                                        <option value="{{$currency->symbol}}">{{$currency->symbol}} - {{$currency->country}}</option>
                                                        
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td align="center" class="bluetext">&nbsp;&nbsp;</td>
                                            <td align="left" class="bluetext">
                                               
                                                <select name="country_to" id="country_to">
                                                    <option value="PKR">PKR - Pakistan Rupees </option>
                                                    @foreach ($currencies as $currency)
                                                        <option value="{{$currency->symbol}}">{{$currency->symbol}} - {{$currency->country}}</option>
                                                    @endforeach
                                                </select>
                                            </td>

                                        </tr>
                                        {{-- <tr>
                                            <td align="right" valign="top" class="redtext"><span class="fromtext">1.0000
                                                USD </span></td>
                                            <td align="center" class="redtext">=</td>
                                            <td align="left" class="redtext"><span class="totext"> 224.9000 PKR </span></td>
                                        </tr> --}}
                                        <tr>
                                            <td colspan="3" align="center" class="boldtext">
                                                <span
                                                class="normaltext">&nbsp;&nbsp;As on {{\Carbon\Carbon::now()->format('D, M d Y, h:i')}} PST, </span></td>
                                        </tr>
                                        <tr class="heading2">
                                            <td>

                                                <p>
                                                    <p><b>Result:</b> <span id="res">0</span></h5>
                                                </p>
                                                <button type="button" id="convert" class="btn style1 float-right">CONVERT NOW</button>
                                            </td>
                                        
                                        </tr>
                                        {{-- <tr class="heading2">
                                            <td align="right" class="bluetext">
                                                <input type="text" id="frominput"
                                                    value="1.0" class="bluetext inputchnage" size="8" 
                                                    title="Quick Converter: Enter amount to convert.">
                                                
                                            <td align="center" class="boldtext">|</td>
                                            <td align="left" class="bluetext">
                                                <input type="text" id="toinput"
                                                    value="1.0" class="bluetext inputchnage" size="8" 
                                                    title="Quick Converter: Enter amount to convert."
                                                    >
                                                
                                        </tr> --}}
                                    </tbody>
                                </table>
                                </div>
                                <div class="col-md-6 conver-amount-st">
                                   
                                    <div class="form-group">
                                        <label for="currency">Convert Amount</label>
                                        <input type="number" placeholder="amount" id="amount" name="currency">
                                    </div>
                                    <div class="form-group">
                                        <label for="country_from">From</label>
                                        <select name="country_from2" id="country_from2">
                                            <option value="USD">USD - US Dollar</option>
                                            @foreach ($currencies as $currency)
                                                <option value="{{$currency->symbol}}">{{$currency->symbol}} - {{$currency->country}}</option>
                                                
                                            @endforeach
                                         </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="country_to2">To</label>
                                        <select name="country_to2" id="country_to2">
                                            <option value="PKR">PKR - Pakistan Rupees </option>
                                            @foreach ($currencies as $currency)
                                                <option value="{{$currency->symbol}}">{{$currency->symbol}} - {{$currency->country}}</option>
                                            @endforeach
                                           </select>
                                    </div>
                                        <div>
                                        <p><b>Result:</b> <span id="res2">0</span></h5>
                                    </div>
                                    <button type="button" id="convert2" class="btn style1 float-right">CONVERT NOW</button>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-lg-4">

                                </div>
                               
                
                                <div class="col-lg-4">

                                </div>
                             
                
                                    
                                </div>
                            </div>
                            
                        </div>

                        

                    </form>
                </div>
                <hr>
                <div class="exchange-table" style="margin-top: 60px">
                    <h2>Currency Rates Pakistan Open Market (PKR)</h2>
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
                    
                </div>
                <hr>
                <a href="{{route('pak_open_market_rates')}}"> <span class="bot-head">More Currencies</span></a>
                <a href="{{route('pak_inter_bank_rate')}}"> <span class="bot-head">Inter Bank Rates</span></a>
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
            </div>


        </div>
    </section>


</div>

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

    var fromcurrency=0;
    var tocurrency=0;
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
                from: from,
                to: to,
                amount: amount,
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
       });
    $("#convert2").click(function()
    {

        var amount=$('#amount').val();
        var from=$('#country_from2').val();
        var to=$('#country_to2').val();
        console.log(amount+from+to);
        axios
            .post('{{route("convert-currency")}}', {
                _token: '{{csrf_token()}}',
                _method: 'post',
                from: from,
                to: to,
                amount: amount,
            })
            .then(function (responsive) {
                console.log(responsive.data.data);
                $('#res2').text(responsive.data.result); 
                // getResult(responsive.data)
                // $('#res').text(responsive.result);
            })
            .catch(function (error) {
                console.log(error);
            });
       });
    // $("#convert").click(function()
    // {

    //     var amount=$('#amount').val();
    //     var from=$('#country_from').val();
    //     var to=$('#country_to').val();

    //     var myHeaders = new Headers();
    //     myHeaders.append("apikey", "A8m4lnyZmJQR8KcIThrMrtQDd7wguAgA");

    //     var requestOptions = {
    //     method: 'GET',
    //     redirect: 'follow',
    //     headers: myHeaders
    //     };

    //     fetch("https://api.apilayer.com/exchangerates_data/convert?to="+to+"&from="+from+"&amount="+amount+"", requestOptions)
    //     .then(response => response.text())
    //     .then(result => getResult(result))
    //     .catch(error => console.log('error', error));
    // });

    // function getResult(data)
    // {
    //     if (data!=null || data!=undefined) {
    //         var res=JSON.parse(data);
    //         $('#res').text(res.result); 
    //     }
       
    // }

    // function getsymbols(){
    //             var myHeaders = new Headers();
    //     myHeaders.append("apikey", "A8m4lnyZmJQR8KcIThrMrtQDd7wguAgA");

    //     var requestOptions = {
    //     method: 'GET',
    //     redirect: 'follow',
    //     headers: myHeaders
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
    //         $('#country_from').html('');
    //         $('#country_from').append(html);

    //         // $('#country_to').html('');
    //         // $('#country_to').append(html);

    //         $('#country_from').val('USD')
    //         $('#country_to').val('PKR')

    //         $('#from').html('');
    //         $('#from').append(html);

    //         $('#to').html('');
    //         $('#to').append(html);

    //         $('#from').val('USD')
    //         $('#to').val('PKR')


    //     }
       
    // }

    // getsymbols();

    // function getvalues(from,to,id,val)
    // {
    //     var myHeaders = new Headers();
    //     myHeaders.append("apikey", "A8m4lnyZmJQR8KcIThrMrtQDd7wguAgA");

    //     var requestOptions = {
    //     method: 'GET',
    //     redirect: 'follow',
    //     headers: myHeaders
    //     };

    //     fetch("https://api.apilayer.com/exchangerates_data/latest?symbols="+to+"&base="+from+"", requestOptions)
    //     .then(response => response.text())
    //     .then(result => GetConvertData(JSON.parse(result),id,val))
    //     .catch(error => console.log('error', error));
    // }
    // getvalues('USD','PKR','','');

    // $('.changerate').on('change', function() {
        
    //     var from=$('#from').val();
    //     var to=$('#to').val();

    //     if (this.id=='to') {
    //         getvalues(to,from,this.id,this.value); 
    //     }
    //     else
    //     {
    //         getvalues(from,to,this.id,this.value);
    //     }



       

    // });
    // function GetConvertData(data,id,value)
    // {
    //     if (data!=null || data!=undefined) {
    //         $.map(data['rates'], function(val, key) {
    //             if (id=='') {
    //                 $('.totext').text(val +' '+ key);
    //                 fromcurrency=1;
    //                 tocurrency=val;
    //             }
    //             if (id=='from') {
                    
    //                 $('.fromtext').text(1+' '+value);
    //                 $('.totext').text(val+' '+key);
    //                 fromcurrency=1;
    //                 tocurrency=val;
    //             }
    //             if (id=='to') {
                    
    //                 fromcurrency=val;
    //                 tocurrency=1;
    //                 $('.fromtext').text(val+' '+key);
    //                 $('.totext').text(1+' '+value);
                    
    //             }
    //         }); 
               
                
    //     }
    // }

    // $(".inputchnage").on("keyup", function(e) {
        
        
       
    //     if(this.id=='frominput')
    //     {
    //         if (fromcurrency<tocurrency) {
    //             $('#toinput').val(this.value*tocurrency)
    //         }
    //         if(fromcurrency==tocurrency)
    //         {
    //             $('#toinput').val(this.value*tocurrency)
    //         }
    //         if (fromcurrency>tocurrency) {
    //             var cal=1/fromcurrency;
    //             $('#toinput').val(this.value*cal)
    //         }
            
    //     }

        
    //     if(this.id=='toinput')
    //     {
    //         if (fromcurrency>tocurrency) {
    //             $('#frominput').val(this.value*fromcurrency)
    //         }
    //         if(fromcurrency==tocurrency)
    //         {
    //             $('#frominput').val(this.value*fromcurrency)
    //         }
    //         if (fromcurrency<tocurrency) {
    //             var cal=1/tocurrency;
    //             $('#frominput').val(this.value*cal)
    //         }
            
    //     }
    // })
   
</script>

@endsection