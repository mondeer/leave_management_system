<?php

namespace leave;

use Illuminate\Database\Eloquent\Model;

class Recalled_leave extends Model
{
    protected $fillable = ['leave_id', 'employee_id', 'recall_date'];

    public function employee_infromations() {
      return $this->belongsTo('leave\Employee_infromation', 'employee_id');
    }

    public function leave_informations() {
      return $this->belongsTo('leave\Leave_information', 'leave_id');
    }
}
