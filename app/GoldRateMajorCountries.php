<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoldRateMajorCountries extends Model
{
    public $table = 'gold_rate_in_major_countries';
    public $fillable = [
        'Currency',
        'Symbol',
        'Gm10',
        'Tola1',
        'Ounce1',
    ];
}
