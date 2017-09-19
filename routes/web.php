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

Route::get('/', 'PagesController@index' );

Route::get('blade', 'PagesController@blade');
Route::get('profile', 'PagesController@profile');
Route::get('settings', 'PagesController@settings');

Route::get('users', ['uses' => 'UserController@index']);
Route::get('users/create', ['uses' => 'UserController@create']);
Route::post('users', ['uses' => 'UserController@store']);

/*
Route::get('users', function(){
    $users = [
        '0' => [
            'fn' => 'renato',
            'ln' => 'chivaz',
            'location' => 'albania'
        ],
        '1' => [
            'fn' => 'JEssy',
            'ln' => 'abaz',
            'location' => 'calabar'
        ] 
    ];
    return $users;
}); */
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
