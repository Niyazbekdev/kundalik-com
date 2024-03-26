<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'course_id',
        'first',
        'second',
        'thrid',
        'fourth',
        'fifth',
        'sixth',
        'seventh',
        'eighth',
    ];

    protected $casts = [
        'student_id' => 'integer',
        'course_id' => 'integer',
        'first' => 'boolean' ,
        'second' => 'boolean',
        'thrid' => 'boolean' ,
        'fourth' => 'boolean',
        'fifth' => 'boolean' ,
        'sixth' => 'boolean' ,
        'seventh' => 'boolean',
        'eighth' => 'boolean',
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
