<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
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
//Permet de renvoyer vers le HomeController
Route::get('/',[HomeController::class, 'index']);


/*Le ? de friend le rend optionel*/
Route::get('/fiorella/{friend?}', [HomeController::class, 'friend']);


Route::get('/a-propos', [AboutController::class, 'index']);

Route::get('/a-propos/{user?}', [AboutController::class, 'show']);