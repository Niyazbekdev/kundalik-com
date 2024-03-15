<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'year',
        'address',
        'phone',
    ];

    protected $casts = [
        'year' => 'integer',
    ];

    public function scopeSearch(Builder $builder, $search): void
    {
        $builder->where('name', 'like', "%{$search}%");
    }

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'course_student');
    }
}
