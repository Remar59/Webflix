<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home', [
            'name' => 'Fiorella',
            'games' => [
                'Elden Ring',
                'Call of Duty',
                'FC 24',
            ],
        ]);
    }

public function friend(Request $request, $friend = null) 
{
    return View('presentation', [
        'age' => Carbon::parse('2023-12-31')->age,
        'friend' => ucfirst($friend), 
    ]);
}

}

