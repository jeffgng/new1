<?php

use Illuminate\Support\Facades\Route;
use App\http\Controller\Learning;
use App\Http\Controllers\LearningController;

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
    return view('home');
});

Route::get('/word', function () {
    return view('word');
});
Route::get('/gallerie', function () {
    return view('gallerie');
});

Route::get('/upload', function () {
    return view('upload');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/pdf', function () {
    return view('pdf');
});

Route::get('/home', 'App\Http\Controllers\LearningController@home')->name('home');
Route::get('/pdf', 'App\Http\Controllers\LearningController@pdf')->name('pdf');
Route::post('/pdf', 'App\Http\Controllers\LearningController@document')->name('pdf');

Route::GET('/gallerie', 'App\Http\Controllers\LearningController@sauvegard')->name('gallerie');
Route::POST('/gallerie', 'App\Http\Controllers\LearningController@upload')->name('gallerie');

Route::get('/word', 'App\Http\Controllers\LearningController@word')->name('word');

Route::get('/liste', 'App\Http\Controllers\LearningController@liste')->name('liste');
Route::get('edit/{id}', 'App\Http\Controllers\LearningController@edit');
Route::post('update/{id}', 'App\Http\Controllers\LearningController@update');
Route::get('remove/{id}', 'App\Http\Controllers\LearningController@remove');




