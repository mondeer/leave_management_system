<?php

namespace leave\Http\Controllers;

use Illuminate\Http\Request;
use leave\Employee_infromation;
use Sentinel;
use leave\Leave_information;

class HrCtrl extends Controller
{
    public function employee() {
      return view('hr.newemployee');
    }

    public function postEmployee(Request $request) {
      $employee = new Employee_infromation();

      $employee->pf_number = $request->input('pf_number');
      $employee->national_id = $request->input('national_id');
      $employee->first_name = $request->input('first_name');
      $employee->middle_name = $request->input('middle_name');
      $employee->last_name = $request->input('last_name');
      $employee->department = $request->input('department');
      $employee->designation = $request->input('designation');
      $employee->mobile = $request->input('mobile');
      $employee->email = $request->input('email');
      $employee->save();

      $user = Sentinel::registerAndActivate([
        'email'=>$employee->email,
        'password'=>$employee->national_id,
        'first_name'=>$employee->first_name,
        'last_name'=>$employee->last_name,
      ]);

      $empRole = Sentinel::findRoleBySlug('employee');

      $empRole->users()->attach($user);


      return redirect('/mtrh/hr');
    }

    public function leaveTypes() {
      return view('hr.leavetype');
    }

    public function postLeave(Request $request) {
      $leave = new Leave_information();

      $leave->leave_name = $request->input('leave_name');
      $leave->min_days = $request->input('min_days');
      $leave->max_days = $request->input('max_days');
      $leave->save();

      return redirect('/leave/type');
    }

    public function leaveAppplications() {
      $leaves = Leave_request::all();

      return view('hr.leave_applications')->with('leaves', $leaves);
    }
}
