<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Curriculum extends Model
{
    use HasFactory;

    public function lectures ():HasMany
    {
        return $this->hasMany(Lecture::class);
    }
    public function classroom ():BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }
    public function timetables ():HasMany
    {
        return $this->hasMany(Timetable::class);
    }
}
