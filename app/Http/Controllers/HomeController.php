<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\announcement;
use App\Models\student;
use App\Models\studyplan;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            return redirect('redirects');
        }
        else
        {
            return view('auth.login');
        }
    }

    public function redirects()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype =='1')
        {
            return view('admin.adminHome');
        }

        else 
        {
            $dataannoun = announcement::all();
            return view('home' , compact('dataannoun'));
        }
    }

    public function studyplan()
    {
        $user = Auth::user()->id;

        $student = Student::where('userid','=', $user)->get();

        $data = DB::table('studyplans')
            ->join('courseclasses', 'courseclasses.classid', '=', 'studyplans.classid')
            ->join('courses', '.courses.courseid', '=', 'courseclasses.courseid')
            ->join('students', 'students.studentid', '=', 'studyplans.studentid')
            ->join('lectures', 'courseclasses.lectid', '=', 'lectures.lectid')
            ->select(
                'courseclasses.classid as classid', 
                'courses.name as cname',
                 'courseclasses.day as day',
                 'students.semester as sem',
                 'lectures.name as lname')
                 ->where('students.userid', '=', $user)
            ->get();
        return view("studyplan" , compact("data" , "student"));
    }

    public function addplan()
    {
        $user = Auth::user()->id;

        $student = Student::where('userid','=', $user)->value('studentid');

        $major = Student::where('studentid','=', $student)->value('majorid');;

        $plan = DB::table('studyplans')
            ->join('courseclasses', 'courseclasses.classid', '=', 'studyplans.classid')
            ->join('courses', '.courses.courseid', '=', 'courseclasses.courseid')
            ->join('students', 'students.studentid', '=', 'studyplans.studentid')
            ->select(
                'courseclasses.classid as classid', 
                'courses.name as cname',
                 'courseclasses.day as day',
                 'courses.semester as sem')
                 ->where('students.studentid', '=', $student)
                 ->WhereNull('studyplans.grade')
            ->get();
        
        $data = DB::table('courseclasses')
            ->join('courses', '.courses.courseid', '=', 'courseclasses.courseid')
            ->select(
                'courseclasses.classid as classid',
                'courses.name as course',
                'courses.majorid',
                'courseclasses.day as day',
                'courses.Semester as semester')
                ->where('courses.majorid', '=' , $major)
                ->orderby('semester')
            ->get();

        return view("addplan" , compact("plan" , "data"));
    }

    public function updateplan(Request $request, $classid)
    {
        $plan    = Str::random(7);
        $user = Auth::user()->id;
        $student = Student::where('userid','=', $user)->value('studentid');
        $cclass = new studyplan;

        $cclass->planid = $plan;
        $cclass->classid = $request->classid;
        $cclass->studentid = $student;

        $cclass->save();

        return redirect()->back();
    }

}
