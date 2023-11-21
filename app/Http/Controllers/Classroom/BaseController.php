<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Services\Classroom\ClassroomService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __construct(
        public ClassroomService $service,
    ) {}
}
