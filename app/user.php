<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{

    public $timestamps = false;
    protected  $table='user';
    protected $fillable=[
        'code',
        'pass',
        'fullname',
        'role_code',
        'com_code',
        'dept_code',
        'email',
        'phone_extend'
    ];
}
