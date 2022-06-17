<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
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
Route::get('/', [MenuController::class, 'index'])-> name('menu');

Route::get('/create', [MenuController::class, 'create'])-> name('create');
Route::post('/store', [MenuController::class, 'store'])-> name('store');
Route::get('/delete/{id}', [MenuController::class, 'delete'])-> name('delete');
Route::get('/update/{id}', [MenuController::class, 'edit'])-> name('update');
Route::put('/update/{id}', [MenuController::class, 'update'])-> name('update');
Route::get('/showdata/{id}', [MenuController::class, 'showdata'])-> name('showdata');