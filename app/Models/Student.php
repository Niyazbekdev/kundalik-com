<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'course_id',
        'name',
        'year',
        'address',
        'phone',
    ];

    protected $casts = [
        'course_id' => 'integer',
        'year' => 'integer',
    ];

    public function scopeSearch(Builder $builder, $search): void
    {
        $builder->where('name', 'like', "%{$search}%");
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
