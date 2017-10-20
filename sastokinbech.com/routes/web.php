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


Route::get('/',[
	'uses' =>  'DashboardController@home',
	'as' => 'dashbaord'

]);
Route::get('/dashboard/{id}/getaddbycategory','DashboardController@getaddbycategory');
Route::get('/dashboard/{data}/{id}/getaddbysubcategory','DashboardController@getaddbysubcategory');
Route::get('/dashboard/getdeatails/{id}','DashboardController@getadddetails');
Route::get('/dashboard/faq','DashboardController@faq');



//========= Crediantenls rigister/validation Route ==============/
Route::get('/user/getsignup', [
	'uses'=> 'UserController@getsignup',
	'as' => 'user.getsignup'
]);

Route::post('/user/postsignup', [
	'uses'=> 'UserController@postSignup',
	'as' => 'user.postsignup'
]);
Route::post('/user/postlogin','UserController@postLogin');
Route::get('/user/getlogin',[
	'uses' => 'UserController@getLogin',
	'as' => 'user.getlogin'
]);




Route::get('/signout', [
	'uses'=> 'UserController@signout',
	'as' => 'user.signout'
]);


//========== User Toute =================//
Route::get('/user', [
	'uses'=> 'UserController@user',
	'as' => 'user.user'
]);

Route::get('/user/{id}/editProfile','UserController@editProfile');
Route::post('/user/updateProfile','UserController@updateProfile');
Route::get('/user/browseImage/{id}','UserController@browseimage');
Route::post('/user/updateProfileImage','UserController@edit_profile_image');




//========== Adds Route ============//
Route::get('view_adds', [
	'uses'=> 'AddsController@viewAdds',
	'as' => 'adds.view_adds'
]);
Route::get('createadds', [
	'uses'=> 'AddsController@createadds',
	'as' => 'adds.createadds'
]);
Route::post('post_adds', [
	'uses'=> 'AddsController@postadds',
	'as' => 'adds.postadds'
]);
Route::get('/Adds/{id}/edit','AddsController@edit');
Route::post('/Adds/update/{id}','AddsController@update');
Route::get('/Adds/delete/{id}','AddsController@delete');

