<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;


Route::get('/', 'Website\HomeController@index')->name('home');

Route::get('/converter', 'Website\HomeController@converter')->name('converter');

Route::get('/about', 'Website\HomeController@about')->name('about');


Route::get('/contact', 'Website\HomeController@contact_us')->name('contact');


Route::get('/pak-open-market-rates', 'Website\HomeController@pak_open_market_rates')->name('pak_open_market_rates');


Route::get('/pak-inter-bank-rates', 'Website\HomeController@pak_inter_bank_rate')->name('pak_inter_bank_rate');


Route::get('/International-forex-rate', 'Website\HomeController@International_forex_rate')->name('International_forex_rate');


Route::get('/currency-converter', 'Website\HomeController@converters')->name('converter');




Route::get('/gold-rate', 'Website\HomeController@gold_rates')->name('gold_rates');

Route::get('/forex-chart', 'Website\HomeController@forex_chart')->name('forex_chart');

Route::get('/forex-brokers', 'Website\HomeController@forex_brokers')->name('forex_brokers');

Route::get('/forex-brokers-directory', 'Website\HomeController@forex_brokers_directory')->name('forex_brokers_directory');


Route::get('/prize-bond', 'Website\HomeController@prize_bond')->name('prize_bond');


Route::get('/prize-bond', 'Website\HomeController@prize_bond')->name('prize_bond');

Route::get('/central-banks', 'Website\HomeController@central_banks')->name('central_banks');

Route::get('/stock-exchanges', 'Website\HomeController@stock_exchanges')->name('stock_exchanges');


Route::get('/security-commission', 'Website\HomeController@security_commission')->name('security_commission');


Route::get('/current-directory', 'Website\HomeController@current_directory')->name('current_directory');

Route::get('/glossary-term', 'Website\HomeController@GlossaryTerm')->name('GlossaryTerm');

Route::get('/your-comment', 'Website\HomeController@YourComment')->name('YourComment');


Route::get('/tell-friend', 'Website\HomeController@TellFriend')->name('TellFriend');

Route::get('/terms-of-use', 'Website\HomeController@termUse')->name('termUse');
Route::get('/privacy-policy', 'Website\HomeController@privacypolicy')->name('privacypolicy');
Route::get('/disclaimer', 'Website\HomeController@disclaimer')->name('disclaimer');




Route::get('/currency-usd/{currency}/{period_date?}', 'Website\HomeController@detail_page_usd')->name('detail_page_usd');
Route::get('/currency-pkr/{currency}/{type}/{period_date?}', 'Website\HomeController@detail_page_pkr')->name('detail_page_pkr');
Route::get('/gold-rate/{currency}/{type}/{period_date?}', 'Website\HomeController@detailgold_page_pkr')->name('detailgold_page_pkr');


Route::post('/save-comment','Website\HomeController@SaveComment')->name('SaveComment');
Route::post('/save-tell-friend','Website\HomeController@SaveTellFriend')->name('SaveTellFriend');

Route::get('/comment-list', 'Website\HomeController@CommentsList')->name('CommentsList');
Route::get('/friend-tell-list', 'Website\HomeController@FriendTellList')->name('FriendTellList');
Route::get('/currency-rates/{currency_1}/{currency_2}', 'Website\HomeController@CurrencyRates')->name('currency_rates');
Route::post('/currency-converter', 'Website\HomeController@CurrencyConvert')->name('convert-currency');

Route::get('/test', function (Request $request) {
    
    // Hig=jri Dates API
    $headers = [
        'Content-Type'  => 'application/json',
        'Accept'        => 'application/json',
    ];
    $url = "https://hilalcommittee.org/api/hijridates/gethijrischedule";

    $client= new \GuzzleHttp\Client([
        'headers' => $headers
    ]);

    $request  = $client->get($url);//Urlofyourchoosing
    $response = json_decode($request->getBody()->getContents());
    // End Hijri Date API

    $currentdateurl = "http://api.aladhan.com/v1/gToH";
    $client2= new \GuzzleHttp\Client([
        'headers' => $headers
    ]);

    $request2  = $client2->get($currentdateurl);//Urlofyourchoosing
    $response2 = json_decode($request2->getBody()->getContents());
    $current_islamic_date =  \Carbon\Carbon::parse($response2->data->hijri->date)->format('Y-m-d');
   
    // dd($response2);
    // dd();

    // Islamic
    
    $islamic_month_start_month  =   \Carbon\Carbon::parse($response->FirstDay)->format('m');
    $islamic_month_start_now    =   \Carbon\Carbon::now()->format('m');
    if(isset($request->month) && !empty($request->month)){
        $islamic_month_order = $request->month; 
    }else{
        $islamic_month_order        =   abs($islamic_month_start_month - $islamic_month_start_now);

    }
    $islamic_month_order        =   $islamic_month_order - 1;
    $islamic_month_accc         =   \Carbon\Carbon::parse($response->FirstDay);
    $i = 5;
    $islamic_days_array = [];
   
    for ($i=1; $i <= $islamic_month_order ; $i++) { 
        $key = 'NumDaysMonth'.$i;
        $islamic_days = $response->NumOfDays->$key;
        array_push($islamic_days_array,$islamic_days);
    }
    $total_isl_days                 =   array_sum($islamic_days_array);
    $first_date_islamic             =   \Carbon\Carbon::parse($response->FirstDay)->addDay($total_isl_days);

    $calc2 = 12;
    $calc3 = 13;
    $calc4 = 14;
    $response = [
        'date1' =>   \Carbon\Carbon::parse($first_date_islamic)->addDay($calc2)->format('Y-m-d'),
        'date2' =>   \Carbon\Carbon::parse($first_date_islamic)->addDay($calc3)->format('Y-m-d'),
        'date3' =>   \Carbon\Carbon::parse($first_date_islamic)->addDay($calc4)->format('Y-m-d'),
        'date_format' =>   'yyyy-MM-dd',
        'current_islamic_date' =>   '1444-06-15',
    ];

    return response()->json(['message'=>'success','data' => $response],200);
    
    dd($response->NumOfDays,$date12,$date13,$date14);
});

use App\Currency;

Route::get('/change', function () {
    
    $headers = [
        'Content-Type' => 'application/json',
        'apikey' => 'g0eFtHGbtfu05W5jXWlJ8o5Dd9QoKIjj',
        'Accept' => 'application/json',
    ];
    $url = "https://api.apilayer.com/currency_data/list";

    $client= new \GuzzleHttp\Client([
        'headers' => $headers
    ]);

    $request =$client->get($url);//Urlofyourchoosing
    $response= json_decode($request->getBody()->getContents());
    
    foreach ($response->currencies as $key => $currency) {
        $data  = [
            'symbol' => $key,
            'country' => $currency
        ];
        Currency::create($data);
    }
    return "ok";
    
});




Route::get('clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('storage:link');
    Artisan::call('config:cache');
    return ('done');
});
