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

Route::get('/', function () {
    return view('welcome');
});
// Locale for changing the language

Route::get('locale', function () {
    return \App::getLocale();
});

Route::get('locale/{locale}', function ($locale) {
    \Session::put('locale', $locale);
    return redirect()->back();
});



Route::view('/hello', 'hello');


Route::group(['prefix'=>'students'], function (){
    Route::get('/create', 'StudentsController@create');
    Route::post('/store',
    [
        'as' => 'students-store',
        'uses' => 'StudentsController@store'
    ]);
    Route::get('/edit/{id}',
        [
            'as' => 'students-edit',
            'uses' => 'StudentsController@edit'
        ]);
    Route::post('/update/{id}',
        [
            'as' => 'students-update',
            'uses' => 'StudentsController@update'
        ]);
    Route::post('/delete/{id}',
        [
            'as' => 'students-delete',
            'uses' => 'StudentsController@destroy'
        ]);
});
