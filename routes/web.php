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
use Illuminate\Support\Facades\Route;
// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login/login');
});

Route::post('dashboard','Login\LoginController@postLogin');
Route::get('logout','Login\LoginController@destroy');

Route::group(['middleware' => ['auth']], function () {

Route::get('dashboard', function () {
      return view('admin.dashboard');
    });

//Route::resource('user','UserController');

Route::get('users','User\UserController@getUsers');
Route::get('user/add','User\UserController@addUser');
Route::post('user/add','User\UserController@postaddUser');
Route::get('user/edit/{userid}','User\UserController@editUser');
Route::post('user/edit/{userid}','User\UserController@posteditUser');
Route::any('user/delete/{userid}','User\UserController@destroy');

});

