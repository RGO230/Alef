<?php

use App\Http\Controllers\Curriculum\getForClassController;
use App\Http\Controllers\Curriculum\GetForClassController as CurriculumGetForClassController;
use App\Http\Controllers\Curriculum\updateOrCreateController;
use App\Http\Controllers\Student\CreateController;
use App\Http\Controllers\Student\DeleteController;
use App\Http\Controllers\Student\IndexController;
use App\Http\Controllers\Student\ShowController;
use App\Http\Controllers\Student\UpdateController;
use App\Http\Controllers\TimeTable\UpdateOrCreate;
use App\Http\Controllers\TimeTable\UpdateOrCreateController as TimeTableUpdateOrCreateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function () {
    Route::prefix('student')->group(function () {
        Route::get('/', IndexController::class)->name('student.index');
        Route::get('/{student}', ShowController::class)->name('student.show');
        Route::post('/', CreateController::class)->name('student.create');
        Route::put('/{student}', UpdateController::class)->name('student.update');
        Route::delete('/{student}', DeleteController::class)->name('student.delete');
    });
    Route::prefix('classroom')->group(function () {
        Route::get('/', IndexController::class)->name('classroom.index');
        Route::get('/{classroom}', ShowController::class)->name('classroom.show');
        Route::post('/', CreateController::class)->name('classroom.create');
        Route::put('/{classroom}', UpdateController::class)->name('classroom.update');
        Route::delete('/{classroom}', DeleteController::class)->name('classroom.delete');
    });
    Route::prefix('curriculum')->group(function () {
        Route::get('/{classroom}', CurriculumGetForClassController::class)->name('curriculum.forclass');
    });
    Route::prefix('timetable')->group(function () {
        Route::post('/{timetable}', TimeTableUpdateOrCreateController::class)->name('timetable.updateorcreate');
    });
});
