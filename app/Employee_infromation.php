<?php

namespace leave;

use Illuminate\Database\Eloquent\Model;

class Employee_infromation extends Model
{
  protected $fillable = ['pf_number', 'national_id', 'first_name', 'middle_name', 'last_name', 'department', 'designation', 'mobile', 'email'];

  public function granted_leaves() {
    return $this->hasMany('leave\Granted_leave');
  }

  public function leave_requests() {
    return $this->hasMany('leave\Leave_request');
  }

  public function recalled_leaves() {
    return $this->hasMany('leave\Recalled_leave');
  }
}
