<?php

namespace leave\Http\Controllers;

use Illuminate\Http\Request;
use leave\Leave;
use leave\Approve;

class AdminCtrl extends Controller
{
    public function view() {
      $leaves = Leave::all();

      return view('hr.leaves')->with('leaves', $leaves);
    }

    public function destroy($id) {
      $leave = Leave::find($id);

      $leave->delete();

      return redirect('/admin/leaves');
    }

    public function approve($id) {
      $leave = Leave::find($id);

        $approves = array(
       'f_name'=>$leave->f_name,
       'l_name'=>$leave->l_name,
       'pf_number'=>$leave->pf_number,
       'leave_days'=>$leave->leave_days,
       );

      Approve::insert($approves);

      $leave->delete();

      return redirect('/admin/leaves');
    }

    public function recall($id) {
      $onleave = Approve::find($id);

        $approves = array(
       'f_name'=>$onleave->f_name,
       'l_name'=>$onleave->l_name,
       'pf_number'=>$onleave->pf_number,
       'leave_days'=>$onleave->leave_days,
       );

      Leave::insert($approves);

      $onleave->delete();

      return redirect('/admin/leaves');
    }

    public function onleave() {
      $onleaves = Approve::all();

      return view('hr.onleave')->with('onleaves', $onleaves);
    }
}
