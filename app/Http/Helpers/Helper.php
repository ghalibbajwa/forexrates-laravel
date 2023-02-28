<?php
use App\OpenMarketRate;

/**
 * Get Specified Site Setting
 * @return array 
 */
 function rates()
 {
    $rates =  OpenMarketRate::orderby('created_at','desc')->get();
    
    return $rates;
 }


