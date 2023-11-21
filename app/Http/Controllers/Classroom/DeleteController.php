<?php

namespace App\Http\Controllers\Classroom;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DeleteController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Classroom $classroom): JsonResponse
    {
        $this->service->delete($classroom);
        return response()->json([
            "message" => "Класс удалён"
        ]);
    }
}
