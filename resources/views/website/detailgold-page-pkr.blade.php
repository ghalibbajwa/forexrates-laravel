@extends('layouts.website.master')
@section('content')
<style>
    .range{
        text-decoration: underline;
    }
</style>
<div class="content-wrapper ">
    <section class="exchange-table-wrap pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="section-title style1 text-center mb-40">
                        <span>LIVE EXCHANGE RATES</span>
                        <h2>Gold Rate in Pakistan </h2>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 ">
                    <div class="section-title style1 text-center mb-40">
                        Today Gold Price for {{$weight}} is PKR {{$today_price}}
                        <p>Per tola Gold rate in Pakistan as on {{\Carbon\Carbon::now()->format('D M d Y')}} is PKR {{$today_price}}, while the Gold rate for 10 grams is PKR {{$today_price}}. Gold rates may be different in every city of Pakistan. The latest Gold prices for different cities including Karachi, Lahore, Islamabad, Peshawar, Rawalpindi, Quetta, and Faisalabad are available below. FOREXRATES.pk offered latest and upto date Gold Price in Pakistan along with charts and defferences of Gold Rate Today, history and even more than that. </p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-6">
    
                    </div>
                    @php
                        if(isset($search_from_date) && !empty($search_from_date)){
                            $from_date = $search_from_date;
                        }else{
                            $from_date = \Carbon\Carbon::now()->subMonth(1)->format('M d, Y');
    
                        }
                        if(isset($search_to_date) && !empty($search_to_date)){
                            $to_date = $search_to_date;
                        }else{
                            $to_date = \Carbon\Carbon::now()->format('M d, Y');
    
                        }
    
                    @endphp
                    <div class="col-sm-6 text-sm-end" style="font-weight: bold">
                        From<span > {{$from_date}}</span>
                        To<span > {{$to_date}}</span>
                    </div>
                </div>
            {{-- <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div style="margin-top: 60px" class="section-title style1 text-center mb-40">
                        <span>LIVE EXCHANGE RATES</span>
                        <h2>
                            </h2>
                    </div>
                </div>
            </div> --}}
            <div class="row mb-3 col-md-6 offset-md-6" >
                <div class="col-xl-12 col-lg-12">
                    <form action="{{route('detailgold_page_pkr',[$symbol,'Gold_Rates'])}}" class="convert-form">

                        <div class="row">
                            <h6>Select Date Range</h6>
                        </div>
                        <div class="row">

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="currency"
                                        style="display: block;color: #000;font-weight: 400;margin-bottom: 10px">
                                        From Date</label>
                                    <input type="date" id="currency" name="from_date">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="currency"
                                        style="display: block;color: #000;font-weight: 400;margin-bottom: 10px">
                                        To Date</label>
                                    <input type="date" id="currency" name="to_date">
                                </div>
                            </div>

                            <div class="col-lg-2 text-lg-end" style="margin-top: 30px">
                                <button type="submit" class="btn style1" style="float: left;">Show<i
                                        class="ri-arrow-right-s-line"></i></button>
                            </div>

                        </div>

                    </form>
                    <div style="margin: 20px; margin-left:0px">
                        <h6>Quick Range</h6>
                        <p> 
                            <a class="range" href="{{route('detailgold_page_pkr',[$symbol,'Gold_Rates','7Days'])}}">7 Days</a>  
                            <a class="range" href="{{route('detailgold_page_pkr',[$symbol,'Gold_Rates','2Weeks'])}}">2 Weeks</a> 
                            <a class="range" href="{{route('detailgold_page_pkr',[$symbol,'Gold_Rates','1Mon'])}}">1 Mon</a>   
                            <a class="range" href="{{route('detailgold_page_pkr',[$symbol,'Gold_Rates','3Mon'])}}">3 Mon</a>   
                            <a class="range" href="{{route('detailgold_page_pkr',[$symbol,'Gold_Rates','6Mon'])}}">6 Mon</a>   
                            <a class="range" href="{{route('detailgold_page_pkr',[$symbol,'Gold_Rates','1Yr'])}}">1 Yr</a>    
                            <a class="range" href="{{route('detailgold_page_pkr',[$symbol,'Gold_Rates','2Yrs'])}}">2 Yrs</a>   
                            <a class="range" href="{{route('detailgold_page_pkr',[$symbol,'Gold_Rates','3Yrs'])}}">3 Yrs</a>
                        </p>
                        <strong>Weight Type in Chart:</strong> 

                        <a class="range" href="{{route('detailgold_page_pkr',[$symbol,'Gold_Rates','10Grams'])}}">10 Grams</a>  
                        <a class="range" href="{{route('detailgold_page_pkr',[$symbol,'Gold_Rates','1Tola'])}}">1 Tola</a>   
                        <a class="range" href="{{route('detailgold_page_pkr',[$symbol,'Gold_Rates','1Ounce'])}}">1 Ounce</a>      
                    </div> 
                    <div class="row mb-3 col-md-12">
                        <input type="hidden" id='symbol' value="{{ "Gold per 10 gram" }}">
                        <div style="display: inherit;">
                            {{-- <input type="text" id="C_AMOUNT" value="1" size="4" class="form-control"
                                title="Quick Converter: Enter amount to convert." style="width: 10%;"> --}}
                                {{-- 10 grams Gold Rate in Pakistan Rupee 
                                Gold Per 10 Gram --}}
                            <p style="padding-left: 10px;padding-top: 10px;"><span>{{$weight}} {{ $currency }}</span> 
                                {{-- = <span id="RATESPAN">{{end($data_periods)}}</span> --}}
                                 <span>in Pakistan Rupee (PKR)</span></p>
        
                        </div>
        
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6 col-md-12">
                    <div id="chart">

                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:55px">
                <div class="col-md-4">
                    <h5 style="margin-top: 15px">Gold Difference Trend </h5>
                    <span>Against Pakistan Rupee (PKR)</span>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Last Day Difference 
                                </td>
                                <td>
                                    0.62%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Last Month Difference
                                </td>
                                <td>
                                    1.05%
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Last Year Difference
                                </td>
                                <td>
                                    1.21%
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
                
                <div class="col-md-6 offset-md-2">
                    <h5 style="margin-top: 15px">Other Metal Rates </h5>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                            
                                <th scope="col">Metal</th>
                                <th scope="col">Symbol</th>
                                <th scope="col">10 Gm</th>
                                <th scope="col">1 Tola</th>
                                <th scope="col">1 Ounce</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> Gold</td>
                                <td> XAU</td>
                                <td> 129,366</td>
                                <td> 150,733</td>
                                <td> 402,381</td>
                            </tr>    

                            <tr>
                                <td> Palladium</td>
                                <td> XPD</td>
                                <td> 125,768</td>
                                <td> 146,540</td>
                                <td> 391,188</td>
                            </tr>    

                            <tr>
                                <td> Platinum</td>
                                <td> XPT</td>
                                <td> 71,832</td>
                                <td> 83,696</td>
                                <td> 223,426</td>
                            </tr>    

                            <tr>
                                <td> Silver</td>
                                <td> XAG</td>
                                <td> 1,668</td>
                                <td> 1,943</td>
                                <td> 5,187</td>
                            </tr>    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <h5 style="margin-top: 15px">Gold (XAU) in other Major Currencies  </h5>
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
                    @foreach ($goldrate_major_country as $m_rate)
                    <tr>
                        <td>
                            <img src="{{url('').'/website_assets/img/flag/'.$m_rate->Symbol.'.gif'}}" class="box">
                            &nbsp;&nbsp;
                            {{ $m_rate->Currency }}
                        </td>
                        <td>
                            {{$m_rate->Symbol}}
                        </td>
                        <td>
                            {{$m_rate->Gm10}}
                        </td>
                        <td>
                            {{$m_rate->Tola1}}
                        </td>
                        <td>{{$m_rate->Ounce1}}</td>
                    </tr>
                    @endforeach    
                </tbody>
            </table>
        </div>
    </div>
    </section>




{{-- {{dd()}} --}}

</div>


@endsection

@section('page-scripts')
<script>
    var symbol=$('#symbol').val();
    var options = {
        
          chart: {
            type: 'line',
            shadow: {
              enabled: false,
              color: '#bbb',
              top: 3,
              left: 2,
              blur: 3,
              opacity: 1
            }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
            width: 3,
            curve: 'smooth'
        },
        title: {
            text: ':: '+symbol+' in PKR',
            align: 'left',
            style: {
              fontSize: "16px",
			  	Weight: '900',
              color: '#3366CC',
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
              shade: 'dark',
              gradientToColors: ['#FDD835'],
              shadeIntensity: 5,
              type: 'horizontal',
              opacityFrom: 10,
              opacityTo: 10,
              stops: [0, 100, 100, 100]
            },
          },
          markers: {
            size: 0,
            opacity: 0.5,
            colors: ["#FFA41B"],
            strokeColor: "#fff",
            strokeWidth: 2,
             
            hover: {
              size: 5,
			  colors: ["#AAF44A"]
            }
          },
          xaxis: {
            type: 'datetime',
			title: {
              text: 'from {{\Carbon\Carbon::parse($date1)->format("M d Y")}} to {{\Carbon\Carbon::parse($date2)->format("M d Y")}}',
			 style: {
             fontSize: '14px',
              color: '#3366CC',
            }

            },
            categories: [
                @foreach ($dates as $date)
                @php
                echo '"'.$date->format('Y-m-d').'",';    
                @endphp    
                @endforeach
            ],
          },
          

          series: [{
          name: '1 PKR = {{$currency}}',
          data: [
              
            @foreach ($data_periods as $p_data)
            @php
            $d = $p_data <= 0 ? $p_data : str_replace(',','',$p_data);
                echo $d.",";
            @endphp    
            @endforeach
  
            ]
        }],

        };

        

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
</script>

<script>

</script>
@endsection