<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InternationalRate extends Model
{
    public $table = 'international_rates';

    public $fillable = [
        'Currency',
        'Symbol',
        'Units_per_USD',
        'USD_per_Unit',
        'url',
        'type',
    ];
  
}
