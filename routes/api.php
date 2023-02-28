<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

    //Insert Data Routes Api
    Route::post('international_rates', 'API\v1\APIController@internationalRates');
    Route::post('gold_rates', 'API\v1\APIController@goldRates');
    Route::post('inter_bank_rates', 'API\v1\APIController@interBankRates');
    Route::post('open_market_rates', 'API\v1\APIController@openMarketRates');
    Route::post('gold_rate_in_pakistan', 'API\v1\APIController@goldRatePakistan');
    Route::post('gold_rate_in_major_countries', 'API\v1\APIController@goldRateMajorCountries');

        
    
    