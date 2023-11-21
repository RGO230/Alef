<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Http\Requests\Classroom\ClassroomCreateRequest;
use App\Http\Resources\Classroom\ClassroomResource;
use Illuminate\Database\Console\Migrations\BaseCommand;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ClassroomCreateRequest $request):ClassroomResource
    {
        $data = $request->validated();
        $classroom = $this->service->create($data);
        return new ClassroomResource($classroom);
    }
}
