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



Route::get('/admin/users', 'UserController@index')->name('users');

Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');

/*vendors*/
Route::get('add/vendor', 'VendorController@create')->name('add-vendor');
Route::post('create/vendor', 'VendorController@store')->name('create-vendor');
Route::get('list-vendors', 'VendorController@list')->name('list-vendors');
Route::get('buy-online', 'VendorController@vendorsVisibleToPublic')->name('buy-online');
/*vendors*/

/*Brands*/
Route::get('add/brand', 'BrandController@create')->name('add-brand');
Route::post('create/brand', 'BrandController@store')->name('create-brand');
Route::get('list-brands', 'BrandController@list')->name('list-brands');
Route::get('our-roots', 'BrandController@brandsVisibleToPublic')->name('our-roots');
/*Brands*/

/*Recipes*/
Route::get('add/recipe', 'RecipeController@create')->name('add-recipe');
Route::post('create/recipe', 'RecipeController@store')->name('create-recipe');
Route::get('list-recipes', 'RecipeController@list')->name('list-recipes');
/*Recipes*/
Auth::routes();

/*pages*/
Route::get('/', 'PageController@talkToNigeria');
Route::get('/home', 'PageController@talkToNigeria')->name('home');;
Route::get('/logout', 'PageController@logout');
Route::get('talk-to-nigeria', 'PageController@talkToNigeria')->name('talk-to-nigeria');
Route::get('my-uploads', 'PageController@user_uploads')->name('my-uploads');
Route::get('fan-uploads', 'PageController@fan_uploads')->name('fan-uploads');
Route::post('upload-media','PageController@upload')->name('upload-media');
Route::get('upload-successful','PageController@successfullUpload')->name('upload-successful');
/*pages*/


Route::get('published-videos', 'ModerationController@get_published')->name('published-videos');
Route::get('unpublished-videos', 'ModerationController@get_unpublished')->name('unpublished-videos');
Route::get('rejected-videos', 'ModerationController@get_rejected')->name('rejected-videos');
Route::post('moderate', 'ModerationController@moderation_action')->name('moderate');
