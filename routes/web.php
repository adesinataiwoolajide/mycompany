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
Route::get('/', "PageController@index")->name('index');

Route::get('/gallery', "PageController@gallery")->name('gallery.website');


Route::get('/aboutus', "PageController@about")->name('aboutus.website');
Route::get('/careers', "PageController@careers")->name('careers.website');
Route::get('/contactus', "PageController@contact")->name('contact.website');
Route::get('/client', "PageController@client")->name('client.website');
Route::get('/partner', "PageController@partner")->name('partner.website');
Route::get('/portfolio', "PageController@portfolio")->name('portfolio.website');
Route::get('/project', "PageController@project")->name('project.website');
Route::get('/services', "PageController@service")->name('service.website');
Route::get('/team', "PageController@team")->name('team.website');
