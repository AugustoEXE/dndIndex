<?php

use App\Http\Controllers\apiController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;

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

route::get('/home/{type}', [apiController::class, 'getIndexData'])->name('home');

route::get('/detail/{thing}', [apiController::class, 'getSpellDetail'])->name('detailSpell');
