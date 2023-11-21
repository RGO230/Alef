<?php

namespace App\Http\Controllers\Lecture;

use App\Http\Controllers\Controller;
use App\Services\Lecture\LectureService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __construct(
        public LectureService $service,
    ) {}
}
