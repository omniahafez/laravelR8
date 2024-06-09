<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schoolClass extends Model
{
    use HasFactory;
    protected $fillable = [
        'className',
        'teacherName',
    
    ];
    public function students()
    {
        return $this->belongsToMany(Student::class, 'student_class', 'class_id', 'student_id');
    }
}
