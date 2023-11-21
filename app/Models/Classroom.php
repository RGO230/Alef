<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Classroom extends Model
{
    use HasFactory;

    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function curriculum():HasOne
    {
        return $this->hasOne(Curriculum::class);
    }

    public function lectures():HasManyThrough
    {
        return $this->HasManyThrough(Lecture::class,Curriculum::class);
    }
    public function timetable():HasOne
    {
        return $this->hasOne(Curriculum::class);
    }
}