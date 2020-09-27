<?php

namespace App\Http\Models;

use Illuminate\Foundation\Auth\User as Authentication;

class Users extends Authentication
{
    protected $table = 'users';
    //protected $fillable = [
    //    'email',
    //    'password'
    //];

}
