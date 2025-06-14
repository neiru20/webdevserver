<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class StudentUser extends Authenticatable
{
    //

    protected $table = 'table_studentusers';
    public $timestamps = true;
    protected $fillable = ['name', 'email', 'age', 'password'];
    protected $hidden = ['password', 'remember_token'];
}
