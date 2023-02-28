<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordResetCustom extends Model
{
    protected $fillable = [
        'user_id', 'code','active'
    ];
}
