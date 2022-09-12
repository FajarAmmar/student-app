<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class adminController extends Controller
{
    public function studentdata()
    {
        //$data = student::all();

        $data = DB::select('select 
        students.studentid,
        students.name as stdname,
        students.semester,
        students.birth,
        students.address,
        majors.name as mjrname,
        users.email
        from students
        Join majors
        on majors.majorid = students.majorid
        Join users
        on students.userid = users.id');
        
        
        return view("admin.student.studentdata" , compact("data"));
    }

    public function studentplan()
    {
        $data = DB::select('select 
        courseclasses.classid,
        courses.name as csname,
        students.name as stname,
        courseclasses.day
        from studyplans
        Join students
        on studyplans.studentid = students.studentid
        Join courseclasses
        on studyplans.classid = courseclasses.classid
        join courses
        on courses.courseid = courseclasses.courseid 
        order by stname'
    );
        return view("admin.student.studyplan" , compact("data"));
    }
}
