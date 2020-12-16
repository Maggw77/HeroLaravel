<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\EnemyController;
use App\Http\Controllers\ItemController;
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
    return view('welcome');
});



Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, "index"])->name('admin');
    Route::get('Heroes', [HeroController::class, "index"])->name('admin.Heroes');
    Route::get('Enemies', [EnemyController::class, "index"])->name('admin.Enemies');
    Route::get('Items', [ItemController::class, "index"])->name('admin.Items');
});
