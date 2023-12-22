<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'leave_type',
        'from_date',
        'to_date',
        'reason',
        'status',
        'submit_by',
    ];

    public function student()
    {
        return $this->hasOne('App\User', 'id', 'student_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'submit_by');
    }

}