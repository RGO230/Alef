<?php


namespace App\Services\Timetable;

use App\Http\Requests\Classroom\ClassroomCreateRequest;
use App\Http\Requests\Student\CreateStudentReqeust;
use App\Http\Requests\Student\UpdateStudentReqeust;
use App\Http\Requests\Timetable\TimeTableUpdateOrCreateRequest;
use App\Http\Resources\Student\StudentCollection;
use App\Models\Curriculum;
use App\Models\Classroom;
use App\Models\Timetable;
use Illuminate\Database\Eloquent\Collection;
class TimetableService
{
    private function getByClassroom(Classroom $classroom):Timetable
    {
        return Timetable::WhereHas('curriculum.classroom', function ($query) use ($classroom) {
            $query->where('classroom_id', $classroom->id);
        })->first();
    }
    public function updateOrCreate(Classroom $classroom, TimeTableUpdateOrCreateRequest $request): Timetable
    {
        $timetable = $this->getByClassroom($classroom);
        return $timetable->updateOrCreate(['curriculum_id' => $timetable->curriculum_id, 'lecture_id' => $timetable->lecture_id, 'lecture_queue' => $timetable->lecture_queue], ['lecture_id' => $request->lecture_id, 'lecture_queue' => $request->lecture_queue]);
    }
}
