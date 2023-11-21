<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Resources\Student\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class ShowController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Student $student): StudentResource
    {
        $student = $this->service->show($student);
        return new StudentResource($student);
    }
}
