<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{

    protected $fillable = [
        'name', 'email', 'college','year','github','linkedin','phone','position','portfolio'
    ];
    
}
