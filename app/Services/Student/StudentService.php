<?php


namespace App\Services\Student;

use App\Http\Requests\Student\CreateStudentReqeust;
use App\Http\Requests\Student\UpdateStudentReqeust;
use App\Http\Resources\Student\StudentCollection;
use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Database\Eloquent\Collection;
use PhpParser\Node\Expr\Cast\Bool_;

class StudentService
{
    public function index(): Collection
    {
        return Student::all();
    }

    public function show(Student $student): Student
    {
        return Student::with('classroom','classroom.lectures')->where('id', $student->id)->first();
    }

    public function create(CreateStudentReqeust $data): Student
    {
        return Student::create($data);
    }
    public function update(array $data, Student $student): Student
    {
         $student->update($data);
         return $student;
    }

    public function delete (Student $student)
    {
        $student->delete();
    }
}
