<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chat extends Model
{
    public $table='bootman';
    public $fillable=[
        'question',
        'respond'
    ];
}
