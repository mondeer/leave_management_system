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

Auth::routes();

Route::get('/admin', function () {
  return view('hr.home');
});

Route::get('/leave/apply', 'LeaveCtrl@apply');

Route::post('/leave/apply', 'LeaveCtrl@postApply');

Route::get('/leaves/view', 'LeaveCtrl@view');

Route::get('/leaves/edit/{id}', 'LeaveCtrl@edit');

Route::put('/leaves/edit/{id}', 'LeaveCtrl@update');

Route::get('/create/employee', function() {
  return view('hr.newemployee');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/admin/leaves', 'AdminCtrl@view');

Route::delete('/admin/leave/{id}', 'AdminCtrl@destroy');

Route::delete('/admin/approve/{id}', 'AdminCtrl@approve');

Route::delete('/admin/recall/{id}', 'AdminCtrl@recall');

Route::get('/admin/onleave', 'AdminCtrl@onleave');
