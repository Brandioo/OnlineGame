<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHeroRequest;
use App\Http\Resources\FightResource;
use App\Http\Resources\HeroResource;
use App\Http\Resources\KindResource;
use App\Models\Fight;
use App\Models\Hero;
use App\Models\Kind;
use Illuminate\Support\Facades\Auth;

class HeroController extends Controller
{
    public function index()
    {

        $heroes = Hero::where('user_id', Auth::id())->get();

        return HeroResource::collection($heroes);

    }

    public function opponentHero()
    {
        $heroes = Hero::where('user_id', '<>', Auth::id())->get();

        return HeroResource::collection($heroes);
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return HeroResource
       */
    public function store(StoreHeroRequest $request)
    {
        $kind = Kind::findORFail($request->input('kind_id'));

        $hero = Hero::create(
            [
                'kind_id' => $request->input('kind_id'),
                'name' => $request->input('name'),
                'user_id' => Auth::id(),
                'current_health_points' => $kind->current_health_points,
                'max_health_points' => $kind->max_health_points,
                'current_strength_points' => $kind->current_strength_points,
                'current_money' => $kind->current_money,
                'items_possessed' => $kind->items_possessed,
                'performed_fights' => 0,
                'money_tranfers' => 0,
                'power' => 0,
                'attack_points' => 0,
            ]
        );

        if ($hero) {

            return new HeroResource($hero);
        }

        return response()->json(['message' => __('Something went wrong!')], 400);
    }
}
