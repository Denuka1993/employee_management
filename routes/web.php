<?php

use App\Http\controllers\ViewEmployeeController;
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
    return view('auth.login');
});

Auth::routes();



Route::get('/EmployeeHome', function(){
    return view('EmployeeHome');
});

Route::get('/logout', function(){
    return view('login');
});
Route::get('/AdminHome', function(){
    return view('AdminHome');
});

Route::get('/AssignTask', function () {
    return view('AssignTask');
});

Route::get('/ApplyLeave', function () {
    return view('ApplyLeave');
});

Route::get('/Rate', function () {
    return view('Rate');
});

Route::post('/rate','RateController@ratehere');

Route::get('/LeaveDetails', function () {
    return view('LeaveDetails');
});
Route::get('/LeaveDetails','LeaveController@leaveview');
Route::get('/Approve/{LeaveFormID}','LeaveController@ApproveStatus');
Route::get('/Decline/{LeaveFormID}','LeaveController@DeclineStatus');


Route::get('/LeaveStatus','LeaveController@EmpStatus');
Route::post('/applyleave','LeaveController@apply');

Route::get('/InProgress/{TaskID}','taskController@progress');
Route::get('/CheckProgress','taskController@Adminstatus');
Route::get('/Completed/{TaskID}','taskController@complete');
Route::get('/WorkAssigned','taskController@Employeestatus')->name('WorkAssigned');
Route::post('/addtask','taskController@store');

Route::get('/ViewEmployee','ViewEmployeeController@index')->name('ViewEmployee');
Route::get('/edit-employee/{Employee_ID}','ViewEmployeeController@edit');
Route::put('/update-employee/{Employee_ID}','ViewEmployeeController@update')->name('editEmployee');
Route::get('/delete/{Employee_ID}','ViewEmployeeController@delete');


Route::get('/ViewRate','RateController@RateView')->name('AssignTask');


