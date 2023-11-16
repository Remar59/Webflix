<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AboutController extends Controller
{
    public $team = [
        [
            'name' => 'Fiorella',
            'job' => 'Bébé',
            'image' => 'https://i.pravatar.cc/150?u=ljghksghk'
        ],
        [
            'name' => 'Marina',
            'job' => 'Dev front',
            'image' => 'https://i.pravatar.cc/150?u=lzkfhzlkfj'
        ],
        [
            'name' => 'Matthieu',
            'job' => 'Dev back',
            'image' => 'https://i.pravatar.cc/150?u=ksjvghksjhdfk'
        ]
        ];
    
    
    public function index()
    {
        return view('about', [
            'title' => 'Webflix',
            'team' => $this->team,
        ]);
    }


    public function show($user) 
{
    $users= collect($this->team)->pluck('name')->all();

    if (!in_array($user, $users)) {
        abort(404);
    }
    return View('about-show', [
        'user' => $user,
    ]);
}
}
