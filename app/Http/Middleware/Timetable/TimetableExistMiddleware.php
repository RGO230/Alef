<?php

namespace App\Http\Middleware\Timetable;

use App\Http\Requests\Timetable\TimeTableUpdateOrCreateRequest;
use App\Models\Timetable;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TimetableExistMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle( Request $request, Closure $next): Response
    {
        if((Timetable::where('curriculum_id', '=', $request->input('curriculum_id'))->exists())&&(Timetable::where('lecture_queue', '=', $request->input('lecture_queue'))->exists())){
            return response()->json([
                'message' => 'В это время уже запланирована лекция'
            ]);
        }
        return $next($request);
    }
}
