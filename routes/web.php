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

// this return welcome blade file inside views folder
// Route::get('/', function () {
//     return view('pages.home', ['company' => 'Apps lanka software solutions',
//     'tagline' => 'Let us make some innovative applications'

//     ]);
// });

Route::get('/', 'PageController@home');
Route::get('contact', 'PageController@contact');
Route::get('about', 'PageController@about');
Route::get('teams', 'PageController@teams');

Route::resource('posts', 'PostController');


// Route::get('contact', function () {
//     return view('pages.contact');
// });

// Route::get('', function () {
//     return view('pages.about');
// });
