<?php

namespace App\Models;

use App\Http\Requests\Timetable\TimeTableUpdateOrCreateRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Timetable extends Model
{
    use HasFactory;

    protected $fillable=[
        'id',
        'lecture_id',
        'lecture_queue',
        'curriculum_id'
    ];
    public function curriculum(): BelongsTo
    {
        return $this->belongsTo(Curriculum::class);
    }

    public function lecture(): HasOne
    {
        return $this->hasOne(Lecture::class);
    }

 
}
