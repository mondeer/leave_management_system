<?php

namespace leave;

use Illuminate\Database\Eloquent\Model;

class Granted_leave extends Model
{
    protected $fillable = ['employee_id', 'leave_id', 'start_date', 'end_date'];

    public function employee_infromations() {
      return $this->belongsTo('leave\Employee_infromation', 'employee_id');
    }

    public function leave_infromations() {
      return $this->belongsTo('leave\Leave_information', 'leave_id');
    }
}
