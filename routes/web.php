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

Route::GET('/', 'FrontEndController@index')->name('/');
Auth::routes();
Route::GET('/register/agent', 'Auth\RegisterController@showAgentRegistrationForm')->name('register.agent');
Route::POST('/register/agent', 'Auth\RegisterController@registerAgent');

Route::GET('present_students/{page}', 'FrontEndController@present_students')->name('student.present');
Route::GET('passed_students/{page}', 'FrontEndController@passed_students')->name('student.passed');
Route::GET('campus_life', 'FrontEndController@campus_life')->name('campus_life');
Route::GET('gallery', 'FrontEndController@gallery')->name('gallery');
Route::GET('virtual_visit', 'FrontEndController@virtual_visit')->name('virtual_visit');
Route::GET('why_diu', 'FrontEndController@why_diu')->name('why_diu');
Route::GET('contact_us', 'FrontEndController@contact_us')->name('contact_us');
Route::GET('faculty/{id}', 'FrontEndController@faculty')->name('faculty.show');


Route::POST('/ticket', 'MailTicket@make_ticket')->name('ticket.create');

Route::group(['middleware' => ['Logged_in']], function () {
    Route::GET('/profile', 'ProfileController@show')->name('profile.show');
    Route::GET('/profile/edit', 'ProfileController@edit')->name('profile.edit');
    Route::PUT('/profile/edit/agent', 'ProfileController@agent_profile_update')->name('agent.profile.update');
    Route::PUT('/profile/edit/student', 'ProfileController@student_profile_update')->name('student.profile.update');

    Route::resource('agent', 'AgentController');
    Route::resource('students', 'StudentsController');
    Route::resource('/dashboard', 'DashboardController')->only([
        'index'
    ]);
    Route::POST('/students.src', 'StudentsController@src_by_reg')->name('students.src_by_reg');
    Route::GET('/move_to/{id}/step_one', 'StudentsController@move_to_step_one')->name('students.move_to_step_one');
    Route::GET('/move_to/{id}/{batch_id}/step_two', 'StudentsController@move_to_step_two')->name('students.move_to_step_two');
    Route::POST('/move_to/{id}/{batch_id}/confirm', 'StudentsController@move_to_confirm')->name('students.move_to_confirm');

    Route::GET('/ticket', 'MailTicket@index')->name('ticket.index');
    Route::GET('/ticket/{id}', 'MailTicket@show')->name('ticket.show');
    Route::POST('/ticket/{id}/answer', 'MailTicket@make_ticket_answer')->name('ticket.answer');
});

