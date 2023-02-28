@extends('layouts.website.master')
@section('content')
<div class="content-wrapper">

    {{-- <div class="breadcrumb-wrap bg-f br-1">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Pak Open Market Rates</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li>Pak Open Market Rates</li>
                </ul>
            </div>
        </div>
    </div> --}}




    <section class="exchange-table-wrap pb-100 pt-5">
        <div class="container" style="margin-top: 0px">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="section-title style1 text-center mb-40">
                        <span>LIVE EXCHANGE RATES</span>
                        <h2>Pakistan Open Market Forex Rates</h2>
                        
                    </div>
                </div>
                <div class="col-md-12 mb-40">
                    <p>FOREXRATES.pk, Pakistan's top currency rates portal, provide you with date open market currency rates of Pakistan. Currency exchange rates in Pakistan's open market are not quite the same as interbank, especially the dollar rate. Here you can find USD to PKR, EURO to PKR, SAR to PKR, and all other currency rates against PKR. In Pakistan, Banks generally charge a higher exchange rate on the currency. We timely update the currency rate on our website, mainly USD to PKR, to give our visitors a good experience. Here you will find open market currency rates history, graphs, charts, and a wide range of information to help you explore the Pakistan Currency Open Market</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-xl-6 col-lg-8">
                    <form action="{{route('pak_open_market_rates')}}" method="GET" class="convert-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-2">
                                <label for="currency" style="display: block;color: #000;
                                font-weight: 400;
                                
                                margin-top: 11px;">Select Date</label>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="hidden" name="datevalues[]" id="datevalues" value="{{json_encode($dates[0])}}">
                                    <input type="date"   id="mydate" name="mydate">
                                </div>
                                    
                            </div>
                            <div class="col-lg-4 text-lg-end">
                                <button type="submit" class="btn style1">Show<i class="ri-arrow-right-s-line"></i></button>
                            </div>
                            
                        </div>
                       
                    </form>
                </div>
            </div>
            <div class="exchange-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Remittance</th>
                            <th scope="col">Symbol</th>
                            <th scope="col">Buying</th>
                            <th scope="col">Selling</th>
                            <th scope="col">Chart(24h)</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>

                            <td>
                                <img src="{{url('')}}/website_assets/img/flag/USD-DD.gif" class="box">&nbsp;&nbsp; US Dollar DD
                            </td>

                            <td>
                                USD-DD
                            </td>



                            <td>224.4</td>



                            <td>226.65</td>



                         
                            <td>
                                <a href="{{ route('detail_page_pkr',['USD-DD','Open_Market_Rate']) }}">
                                    <img src="{{url('')}}/website_assets/img/chart-img/chart-1.png" alt="Image">
                                </a>

                            </td>
                                




                        </tr>
                        <tr>

                            <td>
                                <img src="{{url('')}}/website_assets/img/flag/USD-DD.gif" class="box">&nbsp;&nbsp; US Dollar TT
                            </td>

                            <td>
                                USD-TT
                            </td>



                            <td>224.4</td>



                            <td>226.65</td>



                         
                            <td>
                                <a href="{{ route('detail_page_pkr',['USD-TT','Open_Market_Rate']) }}">
                                    <img src="{{url('')}}/website_assets/img/chart-img/chart-1.png" alt="Image">
                                </a>

                            </td>
                                




                        </tr>
                       
                        
                    </tbody>
                </table>
            </div>
            <div class="exchange-table">
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

                       
                       
                        
                    </tbody>
                </table>
            </div>
            <hr>
            <a href="{{route('detail_page_pkr',['USD','Open_Market_Rate'])}}"><span class="bot-head">USD to PKR</span> </a> | <a href="{{route('detail_page_pkr',['EUR','Open_Market_Rate'])}}"><span class="bot-head">EUR to PKR</span> </a>| <a href="{{route('detail_page_pkr',['AED','Open_Market_Rate'])}}"><span class="bot-head">AED to PKR</span> </a> | <a href="{{route('detail_page_pkr',['SAR','Open_Market_Rate'])}}"><span class="bot-head">SAR to PKR</span> </a> | <a href="{{route('detail_page_pkr',['JPY','Open_Market_Rate'])}}"><span class="bot-head">JPY to PKR</span> </a> | <a href="{{route('detail_page_pkr',['CNY','Open_Market_Rate'])}}"><span class="bot-head">CNY to PKR</span> </a> | <a href="{{route('detail_page_pkr',['GBP','Open_Market_Rate'])}}"><span class="bot-head">GBP to PKR</span> </a>
                
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
            <a href="{{route('pak_inter_bank_rate')}}"> <span class="bot-head">Inter Bank Rates</span></a>
            <a href="{{route('International_forex_rate')}}"> <span class="bot-head">Inter International Rates</span></a>
            <div class="row align-items-center">
                <div class="col-sm-6">
                   
                </div>
                <div class="col-sm-6 text-sm-end">
                    
                </div>
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
    var dates=JSON.parse($('#datevalues').val());
    if (dates!='' || dates!=undefined) {
        // $('#mydate').attr('min',dates.mindate);
        $('#mydate').attr('max',dates.maxdate);
    }
   
    
  

    //getsymbols();
   
</script>
@endsection
