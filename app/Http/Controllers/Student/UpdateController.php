<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\UpdateStudentReqeust;
use App\Http\Resources\Student\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateStudentReqeust $request, Student $student):StudentResource
    {
        $data = $request->validated();
        $student = $this->service->update($data, $student);
        return new StudentResource($student);
    }
}
