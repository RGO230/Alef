<?php

namespace App\Http\Resources\Timetable;

use App\Http\Resources\Curriculum\CurriculumResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TimetableResource extends JsonResource
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
            'curriculum' => new CurriculumResource($this->curriculum),   
        ];
    }
}
