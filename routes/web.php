<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

/* Todoリスト */
Route::get('/list', [App\Http\Controllers\TodoListController::class, 'index']);

Route::resource('/tasks', App\Http\Controllers\TaskController::class);


/* ブログ */
// edit アクション用のGETメソッドのルート データを参照するのみ（データの編集はしない）
Route::get('/blogs/{id}/edit', [App\Http\Controllers\BlogController::class, 'edit'])->name('blogs.edit');

// update アクション用のPUTメソッドのルート
Route::put('/blogs/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blogs.update');

// Route::resource で残りのルートを生成　※Route::resourceでのeditアクションはGETメソッドのみが許可されるためeditとupdateを除外してresourceとしている：要確認
Route::resource('/blogs', App\Http\Controllers\BlogController::class)->except(['edit']);



