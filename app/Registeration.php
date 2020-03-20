<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registeration extends Model
{
    protected $fillable = [
        'fullname', 'email', 'oblast','gorod','raion'
    ];
}
