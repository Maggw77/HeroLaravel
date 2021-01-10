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

    Route::group(['prefix' => 'heroes'], function () {
        Route::get('/', [HeroController::class, "index"])->name('admin.Heroes');
        Route::get('create', [HeroController::class, "create"])->name('admin.Heroes.create');
        Route::post('store', [HeroController::class, "store"])->name('admin.Heroes.store');
        Route::get('edit/{id}', [HeroController::class, "edit"])->name('admin.Heroes.edit');
        Route::post('update/{id}', [HeroController::class, "update"])->name('admin.Heroes.update');
        Route::delete('destroy/{id}', [HeroController::class, "destroy"])->name('admin.Heroes.destroy');
    });

    Route::get('Enemies', [EnemyController::class, "index"])->name('admin.Enemies');
    Route::get('Items', [ItemController::class, "index"])->name('admin.Items');

});
