<?php

namespace leave;

use Illuminate\Database\Eloquent\Model;

class Leave_request extends Model
{
  protected $fillable = ['employee_id', 'leave_id', 'start_date', 'end_date', 'status', 'comments'];

  public function employee_infromations() {
    return $this->belongsTo('leave\Employee_infromation', 'employee_id');
  }

  public function leave_informations() {
    return $this->belongsTo('leave\Leave_information', 'leave_id');
  }

}
