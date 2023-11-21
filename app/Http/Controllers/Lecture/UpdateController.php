<?php

namespace App\Http\Controllers\Lecture;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lecture\UpdateLectureRequest;
use App\Http\Resources\Lecture\LectureResource;
use App\Models\Lecture;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateLectureRequest $request, Lecture $lecture): LectureResource
    {
        $data = $request->validated();
        $student = $this->service->update($data, $lecture);
        return new LectureResource($student);
    }
}
