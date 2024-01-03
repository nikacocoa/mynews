<?php

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

Route::get('/', function () {
    return view('welcome');
});

// ニュース関連のルート
use App\Http\Controllers\Admin\NewsController;

Route::middleware(['auth'])->prefix('admin')->group(function () {
    // ニュース作成ページ
    Route::get('news/create', 'Admin\NewsController@add');
    
    // 他のニュース関連のルートもここに追加できます
});

// 以下は認証関連のルートです
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
