<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public $table = 'currencies_symbol';
    protected $fillable = ['symbol','country'];

}
