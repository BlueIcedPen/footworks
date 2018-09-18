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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function()
{
    return View::make('home');
});
Route::get('about', function()
{
    return View::make('pages.about');
});
Route::get('projects', function()
{
    return View::make('pages.projects');
});
Route::get('contact', function()
{
    return View::make('pages.contact');
});
Route::get('faq', function()
{
    return View::make('pages.faq');
});
Route::get('salvation', function()
{
    return View::make('pages.salvation');
});
Route::get('events', function()
{
    return View::make('pages.events');
});
Route::get('give', function()
{
    return View::make('pages.give');
});
