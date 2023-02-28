<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoldRate extends Model
{
    public $table = 'gold_rates';
    public $fillable = [
        'metal',
        'symbol',
        'gm',
        'tola',
        'once',
    ];
}
