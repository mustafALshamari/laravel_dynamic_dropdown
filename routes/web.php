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
    return view('register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/**
 * the route below to show the oblasts once 
 * you enter the register page 
 * so the user is able to choose the
 * region he needs ,after that the dependent 
 * selections comes after
 */
Route::get('/', 'DynamicDependentController@oblast');


/**
 * 
 * The two routes below for ajax request
 * returing the dependent result 
 */
Route::get('/gorod/search', 'DynamicDependentController@grabGorodFromOblast');
Route::get('/raion/search', 'DynamicDependentController@grabRaionFromGorad');



Route::post('/register', 'RegisterationController@register');