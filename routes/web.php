<?php

use App\Events\WebsocketEvent;
use App\Http\Controllers\ChatRoomController;
use App\Http\Controllers\ChatsController;
use Illuminate\Support\Facades\Auth;
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
    broadcast(new WebsocketEvent('some data'));
    return view('welcome');
});

Route::get('/chats',[ChatsController::class,"index"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/messages',[ChatsController::class,"fetchMessages"]);


Route::post('/messages',[ChatsController::class,"sendMessage"]);

Route::get('/rooms',[ChatRoomController::class,"index"]);

Route::post('get-roomsdata',[ChatRoomController::class,"fetchRoomData"]);


Route::get('/chats/{id}',[ChatsController::class,"index"]);
