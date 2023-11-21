<?php

namespace App\Http\Controllers\Curriculum;

use App\Http\Controllers\Controller;
use App\Services\Curriculum\CurriculumService;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function __construct(
        public CurriculumService $service,
    ) {}
}
