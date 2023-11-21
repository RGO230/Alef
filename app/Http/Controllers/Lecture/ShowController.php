<?php

namespace App\Http\Controllers\Lecture;

use App\Http\Controllers\Controller;
use App\Http\Resources\Lecture\LectureResource;
use App\Models\Lecture;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Lecture $lecture): LectureResource
    {
        $lecture = $this->service->show($lecture);
        return new LectureResource($lecture);
    }
}
