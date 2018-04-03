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

Route::get('/','WelcomeController@index');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/client-message', 'ClientController@showSms');
Route::get('/delete-sms/{id}', 'ClientController@deleteSms');
Route::get('/reply-sms/{id}', 'ClientController@editSmsInfo');



Route::get('/add-about', 'AboutController@addAbout');
Route::post('/new-about', 'AboutController@saveAboutInfo');
Route::get('/manage-about', 'AboutController@manageAboutInfo');
Route::get('/view-about/{id}', 'AboutController@viewAboutInfo');
Route::get('/unpublished-about/{id}', 'AboutController@unpublishedAboutInfo');
Route::get('/published-about/{id}', 'AboutController@publishedAboutInfo');
Route::get('/delete-about/{id}', 'AboutController@deleteAboutInfo');
Route::get('/edit-about/{id}', 'AboutController@editAboutInfo');
Route::post('/update-about', 'AboutController@updateAboutInfo');


Route::get('/add-work', 'WorkController@addWork');
Route::post('/new-work', 'WorkController@saveWorkInfo');
Route::get('/manage-work', 'WorkController@manageWorkInfo');
Route::get('/unpublished-work/{id}', 'WorkController@unpublishedWorkInfo');
Route::get('/published-work/{id}', 'WorkController@publishedWorkInfo');
Route::get('/delete-work/{id}', 'WorkController@deleteWorkInfo');
Route::get('/edit-work/{id}', 'WorkController@editWorkInfo');
Route::post('/update-work', 'WorkController@updateWorkInfo');

Route::get('/add-client', 'ClientController@addClient');
Route::post('/new-client', 'ClientController@saveClientInfo');
Route::get('/manage-client', 'ClientController@manageClientInfo');
Route::get('/unpublished-client/{id}', 'ClientController@unpublishedClientInfo');
Route::get('/published-client/{id}', 'ClientController@publishedClientInfo');
Route::get('/delete-client/{id}', 'ClientController@deleteClientInfo');
Route::get('/edit-client/{id}', 'ClientController@editClientInfo');
Route::post('/update-client', 'ClientController@updateClientInfo');

Route::post('/client-sms', 'WelcomeController@ClientSms');









