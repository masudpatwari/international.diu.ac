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
Auth::routes(['verify' => true]);
Route::GET('/register/agent', 'Auth\RegisterController@showAgentRegistrationForm')->name('register.agent');
Route::POST('/register/agent', 'Auth\RegisterController@registerAgent')->name('register.agent');

Route::GET('present_students/{page}', 'FrontEndController@present_students')->name('student.present');
Route::GET('passed_students/{page}', 'FrontEndController@passed_students')->name('student.passed');
Route::GET('campus_life', 'FrontEndController@campus_life')->name('campus_life');
Route::GET('gallery', 'FrontEndController@gallery')->name('gallery');
Route::GET('virtual_visit', 'FrontEndController@virtual_visit')->name('virtual_visit');
Route::GET('why_diu', 'FrontEndController@why_diu')->name('why_diu');
Route::GET('contact_us', 'FrontEndController@contact_us')->name('contact_us');
Route::GET('faculty/{id}', 'FrontEndController@faculty')->name('faculty.show');


Route::POST('/ticket', 'MailTicketController@make_ticket')->name('ticket.create');

Route::group(['middleware' => ['Logged_in']], function () {
    Route::GET('/profile', 'ProfileController@show')->name('profile.show');
    Route::GET('/profile/edit', 'ProfileController@edit')->name('profile.edit');
    Route::PUT('/profile/edit/agent', 'ProfileController@agent_profile_update')->name('agent.profile.update');
    Route::PUT('/profile/edit/student', 'ProfileController@student_profile_update')->name('student.profile.update');

    Route::resource('agent', 'AgentController');
    Route::resource('student', 'StudentController');
    Route::resource('admitted', 'MoveStudentController');
    Route::resource('/dashboard', 'DashboardController')->only([
        'index'
    ]);


    Route::GET('employee', 'EmployeeController@index')->name('employee.index');
    Route::POST('employee', 'EmployeeController@index')->name('employee.search');
    Route::GET('employee/{id}', 'EmployeeController@show')->name('employee.show');
    Route::POST('employee/{id}', 'EmployeeController@update')->name('employee.store');
    Route::DELETE('employee/{id}', 'EmployeeController@destroy')->name('employee.delete');


    Route::GET('documents', 'DocumentsController@index')->name('documents.index');
    Route::POST('documents', 'DocumentsController@index')->name('documents.search');
    Route::GET('documents/{id}', 'DocumentsController@show')->name('documents.show');
    Route::GET('documents/{id}/pdf', 'DocumentsController@pdf')->name('documents.pdf');


    Route::resource('erp', 'ErpController');
    Route::POST('erp/search', 'ErpController@index')->name('erp.search');


    Route::GET('/move_to/{id}/step_one', 'MoveStudentController@move_to_step_one')->name('admitted.move_to_step_one');
    Route::GET('/move_to/{id}/{batch_id}/step_two', 'MoveStudentController@move_to_step_two')->name('admitted.move_to_step_two');
    Route::POST('/move_to/{id}/{batch_id}/confirm', 'MoveStudentController@move_to_confirm')->name('admitted.move_to_confirm');

    Route::GET('/ticket', 'MailTicketController@index')->name('ticket.index');
    Route::GET('/ticket/{id}', 'MailTicketController@show')->name('ticket.show');
    Route::POST('/ticket/{id}/answer', 'MailTicketController@make_ticket_answer')->name('ticket.answer');
});

