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

Route::get('/group/{name}',[GroupController::class,'detail'])->name('group-detail');
Route::get('/artist/{name}',[ArtistController::class,'detail'])->name('artist-detail');

Route::get('/artist/{name}',[ArtistController::class,'createForm'])->name('artist-create-form');
Route::post('/artist/{name}',[ArtistController::class,'create'])->name('artist-create');

Route::get('/artist/{name}/update',[ArtistController::class,'updateForm'])->name('artist-update-form');
Route::post('/artist/{name}/update',[ArtistController::class,'update'])->name('artist-update');


Route::get('/artist/{name}/delete',[ArtistController::class,'delete'])->name('artist-delete');
