<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
'studentName',
'age',
'class_id'
    ];

public function class(){

    return $this->belongsToMany(SchoolClass::class, 'student_class', 'student_id', 'class_id');
}

}
