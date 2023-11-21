<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Http\Resources\Classroom\ClassroomResource;
use App\Models\Classroom;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Classroom $classroom): ClassroomResource
    {
        $classroom = $this->service->show($classroom);
        return new ClassroomResource($classroom);
    }
}
