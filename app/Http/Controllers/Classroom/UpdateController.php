<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Http\Requests\Classroom\ClassroomUpdateRequest;
use App\Http\Resources\Classroom\ClassroomResource;
use App\Models\Classroom;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ClassroomUpdateRequest $request, Classroom $classroom):ClassroomResource
    {
        $data = $request->validated();
        $classroom = $this->service->update($data, $classroom);
        return new ClassroomResource($classroom);
    }
}
