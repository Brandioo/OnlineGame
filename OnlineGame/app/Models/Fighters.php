<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Fighters
{
    use Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'email',
        'password',
    ];

}
