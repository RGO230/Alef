<?php

namespace App\Http\Resources\Classroom;

use App\Http\Resources\Curriculum\CurriculumResource;
use App\Http\Resources\Lecture\LectureCollection;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ClassroomResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'         => $this->id,
            'title'      => $this->title,
            'lectures'   => new LectureCollection($this->lectures),
            'curriculum' => new CurriculumResource ($this->curriculum)
        ];
    }
}
