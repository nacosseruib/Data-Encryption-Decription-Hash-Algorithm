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

Route::get('/',                 'IndexController@index')->name('index');


//Auth
Route::group(['/middleware' => ['auth']], function ()
{
    Route::get('/home',                         'HomeController@dashboard')->name('home');
    Route::get('/dashboard',                    'HomeController@dashboard')->name('dashboard');
    Route::post('/process-data',                'HomeController@save')->name('processData');
    Route::get('/check-data/{data?}/{id?}',     'HomeController@checkData');

});

//Auth::routes();
Route::get('/login',      'Auth\AuthenticatedSessionController@createLogin')->name('login');
Route::post('/login',     'Auth\AuthenticatedSessionController@attemptLogin')->name('login');
Route::get('/logout', 	  'Auth\AuthenticatedSessionController@destroy')->name('logout');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
