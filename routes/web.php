<?php

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'name' => 'Fiorella',
        'games' => [
            'Elden Ring',
            'Call of Duty',
            'FC 24',
        ],
    ]);
});

/*Le ? de friend le rend optionel*/
Route::get('/fiorella/{friend?}', function (Request $request, $friend = null) {
    return View('presentation', [
        'age' => Carbon::parse('2023-12-31')->age,
        'friend' => ucfirst($friend), 
    ]);
});
