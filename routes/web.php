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

Route::get('/jurnal-data', 'ScrappedController@jurnalDataIndex');
Route::get('/jurnal-index', 'ScrappedController@jurnalIndexIndex');
Route::get('/nav', 'ScrappedController@navIndex');
Route::get('/sinta-score', 'ScrappedController@sintaScoreIndex');
Route::get('/scopus-score', 'ScrappedController@scopusScoreIndex');
Route::get('/website', 'ScrappedController@websiteIndex');
