<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Fights
{
    use Notifiable;

    protected $fillable = [
        'id',
        'fighterOneID',
        'fighterTwoID',
    ];
}
