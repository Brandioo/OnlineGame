<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Fight extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'host_id',
        'guest_id',
        'winner_id',
        'fought_at',
        'host_money_received',
        'guest_money_received'
    ];


    public function host()
    {
        return $this->hasOne(Hero::class);
    }

    public function guest()
    {
        return $this->hasOne(Hero::class);
    }

    public function winner()
    {
        return $this->hasOne(Hero::class);
    }
}
