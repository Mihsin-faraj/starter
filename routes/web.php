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

/*
Route::get('/', function () {

    return view('welcome');
    //يجب كتابة الاكواد في controller

    //return view('welcome') -> with('data' , 2);

    //return view('welcome') -> with(['name' => 'moshin', 'age' => 23]);

    $data=[];
    $data['name'] = 'moshin';
    $data['id']= 2;

    return view('welcome', $data);


});
*/
/*
Route::get('index', 'Front\PasingController@passingObject');

Route::get('landing', 'Front\UserController@showLanding');

Route::get('/test1', function () {
    return "welcome";
}) -> name('a');


//route parameters
Route::get('/test2/{id}', function ($id) {
    return $id+5;
}) -> name('b');

Route::get('/test3/{id?}', function ($id) {
    return $id +2;
});


//route name
Route::namespace('Front')->group(function (){

    //route parameters
    Route::get('test1','UserController@showMsg')->name('a');
    Route::get('test2/{id}','UserController@addparameter')->name('b');
    Route::get('test3/{id?}','UserController@addOrNot')->name('c');

    //
    Route::get('users','UserController@showUserName')->name('showName');

});

/*
//prefix route name
Route::namespace('Front') -> prefix('users') -> group(function ()
{
    Route::get('show','UserController@showUserPrefix') -> middleware('auth');
    Route::delete('delete','UserController@showUserPrefix');
    Route::get('edit','UserController@showUserPrefix');
    Route::put('update','UserController@showUserPrefix');

});
*/

/*
Route::get('users/show','UserController@showUserPrefix');
Route::delete('users/delete','UserController@showUserPrefix');
Route::get('users/edit','UserController@showUserPrefix');
Route::put('users/update','UserController@showUserPrefix');

Route::get('login', function(){
    return 'Login';
}) -> name('login');

//middleware
Route::group(['prefix' => 'users', 'middleware' => 'auth'], function(){

    Route::get('/' , function(){
        return 'Login';
    });

});

Route::namespace('Front')->  group(function(){
   Route::get('offers/show', 'SecondController@show1');
});

Route::resource('news', 'NewsController');
*/


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')-> middleware('verified');


