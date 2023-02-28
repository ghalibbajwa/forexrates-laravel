@extends('layouts.website.master')
@section('content')
<div class="content-wrapper">

    {{-- <div class="breadcrumb-wrap bg-f br-1">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>International Forex Rate</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li>International Forex Rate</li>
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
                        <h2>International Forex Rates</h2>
                    </div>
                </div>
                <div class="col-md-12 mb-40">
                    <p>FOREXRATES.pk, Pakistan's top currency rates portal, provides you with updated International currency exchange rates. Currency exchange rates in Pakistan are not quite the same as open markets, especially the dollar rate. In Pakistan, Banks generally charge a higher exchange rate on the currency value. We timely update the International currency exchange rate on our website; here, you will find Internation currency exchange rates history, graphs, and charts as per US Dollar and all other currencies and vice versa.</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-xl-12 col-lg-12">
                    <form  action="{{route('International_forex_rate')}}" method="GET" class="convert-form">
                        @csrf
                        <div class="row">

                            <h5> Select Date and Base Currency</h5>
                        </div>
                        <div class="row">
                                <div class="col-lg-3">
                                    <label for="currency"
                                        style="display: block;color: #000;font-weight: 400;margin-top: 11px;margin-bottom: 10px">Base
                                        Currency</label>
                                    <select name="base_currency" id="base_currency">
                                        @foreach ($currencies as $currency)
                                            
                                        <option value="{{$currency->symbol}}" {{$base_currency == $currency->symbol ? 'selected' : null}}>{{$currency->symbol}} - {{$currency->country}}</option>
                                        @endforeach
                                        {{-- <option value="2">EUR - Euro</option>
                                        <option value="3">CAD - Canadian Dollar</option> --}}
                                    </select>
                                </div>
                            
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="currency"
                                        style="display: block;color: #000;font-weight: 400;margin-top: 11px;margin-bottom: 10px">
                                        Date</label>
                                        <input type="hidden" name="datevalues[]" id="datevalues" value="{{json_encode($dates[0])}}">
                                        <input type="date"   id="mydate" name="mydate">

                                </div>

                            </div>
                            <div class="col-lg-2">
               
                            <div class="col-lg-2 text-lg-end" style="margin-top: 43px">
                                <button type="submit" class="btn style1" style="float: left;">Show<i
                                        class="ri-arrow-right-s-line"></i></button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <h5>Major Countries</h5>
            <div class="exchange-table">
                <table class="table">
                    <thead>
                        <tr>
                            {{-- <th scope="col">
                                <div class="inverse">
                                    <span>Inverse</span>
                                    <input type="checkbox" id="switch" />
                                    <label for="switch">Toggle</label>
                                </div>
                            </th> --}}
                            <th scope="col">Currency</th>
                            <th scope="col">Symbol</th>
                            <th scope="col">Unit Per {{$base_currency}}</th>
                            <th scope="col">{{$base_currency}} per Unit</th>

                            <th scope="col">Chart(24h)</th>
                            {{-- <th scope="col"><span class="action"><i class="ri-edit-line"></i>Edit</span></th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($iratesmajor as $key => $rate)
                       
                        <tr>
                            <td>
                                <img src="{{url('').'/website_assets/img/flag/'.$rate->Symbol.'.gif'}}" class="box">&nbsp;&nbsp;
                                {{ $rate->Currency}}
                            </td>
                            <td>
                                {{ $rate->Symbol}}
                            </td>
                            <td>
                                {{ round(number_format((float)(1 / round(number_format((float)($base_currency_rate / $rate->Units_per_USD), 4, '.', ''),4)), 4, '.', ''),4)}}
                            </td>
                            <td>
                                {{round(number_format((float)($base_currency_rate / $rate->Units_per_USD), 4, '.', ''),4)}}
                            </td>
                            <td>
                                <a href="{{ route('detail_page_usd',[$rate->Symbol]) }}">
                                    <img src="{{url('')}}/website_assets/img/chart-img/chart-1.png" alt="Image">
                                </a>
                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
            <br>
            <h5>More Countries</h5>
            <div class="exchange-table">
                <table class="table">
                    <thead>
                        <tr>
                            {{-- <th scope="col">
                                <div class="inverse">
                                    <span>Inverse</span>
                                    <input type="checkbox" id="switch" />
                                    <label for="switch">Toggle</label>
                                </div>
                            </th> --}}
                            <th scope="col">Currency</th>
                            <th scope="col">Symbol</th>
                            <th scope="col">Unit Per USD</th>
                            <th scope="col">USD per Unit</th>

                            <th scope="col">Chart(24h)</th>
                            {{-- <th scope="col"><span class="action"><i class="ri-edit-line"></i>Edit</span></th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($iratesmore as $key => $rate)
                       
                        <tr>
                            <td>
                                <img src="{{url('').'/website_assets/img/flag/'.$rate->Symbol.'.gif'}}" class="box">&nbsp;&nbsp;
                                {{ $rate->Currency}}
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
                                <a href="{{ route('detail_page_usd',[$rate->Symbol]) }}">
                                    <img src="{{url('')}}/website_assets/img/chart-img/chart-1.png" alt="Image">
                                </a>
                            </td>
                        </tr>
                        

                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr>
            <a href="{{route('pak_open_market_rates')}}"> <span class="bot-head">Open Market Rates</span></a>
            <a href="{{route('pak_inter_bank_rate')}}"> <span class="bot-head">Inter Bank Rates</span></a>
          
        </div>
    </section>




</div>


@endsection

@section('page-scripts')
    
<script type="text/javascript">

    var dates=JSON.parse($('#datevalues').val());
    if (dates!='' || dates!=undefined) {
        // $('#mydate').attr('min',dates.mindate);
        $('#mydate').attr('max',dates.maxdate);
    }
    //getsymbols();
   
</script>
@endsection