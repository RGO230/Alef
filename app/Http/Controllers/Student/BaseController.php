<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Services\Student\StudentService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __construct(
        public StudentService $service,
    ) {}
}
