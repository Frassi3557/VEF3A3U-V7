<?php

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


Route::get('/about', function () {
    return view('verk2/about');
});

Route::get('/bio', function () {
    return view('verk2/bio');
});

Route::get('/photosjobs', function () {
    return view('verk2/photosjobs');
});

/*Route::get('/verk3', function () {
    return view('verk3/books/index');
});*/
//verkefni3
Route::get('/verk3', 'V3Controller@index');
Route::get('/verk3/books/{id}', 'V3Controller@show');
//verkefni5
Route::get('/verk5', 'V5Controller@index');
Route::get('/verk5/person/{id}', 'V5Controller@show');
//verkefni7
Route::get('/verk7', 'V7Controller@index');
Route::get('/verk7/posts/{id}', 'V7Controller@show');
Route::get('/verk7/fighters', 'V7Controller@fighters');
Route::get('/verk7/fighters/upload', 'V7Controller@upload');
Route::post('/verk7/fighterstore', 'V7Controller@store');