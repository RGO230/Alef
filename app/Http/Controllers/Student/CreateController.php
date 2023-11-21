<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Student\CreateStudentReqeust;
use App\Http\Resources\Student\StudentResource;
use Faker\Provider\Base;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(CreateStudentReqeust $request):StudentResource
    {
        $data = $request->validated();
        $student = $this->service->create($data);
        return new StudentResource($student);
    }
}
