<?php

use App\Http\Controllers\PostController;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

Route::group(['middleware' => 'authCheck'], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::get('/profile', function () {
        return view('profile');
    });
});



// Post Resource
Route::get('/post/trash', [PostController::class, 'trashed'])->name('post.trashed');
Route::get('/post/{id}/restore', [PostController::class, 'restore'])->name('post.restore');
Route::delete('/post/{id}/force-delete', [PostController::class, 'forceDelete'])->name('post.force_delete');
Route::resource('post', PostController::class)->middleware('authCheck2');


// testing middleware
Route::get('/unavailable', function () {
    return view('unavailable');
})->name('unavailable');


Route::get('/send-mail', function () {
    // Mail::raw("Disini aku bikin contoh dari pesan", function ($message) {
    //     $message->to('test@gmail.com')->subject('noreplay');
    Mail::send(new OrderShipped);
    dd('success');
});


Route::get('/get-session', function (Request $request) {
    $data = $request->session()->all();
    dd($data);
});


Route::get('/save-session', function (Request $request) {
    $request->session()->put('user_id', '123');

    return redirect('/get-session');
});

Route::get('/destroy-session', function (Request $request) {
    $request->session()->forget('user_id');
    // session()->flush();
    return redirect('/get-session');
});
