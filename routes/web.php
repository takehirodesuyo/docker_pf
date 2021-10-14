<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// authはlaravelbrezzeで作成これが/skillの場合は、ログインしたユーザーしか表示させないと言う設定
Route::middleware(['auth'])->prefix('dog')->group(function() {
    Route::get('/', [DogController::class, 'index'])->name('dog');
    Route::get('/detail/{id}/', [DogController::class, 'detail'])->name('dog.detail');
    Route::get('/new', [DogController::class, 'new'])->name('dog.new');
    Route::post('/create', [DogController::class, 'create'])->name('dog.create');
    // 第二引数の意味調べる->viewのblade.phpのこと
    // なぜ指定されたURLがlocalhost/dog/なのか->prefixで指定されている。
});

require __DIR__.'/auth.php';
