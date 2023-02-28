<?php

namespace App\Http\Controllers\Website;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Comment;
use App\TellFriend;
use App\OpenMarketRate;
use App\InternationalRate;
use App\PakInterBankRate;
use App\GoldRate;
use DB;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data = [

            'irates'      =>  DB::table('international_rates')->whereIn('Symbol',array('AUD','CAD','JPY','SAR','SGD','AED'))->orderBy('Currency','ASC')->whereDate('created_at',\Carbon\Carbon::now())->take(8)->get(),
            'openrates'    => DB::table('open_market_rates')->where('type', '=', 'major')->orderBy('created_at','desc')->whereDate('created_at',\Carbon\Carbon::now())->take(6)->get(),
            'currencies' => DB::table('currencies_symbol')->get()


        ];   

        //return $data;
        return view('website.index',$data);
    }
    public function converter()
    {
        $data = [
            'currencies' => DB::table('currencies_symbol')->get()

        ];

        return view('website.converter',$data);
    }

    
    public function about()
    {
        return view('website.about');
    }

       
    public function contact_us()
    {
        return view('website.contact');
    }

         
    public function pak_open_market_rates(Request $request)
    {
        $date=\Carbon\Carbon::now();
        if ($request->mydate) 
        {
            $date=$request->mydate;
            //return $data;
        }
        $data = [

            'dates'=>DB::select('SELECT DATE_FORMAT(MAX(created_at), "%Y-%m-%d")maxdate,DATE_FORMAT(MIN(created_at), "%Y-%m-%d") mindate FROM open_market_rates;'),
            'openrates'    => DB::table('open_market_rates')->where('type', '=', 'more')->whereDate('created_at',$date)->take(17)->get()

        ];   
       
        return view('website.pak-open-market-rate',$data);
    }
    

        
    public function pak_inter_bank_rate(Request $request)
    {
        $date=\Carbon\Carbon::now();
        if ($request->mydate) {
            $date=$request->mydate;
            //return $data;
        }

        $data = [
            'dates'=>DB::select('SELECT DATE_FORMAT(MAX(created_at), "%Y-%m-%d")maxdate,DATE_FORMAT(MIN(created_at), "%Y-%m-%d") mindate FROM inter_bank_rates;'),
            'openrates' => DB::table('inter_bank_rates')->whereDate('created_at',$date)->take(15)->get()
        ];  
        
        return view('website.pak-inter-bank-rate',$data);
    }
        

    
    public function International_forex_rate(Request $request)
    {
        $date= \Carbon\Carbon::now();
        if ($request->mydate) {
            $date=$request->mydate;
            //return $data;
        }
        $base_currency = 'USD';
        if($request->base_currency){
            $base_currency = $request->base_currency; 
        }
        //return $base_currency;
        $base_currency_rate = InternationalRate::where('Symbol',$base_currency)->whereDate('created_at',$date)->first();
        
        
        $usd_currency_rate = InternationalRate::where('Symbol','USD')->whereDate('created_at',$date)->first();
        $data=[
            'dates'=>DB::select('SELECT DATE_FORMAT(MAX(created_at), "%Y-%m-%d")maxdate,DATE_FORMAT(MIN(created_at), "%Y-%m-%d") mindate FROM international_rates;'),
            'iratesmajor'=>  DB::table('international_rates')->where('type', '=', 'major')->whereDate('created_at',$date)->take(8)->get(),
            'iratesmore'=> DB::table('international_rates')->where([['type', '=', 'more'],['Symbol','!=','XBT']])->whereDate('created_at',$date)->take(71)->get(),
            'base_currency' =>$base_currency,
            'currencies' => DB::table('currencies_symbol')->get(),
            'base_currency_rate' =>$base_currency_rate->Units_per_USD??"",
            'usd_currency_rate' =>$usd_currency_rate->Units_per_USD??""
        ];
        // dd($base_currency_rate,$usd_currency_rate);
        // $headers = [
        //     'Content-Type' => 'application/json',
        //     'apikey' => 'A8m4lnyZmJQR8KcIThrMrtQDd7wguAgA',
        //     'Accept' => 'application/json',
        // ];
        // $url = "https://api.apilayer.com/currency_data/live?source=USD";
    
        // $client= new \GuzzleHttp\Client([
        //     'headers' => $headers
        // ]);
    
        // $request =$client->get($url);//Urlofyourchoosing
        // $response= json_decode($request->getBody()->getContents());
        // $data = [
        //     'rates' => $response->quotes, 
        //     'dates' => DB::select('SELECT DATE_FORMAT(MAX(created_at), "%Y-%m-%d")maxdate,DATE_FORMAT(MIN(created_at), "%Y-%m-%d") mindate FROM international_rates;') 
        // ];
    
        return view('website.International-forex-rate',$data);
    }
    public function converters()
    {
        $date=\Carbon\Carbon::now();
        $data = [

            'dates'=>DB::select('SELECT DATE_FORMAT(MAX(created_at), "%Y-%m-%d")maxdate,DATE_FORMAT(MIN(created_at), "%Y-%m-%d") mindate FROM open_market_rates;'),
            'openrates'    => DB::table('open_market_rates')->where('type', '=', 'more')->whereDate('created_at',$date)->take(6)->get(),
            'currencies' => DB::table('currencies_symbol')->get()
        ];   
        return view('website.converter',$data);
    }

    public function CurrencyRates($currency_1, $currency_2)
    {
        $headers = [
            'Content-Type' => 'application/json',
            'apikey' => 'A8m4lnyZmJQR8KcIThrMrtQDd7wguAgA',
            'Accept' => 'application/json',
        ];
        // Start Last Day
        $lastday_start_date = \Carbon\Carbon::now()->subDay(1)->format('Y-m-d');
        $lastday_end_date = \Carbon\Carbon::now()->format('Y-m-d');
        $url = "https://api.apilayer.com/currency_data/change?source=PKR&currencies=".$currency_1."&start_date=".$lastday_start_date."&end_date=".$lastday_end_date."";
    
        $client= new \GuzzleHttp\Client([
            'headers' => $headers
        ]);
    
        $request =$client->get($url);//Urlofyourchoosing
        $response= json_decode($request->getBody()->getContents());
        $conv = $currency_2.$currency_1;
        // dd($conv);
        $lastday = $response->quotes->$conv;

        // End Last Day

        // Start Last Month
        $lastmonth_start_date = \Carbon\Carbon::now()->subMonth(1)->format('Y-m-d');
        $lastmonth_end_date = \Carbon\Carbon::now()->format('Y-m-d');
    
        $url = "https://api.apilayer.com/currency_data/change?source=PKR&currencies=".$currency_1."&start_date=".$lastmonth_start_date."&end_date=".$lastmonth_end_date."";
        $client= new \GuzzleHttp\Client([
            'headers' => $headers
        ]);
    
        $request =$client->get($url);//Urlofyourchoosing
        $response= json_decode($request->getBody()->getContents());
        $conv = $currency_2.$currency_1;
        
        $lastmonth = $response->quotes->$conv;
        // End Last Month

         // Start Last Year
         $lastyear_start_date = \Carbon\Carbon::now()->subYear(1)->format('Y-m-d');
         $lastyear_end_date = \Carbon\Carbon::now()->format('Y-m-d');
     
         $url = "https://api.apilayer.com/currency_data/change?source=PKR&currencies=".$currency_1."&start_date=".$lastyear_start_date."&end_date=".$lastyear_end_date."";
         $client= new \GuzzleHttp\Client([
             'headers' => $headers
         ]);
     
         $request =$client->get($url);//Urlofyourchoosing
         $response= json_decode($request->getBody()->getContents());
         $conv = $currency_2.$currency_1;
         // dd($conv);
         $lastyear = $response->quotes->$conv;
         // End Last Year

         $data = [
            'lastday'    => $lastday,
            'lastmonth'  => $lastmonth,
            'lastyear'   => $lastyear,
            'currency_1' => $currency_1,
            'currency_2' => $currency_2,
         ];
         
        return view('website.currency-rate',$data);
    }
    
    public function gold_rates(Request $request)
    {
        $date=\Carbon\Carbon::now();
        if ($request->mydate) {
            $date=$request->mydate;
            //return $data;
        }

        $data = [
            'dates'=>DB::select('SELECT DATE_FORMAT(MAX(created_at), "%Y-%m-%d")maxdate,DATE_FORMAT(MIN(created_at), "%Y-%m-%d") mindate FROM gold_rates;'),
            'goldrates' => DB::table('gold_rates')->orderBy('created_at','desc')->whereDate('created_at',$date)->take(4)->get(),
            'goldratespak' => DB::table('gold_rate_in_pakistan')->orderBy('created_at','desc')->whereDate('created_at',$date)->take(4)->get(),
            'goldratesinter' => DB::table('gold_rate_in_major_countries')->orderBy('created_at','desc')->whereDate('created_at',$date)->take(7)->get()
        ];  
        //return $data;
        return view('website.gold-rate',$data);
    }

    public function forex_chart()
    {
        return view('website.forex-chart');
    }

    public function forex_brokers()
    {
        return view('website.forex-brokers');
    }

    public function forex_brokers_directory()
    {
        $date=\Carbon\Carbon::now();
        $data = [

            'dates'=>DB::select('SELECT DATE_FORMAT(MAX(created_at), "%Y-%m-%d")maxdate,DATE_FORMAT(MIN(created_at), "%Y-%m-%d") mindate FROM open_market_rates;'),
            'openrates'    => DB::table('open_market_rates')->where('type', '=', 'more')->whereDate('created_at',$date)->take(6)->get()

        ];   
        return view('website.forex-brokers-directory',$data);
    }

    
    public function prize_bond()
    {
        return view('website.prize-bond');
    }

    
    
    public function central_banks()
    {
        return view('website.central-banks');
    }

    public function stock_exchanges()
    {
        return view('website.stock-exchanges');
    }

    
    public function security_commission()
    {
        return view('website.security-commission');
    }

    
    public function current_directory()
    {
        return view('website.current-directory');
    }

    public function GlossaryTerm()
    {
        return view('website.glossary-term');
    }
    public function YourComment()
    {
        return view('website.your-comment');
    }
    public function TellFriend()
    {
        return view('website.tell-friend');
    }
    
    public function termuse()
    {
        return view('website.terms-of-use');
    }
    
    public function privacypolicy()
    {
        return view('website.privacy-policy');
    }
    
    public function disclaimer()
    {
        return view('website.disclaimer');
    }
    

   
    public function detail_page_usd(Request $request,$symbol, $period_date = null)
    {
        $date1 = \Carbon\Carbon::now()->subDay(30)->format('Y-m-d');
        $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        
        if($request->from_date){
            $date1 = \Carbon\Carbon::parse($request->from_date)->format('Y-m-d');
        }elseif ($request->to_date) {
            $date2 = \Carbon\Carbon::parse($request->to_date)->format("Y-m-d");
        }

        if($period_date == "7Days")
        {
            $date1 = \Carbon\Carbon::now()->subDay(7)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "2Weeks")
        {
            $date1 = \Carbon\Carbon::now()->subDay(14)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "1Mon")
        {
            $date1 = \Carbon\Carbon::now()->subMonth(1)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "3Mon")
        {
            $date1 = \Carbon\Carbon::now()->subMonth(3)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "6Mon")
        {
            $date1 = \Carbon\Carbon::now()->subMonth(6)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "1Yr")
        {
            $date1 = \Carbon\Carbon::now()->subYear(1)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "2Yrs")
        {
            $date1 = \Carbon\Carbon::now()->subYear(2)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "3Yrs")
        {
            $date1 = \Carbon\Carbon::now()->subYear(3)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }

        $currency=DB::table('currencies_symbol')->where('symbol',$symbol)->first();
        $currency = $currency ? $currency->country : 'United States';
        $currency=$currency.' ('.$symbol.')';
        if($request->from_date){
            $date1 = \Carbon\Carbon::parse($request->from_date)->format('Y-m-d');
        }elseif ($request->to_date) {
            $date2 = \Carbon\Carbon::parse($request->to_date)->format("Y-m-d");
        }
        $periods = \Carbon\CarbonPeriod::create($date1, $date2);
        $periods = $periods->toArray();
        foreach ($periods as $key => $date) {
           $pdate[] = $date->format('Y-m-d');
        }
        $data_as_period = InternationalRate::where('Symbol',$symbol)->whereDate('created_at','>=',$date1)->whereDate('created_at','<=',$date2)
        ->groupBy('date')
        ->orderBy('date', 'DESC')
        ->get(array(
            DB::raw('Date(created_at) as date'),
            DB::raw('USD_per_Unit,created_at')
        ))->pluck('USD_per_Unit','date')->toArray();
        $data_dates = collect($data_as_period)->keys()->toArray();
        // return $data_dates;
        $data_as_period_filter = [];
        foreach ($pdate as $key => $value_date) {
            if(!in_array($value_date,$data_dates)){
                array_push($data_as_period_filter,0);
            }else{
                array_push($data_as_period_filter,$data_as_period[$value_date]);
            }
        }
        $data = [
            'date1'         =>  $date1,
            'date2'         =>  $date2,
            'symbol'        =>  $symbol,
            'currency'      =>  $currency,
            'dates'         =>  $periods,
            'data_periods'  =>  $data_as_period_filter

        ];   
               
        return view('website.detail-page-usd',$data);
    }

    public function detail_page_pkr(Request $request,$symbol,$type, $period_date = null)
    {
        $date1 = \Carbon\Carbon::now()->subDay(30)->format('Y-m-d');
        $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        
        if($request->from_date){
            $date1 = \Carbon\Carbon::parse($request->from_date)->format('Y-m-d');
        }elseif ($request->to_date) {
            $date2 = \Carbon\Carbon::parse($request->to_date)->format("Y-m-d");
        }

        if($period_date == "7Days")
        {
            $date1 = \Carbon\Carbon::now()->subDay(7)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "2Weeks")
        {
            $date1 = \Carbon\Carbon::now()->subDay(14)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "1Mon")
        {
            $date1 = \Carbon\Carbon::now()->subMonth(1)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "3Mon")
        {
            $date1 = \Carbon\Carbon::now()->subMonth(3)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "6Mon")
        {
            $date1 = \Carbon\Carbon::now()->subMonth(6)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "1Yr")
        {
            $date1 = \Carbon\Carbon::now()->subYear(1)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "2Yrs")
        {
            $date1 = \Carbon\Carbon::now()->subYear(2)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "3Yrs")
        {
            $date1 = \Carbon\Carbon::now()->subYear(3)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        
        $currency=DB::table('currencies_symbol')->where('symbol',$symbol)->first();
        $currency = $currency ? $currency->country : 'United States';
        $currency=$currency.' ('.$symbol.')';
      
        if($request->from_date){
            $date1 = \Carbon\Carbon::parse($request->from_date)->format('Y-m-d');
        }elseif ($request->to_date) {
            $date2 = \Carbon\Carbon::parse($request->to_date)->format("Y-m-d");
        }
        $periods = \Carbon\CarbonPeriod::create($date1, $date2);
        $periods = $periods->toArray();
        foreach ($periods as $key => $date) {
           $pdate[] = $date->format('Y-m-d');
        }
        if ($type == 'Open_Market_Rate') {
            
            $data_as_period = OpenMarketRate::where('Symbol',$symbol)->whereDate('created_at','>=',$date1)->whereDate('created_at','<=',$date2)
            ->groupBy('date')
            ->orderBy('date', 'DESC')
            ->get(array(
                DB::raw('Date(created_at) as date'),
                DB::raw('Buying,created_at')
            ))->pluck('Buying','date')->toArray();
        }
        elseif($type == 'Inter_Bank_Rates') {
            $data_as_period = PakInterBankRate::where('Symbol',$symbol)->whereDate('created_at','>=',$date1)->whereDate('created_at','<=',$date2)
            ->groupBy('date')
            ->orderBy('date', 'DESC')
            ->get(array(
                DB::raw('Date(created_at) as date'),
                DB::raw('Bank_Buying,created_at')
            ))->pluck('Bank_Buying','date')->toArray();
            
        }
        elseif($type == 'Gold_Rates') {
            $data_as_period = GoldRate::where('metal','Gold')->whereDate('created_at','>=',$date1)->whereDate('created_at','<=',$date2)
            ->groupBy('date')
            ->orderBy('date', 'DESC')
            ->get(array(
                DB::raw('Date(created_at) as date'),
                DB::raw('gm,created_at')
            ))->pluck('gm','date')->toArray();
        }
        
        $data_dates = collect($data_as_period)->keys()->toArray();
        // return $data_dates;
        $data_as_period_filter = [];
        foreach ($pdate as $key => $value_date) {
            if(!in_array($value_date,$data_dates)){
                array_push($data_as_period_filter,0);
            }else{
                array_push($data_as_period_filter,$data_as_period[$value_date]);
            }
        }
        $data = [

            'symbol'        =>  $symbol,
            'currency'      =>  $currency,
            'dates'         =>  $periods,
            'date1'         =>  $date1,
            'date2'         =>  $date2,
            'data_periods'  =>  $data_as_period_filter,
            'type'          =>  $type

        ];   
               
        return view('website.detail-page-pkr',$data);
    }

    public function detailgold_page_pkr(Request $request,$symbol,$type,$period_date = Null)
    {
        $currency=DB::table('currencies_symbol')->where('symbol',$symbol)->first();
        $currency = $currency ? $currency->country : 'United States';
        $currency=$currency.' ('.$symbol.')';
        $date1 = \Carbon\Carbon::now()->subDay(30)->format('Y-m-d');
        $date2 = \Carbon\Carbon::now()->format("Y-m-d");

        if($request->from_date){
            $date1 = \Carbon\Carbon::parse($request->from_date)->format('Y-m-d');
        }elseif ($request->to_date) {
            $date2 = \Carbon\Carbon::parse($request->to_date)->format("Y-m-d");
        }

        if($period_date == "7Days")
        {
            $date1 = \Carbon\Carbon::now()->subDay(7)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "2Weeks")
        {
            $date1 = \Carbon\Carbon::now()->subDay(14)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "1Mon")
        {
            $date1 = \Carbon\Carbon::now()->subMonth(1)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "3Mon")
        {
            $date1 = \Carbon\Carbon::now()->subMonth(3)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "6Mon")
        {
            $date1 = \Carbon\Carbon::now()->subMonth(6)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "1Yr")
        {
            $date1 = \Carbon\Carbon::now()->subYear(1)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "2Yrs")
        {
            $date1 = \Carbon\Carbon::now()->subYear(2)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        if($period_date == "3Yrs")
        {
            $date1 = \Carbon\Carbon::now()->subYear(3)->format('Y-m-d');
            $date2 = \Carbon\Carbon::now()->format("Y-m-d");
        }
        
        $periods = \Carbon\CarbonPeriod::create($date1, $date2);
        $periods = $periods->toArray();
        foreach ($periods as $key => $date) {
           $pdate[] = $date->format('Y-m-d');
        }
        $weight = "10 grams";
        $data_as_period = GoldRate::where('metal','Gold')->whereDate('created_at','>=',$date1)->whereDate('created_at','<=',$date2)
            ->groupBy('date')
            ->orderBy('date', 'DESC')
            ->get(array(
                DB::raw('Date(created_at) as date'),
                DB::raw('gm,created_at')
            ))->pluck('gm','date')->toArray();

        if($period_date == "10Grams"){
            $data_as_period = GoldRate::where('metal','Gold')->whereDate('created_at','>=',$date1)->whereDate('created_at','<=',$date2)
            ->groupBy('date')
            ->orderBy('date', 'DESC')
            ->get(array(
                DB::raw('Date(created_at) as date'),
                DB::raw('gm,created_at')
            ))->pluck('gm','date')->toArray();
        }
        elseif($period_date == "1Tola"){
            $data_as_period = GoldRate::where('metal','Gold')->whereDate('created_at','>=',$date1)->whereDate('created_at','<=',$date2)
            ->groupBy('date')
            ->orderBy('date', 'DESC')
            ->get(array(
                DB::raw('Date(created_at) as date'),
                DB::raw('tola,created_at')
            ))->pluck('tola','date')->toArray();
            $weight = "1 Tola";
        }
        elseif($period_date == "1Ounce"){
            $data_as_period = GoldRate::where('metal','Gold')->whereDate('created_at','>=',$date1)->whereDate('created_at','<=',$date2)
            ->groupBy('date')
            ->orderBy('date', 'DESC')
            ->get(array(
                DB::raw('Date(created_at) as date'),
                DB::raw('once,created_at')
            ))->pluck('once','date')->toArray();
            $weight = "1 Ounce";
        }

        $data_dates = collect($data_as_period)->keys()->toArray();
        // return $data_dates;
        $data_as_period_filter = [];
        foreach ($pdate as $key => $value_date) {
            if(!in_array($value_date,$data_dates)){
                array_push($data_as_period_filter,0);
            }else{
                array_push($data_as_period_filter,$data_as_period[$value_date]);
            }
        }
        // $t_date=\Carbon\Carbon::now();
        // $t_date=\Carbon\Carbon::now();

        $data = [

            'symbol'                    =>  $symbol,
            'currency'                  =>  $currency,
            'dates'                     =>  $periods,
            'date1'                     =>  $date1,
            'date2'                     =>  $date2,
            'data_periods'              =>  $data_as_period_filter,
            'type'                      =>  $type,
            'weight'                    =>  $weight,
            'today_price'               =>  end($data_as_period_filter),
            'goldrate_major_country'   =>  DB::table('gold_rate_in_major_countries')->orderBy('created_at','desc')->whereDate('created_at','>=',$date1)->whereDate('created_at','<=',$date2)->take(7)->get()
        ];   
            //    return $data;
        return view('website.detailgold-page-pkr',$data);
    }

    public function SaveComment(Request $request)
    {
        $data = $request->validate([
            'name'       =>  'nullable',
            'email'     =>  'nullable',
            'company'      =>  'nullable',
            'address'        =>  'nullable',
            'comment'       =>  'nullable',
            'phone'       =>  'nullable',
        ]);

        Comment::create($data)->with('success','Success.!');
       
        return redirect()->route('YourComment');
        
    }

    public function SaveTellFriend(Request $request)
    {
        $data = $request->validate([
            'name'       =>  'nullable',
            'email'     =>  'nullable',
            'friend_name'      =>  'nullable',
            'friend_email'        =>  'nullable',
            'message'       =>  'nullable',
        ]);
        
        TellFriend::create($data);
      
        return redirect()->route('TellFriend')->with('success','Success.!');
        
    }

    public function CommentsList()
    {
       
        
        //TellFriend::create($data);
      
        $data = [

            'comments'      =>Comment::get(),
        ];   
           

               
        return view('website.comments-list',$data);
        
    }

    public function FriendTellList()
    {
       
        
        //TellFriend::create($data);
      
     
        $data = [

            'comments'      =>TellFriend::get(),
        ];    
               
        return view('website.friend-tell-list',$data);
        
    }

    public function CurrencyConvert(Request $request)
    {
        $data = $request->validate([
            'from'     =>  'nullable',
            'to'       =>  'nullable',
            'amount'   =>  'nullable'
        ]);

        if(empty($request->amount))
        {
            $request->amount=1;
        }

        
        $headers = [
            // 'Content-Type' => 'application/json',
            // 'Accept' => 'application/json',
            'apikey'=>'rVBvQMzDGyhdSqfkGmHz8xGd6p5SKDUm',
        ];
        //$url = "https://v6.exchangerate-api.com/v6/3309030669b08bff488804f3/pair/".$request->from."/".$request->to."";
         $url="https://api.apilayer.com/exchangerates_data/convert?to=".$request->to."&from=".$request->from."&amount=".$request->amount."";
        $client= new \GuzzleHttp\Client([
            'headers' => $headers
        ]);
     
        $request =$client->get($url);//Urlofyourchoosing
        return $request;
        //$response= json_decode($request->getBody()->getContents());
        //return $response;
        //$conversion_rate = $response->conversion_rate;
        // if(!empty($request->amount) && $request->amount > 0){
        //     $conversion_rate = $response->conversion_rate * $request->amount;
        // }
        // // return $conversion_rate.$response->conversion_rate;
        // return response()->json([
        //     'message'   => 'success',
        //     'data'   => $conversion_rate
        // ], 200);
    }
}
