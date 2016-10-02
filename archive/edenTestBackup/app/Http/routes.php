<?php

/* ***** MIDDLEWARE ***** */
Route::group(['middleware' => ['web','guest']], function () {
    
});

/****** HOME ******/
Route::get('/', [
   'uses' => 'HomeController@index',
    'as' => 'home',
]);

/****** ALERT ******/
Route::get('/alert', function() {
   return redirect()->route('home')->with('info', 'You have signed up!');
});

/****** SIGNUP ******/
Route::get('/signup', [
    'uses' => 'AuthController@getSignup',
    'as' => 'auth.signup',
    'middleware' => ['guest'],
]);

Route::post('/signup', [
    'uses' => 'AuthController@postSignup',
    'middleware' => ['guest'],
]);

/****** SIGNIN ******/
Route::get('/signin', [
    'uses' => '\eden\Http\Controllers\AuthController@getSignin',
    'as' => 'auth.signin',
]);

Route::post('/signin', [
    'uses' => 'AuthController@postSignin',
]);

/****** SIGNOUT ******/
Route::get('/signout', [
    'uses' => 'AuthController@getSignout',
    'as' => 'auth.signout',
]);

/****** SEARCH ******/
Route::get('/search', [
    'uses' => 'SearchController@getResults',
    'as' => 'search.results',
]);

/****** PROFILE ******/
Route::get('/user/{username}', [
    'uses' => 'ProfileController@getProfile',
    'as' => 'profile.index',
]);

Route::get('/profile/edit', [
    'uses' => 'ProfileController@getEdit',
    'as' => 'profile.edit',
    'middleware' => ['auth'],
]);

Route::post('/profile/edit', [
    'uses' => 'ProfileController@postEdit',
    'middleware' => ['auth'],
]);

/****** FRIENDS ******/
Route::get('/friends}', [
    'uses' => 'FriendController@getIndex',
    'as' => 'friends.index',
    'middleware' => ['auth'],
]);
Route::get('/friends/add/{username}', [
    'uses' => 'FriendController@getAdd',
    'as' => 'friends.add',
    'middleware' => ['auth'],
]);
Route::get('/friends/accept/{username}', [
    'uses' => 'FriendController@getAccept',
    'as' => 'friends.accept',
    'middleware' => ['auth'],
]);

/****** STATUS ******/
Route::post('/status', [
    'uses' => 'StatusController@postStatus',
    'as' => 'status.post',
    'middleware' => ['auth'],
]);

Route::post('/status/{statusId}/reply', [
    'uses' => 'StatusController@postReply',
    'as' => 'status.reply',
    'middleware' => ['auth'],
]);