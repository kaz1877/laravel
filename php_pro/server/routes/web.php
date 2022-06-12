<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('layout');
// });

// Route::get('/post1', function () {
//     return view('post');
// }); 

// Route::get('/top', function () {
//     return view('top');
// });


// 投稿ページを表示
Route::get('/create', [FormController::class,'postpage']);
// 投稿をコントローラーに送信
Route::post('/newpostsend', [FormController::class,'savenew']); 

Route::get('/index',[FormController::class,'index']);

Route::get('/show/{id}',[FormController::class,'show']);