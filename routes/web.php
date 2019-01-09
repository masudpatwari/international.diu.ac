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


Auth::routes();
Route::GET('/register/agent', 'Auth\RegisterController@showAgentRegistrationForm')->name('register.agent');
Route::POST('/register/agent', 'Auth\RegisterController@registerAgent');


Route::GET('/', 'FrontEndContoller@index')->name('/');
Route::GET('present_students/{page}', 'FrontEndContoller@present_students')->name('student.present');
Route::GET('passed_students/{page}', 'FrontEndContoller@passed_students')->name('student.passed');
Route::GET('campus_life', 'FrontEndContoller@campus_life')->name('campus_life');
Route::GET('gallery', 'FrontEndContoller@gallery')->name('gallery');
Route::GET('virtual_visit', 'FrontEndContoller@virtual_visit')->name('virtual_visit');
Route::GET('why_diu', 'FrontEndContoller@why_diu')->name('why_diu');
Route::GET('contact_us', 'FrontEndContoller@contact_us')->name('contact_us');
Route::GET('faculty/{id}', 'FrontEndContoller@faculty')->name('faculty.show');



Route::GET('/profile', 'ProfileController@show')->name('profile.show');
Route::GET('/profile_edit', 'ProfileController@agent_profile_edit')->name('agent.profile.edit');
Route::PUT('/profile_edit', 'ProfileController@agent_profile_update')->name('agent.profile.update');

Route::resource('agent', 'AgentController');
Route::resource('student', 'StudentsController');
Route::resource('/dashboard', 'DashboardController')->only([
    'index'
]);


/*Route::GET('/inbox', 'MailTicket@inbox')->name('inbox');*/

