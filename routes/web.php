<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentReplyController;

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
Route::get('/post',[CommentController::class,'post']);
Route::post('/comment/{post}',[CommentController::class,'store']);
Route::post('comment-reply/{comment}',[CommentReplyController::class,'store']);
Route::get('/', function () {
    return view('welcome');
});
