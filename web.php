<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ToolsController;
use App\Http\Controllers\Project_statusController;
use App\Http\Controllers\Project_typeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentProgramChartController;
use App\Http\Controllers\StudentTitleChartController;

Route::get('/welcome', function () {
    return view('welcome');
});
 
Route::get('/bio', function () {
    return view('bio');
});

Route::get('/assignment', function () {
    return view('assignment');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::resource('/title', TitleController::class);

Route::resource('/lecturer', LecturerController::class,);

Route::resource('/program', ProgramController::class);

Route::resource('/tools', ToolsController::class);

Route::resource('/project_status', Project_statusController::class);

Route::resource('/project_type', Project_typeController::class);

Route::resource('/student', StudentController::class);

Route::get('student-program-chart',[StudentProgramChartController::class,'index']);

Route::get('student-title-chart',[StudentTitleChartController::class,'index']);