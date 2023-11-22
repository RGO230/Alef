<?php

namespace App\Http\Resources\Curriculum;

use App\Http\Resources\Classroom\ClassroomResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CurriculumResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'        => $this->id,
            'classroom' => new ClassroomResource($this->classroom)
        ];
    }
}
