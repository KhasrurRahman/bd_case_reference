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
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');
Route::get('api/civillist/{id}','HomeController@civillist');
Route::get('api/actlist/{id}','HomeController@actlist');

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>'admin'],function ()
{
    Route::get('dashboard','Dashbordcontroller@index')->name('dashboard');
    Route::resource('maincategory','MainCategoryController');
    Route::resource('civil','CivilController');
    Route::resource('act','actController');
    Route::resource('section','sectionController');
    Route::get('api/dependent-dropdown','ApiController@index');
    Route::get('api/civillist/{id}','ApiController@civillist');
    Route::get('api/get-act-list','ApiController@actlist');
});
