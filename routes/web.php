<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\DiplomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('etudiants/', [EtudiantController::class, 'index']);
    Route::get('etudiants/add', [EtudiantController::class, 'formAdd']);
    Route::post('etudiants/add', [EtudiantController::class, 'add']);
    Route::get('etudiants/edit/{id}', [EtudiantController::class, 'formEdit']);
    Route::post('etudiants/edit', [EtudiantController::class, 'edit']);
    Route::get('etudiants/delete/{id}', [EtudiantController::class, 'delete']);
    Route::get('etudiants/diplomes/{id}', [EtudiantController::class, 'listeDiplomes']);

    Route::get('diplomes/', [DiplomeController::class, 'index']);
    Route::get('diplomes/add', [DiplomeController::class, 'formAdd']);
    Route::post('diplomes/add', [DiplomeController::class, 'add']);
    Route::get('diplomes/edit/{id}', [DiplomeController::class, 'formEdit']);
    Route::post('diplomes/edit', [DiplomeController::class, 'edit']);
    Route::get('diplomes/delete/{id}', [DiplomeController::class, 'delete']);
    Route::get('diplomes/affecter/{id}', [DiplomeController::class, 'affecterEtudiantForDiplome']);
    Route::post('diplomes/affecter', [DiplomeController::class, 'affecterDiplome']);

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


