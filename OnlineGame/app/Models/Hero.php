<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name',
        'kind_id',
        'user_id',
        'strength',
        'power',
        'health_points',
        'attack_points',
        'performed_fights',
        'items_possessed',
        'money_balance'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function fights(){
        return $this->hasMany(Fight:class);
    }

    public function kind(){
        return $this->hasOne(Kind::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction:class);
    }

    public function herosHistory(){
        return $this->hasMany(HeroHistory:class);
    }

    public function itemsHistory(){
        return $this->hasMany(ItemHistory::class);
    }

}

