<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Categorycontroller;
use App\Http\Controllers\HomeController;
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

Route::get('/categories', [Categorycontroller::class, 'index']);

//afficher le formulaire
Route::get('/categories/creer', [Categorycontroller::class, 'create']);
// traite le formulaire
Route::post('/categories/creer', [Categorycontroller::class, 'store']);
