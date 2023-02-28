<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoldRatePakistan extends Model
{
    public $table = 'gold_rate_in_pakistan';
    public $fillable = [
        'Gold_Rate',
        'k24',
        'k22',
        'k21',
        'k18',
    ];
}
