<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function about()
    {
        return view('/pages/about');
    }

    public function contact()
    {
        return view('/pages/contact');
    }

    public function settings()
    {
        return view('/pages/settings');
    }
}
