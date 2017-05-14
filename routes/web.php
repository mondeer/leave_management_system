<?php

Route::get('/', function () {
    return view('welcome');
});

// Auth routes

Route::get('/register', 'RegisterCtrl@register');

Route::post('/login', 'LoginCtrl@login');

Route::post('/logout', 'LoginCtrl@logout');

Route::post('/postregister', 'RegisterCtrl@postRegister');

// end of auth routes

// employee routes
Route::get('/leave/apply', 'LeaveCtrl@apply');

Route::post('/leave/apply', 'LeaveCtrl@postApply');

Route::get('/leaves/view', 'LeaveCtrl@view');

Route::get('/leaves/edit/{id}', 'LeaveCtrl@edit');

Route::put('/leaves/edit/{id}', 'LeaveCtrl@update');

// end employee routes

// hr
Route::get('/create/employee', 'HrCtrl@employee');

Route::post('/create/employee', 'HrCtrl@postEmployee');

Route::get('/mtrh/hr', function () {
  return view('hr.home');
});

Route::get('/hr/leaves', 'AdminCtrl@view');

Route::delete('/hr/leave/{id}', 'AdminCtrl@destroy');

Route::delete('/hr/approve/{id}', 'AdminCtrl@approve');

Route::delete('/hr/recall/{id}', 'AdminCtrl@recall');

Route::get('/hr/onleave', 'AdminCtrl@onleave');

// endhr
