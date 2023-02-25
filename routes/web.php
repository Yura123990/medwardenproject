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
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('/');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/teams/messages/{id}', 'App\Http\Controllers\ChatController@ChatView')->name('ChatMessages');

Route::middleware(['auth:sanctum', 'verified'])->post('/teams/messages/{id}', 'App\Http\Controllers\ChatController@SendMessage')->name('SendMessage');
Route::middleware(['auth:sanctum', 'verified'])->post('/teams/messages/delete/{chat_id}/{id}', 'App\Http\Controllers\ChatController@DeleteMessage')->name('DeleteMessage');

Route::middleware(['auth:sanctum', 'verified'])->get('/teams', function() {
    return view('searchteam');
})->name('searchTeam');
Route::middleware(['auth:sanctum', 'verified'])->get('/teams/join/{id}', 'App\Http\Controllers\ChatController@JoinTeam')->name('joinTeam');