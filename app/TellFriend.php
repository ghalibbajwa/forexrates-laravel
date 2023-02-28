<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TellFriend extends Model
{
    protected $fillable = ['name','email','friend_name','friend_email','message'];

}
