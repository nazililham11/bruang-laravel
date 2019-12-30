<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function class_schedule()
    {
        return $this->belongsTo(ClassSchedule::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
