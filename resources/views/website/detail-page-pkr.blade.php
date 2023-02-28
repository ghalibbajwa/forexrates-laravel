@extends('layouts.website.master')
@section('content')

<div class="content-wrapper ">
    <section class="exchange-table-wrap pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div style="margin-top: 60px" class="section-title style1 text-center mb-40">
                        <span>LIVE EXCHANGE RATES</span>
                        <h2>{{str_replace('_',' ',$type)}} - PKR to {{ $currency }}
                            </h2>
                    </div>
                </div>
            </div>
            <div class="row mb-3 col-md-6 offset-md-6">
                <input type="hidden" id='symbol' value="{{ $symbol }}">
                <div style="display: inherit;">
                    <input type="text" id="C_AMOUNT" value="1" size="4" class="form-control"
                        title="Quick Converter: Enter amount to convert." style="width: 10%;">
                    <p style="padding-left: 10px;padding-top: 10px;"><span> {{ $currency }}</span> = <span
                            id="RATESPAN">{{end($data_periods)}}</span> <span>Pakistan Rupee (PKR)</span></p>

                </div>

            </div>
            <div class="row mb-3 col-md-6 offset-md-6" >
                <div class="col-xl-12 col-lg-12">
                    <form action="{{route('detail_page_pkr',[$symbol,$type])}}" class="convert-form">

                        <div class="row">
                            <h6>Select Date Range</h6>
                        </div>
                        <div class="row">

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="currency"
                                        style="display: block;color: #000;font-weight: 400;margin-bottom: 10px">
                                        From Date</label>
                                    <input type="date" id="currency" name="from_date">
                                </div>
                            </div>
                            <div class="col-lg-3">
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
                            <a class="range" href="{{route('detail_page_pkr',[$symbol,$type,'7Days'])}}">7 Days</a>  
                            <a class="range" href="{{route('detail_page_pkr',[$symbol,$type,'2Weeks'])}}">2 Weeks</a> 
                            <a class="range" href="{{route('detail_page_pkr',[$symbol,$type,'1Mon'])}}">1 Mon</a>   
                            <a class="range" href="{{route('detail_page_pkr',[$symbol,$type,'3Mon'])}}">3 Mon</a>   
                            <a class="range" href="{{route('detail_page_pkr',[$symbol,$type,'6Mon'])}}">6 Mon</a>   
                            <a class="range" href="{{route('detail_page_pkr',[$symbol,$type,'1Yr'])}}">1 Yr</a>    
                            <a class="range" href="{{route('detail_page_pkr',[$symbol,$type,'2Yrs'])}}">2 Yrs</a>   
                            <a class="range" href="{{route('detail_page_pkr',[$symbol,$type,'3Yrs'])}}">3 Yrs</a>
                        </p>
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

        </div>
    </section>






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
            text: ':: '+symbol+' to PKR Rate Chart',
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
                echo $p_data.",";
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