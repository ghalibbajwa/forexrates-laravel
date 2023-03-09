<?php

namespace App\Http\Controllers\APILayer;

use App\Http\Controllers\API\v1\APIController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Currency;


class internationalRatesController extends Controller
{
    function get_rates()
    {
        $api=new APIController;
        $curen_tb = Currency::all();


        $headers = [
            'Content-Type' => 'application/json',
            'apikey' => 'te9jbWfWm1bNqovBfsp44kDCKiX0TWhY',
            'Accept' => 'application/json',
        ];
        $url = "https://api.apilayer.com/currency_data/live?source=USD";

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        $request = $client->get($url); //Urlofyourchoosing
        $response = json_decode($request->getBody()->getContents());


        $res = collect($response->quotes);
        $keys = $res->keys();
        $curs = $res->values();
        $co = $res->count();


        $symbols = [];
        foreach ($keys as $symbol) {
            $sym = substr($symbol, 3, 7);
            array_push($symbols, $sym);
        }
        array_push($symbols, "USD");

        $currencys = [];
        foreach ($symbols as $smb) {
            for ($x = 0; $x < $co; $x++) {

                if ($smb == $curen_tb[$x]->symbol) {
                    array_push($currencys, $curen_tb[$x]->country);
                }
            }
        }
    
        $curr_usd = [];

        foreach ($curs as $cu) {
            array_push($curr_usd, round((1 / $cu), 4));
        }
        array_push($curr_usd,1);

        $urls = [];
        foreach ($symbols as $sym) {
            array_push($urls, ("https://www.forex.pk/flags/" . $sym . ".gif"));
        }


  

        $type = [];
        for ($x = 0; $x < $co+1; $x++) {
            array_push($type, "major");
        }


        $re = new Request();
        
        $re->replace(['Currency' => $currencys, 'Symbol' =>$symbols, 'Units_per_USD' => $curs, 'USD_per_Unit' => $curr_usd, 'url'=>$urls, 'type'=>$type ]);
        // dd($re->all());
        $api->internationalRates($re);


    }
}