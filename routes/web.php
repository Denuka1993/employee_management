<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    
});

Route::get('/index', function () {
    return view('index');
 });

 Route::get('/addEmployee', function () {
    return view('addEmployee');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
