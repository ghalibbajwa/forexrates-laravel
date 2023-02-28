<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpenMarketRate extends Model
{
    public $table = 'open_market_rates';
    public $fillable = [
        'Currency',
        'Symbol',
        'Buying',
        'Selling',
        'url',
        'type',
    ]; 
}
