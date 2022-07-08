<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', 'HomeController@index')->name('page.home');
Route::get('/home', 'HomeController@index')->name('page.home');
Route::get('/team', 'AboutController@team')->name('page.about_team');
Route::get('/philosophie', 'AboutController@philosophy')->name('page.about_philosophy');
Route::get('/kontakt', 'ContactController@index')->name('page.contact');
Route::get('/projekte/{slug}', 'ProjectController@listing')->name('page.project_listing');
Route::get('/projekt/{slug}', 'ProjectController@detail')->name('page.project_detail');

Route::get('/newsletter', function () {
  return new App\Mail\Newsletter();
});