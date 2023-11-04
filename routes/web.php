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

// -- Questionairre --
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/diagnostics/viral', function () {return view('diagnostics.viral');})->name('viral');
    Route::get('/diagnostics/gastroenterological', function () {return view('diagnostics.gastroenterological');})->name('gastroenterological');

    // levellife
    Route::get('/levellife/indexmassbody', 'App\Http\Controllers\levellife\IndexMassBodyController@index')->name('indexmassbody');
    Route::post('/levellife/indexmassbody', 'App\Http\Controllers\levellife\IndexMassBodyController@calculateBMI');

    Route::get('/levellife/nicotin', 'App\Http\Controllers\levellife\NicotinController@index')->name('nicotin');
    Route::post('/levellife/nicotin', 'App\Http\Controllers\levellife\NicotinController@calculateRes');

    Route::get('/levellife/diabetes', 'App\Http\Controllers\levellife\DiabeteController@index')->name('diabetes');
    Route::post('/levellife/diabetes', 'App\Http\Controllers\levellife\DiabeteController@calculateRes');

    Route::get('/levellife/stress', 'App\Http\Controllers\levellife\StressController@index')->name('stress');
    Route::post('/levellife/stress', 'App\Http\Controllers\levellife\StressController@calculateRes');

    Route::get('/levellife/psychoemotional', 'App\Http\Controllers\levellife\PsychoEmotionalController@index')->name('psychoemotional');
    Route::post('/levellife/psychoemotional', 'App\Http\Controllers\levellife\PsychoEmotionalController@calculateRes');

    Route::get('/levellife/lifequality', 'App\Http\Controllers\levellife\LifeQualityController@index')->name('lifequality');
    Route::post('/levellife/lifequality', 'App\Http\Controllers\levellife\LifeQualityController@calculateRes');

    Route::get('/levellife/depression', 'App\Http\Controllers\levellife\DepressionController@index')->name('depression');
    Route::post('/levellife/depression', 'App\Http\Controllers\levellife\DepressionController@calculateRes');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('/');
})->name('dashboard');

// -- Chat --
Route::middleware(['auth:sanctum', 'verified'])->get('/teams/messages/{id}', 'App\Http\Controllers\ChatController@ChatView')->name('ChatMessages');

Route::middleware(['auth:sanctum', 'verified'])->post('/teams/messages/{id}', 'App\Http\Controllers\ChatController@SendMessage')->name('SendMessage');
Route::middleware(['auth:sanctum', 'verified'])->post('/teams/messages/delete/{chat_id}/{id}', 'App\Http\Controllers\ChatController@DeleteMessage')->name('DeleteMessage');

Route::middleware(['auth:sanctum', 'verified'])->get('/teams', function() {
    return view('searchteam');
})->name('searchTeam');
Route::middleware(['auth:sanctum', 'verified'])->get('/teams/join/{id}', 'App\Http\Controllers\ChatController@JoinTeam')->name('joinTeam');
