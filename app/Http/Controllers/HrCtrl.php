<?php

namespace leave\Http\Controllers;

use Illuminate\Http\Request;
use leave\Employee_infromation;

class HrCtrl extends Controller
{
    public function employee() {
      return view('hr.newemployee');
    }

    public function postEmployee(Request $request) {
      $employee = new Employee_infromation();

      $employee->pf_number = $request->input('pf_number');
      $employee->first_name = $request->input('first_name');
      $employee->middle_name = $request->input('middle_name');
      $employee->last_name = $request->input('last_name');
      $employee->department = $request->input('department');
      $employee->designation = $request->input('designation');
      $employee->mobile = $request->input('mobile');
      $employee->email = $request->input('email');
      $employee->save();

      dd($employee);
    }
}
