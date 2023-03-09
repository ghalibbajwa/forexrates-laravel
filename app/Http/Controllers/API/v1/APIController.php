<?php

namespace App\Http\Controllers\API\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\OpenMarketRate;
use App\InternationalRate;
use App\PakInterBankRate;
use App\GoldRate;
use App\GoldRatePakistan;
use App\GoldRateMajorCountries;
use Carbon\Carbon;

class APIController extends Controller
{
    public function internationalRates(Request $request)
    {
        
      $d= $request->validate([
            'Currency'          =>  'required|array',
            'Symbol'            =>  'required|array',
            'Units_per_USD'     =>  'required|array',
            'USD_per_Unit'      =>  'required|array',
            'url'               =>  'required|array',
            'type'              =>  'required|array',
        ]);
       dd($d);
        
        foreach ($request->Currency as $key => $currency) {
            $data = [
                'Currency'          => $currency,
                'Symbol'            => $request->Symbol[$key],
                'Units_per_USD'     => $request->Units_per_USD[$key],
                'USD_per_Unit'      => $request->USD_per_Unit[$key],
                'url'               => $request->url[$key],
                'type'              => $request->type[$key],
            ];
            InternationalRate::create($data);
        }
        
        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function goldRates(Request $request)
    {
        $request->validate([
            'metal'  =>  'required|array',
            'symbol' =>  'required|array',
            'gm'     =>  'required|array',
            'tola'   =>  'required|array',
            'once'   =>  'required|array',
        ]);
        foreach ($request->metal as $key => $metal) {
            $data = [
                'metal'  => $metal,
                'symbol' => $request->symbol[$key],
                'gm'     => $request->gm[$key],
                'tola'   => $request->tola[$key],
                'once'   => $request->once[$key],
                
            ];
            GoldRate::create($data);
        }
        
        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function interBankRates(Request $request)
    {
        $request->validate([
            'Currency'      =>  'required|array',
            'Symbol'        =>  'required|array',
            'Bank_Buying'   =>  'required|array',
            'Bank_Selling'  =>  'required|array',
            'url'           =>  'required|array',
        ]);
        foreach ($request->Currency as $key => $currency) {
            $data = [
                'Currency'      => $currency,
                'Symbol'        => $request->Symbol[$key],
                'Bank_Buying'   => $request->Bank_Buying[$key],
                'Bank_Selling'  => $request->Bank_Selling[$key],
                'url'           => $request->url[$key],
            ];
            PakInterBankRate::create($data);
        }
        
        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function openMarketRates(Request $request)
    {
        $request->validate([
            'Currency'      =>  'required|array',
            'Symbol'        =>  'required|array',
            'Buying'        =>  'required|array',
            'Selling'       =>  'required|array',
            'url'           =>  'required|array',
            'type'          =>  'required|array',
        ]);

        foreach ($request->Currency as $key => $currency) {
            $data = [
                'Currency'      => $currency,
                'Symbol'        => $request->Symbol[$key],
                'Buying'        => $request->Buying[$key],
                'Selling'       => $request->Selling[$key],
                'url'           => $request->url[$key],
                'type'          => $request->type[$key],

            ];
            OpenMarketRate::create($data);
        }
        
        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function goldRatePakistan(Request $request)
    {
        $request->validate([
            'Gold_Rate' =>  'required|array',
            'k24'       =>  'required|array',
            'k22'       =>  'required|array',
            'k21'       =>  'required|array',
            'k18'       =>  'required|array',
         ]);

        foreach ($request->Gold_Rate as $key => $Gold_Rate) {
            $data = [
                'Gold_Rate' => $Gold_Rate,
                'k24'       => $request->k24[$key],
                'k22'       => $request->k22[$key],
                'k21'       => $request->k21[$key],
                'k18'       => $request->k18[$key],

            ];
            GoldRatePakistan::create($data);
        }
        
        return response()->json([
            'message' => 'success',
        ], 200);
    }

    public function goldRateMajorCountries(Request $request)
    {
        $request->validate([
            'Currency' =>  'required|array',
            'Symbol'   =>  'required|array',
            'Gm10'     =>  'required|array',
            'Tola1'    =>  'required|array',
            'Ounce1'   =>  'required|array',
            'url'       =>  'required|array',
         ]);

        foreach ($request->Currency as $key => $currency) {
            $data = [
                'Currency' => $currency,
                'Symbol'   => $request->Symbol[$key],
                'Gm10'     => $request->Gm10[$key],
                'Tola1'    => $request->Tola1[$key],
                'Ounce1'   => $request->Ounce1[$key],
                'url'      => $request->url[$key],

            ];
            GoldRateMajorCountries::create($data);
        }
        
        return response()->json([
            'message' => 'success',
        ], 200);
    }
}
