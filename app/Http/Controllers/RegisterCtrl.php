<?php

namespace leave\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class RegisterCtrl extends Controller
{
    public function register() {
      return view('auth.register');
    }

    public function postRegister(Request $request) {
      $user = Sentinel::registerAndActivate([
        'email'=>$request->input('email'),
        'password'=>$request->input('password'),
        'first_name'=>$request->input('first_name'),
        'last_name'=>$request->input('last_name'),
      ]);

      $admin = Sentinel::findRoleBySlug('admin');
      $hr = Sentinel::findRoleBySlug('hr');
      $employee = Sentinel::findRoleBySlug('employee');
      $hod = Sentinel::findRoleBySlug('hod');

      $role = $request->input('role');

      if($role =='admin'){
        $admin->users()->attach($user);
      }
      elseif($request->input('role')=='hr'){
        $hr->users()->attach($user);
      }
      elseif($request->input('role')=='hod'){
        $hod->users()->attach($user);
      }elseif($request->input('role')=='employee') {
        $employee->users()->attach($user);
      }

      return redirect('/');

    }
}
