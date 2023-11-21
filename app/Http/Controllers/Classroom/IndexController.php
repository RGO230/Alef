<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Http\Resources\Classroom\ClassroomCollection;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke():ClassroomCollection
    {
        $students=$this->service->index();
        return new ClassroomCollection($students);
    }
}
