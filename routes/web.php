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
})->name('home');
// Route::get('/{any}', 'userController@getHome')->where('any', '.*')->name('home');
Route::get('/sign_in_page', 'userController@getSignin')->name('signinPage');
//turn to startup details
Route::get('/startup_explanation', 'StartupController@index')->name('startup_explanation');

Route::get('/startup_form', 'StartupController@getStartupForm')->name('startupForm')->middleware('auth');

Route::get('/startup_type', 'StartupController@getStartupType')->name('startup_type')->middleware('auth');

Route::get('/startup_space', 'StartupController@getStartupSpace')->name('startup_space');

Route::get('/accepted', 'StartupController@getaccepted')->name('accepted');

Route::get('/rejected', 'StartupController@getrejected')->name('rejected');

Route::get('/properties', 'StartupController@getproperties')->name('properties');

// Route::get('/', 'userController@getHome')->name('home');
Route::post('/post_startup_form', [
    'uses' => 'StartupController@postStartupForm',
    'as' => 'postStartupForm',
])->middleware('auth');

Route::post('/signin', [
    'uses' => 'userController@postSignIn',
    'as' => 'signin',
]);

Route::get('/signup_page', [
    'uses' => 'userController@signupPage',
    'as' => 'signupPage',
]);

Route::post('/signup', [
    'uses' => 'userController@postSignUp',
    'as' => 'signup',
]);

Route::post('/stored', [
    'uses' => 'StartupController@stored',
    'as' => 'stored',
]);

// Auth::routhes(['verify' => true]);

Route::get('/dashboard', [
    'uses' => 'userController@getDashboard',
    'as' => 'dashboard',
])->middleware('auth');
