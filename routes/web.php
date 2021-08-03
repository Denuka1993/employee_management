<?php

    Route::get('/', function () {
    return view('AdminHome');
    });

    Route::get('/login', function () {
        
    });


    Route::get('/AdminHome', function () {
        return view('AdminHome');
    });

    Route::get('/addEmployee', function () {
        return view('addEmployee');
    });

    Route::get('/ViewEmployee', 'ViewEmployeeController@index')->name('ViewEmployee');


    Route::get('/EmployeeHome', function () {
        return view('EmployeeHome');
    });

    

    Route::post('/saveEmployee', 'addEmployeeController@store');
    Route::post('/saveMessage', 'MessageController@store');

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    ?>
