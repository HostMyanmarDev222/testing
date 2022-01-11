<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostController2;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\StudentController;
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

Route::get('/posts',[PostController::class,'getAllPost'])->name('post.getallpost');

Route::get('/add-post',[PostController::class,'addPost'])->name('post.add');

Route::post('/add-post',[PostController::class,'addPostSubmit'])->name('post.addsubmit');

Route::get('/posts/{id}',[PostController::class,'getPostById'])->name('post.getpostbyid');

Route::get('/delete-post/{id}',[PostController::class,'deletePost'])->name('post.delete');

Route::get('/edit-post/{id}',[PostController::class,'editPost'])->name('post.edit');

Route::post('/update-post',[PostController::class,'updatePost'])->name('post.update');

Route::get('/inner-join',[PostController::class,'innerJoin'])->name('post.innerjoin');

Route::get('/left-join',[PostController::class,'leftJoin'])->name('post.leftjoin');

Route::get('/right-join',[PostController::class,'rightJoin'])->name('post.rightjoin');

Route::get('/all-posts',[PostController::class,'getAllPostsUsingModel'])->name('post.getallposts');

Route::get('/users',[PaginationController::class,'getAllUser']);

Route::get('/upload',[UploadController::class,'uploadForm']);

Route::post('/upload',[UploadController::class,'uploadFile'])->name('upload.uploadfile');

Route::get('/students',[StudentController::class,'fetchStudents']);

Route::get('/add-post2',[PostController2::class,'addPost']);

Route::post('/create-post2',[PostController2::class,'createPost'])->name('post.create2');

Route::get('/posts2',[PostController2::class,'getPost']);

Route::get('/posts2/{id}',[PostController2::class,'getPostById']);