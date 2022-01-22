<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceGroup extends Model
{
    use HasFactory;

    public function GroupSchool() {
        return $this->belongsTo(School::class, 'school_id', 'id'); 
    }
    public function GroupStudents() {
        return $this->hasMany(Student::class, 'group_id', 'id'); 
    }
}
