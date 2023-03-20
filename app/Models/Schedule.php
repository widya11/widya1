<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'start_time',
        'end_time',
        'courses_id',
        'lecturers_id',
    ];
    
    public function course()
    {
        return $this->belongsTo(Course::class, 'courses_id', 'id');
    }

    public function lecture()
    {
        return $this->belongsTo(Lecture::class, 'lecturers_id', 'id');
    }
    
}
