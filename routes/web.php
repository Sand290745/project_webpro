<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\UnitController;
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

Route::get('/group/{id}',[GroupController::class,'detail'])->name('group-detail');

Route::get('/artist/create',[ArtistController::class,'createForm'])->name('artist-create-form');
Route::post('/artist/create',[ArtistController::class,'create'])->name('artist-create');
Route::get('/artist/{id}/update',[ArtistController::class,'updateForm'])->name('artist-update-form');
Route::post('/artist/{id}/update',[ArtistController::class,'update'])->name('artist-update');
Route::get('/artist/{id}',[ArtistController::class,'detail'])->name('artist-detail');
Route::get('/artist/{id}/unit/add',[ArtistController::class,'addUnitForm'])->name('artist-add-unit-form');
Route::post('/artist/{id}/unit/add',[ArtistController::class,'addUnit'])->name('artist-add-unit');
Route::get('/artist/{id}/unit',[ArtistController::class,'showUnit'])->name('artist-show-unit');

Route::get('/artist/{artistId}/unit/{unitId}/delete',[ArtistController::class,'artistRemove'])->name('artist-unit-remove');
