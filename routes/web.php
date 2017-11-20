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
    return view('home');
});
//Route Admin
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin/post', function () {
    return view('admin.post');
});
Route::get('/admin/contact', function () {
    return view('admin.contact');
});
Route::get('/admin/useradmin', function () {
    return view('admin.useradmin');
});
Route::get('/admin/user', function () {
    return view('admin.user');
});
Route::get('/admin/setting', function () {
    return view('admin.setting');
});
Route::get('/admin/service', function () {
    return view('admin.service');
});

Route::get('/admin/list_post', function () {
    return view('admin.list_post');
});
Route::get('/admin/event', function () {
    return view('admin.event');
});
Route::get('/admin/list_event', function () {
    return view('admin.list_event');
});

//Admin
Auth::routes();
Route::get('/admin', 'HomeController@index')->name('admin');
// Route::get('/admin/post', 'HomeController@index')->name('admin');
// Route::get('/admin/list_post', 'HomeController@index')->name('admin');
// Route::get('/admin/contact', 'HomeController@index')->name('admin');
// Route::get('/admin/setting', 'HomeController@index')->name('admin');
// Route::get('/admin/event', 'HomeController@index')->name('admin');
// Route::get('/admin/list_event', 'HomeController@index')->name('admin');

//Route VueJS
Route::get('/Login', function () {
    return view('home');
});
Route::get('/Register', function () {
    return view('home');
});
Route::get('/AllServices', function () {
    return view('home');
});
Route::get('/Single', function () {
    return view('home');
});
Route::get('/About', function () {
    return view('home');
});
Route::get('/AllLearn', function () {
    return view('home');
});
Route::get('/AllSearch', function () {
    return view('home');
});