<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffAttendance extends Model
{
    protected $fillable = array('user_id', 'date', 'start_time', 'end_time', 'attendance');
}
