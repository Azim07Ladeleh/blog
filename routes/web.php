<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\factControlleur;
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
    return view('welcome');
});


// Route::get('/exemple',[factControlleur::class, 'exemple']);
Route::get('/test',[factControlleur::class, 'test']);
// Route::post('/accueil', [factControlleur::class, 'store']);
Route::post('/article', [ArticleController::class, 'store']);
Route::get('/voir', [ArticleController::class, 'index']);