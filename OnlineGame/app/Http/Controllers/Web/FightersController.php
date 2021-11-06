<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class FightersController extends Controller
{

    use Notifiable;

    public function fighters()
    {
        return view('/pages/fighters');
    }

    public function fighthistory()
    {
        return view('/pages/fighthistory');
    }

    public function register(Request $request)
    {
        $user = Fighters::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'birthday' => $request->input('birthday'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);

        return $this->respondWithToken(auth()->tokenById($user->id));
    }


}
