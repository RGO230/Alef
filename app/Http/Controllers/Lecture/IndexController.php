<?php

namespace App\Http\Controllers\Lecture;

use App\Http\Controllers\Controller;
use App\Http\Resources\Lecture\LectureCollection;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(): LectureCollection
    {
        $lectures=$this->service->index();
        return new LectureCollection($lectures);
    }
}
