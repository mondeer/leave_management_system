<?php

namespace leave\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginCtrl extends Controller
{
    public function login(Request $request) {

      $user = Sentinel::forceAuthenticate($request->all());

      if(Sentinel::getUser()->roles()->first()->slug == 'admin'){
        return redirect('/mtrh/hr');
      } elseif (Sentinel::getUser()->roles()->first()->slug == 'hr') {
        return redirect('/create/employee');
      } elseif (Sentinel::getUser()->roles()->first()->slug == 'hod') {
        return redirect('/admin/leaves');
      } else {
        return redirect('/leave/apply');
      }

    }

    public function logout() {
      Sentinel::logout();

      return redirect('/');
    }
}
