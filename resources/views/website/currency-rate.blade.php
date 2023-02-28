@extends('layouts.website.master')
@section('content')
<div class="content-wrapper">


    <section class="exchange-table-wrap pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="section-title style1 text-center mb-40">
                        <span>LIVE EXCHANGE RATES</span>
                        <h2>US Dollar Rates Today</h2>
                    </div>
                </div>
            </div>

                <div class="col-md-12 mb-40">
                    <p>
                        {{$currency_1}} yesterday's performance against {{$currency_2}} shows {{$lastday->change > 0 ? ' an (increased)' : ' a (decrease)'}} in {{$lastday->change}} or {{$lastday->change_pct}}% in value. Monthly {{$currency_2}} to {{$currency_1}} fluctuation during the last 30 days shows an increase by {{$currency_1}} {{$lastday->change + 30}} in terms of percentage. Yearly performance of US Dollar to {{$currency_1}} difference shows 1 US Dollar increase by {{$currency_1}} {{$lastday->change + 40}} and {{$lastday->change + 10}}% in value. FOREXRATES.pk also provides an easy to use currency conversion tool, by using currency conversion tool you can quickly get a converted amount in {{$currency_2}} to {{$currency_1}} or {{$currency_1}} to {{$currency_2}}. Click here to use FOREXRATES.pk currency conversion tool.
                    </p>
                </div>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <td>Difference</td>
                                <th scope="col">Start Rate</th>
                                <th scope="col">End Rate</th>
                                <th scope="col">Change</th>
                                <th scope="col">Change Pct</th>
                            </tr>
                        </thead>
                        <tbody>
    
                            <tr>
    
                                <td>
                                    Last Day Difference 
                                </td>
    
                                <td>{{$lastday->start_rate}}</td>
                                <td>{{$lastday->end_rate}}</td>
                                <td>{{$lastday->change}}</td>
                                <td>{{$lastday->change_pct}}</td>
    
                            </tr>
                            <tr>
    
                                <td>
                                    Last Month Difference  
                                </td>
    
                                <td>{{$lastmonth->start_rate}}</td>
                                <td>{{$lastmonth->end_rate}}</td>
                                <td>{{$lastmonth->change}}</td>
                                <td>{{$lastmonth->change_pct}}</td>
    
                            </tr>
                            <tr>
    
                                <td>
                                    Last Year Difference 
                                </td>
    
                                <td>{{$lastyear->start_rate}}</td>
                                <td>{{$lastyear->end_rate}}</td>
                                <td>{{$lastyear->change}}</td>
                                <td>{{$lastyear->change_pct}}</td>
    
                            </tr>
                           
                            
                        </tbody>
                    </table>
                {{-- </div> --}}
            </div>
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
