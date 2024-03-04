<?php

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

Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::group(['prefix'=> 'pages'], function () {
  Route::get('/', \App\Http\Controllers\Page\IndexController::class)->name('page.index');
  Route::get('/create', \App\Http\Controllers\Page\CreateController::class)->name('page.create');
  Route::post('/', \App\Http\Controllers\Page\StoreController::class)->name('paage.store');
  Route::get('/{page}/edit', \App\Http\Controllers\Page\EditController::class)->name('page.edit');
  Route::get('/{page}', \App\Http\Controllers\Page\ShowController::class)->name('page.show');
  Route::patch('/{page}', \App\Http\Controllers\Page\UpdateController::class)->name('page.update');
  Route::delete('/{page}', \App\Http\Controllers\Page\DeleteController::class)->name('page.delete');
});