<?php

namespace App\Http\Controllers\Lecture;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lecture\CreateLectureRequest;
use App\Http\Resources\Lecture\LectureResource;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(CreateLectureRequest $request): LectureResource
    {
        $data = $request->validated();
        $student = $this->service->create($data);
        return new LectureResource($student);
    }
}
