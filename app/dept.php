<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dept extends Model
{
    protected $table="department";
    protected $filable=[
        "code",
        "name"
    ];
}
