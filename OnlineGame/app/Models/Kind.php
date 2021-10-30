<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kind extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name',
        'health_points',
        'strength_points',
        'money',
        'items_possessed'
    ];

    public function heros(){
        return $this->belongsToMany(Hero::class);
    }
}
