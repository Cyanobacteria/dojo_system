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
});
*/

Route::get('test2', function (){
     return view('test2');
});





Route::get('test', function () {
    return date("Y-m-d H:i:s");
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');

Route::group(
['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], 
function() {
Route::get('/', 'HomeController@index');
Route::get('article', 'ArticleController@index');
}
);



