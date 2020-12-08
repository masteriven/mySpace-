<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\postController;
use App\Http\Controllers\videosController;
use App\Http\Controllers\imagesController;
use App\Http\Controllers\filesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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


Route::get('/Register', function () {
    return view('Register');
});
Route::get('/post', function () {
    return view('post');
});

Route::get('/images', function () {
    return view('images');
});

Route::get('/files',[filesController::class , 'showDownloadLink']);

Route::get('/videos',[videosController::class , 'showAllVideos']);

Route::get('/images',[imagesController::class , 'showAllImages']);

Route::get('/create_post',[postController::class ,'showPostCratePage']);

Route::get('/post/edit/{id}',[postController::class,'editPost']);

Route::post('/create',[postController::class ,'createPost']);

Route::post('/import',[videosController::class, 'saveVideo']);

Route::post('/importImage',[imagesController::class, 'uploadImage']);

Route::post('/importFile',[filesController::class, 'uploadFile']);

Route::post('/searchFile',[filesController::class, 'searchFile']);

Route::put('/changeProfilePhoto',[imagesController::class, 'uploadProfileImage']);

Route::get('/post' ,[postController::class, 'userPost']);

Route::put('/edit', [userController::class, 'updateUserData']);

Route::delete('/delete/{id}', [postController::class, 'deletePost']);

Route::delete('/delete/video/{id}', [videosController::class, 'deleteVideo']);

Route::delete('/delete/image/{id}', [imagesController::class, 'deleteImage']);

Route::put('/edit/{id}', [postController::class, 'updatePost']);

 Route::post('/profile', [userController::class, 'userData']);
