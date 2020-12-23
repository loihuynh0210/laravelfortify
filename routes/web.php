<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\LoginController;
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

Route::get('user-pagination', function () {
    return view('admin.users.default');
});

Route::view('admin/post', 'admin.posts.default');
Route::get('admin/post/create', \App\Http\Livewire\Posts\PostCreate::class);
Route::get('admin/post/{slug}', \App\Http\Livewire\Posts\Post::class);


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('login', [LoginController::class, 'create'])->name('admin.login');
    Route::post('login', [LoginController::class, 'store']);

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index']);

    });
});

Route::middleware(['auth:web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
