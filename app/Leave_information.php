<?php

namespace leave;

use Illuminate\Database\Eloquent\Model;

class Leave_information extends Model
{
    protected $filable = ['leave_name', 'min_days', 'max_days'];

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
