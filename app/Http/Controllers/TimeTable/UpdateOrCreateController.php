<?php

namespace App\Http\Controllers\TimeTable;

use App\Http\Controllers\Controller;
use App\Http\Requests\Timetable\TimeTableUpdateOrCreateRequest;
use App\Models\Classroom;
use App\Models\Curriculum;
use App\Models\Timetable;
use Illuminate\Http\Request;

class UpdateOrCreateController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Classroom $classroom, TimeTableUpdateOrCreateRequest $request)
    {
        $data = $request->validated();
        $timetable = $this->service->updateOrCreate($classroom, $data);
        return response()->json($timetable);
    }
}
