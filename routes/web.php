<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post/trash', [PostController::class, 'trashed'])->name('post.trashed');
Route::get('/post/{id}/restore', [PostController::class, 'restore'])->name('post.restore');
Route::delete('/post/{id}/force-delete', [PostController::class, 'forceDelete'])->name('post.force_delete');

Route::resource('post', PostController::class);

Route::get('/unavailable', function () {
    return view('unavailable');
})->name('unavailable');
