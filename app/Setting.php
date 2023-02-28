<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = ['key','value'];
}
