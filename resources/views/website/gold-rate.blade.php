@extends('layouts.website.master')
@section('content')
<div class="content-wrapper">

    {{-- <div class="breadcrumb-wrap bg-f br-1">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Gold Rate
                    (Bullion Price)</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li>Gold Rate
                        (Bullion Price)</li>
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
                        <h2>Gold Rates</h2>
                    </div>
                </div>
                <div class="col-md-12 mb-40">
                    <p>FOREXRATES.pk offers the latest and up-to-date Gold rates in Pakistan as per the International market. We update the international market gold rate every fifteen minutes from authentic sources, and Gold rates may differ in every city of Pakistan. Karachi is the main hub of the gold market in Pakistan; Karachi is leading for gold rate, and every city follows Karachi Sarafa Bazar Association for the gold price. FOREXRATES.pk is not liable or responsible for any transactions based on the Gold mentioned above rate.</p>
                </div>
              
                <div class="col-xl-12 col-lg-12">
                    <form action="{{route('gold_rates')}}" method="GET" class="convert-form">
                        @csrf
                        <div class="row">

                            <h5 style="margin-top: 15px"> Select Date</h5>
                        </div>
                        <div class="row">
                            {{-- <div class="col-lg-3">
                                <label for="currency"
                                    style="display: block;color: #000;font-weight: 400;margin-top: 11px;margin-bottom: 10px">Base
                                    Currency</label>
                                <select name="country_from" disabled id="country_from">
                                    <option value="1" selected>USD - US Dollar</option>
                                    <option value="2">EUR - Euro</option>
                                    <option value="3">CAD - Canadian Dollar</option>
                                </select>
                            </div> --}}
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
                                {{-- <label for="currency"
                                    style="display: block;color: #000;font-weight: 400;margin-top: 11px;margin-bottom: 10px">No.
                                    of Decimal Digits </label>
                                <select name="decimals" id="decimals">

                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option selected="" value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select> --}}
                            </div>
                            <div class="col-lg-2 text-lg-end" style="margin-top: 43px">
                                <button type="submit" class="btn style1" style="float: left;">Show<i
                                        class="ri-arrow-right-s-line"></i></button>
                            </div>

                        </div>

                    </form>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-6">

                </div>
                @php
                    if(isset($search_date) && !empty($search_date)){
                        $date = $search_date;
                    }else{
                        $date = \Carbon\Carbon::now()->subHour(1)->format('M d, Y H');

                    }

                @endphp
                <div class="col-sm-6 text-sm-end">
                    <p class="update-status">Last Updated{{$date}}:00</p>
                </div>
            </div>
            <div class="row">

                <h5 style="margin-top: 15px"> Bullion / Gold Price Today</h5>
            </div>
            
            {{-- <div class="exchange-table"> --}}
                <table class="table table-responsive">
                    <thead>
                        <tr>
                        
                            <th scope="col">Metal</th>
                            <th scope="col">Symbol</th>
                            <th scope="col">PKR
                                for 10 Gm</th>
                            <th scope="col">PKR for 1 Tola</th>
                            <th scope="col">PKR for 1 Ounce</th>
                            <th scope="col">Chart(24h)</th>
                            {{-- <th scope="col"><span class="action"><i class="ri-edit-line"></i>Edit</span></th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($goldrates as $rate)
                        <tr>
                            <td>
                                
                                {{ $rate->metal }}
                            </td>
                            <td>
                                {{ $rate->symbol}}
                            </td>
                            <td>
                                {{ $rate->gm}}
                            </td>
                            <td>
                                {{ $rate->tola}}
                            </td>
                            <td>
                                {{ $rate->once}}
                            </td>
                            <td>
                                <a href="{{ route('detailgold_page_pkr',[$rate->symbol,'Gold_Rates']) }}">
                                    <img src="{{url('')}}/website_assets/img/chart-img/chart-1.png" alt="Image">
                                </a>
                            </td>
                        </tr>
                        @endforeach
                       
                       
                        
                            

                        
                    </tbody>
                </table>
            {{-- </div> --}}
            {{-- <hr> --}}
            <div class="row">

                <h5 style="margin-top: 15px">Gold Price in Pakistan</h5>
            </div>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th scope="col">Gold Rate</th>
                            <th scope="col">24K Gold</th>
                            <th scope="col">22K Gold</th>
                            <th scope="col">21K Gold</th>
                            <th scope="col">18K Gold</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($goldratespak as $ratepk)
                            <tr>
                                <td>
                                    {{$ratepk->Gold_Rate}}
                                </td>
                                <td>
                                    {{$ratepk->k24}}
                                </td>
                                <td>
                                    {{$ratepk->k22}}
                                </td>
                                <td>
                                    {{$ratepk->k21}}
                                </td>
                                <td>{{$ratepk->k18}}</td>
                            </tr>
                            
                        @endforeach
                        
                    </tbody>
                </table>
            <div class="row">
                <h5 style="margin-top: 15px">Gold Rates in other Major Currencies</h5>
            </div>
            <table class="table table-responsive">
                <thead>
                    <tr>
                    
                        <th scope="col">Currency</th>
                        <th scope="col">Symbol</th>
                        <th scope="col">10 Gm</th>
                        <th scope="col">1 Tola</th>
                        <th scope="col">1 Ounce</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($goldratesinter as $rateinter)
                        <tr>
                            <td>
                                <img src="{{url('').'/website_assets/img/flag/'.$rateinter->Symbol.'.gif'}}" class="box">
                                &nbsp;&nbsp;
                                {{ $rateinter->Currency }}
                            </td>
                            <td>
                                {{$rateinter->Symbol}}
                            </td>
                            <td>
                                {{$rateinter->Gm10}}
                            </td>
                            <td>
                                {{$rateinter->Tola1}}
                            </td>
                            <td>{{$rateinter->Ounce1}}</td>
                        </tr>
                        
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </section>




</div>


@endsection
@section('page-scripts')
    
<script type="text/javascript">

    var dates=JSON.parse($('#datevalues').val());
    if (dates!='' || dates!=undefined) {
        console.log(dates);
        // $('#mydate').attr('min',dates.mindate);
        $('#mydate').attr('max',dates.maxdate);
    }
    //getsymbols();
   
</script>
@endsection