<?php

namespace leave\Http\Controllers;

use Illuminate\Http\Request;
use leave\Employee_infromation;
use leave\Leave_request;
use leave\Granted_leave;
use Sentinel;
use leave\Leave_information;

class EmpCtrl extends Controller
{
    public function apply() {
      return view('employee.apply');
    }

    public function postApply(Request $request) {
      $apply = new Leave_request();

      $user = Sentinel::getUser();

      $user_mail = Employee_infromation::where('email', $user->email)->get()->first();

      $leave_type = $request->input('leave_type');

      $leave = Leave_information::where('leave_name', $leave_type)->get()->first();

      $status =('pending');

      $apply->employee_id = $user_mail->id;
      $apply->leave_id = $leave->id;
      $apply->start_date = $request->input('start_date');
      $apply->end_date = $request->input('end_date');
      $apply->status = $status;
      $apply->comments = $request->input('comments');
      $apply->save();

      return redirect('/leave/apply');
    }
}
