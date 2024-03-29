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

Auth::routes(['verify' => true]);

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::post('/postcontact', 'PagesController@postcontact');
Route::get('/courses', 'PagesController@courses');
Route::get('/consulting', 'PagesController@consulting');
Route::get('/webinars', 'PagesController@webinars');

// Middleware for only Admin
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
    Route::get('/adminarea', 'AdminController@index')->name('adminarea');
    Route::get('/adminarea/users', 'AdminController@users')->name('users');
    Route::get('/adminarea/enrolledusers', 'AdminController@enrolledusers');
    Route::get('/adminarea/courses', 'AdminController@courses');
    Route::get('/adminarea/mypages/consulting', 'AdminController@mypages_consulting');
    Route::post('/adminarea/mypages/consulting/{id}', 'AdminController@update_consulting');
    Route::get('/adminarea/addcourse', 'AdminController@addcourse');
    Route::get('/adminarea/profile', 'AdminController@profile');
    Route::post('/adminarea/addcourse', 'AdminController@postcourse');
    Route::delete('/adminarea/courses/{id}', 'AdminController@deletecourse');
    // EDIT Course
    Route::post('/adminarea/editcourse/{id}', 'AdminController@editcourse');
    Route::get('/adminarea/chat', 'AdminController@chat');
    //webinar
    Route::get('/adminarea/webinar', 'WebinarController@index');
    Route::post('/adminarea/webinar', 'WebinarController@create');
    Route::post('/adminarea/start_webinar/{id}', 'WebinarController@addtowebinar');
    Route::get('/adminarea/start_webinar', 'WebinarController@start');
    Route::delete('/adminarea/start_webinar/{id}', 'WebinarController@removemember');
    Route::get('/adminarea/mywebinar', 'WebinarController@mywebinar');
    Route::delete('/adminarea/webinar/{id}', 'WebinarController@deletewebinar');
    // Supports
    Route::get('/adminarea/tickets', 'SupportController@tickets');
    Route::post('/adminarea/tickets/{id}', 'SupportController@solve');
    Route::get('/adminarea/callme', 'SupportController@callme');
    Route::post('/adminarea/callme/{id}', 'SupportController@call');

    // Change Password Adminarea
    Route::get('/adminarea/changepassword', 'AdminController@changepassword');
    Route::post('/adminarea/changepassword','AdminController@passwordchange')->name('passwordchange');

});

// For Member or User
Route::group(['middleware' => 'App\Http\Middleware\MemberMiddleware'], function()
{
    Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
    Route::get('/support', 'SupportController@support')->middleware('verified');
    Route::post('/support', 'SupportController@sendsupport')->middleware('verified');
    Route::post('/callrequest', 'SupportController@callrequest')->middleware('verified');
    Route::get('/profile', 'HomeController@profile')->name('profile');
    Route::post('/courses/{id}', 'EnrollController@enroll')->name('enroll')->middleware('verified');
    // user password change
    Route::get('/changepassword', 'HomeController@changepassworduser')->name('changepassworduser');
    Route::post('/changepassword','HomeController@passwordchangeuser')->name('passwordchangeuser');
});

//Route::get('/adminarea', 'AdminController@index');