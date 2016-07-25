<?php

Route::get('/', function () {
    return view('welcome');
});

// Auth routes

Route::get('/register', 'RegisterCtrl@register');

Route::post('/postregister', 'RegisterCtrl@postRegister');



// end of auth routes

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

Route::get('/home', 'HomeController@index');

Route::get('/admin/leaves', 'AdminCtrl@view');

Route::delete('/admin/leave/{id}', 'AdminCtrl@destroy');

Route::delete('/admin/approve/{id}', 'AdminCtrl@approve');

Route::delete('/admin/recall/{id}', 'AdminCtrl@recall');

Route::get('/admin/onleave', 'AdminCtrl@onleave');
