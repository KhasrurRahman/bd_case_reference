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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('layouts.test');
});



Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');
Route::get('search', 'searchController@search')->name('search');
Route::get('search2', 'searchController@search2')->name('search2');
Route::post('autocomplete', 'searchController@autocomplete')->name('autocomplete');


//home page search
Route::get('civillist/{id}','Frontend\ajaxController@civillist');
Route::get('actlist/{id}','Frontend\ajaxController@actlist');
Route::get('sectionlist/{id}','Frontend\ajaxController@sectionlist');
Route::get('postlist/{id}','Frontend\ajaxController@postlist');

//single_post
Route::get('single/{id}','Frontend\singlepostController@single');

//about page
Route::get('aboutus','HomeController@aboutus');

//contact us
Route::get('contactus','Frontend\contactController@contactus');
Route::post('contactus_save','Frontend\contactController@contactus_save')->name('cotact');



//all admin route
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin'],function ()
{
    Route::get('dashboard','Dashbordcontroller@index')->name('dashboard');
    Route::resource('maincategory','MainCategoryController');
    Route::resource('civil','CivilController');
    Route::resource('act','actController');
    Route::resource('section','sectionController');
    Route::resource('post','postController');
    Route::resource('contact','contactController');




});
