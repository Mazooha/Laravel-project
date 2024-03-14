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
  Route::post('/', \App\Http\Controllers\Page\StoreController::class)->name('page.store');
  Route::get('/{page}/edit', \App\Http\Controllers\Page\EditController::class)->name('page.edit');
  Route::get('/{page}', \App\Http\Controllers\Page\ShowController::class)->name('page.show');
  Route::patch('/{page}', \App\Http\Controllers\Page\UpdateController::class)->name('page.update');
  Route::delete('/{page}', \App\Http\Controllers\Page\DeleteController::class)->name('page.delete');
});

Route::group(['prefix'=> 'news'], function () {
  Route::get('/', \App\Http\Controllers\News\IndexController::class)->name('news.index');
  Route::get('/create', \App\Http\Controllers\News\CreateController::class)->name('news.create');
  Route::post('/', \App\Http\Controllers\News\StoreController::class)->name('news.store');
  Route::get('/{news}/edit', \App\Http\Controllers\News\EditController::class)->name('news.edit');
  Route::get('/{news}', \App\Http\Controllers\News\ShowController::class)->name('news.show');
  Route::patch('/{news}', \App\Http\Controllers\News\UpdateController::class)->name('news.update');
  Route::delete('/{news}', \App\Http\Controllers\News\DeleteController::class)->name('news.delete');
});

Route::group(['prefix'=> 'files'], function () {
  Route::get('/', \App\Http\Controllers\File\IndexController::class)->name('file.index');
  Route::get('/create', \App\Http\Controllers\File\CreateController::class)->name('file.create');
  Route::post('/', \App\Http\Controllers\File\StoreController::class)->name('file.store');
  Route::get('/{file}/edit', \App\Http\Controllers\File\EditController::class)->name('file.edit');
  Route::get('/{file}', \App\Http\Controllers\File\ShowController::class)->name('file.show');
  Route::patch('/{file}', \App\Http\Controllers\File\UpdateController::class)->name('file.update');
  Route::delete('/{file}', \App\Http\Controllers\File\DeleteController::class)->name('file.delete');
});