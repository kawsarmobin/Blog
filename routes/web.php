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

Route::get('/', 'FrontendController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware'=> 'auth'], function() {
  // category...
  Route::get('category/create', 'CategoriesController@create')->name('category.create');
  Route::post('category/store', 'CategoriesController@store')->name('category.store');
  Route::get('categories', 'CategoriesController@index')->name('categories');
  Route::get('category/edit/{id}', 'CategoriesController@edit')->name('category.edit');
  Route::post('category/update/{id}', 'CategoriesController@update')->name('category.update');
  Route::get('category/destroy/{id}', 'CategoriesController@destroy')->name('category.destroy');

  // post...
  Route::get('post/create', 'PostsController@create')->name('post.create');
  Route::post('post/store', 'PostsController@store')->name('post.store');
  Route::get('posts', 'PostsController@index')->name('posts');
  Route::get('post/edit/{id}', 'PostsController@edit')->name('post.edit');
  Route::post('post/update/{id}', 'PostsController@update')->name('post.update');
  Route::get('post/destroy/{id}', 'PostsController@destroy')->name('post.destroy');
  Route::get('posts/trashed', 'PostsController@trashed')->name('posts.trashed');
  Route::get('post/permanently-deleted/{id}', 'PostsController@permanentlyDeleted')->name('post.permanentlyDeleted');
  Route::get('post/restore/{id}', 'PostsController@restore')->name('post.restore');

  // tag...
  Route::get('tag/create', 'TagsController@create')->name('tag.create');
  Route::post('tag/store', 'TagsController@store')->name('tag.store');
  Route::get('tags', 'TagsController@index')->name('tags');
  Route::get('tag/edit/{id}', 'TagsController@edit')->name('tag.edit');
  Route::post('tag/update/{id}', 'TagsController@update')->name('tag.update');
  Route::get('tag/destroy/{id}', 'TagsController@destroy')->name('tag.destroy');

  // user area...
  Route::get('user/create', 'UsersController@create')->name('user.create');
  Route::post('user/store', 'UsersController@store')->name('user.store');
  Route::get('users', 'UsersController@index')->name('users');
  Route::get('user/destroy/{id}', 'UsersController@destroy')->name('user.destroy');
  // profile update...
  Route::get('user/profile', 'ProfilesController@index')->name('user.profile');
  Route::post('user/profile/update', 'ProfilesController@update')->name('user.profile.update');

  // admin permissions...
  Route::get('user/admin/{id}', 'UsersController@admin')->name('user.admin');
  Route::get('user/not-admin/{id}', 'UsersController@notAdmin')->name('user.not.admin');

  // Settings...
  Route::get('settings', 'SettingsController@index')->name('settings');
  Route::post('settings/update', 'SettingsController@update')->name('settings.update');
});
