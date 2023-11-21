<?php

namespace App\Http\Controllers\TimeTable;

use App\Http\Controllers\Controller;
use App\Services\Timetable\TimetableService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __construct(
        public TimetableService $service,
    ) {}
}

