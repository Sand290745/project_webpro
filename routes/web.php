<?php

use App\Http\Controllers\AdminArtistController;
use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminCompanyController;
use App\Http\Controllers\AdminGroupController;
use App\Http\Controllers\AdminMusicController;
use App\Http\Controllers\AdminUnitController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\GroupController;
use App\Http\Controllers\User\ArtistController;
use App\Http\Controllers\User\UnitController;
use App\Http\Controllers\LoginController;
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


/* ************** AdminGroup ************** */
Route::redirect('/admin','/admin/group');

Route::get('/admin/group/create', [AdminGroupController::class, 'createForm'])->name('group-create-form');
Route::post('/admin/group/create', [AdminGroupController::class, 'create'])->name('group-create');
Route::get('/admin/group', [AdminGroupController::class, 'list'])->name('group-list');
Route::get('/admin/group/{id}/update', [AdminGroupController::class, 'updateForm'])->name('group-update-form');
Route::post('/admin/group/{id}/update', [AdminGroupController::class, 'update'])->name('group-update');
Route::get('/admin/group/{id}', [AdminGroupController::class, 'detail'])->name('group-detail');
Route::get('/admin/group/{id}/delete', [AdminGroupController::class, 'delete'])->name('group-delete');


/* ************** AdminArtist ************** */
Route::get('/admin/artist', [AdminArtistController::class, 'list'])->name('artist-list');
Route::get('/admin/artist/create', [AdminArtistController::class, 'createForm'])->name('artist-create-form');
Route::post('/admin/artist/create', [AdminArtistController::class, 'create'])->name('artist-create');
Route::get('/admin/artist/{id}/update', [AdminArtistController::class, 'updateForm'])->name('artist-update-form');
Route::post('/admin/artist/{id}/update', [AdminArtistController::class, 'update'])->name('artist-update');
Route::get('/admin/artist/{id}', [AdminArtistController::class, 'detail'])->name('artist-detail');
Route::get('/admin/artist/{id}/unit/add', [AdminArtistController::class, 'addUnitForm'])->name('artist-add-unit-form');
Route::post('/admin/artist/{id}/unit/add', [AdminArtistController::class, 'addUnit'])->name('artist-add-unit');
Route::get('/admin/artist/{id}/unit', [AdminArtistController::class, 'showUnit'])->name('artist-show-unit');
Route::get('/admin/artist/{artistId}/unit/{unitId}/delete', [AdminArtistController::class, 'artistRemove'])->name('artist-unit-remove');
Route::get('/admin/artist/{id}/delete', [AdminArtistController::class, 'delete'])->name('artist-delete');

Route::get('/group/{id}', [GroupController::class, 'detail'])->name('user-group-detail');


/* ************** AdminMusic ************** */
Route::get('/admin/music', [AdminMusicController::class, 'list'])->name('music-list');
Route::get('/admin/music/create', [AdminMusicController::class, 'createForm'])->name('music-create-form');
Route::post('/admin/music/create', [AdminMusicController::class, 'create'])->name('music-create');
Route::get('/admin/music/{id}/update', [AdminMusicController::class, 'updateForm'])->name('music-update-form');
Route::post('/admin/music/{id}/update', [AdminMusicController::class, 'update'])->name('music-update');
Route::get('/admin/music/{id}', [AdminMusicController::class, 'detail'])->name('music-detail');
Route::get('/admin/music/{id}/delete', [AdminMusicController::class, 'delete'])->name('music-delete');


/* ************** AdminUnit ************** */
Route::get('/admin/unit', [AdminUnitController::class, 'list'])->name('unit-list');
Route::get('/admin/unit/create', [AdminUnitController::class, 'createForm'])->name('unit-create-form');
Route::post('/admin/unit/create', [AdminUnitController::class, 'create'])->name('unit-create');
Route::get('/admin/unit/{id}/update', [AdminUnitController::class, 'updateForm'])->name('unit-update-form');
Route::post('/admin/unit/{id}/update', [AdminUnitController::class, 'update'])->name('unit-update');
Route::get('/admin/unit/{id}', [AdminUnitController::class, 'detail'])->name('unit-detail');
Route::get('/admin/unit/{artistId}/unit/{unitId}/delete', [AdminUnitController::class, 'artistRemove'])->name('unit-remove');
Route::get('/admin/unit/{id}/delete', [AdminUnitController::class, 'delete'])->name('unit-delete');

/* ************** AdminCompany ************** */
Route::get('/admin/company', [AdminCompanyController::class, 'list'])->name('company-list');
Route::get('/admin/company/create', [AdminCompanyController::class, 'createForm'])->name('company-create-form');
Route::post('/admin/company/create', [AdminCompanyController::class, 'create'])->name('company-create');
Route::get('/admin/company/{id}/update', [AdminCompanyController::class, 'updateForm'])->name('company-update-form');
Route::post('/admin/company/{id}/update', [AdminCompanyController::class, 'update'])->name('company-update');
Route::get('/admin/company/{id}/delete', [AdminCompanyController::class, 'delete'])->name('company-delete');
Route::get('/admin/company/{id}', [AdminCompanyController::class, 'detail'])->name('company-detail');

/* ************** AdminBlog ************** */
Route::get('/admin/blog', [AdminBlogController::class, 'list'])->name('blog-list');
Route::get('/admin/blog/create', [AdminBlogController::class, 'createForm'])->name('blog-create-form');
Route::post('/admin/blog/create', [AdminBlogController::class, 'create'])->name('blog-create');
Route::get('/admin/blog/{id}/update', [AdminBlogController::class, 'updateForm'])->name('blog-update-form');
Route::post('/admin/blog/{id}/update', [AdminBlogController::class, 'update'])->name('blog-update');
Route::get('/admin/blog/{id}', [AdminBlogController::class, 'detail'])->name('blog-detail');
Route::get('/admin/blog/{id}/delete', [AdminBlogController::class, 'delete'])->name('blog-delete');

/* *********** AdminUser *********** */

Route::get('/admin/user',[AdminUserController::class, 'list'])->name('user-list');
Route::get('/admin/user/create',[AdminUserController::class,'createForm'])->name('user-create-form');
Route::post('/admin/user/create',[AdminUserController::class,'create'])->name('user-create');
Route::get('/admin/user/{email}/update',[AdminUserController::class,'updateForm'])->name('user-update-form');
Route::post('/admin/user/{email}/update',[AdminUserController::class,'update'])->name('user-update');
Route::get('/admin/user/{email}',[AdminUserController::class,'detail'])->name('user-detail');
Route::get('/admin/user/{email}/delete',[AdminUserController::class,'delete'])->name('user-delete');


/* ************** Home ************** */
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::redirect('/', '/home');

/* ************** Unit ************** */
Route::get('/unit/{id}', [UnitController::class, 'detail'])->name('user-unit-detail');


/* ************** Artist ************** */
Route::get('/artist/{id}', [ArtistController::class, 'detail'])->name('user-artist-detail');


/* ************** Blog ************** */
Route::get('/blog/{id}', [BlogController::class, 'detail'])->name('user-blog-detail');


/* *********** Login *********** */
Route::get('/auth/login', [LoginController::class, 'loginForm'])->name('login');
Route::post('/auth/login', [LoginController::class, 'authenticate'])->name('authenticate');
Route::get('/auth/logout', [LoginController::class, 'logout'])->name('logout');

