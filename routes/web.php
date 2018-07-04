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

Route::get('/', array('as' => 'login', 'uses' => function(){
    return view('index');
}));
Route::get('auth/twitter', 'Auth\SocialAuthController@redirectToProvider');
Route::get('auth/twitter/callback', 'Auth\SocialAuthController@handleProviderCallback');
Route::get('auth/twitter/logout', 'Auth\SocialAuthController@logout');
Route::get('home', array('as' => 'home', 'uses' => function(){
    if(!Auth::check()){
        return redirect()->route("login");
    }
    return view('home');
}));

Route::get('kiyaku', function () {
    return view('kiyaku');
});

Route::get('privacy', function () {
    return view('privacy');
});