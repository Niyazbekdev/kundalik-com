<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'name',
        'duration',
        'price',
        'count_student',
    ];

    protected $casts = [
        'user_id' => 'integer',
        'price' => 'integer',
        'count_student' => 'integer',
        'duration' => 'integer'
    ];

    public function scopeSearch(Builder $builder, $search): void
    {
        $builder->where('name', 'like', "%{$search}%");
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'course_student');
    }

    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }
}
