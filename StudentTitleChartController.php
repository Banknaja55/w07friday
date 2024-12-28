<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentTitleChartController extends Controller
{
    public function index(){
        $studentCount = DB::table('student')
        ->select(DB::raw('count(*) as student_count'),
        DB::raw('title.ttl_name as title_name'))
        ->join('title','student.std_ttl_id','=','title.id')
        ->groupBy('title_name')
        ->pluck('student_count','title_name');
        $labels = $studentCount->keys();
        $data = $studentCount->values();
        return view('student.student_title_chart',compact('labels','data'));
    }
}
