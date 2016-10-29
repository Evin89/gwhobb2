<?php
// Route for home
Route::get('/', 'PagesController@index');

// Authorisation
Auth::routes();

// Routes for games
Route::get('games',  'CategoriesController@index');
Route::get('games/{category}',  'CategoriesController@show');
Route::get('games/create',  'CategoriesController@create')->middleware('auth');
Route::post('games/create',  'CategoriesController@store')->middleware('auth');
Route::get('games/{category}/delete', 'CategoriesController@delete')->middleware('auth');
Route::get('games/{category}/edit', 'CategoriesController@edit')->middleware('auth');
Route::patch('games/{category}', 'CategoriesController@update')->middleware('auth');

// Routes for news
Route::get('news',  'ArticlesController@index');
Route::get('news/{article}',  'ArticlesController@show');
Route::get('news/create',  'ArticlesController@create')->middleware('auth');
Route::post('news/create',  'ArticlesController@store')->middleware('auth');
Route::get('news/{article}/delete', 'ArticlesController@delete')->middleware('auth');
Route::get('news/{article}/edit', 'ArticlesController@edit')->middleware('auth');
Route::patch('news/{article}', 'ArticlesController@update')->middleware('auth');

// Routes for events
Route::get('events',  'EventsController@index');
Route::get('events/{event}',  'EventsController@show');

// Routes for admin
Route::get('admin', 'PagesController@admin')->middleware('auth');

//Routes for profile
Route::get('profile', 'ProfileController@index')->middleware('auth');

//Routes for users
Route::get('users', 'UserController@index')->middleware('auth');
Route::get('users/{user}/delete', 'UserController@delete')->middleware('auth');
Route::	patch('users/{user}', 'UserController@update')->middleware('auth');

// Route for images
Route::get('img/{image}', function($image = null)
{
    $path = storage_path().'/app/img/' . $image;
    if (file_exists($path)) {
        return Response::download($path);
    }
});