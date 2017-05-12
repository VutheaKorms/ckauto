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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/api/v1/users/{id?}', ['middleware' => 'auth.basic', function($id = null) {
    if ($id == null) {
        $users = App\User::all(array('id', 'name','email', 'password','created_at','active'));
    } else {
        $users = App\User::find($id, array('id', 'name','email', 'password', 'created_at','active'));
    }
    return Response::json(array(
        'error' => false,
        'users' => $users,
        'status_code' => 200
    ));
}]);

Route::group(['middleware' => 'auth.basic'], function () {
    Route::group(array('prefix' => 'api'), function() {
        Route::resource('users', 'UserController',
            array('only' => array('index', 'store', 'destroy')));
    });
});



//Route::put('users','UserController@store');
////// create new user
//Route::post('/api/users/create','UserController@store');

