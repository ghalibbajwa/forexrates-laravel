<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $fillable = ['id','name','email','password','email_verified_at','remember_token','device_token','timezone'];
    protected $table = 'admin';
    protected $guarded = ['id'];

}
