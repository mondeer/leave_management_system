<?php

namespace leave;

use Illuminate\Database\Eloquent\Model;

class Approve extends Model
{
    protected $fillable=['f_name', 'l_name', 'pf_number', 'leave_days'];
}
