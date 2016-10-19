<?php
// Route for home
Route::get('/', 'PagesController@index');

// Authorisation
Auth::routes();

// Routes for games
Route::get('games',  'CategoriesController@index');
Route::get('games/{category}',  'CategoriesController@show');
Route::get('games/create',  'CategoriesController@create');
Route::post('games/create',  'CategoriesController@store');
Route::get('games/{category}/delete', 'CategoriesController@delete');
Route::get('games/{category}/edit', 'CategoriesController@edit');
Route::patch('games/{category}', 'CategoriesController@update');

// Routes for news
Route::get('news',  'ArticlesController@index');
Route::get('news/{article}',  'ArticlesController@show');
Route::get('news/create',  'ArticlesController@create');
Route::post('news/create',  'ArticlesController@store');

// Routes for events
Route::get('events',  'EventsController@index');
Route::get('events/{event}',  'EventsController@show');

// Routes for admin
Route::get('admin', 'PagesController@admin');

//Routes for profile
Route::get('profile', 'ProfileController@index');

//Routes for users
Route::get('users', 'UserController@index');