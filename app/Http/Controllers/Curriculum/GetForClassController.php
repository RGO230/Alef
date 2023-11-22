<?php

namespace App\Http\Controllers\Curriculum;

use App\Http\Controllers\Controller;
use App\Http\Resources\Curriculum\CurriculumResource;
use App\Models\Classroom;
use App\Models\Curriculum;
use Illuminate\Http\Request;

class GetForClassController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Classroom $classroom): CurriculumResource
    { 
      $curriculum = $this->service->getForClassController($classroom);
      return new CurriculumResource($curriculum);
    }
}
