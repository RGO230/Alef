<?php

namespace App\Http\Controllers\Lecture;

use App\Http\Controllers\Controller;
use App\Models\Lecture;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Lecture $lecture): JsonResponse
    {
        $this->service->delete($lecture);
        return response()->json([
            "message" => "Лекция удалена"
        ]);
    }
}
