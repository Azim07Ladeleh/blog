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

Route::prefix('article')->group(function() {

    Route::get('/{id}', [ArticleController::class, 'show']);
    Route::get('/{article}/edition', [ArticleController::class, 'update']);
    Route::put('/{article}/update', [ArticleController::class, 'edit']);
    Route::delete('/{article}/delete', [ArticleController::class, 'delete']);
});

Route::post('/article', [ArticleController::class, 'store']);
Route::get('/voir', [ArticleController::class, 'index']);
