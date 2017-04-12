<?php

namespace leave\Http\Controllers;

use Illuminate\Http\Request;
use leave\Leave;

class LeaveCtrl extends Controller
{
    public function apply() {
      return view('employee.apply');
    }

    public function postApply(Request $request) {
      $leaves = new Leave;

      $leaves->f_name = $request->input('f_name');
      $leaves->l_name = $request->input('l_name');
      $leaves->pf_number = $request->input('pf_number');
      $leaves->leave_days = $request->input('leave_days');
      $leaves->save();

      return redirect('/leaves/view')->with('leaves', $leaves);
    }

    public function view() {
      $leaves = Leave::all();

      return view('employee.view')->with('leaves', $leaves);
    }

    public function edit($id) {
      $leaves = Leave::find($id);

      return view('employee.edit')->with('leaves', $leaves);
    }

    public function update(Request $request, $id) {
      $leaves = Leave::find($id);

      $leaves->leave_days = $request->input('leave_days');
      $leaves->save();

      return redirect('/leaves/view')->with('leaves', $leaves);
    }
}
