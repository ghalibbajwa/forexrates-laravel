<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PakInterBankRate extends Model
{
    public $table = 'inter_bank_rates';
    public $fillable = [
        'Currency',
        'Symbol',
        'Bank_Buying',
        'Bank_Selling',
        'url',
    ]; 
}
