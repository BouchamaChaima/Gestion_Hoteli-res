<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Gestion extends Controller
{
    public function reserver(){
            return view('table')->with([
                'numc' => request('numc'),
                'nume' => request('nume'),
                'nump' => request('nump'),
            ]);
    }
}
