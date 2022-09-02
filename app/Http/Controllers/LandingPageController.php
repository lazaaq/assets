<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function tentang(){
        return view('/tentang');
    }

    public function struktur(){
        return view('/struktur');
    }
}
