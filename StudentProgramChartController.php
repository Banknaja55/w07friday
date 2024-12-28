<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentProgramChartController extends Controller
{
    public function index(){
        $studentCount = DB::table('student')
        ->select(DB::raw('count(*) as student_count'),
        DB::raw('program.pgm_name as program_name'))
        ->join('program','student.std_pgm_id','=','program.id')
        ->groupBy('program_name')
        ->pluck('student_count','program_name');
        $labels = $studentCount->keys();
        $data = $studentCount->values();
        return view('student.student_program_chart',compact('labels','data'));
    }
}
