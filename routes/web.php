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
Dynamic user example
*/
/*Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'This is user '.$name.' of id '.$id;
});
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
/*Route::get('/about', function () {
    return view('pages.about');
});*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/categories', 'PagesController@category');

Route::resource('/posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
