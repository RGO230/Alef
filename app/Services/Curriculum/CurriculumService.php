<?php


namespace App\Services\Curriculum;

use App\Http\Requests\Classroom\ClassroomCreateRequest;
use App\Http\Requests\Student\CreateStudentReqeust;
use App\Http\Requests\Student\UpdateStudentReqeust;
use App\Http\Resources\Student\StudentCollection;
use App\Models\Curriculum;
use App\Models\Classroom;
use App\Models\Timetable;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Collection;
use PhpParser\Node\Expr\Cast\Bool_;

class CurriculumService
{

    public function getForClassController(Classroom $classroom): Curriculum
    {
        return Curriculum::with('lectures')->whereHas('classroom', function($query) use ($classroom){
            $query->where('classroom_id', $classroom->id);
        })->first();
    }

}
