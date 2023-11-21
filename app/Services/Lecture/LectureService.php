<?php


namespace App\Services\Lecture;

use App\Http\Requests\Classroom\ClassroomCreateRequest;
use App\Http\Requests\Lecture\CreateLectureRequest;
use App\Http\Requests\Student\CreateStudentReqeust;
use App\Http\Requests\Student\UpdateStudentReqeust;
use App\Http\Resources\Student\StudentCollection;
use App\Models\Classroom;
use App\Models\Lecture;
use App\Models\Student;
use Illuminate\Database\Eloquent\Collection;
use PhpParser\Node\Expr\Cast\Bool_;

class LectureService
{
    public function index(): Collection
    {
        return Lecture::all();
    }

    public function show(Lecture $lecture): Lecture
    {
        return Lecture::with('classrooms','classrooms.students')->where('id', $lecture->id)->first();
    }

    public function create(CreateLectureRequest $data): Lecture
    {
        return Lecture::create($data);
    }
    public function update(array $data, Lecture $lecture): Lecture
    {
         $lecture->update($data);
         return $lecture;
    }

    public function delete ( Lecture $lecture)
    {
        $lecture->delete();
    }
}
