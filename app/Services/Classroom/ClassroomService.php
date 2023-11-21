<?php


namespace App\Services\Classroom;

use App\Http\Requests\Classroom\ClassroomCreateRequest;
use App\Http\Requests\Student\CreateStudentReqeust;
use App\Http\Requests\Student\UpdateStudentReqeust;
use App\Http\Resources\Student\StudentCollection;
use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Database\Eloquent\Collection;
use PhpParser\Node\Expr\Cast\Bool_;

class ClassroomService
{
    public function index(): Collection
    {
        return Classroom::all();
    }

    public function show(Classroom $classroom): Classroom
    {
        return Classroom::with('students')->where('id', $classroom->id)->first();
    }

    public function create(ClassroomCreateRequest $data): Classroom
    {
        return Classroom::create($data);
    }
    public function update(array $data, Classroom $classroom): Classroom
    {
         $classroom->update($data);
         return $classroom;
    }

    public function delete (Classroom $classroom)
    {
        $classroom->delete();
    }
}
