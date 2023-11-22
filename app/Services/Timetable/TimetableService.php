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
    private function getByClassroom(Classroom $classroom): Timetable
    {
        return Timetable::WhereHas('curriculum.classroom', function ($query) use ($classroom) {
            $query->where('classroom_id', $classroom->id);
        })->first();
    }
    public function updateOrCreate(Classroom $classroom, array $data): Timetable
    {
        $timetable = $this->getByClassroom($classroom);
        $curriculum = Curriculum::updateOrCreate(['classroom_id'=>$classroom->id],['classroom_id'=>$classroom->id]);
        $timetable->updateOrCreate(['curriculum_id' => $curriculum->id, 'lecture_id' => $timetable->lecture_id, 'lecture_queue' => $timetable->lecture_queue], $data);
        return $timetable->with('curriculum')->where('id',$timetable->id)->first();
    }
}
