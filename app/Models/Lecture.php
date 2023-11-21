<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lecture extends Model
{
    use HasFactory;

    public function cirricula():HasMany
    {
        return $this->hasMany(Curriculum::class);
    }
    public function timetable(): BelongsTo
    {
        return $this->belongsTo(Timetable::class);
    }
}
