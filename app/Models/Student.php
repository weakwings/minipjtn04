<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'age',
        'city',
        'address',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function attendances()
    {
        return $this->hasMany(StudentAttendance::class);
    }
}